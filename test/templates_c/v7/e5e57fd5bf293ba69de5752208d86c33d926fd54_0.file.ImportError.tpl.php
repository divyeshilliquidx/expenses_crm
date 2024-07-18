<?php
/* Smarty version 3.1.39, created on 2023-07-11 16:35:36
  from 'C:\xampp\htdocs\vtigercrm75\layouts\v7\modules\Import\ImportError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64ad84d800c436_03439547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5e57fd5bf293ba69de5752208d86c33d926fd54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm75\\layouts\\v7\\modules\\Import\\ImportError.tpl',
      1 => 1689083834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ad84d800c436_03439547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='fc-overlay-modal modal-content'>
    <div class="overlayHeader">
        <?php ob_start();
echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1=ob_get_clean();
ob_start();
echo vtranslate('LBL_ERROR',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable1." - ".$_prefixVariable2);?>
        <?php $_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?> 
    </div>
    <div class='modal-body' style="margin-bottom:380px" id = "landingPageDiv">
        <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" />
        <div class = "alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>

        </div>
        <table class = "table table-borderless">
            <tr>
                <td valign="top">
                    <table  class="table table-borderless">
                        
                        <?php if ($_smarty_tpl->tpl_vars['ERROR_DETAILS']->value != '') {?>
                            <tr>
                                <td>
                                    <?php echo vtranslate('ERR_DETAILS_BELOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                    <table cellpadding="5" cellspacing="0">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_DETAILS']->value, '_VALUE', false, '_TITLE');
$_smarty_tpl->tpl_vars['_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_TITLE']->value => $_smarty_tpl->tpl_vars['_VALUE']->value) {
$_smarty_tpl->tpl_vars['_VALUE']->do_else = false;
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['_TITLE']->value;?>
</td>
                                                <td>-</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['_VALUE']->value;?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </td>
                            </tr>
                        <?php }?>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">

                </td>
            </tr>
        </table>
    </div> 
    <div class='modal-overlay-footer border1px clearfix'>
        <div class="row clearfix">
            <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
                <?php if ($_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value != '') {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value, '_ACTION', false, '_LABEL');
$_smarty_tpl->tpl_vars['_ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_LABEL']->value => $_smarty_tpl->tpl_vars['_ACTION']->value) {
$_smarty_tpl->tpl_vars['_ACTION']->do_else = false;
?>
                        <button name="<?php echo $_smarty_tpl->tpl_vars['_LABEL']->value;?>
" onclick="return Vtiger_Import_Js.clearSheduledImportData()" class="btn btn-danger btn-lg"><?php echo vtranslate($_smarty_tpl->tpl_vars['_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
