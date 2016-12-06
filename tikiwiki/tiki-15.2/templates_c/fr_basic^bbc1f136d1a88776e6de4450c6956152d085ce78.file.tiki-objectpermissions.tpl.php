<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 09:11:35
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-objectpermissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:336380329583fe94754c3d3-49530836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbc1f136d1a88776e6de4450c6956152d085ce78' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-objectpermissions.tpl',
      1 => 1458104273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '336380329583fe94754c3d3-49530836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'objectType' => 0,
    'objectName' => 0,
    'referer' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_users' => 0,
    'tiki_p_admin_categories' => 0,
    'prefs' => 0,
    'filegals_manager' => 0,
    'permissions_displayed' => 0,
    'permType' => 0,
    'objectId' => 0,
    'show_disabled_features' => 0,
    'perms_clipboard_source' => 0,
    'inStructure' => 0,
    'perms' => 0,
    'permGroups' => 0,
    'groupNames' => 0,
    'permGroupCols' => 0,
    'permissions_added' => 0,
    'permissions_removed' => 0,
    'groupsFiltered' => 0,
    'groups' => 0,
    'featuresFiltered' => 0,
    'features' => 0,
    'quickperms' => 0,
    'permgroup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583fe9476aeb05_94938180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fe9476aeb05_94938180')) {function content_583fe9476aeb05_94938180($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_query')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_treetable')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.treetable.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Permissions")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Permissions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['objectType']->value=='global') {?>Attribution des permissions globales<?php } else { ?>Attribuer des droits d'accès à <?php echo $_smarty_tpl->tpl_vars['objectType']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['objectName']->value;
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Permissions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php if (!empty($_smarty_tpl->tpl_vars['referer']->value)) {
echo smarty_function_button(array('href'=>((string)$_smarty_tpl->tpl_vars['referer']->value),'_class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"back",'_text'=>"Retour"),$_smarty_tpl);
}?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"group",'_text'=>"Administrer les groupes"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"user",'_text'=>"Administrer les utilisateurs"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"admin_category",'_text'=>"Administrer les catégories"),$_smarty_tpl);?>

	<?php }?>
	<?php echo smarty_function_button(array('href'=>"tiki-list_object_permissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Liste des droits des objets"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_objectpermissions')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Attribuer des droits d'accès")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Attribuer des droits d'accès"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>
			<h2>Éditer les permissions</h2>
		<?php }?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
			<?php $_smarty_tpl->_capture_stack[0][] = array("notices", null, null); ob_start(); ?>
				<?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='global') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Remarque")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Remarque"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Édition des permissions globales.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Remarque"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['objectType']->value!='category') {?>
								Les droits définis directement pour cet objet surclassent tout droit global ou de catégorie affectant ce même objet.
							<?php } else { ?>
								Les droits définis pour cette catégorie surclassent tout droit global affecté aux objets lui appertenant.
							<?php }?>
							<br>
							Pour attribuer les droits d'accès globaux <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value)); $_block_repeat=true; echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
cliquer ici<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('objectType'=>'global','objectId'=>'','objectName'=>'','permType'=>$_smarty_tpl->tpl_vars['permType']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='category') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Aucune permission n'est appliquée à l'objet, mais les permissions des catégories l'affectant sont affichées ci-dessous.<br>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>Pour modifier les permissions de catégorie <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>'tiki-admin_categories.php')); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
cliquer ici<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>'tiki-admin_categories.php'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='parent') {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement",'highlight'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'highlight'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Il n'y a pas de permissions spécifiques définies pour cet objet. Les permissions globales sont appliquées.<br>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>Pour attribuer les droits d'accès globaux <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value)); $_block_repeat=true; echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
cliquer ici<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('objectType'=>'global','permType'=>$_smarty_tpl->tpl_vars['permType']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.<?php }?>
							<br><br>
							Les permissions héritées sont actuellement affichées.
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement",'highlight'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php }?>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<?php echo Smarty::$_smarty_vars['capture']['notices'];?>

			<hr>
			<h2><?php if ($_smarty_tpl->tpl_vars['objectType']->value=='global') {?>Attribution des permissions globales<?php } elseif ($_smarty_tpl->tpl_vars['objectType']->value=='category') {?>Assigner des droits à cette catégorie<?php } else { ?>Attribuer de nouveaux droits d'accès à cet objet<?php }?> <?php echo smarty_function_icon(array('name'=>"cog",'id'=>"perms_busy",'style'=>"vertical-align:top; display:none;"),$_smarty_tpl);?>
</h2>

			<div>
				<input type="hidden" name="referer" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['referer']->value);?>
">
				<input type="hidden" name="objectName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectName']->value);?>
">
				<input type="hidden" name="objectType" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectType']->value);?>
">
				<input type="hidden" name="objectId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectId']->value);?>
">
				<input type="hidden" name="permType" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permType']->value);?>
">
				<input type="hidden" name="show_disabled_features" value="<?php echo $_smarty_tpl->tpl_vars['show_disabled_features']->value;?>
">

				<div class="input_submit_container" style="text-align: center">
					<input type="submit" class="btn btn-primary btn-sm" name="assign" value="Attribuer">
					<?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct'&&$_smarty_tpl->tpl_vars['objectType']->value!='global') {?>
						<input type="submit" class="btn btn-warning btn-sm" name="remove" value="<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category') {?>Supprimer les permissions spécifiques à cette catégorie<?php } else { ?>Supprimer les permissions spécifiques à cet objet<?php }?>" class="tips" title="Reset Perms|<?php if ($_smarty_tpl->tpl_vars['objectType']->value!='category') {?>Ceci va supprimer tous ces réglages et les droits d'accès vont être réinitialisés pour hériter des droits de catégories définis, ou les droits définis au niveau global su site.<?php } else { ?>Ceci va supprimer tous ces réglages et les droits d'accès vont être réinitialisés pour hériter des droits définis au niveau global su site.<?php }?>">
					<?php }?>
					<input type="submit" class="btn btn-default btn-sm" name="copy" value="Recopie" class="tips" title="Permissions Clipboard|Copier le jeu de permissions ici">
					<?php if (!empty($_smarty_tpl->tpl_vars['perms_clipboard_source']->value)) {?><input type="submit" class="btn btn-default btn-sm" name="paste" value="Coller" class="tips" title="Permissions Clipboard|Coller les permissions copiées à partir de <em><?php echo $_smarty_tpl->tpl_vars['perms_clipboard_source']->value;?>
</em>" /><?php }?>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category') {?>
					<p>
						<input type="checkbox" id="propagate_category" name="propagate_category" value="1">
						<label for="propagate_category">Assigner ou retirer des permissions sur <em>toutes</em> les catégories enfants</label>
					</p>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$("input[name='assign'],input[name='remove']").click(function(){
							if ($("#propagate_category").prop("checked")) {
								return confirm("Êtes-vous sûr(e) de vouloir affecter toutes les catégories enfants ?\nPas d'annulation possible.");
							}
						});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['objectType']->value=='wiki'||$_smarty_tpl->tpl_vars['objectType']->value=='wiki page')&&!empty($_smarty_tpl->tpl_vars['inStructure']->value)) {?>
					<input name="assignstructure" id="assignstructure" type="checkbox">
					<label for="assignstructure">Assigner ou retirer des permissions sur toutes les pages de la sous-structure</label>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						$("input[name='assign'],input[name='remove']").click(function(){
							if ($("#assignstructure").prop("checked")) {
								return confirm("Êtes-vous sûr(e) de vouloir affecter toutes les pages dans cette sous-structure ?\nPas d'annulation possible.");
							}
						});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>

			</div>
			<h3>Droits d'accès</h3>

			<div class="table-responsive">
				<div class="permission_table">
					<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['perms']->value,'_checkbox'=>$_smarty_tpl->tpl_vars['permGroups']->value,'_checkboxTitles'=>$_smarty_tpl->tpl_vars['groupNames']->value,'_checkboxColumnIndex'=>$_smarty_tpl->tpl_vars['permGroupCols']->value,'_valueColumnIndex'=>"permName",'_columns'=>"\"label\"=\"Droit d'accès\"",'_groupColumn'=>'type','_openall'=>'y','_showSelected'=>'y','_columnsContainHtml'=>'y','class'=>'table table-striped objectperms'),$_smarty_tpl);?>

				</div>
			</div>

			<?php if ((count($_smarty_tpl->tpl_vars['perms']->value))=='0') {
$_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vous devez choisir au moins une fonctionnalité.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?>

			<div class="input_submit_container" style="text-align: center">
				<input type="submit" class="btn btn-primary btn-sm" name="assign" value="Attribuer">
				<?php if ($_smarty_tpl->tpl_vars['permissions_displayed']->value=='direct'&&$_smarty_tpl->tpl_vars['objectType']->value!='global') {?>
					<input type="submit" class="btn btn-default btn-sm" name="remove" value="<?php if ($_smarty_tpl->tpl_vars['objectType']->value=='category') {?>Supprimer les permissions spécifiques à cette catégorie<?php } else { ?>Supprimer les permissions spécifiques à cet objet<?php }?>" class="tips" title="Reset Perms|Ceci va supprimer tous ces réglages et les droits d'accès vont être réinitialisés pour hériter des droits définis au niveau global su site.">
				<?php }?>
			</div>
		</form>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Attribuer des droits d'accès"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value)||!empty($_smarty_tpl->tpl_vars['permissions_removed']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Voir les différences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Voir les différences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if (!empty($_smarty_tpl->tpl_vars['permissions_added']->value)) {?>
				<h3>Permissions ajoutées:</h3>
				<blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_added']->value;?>
</blockquote>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['permissions_removed']->value)) {?>
				<h3>Permissions retirées:</h3>
				<blockquote><?php echo $_smarty_tpl->tpl_vars['permissions_removed']->value;?>
</blockquote>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Voir les différences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Sélectionner un/plusieurs groupes")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Sélectionner un/plusieurs groupes"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
			<input type="hidden" name="referer" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['referer']->value);?>
">
			<?php if (isset($_smarty_tpl->tpl_vars['groupsFiltered']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Remarque")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Remarque"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Some of your groups have been automatically hidden.<br> Select the groups below to assign permissions for.
					Ces groupes ne sont pas ceux qui ont des droits sur l'objet. Ce sont les groupes que vous pouvez voir dans les colonnes du premier onglet.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Remarque"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Remarque")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Remarque"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Ces groupes ne sont pas ceux qui ont des droits sur l'objet. Ce sont les groupes que vous pouvez voir dans les colonnes du premier onglet.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Remarque"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['objectId']->value) {?>
			<div class="t_navbar">
				<input type="submit" class="btn btn-default btn-sm" name="used_groups" value="Choisissez seulement les groupes qui ont droit d'accès avec cet objet">
			</div>
			<?php }?>

			<h2>Groupes</h2>

			<div>
			<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['groups']->value,'_checkbox'=>"group_filter",'_checkboxTitles'=>"Tout sélectionner",'_checkboxColumnIndex'=>"in_group_filter",'_valueColumnIndex'=>"id",'_columns'=>'"groupName"="Groupe","groupDesc"="Description"','_sortColumn'=>'parents','_collapseMaxSections'=>20,'_sortColumnDelimiter'=>',','_selectAllHiddenToo'=>'y'),$_smarty_tpl);?>

			</div>

			<div class="input_submit_container" style="text-align: center">
				<input type="submit" class="btn btn-default btn-sm" name="group_select" value="Choisir">
			</div>
		</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Sélectionner un/plusieurs groupes"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Sélectionner une/plusieurs fonctionnalités")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Sélectionner une/plusieurs fonctionnalités"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
			<input type="hidden" name="referer" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['referer']->value);?>
">
			<?php if (isset($_smarty_tpl->tpl_vars['featuresFiltered']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Avertissement")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Some of your features have been automatically hidden.<br> Select the features below to assign permissions for.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Avertissement"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

			<label for="show_disabled_features2">Afficher les permissions pour les fonctionnalités désactivées</label>
			<input type="checkbox" name="show_disabled_features" id="show_disabled_features2" <?php if (isset($_smarty_tpl->tpl_vars['show_disabled_features']->value)&&$_smarty_tpl->tpl_vars['show_disabled_features']->value=='y') {?>checked="checked"<?php }?> onchange="this.form.submit();">

			<h2>Fonctionnalités</h2>

			<div>
			<?php echo smarty_function_treetable(array('_data'=>$_smarty_tpl->tpl_vars['features']->value,'_checkbox'=>"feature_filter",'_checkboxTitles'=>"Tout sélectionner",'_checkboxColumnIndex'=>"in_feature_filter",'_valueColumnIndex'=>"featureName",'_columns'=>'"featureName"="Fonctionnalité nom"','_sortColumn'=>"featureName",'_sortColumnDelimiter'=>'*','_collapseMaxSections'=>20,'_listFilter'=>'n'),$_smarty_tpl);?>

			</div>

			<div class="input_submit_container" style="text-align: center">
				<input type="submit" class="btn btn-default btn-sm" name="feature_select" value="Choisir">
			</div>
		</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Sélectionner une/plusieurs fonctionnalités"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quick_object_perms']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Permissions rapides")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Permissions rapides"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form name="allperms" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?<?php echo smarty_function_query(array(),$_smarty_tpl);?>
">
		<div>
		<input type="hidden" name="quick_perms" value="true">


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>
			<h2>Permissions rapides</h2>
		<?php }?>

		<?php echo Smarty::$_smarty_vars['capture']['notices'];?>


		<h2>Attribuer des permissions rapides pour cet objet</h2>

		<table class="table">
			<tr>
				<th>Groupes</th>
			<?php  $_smarty_tpl->tpl_vars['permgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quickperms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->key => $_smarty_tpl->tpl_vars['permgroup']->value) {
$_smarty_tpl->tpl_vars['permgroup']->_loop = true;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
</th>
			<?php } ?>
				<th class="tips" title="Quelques permissions définies par l'utlisateur sont assignées (voir l'onglet Attribuer des Parmissions)">Advanced</th>
			</tr>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['name'] = 'grp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['grp']['total']);
?>
				<?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']!='Admins') {?>
					<tr>
						<td>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName']);?>

						</td>
						<?php  $_smarty_tpl->tpl_vars['permgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permgroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quickperms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permgroup']->key => $_smarty_tpl->tpl_vars['permgroup']->value) {
$_smarty_tpl->tpl_vars['permgroup']->_loop = true;
?>
						<td>
							<input type="radio" name="perm_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName'],'url');?>
" value="<?php echo $_smarty_tpl->tpl_vars['permgroup']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupSumm']==$_smarty_tpl->tpl_vars['permgroup']->value['name']) {?>checked<?php }?>>
						</td>
						<?php } ?>
						<td>
							<input type="radio" name="perm_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupName'],'url');?>
" value="userdefined" <?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['grp']['index']]['groupSumm']=='userdefined') {?>checked<?php }?> disabled>
						</td>
					</tr>
				<?php }?>
			<?php endfor; endif; ?>
		</table>

		<input type="hidden" name="referer" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['referer']->value);?>
">
		<input type="hidden" name="objectName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectName']->value);?>
">
		<input type="hidden" name="objectType" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectType']->value);?>
">
		<input type="hidden" name="objectId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['objectId']->value);?>
">
		<input type="hidden" name="permType" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permType']->value);?>
">
		<input type="hidden" name="show_disabled_features" value="<?php echo $_smarty_tpl->tpl_vars['show_disabled_features']->value;?>
">
		<div class="input_submit_container" style="text-align: center">
			<input type="submit" class="btn btn-primary btn-sm" name="assign" value="Attribuer">
		</div>

		<?php if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'icon'=>"bricks",'title'=>"Expérimental")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Expérimental"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<em>Les permissions rapides</em> doivent être considérées comme une fonctionnalité expérimentale.<br/>
				Bien que les autorisations seront fixées comme prévu en utilisant ce formulaire, il ne montrent pas nécessairement les permissions en cours de manière fiable.<br><br>
				Ici aussi, pas de retour en arrière possible - <strong>Utiliser avec précaution !</strong>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'icon'=>"bricks",'title'=>"Expérimental"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		</div>
	</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Permissions rapides"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_objectpermissions'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
