<?php
/* Smarty version 3.1.39, created on 2023-07-11 16:22:17
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Import\Import_Saved_Maps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad81b9106c51_39938018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b2890565b46063454654aefcf6a1bb14a7ffca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Import\\Import_Saved_Maps.tpl',
      1 => 1689083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad81b9106c51_39938018 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row" style = "margin-bottom: 10px">
    <div class = "form-group">
        <div class = "col-lg-2" style="margin-top:8px">
            <label class ="control-label" for="saved_maps"><?php echo vtranslate('LBL_USE_SAVED_MAPS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
        </div>
        <div class="col-lg-4">
            <select name="saved_maps" id="saved_maps" class="select2 form-control" onchange="Vtiger_Import_Js.loadSavedMap();">
                <option id="-1" value="" selected>--<?php echo vtranslate('LBL_SELECT_SAVED_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
--</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SAVED_MAPS']->value, '_MAP', false, '_MAP_ID');
$_smarty_tpl->tpl_vars['_MAP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_MAP_ID']->value => $_smarty_tpl->tpl_vars['_MAP']->value) {
$_smarty_tpl->tpl_vars['_MAP']->do_else = false;
?>
                    <option id="<?php echo $_smarty_tpl->tpl_vars['_MAP_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getStringifiedContent();?>
"><?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getValue('name');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div id="delete_map_container" class ="col-lg-1" style="display:none; margin-top: 10px">
            <a class="glyphicon glyphicon-trash cursorPointer" onclick="Vtiger_Import_Js.deleteMap('<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
');" alt="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
"></a>
        </div>
    </div>
</div>


<?php }
}
