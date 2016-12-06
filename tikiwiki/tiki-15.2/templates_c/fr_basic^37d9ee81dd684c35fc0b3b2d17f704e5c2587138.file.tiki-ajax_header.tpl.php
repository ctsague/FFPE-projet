<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:59:00
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1505111468583ea2e43dc496-13695561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d9ee81dd684c35fc0b3b2d17f704e5c2587138' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505111468583ea2e43dc496-13695561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ea2e43e8882_11368551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e43e8882_11368551')) {function content_583ea2e43e8882_11368551($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<div id="ajaxLoading">Chargement...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>
