<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:32:24
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/upgrade_novice_admin_assistance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304330401583eb8c87c2a28-34674765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6abd222765bef7f626e930954e64073321b1f6b2' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/upgrade_novice_admin_assistance.tpl',
      1 => 1427199691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304330401583eb8c87c2a28-34674765',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb8c87f7ec1_52479367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb8c87f7ec1_52479367')) {function content_583eb8c87f7ec1_52479367($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Upgrade Wizard" title="Upgrade Wizard">
		<i class="fa fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    <?php echo smarty_function_icon(array('name'=>"user-plus",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

    Improvements that can help novice admins to set up their tiki sites more easily and improve their usability.
    <br/><br/>
	<div class="media-body">
		<fieldset>
			<legend>Basic Information about Wizards</legend>
			<p>
				Starting in Tiki12, some wizards were added to Tiki in order to help in the initial setup based on configuration templates like "Macros" (<b>Profiles Wizard</b>), as well as further site configuration (<b>Configuration Wizard</b>), fine tunning the new features and preferences when upgrading (<b>Upgrade Wizard</b>), and to help you as site admin to collect more information from your users if you need it (<b>Users Wizard</b>).
				<a href="http://doc.tiki.org/Wizards" target="tikihelp" class="tikihelp" title="Wizards:
					Wizards oriented to help the site admin (Profiles, Configuration and Upgrade wizards) come always enabled.
					<br/><br/>
					The User Wizard comes disabled by default, and you have the option to enable it and configure it for your site.
				">
                    <?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

				</a>
			</p>
		</fieldset>
		<fieldset class="table clearfix featurelist">
            <?php echo smarty_function_icon(array('name'=>"magic",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

			<legend> Wizards settings </legend>
			<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'userTracker'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="userTracker_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'feature_userWizardDifferentUsersFieldIds'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userWizardDifferentUsersFieldIds_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_userWizardUsersFieldIds'),$_smarty_tpl);?>

				</div>
			</div>
			<?php echo smarty_function_preference(array('name'=>'wizard_admin_hide_on_login'),$_smarty_tpl);?>

		</fieldset>
        <fieldset class="table clearfix featurelist">
            <?php echo smarty_function_icon(array('name'=>"envelope-o",'size'=>3,'iclass'=>"pull-right"),$_smarty_tpl);?>

			<legend> Adresse courriel </legend>
			<?php echo smarty_function_preference(array('name'=>'email_footer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'messu_truncate_internal_message'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }} ?>
