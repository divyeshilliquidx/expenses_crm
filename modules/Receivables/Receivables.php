<?php  include_once "modules/Vtiger/CRMEntity.php";
		    
		    class Receivables extends Vtiger_CRMEntity {
			var $table_name = "vtiger_receivables";
			var $table_index = "receivablesid";
			var $customFieldTable = Array("vtiger_receivablescf", "receivablesid");
			var $tab_name = Array("vtiger_crmentity", "vtiger_receivables", "vtiger_receivablescf");
			var $tab_name_index = Array("vtiger_crmentity" => "crmid","vtiger_receivables" => "receivablesid","vtiger_receivablescf" => "receivablesid");
			var $list_fields = Array("Person Name" => Array("receivables", "person_name"),"Assigned To" => Array("crmentity", "smownerid"));
			var $list_fields_name = Array("Person Name" => "person_name","Assigned To" => "assigned_user_id",);
			var $list_link_field = "person_name";
			var $search_fields = Array("Person Name" => Array("receivables", "person_name"),"Assigned To" => Array("vtiger_crmentity", "assigned_user_id"),);
			var $search_fields_name = Array("Person Name" => "person_name","Assigned To" => "assigned_user_id",);
			var $popup_fields = Array("person_name");
			var $def_basicsearch_col = "person_name";
			var $def_detailview_recname = "person_name";
			var $mandatory_fields = Array("person_name", "assigned_user_id");
			var $default_order_by = "person_name";
			var $default_sort_order = "ASC";

		    } ?>