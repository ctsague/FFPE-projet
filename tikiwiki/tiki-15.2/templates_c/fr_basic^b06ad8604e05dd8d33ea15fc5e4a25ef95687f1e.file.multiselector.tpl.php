<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:23:14
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/multiselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1703037545583ee0d21797d2-75569039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06ad8604e05dd8d33ea15fc5e4a25ef95687f1e' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/multiselector.tpl',
      1 => 1427567005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703037545583ee0d21797d2-75569039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ee0d21ecdb5_10385755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ee0d21ecdb5_10385755')) {function content_583ee0d21ecdb5_10385755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_selector_multi')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.object_selector_multi.php';
if (!is_callable('smarty_modifier_simplewiki')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="form-group adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<div class="col-sm-8">
		<?php echo smarty_function_object_selector_multi(array('_simplename'=>$_smarty_tpl->tpl_vars['p']->value['preference'],'_simpleid'=>$_smarty_tpl->tpl_vars['p']->value['id'],'_simplevalue'=>$_smarty_tpl->tpl_vars['p']->value['value'],'_separator'=>$_smarty_tpl->tpl_vars['p']->value['separator'],'type'=>$_smarty_tpl->tpl_vars['p']->value['selector_type'],'_format'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['format'])===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
