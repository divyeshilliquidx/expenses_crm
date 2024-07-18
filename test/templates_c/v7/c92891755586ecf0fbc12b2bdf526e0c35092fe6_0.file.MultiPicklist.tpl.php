<?php
/* Smarty version 3.1.39, created on 2024-07-16 10:19:11
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Vtiger\uitypes\MultiPicklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6696491f7f2bc2_65681736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92891755586ecf0fbc12b2bdf526e0c35092fe6' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Vtiger\\uitypes\\MultiPicklist.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696491f7f2bc2_65681736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\libraries\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE_LIST', explode(' |##| ',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['editablepicklistvalues']);
$_smarty_tpl->_assignInScope('PICKLIST_COLORS', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistColors']);?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="" data-fieldtype="multipicklist"/><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_REQUEST['view'];?>
_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" multiple class="select2" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" data-fieldtype="multipicklist" style='width:210px;height:30px;'<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }
if (php7_count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('CLASS_NAME', "picklistColor_".((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_prefixVariable1);?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value]) {?>class="<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
"<?php }?> <?php if (in_array(Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE_LIST']->value)) {?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php if ($_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value) {?><style type="text/css"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
ob_start();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,' ','_');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('CLASS_NAME', ((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName())."_".$_prefixVariable2);?>.picklistColor_<?php echo $_smarty_tpl->tpl_vars['CLASS_NAME']->value;?>
 {background-color: <?php echo $_smarty_tpl->tpl_vars['PICKLIST_COLORS']->value[$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value];?>
 !important;}<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></style><?php }
}
}
