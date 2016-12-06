<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:32:29
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/profiles_featured_site_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443431841583eaabd689671-49905026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d8e289f589971867996cf1c977b7967224ff1b' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/wizard/profiles_featured_site_confs.tpl',
      1 => 1449441531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1443431841583eaabd689671-49905026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eaabd6c2c39_90747520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eaabd6c2c39_90747520')) {function content_583eaabd6c2c39_90747520($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
    Initialize Tiki as an application, e.g. a blog., by means of applying one of the 4 featured configuration profiles. </br></br>
	<div class="media-body">
		<fieldset>
			<legend>Profils:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>Collaborative Community</h4>
					(<a href="tiki-admin.php?profile=Collaborative_Community_12x&show_details_for=Collaborative_Community_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					<p>Setup to help subject experts and enthusiasts work together to build a Knowledge Base
						<a target="tikihelp" class="tikihelp" title="Collaborative Community:
							Uses:
							<ul>
								<li>Wiki Editing</li>
								<li>Personal Member Spaces</li>
								<li>Forums de discussion</li>
								<li>Blogues</li>
							</ul>"
						>
							<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

						</a>
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display524" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_collaborative_community.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Company Intranet</h4>
					(<a href="tiki-admin.php?profile=Company_Intranet_12x&show_details_for=Company_Intranet_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					<p>
						Setup for a Corporate Intranet of a typical medium-sized business.
						<a target="tikihelp" class="tikihelp" title="Company Intranet:
							Uses:
							<ul>
								<li>Company News Articles</li>
								<li>Executive Blog</li>
								<li>File Repository & Management</li>
								<li>Wiki collaboratif </li>
							</ul>"
						>
							<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

						</a>
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display525" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_company_intranet.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4>Personal Blog and Profile</h4>
					(<a href="tiki-admin.php?profile=Personal_Blog_and_Profile_12x&show_details_for=Personal_Blog_and_Profile_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					<p>
						Setup with many cool features to help you integrate the Social Web and establish a strong presence in the Blogosphere
						<a target="tikihelp" class="tikihelp" title="Personal Blog and Profile:
							Uses:
							<ul>
								<li>Blogue (Jeu complet de fonctionnalités en lien avec le blogue)</li>
								<li>Galerie d'images</li>
								<li>RSS Integration</li>
								<li>Video Log</li>
							</ul>"
						>
							<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

						</a>
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display526" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_personal_blog_and_profile.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Small Organization Web Presence</h4>
					(<a href="tiki-admin.php?profile=Small_Organization_Web_Presence_12x&show_details_for=Small_Organization_Web_Presence_12x&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&categories%5B%5D=Featured+profiles&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br>
					<p>
						Setup for a Web Presence of a typical small business or non-profit.
						<a target="tikihelp" class="tikihelp" title="Small Organization Web Presence:
							Uses:
							<ul>
								<li>Company News & Updates</li>
								<li>Highlight Company's Products and Services</li>
								<li>File Gallery (great for Media Kit)</li>
								<li>Contact Form </li>
							</ul>"
						>
							<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

						</a>
					</p>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display527" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_small_org_web_presence.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="small text-center">
								Click to expand
							</div>
						</div>
					</div>
				</div>
			</div>
			<em>Voir aussi <a href="tiki-admin.php?page=profiles&amp;alt=Profiles" target="_blank">Profiles admin panel</a></em>
		</fieldset>
	</div>
</div>
<?php }} ?>
