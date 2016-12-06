<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 08:59:48
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194292539583fe684709d07-60900163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58cae8b923eef2c5db2ebea5b2a61f6805201fc' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/password.tpl',
      1 => 1420327415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194292539583fe684709d07-60900163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583fe68474a468_87270811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fe68474a468_87270811')) {function content_583fe68474a468_87270811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="col-sm-4 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<div class="col-sm-8">
		<input name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
" class="form-control"  type="password" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['detail']);?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
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
