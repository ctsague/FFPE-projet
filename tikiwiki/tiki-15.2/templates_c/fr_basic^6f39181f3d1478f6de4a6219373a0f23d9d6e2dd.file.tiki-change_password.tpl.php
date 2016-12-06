<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:58:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1608055893583ea2e362ce21-34696850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f39181f3d1478f6de4a6219373a0f23d9d6e2dd' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-change_password.tpl',
      1 => 1461336600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1608055893583ea2e362ce21-34696850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_user_validation' => 0,
    'oldpass' => 0,
    'userlogin' => 0,
    'prefs' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ea2e370cd41_26268133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e370cd41_26268133')) {function content_583ea2e370cd41_26268133($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['new_user_validation']->value)&&$_smarty_tpl->tpl_vars['new_user_validation']->value=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Votre compte a été validé.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vous devez choisir un mot de passe pour utiliser ce compte.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['new_user_validation'] = new Smarty_variable('n', null, 0);?>
<?php }?>
<div class="col-md-10 col-md-push-1 clearfix">
	<form role="form" class="form-horizontal" method="post" action="tiki-change_password.php">
		<div class="panel panel-default">
			<?php if (!empty($_smarty_tpl->tpl_vars['oldpass']->value)&&$_smarty_tpl->tpl_vars['new_user_validation']->value=='y') {?>
				<input type="hidden" name="oldpass" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['oldpass']->value);?>
">
			<?php } elseif (!empty($_REQUEST['actpass'])) {?>
				<input type="hidden" name="actpass" value="<?php echo smarty_modifier_escape($_REQUEST['actpass']);?>
">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['new_user_validation']->value=='y') {?>
				<input type="hidden" name="new_user_validation" value="y">
			<?php }?>
			<div class="panel-heading text-center">
				<?php if ($_smarty_tpl->tpl_vars['new_user_validation']->value!='y') {?>
					<h3 class="panel-title">Change password</h3>
				<?php } else { ?>
					<h3 class="panel-title">Set password</h3>
				<?php }?>
			</div>
			<div class="panel-body">
				<div class="clearfix">
					<?php echo $_smarty_tpl->getSubTemplate ('password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<div class="text-center" id="divRegCapson" style="display:none;">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verouillage Maj. (CapsLock) est actif.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="user">Nom d'utilisateur</label>
					<div class="col-md-8">
						<?php if (empty($_smarty_tpl->tpl_vars['userlogin']->value)) {?>
							<input type="text" class="form-control" id="user" name="user">
						<?php } else { ?>
							<input type="hidden" id="user" name="user" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userlogin']->value);?>
">
							<div class="form-control-static"><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userlogin']->value);?>
</strong></div>
						<?php }?>
					</div>
				</div>
				<?php if (empty($_REQUEST['actpass'])&&($_smarty_tpl->tpl_vars['new_user_validation']->value!='y'||empty($_smarty_tpl->tpl_vars['oldpass']->value))) {?>
					<div class="form-group">
						<label class="col-md-4 control-label" for="oldpass">Old Password</label>
						<div class="col-md-8">
							<input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Old Password">
						</div>
					</div>
				<?php }?>
				<div class="form-group">
					<label class="col-md-4 control-label" for="pass1">New Password</label>
					<div class="col-md-8">
						<input type="password" class="form-control" placeholder="New Password" name="pass" id="pass1">
						<div style="margin-left:5px;">
							<div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
							<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
						</div>
						<div style="margin-top:5px">
							<?php echo $_smarty_tpl->getSubTemplate ('password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="pass2">Repeat Password</label>
					<div class="col-md-8">
						<input type="password" class="form-control" name="passAgain" id="pass2" placeholder="Repeat Password">
						<div id="mypassword2_text">
							<div id="match" style="display:none">
								<?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'color:#0ca908'),$_smarty_tpl);?>
 Passwords match
							</div>
							<div id="nomatch" style="display:none">
								<?php echo smarty_function_icon(array('name'=>'error','istyle'=>'color:#ff0000'),$_smarty_tpl);?>
 Les mots de passe ne correspondent pas
							</div>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password']=='y') {?>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-4">
							<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Générer un mot de passe"),$_smarty_tpl);?>
</span>
						</div>
						<div class="col-md-4">
							<input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
						</div>
					</div>
				<?php }?>
				<?php if (empty($_smarty_tpl->tpl_vars['email']->value)) {?>
					<div class="form-group">
						<label class="col-md-4 control-label" for="email">Adresse courriel</label>
						<div class="col-md-8">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (!empty($_smarty_tpl->tpl_vars['email']->value)) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['email']->value);
}?>">
						</div>
					</div>
				<?php }?>
			</div>
			<div class="panel-footer text-center">
				<input type="submit" class="btn btn-primary" name="change" onclick="return checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text');" value="Appliquer"><span id="validate"></span>
			</div>
		</div>
	</form>
</div>
<?php }} ?>
