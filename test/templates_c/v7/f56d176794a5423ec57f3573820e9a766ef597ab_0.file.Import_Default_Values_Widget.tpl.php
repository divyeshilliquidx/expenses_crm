<?php
/* Smarty version 3.1.39, created on 2023-07-11 16:22:17
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Import\Import_Default_Values_Widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad81b9352290_81485920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f56d176794a5423ec57f3573820e9a766ef597ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Import\\Import_Default_Values_Widget.tpl',
      1 => 1689083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad81b9352290_81485920 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="visibility: hidden; height: 0px;" id="defaultValuesElementsContainer">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?>
	<span id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue_container" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue">
		<?php $_smarty_tpl->_assignInScope('_FIELD_TYPE', $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldDataType());?>
		<?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'multipicklist' || ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Users' && $_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'userRole')) {?>
			<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="select2 inputElement width75per">
            <?php if ($_smarty_tpl->tpl_vars['_FIELD_NAME']->value != 'hdnTaxType') {?> <option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option> <?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getPicklistDetails(), '_PICKLIST_DETAILS');
$_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value) {
$_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value['value'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_PICKLIST_DETAILS']->value['label'],$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'integer') {?>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" value="0" class ="inputElement width75per" />
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'owner' || $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType() == '52') {?>
			<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="select2 inputElement width75per">
				<option value="">--<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
--</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS_LIST']->value, '_NAME', false, '_ID');
$_smarty_tpl->tpl_vars['_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_ID']->value => $_smarty_tpl->tpl_vars['_NAME']->value) {
$_smarty_tpl->tpl_vars['_NAME']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType() == '53') {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS_LIST']->value, '_NAME', false, '_ID');
$_smarty_tpl->tpl_vars['_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_ID']->value => $_smarty_tpl->tpl_vars['_NAME']->value) {
$_smarty_tpl->tpl_vars['_NAME']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			</select>
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'date') {?>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
					data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" class="dateField inputElement width75per" value="" />
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'datetime') {?>
				<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
					   class="inputElement dateField width75per" value="" data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
"/>
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'boolean') {?>
			<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class ="inputElement width75per"/>
		<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value != 'reference') {?>
			<input type="input" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class ="inputElement width75per"/>
		<?php }?>
		</span>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	jQuery(document).ready(function() {
		$('.inputElement .dateField').datepicker();
	});
<?php echo '</script'; ?>
><?php }
}
