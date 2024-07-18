<?php
/* Smarty version 3.1.39, created on 2024-01-23 11:43:26
  from 'C:\xampp8.2\htdocs\vtigercrm75_1\layouts\v7\modules\Vtiger\DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65afa65edefce3_03831023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff2a8d1e53861d7908238b1c48fdf86d2b11254' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\vtigercrm75_1\\layouts\\v7\\modules\\Vtiger\\DetailViewHeader.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65afa65edefce3_03831023 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }
}
