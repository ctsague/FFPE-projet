<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:16:05
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188145920583edf25654661-81270741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb55d08a7d306c52494d468b519dafb14079186d' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/radio.tpl',
      1 => 1454960806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188145920583edf25654661-81270741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583edf25759a57_77427898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583edf25759a57_77427898')) {function content_583edf25759a57_77427898($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['p']->value['name']) {?>
		<label for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" class="control-label col-md-4"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<?php }?>
	<div class="col-md-8">
		<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
			<div class="adminoptionlabel">
				<input id="<?php echo smarty_modifier_escape((($_smarty_tpl->tpl_vars['p']->value['id']).('_')).($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']));?>
" type="radio" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
"
					value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['value']==$_smarty_tpl->tpl_vars['value']->value) {?> checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

					data-tiki-admin-child-block="#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
_childcontainer_<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']);?>
"
				>
				<label for="<?php echo smarty_modifier_escape((($_smarty_tpl->tpl_vars['p']->value['id']).('_')).($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']));?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>
</label>
			</div>
		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
