<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:57:44
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admingroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139321944583eb0a8adcb48-48586181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e25aa0780b3638ca8d6acb9d6ad48a381d84b3' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admingroups.tpl',
      1 => 1458300953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139321944583eb0a8adcb48-48586181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupname' => 0,
    'prefs' => 0,
    'tiki_p_invite' => 0,
    'cant_pages' => 0,
    'maxRecords' => 0,
    'initial' => 0,
    'find' => 0,
    'js' => 0,
    'users' => 0,
    'incl' => 0,
    'libeg' => 0,
    'liend' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tabaddeditgroup_admgrp' => 0,
    'user' => 0,
    'group_info' => 0,
    'groupdesc' => 0,
    'inc' => 0,
    'hasOneIncludedGroup' => 0,
    'yn' => 0,
    'gr' => 0,
    'indirectly_inherited_groups' => 0,
    'grouphome' => 0,
    'groupdefcat' => 0,
    'categories' => 0,
    'id' => 0,
    'category' => 0,
    'grouptheme' => 0,
    'group_themes' => 0,
    'theme' => 0,
    'theme_name' => 0,
    'trackers' => 0,
    'tid' => 0,
    'grouptrackerid' => 0,
    'tit' => 0,
    'groupFields' => 0,
    'groupfieldid' => 0,
    'userstrackerid' => 0,
    'usersFields' => 0,
    'usersfieldid' => 0,
    'registrationUsersFieldIds' => 0,
    'userChoice' => 0,
    'group' => 0,
    'groupitemid' => 0,
    'memberslist' => 0,
    'member' => 0,
    'membersCount' => 0,
    'membersOffset' => 0,
    'bannedlist' => 0,
    'userslist' => 0,
    'iuser' => 0,
    'errors' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb0a91b24c2_45229748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb0a91b24c2_45229748')) {function content_583eb0a91b24c2_45229748($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_permission_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.permission_link.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_initials_filter_links')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_block_self_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_block_pagination_links')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_function_autocomplete')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_modifier_userlink')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Groups Management",'admpage'=>"login")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Administrer les groupes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-default",'_type'=>"link",'_icon_name'=>"user",'_text'=>"Administrer les utilisateurs"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?clean=y",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"trash",'_text'=>"Vider l'antémémoire"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2#tab2",'class'=>"btn btn-default",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2",'class'=>"btn btn-default",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<button class="btn btn-link">
		<?php echo smarty_function_permission_link(array('mode'=>'text','_type'=>"link"),$_smarty_tpl);?>

	</button>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_invite']->value=='y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'class'=>"btn btn-default",'_type'=>"link",'_icon_name'=>"thumbs-up",'_text'=>"Liste d'invitation"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admingroups')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Liste")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Liste"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		<h2>Liste des groupes existants</h2>

		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('find_show_num_rows'=>'y'), 0);?>


		<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>$_smarty_tpl->tpl_vars['maxRecords']->value||!empty($_smarty_tpl->tpl_vars['initial']->value)||!empty($_smarty_tpl->tpl_vars['find']->value)) {?>
			<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
			<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
		<?php }?>
		<form name="checkform" method="post">
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
				<table class="table table-striped table-hover">
					<tr>
						<th style="width: 20px;"><?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>
</th>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'id')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nom<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th>Hérite les permissions de</th>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
							<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page d'accueil<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<?php }?>

						<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Choix de l'utilisateur<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
						<th></th>
					</tr>

					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
						<tr>
							<td class="checkbox-cell">
								<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered') {?>
									<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
">
								<?php }?>
							</td>
							<td class="id"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id']);?>
</td>
							<td class="text">
								<a class="link" href="tiki-admingroups.php?group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],"url");?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#tab2<?php }?>" title="Éditer"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
</a>
								<div class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupDesc']));
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
							</td>
							<td class="text">
								<?php  $_smarty_tpl->tpl_vars['incl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incl']->key => $_smarty_tpl->tpl_vars['incl']->value) {
$_smarty_tpl->tpl_vars['incl']->_loop = true;
?>
									<div>
										<?php if (in_array($_smarty_tpl->tpl_vars['incl']->value,$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included_direct'])) {?>
											<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['incl']->value);?>

										<?php } else { ?>
											<i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['incl']->value);?>
</i>
										<?php }?>
									</div>
								<?php } ?>
							</td>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
								<td class="text">
									<a class="link" href="tiki-index.php?page=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome'],"url");?>
" title="Page d'accueil du groupe"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
								</td>
							<?php }?>

							<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userChoice'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
							<td class="action">
								<?php $_smarty_tpl->_capture_stack[0][] = array('group_actions', null, null); ob_start(); ?>
									<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admingroups.php?group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],"url");?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#tab2<?php }?>"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Éditer"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','group'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],'count'=>$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['permcant']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admingroups.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;action=delete&amp;group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'],"url");?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Supprimer"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}?>
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
								<a
									class="tips"
									title="Actions"
									href="#"
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['group_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
									style="padding:0; margin:0; border:0"
								>
									<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

								</a>
								<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
									<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['group_actions'];?>
</ul></li></ul>
								<?php }?>
							</td>
						</tr>
					<?php endfor; endif; ?>
				</table>
			</div>
			<div class="form-group" >
				<div class="input-group col-sm-6">
					<label for="submit_mult" class="control-label sr-only">Select action to perform with checked</label>
						<select name="submit_mult" class="form-control">
							<option value="" selected="selected">Select action to perform with checked...</option>
							<option value="remove_groups" >Supprimer</option>
						</select>
					<div class="input-group-btn">
						<input type="submit" class="btn btn-primary" value="OK">
					</div>
				</div>
			</div>
		</form>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Liste"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tabaddeditgroup_admgrp', null); ob_start(); ?>Modifier le groupe <i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</i><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp'] = new Smarty_variable("Ajouter un nouveau groupe", null, 0);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value))); $_block_repeat=true; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		

		<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'&&!empty($_smarty_tpl->tpl_vars['groupname']->value)) {?>
			<div class="pull-right">
				<?php if (!$_smarty_tpl->tpl_vars['group_info']->value['isWatching']) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe n'est PAS surveillé. Cliquer sur l'icône pour DÉMARRER la surveillance.")); $_block_repeat=true; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe n'est PAS surveillé. Cliquer sur l'icône pour DÉMARRER la surveillance."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo smarty_function_icon(array('name'=>'watch','alt'=>"Ce groupe n'est PAS surveillé. Cliquer sur l'icône pour DÉMARRER la surveillance."),$_smarty_tpl);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe n'est PAS surveillé. Cliquer sur l'icône pour DÉMARRER la surveillance."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe EST sous surveillance. Cliquer sur l'icône pour STOPPER la surveillance.")); $_block_repeat=true; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe EST sous surveillance. Cliquer sur l'icône pour STOPPER la surveillance."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php echo smarty_function_icon(array('name'=>'stop-watching','alt'=>"Ce groupe EST sous surveillance. Cliquer sur l'icône pour STOPPER la surveillance."),$_smarty_tpl);?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Ce groupe EST sous surveillance. Cliquer sur l'icône pour STOPPER la surveillance."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</div>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value;?>
</h2>

		<form class="form-horizontal" action="tiki-admingroups.php" method="post">
			<div class="form-group">
				<label for="groups_group" class="control-label col-md-3">Groupe</label>
				<div class="col-md-9">
					<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins') {?>
						<input type="text" name="name" id="groups_group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
" class="form-control">
					<?php } else { ?>
						<input type="hidden" name="name" id="groups_group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>

					<?php }?>
				</div>
			</div>
			<div class="form-group">
				<label for="groups_desc" class="control-label col-md-3">Description</label>
				<div class="col-md-9">
					<textarea rows="5" name="desc" id="groups_desc" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupdesc']->value);?>
</textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="groups_inc" class="control-label col-md-3">Inheritance</label>
				<div class="col-md-9">
					<?php if (count($_smarty_tpl->tpl_vars['inc']->value)>20&&$_smarty_tpl->tpl_vars['hasOneIncludedGroup']->value=="y") {?>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['yn']->value=='y') {?>
									<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
</li>
								<?php }?>
							<?php } ?>
						</ul>
					<?php }?>
					<select name="include_groups[]" id="groups_inc" multiple="multiple" size="8" class="form-control">
						<?php if (!empty($_smarty_tpl->tpl_vars['groupname']->value)) {?><option value="">Aucun</option><?php }?>
						<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['yn']->value=='y') {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value,"52"));?>
</option>
						<?php } ?>
					</select>
					<div class="help-block">
						<p>Permissions will be inherited from these groups.</p>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?>
							<p>Utiliser Ctrl+Click pour sélectionner plusieurs options</p>
						<?php }?>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value)>0) {?>
						<p>Indirectly included groups:</p>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
?>
								<li><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
</li>
							<?php } ?>
						</ul>
					<?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y') {?>
				<div class="form-group">
					<label for="groups_home" class="control-label col-md-3">Group Home</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="home" id="groups_home" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['grouphome']->value);?>
">
						<?php echo smarty_function_autocomplete(array('element'=>'#groups_home','type'=>'pagename'),$_smarty_tpl);?>

						<div class="help-block">
							Utiliser le nom de la page Wiki ou l'URL complet.
							Pour les autres fonctionnalités Tiki, utiliser des liens relatifs (comme <em>/tiki-forums.php</em>).
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y') {?>
				<div class="form-group">
					<label for="groups_defcat" class="control-label col-md-3">Default Category</label>
					<div class="col-md-9">
						<select name="defcat" id="groups_defcat" class="form-control">
							<option value="" <?php if (($_smarty_tpl->tpl_vars['groupdefcat']->value=='')||($_smarty_tpl->tpl_vars['groupdefcat']->value==0)) {?> selected="selected"<?php }?>>aucun</option>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['id']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['groupdefcat']->value) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['category']->value['categpath']);?>
</option>
							<?php } ?>
						</select>
						<div class="help-block">
							Catégorie associée par défaut aux objects édités par un utilisateur ayant ce groupe par défaut.
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme']=='y') {?>
				<div class="form-group">
					<label for="groups_theme" class="control-label col-md-3">Thème du groupe</label>
					<div class="col-md-9">
						<select name="theme" id="groups_theme" class="form-control">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value=='') {?> selected="selected"<?php }?>>aucun (Utiliser la valeur par défaut du site)</option>
							<?php  $_smarty_tpl->tpl_vars['theme_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['theme_name']->_loop = false;
 $_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->key => $_smarty_tpl->tpl_vars['theme_name']->value) {
$_smarty_tpl->tpl_vars['theme_name']->_loop = true;
 $_smarty_tpl->tpl_vars['theme']->value = $_smarty_tpl->tpl_vars['theme_name']->key;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['theme']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value==$_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y') {?>
				<div class="form-group">
					<label for="groupstracker" class="control-label col-md-3">Formulaire d'information sur le groupe</label>
					<div class="col-md-9">
						<select name="groupstracker" id="groupstracker" class="form-control">
							<option value="0">Choose a group tracker ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['grouptrackerid']->value) {?> <?php $_smarty_tpl->tpl_vars["ggr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tit']->value);?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value) {?>
							<div>
								<select name="groupfield" class="form-control">
									<option value="0">choisissez un champ ...</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groupFields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['groupfieldid']->value) {?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
									<?php endfor; endif; ?>
								</select>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Administrer ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Administrer ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y') {?>
				<div class="form-group">
					<label for="userstracker" class="control-label col-md-3">Formulaire d'information sur l'utilisateur</label>
					<div class="col-md-9">
						<select name="userstracker" id="userstracker" class="form-control">
							<option value="0">choisissez un formulaire pour les utilisateurs ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['userstrackerid']->value) {?> <?php $_smarty_tpl->tpl_vars["ugr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tit']->value);?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['userstrackerid']->value||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?>
							<div>
								<select name="usersfield"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y') {?> style="display: none;"<?php }?> class="form-control">
									<option value="0">Choisissez un champ ...</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usersFields']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['usersfieldid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
 - <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name']);?>
</option>
									<?php endfor; endif; ?>
								</select>
							</div>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								$("#userstracker").change(function () {
									$.getJSON($.service('tracker', 'list_fields'), {trackerId: $(this).val()}, function (data) {
										if (data && data.fields) {
											var $usersfield = $('select[name=usersfield]');
											$usersfield.empty().append('<option value="0">choisissez un champ ...</option>');
											var sel = '';
											$(data.fields).each(function () {
												if (this.type === 'u' && this.options_array[0] == 1) {
													sel = ' selected="selected"';
												} else {
													sel = '';
												}
												$usersfield.append('<option value="' + this.fieldId + '"' + sel + '>' + this.fieldId + ' - ' + this.name + '</option>');
											});
											if (jqueryTiki.chosen) {
												$usersfield.trigger("chosen:updated");
											} else {
												$usersfield.show();
											}
										}
									});
								});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['userstrackerid']->value) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['userstrackerid']->value),'_text'=>"Administrer ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Administrer ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
				<div class="form-group">
					<label for="registrationUserFieldIds" class="control-label col-md-3">Champs d'enregistrement</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="registrationUsersFieldIds" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['registrationUsersFieldIds']->value);?>
">
						<div class="help-block">
							<p>Users Information Tracker Fields Asked at Registration Time</p>
							<p>fieldIds separated with colons (:)</p>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user']=='y'&&$_smarty_tpl->tpl_vars['groupname']->value=='Registered') {?>
					<div class="form-group">
						<label for="groups_group" class="control-label col-md-3">User Wizard Fields</label>
						<div class="col-md-9">
							By default, the same fields as in Registration are used. <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-admin.php?page=login")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can choose in the <a href="%0">Login admin panel</a> to show different fields in User Wizard than the ones asked at Registration Time<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</td>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins') {?>
				<div class="form-group">
					<div class="col-md-9 col-md-offset-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="userChoice"<?php if ($_smarty_tpl->tpl_vars['userChoice']->value=='y') {?> checked="checked"<?php }?>>
								Un utilisateur peut se mettre dans ce groupe lui-même
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="groups_group" class="control-label col-md-3">Expiration</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="expireAfter" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['expireAfter']);?>
">
						<div class="help-block">
							Amount of days after which the group will be unassigned from the users.
						</div>
						<p>Or, users are automatically unassigned from the group at an anniversary date</p>
						<input type="text" name="anniversary" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['anniversary']);?>
">
						<div class="help-block">MMDD for annual or DD for monthly</div>
					</div>
				</div>
				<div class="form-group">
					<label for="prorateInterval" class="control-label col-md-3">Pro-Rate Membership</label>
					<div class="col-md-9">
						<select name="prorateInterval" class="form-control">
							<option value="day" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='day') {?>selected="selected"<?php }?>>Jour</option>
							<option value="month" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='month') {?>selected="selected"<?php }?>>Mois</option>
							<option value="year" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='year') {?>selected="selected"<?php }?>>Année</option>
						</select>
						<div class="help-block">
							Payment for membership extension is prorated at a minimum interval.
						</div>
					</div>
				</div>
			<?php }?>
			<div class="form-group">
				<label for="groups_group" class="control-label col-md-3">Groupe</label>
				<div class="col-md-9">
					<input class="form-control" type="text" size="40" name="emailPattern" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group_info']->value['emailPattern']);?>
">
					<div class="help-block">
						<p>Les utilsateurs sont automatiquement assignés dès leur enregistrement au groupe si leur adresse mail est de la forme.</p>
						<p>Exemple : /@(tw.org$)|(tw\.com$)/</p>
					</div>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['group']->value!=''&&$_smarty_tpl->tpl_vars['groupname']->value!='Anonymous') {?>
				<div class="form-group">
					<label for="groups_group" class="control-label col-md-6">Assign group <em>management</em> permissions</label>
					<div class="col-md-6">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('_text'=>"Attribuer des droits d'accès",'name'=>"key"),$_smarty_tpl);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
			<?php }?>

			<div class="submit form-group">
				<div class="col-md-9 col-md-offset-3">
					<?php if ($_smarty_tpl->tpl_vars['group']->value!='') {?>
						<input type="hidden" name="olgroup" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
">
						<input type="submit" class="btn btn-primary" name="save" value="Enregistrer">
					<?php } else { ?>
						<input type="submit" class="btn btn-primary" name="newgroup" value="Ajouter">
					<?php }?>
				</div>
			</div>
			<br><br>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value&&$_smarty_tpl->tpl_vars['groupitemid']->value) {?>
					La fiche du groupe : <?php echo $_smarty_tpl->tpl_vars['groupitemid']->value;?>

						<?php echo smarty_function_button(array('href'=>"tiki-view_tracker_item.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value)."&amp;itemId=".((string)$_smarty_tpl->tpl_vars['groupitemid']->value)."&amp;show=mod",'_text'=>"Modifier la fiche"),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['grouptrackerid']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['groupfieldid']->value) {?>
						La fiche du groupe non trouvée
						<?php echo smarty_function_button(array('href'=>"tiki-view_tracker.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Créer une fiche"),$_smarty_tpl);?>

					<?php } else { ?>
						Choisissez un champ ...
					<?php }?>
				<?php }?>
				<br><br>
			<?php }?>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Membres")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Membres"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
			<h2>Liste des membres: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</h2>
			<form name="checkform" method="post">
				<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['group']->value);?>
">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th class="auto"><?php if ($_smarty_tpl->tpl_vars['memberslist']->value) {
echo smarty_function_select_all(array('checkbox_names'=>'members[]'),$_smarty_tpl);
}?></th>
							<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Utilisateur<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
							<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Attribuer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
							<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expire<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
							<th>Action</th>
						</tr>

						<tr>
							<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
								<tr>
								<td class="checkbox-cell"><input type="checkbox" name="members[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['userId'];?>
"></td>
								<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value['login']);?>
</td>
								<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['created']);?>
</td>
								<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['expire'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['expire']);
}?></td>
								<td class="action">
									<a href="tiki-adminusers.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value['userId'],"url");?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y') {?>#tab2<?php }?>"
									   class="link tips"
									   title="<?php echo $_smarty_tpl->tpl_vars['member']->value['login'];?>
:Modifier l'utilisateur">
										<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>

									</a>
									<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered') {?>
										<a href="tiki-adminusers.php?user=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value['login'],"url");?>
&amp;action=removegroup&amp;group=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value,'url');?>
"
										   class="link tips"
										   title="<?php echo $_smarty_tpl->tpl_vars['member']->value['login'];?>
:Remove from group">
											<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

										</a>
									<?php }?>
								</td>
								</tr>
							<?php } ?>
					</table>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered') {?>
				<label>Action à mener sur les éléments sélectionnés :
					<select name="submit_mult_members">
						<option value="" />
						<option value="unassign">Désattribuer</option>
					</select>
				</label>
				<input type="submit" class="btn btn-default btn-sm" name="unassign_members" value="OK">
				<?php }?>
			</form>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset')); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


			<div class="box"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
 utilisateurs dans le groupe <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</div>

			<h2>Liste des membres bannis: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</h2>
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Utilisateur</th>
						<th>Action</th>
					</tr>

					<tr>
						<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannedlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
							<tr>
							<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value);?>
</td>
							<td class="action">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('user'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value,"url"),'action'=>'unbanuser','group'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value,'url'),'_title'=>"Dé-bannir un utilisateur")); $_block_repeat=true; echo smarty_block_self_link(array('user'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value,"url"),'action'=>'unbanuser','group'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value,'url'),'_title'=>"Dé-bannir un utilisateur"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>

								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('user'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['member']->value,"url"),'action'=>'unbanuser','group'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value,'url'),'_title'=>"Dé-bannir un utilisateur"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</td>
							</tr>
						<?php } ?>
				</table>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['userslist']->value)) {?>
				<h2>Add or Ban members to: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
</h2>
				<form method="post" action="tiki-admingroups.php">
					<p>
						<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">
						<select name="user">
							<?php  $_smarty_tpl->tpl_vars['iuser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iuser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iuser']->key => $_smarty_tpl->tpl_vars['iuser']->value) {
$_smarty_tpl->tpl_vars['iuser']->_loop = true;
?>
								<option><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iuser']->value);?>
</option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-default btn-sm" name="adduser" value="Ajouter au groupe">
						<input type="submit" class="btn btn-default btn-sm" name="banuser" value="Bannir l'utilisateur du groupe">
					</p>
				</form>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Membres"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Importer/Exporter")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Importer/Exporter"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			
			<form method="post" action="tiki-admingroups.php" enctype="multipart/form-data" class="form-horizontal">
				<input type="hidden" name="group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
">
				<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
					<div class="simple highlight">
						<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
							<?php echo $_smarty_tpl->tpl_vars['e']->value;?>
<br>
						<?php } ?>
					</div>
				<?php }?>

				<h2>Exporter en CSV</h2>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Encodage des caractères</label>
                    <div class="col-sm-7">
                        <select name="encoding" class="form-control">
                            <option value="UTF-8" selected="selected">UTF-8</option>
                            <option value="ISO-8859-1">ISO-8859-1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Champs</label>
                    <div class="col-sm-7">
                       <div class="col-sm-12">
                           <input type="checkbox" name="username" checked="checked"> Nom d'utilisateur
                       </div>
                        <div class="col-sm-12">
                            <input type="checkbox" name="email"> Adresse courriel
                        </div>
                        <div class="col-sm-12">
                            <input type="checkbox" name="lastLogin"> Dernière connexion
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-7">
                        <input type="submit" class="btn btn-default btn-sm" name="export" value="Exporter">
                    </div>
                </div>
                <br>
				<h2>Chargement par lot (fichier CSV)</h2>
                <br>
				<h3>Affecter des utilisateurs à des groupes: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['groupname']->value);?>
 </h3>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Conseil")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Conseil"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					Tout utilisateur dans le fichier doit déjà exister.<br>Pour créer des utilisateurs et/ou les assigner à un/plusieurs groupe, aller à <a href="tiki-adminusers.php">admin->users</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Conseil"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fichier CSV<a title="Aide" <?php echo smarty_function_popup(array('text'=>'user<br>user1<br>user2'),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a></label>
                    <div class="col-sm-7">
                        <input name="csvlist" type="file" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-7">
                        <input type="submit" class="btn btn-default btn-sm" name="import" value="Importer">
                    </div>
                </div>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Importer/Exporter"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
