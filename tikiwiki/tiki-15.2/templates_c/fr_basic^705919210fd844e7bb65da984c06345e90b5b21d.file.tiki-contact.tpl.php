<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 09:22:17
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90316312583febc9033601-75578838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '705919210fd844e7bb65da984c06345e90b5b21d' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-contact.tpl',
      1 => 1417430364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90316312583febc9033601-75578838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sent' => 0,
    'message' => 0,
    'errorMessage' => 0,
    'prefs' => 0,
    'priority' => 0,
    'user' => 0,
    'from' => 0,
    'subject' => 0,
    'body' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583febc90e2c17_85947653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583febc90e2c17_85947653')) {function content_583febc90e2c17_85947653($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_ticket')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.ticket.php';
if (!is_callable('smarty_block_textarea')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.textarea.php';
if (!is_callable('smarty_function_mailto')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/vendor/smarty/smarty/libs/plugins/function.mailto.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nous contacter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['sent']->value=='1') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('icon'=>"accept",'title'=>"Succès")); $_block_repeat=true; echo smarty_block_remarksbox(array('icon'=>"accept",'title'=>"Succès"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['message']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('icon'=>"accept",'title'=>"Succès"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
	<h2>Nous envoyer un message</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['errorMessage']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Invalid",'type'=>"errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Invalid",'type'=>"errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['errorMessage']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Invalid",'type'=>"errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<form class="form form-horizontal" method="post" action="tiki-contact.php">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<input type="hidden" name="to" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['contact_user']);?>
">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['contact_priority_onoff']=='y') {?>
			<div class="form-group">
				<label for="priority" class="col-sm-2 control-label">Priorité:</label>
				<div class="col-sm-10">
					<select id="priority" name="priority" class="form-control">
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['priority']->value==1) {?>selected="selected"<?php }?>>1 -Mini-</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['priority']->value==2) {?>selected="selected"<?php }?>>2 -Peu prioritaire-</option>
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['priority']->value==3) {?>selected="selected"<?php }?>>3 -Normal-</option>
						<option value="4" <?php if ($_smarty_tpl->tpl_vars['priority']->value==4) {?>selected="selected"<?php }?>>4 -Prioritaire-</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['priority']->value==5) {?>selected="selected"<?php }?>>5 -Très prioritaire-</option>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value=='') {?>
			<div class="form-group">
				<label for="from" class="col-sm-2 control-label">Votre adresse email:</label>
				<div class="col-sm-10">
					<input type="text" id="from" name="from" value="<?php echo $_smarty_tpl->tpl_vars['from']->value;?>
" class="form-control">
				</div>
			</div>
		<?php }?>
		<div class="form-group">
			<label for="subject" class="col-sm-2 control-label">Sujet:</label>
			<div class="col-sm-10">
				<input type="text" id="subject" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="body" class="col-sm-2 control-label">Message:</label>
			<div class="col-sm-10">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('rows'=>"20",'name'=>"body",'id'=>"body",'class'=>"form-control",'_simple'=>'y','_toolbars'=>'n')); $_block_repeat=true; echo smarty_block_textarea(array('rows'=>"20",'name'=>"body",'id'=>"body",'class'=>"form-control",'_simple'=>'y','_toolbars'=>'n'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('rows'=>"20",'name'=>"body",'id'=>"body",'class'=>"form-control",'_simple'=>'y','_toolbars'=>'n'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='') {?>
			<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('td_style'=>"form"), 0);?>

		<?php }?>
		<div class="form-group text-center">
			<input type="submit" class="btn btn-primary btn-sm" name="send" value="Envoyer">
		</div>
	</form>
<?php }?>

<?php if (strlen($_smarty_tpl->tpl_vars['email']->value)>0) {?>
	<h2>Nous contacter par courriel</h2>
	Cliquer ici pour nous envoyer un email: <?php echo smarty_function_mailto(array('text'=>((string)$_smarty_tpl->tpl_vars['email']->value),'address'=>((string)$_smarty_tpl->tpl_vars['email0']->value),'encode'=>"javascript",'extra'=>'class="link"'),$_smarty_tpl);?>

<?php } else { ?>
	<p><a class="link" href="tiki-contact.php">Envoyer un autre message</a></p>
<?php }?>
<?php }} ?>
