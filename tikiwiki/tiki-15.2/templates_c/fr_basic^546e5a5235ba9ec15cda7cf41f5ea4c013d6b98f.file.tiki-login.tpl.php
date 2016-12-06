<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 13:47:01
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:611493300583ed855662546-07914569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546e5a5235ba9ec15cda7cf41f5ea4c013d6b98f' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-login.tpl',
      1 => 1456588931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611493300583ed855662546-07914569',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ed8557e0e59_22476239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ed8557e0e59_22476239')) {function content_583ed8557e0e59_22476239($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.module.php';
?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<?php echo smarty_function_module(array('module'=>'login_box','mode'=>"module",'show_register'=>"y",'show_forgot'=>"y",'error'=>'','flip'=>'','decorations'=>'','nobox'=>'','notitle'=>''),$_smarty_tpl);?>

	</div>
</div>
<?php }} ?>
