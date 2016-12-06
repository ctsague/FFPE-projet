<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 08:59:48
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:812388243583fe68452b5c6-32828407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e265e1200acc0c9d0be1c34fbcfcad93796d7943' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_general.tpl',
      1 => 1466948326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '812388243583fe68452b5c6-32828407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
    'error_msg' => 0,
    'lastup' => 0,
    'tiki_version' => 0,
    'svnrev' => 0,
    'db_engine_type' => 0,
    'prefs' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583fe684636371_72641348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fe684636371_72641348')) {function content_583fe684636371_72641348($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_help')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_modifier_tiki_long_date')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_long_date.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_long_time.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_short_time.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=general" class="admin" method="post">
	<input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
	<input type="hidden" name="new_prefs" />
	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-install.php",'_icon_name'=>"database",'_text'=>"Installation Tiki",'_title'=>":Réinitialiser ou mettre à jour votre base de données"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-admin_menus.php",'_icon_name'=>"menu",'_text'=>"Menus",'_title'=>":Create and edit menus"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-admin.php?page=general&amp;forcecheck=1",'_icon_name'=>"search",'_text'=>"Vérifier les mises à jour maintenant",'_title'=>":Vérifier les mises à jour maintenant"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('_class'=>"btn btn-link tips",'_type'=>"text",'href'=>"tiki-check.php",'_icon_name'=>"heartbeat",'_text'=>"Server Fitness",'_title'=>":Check if your server meets the requirements for running Tiki"),$_smarty_tpl);?>

		<div class="pull-right">
			<input type="submit" class="btn btn-primary btn-sm tips" title=":Apply Changes" value="Appliquer" />
		</div>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Avertissement",'icon'=>'error')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Avertissement",'icon'=>'error'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Avertissement",'icon'=>'error'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_general")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_general"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Préférences générales")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Préférences générales"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Préférences générales</h2>
			<fieldset>
				<legend>Vérification des versions</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Tiki version",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php if (!empty($_smarty_tpl->tpl_vars['lastup']->value)) {?>
						Dernière mise à jour depuis SVN (<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
): <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastup']->value);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['svnrev']->value) {?>
						- REV <?php echo $_smarty_tpl->tpl_vars['svnrev']->value;?>

					<?php }?>
					(<?php echo $_smarty_tpl->tpl_vars['db_engine_type']->value;?>
)
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Tiki version",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'tiki_release_cycle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_version_checks'),$_smarty_tpl);?>

					<div id="feature_version_checks_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'tiki_version_check_frequency'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Identité du site</legend>
				<?php echo smarty_function_preference(array('name'=>'sender_email'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'browsertitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_title_breadcrumb'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Themes")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Go to the <a href="tiki-admin.php?page=look" class="alert-link">Look & Feel</a> section for additional site customization preferences.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Themes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</fieldset>
			<fieldset>
				<legend>Notification de courriel</legend>
				<?php echo smarty_function_preference(array('name'=>'default_mail_charset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_crlf'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'zend_mail_handler'),$_smarty_tpl);?>

				<div class="adminoptionboxchild zend_mail_handler_childcontainer smtp">
					<input type="password" style="display:none" name="zend_mail_smtp_server_autocomplete_off"> 
					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_server'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_auth'),$_smarty_tpl);?>

					<div class="adminoptionboxchild zend_mail_smtp_auth_childcontainer login plain crammd5">
						<p>Ces valeurs seront enregistrés en texte clair dans la base de données:</p>
						<input type="password" style="display:none" name="zend_mail_smtp_user_autocomplete_off"> 
						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_user'),$_smarty_tpl);?>

						<input type="password" style="display:none" name="zend_mail_smtp_pass_autocomplete_off"> 
						<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_pass'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_security'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_smtp_helo'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zend_mail_queue'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionbox form-group clearfix">
					<label for="testMail" class="col-md-4 control-label">Courriel pour l'envoi d'un test</label>
					<div class="col-md-8">
						<input type="text" name="testMail" id="testMail" class="form-control">
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'email_footer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_template_custom_text'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Lettre d'informations</legend>
				<?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'newsletter_external_client'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Journaux et rapports</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Uniquement visible par les administrateurs"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Inclure les avertissements Smarty"),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="log_sql_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Préférences générales"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Configuration générale")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Configuration générale"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Configuration générale</h2>
			<fieldset>
				<legend>Serveur</legend>
				<?php echo smarty_function_preference(array('name'=>'tmpDir'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'use_proxy'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_proxy_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'proxy_host'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_port'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'proxy_pass'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'http_skip_frameset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_loadbalancer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_port_rewriting'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'access_control_allow_origin'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Multi-domaines</legend>
				<?php echo smarty_function_preference(array('name'=>'multidomain_active'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'multidomain_switchdomain'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="multidomain_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'multidomain_config'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Sessions</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Advanced configuration")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Le stockage des sessions en base de données est une option d'administration avancée et est réservée aux administrateurs ayant un accès intégral et une bonne compréhension de la base de données de façon à pouvoir régler les problèmes éventuels.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Advanced configuration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Changer cette fonctionnalité va vous délogguer immédiatement après l'enregistrement. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['forgotPass']!='y') {?>If there is a chance you have forgotten your password, enable "Forget password" feature.<a href="tiki-admin.php?page=features" title="Fonctionnalités" class="alert-link">Activer maintenant</a>.<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>'session_storage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_lifetime'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'session_cookie_name'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Terminaux de site</legend>
				<?php echo smarty_function_preference(array('name'=>'site_terminal_active'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_terminal_active_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_terminal_config'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Contact</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_contact'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_contact_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'contact_anon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_priority_onoff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'contact_user'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Statistiques</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_referer_stats'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'count_admin_pvs'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Imprimer</legend>
				<?php echo smarty_function_preference(array('name'=>'print_pdf_from_url'),$_smarty_tpl);?>

				<div class="adminoptionboxchild print_pdf_from_url_childcontainer webkit">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_webkit_path'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionboxchild print_pdf_from_url_childcontainer weasyprint">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_weasyprint_path'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionboxchild print_pdf_from_url_childcontainer webservice">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_webservice_url'),$_smarty_tpl);?>

				</div>
				<div class="adminoptionboxchild print_pdf_from_url_childcontainer mpdf">
					<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_path'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'print_wiki_authors'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_original_url_wiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_original_url_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_original_url_forum'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Terms and Conditions</legend>
				<?php echo smarty_function_preference(array('name'=>'conditions_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="conditions_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'conditions_page_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'conditions_minimum_age'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Divers</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_help'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_help_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'helpurl'),$_smarty_tpl);?>

				</div>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Modifier le mot de passe de l'administrateur")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Modifier le mot de passe de l'administrateur"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Changer le mot de passe <strong>Admin</strong>: <a href="tiki-adminusers.php?find=admin" class="alert-link">Gestion des utilisateurs</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Modifier le mot de passe de l'administrateur"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Configuration générale"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Navigation")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Navigation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Navigation</h2>
			<fieldset>
				<legend>Menus</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_cssmenus'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_featuredLinks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_menusfolderstyle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'menus_items_icons'),$_smarty_tpl);?>

					<div id="menus_items_icons_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'menus_items_icons_path'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>Page d'accueil</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'useGroupHome'),$_smarty_tpl);?>

					<div id="useGroupHome_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'limitedGoGroupHome'),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'tikiIndex','defaul'=>$_smarty_tpl->tpl_vars['prefs']->value['site_tikiIndex']),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'useUrlIndex'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="useUrlIndex_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'urlIndex'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'home_gallery'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Redirections</legend>
				<?php echo smarty_function_preference(array('name'=>'tiki_domain_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_domain_redirects'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_redirect_on_error'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

				<hr>
				<?php echo smarty_function_preference(array('name'=>'permission_denied_login_box','mode'=>'invert'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="permission_denied_login_box_childcontainer">
					<div style="text-indent: 28%">
						<strong>ou</strong>
					</div>
					<?php echo smarty_function_preference(array('name'=>'permission_denied_url'),$_smarty_tpl);?>

				</div>
				<hr>
				<?php echo smarty_function_preference(array('name'=>'url_anonymous_page_not_found'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'url_after_validation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_alternate_registration_page'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Utilisateur</legend>
				<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Accès au site</legend>
				<?php echo smarty_function_preference(array('name'=>'site_closed'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="site_closed_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'site_closed_msg'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'use_load_threshold'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="use_load_threshold_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'load_threshold'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'site_busy_msg'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend class="heading">Fil d'ariane</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_breadcrumbs'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_breadcrumbs_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_siteloclabel'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_siteloc'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sitedesc'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend class="heading">Namespace</legend>
				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement",'close'=>"n")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						The namespace separator should not
						<ul>
							<li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&amp;+;=&lt;&gt;</li>
							<li>conflict with wiki syntax tagging</li>
						</ul>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'close'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
						Note: a conversion of :: to ::: for existing pages must be done manually.<br/>
						If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Navigation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Date et heure")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Date et heure"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Date et heure<?php echo smarty_function_help(array('url'=>"Date+and+Time"),$_smarty_tpl);?>
</h2>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"php.net")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a class="alert-link" href="http://www.php.net/manual/en/function.strftime.php">
					Aide sur le format des dates et heures
				</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"php.net"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

			<div class="clearfix">
				<?php echo smarty_function_preference(array('name'=>'long_date_format'),$_smarty_tpl);?>

				<span class="help-block col-md-8 col-md-push-4">
					Résultat: <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
			</div>
			<div class="clearfix">
				<?php echo smarty_function_preference(array('name'=>'short_date_format'),$_smarty_tpl);?>

				<span class="help-block col-md-8 col-md-push-4">
					Résultat: <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
			</div>
			<div class="clearfix">
				<?php echo smarty_function_preference(array('name'=>'long_time_format'),$_smarty_tpl);?>

				<span class="help-block col-md-8 col-md-push-4">
					Résultat: <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
			</div>
			<div class="clearfix">
				<?php echo smarty_function_preference(array('name'=>'short_time_format'),$_smarty_tpl);?>

				<span class="help-block col-md-8 col-md-push-4">
					Résultat: <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['now']->value);?>

				</span>
			</div>
			<?php echo smarty_function_preference(array('name'=>'short_date_format_js'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'short_time_format_js'),$_smarty_tpl);?>

			<fieldset>
				<legend>Date/time selectors</legend>
				<?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_start_year'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_end_year'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'tiki_same_day_time_only'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_timesheet'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_convene'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Date et heure"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_general"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="t_navbar margin-bottom-md text-center">
		<input type="submit" class="btn btn-primary btn-sm tips" title=":Apply Changes" value="Appliquer" />
	</div>
</form>
<?php }} ?>
