<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:16:19
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admin_forums.tpl" */ ?>
<?php /*%%SmartyHeaderCode:463916786583eb50318c953-91958530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16cfca50181230e71c384fbcdc38f9ad337346e6' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admin_forums.tpl',
      1 => 1457197740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '463916786583eb50318c953-91958530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsAjax' => 0,
    'tiki_p_admin_forum' => 0,
    'forumId' => 0,
    'dup_mode' => 0,
    'tiki_p_forum_read' => 0,
    'channels' => 0,
    'find' => 0,
    'tsOn' => 0,
    'prefs' => 0,
    'ts_tableid' => 0,
    'js' => 0,
    'cant' => 0,
    'numbercol' => 0,
    'libeg' => 0,
    'liend' => 0,
    'tiki_p_forum_lock' => 0,
    'tiki_p_admin' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'name' => 0,
    'permsType' => 0,
    'description' => 0,
    'forumSection' => 0,
    'sections' => 0,
    'languages' => 0,
    'forumLanguage' => 0,
    'data' => 0,
    'image' => 0,
    'is_flat' => 0,
    'moderator' => 0,
    'moderator_group' => 0,
    'forum_use_password_options' => 0,
    'forum_use_password' => 0,
    'forum_password' => 0,
    'controlFlood' => 0,
    'flood_options' => 0,
    'floodInterval' => 0,
    'useMail' => 0,
    'mail' => 0,
    'usePruneUnreplied' => 0,
    'pruneUnrepliedAge_options' => 0,
    'pruneUnrepliedAge' => 0,
    'usePruneOld' => 0,
    'pruneMaxAge_options' => 0,
    'pruneMaxAge' => 0,
    'outbound_address' => 0,
    'outbound_mails_for_inbound_mails' => 0,
    'outbound_mails_reply_link' => 0,
    'outbound_from' => 0,
    'inbound_pop_server' => 0,
    'inbound_pop_user' => 0,
    'inbound_pop_password' => 0,
    'show_description' => 0,
    'forum_last_n_options' => 0,
    'forum_last_n' => 0,
    'topicOrdering_options' => 0,
    'topicOrdering' => 0,
    'topicsPerPage' => 0,
    'topics_list_replies' => 0,
    'topics_list_reads' => 0,
    'topics_list_pts' => 0,
    'topics_list_lastpost' => 0,
    'topics_list_lastpost_title' => 0,
    'topics_list_lastpost_avatar' => 0,
    'topics_list_author' => 0,
    'topics_list_author_avatar' => 0,
    'topic_smileys' => 0,
    'topic_summary' => 0,
    'threadOrdering_options' => 0,
    'threadOrdering' => 0,
    'threadStyle_options' => 0,
    'threadStyle' => 0,
    'commentsPerPage_options' => 0,
    'commentsPerPage' => 0,
    'approval_options' => 0,
    'approval_type' => 0,
    'ui_avatar' => 0,
    'ui_rating_choice_topic' => 0,
    'ui_flag' => 0,
    'ui_posts' => 0,
    'ui_level' => 0,
    'ui_email' => 0,
    'ui_online' => 0,
    'vote_threads' => 0,
    'attachment_options' => 0,
    'att' => 0,
    'att_store' => 0,
    'att_store_dir' => 0,
    'att_max_size' => 0,
    'maxAttachSize' => 0,
    'att_list_nb' => 0,
    'allForums' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb503693168_00722278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb503693168_00722278')) {function content_583eb503693168_00722278($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_select_all')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_block_self_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_permission_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.permission_link.php';
if (!is_callable('smarty_function_bootstrap_modal')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.bootstrap_modal.php';
if (!is_callable('smarty_function_popup')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_function_norecords')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_function_file_selector')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.file_selector.php';
if (!is_callable('smarty_function_autocomplete')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_function_html_options')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/vendor/smarty/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_kbsize')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.kbsize.php';
?>
<?php if (!$_smarty_tpl->tpl_vars['tsAjax']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Forums",'admpage'=>"forums",'url'=>'tiki-admin_forums.php')); $_block_repeat=true; echo smarty_block_title(array('help'=>"Forums",'admpage'=>"forums",'url'=>'tiki-admin_forums.php'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Administrer les forums<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Forums",'admpage'=>"forums",'url'=>'tiki-admin_forums.php'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<div class="t_navbar margin-bottom-md">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'&&$_smarty_tpl->tpl_vars['forumId']->value>0||(isset($_smarty_tpl->tpl_vars['dup_mode']->value)&&$_smarty_tpl->tpl_vars['dup_mode']->value=='y')) {?>
			<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"?",'_icon_name'=>"add",'_text'=>"Create Forum"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'&&(!isset($_smarty_tpl->tpl_vars['dup_mode']->value)||$_smarty_tpl->tpl_vars['dup_mode']->value!='y')) {?>
			<?php echo smarty_function_button(array('class'=>"btn btn-default",'href'=>"tiki-admin_forums.php?dup_mode=y",'_icon_name'=>"copy",'_text'=>"Dupliquer"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['forumId']->value>0) {?>
			<?php echo smarty_function_button(array('_type'=>"link",'class'=>"btn btn-link",'href'=>"tiki-view_forum.php?forumId=".((string)$_smarty_tpl->tpl_vars['forumId']->value),'_icon_name'=>"view",'_text'=>"Afficher"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
			<?php echo smarty_function_button(array('_type'=>"link",'class'=>"btn btn-link",'href'=>"tiki-forum_import.php",'_icon_name'=>"import",'_text'=>"Importer"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y') {?>
			<?php echo smarty_function_button(array('_type'=>"link",'class'=>"btn btn-link",'href'=>"tiki-forums.php",'_icon_name'=>"list",'_text'=>"Liste"),$_smarty_tpl);?>

		<?php }?>
	</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('utilities/feedback.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Forums de discussion")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Forums de discussion"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Forums de discussion</h2>

		<?php if (($_smarty_tpl->tpl_vars['channels']->value||($_smarty_tpl->tpl_vars['find']->value!=''))&&!$_smarty_tpl->tpl_vars['tsOn']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
		<form method='post' id="admin_forums">
			<div id="<?php echo $_smarty_tpl->tpl_vars['ts_tableid']->value;?>
-div" class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?> ts-wrapperdiv" <?php if ($_smarty_tpl->tpl_vars['tsOn']->value) {?>style="visibility:hidden;"<?php }?>>
				<table  id="<?php echo $_smarty_tpl->tpl_vars['ts_tableid']->value;?>
" class="table table-striped table-hover" data-count="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cant']->value);?>
">
					<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable(0, null, 0);?>
					<thead>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
								<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
								<th id="checkbox" style="text-align:center">
									<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

								</th>
							<?php }?>
							<th id="name">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nom<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							</th>
							<th id="threads">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'threads')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sujets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'threads'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							</th>
							<th id="comments">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'comments')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Commentaires<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'comments'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							</th>
							<th id="users">Utilisateurs</th>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							<th id="age">Âge</th>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							<th id="ppd">Ar/jo</th>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							<th id="hits">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visites<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
							</th>
							<th id="actions"></th>
							<?php $_smarty_tpl->tpl_vars['numbercol'] = new Smarty_variable($_smarty_tpl->tpl_vars['numbercol']->value+1, null, 0);?>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<td style="text-align:center">
									<input type="checkbox" name="checked[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']);?>
" <?php if (isset($_REQUEST['checked'])&&$_REQUEST['checked']&&in_array($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],$_REQUEST['checked'])) {?>checked="checked"<?php }?>>
								</td>
								<td>
									<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],'forum');?>
" title="Afficher"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
</a>
								</td>
								<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['threads'];?>
<span></td>
								<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['comments'];?>
<span></td>
								<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['users'];?>
<span></td>
								<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['age'];?>
<span></td>
								<td class="integer"><span class="badge"><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['posts_per_day']);?>
<span></td>
								<td class="integer"><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hits'];?>
<span></td>
								<td class="action">
									<?php $_smarty_tpl->_capture_stack[0][] = array('admin_forum_actions', null, null); ob_start(); ?>
										<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],'forum');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Afficher"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
if (isset($_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value)&&$_smarty_tpl->tpl_vars['tiki_p_forum_lock']->value=='y') {
if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_locked']=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'n','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'n','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Déverrouiller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'n','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
} else {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'y','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'y','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verrouiller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'lock','_menu_text'=>'y','_menu_icon'=>'y','lock'=>'y','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
}
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y')||((isset($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['user']['index']]['individual'])&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual']=='n')&&($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y'))||($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['individual_tiki_p_admin_forum']=='y')) {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'])); $_block_repeat=true; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Éditer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','forumId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_permission_link(array('mode'=>'text','type'=>'forum','permType'=>'forums','id'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'],'title'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['forumId'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_bootstrap_modal(array('controller'=>'forum','action'=>'delete_forum','checked'=>$_tmp1),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Supprimer"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['admin_forum_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
										style="padding:0; margin:0; border:0"
									>
										<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

									</a>
									<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
										<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['admin_forum_actions'];?>
</ul></li></ul>
									<?php }?>
								</td>
							</tr>
						<?php endfor; else: ?>
							<?php if (!$_smarty_tpl->tpl_vars['tsOn']->value||($_smarty_tpl->tpl_vars['tsOn']->value&&$_smarty_tpl->tpl_vars['tsAjax']->value)) {?>
								<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value,'_text'=>"No forums found"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value,'_text'=>"Retrieving forums..."),$_smarty_tpl);?>

							<?php }?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['tsAjax']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
					<div class="text-left form-group">
						<br>
						<label for="action" class="col-lg"></label>
						<div class="col-sm-6 input-group">
							<select name="action" class="form-control" onchange="show('groups');">
								<option value="no_action">
									Select action to perform with checked...
								</option>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_forum']->value=='y') {?>
									<option value="delete_forum">Supprimer</option>
								<?php }?>
							</select>
							<span class="input-group-btn">
							<button
								type="submit"
								form='admin_forums'
								formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'forum'),$_smarty_tpl);?>
"
								class="btn btn-primary confirm-submit"
							>
								OK
							</button>
						</span>
						</div>
					</div>
				<?php }?>
			<?php }?>
		</form>
	<?php if (!$_smarty_tpl->tpl_vars['tsOn']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Forums de discussion"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if (!$_smarty_tpl->tpl_vars['tsAjax']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Ajouter/Modifier un forum")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Ajouter/Modifier un forum"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<?php if (!isset($_smarty_tpl->tpl_vars['dup_mode']->value)||$_smarty_tpl->tpl_vars['dup_mode']->value!='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['forumId']->value>0) {?>
					<h2>Éditer ce forum: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</h2>
					<?php echo $_smarty_tpl->getSubTemplate ('object_perms_summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('objectName'=>$_smarty_tpl->tpl_vars['name']->value,'objectType'=>'forum','objectId'=>$_smarty_tpl->tpl_vars['forumId']->value,'permType'=>$_smarty_tpl->tpl_vars['permsType']->value), 0);?>

				<?php } else { ?>
					<h2>Créer un nouveau forum</h2>
				<?php }?>

				<form action="tiki-admin_forums.php" method="post" class="form-horizontal" role="form">
					<input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
">
					<fieldset>
						<legend>Main details</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="name">Nom</label>
							<div class="col-sm-8">
								<input type="text" name="name" class="form-control" id="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="name">Description</label>
							<div class="col-sm-8">
								<textarea name="description" rows="4" class="form-control" id="description"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="section">Section</label>
							<div class="col-sm-4">
								<select name="section" id="section" class="form-control">
									<option value="" <?php if ($_smarty_tpl->tpl_vars['forumSection']->value=='') {?>selected="selected"<?php }?>>Aucun</option>
									<option value="__new__">Créer une nouvelle</option>
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sections']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<option <?php if ($_smarty_tpl->tpl_vars['forumSection']->value==$_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]) {?>selected="selected"<?php }?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sections']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
</option>
									<?php endfor; endif; ?>
								</select>
							</div>
							<div class="col-sm-4">
								<input name="new_section" class="form-control" type="text">
							</div>
						</div>

						<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('labelcol'=>'4','inputcol'=>'8'), 0);?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="forumLanguage">Langue</label>
								<div class="col-sm-8">
									<select name="forumLanguage" id="forumLanguage" class="checkbox-inline">
										<option value="">Inconnu</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
"<?php if ($_smarty_tpl->tpl_vars['forumLanguage']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']||(empty($_smarty_tpl->tpl_vars['data']->value['page_id'])&&$_smarty_tpl->tpl_vars['forumLanguage']->value==''&&$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']==$_smarty_tpl->tpl_vars['prefs']->value['language'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
										<?php endfor; endif; ?>
									</select>
								</div>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['forum_image_file_gallery']) {?>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="image">Image</label>
								<div class="col-sm-8">
									<?php echo smarty_function_file_selector(array('name'=>"image",'value'=>$_smarty_tpl->tpl_vars['image']->value,'type'=>"image/*",'galleryId'=>$_smarty_tpl->tpl_vars['prefs']->value['forum_image_file_gallery']),$_smarty_tpl);?>

									<div class="help-block">
										Image symbolizing the forum.
									</div>
								</div>
							</div>
						<?php }?>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="is_flat">Ne permettre des réponses qu'au dernier message (forum à plat)</label>
							<div class="col-sm-8">
								<input type="checkbox" name="is_flat" id="is_flat" <?php if ($_smarty_tpl->tpl_vars['is_flat']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="moderator_user">Utilisateur modérateur</label>
							<div class="col-sm-8">
								<input id="moderator_user" class="form-control" type="text" name="moderator" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['moderator']->value);?>
">
								<?php echo smarty_function_autocomplete(array('element'=>'#moderator_user','type'=>'username'),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="moderator_group">Groupe modérateur</label>
							<div class="col-sm-8">
								<input id="moderator_group" type="text" class="form-control" name="moderator_group" id="moderator_group" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['moderator_group']->value);?>
">
								<?php echo smarty_function_autocomplete(array('element'=>'#moderator_group','type'=>'groupname'),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="forum_use_password">Protéger par un mot de passe</label>
							<div class="col-sm-4">
								<?php echo smarty_function_html_options(array('name'=>'forum_use_password','options'=>$_smarty_tpl->tpl_vars['forum_use_password_options']->value,'selected'=>$_smarty_tpl->tpl_vars['forum_use_password']->value,'class'=>'form'-'control'),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="forum_password">Mot de passe du forum</label>
							<div class="col-sm-8">
								<input type="text" name="forum_password" id="forum_password" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forum_password']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="controlFlood">Empêcher les raz-de-marée</label>
							<div class="col-sm-8">
								<input type="checkbox" name="controlFlood" id="controlFlood" <?php if ($_smarty_tpl->tpl_vars['controlFlood']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="floodInterval">Temps minimum entre 2 publications</label>
							<div class="col-sm-4 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'floodInterval','id'=>'floodInterval','class'=>"form-control",'options'=>$_smarty_tpl->tpl_vars['flood_options']->value,'selected'=>$_smarty_tpl->tpl_vars['floodInterval']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="useMail"><input type="checkbox" name="useMail" id="useMail" <?php if ($_smarty_tpl->tpl_vars['useMail']->value=='y') {?>checked="checked"<?php }?>> Envoyer les articles de ce forum à cette adresse électronique </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="mail" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mail']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="usePruneUnreplied">
								<input type="checkbox" name="usePruneUnreplied" id="usePruneUnreplied" <?php if ($_smarty_tpl->tpl_vars['usePruneUnreplied']->value=='y') {?>checked="checked"<?php }?>> Éliminer les messages sans réponses après
							</label>
							<div class="col-sm-4 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'pruneUnrepliedAge','options'=>$_smarty_tpl->tpl_vars['pruneUnrepliedAge_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pruneUnrepliedAge']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="usePruneOld">
								<input type="checkbox" name="usePruneOld" id="usePruneOld" <?php if ($_smarty_tpl->tpl_vars['usePruneOld']->value=='y') {?>checked="checked"<?php }?>> Éliminer les anciens messages après
							</label>
							<div class="col-sm-4 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'pruneMaxAge','options'=>$_smarty_tpl->tpl_vars['pruneMaxAge_options']->value,'selected'=>$_smarty_tpl->tpl_vars['pruneMaxAge']->value),$_smarty_tpl);?>

							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Forum-Mailing list synchronization</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="outbound_address">Faire suivre les messages de ce forum à cette adresse électronique, dans un format pouvant être renvoyé au forum</label>
							<div class="col-sm-8">
								<input type="text" name="outbound_address" id="outbound_address" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['outbound_address']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="outbound_mails_for_inbound_mails">Envoyer un mail, si le commentaire posté est généré par une procédure de mail interne</label>
							<div class="col-sm-8">
								<input type="checkbox" name="outbound_mails_for_inbound_mails" id="outbound_mails_for_inbound_mails" <?php if ($_smarty_tpl->tpl_vars['outbound_mails_for_inbound_mails']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="outbound_mails_reply_link">Ajouter un lien de réponse aux messages sortants</label>
							<div class="col-sm-8">
								<input type="checkbox" name="outbound_mails_reply_link" id="outbound_mails_reply_link" <?php if ($_smarty_tpl->tpl_vars['outbound_mails_reply_link']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="outbound_from">Adresse électronique de l'expéditeur des messages du forum</label>
							<div class="col-sm-8">
								<input type="text" name="outbound_from" id="outbound_from" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['outbound_from']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Ajouter les messages venant de cette adresse électronique au forum</label>
							<div class="col-sm-8">
								<div class="form-group">
									<label class="col-sm-4 control-label" for="inbound_pop_server">Serveur POP3</label>
									<div class="col-sm-8">
										<input type="text" name="inbound_pop_server" id="inbound_pop_server" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['inbound_pop_server']->value);?>
">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="inbound_pop_user">Utilisateur</label>
									<div class="col-sm-8">
										<input type="text" name="inbound_pop_user" id="inbound_pop_user" class="form-control"value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['inbound_pop_user']->value);?>
" autocomplete="off">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label" for="inbound_pop_password">Mot de passe</label>
									<div class="col-sm-8">
										<input type="password" name="inbound_pop_password" id="inbound_pop_password" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['inbound_pop_password']->value);?>
" autocomplete="off">
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Forums list</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="show_description">Afficher la description</label>
							<div class="col-sm-8">
								<input type="checkbox" name="show_description" id="show_description" <?php if ($_smarty_tpl->tpl_vars['show_description']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="forum_last_n">Afficher les titres des dernières publications</label>
							<div class="col-sm-4 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'forum_last_n','id'=>'forum_last_n','options'=>$_smarty_tpl->tpl_vars['forum_last_n_options']->value,'selected'=>$_smarty_tpl->tpl_vars['forum_last_n']->value),$_smarty_tpl);?>

							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Forum topics (threads) list</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="topicOrdering">Ordre par défaut des sujets</label>
							<div class="col-sm-8 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'topicOrdering','id'=>'topicOrdering','options'=>$_smarty_tpl->tpl_vars['topicOrdering_options']->value,'selected'=>$_smarty_tpl->tpl_vars['topicOrdering']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="topicsPerPage">Nombre de sujets par page</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="topicsPerPage" id="topicsPerPage" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topicsPerPage']->value);?>
">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Configuration de la liste des sujets</label>
							<div class="col-sm-8">
								<div class="checkbox">
									<label for="topics_list_replies">
										<input type="checkbox" name="topics_list_replies" id="topics_list_replies" <?php if ($_smarty_tpl->tpl_vars['topics_list_replies']->value=='y') {?>checked="checked"<?php }?>> Réponses
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_reads">
										<input type="checkbox" name="topics_list_reads" id="topics_list_reads" <?php if ($_smarty_tpl->tpl_vars['topics_list_reads']->value=='y') {?>checked="checked"<?php }?>> Lectures
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_pts">
										<input type="checkbox" name="topics_list_pts" id="topics_list_pts" <?php if ($_smarty_tpl->tpl_vars['topics_list_pts']->value=='y') {?>checked="checked"<?php }?>> Points
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_lastpost">
										<input type="checkbox" name="topics_list_lastpost" id="topics_list_lastpost" <?php if ($_smarty_tpl->tpl_vars['topics_list_lastpost']->value=='y') {?>checked="checked"<?php }?>> Dernière publication
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_lastpost_title">
										<input type="checkbox" name="topics_list_lastpost_title" id="topics_list_lastpost_title" <?php if ($_smarty_tpl->tpl_vars['topics_list_lastpost_title']->value=='y') {?>checked="checked"<?php }?>> Titre de la dernière publication
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_lastpost_avatar">
										<input type="checkbox" name="topics_list_lastpost_avatar" id="topics_list_lastpost_avatar" <?php if ($_smarty_tpl->tpl_vars['topics_list_lastpost_avatar']->value=='y') {?>checked="checked"<?php }?>> Avatar du dernier post
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_author">
										<input type="checkbox" name="topics_list_author" id="topics_list_author" <?php if ($_smarty_tpl->tpl_vars['topics_list_author']->value=='y') {?>checked="checked"<?php }?>> Auteur
									</label>
								</div>
								<div class="checkbox">
									<label for="topics_list_author_avatar">
										<input type="checkbox" name="topics_list_author_avatar" id="topics_list_author_avatar" <?php if ($_smarty_tpl->tpl_vars['topics_list_author_avatar']->value=='y') {?>checked="checked"<?php }?>> Avatar de l'auteur
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="topic_smileys">Pouvoir mettre un émoticône sur un sujet</label>
							<div class="col-sm-8">
								<input type="checkbox" name="topic_smileys" id="topic_smileys" <?php if ($_smarty_tpl->tpl_vars['topic_smileys']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="topic_summary">Afficher le résumé du sujet</label>
							<div class="col-sm-8">
								<input type="checkbox" name="topic_summary" id="topic_summary" <?php if ($_smarty_tpl->tpl_vars['topic_summary']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Forum threads</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="threadOrdering">Default ordering of threads</label>
							<div class="col-sm-8">
								<?php echo smarty_function_html_options(array('name'=>'threadOrdering','id'=>'threadOrdering','options'=>$_smarty_tpl->tpl_vars['threadOrdering_options']->value,'selected'=>$_smarty_tpl->tpl_vars['threadOrdering']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="threadStyle">Default style of threads</label>
							<div class="col-sm-8">
								<?php echo smarty_function_html_options(array('name'=>'threadStyle','id'=>'threadStyle','options'=>$_smarty_tpl->tpl_vars['threadStyle_options']->value,'selected'=>$_smarty_tpl->tpl_vars['threadStyle']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="commentsPerPage">Nombre par défaut de commentaires par page</label>
							<div class="col-sm-8">
								<?php echo smarty_function_html_options(array('name'=>'commentsPerPage','id'=>'commentsPerPage','options'=>$_smarty_tpl->tpl_vars['commentsPerPage_options']->value,'selected'=>$_smarty_tpl->tpl_vars['commentsPerPage']->value),$_smarty_tpl);?>

							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Articles</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="approval_type">Type d'approbation</label>
							<div class="col-sm-4 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'approval_type','for'=>'approval_type','id'=>'approval_type','class'=>'form'-'control','options'=>$_smarty_tpl->tpl_vars['approval_options']->value,'selected'=>$_smarty_tpl->tpl_vars['approval_type']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Informations affichées de l'éditeur</label>
							<div class="col-sm-8">
								<div class="checkbox">
									<label for="ui_avatar">
										<input type="checkbox" name="ui_avatar" id="ui_avatar" <?php if ($_smarty_tpl->tpl_vars['ui_avatar']->value=='y') {?>checked="checked"<?php }?>> Profile picture
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_rating_choice_topic">
										<input type="checkbox" name="ui_rating_choice_topic" id="ui_rating_choice_topic" <?php if ($_smarty_tpl->tpl_vars['ui_rating_choice_topic']->value=='y') {?>checked="checked"<?php }?>> Topic Rating
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_flag">
										<input type="checkbox" name="ui_flag" id="ui_flag" <?php if ($_smarty_tpl->tpl_vars['ui_flag']->value=='y') {?>checked="checked"<?php }?>> Drapeau
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_posts">
										<input type="checkbox" name="ui_posts" id="ui_posts" <?php if ($_smarty_tpl->tpl_vars['ui_posts']->value=='y') {?>checked="checked"<?php }?>> Articles
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_level">
										<input type="checkbox" name="ui_level" id="ui_level" <?php if ($_smarty_tpl->tpl_vars['ui_level']->value=='y') {?>checked="checked"<?php }?>> Niveau utilisateur
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_email">
										<input type="checkbox" name="ui_email" id="ui_email" <?php if ($_smarty_tpl->tpl_vars['ui_email']->value=='y') {?>checked="checked"<?php }?>> Adresse électronique
									</label>
								</div>
								<div class="checkbox">
									<label for="ui_online">
										<input type="checkbox" name="ui_online" id="ui_online" <?php if ($_smarty_tpl->tpl_vars['ui_online']->value=='y') {?>checked="checked"<?php }?>> Connecté
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="vote_threads">Les publications peuvent être notées</label>
							<div class="col-sm-8">
								<input type="checkbox" name="vote_threads" id="vote_threads" <?php if ($_smarty_tpl->tpl_vars['vote_threads']->value=='y') {?>checked="checked"<?php }?>>
							</div>
						</div>
					</fieldset>

					<fieldset>
						<legend>Fichiers joints</legend>
						<div class="form-group">
							<label class="col-sm-4 control-label" for="att">Droit d'accès</label>
							<div class="col-sm-8 checkbox-inline">
								<?php echo smarty_function_html_options(array('name'=>'att','id'=>'att','options'=>$_smarty_tpl->tpl_vars['attachment_options']->value,'selected'=>$_smarty_tpl->tpl_vars['att']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="row">
							<label class="col-sm-4 control-label" for="att_store_db">Sauver les fichiers joints dans</label>
							<div class="col-sm-2 checkbox-inline">
								<input type="radio" name="att_store" id="att_store_db" value="db" <?php if ($_smarty_tpl->tpl_vars['att_store']->value=='db') {?>checked="checked"<?php }?>> Base de données
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 col-sm-offset-4 checkbox-inline">
								<input type="radio" name="att_store" value="dir" <?php if ($_smarty_tpl->tpl_vars['att_store']->value=='dir') {?>checked="checked"<?php }?>> File system</div>
							<label class="control-label col-sm-2" for="att_store_dir">Chemin d'accès</label>
							<div class="col-sm-4 checkbox-inline">
								<input type="text" name="att_store_dir" id="att_store_dir" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att_store_dir']->value);?>
" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="att_max_size">Taille max. des fichiers joints (octets)</label>
							<div class="col-sm-8">
								<input type="text" name="att_max_size" id="att_max_size" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['att_max_size']->value);?>
">
								<span class="help-block">Max: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxAttachSize']->value);?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['maxAttachSize']->value);?>
)</span>
							</div>
						</div>
						<div class="form-group">
							<label class=" col-sm-4 control-label" for="att_list_nb">Indique le nombre de pièces jointes de tout le fil de discussion dans la liste des forums</label>
								<div class="col-sm-8">
									<input type="checkbox" class="checkbox-inline" id="att_list_nb" name="att_list_nb"<?php if ($_smarty_tpl->tpl_vars['att_list_nb']->value=='y') {?> checked="checked"<?php }?> id="att_list_nb">
								</div>
						</div>
					</fieldset>

					<div class="text-center">
						<input type="submit" class="btn btn-primary" name="save" value="Enregistrer">
					</div>
				</form>

			<?php } else { ?>
				<h2>Dupliquer un forum</h2>
				<form action="tiki-admin_forums.php" method="post" class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="duplicate_name">Nom</label>
						<div class="col-sm-8">
							<input type="text" name="duplicate_name" id="duplicate_name" class="form-control" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="duplicate_description">Description</label>
						<div class="col-sm-8">
							<textarea name="description" rows="4" id="duplicate_description" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['description']->value);?>
</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="duplicate_forumId">Forum</label>
						<div class="col-sm-8">
							<select name="duplicate_forumId" id="duplicate_forumId" class="form-control">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['allForums']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['allForums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['forumId'];?>
"><?php echo $_smarty_tpl->tpl_vars['allForums']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
								<?php endfor; endif; ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="duplicate_categories">Dupliquer les catégories</label>
						<div class="col-sm-8 checkbox-inline">
							<input type="checkbox" name="dupCateg" id="duplicate_categories">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="duplicate_perms">Dupliquer les droits d'accès</label>
						<div class="col-sm-8 checkbox-inline">
							<input type="checkbox" name="dupPerms" id="duplicate_perms">
						</div>
					</div>
					<div class="text-center">
						<input type="submit" class="btn btn-default" name="duplicate" value="Dupliquer">
					</div>
				</form>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Ajouter/Modifier un forum"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
