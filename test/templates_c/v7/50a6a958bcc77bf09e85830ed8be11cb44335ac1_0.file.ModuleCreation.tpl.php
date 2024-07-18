<?php
/* Smarty version 3.1.39, created on 2024-07-16 10:14:41
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Settings\ModuleBuilder\ModuleCreation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_669648119461d9_77538739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a6a958bcc77bf09e85830ed8be11cb44335ac1' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Settings\\ModuleBuilder\\ModuleCreation.tpl',
      1 => 1692096019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669648119461d9_77538739 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 col-md-12 col-sm-12"><div><h3 style="margin-top: 0px;">Module Creation</h3></div><form method="POST" action="" id="module_creation"><div class="blockData"><br><?php if ($_GET['module_status'] == 1) {?><div class="successMessage"><div class="alert alert-success"><strong>Success : </strong>Module has been Created Successfully</div></div><br><?php }
if ($_GET['is_module_exists'] == 1) {?><div class="infoMessage"><div class="alert alert-info"><strong>Info : </strong>Module already present - choose a different name.</div></div><br><?php }?><div class="block"><hr><table class="table editview-table no-border"><tbody><tr id="module_name" class="module_name"><td class=" fieldLabel"><label>Module Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="module_name" class="inputElement" required=""></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. ModuleName or Modulename)</div></div></td></tr><tr id="parent_module"><td class=" fieldLabel"><label>Parent</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class="col-lg-6 col-md-6 col-sm-12"><select name="parent_module" required="" class="col-sm-12"><option value="">Select an Option</option><option value="MARKETING">MARKETING</option><option value="SALES">SALES</option><option value="SUPPORT">SUPPORT</option><option value="INVENTORY">INVENTORY</option><option value="PROJECT">PROJECT</option><option value="TOOLS">TOOLS</option></select></div></td></tr><tr id="field_ui_type"><td class=" fieldLabel"><label>Field Type</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><select name="field_ui_type" required="" class="col-sm-12"><option value="">Select an Option</option><option value="Text_1">Text</option><option value="Decimal_7">Decimal</option><option value="Integer_7">Integer</option><option value="Percent_9">Percent(%)</option><option value="Currency_71">Currency</option><option value="Date_5">Date</option><option value="Email_13" >Email</option><option value="Phone_11">Phone</option><option value="PickList_15">Pick List</option><option value="URL_17">URL</option><option value="Checkbox_56">Checkbox</option><option value="TextArea_21">Text Area</option><option value="MultiSelectComboBox_33">Multi-Select Combo Box</option><option value="SkyPeID_85">SkyPe ID</option><option value="Time_14">Time</option><option value="RelationModule_10">Relation Module</option></select></div></td></tr><tr id="relatedmodule_name"><td class=" fieldLabel"><label>Related Module Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="relatedmodule_name" class="inputElement" required=""></div></td></tr><tr id="label_name"><td class=" fieldLabel"><label>Label Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="label_name" class="inputElement" required=""></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. LBL_FIELDNAME)</div></div></td></tr><tr id="field_name"><td class=" fieldLabel"><label>Field Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="field_name" class="inputElement" required=""></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. modu_fieldname)</div></div></td></tr><tr id="picklist_values"><td class=" fieldLabel"><label>PickList Value</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><textarea type="text" value=""  name="picklist_values" class="inputElement" required="" ></textarea></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. a,b,c,d,e)</div></div></td></tr></tbody></table></div><br><div class="modal-overlay-footer clearfix"><div class="row clearfix"><div class="textAlignCenter col-lg-12 col-md-12 col-sm-12 "><button class="btn btn-success saveButton" type="submit" name="button_submit" value="module_creation">Save</button>&nbsp;&nbsp;<a href="#" data-dismiss="modal" class="cancelLink">Cancel</a></div></div></div></div></form></div><?php }
}
