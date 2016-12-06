<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:16:28
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2010504843583edf3c208b92-30724869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a739f2dfd1a1dbea95c6520b9a9418539a2254a' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/admin_login.tpl',
      1 => 1426776326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2010504843583edf3c208b92-30724869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583edf3c21f255_43735564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583edf3c21f255_43735564')) {function content_583edf3c21f255_43735564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_preference')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.preference.php';
?>
<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Wizard" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    Configure the login, registration and validation preferences for the new accounts.<br/></br></br>
	<div class="media-body">
        <?php echo smarty_function_icon(array('name'=>"admin_login",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<fieldset>
			<legend>Registration & Log in options</legend>
			<div style="position:relative;">
				<div class="adminoptionbox clearfix featurelist">
					<?php echo smarty_function_preference(array('name'=>'allowRegister'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateUsers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'validateRegistration'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_banning'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'useRegisterPasscode'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="useRegisterPasscode_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'registerPasscode'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'showRegisterPasscode'),$_smarty_tpl);?>

					</div>
				</div>
			</div>
			<br/>
			<em>
				Add a <b>User and Registration tracker</b>
				<a href="http://doc.tiki.org/User+Tracker" target="tikihelp" class="tikihelp" title="User and Registration tracker: You can use trackers to collect additional information for users during registration or even later once they are registered users.
				Some uses of this type of tracker could be
				<ul>
					<li>To collect user information (such as mailing address or phone number)</li>
					<li>To require the user to acknowledge a user agreement</li>
					<li>To prevent spammer registration, by asking new users to provide a reason why they want to join (the prompt should tell the user that his answer should indicate that he or she clearly understands what the site is about).</li>
				</ul>
				The profile will enable the feature 'Trackers' for you and a few other settings required. Once the profile is applied, you will be provided with instructions about further steps that you need to perform manually.">
				<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

				</a> :
				<a href="tiki-admin.php?profile=User_Trackers&show_details_for=User_Trackers&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a> (new window)
			</em>
			<br/><br/>
		</fieldset>
		<div class="row">
			<div class="col-md-6">
				<fieldset>
					<legend>Nom d'utilisateur</legend>
					<?php echo smarty_function_preference(array('name'=>'login_is_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'lowercase_username'),$_smarty_tpl);?>

				</fieldset>
			</div>
			<div class="col-md-6">
				<fieldset>
					<legend>Mot de passe</legend>
					<?php echo smarty_function_preference(array('name'=>'forgotPass'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'change_password'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'min_pass_length'),$_smarty_tpl);?>

				</fieldset>
			</div>
		</div>
		<em>Voir aussi <a href="tiki-admin.php?page=login" target="_blank">Login admin panel</a></em>
	</div>
</div>
<?php }} ?>
