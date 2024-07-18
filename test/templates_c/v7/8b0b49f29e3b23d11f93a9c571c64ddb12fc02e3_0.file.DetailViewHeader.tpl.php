<?php
/* Smarty version 3.1.39, created on 2023-07-11 14:01:17
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Vtiger\DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad60adebf6b3_43941504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b0b49f29e3b23d11f93a9c571c64ddb12fc02e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Vtiger\\DetailViewHeader.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad60adebf6b3_43941504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
}
