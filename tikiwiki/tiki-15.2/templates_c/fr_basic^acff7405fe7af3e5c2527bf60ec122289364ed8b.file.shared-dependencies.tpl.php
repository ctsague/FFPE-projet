<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:42:50
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/shared-dependencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912418655583ead2ae70f17-58733733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acff7405fe7af3e5c2527bf60ec122289364ed8b' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/shared-dependencies.tpl',
      1 => 1426353843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912418655583ead2ae70f17-58733733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'dep' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ead2aedd1d9_65517979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ead2aedd1d9_65517979')) {function content_583ead2aedd1d9_65517979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?><input class="system" type="hidden" name="lm_preference[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
">
<?php if ($_smarty_tpl->tpl_vars['p']->value['dependencies']) {?>
	<?php  $_smarty_tpl->tpl_vars['dep'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dep']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['dependencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dep']->key => $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['dep']->value['met']) {?>
			<?php echo smarty_function_icon(array('name'=>"ok",'class'=>"pref_dependency tips text-success",'title'=>(smarty_modifier_escape(("Nécessite: ").($_smarty_tpl->tpl_vars['dep']->value['label']))).(" (OK)")),$_smarty_tpl);?>

		<?php } elseif ($_smarty_tpl->tpl_vars['dep']->value['type']=='profile') {?>
			<div class="alert alert-warning pref_dependency highlight"<?php if (!$_smarty_tpl->tpl_vars['p']->value['modified']) {?> style="display:none;"<?php }?>>You need apply profile <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['dep']->value['link']);?>
" class="alert-link"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['dep']->value['label']);?>
</a></div>
		<?php } else { ?>
			<div class="alert alert-warning pref_dependency highlight"<?php if (!$_smarty_tpl->tpl_vars['p']->value['modified']) {?> style="display:none;"<?php }?>>Vous devez définir <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['dep']->value['link']);?>
" class="alert-link"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['dep']->value['label']);?>
</a></div>
		<?php }?>
	<?php } ?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
	<div class="help-block pref_note"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['note']->value);?>
</div>
<?php } ?>
<?php }} ?>
