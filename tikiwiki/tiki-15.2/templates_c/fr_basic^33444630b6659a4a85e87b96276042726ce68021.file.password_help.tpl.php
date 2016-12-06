<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:58:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4750744583ea2e37d9425-38392907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33444630b6659a4a85e87b96276042726ce68021' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/password_help.tpl',
      1 => 1452771715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4750744583ea2e37d9425-38392907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ea2e380d430_42417268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e380d430_42417268')) {function content_583ea2e380d430_42417268($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1) {?><div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y') {?><div class="highlight"><em>Le mot de passe doit contenir des lettres et des chiffres</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y') {?><div class="highlight"><em>Le mot de passe doit contenir au moins un caractère alphabétique en minuscule comme 'a' et un en majuscule comme 'A'.</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y') {?><div class="highlight"><em>Password must contain at least one special character like " / $ % ? & * ( ) _ + ...</em></div><?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y') {?><div class="highlight"><em>Le mot de passe ne doit pas contenir de répétition du même caractère comme  111 ou aab</em></div><?php }?>
<?php }} ?>
