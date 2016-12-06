<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:00:53
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/user_creation_validation_mail_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:531644662583eb165419c98-81332689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f40219f909e24c4925a869f7162278685a837c' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/user_creation_validation_mail_subject.tpl',
      1 => 1463405132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531644662583eb165419c98-81332689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb16542cad6_14941032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb16542cad6_14941032')) {function content_583eb16542cad6_14941032($_smarty_tpl) {?>Votre accès personnel à <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php }} ?>
