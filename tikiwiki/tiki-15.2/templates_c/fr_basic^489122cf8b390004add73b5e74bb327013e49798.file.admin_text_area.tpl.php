<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:13:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_text_area.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2096859615583eecb7714902-62964914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489122cf8b390004add73b5e74bb327013e49798' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_text_area.tpl',
      1 => 1426776326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096859615583eecb7714902-62964914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isRTL' => 0,
    'isHtmlMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eecb7778f82_27668848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eecb7778f82_27668848')) {function content_583eecb7778f82_27668848($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    Set up the text area environment (Editing and Plugins).</br></br>
	<div class="media">
        <?php echo smarty_function_icon(array('name'=>"admin_textarea",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Paramètres généraux</legend>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_fullscreen'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikipluginprefs_pending_notification'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['isRTL']->value==false&&$_smarty_tpl->tpl_vars['isHtmlMode']->value!=true) {?>		
					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter_theme'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<br>
			<em>Voir aussi <a href="tiki-admin.php?page=textarea&amp;alt=Editing+and+Plugins#content1" target="_blank">Editing and plugins admin panel</a></em>
		</fieldset>
	</div>
</div>
<?php }} ?>
