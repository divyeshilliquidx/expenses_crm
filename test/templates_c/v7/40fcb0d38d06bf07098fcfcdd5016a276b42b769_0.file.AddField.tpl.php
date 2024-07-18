<?php
/* Smarty version 3.1.39, created on 2024-07-16 10:15:26
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Settings\ModuleBuilder\AddField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6696483e6f6de4_29085343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40fcb0d38d06bf07098fcfcdd5016a276b42b769' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Settings\\ModuleBuilder\\AddField.tpl',
      1 => 1696527861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696483e6f6de4_29085343 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-12 col-md-12 col-sm-12"><div><h3 style="margin-top: 0px;">Add Field</h3></div><form method="POST" action="" id="field_creation"><div class="blockData"><br><?php if ($_GET['field_exists'] == 1) {?><div class="successMessage"><div class="alert alert-danger"><strong>Failed : </strong>Field Name already exists</div></div><br><?php }
if ($_GET['add_field'] == 1) {?><div class="successMessage"><div class="alert alert-success"><strong>Success : </strong>Field Created Successfully</div></div><br><?php }?><div class="block"><hr><table class="table editview-table no-border"><tbody><tr id="module_name" class="module_name"><td class=" fieldLabel"><label>Module Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><select name="module_name" required="" class="col-sm-12"><option value=''><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" ><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Calendar') {
echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></td></tr><tr class="block_name"><td class=" fieldLabel"><label>Block Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><select name="block_name" id="block_name" class="col-sm-12" required=""><option value="">Select Module Name first</option></select></div></td></tr><tr id="field_ui_type"><td class=" fieldLabel"><label>Field Type</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><select name="field_ui_type" required="" class="col-sm-12"><option value="">Select an Option</option><option value="Text_1">Text</option><option value="Decimal_7">Decimal</option><option value="Integer_7">Integer</option><option value="Percent_9">Percent(%)</option><option value="Currency_71">Currency</option><option value="Date_5">Date</option><option value="Email_13" >Email</option><option value="Phone_11">Phone</option><option value="PickList_15">Pick List</option><option value="URL_17">URL</option><option value="Checkbox_56">Checkbox</option><option value="TextArea_21">Text Area</option><option value="MultiSelectComboBox_33">Multi-Select Combo Box</option><option value="SkyPeID_85">SkyPe ID</option><option value="Time_14">Time</option><option value="RelationModule_10">Relation Module</option></select></div></td></tr><tr id="relatedmodule_name"><td class=" fieldLabel"><label>Related Module Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="relatedmodule_name" class="inputElement" required=""></div></td></tr><tr id="label_name"><td class=" fieldLabel"><label>Label Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="label_name" class="inputElement" required=""></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. LBL_FIELDNAME)</div></div></td></tr><tr id="field_name"><td class=" fieldLabel"><label>Field Name</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input type="text" value="" name="field_name" class="inputElement" required=""></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(note! if field type picklist then compalsary add prefix module  eg. modu_fieldname)</div></div></td></tr><tr id="picklist_values"><td class=" fieldLabel"><label>PickList Value</label>&nbsp;<span class="redColor">*</span></td><td class=" fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><textarea type="text" value=""  name="picklist_values" class="inputElement" required="" ></textarea></div><div class=" col-lg-6 col-md-6 col-sm-12"><div class="alert alert-info alert-mini">(eg. a,b,c,d,e)</div></div></td></tr></tbody></table></div><br><div class="modal-overlay-footer clearfix"><div class="row clearfix"><div class="textAlignCenter col-lg-12 col-md-12 col-sm-12 "><button class="btn btn-success saveButton" type="submit" name="button_submit" value="save_field">Save</button>&nbsp;&nbsp;<a href="#" data-dismiss="modal" class="cancelLink">Cancel</a></div></div></div></div></form></div><?php }
}
