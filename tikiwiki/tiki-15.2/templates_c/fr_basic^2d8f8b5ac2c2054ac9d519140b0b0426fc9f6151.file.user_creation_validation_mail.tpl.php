<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:00:53
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/user_creation_validation_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385187607583eb1652839b4-72456708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8f8b5ac2c2054ac9d519140b0b0426fc9f6151' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/mail/user_creation_validation_mail.tpl',
      1 => 1463405132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385187607583eb1652839b4-72456708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
    'mail_machine' => 0,
    'mail_user' => 0,
    'mail_apass' => 0,
    'mail_pass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb1652c2c11_78563421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb1652c2c11_78563421')) {function content_583eb1652c2c11_78563421($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?>Bonjour,

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An administrator of the <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
site below has added you as a new user:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])) {
echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['mail_site']->value;?>


Si vous voulez confirmer votre adhésion au site, cliquer sur le lien suivant pour votre première connexion:
	<?php echo $_smarty_tpl->tpl_vars['mail_machine']->value;?>
?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail_user']->value,'url');?>
&pass=<?php echo $_smarty_tpl->tpl_vars['mail_apass']->value;?>


<?php if (!empty($_smarty_tpl->tpl_vars['mail_pass']->value)) {?>
Vos informations de connexion sont:
	Nom d'utilisateur: <?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>

	Mot de passe : <?php echo $_smarty_tpl->tpl_vars['mail_pass']->value;?>

<?php }?>

Bienvenue sur le site

<?php }} ?>
