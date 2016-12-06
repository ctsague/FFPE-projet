<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:03:50
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745296060583eea5675f8f1-28288965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38ee1ef5ac6b9bade86c4a6ff7c0201ffef48f8e' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_community.tpl',
      1 => 1458054009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745296060583eea5675f8f1-28288965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
    'monitor_command' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eea567e0076_44406197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eea567e0076_44406197')) {function content_583eea567e0076_44406197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_permission_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.permission_link.php';
if (!is_callable('smarty_function_service')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_help')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.help.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=community" method="post">
	<input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"group",'_text'=>"Groupes",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"user",'_text'=>"Utilisateurs",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('addclass'=>"btn btn-link",'_type'=>"text",'mode'=>'text','label'=>"Droits d'accès"),$_smarty_tpl);?>

		<a href="<?php echo smarty_function_service(array('controller'=>'managestream','action'=>'list'),$_smarty_tpl);?>
" class="btn btn-link tips">Activity Rules</a>
		<div class="pull-right">
			<input type="submit" class="btn btn-primary btn-sm tips" title=":Apply Changes" value="Appliquer">
		</div>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_community")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_community"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Fonctionnalités utilisateur")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Fonctionnalités utilisateur"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Fonctionnalités utilisateur</h2>
			<div class="admin featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_unified_user_details'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_score'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_minical'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_notepad'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_user_bookmarks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_contacts'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'monitor_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="monitor_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'monitor_individual_clear'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'monitor_count_refresh_interval'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'monitor_reply_email_pattern'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'monitor_digest'),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						For the digest emails to be sent out, you will need to set-up a cron job.</br>
						Adjust the command parameters for your digest frequency. Default frequency is 7 days.</br>
						<strong>Sample command:</strong>
						<code>/usr/bin/php <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['monitor_command']->value);?>
</code>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_usermenu'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_tasks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_userfiles'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userfiles_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_token_tellafriend'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_token_share'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_group_transition'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_favorites'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_likes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_invite'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mustread_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="mustread_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'mustread_tracker'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'user_multilike_config'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Fonctionnalités utilisateur"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Social Network")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Social Network"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Social Network</h2>
			<fieldset class="table">
				<legend>Friendship and Followers</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_friends'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_friends_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'social_network_type'),$_smarty_tpl);?>

					<fieldset>
						<legend>Sélectionner les informations utilisateurs à afficher lors du listing</legend>
						<?php echo smarty_function_preference(array('name'=>'user_list_order'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_name'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_score'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_country'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_distance'),$_smarty_tpl);?>

					</fieldset>
				</div>
			</fieldset>
			<fieldset class="table">
				<legend>Activity Stream</legend>
				<?php echo smarty_function_preference(array('name'=>'activity_basic_events'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="activity_basic_events_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'activity_basic_tracker_create'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_tracker_update'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_follow_add'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_follow_incoming'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_friend_add'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'activity_custom_events'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'activity_notifications'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Goal, Recognition and Rewards</legend>
				<?php echo smarty_function_preference(array('name'=>'goal_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'goal_badge_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'goal_group_blacklist'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Social Network"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugiciels")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugiciels"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Plugiciels</h2>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_avatar'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_favorite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_group'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_groupexpiry'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_invite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_mail'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_map'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberlist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberpayment'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_perm'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_proposal'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_realnamelist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroup'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroups'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_topfriends'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_usercount'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlink'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userpref'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugiciels"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Configuration générale")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Configuration générale"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Configuration générale</h2>
			<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'highlight_group'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_display_my_to_others'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_tracker_infos'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_days'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_show_others'),$_smarty_tpl);?>

			<fieldset>
				<legend>Profile picture</legend>
					<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_store_file_gallery_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_size'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_square_crop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_picture_gallery_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_default_picture_id'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Communauté<?php echo smarty_function_help(array('url'=>"Community"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_community_gender'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_community_mouseover_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_gender'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_score'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_country'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_lastlogin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_distance'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>
					Préférences par défaut de l'utilisateur
					<?php echo smarty_function_help(array('url'=>"UsersDefaultPrefs",'desc'=>"Préférences de l'utilisateur par défaut"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_userbreadCrumb'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_user_dbl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_tasks_maxRecords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_diff_versions'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Messages utilisateur
					<?php echo smarty_function_help(array('url'=>"Inter-User+Messages"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_maxRecords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_sendReadStatus'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_minPrio'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_archiveAfter'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Mon Tiki</legend>
				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_pages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_blogs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_gals'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_msgs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_tasks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_topics'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_replies'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_items'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Configuration générale"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"BigBlueButton")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"BigBlueButton"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>BigBlueButton</h2>
			<?php echo smarty_function_preference(array('name'=>'bigbluebutton_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="bigbluebutton_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_salt'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_recording_max_duration'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bigbluebutton'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"BigBlueButton"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_community"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="t_navbar margin-bottom-md text-center">
		<input type="hidden" name="userfeatures" />
		<input type="submit" class="btn btn-primary btn-sm tips" title=":Apply Changes" value="Appliquer">
	</div>
</form>
<?php }} ?>
