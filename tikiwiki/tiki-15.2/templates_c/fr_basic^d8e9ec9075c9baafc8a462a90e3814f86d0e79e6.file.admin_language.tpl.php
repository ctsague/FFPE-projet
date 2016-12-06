<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:15:53
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_language.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191707943583edf195d01e2-62191993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e9ec9075c9baafc8a462a90e3814f86d0e79e6' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_language.tpl',
      1 => 1426776326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191707943583edf195d01e2-62191993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583edf19603183_06848187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583edf19603183_06848187')) {function content_583edf19603183_06848187($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    Select the site language.</br></br></br>
	<div class="media-content">
        <?php echo smarty_function_icon(array('name'=>"admin_i18n",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Langue</legend>

			<?php echo smarty_function_preference(array('name'=>'language'),$_smarty_tpl);?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_multilingual','visible'=>"always"),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'lang_use_db'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
