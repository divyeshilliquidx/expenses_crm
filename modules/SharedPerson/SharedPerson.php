<?php  include_once "modules/Vtiger/CRMEntity.php";
		    
		    class SharedPerson extends Vtiger_CRMEntity {
			var $table_name = "vtiger_sharedperson";
			var $table_index = "sharedpersonid";
			var $customFieldTable = Array("vtiger_sharedpersoncf", "sharedpersonid");
			var $tab_name = Array("vtiger_crmentity", "vtiger_sharedperson", "vtiger_sharedpersoncf");
			var $tab_name_index = Array("vtiger_crmentity" => "crmid","vtiger_sharedperson" => "sharedpersonid","vtiger_sharedpersoncf" => "sharedpersonid");
			var $list_fields = Array("Shared Person" => Array("sharedperson", "shared_person"),"Assigned To" => Array("crmentity", "smownerid"));
			var $list_fields_name = Array("Shared Person" => "shared_person","Assigned To" => "assigned_user_id",);
			var $list_link_field = "shared_person";
			var $search_fields = Array("Shared Person" => Array("sharedperson", "shared_person"),"Assigned To" => Array("vtiger_crmentity", "assigned_user_id"),);
			var $search_fields_name = Array("Shared Person" => "shared_person","Assigned To" => "assigned_user_id",);
			var $popup_fields = Array("shared_person");
			var $def_basicsearch_col = "shared_person";
			var $def_detailview_recname = "shared_person";
			var $mandatory_fields = Array("shared_person", "assigned_user_id");
			var $default_order_by = "shared_person";
			var $default_sort_order = "ASC";

		    } ?>