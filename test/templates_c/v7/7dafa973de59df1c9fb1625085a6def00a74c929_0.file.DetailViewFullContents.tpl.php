<?php
/* Smarty version 3.1.39, created on 2023-07-11 14:01:21
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Vtiger\DetailViewFullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad60b14c1334_74826655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dafa973de59df1c9fb1625085a6def00a74c929' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Vtiger\\DetailViewFullContents.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad60b14c1334_74826655 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="detailView" method="POST"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></form>
<?php }
}
