<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:23:13
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_look.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1616177334583ee0d178e2b5-34309797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a617c88139b1621e72edae757088616131b3cb' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_look.tpl',
      1 => 1462119158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616177334583ee0d178e2b5-34309797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
    'prefs' => 0,
    'tiki_p_create_css' => 0,
    'thumbfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ee0d1860ae4_07829454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ee0d1860ae4_07829454')) {function content_583ee0d1860ae4_07829454($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
?>
<form action="tiki-admin.php?page=look" id="look" name="look" class="form-horizontal labelColumns" class="admin" method="post">
	<input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
	<div class="clearfix margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control']=='y') {?>
			<?php echo smarty_function_button(array('_text'=>"Contrôle des thèmes",'href'=>"tiki-theme_control.php",'_class'=>"btn-sm tikihelp"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_create_css']->value=='y') {?>
			<?php echo smarty_function_button(array('_text'=>"Modifier le CSS",'_class'=>"btn-sm",'href'=>"tiki-edit_css.php"),$_smarty_tpl);?>

		<?php }?>
		<div class="pull-right">
			<input type="submit" class="btn btn-primary btn-sm" name="looksetup" title="Apply Changes" value="Appliquer" />
		</div>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_look")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_look"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Thème")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Thème"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Thème</h2>
			<div class="row">
				<div class="col-md-2 col-md-push-10">
					<div class="thumbnail">
						<?php if ($_smarty_tpl->tpl_vars['thumbfile']->value) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['thumbfile']->value;?>
" alt="Copie d'écran de thème" id="theme_thumb">
						<?php } else { ?>
							<span><?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
				</div>
				<div class="col-md-9 col-md-pull-1 adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'theme_option'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="adminoptionbox theme_childcontainer custom_url">
				<?php echo smarty_function_preference(array('name'=>'theme_custom_url'),$_smarty_tpl);?>

			</div>
			<div class="adminoptionbox">
				<?php echo smarty_function_preference(array('name'=>'theme_admin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'theme_option_admin'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'site_layout'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'site_layout_admin'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'site_layout_per_object'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'theme_iconset'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='n'||$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery']=='n') {?>
				<input type="submit" class="btn btn-default btn-sm" name="changestyle" value="OK" />
			<?php }?>
			<div class="adminoptionbox">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=='y') {?>
					<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="change_theme_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'available_themes'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_fixed_width'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_fixed_width_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_fixed_width'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'useGroupTheme'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_theme_control'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_theme_control_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_savesession'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_parentcategory'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_theme_control_autocategorize'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Thème"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Mise en page générale")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Mise en page générale"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Mise en page générale</h2>
			<?php echo smarty_function_preference(array('name'=>'feature_sitelogo'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_sitelogo_childcontainer">
				<fieldset>
					<legend>Logo</legend>
					<?php echo smarty_function_preference(array('name'=>'sitelogo_src'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_icon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_bgcolor'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_title'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitelogo_alt'),$_smarty_tpl);?>

				</fieldset>
				<fieldset>
					<legend>Titre</legend>
					<?php echo smarty_function_preference(array('name'=>'sitetitle'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'sitesubtitle'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset>
					<legend>Module zone visibility</legend>
					<?php if (!$_GET['Zone_options']) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Astuce")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Astuce"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Module zone visibility options may not be supported anymore from Tiki 13+, but you can still access them in case you are upgrading from an earlier version. <a href="tiki-admin.php?page=look&Zone_options=y#contentadmin_look-2" class="alert-link">Show module visibility options</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Astuce"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } else { ?>
						<?php echo smarty_function_preference(array('name'=>'module_zones_top'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'module_zones_topbar'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'module_zones_pagetop'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_left_column'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_right_column'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'module_zones_pagebottom'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'module_zones_bottom'),$_smarty_tpl);?>

					<?php }?>
					<?php echo smarty_function_preference(array('name'=>'module_file'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'module_zone_available_extra'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset>
					<legend>Barre de signalement du site</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_site_report'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_report_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_site_send_link'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Mise en page générale"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['site_layout']=='classic') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Calque")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Calque"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<h2>Calque</h2>
				<?php echo smarty_function_preference(array('name'=>'feature_layoutshadows'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_layoutshadows_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'main_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'main_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'header_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'header_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'middle_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'middle_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'center_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'center_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'footer_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'footer_shadow_end'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'box_shadow_start'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'box_shadow_end'),$_smarty_tpl);?>

				</div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Calque"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Pagination")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Pagination"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Pagination</h2>
			<?php echo smarty_function_preference(array('name'=>'user_selector_threshold'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'maxRecords'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_object_selector_threshold'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'nextprev_pagination'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'direct_pagination'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="direct_pagination_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_middle_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'direct_pagination_max_ending_links'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'pagination_firstlast'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_fastmove_links'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_hide_if_one_page'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'pagination_icons'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Pagination"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Effets de l'IU")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Effets de l'IU"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Effets de l'IU</h2>
			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Effets standards de l'interface utilisateur</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Effets des onglets</legend>
					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_speed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'jquery_effect_tabs_direction'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<fieldset>
				<legend>Autre</legend>
				<div class="admin featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_shadowbox'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_shadowbox_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'jquery_colorbox_theme'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_jscalendar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_hidden_links'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_equal_height_rows_js'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Effets de l'IU"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Personnalisation")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Personnalisation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Personnalisation</h2>
			<fieldset>
				<legend>Codes personnalisés</legend>
				<?php echo smarty_function_preference(array('name'=>"header_custom_css",'syntax'=>"css"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"header_custom_less",'syntax'=>"css"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_custom_html_head_content','syntax'=>"htmlmixed"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_endbody_code','syntax'=>"tiki"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_google_analytics_account'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"header_custom_js",'syntax'=>"javascript"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>"layout_add_body_group_class"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'categories_add_class_to_body_tag'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Édition</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_editcss'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_view_tpl'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl']=='y') {?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"Voir les gabarits"),$_smarty_tpl);?>

					</div>
				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'feature_edit_templates'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates']=='y') {?>
					<div class="adminoptionboxchild">
						<?php echo smarty_function_button(array('href'=>"tiki-edit_templates.php",'_text'=>"Modifier les gabarits"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Personnalisation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Divers")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Divers"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Divers</h2>
			<?php echo smarty_function_preference(array('name'=>'feature_tabs'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_tabs_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'layout_tabs_optional'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_iepngfix'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_iepngfix_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'iepngfix_selectors'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'iepngfix_elements'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

			<div class="adminoptionbox">
				<fieldset>
					<legend>Favicon</legend>
					<?php echo smarty_function_preference(array('name'=>'site_favicon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'site_favicon_type'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="adminoptionbox">
				<fieldset class="table">
					<legend>Menus contextuels (<small>Utilisés pour l'instant que dans les Galeries de Fichiers.</small>)</legend>
					<?php echo smarty_function_preference(array('name'=>'use_context_menu_icon'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'use_context_menu_text'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<fieldset>
				<legend>Séparateur</legend>
				<?php echo smarty_function_preference(array('name'=>'site_crumb_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild clearfix">
					<span class="col-md-8 col-md-push-4 help-block">Exemples: &nbsp; &raquo; &nbsp; / &nbsp; &gt; &nbsp; : &nbsp; -> &nbsp; &#8594;</span>
				</div>
				<?php echo smarty_function_preference(array('name'=>'site_nav_seper'),$_smarty_tpl);?>

				<div class="adminoptionboxchild clearfix">
					<span class="col-md-8 col-md-push-4 help-block">Exemples: &nbsp; | &nbsp; / &nbsp; &brvbar; &nbsp; :</span>
				</div>
			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_cache_perms'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_html_head_base_tag'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Divers"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_look"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="t_navbar margin-bottom-md text-center">
		<input type="submit" class="btn btn-primary btn-sm tips" name="looksetup" title=":Apply Changes" value="Appliquer">
	</div>
</form>
<?php }} ?>
