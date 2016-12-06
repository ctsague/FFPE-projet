<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:59:00
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629656745583ea2e4bf8078-05531537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b409c6ddce09430dde22e2c2a20833ad6e8b30e7' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/credits.tpl',
      1 => 1421685541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629656745583ea2e4bf8078-05531537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ea2e4c0b7b3_69945654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e4c0b7b3_69945654')) {function content_583ea2e4c0b7b3_69945654($_smarty_tpl) {?>
Thème : <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
