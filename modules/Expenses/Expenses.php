<?php include_once "modules/Vtiger/CRMEntity.php";

class Expenses extends Vtiger_CRMEntity
{
	var $table_name = "vtiger_expenses";
	var $table_index = "expensesid";
	var $customFieldTable = array("vtiger_expensescf", "expensesid");
	var $tab_name = array("vtiger_crmentity", "vtiger_expenses", "vtiger_expensescf");
	var $tab_name_index = array("vtiger_crmentity" => "crmid", "vtiger_expenses" => "expensesid", "vtiger_expensescf" => "expensesid");
	var $list_fields = array("Expense Name" => array("expenses", "expense_name"), "Assigned To" => array("crmentity", "smownerid"));
	var $list_fields_name = array("Expense Name" => "expense_name", "Assigned To" => "assigned_user_id", );
	var $list_link_field = "expense_name";
	var $search_fields = array("Expense Name" => array("expenses", "expense_name"), "Assigned To" => array("vtiger_crmentity", "assigned_user_id"), );
	var $search_fields_name = array("Expense Name" => "expense_name", "Assigned To" => "assigned_user_id", );
	var $popup_fields = array("expense_name");
	var $def_basicsearch_col = "expense_name";
	var $def_detailview_recname = "expense_name";
	var $mandatory_fields = array("expense_name", "assigned_user_id");
	var $default_order_by = "expense_name";
	var $default_sort_order = "ASC";

	function save_module($module)
	{

		// 		<pre>Array
// (
//     [__vtrftk] => sid:2ddc7ae1dc48561d706e3a189c52fef44360bcac,1721136914
//     [picklistDependency] => []
//     [module] => Expenses
//     [action] => SaveAjax
//     [expense_name] => bubble planet
//     [location_name] => Wembley
//     [total_expense_amount] => 25
//     [shared_persons] => Array
//         (
//             [0] => Rahul
//             [1] => Gopi
//             [2] => Krupali
//         )

		//     [popupReferenceModule] => Contacts
//     [contactid] => 22739
//     [assigned_user_id] => 1
//     [sourceModule] => Contacts
//     [sourceRecord] => 22739
//     [relationOperation] => true
//     [returnmode] => showRelatedList
//     [returntab_label] => Expenses
//     [returnrecord] => 22739
//     [returnmodule] => Contacts
//     [returnview] => Detail
//     [returnrelatedModuleName] => Expenses
//     [returnrelationId] => 173
//     [app] => MARKETING
//     [currentid] => 22746
// )
		$contactArray = array(
			'Chirag' => 22728,
			'Rahul ' => 22729,
			'Krupali' => 22730,
			'Hetal' => 22731,
			'Chandra' => 22732,
			'Divyesh' => 22739,
			'Gopi' => 22754
		);




		$shared_persons = $_REQUEST['shared_persons'];
		$contactid = $_REQUEST['contactid'];
		$total_expense_amount = $_REQUEST['total_expense_amount'];
		$total_shared_persons = count($shared_persons);
		$amount = $total_expense_amount / $total_shared_persons;
		foreach ($shared_persons as $shared_persons_name) {
			$recordModel = Vtiger_Record_Model::getCleanInstance('Receivables');
			$recordModel->set('mode', '');
			$recordModel->set('person_name', $shared_persons_name);
			$recordModel->set('amount', $amount);
			$recordModel->set('contactid', $contactid);
			$recordModel->save();

			$recordModel2 = Vtiger_Record_Model::getCleanInstance('Payables');
			$recordModel2->set('mode', '');
			$recordModel2->set('person_name', $shared_persons_name);
			$recordModel2->set('amount', $amount);
			$recordModel2->set('contactid', $contactid);
			$recordModel2->set('linkto', $contactArray[$shared_persons_name]);
			$recordModel2->save();
		}
		// echo '<pre>';
		// print_r($_REQUEST);
		// exit;
	}


}


?>