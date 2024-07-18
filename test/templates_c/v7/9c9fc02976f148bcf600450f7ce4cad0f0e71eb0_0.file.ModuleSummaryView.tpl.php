<?php
/* Smarty version 3.1.39, created on 2024-07-16 10:31:29
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Vtiger\ModuleSummaryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66964c01419ca2_53665197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c9fc02976f148bcf600450f7ce4cad0f0e71eb0' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Vtiger\\ModuleSummaryView.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66964c01419ca2_53665197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="recordDetails">
    <?php $_smarty_tpl->_subTemplateRender(vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?>
</div><?php }
}
