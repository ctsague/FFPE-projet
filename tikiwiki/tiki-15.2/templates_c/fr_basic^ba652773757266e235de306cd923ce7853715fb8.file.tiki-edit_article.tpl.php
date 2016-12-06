<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:11:33
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-edit_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350343483583eec25d17f93-16248850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba652773757266e235de306cd923ce7853715fb8' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-edit_article.tpl',
      1 => 1458502372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350343483583eec25d17f93-16248850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleId' => 0,
    'arttitle' => 0,
    'preview' => 0,
    'errors' => 0,
    'm' => 0,
    'previewId' => 0,
    'imageIsChanged' => 0,
    'image_data' => 0,
    'useImage' => 0,
    'image_type' => 0,
    'image_name' => 0,
    'image_size' => 0,
    'translationOf' => 0,
    'type' => 0,
    'types' => 0,
    'heading' => 0,
    'body' => 0,
    'tiki_p_use_HTML' => 0,
    'allowhtml' => 0,
    'prefs' => 0,
    'languages' => 0,
    'lang' => 0,
    'translations' => 0,
    'topics' => 0,
    'topic' => 0,
    'topicId' => 0,
    'tiki_p_admin_cms' => 0,
    'typei' => 0,
    'ispublished' => 0,
    'authorName' => 0,
    'tiki_p_edit_article_user' => 0,
    'author' => 0,
    'publishDate' => 0,
    'use_24hr_clock' => 0,
    'siteTimeZone' => 0,
    'expireDate' => 0,
    'hasImage' => 0,
    'image_caption' => 0,
    'isfloat' => 0,
    'image_x' => 0,
    'image_y' => 0,
    'list_image_x' => 0,
    'list_image_y' => 0,
    'topline' => 0,
    'subtitle' => 0,
    'linkto' => 0,
    'rating' => 0,
    'geolocation_string' => 0,
    'headerlib' => 0,
    'tiki_p_use_content_templates' => 0,
    'templates' => 0,
    'template' => 0,
    'emails' => 0,
    'userEmail' => 0,
    'from' => 0,
    'all_attributes' => 0,
    'att' => 0,
    'attid' => 0,
    'attfullname' => 0,
    'attname' => 0,
    'article_attributes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eec25e9f337_38006567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eec25e9f337_38006567')) {function content_583eec25e9f337_38006567($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_textarea')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.textarea.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_autocomplete')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_function_html_select_date')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.html_select_time.php';
if (!is_callable('smarty_function_defaultmapcenter')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.defaultmapcenter.php';
if (!is_callable('smarty_modifier_replace')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
?>

<?php echo $_smarty_tpl->getSubTemplate ('tiki-articles-js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Articles",'admpage'=>"articles")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['articleId']->value) {?>
		Éditer: <?php echo $_smarty_tpl->tpl_vars['arttitle']->value;?>

	<?php } else { ?>
		Modifier un article
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="t_navbar margin-bottom-md">
	<?php echo smarty_function_button(array('href'=>"tiki-list_articles.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"Liste des articles"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-view_articles.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"articles",'_text'=>"Afficher les articles"),$_smarty_tpl);?>

</div>
<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
	<h2>Aperçu</h2>
	<?php echo $_smarty_tpl->getSubTemplate ('article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<div class="alert-warning">
		L'une des adresses email que vous avez saisie est invalide
		<br>
		<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['m']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['m']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->iteration++;
 $_smarty_tpl->tpl_vars['m']->last = $_smarty_tpl->tpl_vars['m']->iteration === $_smarty_tpl->tpl_vars['m']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['errors']['last'] = $_smarty_tpl->tpl_vars['m']->last;
?>
			<?php echo $_smarty_tpl->tpl_vars['m']->value;?>

			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['errors']['last']) {?><br><?php }?>
		<?php } ?>
	</div>
<?php }?>
<form enctype="multipart/form-data" method="post" action="tiki-edit_article.php" id='editpageform' role="form" class="form form-horizontal">
	<input type="hidden" name="articleId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['articleId']->value);?>
">
	<input type="hidden" name="previewId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['previewId']->value);?>
">
	<input type="hidden" name="imageIsChanged" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['imageIsChanged']->value);?>
">
	<input type="hidden" name="image_data" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_data']->value);?>
">
	<input type="hidden" name="useImage" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['useImage']->value);?>
">
	<input type="hidden" name="image_type" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_type']->value);?>
">
	<input type="hidden" name="image_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_name']->value);?>
">
	<input type="hidden" name="image_size" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_size']->value);?>
">
	<?php if (!empty($_smarty_tpl->tpl_vars['translationOf']->value)) {?>
		<input type="hidden" name="translationOf" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translationOf']->value);?>
">
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Contenu")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Contenu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Contenu</h2>
			<div class="form-group  margin-side-0">
				<label for="title">Titre</label>
				<input type="text" name="title" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['arttitle']->value);?>
" maxlength="255" class="form-control">
			</div>
			<div class="form-group  margin-side-0">
				<label for="heading">En-tête</label>
				<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['heading_only']=='y') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"heading",'rows'=>"5",'class'=>"form-control",'id'=>"subheading")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"heading",'rows'=>"5",'class'=>"form-control",'id'=>"subheading"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['heading']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"heading",'rows'=>"5",'class'=>"form-control",'id'=>"subheading"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('_simple'=>"y",'name'=>"heading",'class'=>"form-control",'rows'=>"5",'id'=>"subheading",'comments'=>"y")); $_block_repeat=true; echo smarty_block_textarea(array('_simple'=>"y",'name'=>"heading",'class'=>"form-control",'rows'=>"5",'id'=>"subheading",'comments'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['heading']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('_simple'=>"y",'name'=>"heading",'class'=>"form-control",'rows'=>"5",'id'=>"subheading",'comments'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</div>
			<div id='heading_only' class="form-group margin-side-0<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['heading_only']=='y') {?> hidden<?php }?>">
				<label for="body">Corps</label>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('name'=>"body",'id'=>"body")); $_block_repeat=true; echo smarty_block_textarea(array('name'=>"body",'id'=>"body"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['body']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('name'=>"body",'id'=>"body"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y') {?>
				<?php if ($_SESSION['wysiwyg']!='y') {?>
					<div class="checkbox clearfix">
						<div class="col-md-8 col-md-push-4">
							<label>
								<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>checked="checked"<?php }?>>
								Autoriser pleinement le HTML <em>(Interprète tous les tags HTML.)</em>
							</label>
							<div class="help-block">If not enabled, Tiki will retain some HTML tags (a, p, pre, img, hr, b, i).</div>
						</div>
					</div>
				<?php } else { ?>
					<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y') {?>on<?php }?>">
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y') {?>
				<div class="form-group">
					<label class="col-md-4 control-label" for="lang">Langue</label>
					<div class="col-md-8">
						<select name="lang" id="lang" class="form-control">
							<option value="">Tous</option>
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
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
							<?php endfor; endif; ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['articleId']->value!=0) {?>
							<span class="help-block">
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_article.php?translationOf=".((string)$_smarty_tpl->tpl_vars['articleId']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_article.php?translationOf=".((string)$_smarty_tpl->tpl_vars['articleId']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content. Instead, <a class="alert-link" href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_article.php?translationOf=".((string)$_smarty_tpl->tpl_vars['articleId']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['translations']->value&&$_smarty_tpl->tpl_vars['translations']->value[1]['objId']) {?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Traductions")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Traductions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<ul>
										<li>
											<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translations']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
												<?php if ($_smarty_tpl->tpl_vars['articleId']->value!=$_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['objId']) {?>
													<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['lang']);?>
: <a href="tiki-edit_article.php?articleId=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['objId']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['translations']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['objName']);?>
</a><br>
												<?php }?>
											<?php endfor; endif; ?>
										</li>
									</ul>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Traductions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						<?php }?>
					</div>
				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Contenu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Classification")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Classification"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Classification</h2>
			<div class="form-group clearfix">
				<label for="topicId" class="control-label col-md-4">Sujet</label>
				<div class="col-md-6">
					<select name="topicId" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['topic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topic']->key => $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->_loop = true;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topic']->value['topicId']);?>
" <?php if ($_smarty_tpl->tpl_vars['topicId']->value==$_smarty_tpl->tpl_vars['topic']->value['topicId']) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topic']->value['name']);?>
</option>
						<?php } ?>
						<option value="" <?php if ($_smarty_tpl->tpl_vars['topicId']->value==0) {?>selected="selected"<?php }?>>Aucun</option>
					</select>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
					<span class="col-md-2">
						<a href="tiki-admin_topics.php" class="btn btn-link">
							<?php echo smarty_function_icon(array('name'=>"flag"),$_smarty_tpl);?>
 Sujets des articles
						</a>
					</span>
				<?php }?>
			</div>
			<div class="form-group clearfix">
				<label for="type" class="control-label col-md-4">Type</label>
				<div class="col-md-6">
					<select name="type" class="form-control">
						<?php  $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_smarty_tpl->tpl_vars['typei'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
 $_smarty_tpl->tpl_vars['typei']->value = $_smarty_tpl->tpl_vars['prop']->key;
?>
							<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['typei']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['typei']->value) {?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['typei']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
						<?php } ?>
					</select>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value=='y') {?>
					<span class="col-md-2">
						<a href="tiki-article_types.php" class="btn btn-link">
							<?php echo smarty_function_icon(array('name'=>"structure"),$_smarty_tpl);?>
 Type d'articles
						</a>
					</span>
				<?php }?>
			</div>
			<div class="clearfix">
				<div class="col-md-8 col-md-push-4">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Astuce")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Astuce"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						Click "Preview" after selecting article type to have appropriate edit form fields.
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Astuce"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</div>
			</div>
			<div class="form-group clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
			<div class="form-group clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Classification"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Publication")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Publication"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Publication</h2>
			<div class="form-group clearfix">
				<div class="col-md-4 col-md-push-4">
					<div class="checkbox well well-sm">
						<label>
							<input type="checkbox" name="ispublished" <?php if ($_smarty_tpl->tpl_vars['ispublished']->value=='y'||!$_smarty_tpl->tpl_vars['articleId']->value) {?>checked="checked"<?php }?>>
							<strong>Publié</strong>
						</label>
					</div>
					<div class="help-block">
						If checked, the article is published.
					</div>
				</div>
			</div>
			<div class="form-group clearfix">
				<label for="authorName" class="control-label col-md-4">Nom de l'auteur (tel qu'affiché)</label>
				<div class="col-md-4">
					<input type="text" name="authorName" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['authorName']->value);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article_user']->value!='y') {?>hidden<?php }?> clearfix">
				<label for="author" class="control-label col-md-4">Utilisateur (propriétaire de l'article)</label>
				<div class="col-md-4">
					<input id="author" type="text" name="author" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['author']->value);?>
" class="form-control">
					<?php echo smarty_function_autocomplete(array('element'=>'#author','type'=>'username'),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group clearfix">
				<label class="control-label col-md-4">Date de publication</label>
				<div class="col-md-8">
					<?php echo smarty_function_html_select_date(array('prefix'=>"publish_",'time'=>$_smarty_tpl->tpl_vars['publishDate']->value,'start_year'=>"-10",'end_year'=>"+10",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

					<?php echo smarty_function_icon(array('name'=>"time",'ititle'=>"Temps"),$_smarty_tpl);?>

					<?php echo smarty_function_html_select_time(array('prefix'=>"publish_",'time'=>$_smarty_tpl->tpl_vars['publishDate']->value,'display_seconds'=>false,'use_24_hours'=>$_smarty_tpl->tpl_vars['use_24hr_clock']->value),$_smarty_tpl);?>

					<span dir="ltr"><?php echo $_smarty_tpl->tpl_vars['siteTimeZone']->value;?>
</span>
				</div>
			</div>
			<div class="form-group clearfix">
				<label class="control-label col-md-4">Date d'Expiration</label>
				<div class="col-md-8">
					<?php echo smarty_function_html_select_date(array('prefix'=>"expire_",'time'=>$_smarty_tpl->tpl_vars['expireDate']->value,'start_year'=>"-10",'end_year'=>"+10",'field_order'=>$_smarty_tpl->tpl_vars['prefs']->value['display_field_order']),$_smarty_tpl);?>

					<?php echo smarty_function_icon(array('name'=>"time",'ititle'=>"Temps"),$_smarty_tpl);?>

					<span dir="ltr">
						<?php echo smarty_function_html_select_time(array('prefix'=>"expire_",'time'=>$_smarty_tpl->tpl_vars['expireDate']->value,'display_seconds'=>false,'use_24_hours'=>$_smarty_tpl->tpl_vars['use_24hr_clock']->value),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['siteTimeZone']->value;?>

					</span>
				</div>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Publication"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Image")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Image</h2>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image']!='y') {?>hidden<?php }?>">
				<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
				<label for="userfile1" class="control-label col-md-4">Image associée</label>
				<div class="col-md-8">
					<input class="form-control" name="userfile1" type="file" onchange="document.getElementById('useImage').checked = true;">
					<span class="help-block">Si différente de l'image du sujet</span>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['hasImage']->value=='y') {?>
				<div class="form-group">
					<label class="col-md-4 control-label">Image en cours</label>
					<div class="thumbnail col-md-8">
						<?php if ($_smarty_tpl->tpl_vars['imageIsChanged']->value=='y') {?>
							<img alt="Image d'article" src="article_image.php?image_type=preview&amp;id=<?php echo $_smarty_tpl->tpl_vars['previewId']->value;?>
">
						<?php } else { ?>
							<img alt="Image d'article" src="article_image.php?image_type=article&amp;id=<?php echo $_smarty_tpl->tpl_vars['articleId']->value;?>
">
						<?php }?>
					</div>
				</div>
			<?php }?>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image_caption']!='y') {?>hidden<?php }?>">
				<label class="col-md-4 control-label" for="image_caption">Légende de l'image</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="image_caption" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_caption']->value);?>
" >
					<div class="help-block">Default will use the topic name</div>
				</div>
			</div>
			<div class="checkbox <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image']!='y') {?>hidden<?php }?> col-md-offset-4">
				<label>
					<input type="checkbox" name="useImage" id="useImage" <?php if ($_smarty_tpl->tpl_vars['useImage']->value=='y') {?>checked='checked'<?php }?> >
					Utiliser l'image associée
				</label>
			</div>
			<div class="checkbox <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image']!='y') {?>hidden<?php }?> col-md-offset-4">
				<label>
					<input type="checkbox" name="isfloat" <?php if ($_smarty_tpl->tpl_vars['isfloat']->value=='y') {?>checked='checked'<?php }?>>
					Texte flottant autour de l'image
				</label>
			</div>
			<fieldset class="<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image']!='y') {?>hidden<?php }?> form-horizontal">
				<legend>Read Article</legend>
				<span class="help-block">Maximum dimensions of custom image in view mode</span>
				<div class="form-group">
					<label for="image_x" class="control-label col-md-4">Largeur</label>
					<div class="input-group col-md-2">
						<input type="text" class="form-control" name="image_x"<?php if ($_smarty_tpl->tpl_vars['image_x']->value>0) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_x']->value);?>
"<?php }?>>
						<span class="input-group-addon">pixels</span>
					</div>
				</div>
				<div class="form-group">
					<label for="image_y" class="control-label col-md-4">Hauteur</label>
					<div class="input-group col-md-2">
						<input type="text" class="form-control" name="image_y"<?php if ($_smarty_tpl->tpl_vars['image_y']->value>0) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['image_y']->value);?>
"<?php }?>>
						<span class="input-group-addon">pixels</span>
					</div>
				</div>
			</fieldset>
			<fieldset class="<?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_image']!='y') {?>hidden<?php }?> form-horizontal">
				<legend>Afficher les articles</legend>
				<span class="help-block">Maximum dimensions of custom image in list mode</span>
				<div class="form-group">
					<label for="list_image_x" class="control-label col-md-4">Largeur</label>
					<div class="input-group col-md-2">
						<input type="text" class="form-control" name="list_image_x"<?php if ($_smarty_tpl->tpl_vars['list_image_x']->value>0) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['list_image_x']->value);?>
"<?php }?>>
						<span class="input-group-addon">pixels</span>
					</div>
				</div>
				<div class="form-group">
					<label for="list_image_y" class="control-label col-md-4">Hauteur</label>
					<div class="input-group col-md-2">
						<input type="text" class="form-control" name="list_image_y"<?php if ($_smarty_tpl->tpl_vars['list_image_y']->value>0) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['list_image_y']->value);?>
"<?php }?>>
						<span class="input-group-addon">pixels</span>
					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Avancé")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Avancé"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Avancé</h2>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&empty($_smarty_tpl->tpl_vars['translationOf']->value)) {?>
				<div class="form-group clearfix">
					<label for="translationOf" class="control-label col-md-4">
						Attach existing article ID as translation
					</label>
					<div class="col-md-2">
						<input name="translationOf" type="text" class="form-control">
					</div>
				</div>
			<?php }?>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_topline']!='y') {?>hidden<?php }?>">
				<label for="topline" class="control-label col-md-4">Surtitre</label>
				<div class="col-md-8">
					<input type="text" name="topline" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['topline']->value);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_subtitle']!='y') {?>hidden<?php }?>">
				<label for="subtitle"  class="control-label col-md-4">Sous-titre</label>
				<div class="col-md-8">
					<input type="text" name="subtitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['subtitle']->value);?>
" class="form-control">
				</div>
			</div>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['show_linkto']!='y') {?>hidden<?php }?>">
				<label for="linkto"  class="control-label col-md-4">Source</label>
				<div class="col-md-8">
					<input type="url" name="linkto" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkto']->value);?>
" class="form-control" placeholder="http://...">
					<?php if ($_smarty_tpl->tpl_vars['linkto']->value!='') {?>
						<div class="help-block">
							Test your link: 
							<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['linkto']->value);?>
" target="_blank">Afficher</a>
						</div>
					<?php }?>
				</div>
			</div>
			<div class="form-group <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value]['use_ratings']!='y') {?>hidden<?php }?>">
				<label for="rating" class="col-md-4 control-label">Evaluation de l'Auteur</label>
				<div class="col-md-4">
					<select name='rating' class="form-control">
						<option value="10" <?php if ($_smarty_tpl->tpl_vars['rating']->value==10) {?>selected="selected"<?php }?>>10</option>
						<option value="9.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="9.5") {?>selected="selected"<?php }?>>9.5</option>
						<option value="9" <?php if ($_smarty_tpl->tpl_vars['rating']->value==9) {?>selected="selected"<?php }?>>9</option>
						<option value="8.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="8.5") {?>selected="selected"<?php }?>>8.5</option>
						<option value="8" <?php if ($_smarty_tpl->tpl_vars['rating']->value==8) {?>selected="selected"<?php }?>>8</option>
						<option value="7.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="7.5") {?>selected="selected"<?php }?>>7.5</option>
						<option value="7" <?php if ($_smarty_tpl->tpl_vars['rating']->value==7) {?>selected="selected"<?php }?>>7</option>
						<option value="6.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="6.5") {?>selected="selected"<?php }?>>6.5</option>
						<option value="6" <?php if ($_smarty_tpl->tpl_vars['rating']->value==6) {?>selected="selected"<?php }?>>6</option>
						<option value="5.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="5.5") {?>selected="selected"<?php }?>>5.5</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['rating']->value==5) {?>selected="selected"<?php }?>>5</option>
						<option value="4.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="4.5") {?>selected="selected"<?php }?>>4.5</option>
						<option value="4" <?php if ($_smarty_tpl->tpl_vars['rating']->value==4) {?>selected="selected"<?php }?>>4</option>
						<option value="3.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="3.5") {?>selected="selected"<?php }?>>3.5</option>
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['rating']->value==3) {?>selected="selected"<?php }?>>3</option>
						<option value="2.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="2.5") {?>selected="selected"<?php }?>>2.5</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['rating']->value==2) {?>selected="selected"<?php }?>>2</option>
						<option value="1.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="1.5") {?>selected="selected"<?php }?>>1.5</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['rating']->value==1) {?>selected="selected"<?php }?>>1</option>
						<option value="0.5" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="0.5") {?>selected="selected"<?php }?>>0.5</option>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['rating']->value=="0") {?>selected="selected"<?php }?>>0</option>
					</select>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_article']=='y') {?>
				<div class="form-group clearfix">
					<label class="control-label col-md-4">Lieu</label>
					<div class="col-md-8">
						<div class="map-container" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
" data-target-field="geolocation"></div>
						<input type="hidden" name="geolocation" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['geolocation_string']->value);?>
">
						<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y'&&count($_smarty_tpl->tpl_vars['templates']->value)!=0) {?>
				<div class="form-group clearfix">
					<label for="templateId" class="control-label col-md-4">Appliquer un gabarit de contenu</label>
					<div class="col-md-8">
						<select class="form-control" name="templateId" onchange="javascript:document.getElementById('editpageform').submit();">
							<option value="0">aucun</option>
							<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['templateId']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['template']->value['name']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_emails']=='y') {?>
				<div class="form-group">
					<label for="emails" class="col-md-4">Adresse courriel</label>
					<div class="col-md-8">
						<input type="text" name="emails" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['emails']->value);?>
" class="form-control">
						<span class="help-block">Adresses mail à notifier (séparées par des virgules)</span>
						<?php if (!empty($_smarty_tpl->tpl_vars['userEmail']->value)&&$_smarty_tpl->tpl_vars['userEmail']->value!=$_smarty_tpl->tpl_vars['prefs']->value['sender_email']) {?>
							De:
							<label>
								<input type="radio" name="from" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userEmail']->value);?>
"<?php if (empty($_smarty_tpl->tpl_vars['from']->value)||$_smarty_tpl->tpl_vars['from']->value==$_smarty_tpl->tpl_vars['userEmail']->value) {?> checked="checked"<?php }?>>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['userEmail']->value);?>

							</label>
							<label>
								<input type="radio" name="from" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['sender_email']);?>
"<?php if ($_smarty_tpl->tpl_vars['from']->value==$_smarty_tpl->tpl_vars['prefs']->value['sender_email']) {?> checked="checked"<?php }?>>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['sender_email']);?>

							</label>
						<?php }?>
					</div>
				</div>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['all_attributes']->value)) {?>
				<fieldset>
					<legend>Attributs</legend>
					<?php  $_smarty_tpl->tpl_vars['att'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['att']->_loop = false;
 $_smarty_tpl->tpl_vars['attname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['att']->key => $_smarty_tpl->tpl_vars['att']->value) {
$_smarty_tpl->tpl_vars['att']->_loop = true;
 $_smarty_tpl->tpl_vars['attname']->value = $_smarty_tpl->tpl_vars['att']->key;
?>
						<?php $_smarty_tpl->tpl_vars['attid'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['att']->value['itemId'],'.','_'), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['attfullname'] = new Smarty_variable($_smarty_tpl->tpl_vars['att']->value['itemId'], null, 0);?>
						<div class="form-group" id=<?php echo $_smarty_tpl->tpl_vars['attid']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value][$_smarty_tpl->tpl_vars['attid']->value]=='y') {?>style="display:;"<?php } else { ?>style="display:none;"<?php }?>>
							<label class="control-label col-md-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attfullname']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attname']->value);?>
</label>
							<div class="col-md-8">
								<input type="text" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['attfullname']->value);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article_attributes']->value[$_smarty_tpl->tpl_vars['attfullname']->value]);?>
" maxlength="255" class="form-control">
							</div>
						</div>
					<?php } ?>
				</fieldset>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Avancé"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="form-group clearfix text-center">
		<input type="submit" class="wikiaction btn btn-default" name="preview" value="Aperçu" onclick="needToConfirm=false;">
		<input type="submit" class="wikiaction btn btn-primary" name="save" value="Enregistrer" onclick="this.form.saving=true;needToConfirm=false;">
		<?php if ($_smarty_tpl->tpl_vars['articleId']->value) {?><input type="submit" class="wikiaction tips btn btn-default" title="Annuler|Annuler la modification, vous allez perdre les modifications." name="cancel_edit" value="Annuler la modification" onclick="needToConfirm=false;"><?php }?>
	</div>
	<?php if ($_SESSION['wysiwyg']!='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#editpageform").submit(function(evt) {
	var isHtml = false;
	if (this.saving && !$("input[name=allowhtml]:checked").length) {
		$("textarea", this).each(function(){
			if ($(this).val().match(/<([A-Z][A-Z0-9]*)\b[^>]*>(.*?)<\/\1>/i)) {
				isHtml = true;
			}
		});
		if (isHtml) {
			this.saving = false;
			return confirm(tr('You appear to be using HTML in your article but have not selected "Allow full HTML".\nThis will result in HTML tags being removed.\nDo you want to save your edits anyway?'));
		}
	}
	return true;
}).attr('saving', false);
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</form>
<?php }} ?>
