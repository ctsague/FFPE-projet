<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:20:46
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/error-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1468556984583eb60e732980-35856416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8648b07436ac9a3cdb638da58c7d5c89c5f0d8d6' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/error-ajax.tpl',
      1 => 1391634559,
      2 => 'file',
    ),
    '5d85ac0f1a232cf642f7753fdad84ba3ae1e7c1f' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layouts/internal/modal.tpl',
      1 => 1439300383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468556984583eb60e732980-35856416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb60e7c1f18_47260083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb60e7c1f18_47260083')) {function content_583eb60e7c1f18_47260083($_smarty_tpl) {?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<div class="alert alert-warning">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['detail']->value['message']);?>

	</div>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Fermer</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
