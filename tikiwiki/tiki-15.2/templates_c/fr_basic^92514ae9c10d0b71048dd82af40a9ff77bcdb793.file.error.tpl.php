<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:07:57
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:714599703583eb30d474785-09038929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92514ae9c10d0b71048dd82af40a9ff77bcdb793' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/error.tpl',
      1 => 1440910486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '714599703583eb30d474785-09038929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'close_window' => 0,
    'errortype' => 0,
    'prefs' => 0,
    'user' => 0,
    'file_error' => 0,
    'page' => 0,
    'errortitle' => 0,
    'likepages' => 0,
    'tiki_p_search' => 0,
    'filter' => 0,
    'commenttype' => 0,
    'msg' => 0,
    'title' => 0,
    'token_error' => 0,
    'required_preferences' => 0,
    'ticket' => 0,
    'pref' => 0,
    'extraButton' => 0,
    'create' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb30d67a671_21340157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb30d67a671_21340157')) {function content_583eb30d67a671_21340157($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_redirect')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.redirect.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
?><?php if (isset($_smarty_tpl->tpl_vars['close_window']->value)&&$_smarty_tpl->tpl_vars['close_window']->value=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

close();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if (!isset($_smarty_tpl->tpl_vars['errortype']->value)) {
$_smarty_tpl->tpl_vars['errortype'] = new Smarty_variable('', null, 0);
}
$_smarty_tpl->_capture_stack[0][] = array('default', 'mid_data', null); ob_start();
if (($_smarty_tpl->tpl_vars['errortype']->value=="402")) {
echo $_smarty_tpl->getSubTemplate ('tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
} elseif (($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&!empty($_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url'])&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']!='y') {
echo smarty_function_redirect(array('url'=>$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url']),$_smarty_tpl);
} else {
if (($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']=='y') {
$_smarty_tpl->tpl_vars['errortitle'] = new Smarty_variable("Merci de vous connecter", null, 0);
} else {
$_smarty_tpl->tpl_vars['errortitle'] = new Smarty_variable("Erreur", null, 0);
}
if ($_smarty_tpl->tpl_vars['errortype']->value=="404"&&isset($_smarty_tpl->tpl_vars['file_error']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Erreur fichier")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur fichier"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['file_error']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur fichier"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif ($_smarty_tpl->tpl_vars['errortype']->value=="404"&&isset($_smarty_tpl->tpl_vars['page']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aucune page trouvée<br><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages']=='y') {
if ($_smarty_tpl->tpl_vars['likepages']->value) {?><p>Peut-être cherchez-vous:</p><ul><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?><li><a href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']],"url");?>
" class="wiki"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
</a></li><?php endfor; endif; ?></ul><?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Il n'existe aucune page wiki similaire à '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
if (($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']=='y')&&$_smarty_tpl->tpl_vars['tiki_p_search']->value=='y') {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']=='y') {
echo $_smarty_tpl->getSubTemplate ('tiki-searchresults.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('searchNoResults'=>"false",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value)), 0);
} else {
echo $_smarty_tpl->getSubTemplate ('tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('searchNoResults'=>"true",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value),'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);
}
}
} elseif ($_smarty_tpl->tpl_vars['commenttype']->value=="note"&&isset($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['msg']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
if (isset($_smarty_tpl->tpl_vars['token_error']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Erreur jeton")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur jeton"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['token_error']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur jeton"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} elseif (($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']=='y') {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Droit d'accès refusé<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->getSubTemplate ('tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
} elseif (!isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['errortype']->value!='no_redirect_login'&&$_smarty_tpl->tpl_vars['errortype']->value!='login'&&empty($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vous n'êtes pas connecté. <a href="tiki-login_scr.php">Aller à la page d'authentification</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['msg']->value;
if (!empty($_smarty_tpl->tpl_vars['required_preferences']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'note','title'=>"Configurations",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'note','title'=>"Configurations",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<form method="post" action="tiki-admin.php" role="form" class="form"><input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
"><?php  $_smarty_tpl->tpl_vars['pref'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pref']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['required_preferences']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pref']->key => $_smarty_tpl->tpl_vars['pref']->value) {
$_smarty_tpl->tpl_vars['pref']->_loop = true;
echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref']->value),$_smarty_tpl);
} ?><div class="text-center"><input type="submit" class="btn btn-primary btn-sm" value="Appliquer"></div></form><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'note','title'=>"Configurations",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
}
if (isset($_smarty_tpl->tpl_vars['extraButton']->value)) {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['extraButton']->value['comment'];
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['extraButton']->value['href'],'_text'=>$_smarty_tpl->tpl_vars['extraButton']->value['text']),$_smarty_tpl);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}
if (isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['create']->value=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y')) {
echo smarty_function_button(array('href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['page']->value),'_text'=>"Créer cette page"),$_smarty_tpl);?>
 (la page sera orpheline)<br><br><?php }
if (!isset($_smarty_tpl->tpl_vars['page']->value)||$_smarty_tpl->tpl_vars['prefs']->value['site_wikiHomePage']!=$_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {
echo smarty_function_button(array('_type'=>"link",'_icon_name'=>"arrow-left",'_onclick'=>"javascript:history.back();return false;",'_text'=>"Revenir à la page précédente",'_ajax'=>"n"),$_smarty_tpl);?>
<br><br><?php }
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_type'=>"link",'_icon_name'=>"home",'_text'=>"Retour à la page d'accueil"),$_smarty_tpl);
}
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->getSubTemplate ('tiki.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>