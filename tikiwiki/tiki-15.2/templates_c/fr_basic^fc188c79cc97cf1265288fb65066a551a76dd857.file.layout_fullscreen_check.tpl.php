<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:59:00
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layout_fullscreen_check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1015882469583ea2e438b5c1-18610906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc188c79cc97cf1265288fb65066a551a76dd857' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layout_fullscreen_check.tpl',
      1 => 1455633984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1015882469583ea2e438b5c1-18610906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'filegals_manager' => 0,
    'print_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ea2e43d1003_35488305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e43d1003_35488305')) {function content_583ea2e43d1003_35488305($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.self_link.php';
?>



<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fullscreen']=='y'&&$_smarty_tpl->tpl_vars['filegals_manager']->value==''&&$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
	<div id="fullscreenbutton">
		<?php if ($_SESSION['fullscreen']=='n') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</div>
<?php }?>
<?php }} ?>
