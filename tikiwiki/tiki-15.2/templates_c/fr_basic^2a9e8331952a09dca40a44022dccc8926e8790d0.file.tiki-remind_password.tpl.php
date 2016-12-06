<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 13:48:08
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-remind_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1075274465583ed898d155d8-52838093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a9e8331952a09dca40a44022dccc8926e8790d0' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-remind_password.tpl',
      1 => 1434713133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1075274465583ed898d155d8-52838093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showmsg' => 0,
    'prefs' => 0,
    'msg' => 0,
    'showfrm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ed898dcd426_24681044',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ed898dcd426_24681044')) {function content_583ed898dcd426_24681044($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>'login')); $_block_repeat=true; echo smarty_block_title(array('admpage'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
J'ai oublié mon mot de passe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['showmsg']->value!='n') {?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e') {?>
		<span class="warn tips" title=":Erreur"><?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_icon(array('name'=>'ok','alt'=>"OK",'style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
		<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value,'html'))===null||$tmp==='' ? "Entrer votre compte ou adresse email." : $tmp);?>

	<?php } else { ?>
		<?php echo (($tmp = @smarty_modifier_escape($_smarty_tpl->tpl_vars['msg']->value,'html'))===null||$tmp==='' ? "Entrer votre adresse mail." : $tmp);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e') {?>
		</span>
	<?php }?>
	<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['showfrm']->value=='y') {?>
	<form class="form-horizontal col-md-10" action="tiki-remind_password.php" method="post">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
			<div class="form-group">
				<label class="col-sm-3 col-md-2 control-label" for="name">Nom d'utilisateur</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Nom d'utilisateur" name="name" id="name">
				</div>
			</div>
			<div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
				<p><strong>OR</strong></p>
			</div>

		<?php }?>
		<div class="form-group">
			<label class="col-sm-3 col-md-2 control-label" for="email">Adresse courriel</label>
			<div class="col-sm-6">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y') {?>
					<input type="email" class="form-control" placeholder="Adresse courriel" name="email" id="email">
				<?php } else { ?>
					<input type="email" class="form-control" placeholder="Adresse courriel" name="name" id="name">
				<?php }?>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-3 col-md-offset-2 col-sm-10">
				<input type="submit" class="btn btn-default" name="remind" value="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_clear_passwords']=='y') {?>Envoyez-moi mon mot de passe<?php } else { ?>Demander une réinitialisation du mot de passe<?php }?>">
			</div>
		</div>
	</form>
<?php }?>
<?php }} ?>
