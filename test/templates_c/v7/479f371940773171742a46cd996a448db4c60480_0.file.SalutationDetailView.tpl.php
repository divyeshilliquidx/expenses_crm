<?php
/* Smarty version 3.1.39, created on 2023-07-11 14:01:18
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Vtiger\uitypes\SalutationDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad60ae9cedb7_78009375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '479f371940773171742a46cd996a448db4c60480' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Vtiger\\uitypes\\SalutationDetailView.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad60ae9cedb7_78009375 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);
}
}
