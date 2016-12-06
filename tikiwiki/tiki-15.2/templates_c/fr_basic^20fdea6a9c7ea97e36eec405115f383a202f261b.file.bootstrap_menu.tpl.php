<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:42:51
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/bootstrap_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:394591752583ead2b19c078-89722115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fdea6a9c7ea97e36eec405115f383a202f261b' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/bootstrap_menu.tpl',
      1 => 1428947290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '394591752583ead2b19c078-89722115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'item' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ead2b213d53_86587769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ead2b213d53_86587769')) {function content_583ead2b213d53_86587769($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?><ul class="nav">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
			<li class="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['class']))===null||$tmp==='' ? null : $tmp);
if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?> active<?php }?>">
				<a href="#menu_option<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['optionId']);?>
" class="collapse-toggle" data-toggle="collapse">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<span class="caret"></span>
				</a>
				<ul id="menu_option<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['optionId']);?>
" class="nav collapse">
					<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
?>
						<li class="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['sub']->value['class']))===null||$tmp==='' ? null : $tmp);
if (!empty($_smarty_tpl->tpl_vars['sub']->value['selected'])) {?> active<?php }?>">
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sub']->value['sefurl']);?>
"><?php echo smarty_function_icon(array('name'=>"menuitem"),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['sub']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
						</li>
					<?php } ?>
				</ul>
			</li>
		<?php } else { ?>
			<li class="<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['class']))===null||$tmp==='' ? null : $tmp);
if (!empty($_smarty_tpl->tpl_vars['item']->value['selected'])) {?>active<?php }?>"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['sefurl']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></li>
		<?php }?>
	<?php } ?>
</ul>
<?php }} ?>
