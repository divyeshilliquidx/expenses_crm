/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
Vtiger_Edit_Js("SharedPerson_Edit_Js",{},{
	

	relatedContactElement : false,

	recurringEditConfirmation : false,


	isEvents : function(form) {
		if(typeof form === 'undefined') {
			form = this.getForm();
		}
		var moduleName = form.find('[name="module"]').val();
		if(form.find('.quickCreateContent').length > 0 && form.find('[name="calendarModule"]').val()==='Events') {
			return true;
		}
		if(moduleName === 'Events') {
			return true;
		}
		return true;
	},
	registerRelatedContactSpecificEvents : function(form) {
		var thisInstance = this;
		if(typeof form == "undefined") {
			form = this.getForm();
		}
		form.find('[name="trip_person_list"]').on(Vtiger_Edit_Js.preReferencePopUpOpenEvent,function(e){
			var parentIdElement  = form.find('[name="parent_id"]');
			if(parentIdElement.length <= 0) {
				parentIdElement = form.find('[name="trip_person_list"]');
			}
			var container = parentIdElement.closest('td');
			var popupReferenceModule = jQuery('input[name="popupReferenceModule"]',container).val();

			if(popupReferenceModule == 'Leads' && parentIdElement.val().length > 0) {
				e.preventDefault();
				app.helper.showErrorNotification({message:app.vtranslate('LBL_CANT_SELECT_CONTACT_FROM_LEADS')});
			}
		})
		//If module is not events then we dont have to register events
		if(!this.isEvents(form)) {
			return;
		}
		this.getRelatedContactElement(form).select2({
			 minimumInputLength: 3,
			 ajax : {
				'url' : 'index.php?module=Contacts&action=BasicAjax&search_module=Contacts',
				'dataType' : 'json',
				'data' : function(term,page){
					 var data = {};
					 data['search_value'] = term;
					 var parentIdElement  = form.find('[name="parent_id"]');
					 if(parentIdElement.length > 0 && parentIdElement.val().length > 0) {
						var closestContainer = parentIdElement.closest('td');
						data['parent_id'] = parentIdElement.val();
						data['parent_module'] = closestContainer.find('[name="popupReferenceModule"]').val();
					 }
					 return data;
				},
				'results' : function(data){
					data.results = data.result;
					for(var index in data.results ) {

						var resultData = data.result[index];
						resultData.text = resultData.label;
					}
					return data
				},
				 transport : function(params){
					return jQuery.ajax(params);
				 }
			 },
			 multiple : true,
			 //To Make the menu come up in the case of quick create
			 dropdownCss : {'z-index' : '10001'}
		});

		//To add multiple selected contact from popup
		form.find('[name="trip_person_list"]').on(Vtiger_Edit_Js.refrenceMultiSelectionEvent,function(e,result){
			thisInstance.addNewContactToRelatedList(result,form);
		});

		this.fillRelatedContacts(form);
	},

	addNewContactToRelatedList : function(newContactInfo, form){
		if(form.length <= 0) {
			form = this.getForm();
		}
		 var resultentData = new Array();

			var element =  jQuery('#trip_person_list_display', form);
			var selectContainer = jQuery(element.data('select2').container, form);
			var choices = selectContainer.find('.select2-search-choice');
			choices.each(function(index,element){
				resultentData.push(jQuery(element).data('select2-data'));
			});
			var select2FormatedResult = newContactInfo.data;
			for(var i=0 ; i < select2FormatedResult.length; i++) {
			  var recordResult = select2FormatedResult[i];
			  recordResult.text = recordResult.name;
			  resultentData.push( recordResult );
			}
			element.select2('data',resultentData);
			if(form.find('.quickCreateContent').length > 0) {
				form.find('[name="relatedContactInfo"]').data('value', resultentData);
				var relatedContactElement = this.getRelatedContactElement(form);
				if(relatedContactElement.length > 0) {
					jQuery('<input type="hidden" name="trip_person_listlist" /> ').appendTo(form).val(relatedContactElement.val().split(',').join(';'));
					form.find('[name="trip_person_list"]').attr('name','');
				}
			}
	},

	getRelatedContactElement : function(form) {
		if(typeof form == "undefined") {
			form = this.getForm();
		}
		this.relatedContactElement =  jQuery('#trip_person_list_display', form);
		return this.relatedContactElement;
	},

	/**
	 * Function which will fill the already saved contacts on load
	 */
	fillRelatedContacts : function(form) {
		if(typeof form == "undefined") {
			form = this.getForm();
		}
		var relatedContactValue = form.find('[name="relatedContactInfo"]').data('value');
		for(var contactId in relatedContactValue) {
			var info = relatedContactValue[contactId];
			info.text = info.name;
			relatedContactValue[contactId] = info;
		}
		this.getRelatedContactElement(form).select2('data',relatedContactValue);
	},
	


	registerBasicEvents: function (container) {
		this._super(container);
		this.registerRelatedContactSpecificEvents(container);
	}
})