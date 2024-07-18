<?php
/* Smarty version 3.1.39, created on 2023-07-11 19:19:10
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Vtiger\TransferRecordOwnership.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64adab2e619144_92291267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd958bd2ff8fad905b8165e4a1c2bed82ef007252' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Vtiger\\TransferRecordOwnership.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64adab2e619144_92291267 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<div class="modal-dialog"><div class="modal-content"><form class="form-horizontal" id="changeOwner" name="changeOwner" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="TransferOwnership" /><?php ob_start();
echo vtranslate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><div class="modal-body"><div class="form-group"><label class="col-lg-4 control-label"><?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="col-lg-6"><select multiple class="form-control select2" id="related_modules" data-placeholder="<?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="related_modules[]" data-rule-required="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULES']->value, 'RELATED_MODULE');
$_smarty_tpl->tpl_vars['RELATED_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_MODULE']->value) {
$_smarty_tpl->tpl_vars['RELATED_MODULE']->do_else = false;
if (!in_array($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName'),$_smarty_tpl->tpl_vars['SKIP_MODULES']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relation_id');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('relatedModuleName'));?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group"><label class="col-lg-4 control-label"><?php echo vtranslate('LBL_ASSIGNED_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="col-lg-6"><?php $_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsers());
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroups());
$_smarty_tpl->_assignInScope('CURRENT_USER_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('ACCESSIBLE_USER_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsersForModule($_smarty_tpl->tpl_vars['MODULE']->value));
$_smarty_tpl->_assignInScope('ACCESSIBLE_GROUP_LIST', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroupForModule($_smarty_tpl->tpl_vars['MODULE']->value));?><select class="form-control select2" name="transferOwnerId" id="transferOwnerId"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OWNER_ID']->value) {?> selected <?php }
if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_USER_LIST']->value)) {?> data-recordaccess=true <?php } else { ?> data-recordaccess=false <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
'<?php if (array_key_exists($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['ACCESSIBLE_GROUP_LIST']->value)) {?> data-recordaccess=true <?php } else { ?> data-recordaccess=false <?php }?> ><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div><?php }
}
