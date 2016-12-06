<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:13:48
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_wysiwyg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:396634973583eecac7db7b5-67468843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb73ecb52200afa0c248712b3fc19b16c2a01cb' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_wysiwyg.tpl',
      1 => 1426776326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '396634973583eecac7db7b5-67468843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editorType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eecac824395_63997370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eecac824395_63997370')) {function content_583eecac824395_63997370($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?>

<div class="media">
   	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    You can choose to use by default the 'Compatible' Wiki mode (content is saved in wiki syntax), or the HTML mode.
	<div class="media">
        <?php echo smarty_function_icon(array('name'=>"admin_wysiwyg",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Wysiwyg editor</legend>
			Select the Wysiwyg editor mode
			<div class="row">
				<div class="col-md-4">
					<input type="radio" name="editorType" value="wiki" <?php if (empty($_smarty_tpl->tpl_vars['editorType']->value)||$_smarty_tpl->tpl_vars['editorType']->value=='wiki') {?>checked="checked"<?php }?> /> Compatible Wiki mode
				</div>
				<div class="col-md-8">Use wiki syntax for saved pages.<br>
					<p>
						This is the most compatible with Tiki functionality and the most stable editor mode.<br>
						Tools and functions in the editor toolbar will be limited.
					</p>

					<p><?php echo smarty_function_preference(array('name'=>'wysiwyg_default'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<input type="radio" name="editorType" value="html" <?php if ($_smarty_tpl->tpl_vars['editorType']->value=='html') {?>checked="checked"<?php }?> /> HTML mode
				</div>
				<div class="col-md-8">
					<p>
						Use HTML syntax for saved pages.<br>
						Best compatibility with inline editing. Loses some wiki related features, such as SlideShow, and has some problems with SEFURL.<br>
						Full editor toolbar.
					</p>

					<p><?php echo smarty_function_preference(array('name'=>'wysiwyg_optional'),$_smarty_tpl);?>
</p>
				</div>
			</div>
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_inline_editing'),$_smarty_tpl);?>

			<br>
			<em>Voir aussi <a href="tiki-admin.php?page=wysiwyg" target="_blank">Wysiwyg admin panel</a></em>
		</fieldset>
	</div>
</div>

<?php }} ?>
