<?php
/* Smarty version 3.1.39, created on 2024-07-16 11:40:03
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Settings\Picklist\ModulePickListDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66965c13d841a5_43628184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b1e17e5a11f654763be96d0e40688a494fde37' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Settings\\Picklist\\ModulePickListDetail.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66965c13d841a5_43628184 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)) {?><label style="padding-top: 40px;"> <b><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
 <?php echo vtranslate('NO_PICKLIST_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
. &nbsp;<?php if (!empty($_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['CREATE_PICKLIST_URL']->value;?>
"><?php echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
</a><?php }?></b></label><?php } else { ?><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="fieldLabel"><strong><?php echo vtranslate('LBL_SELECT_PICKLIST_IN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="col-sm-3 col-xs-3 fieldValue"><select class="select2 inputElement" id="modulePickList" name="modulePickList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_MODEL', false, 'PICKLIST_FIELD');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_FIELD']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><br><?php }
}
}
