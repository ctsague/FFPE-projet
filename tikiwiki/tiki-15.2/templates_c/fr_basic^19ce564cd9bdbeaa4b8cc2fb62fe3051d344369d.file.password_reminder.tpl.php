<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 13:48:30
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/password_reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711343147583ed8aebba282-65051215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ce564cd9bdbeaa4b8cc2fb62fe3051d344369d' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/password_reminder.tpl',
      1 => 1463397401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711343147583ed8aebba282-65051215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mail_user' => 0,
    'clearpw' => 0,
    'prefs' => 0,
    'mail_site' => 0,
    'mail_pass' => 0,
    'mail_machine' => 0,
    'mail_apass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ed8aec21f21_46052094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ed8aec21f21_46052094')) {function content_583ed8aec21f21_46052094($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?>Bonjour <?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
,

Someone  <?php if ($_smarty_tpl->tpl_vars['clearpw']->value=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
requested a reminder of the password for your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
requested a password reset for your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?> (<?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>
).

<?php if ($_smarty_tpl->tpl_vars['clearpw']->value=='y') {?>
	Since this is your registered email address this is to let you know that the password for this account is  <?php echo $_smarty_tpl->tpl_vars['mail_pass']->value;?>

<?php } else { ?>
	Veuillez cliquer sur le lien ci-dessous pour confirmer votre intention de réinitialiser votre mot de passe. Vous serez redirigé vers une page où vous devrez saisir un nouveau mot de passe "permanent". Veuillez vous en souvenir et ne le partagez pas..
<?php echo $_smarty_tpl->tpl_vars['mail_machine']->value;?>
/tiki-change_password.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_user']->value,'url');?>
&actpass=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_apass']->value,'url');?>


	Important : Nom d'utilisateur et mot de passe tiennent compte de la casse (lettres minuscules vs MAJUSCULES)

	Important : L'ancien mot de passe reste actif tant que vous ne cliquez pas sur le lien ci-dessus.
<?php }?>
<?php }} ?>
