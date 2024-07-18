<?php
/* Smarty version 3.1.39, created on 2023-07-11 16:22:17
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Import\ImportStepThree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad81b90a6aa7_74627635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c9d6d95d9e0cc11fa1decc264867746ac813684' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Import\\ImportStepThree.tpl',
      1 => 1689083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad81b90a6aa7_74627635 (Smarty_Internal_Template $_smarty_tpl) {
?>


<span>
    <h4><?php echo vtranslate('LBL_IMPORT_MAP_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
</span>
<hr>
<div id="savedMapsContainer"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("Import_Saved_Maps.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
<div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("Import_Mapping.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
<div class="form-inline" style="padding-bottom: 10%;">
    <input type="checkbox" name="save_map" id="save_map">&nbsp;&nbsp;<label for="save_map"><?php echo vtranslate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
    &nbsp;&nbsp;<input type="text" name="save_map_as" id="save_map_as" class = "form-control">
</div>
<?php if (!$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value) {?>
	<?php $_smarty_tpl->_assignInScope('IMPORTABLE_FIELDS', $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value);
}
$_smarty_tpl->_subTemplateRender(vtemplate_path("Import_Default_Values_Widget.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('IMPORTABLE_FIELDS'=>$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value), 0, true);
}
}
