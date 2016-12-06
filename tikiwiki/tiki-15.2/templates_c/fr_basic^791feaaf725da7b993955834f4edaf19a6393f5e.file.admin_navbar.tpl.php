<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:42:50
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/admin_navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548421933583ead2a509d96-96421848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791feaaf725da7b993955834f4edaf19a6393f5e' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/admin_navbar.tpl',
      1 => 1459350907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548421933583ead2a509d96-96421848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pref_filters' => 0,
    'info' => 0,
    'name' => 0,
    'prefs' => 0,
    'connect_feedback_showing' => 0,
    'headerlib' => 0,
    'lm_criteria' => 0,
    'indexNeedsRebuilding' => 0,
    'include' => 0,
    'tikifeedback' => 0,
    'csrferror' => 0,
    'lm_error' => 0,
    'lm_searchresults' => 0,
    'prefName' => 0,
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ead2a653f26_60543163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ead2a653f26_60543163')) {function content_583ead2a653f26_60543163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_stringfix')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.stringfix.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?><nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#admin-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<ul class="nav navbar-nav">
			<li class="dropdown">	
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Configurations">
					<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
 <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<span class="dropdown-title">Filtres des préférences</span>
					<form method="post" action="" class="form" role="form">
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pref_filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
							<li>
								<div class="checkbox">
									<label>
										<input type="checkbox" class="preffilter <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['type']);?>
" name="pref_filters[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['selected']) {?>checked="checked"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['label']);?>

									</label>
								</div>
							</li>
						<?php } ?>
						<div class="text-center">
							<input type="submit" value="Définir comme mes valeurs par défaut" class="btn btn-primary btn-sm">
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_feature']=="y") {?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('likeicon', null, null); ob_start();
echo smarty_function_icon(array('name'=>"thumbs-up"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<label>
								<input type="checkbox" id="connect_feedback_cbx" <?php if (!empty($_smarty_tpl->tpl_vars['connect_feedback_showing']->value)) {?>checked="checked"<?php }?>>
								Provide Feedback
								<a href="https://doc.tiki.org/Connect" target="tikihelp" class="tikihelp" title="Provide Feedback:
									Once selected, some icon/s will be shown next to all features so that you can provide some on-site feedback about them.
									<br/><br/>
									<ul>
										<li>Icon for 'Like' <?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['likeicon']);?>
</li>
<!--											<li>Icon for 'Fix me' <img src=img/icons/connect_fix.png></li> -->
<!--											<li>Icon for 'What is this for?' <img src=img/icons/connect_wtf.png></li> -->
									</ul>
									<br/>
									Your votes will be sent when you connect with mother.tiki.org (currently only by clicking the 'Connect > <strong>Send Info</strong>' button)
									<br/><br/>
									Click to read more
								">
									<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

								</a>
							</label>
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile("lib/jquery_tiki/tiki-connect.js");?>

						<?php }?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							var updateVisible = function() {
								var show = function (selector) {
									selector.show();
									selector.parents('fieldset:not(.tabcontent)').show();
									selector.closest('fieldset.tabcontent').addClass('filled');
								};
								var hide = function (selector) {
									selector.hide();
									/*selector.parents('fieldset:not(.tabcontent)').hide();*/
								};

								var filters = [];
								var prefs = $('.adminoptionbox.preference, .admbox').hide();
								prefs.parents('fieldset:not(.tabcontent)').hide();
								prefs.closest('fieldset.tabcontent').removeClass('filled');
								$('.preffilter').each(function () {
									var targets = $('.adminoptionbox.preference.' + $(this).val() + ',.admbox.' + $(this).val());
									if ($(this).is(':checked')) {
										filters.push($(this).val());
										show(targets);
									} else if ($(this).is('.negative:not(:checked)')) {
										hide(targets);
									}
								});

								show($('.adminoptionbox.preference.modified'))

								$('input[name="filters"]').val(filters.join(' '));
								$('.tabset .tabmark a').each(function () {
									var selector = 'fieldset.tabcontent.' + $(this).attr('href').substring(1);
									var content = $(this).closest('.tabset').find(selector);

									$(this).parent().toggle(content.is('.filled') || content.find('.preference').length === 0);
								});
							};

							updateVisible();
							$('.preffilter').change(updateVisible);
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</form>
					<li class="divider"></li>
					<li>
						<a href="tiki-admin.php?prefrebuild">
							Rebuild Admin Index
						</a>
					</li>
					<li>
						<a href="tiki-admin.php">
							Control Panels
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="collapse navbar-collapse" id="admin-navbar-collapse-1">	
		<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_navbar_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<ul class="nav navbar-nav navbar-right">
			<li>
				<form method="post" action="" class="navbar-form" role="form">
					<div class="form-group">
						<input type="hidden" name="filters">
						<input type="text" name="lm_criteria" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lm_criteria']->value);?>
" class="form-control" placeholder="Search preferences..." autofocus="autofocus">
					</div>
					<button type="submit" class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['indexNeedsRebuilding']->value) {?> class="tips" title="Recherche d'options de configuration|Note : L'index de recherche a besoin d'être reconstruit. Cela prendra quelques minutes."<?php }?>><?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
</button>
				</form>
			</li>
		</ul>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['include']->value!="list_sections") {?>
		<div class="adminanchors panel-body clearfix"><ul class="nav navbar-nav"><?php echo $_smarty_tpl->getSubTemplate ('admin/include_anchors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</ul></div>
	<?php }?>
</nav>

<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"La liste suivante de changement a été appliquée")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"La liste suivante de changement a été appliquée"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul class="list-unstyled">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tikifeedback']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<li>
			<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']==0) {?>
				<?php echo smarty_function_icon(array('name'=>"disable"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']==1) {?>
				<?php echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']==2) {?>
				<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']==4) {?>
				<?php echo smarty_function_icon(array('name'=>"undo"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

			<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']!=3) {?>Préférence <?php }?><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['mes']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
				<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['st']!=3) {?>(<small>Nom de la préférence: <?php echo $_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['name'];?>
)</small><?php }?>
			</li>
		<?php endfor; endif; ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"La liste suivante de changement a été appliquée"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['csrferror']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"error",'title'=>"Potential Cross-Site Request Forgery")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Potential Cross-Site Request Forgery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->tpl_vars['csrferror']->value;?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Potential Cross-Site Request Forgery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
setTimeout(function () {
		$("form", "#col1").mouseup(function() {
			var target = $('.modal.fade:not(.in)').first();
			$.post($.service('utilities', 'alert_button'),
				{modal: '1',
				ajaxheading: "Security ticket timed out",
				ajaxmsg: "The security ticket for this page has timed out. Please reload the page to make any changes.",
				ajaxbuttonname: "Recharger",
				ajaxtype: 'warning',
				ajaxhref: location.href,
				ajaxdismissible: 'n'},
				function (data) {
					$('.modal-content', target).html(data);
					target.modal();
			});
		});
	}, 1000 * 60 * 15);
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if ($_smarty_tpl->tpl_vars['lm_error']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Erreur dans la recherche")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Erreur dans la recherche"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo $_smarty_tpl->tpl_vars['lm_error']->value;?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Erreur dans la recherche"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } elseif ($_smarty_tpl->tpl_vars['lm_searchresults']->value) {?>
	<div class="panel panel-default" id="pref_searchresults">
		<div class="panel-heading">
			<h3 class="panel-title">Preference Search Results<button type="button" id="pref_searchresults-close" class="close" aria-hidden="true">&times;</button></h3>
		</div>
		<form method="post" action="" href="tiki-admin.php" class="table" role="form">
			<div class="pref_search_results panel-body">
				<?php  $_smarty_tpl->tpl_vars['prefName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prefName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lm_searchresults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prefName']->key => $_smarty_tpl->tpl_vars['prefName']->value) {
$_smarty_tpl->tpl_vars['prefName']->_loop = true;
?>
					<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['prefName']->value,'get_pages'=>"y"),$_smarty_tpl);?>

				<?php } ?>
			</div>
			<div class="panel-footer text-center">
				<input class="btn btn-primary" type="submit" title="Apply Changes" value="Appliquer">
			</div>
			<input type="hidden" name="lm_criteria" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['lm_criteria']->value);?>
">
			<input type="hidden" name="daconfirm" value="y">
			<input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
		</form>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		$( "#pref_searchresults-close" ).click(function() {
			$( "#pref_searchresults" ).hide();
		});
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } elseif ($_smarty_tpl->tpl_vars['lm_criteria']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Pas de résultat",'icon'=>"magnifier")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Pas de résultat",'icon'=>"magnifier"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		No preferences were found for your search query with your current choice of Preference Filters (<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
).<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_engine']=='lucene') {?> Not what you expected? Try <a class="alert-link" href="tiki-admin.php?prefrebuild">rebuild</a> the preferences search index.<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Pas de résultat",'icon'=>"magnifier"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
