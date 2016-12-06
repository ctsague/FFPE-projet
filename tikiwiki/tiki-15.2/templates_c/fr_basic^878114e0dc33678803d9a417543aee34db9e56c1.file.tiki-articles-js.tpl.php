<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:11:33
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-articles-js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:333292757583eec25ea9f61-22086908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '878114e0dc33678803d9a417543aee34db9e56c1' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-articles-js.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333292757583eec25ea9f61-22086908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'properties' => 0,
    'prop' => 0,
    'value' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eec25eb4530_89645781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eec25eb4530_89645781')) {function content_583eec25eb4530_89645781($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var articleTypes = new Array();
<?php  $_smarty_tpl->tpl_vars['properties'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['properties']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['properties']->key => $_smarty_tpl->tpl_vars['properties']->value) {
$_smarty_tpl->tpl_vars['properties']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['properties']->key;
?>
	typeProp = new Array();
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['prop']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		typeProp['<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prop']->value);?>
'] = '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
';
	<?php } ?>
	articleTypes['<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['type']->value);?>
'] = typeProp;
<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
