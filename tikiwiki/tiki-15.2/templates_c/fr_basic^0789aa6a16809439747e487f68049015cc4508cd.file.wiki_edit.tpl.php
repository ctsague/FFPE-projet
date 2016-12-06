<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:19:04
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wiki_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2007927320583eb5a89ede96-50076804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0789aa6a16809439747e487f68049015cc4508cd' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wiki_edit.tpl',
      1 => 1443812120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007927320583eb5a89ede96-50076804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'textarea__toolbars' => 0,
    'textarea_id' => 0,
    'comments' => 0,
    'switcheditor' => 0,
    'toolbar_section' => 0,
    'textarea_attributes' => 0,
    'textareadata' => 0,
    'diff_style' => 0,
    'diff_oldver' => 0,
    'diff_newver' => 0,
    'source_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb5a8a2e9d8_95754043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb5a8a2e9d8_95754043')) {function content_583eb5a8a2e9d8_95754043($_smarty_tpl) {?><?php if (!is_callable('smarty_function_toolbars')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.toolbars.php';
?>

<div class='edit-zone'> 
	<?php if ($_smarty_tpl->tpl_vars['textarea__toolbars']->value!='n') {?>
		<div class='textarea-toolbar nav-justified' id='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp);?>
_toolbar'>
			<?php echo smarty_function_toolbars(array('area_id'=>(($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp),'comments'=>$_smarty_tpl->tpl_vars['comments']->value,'switcheditor'=>$_smarty_tpl->tpl_vars['switcheditor']->value,'section'=>$_smarty_tpl->tpl_vars['toolbar_section']->value),$_smarty_tpl);?>

		</div>
	<?php }?>
	<textarea <?php echo $_smarty_tpl->tpl_vars['textarea_attributes']->value;?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['textareadata']->value);?>
</textarea>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value) {?>
	<input type="hidden" name="oldver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_oldver']->value);?>
">
	<input type="hidden" name="newver" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['diff_newver']->value);?>
">
	<input type="hidden" name="source_page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['source_page']->value);?>
">
<?php }?>

<?php }} ?>
