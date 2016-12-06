<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 08:59:19
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_list_sections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175510434583fe667866e17-44389489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a307ea33cb73c21d55d63c60a79a57d46bf77f' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/admin/include_list_sections.tpl',
      1 => 1454419774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175510434583fe667866e17-44389489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'admin_icons' => 0,
    'info' => 0,
    'page' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583fe6678d4247_50037922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fe6678d4247_50037922')) {function content_583fe6678d4247_50037922($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?>



<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Conseil")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Conseil"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Activez/désactivez les fonctionnalités Tiki dans <a class="alert-link" href="tiki-admin.php?page=features">Control Panels&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;Fonctionnalités</a>, mais configurez les dans leurs pages associées.
	<br/>
	See <strong>more options</strong> after you enable more <em>Preference Filters</em> above (<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
).
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Conseil"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="clearfix">
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox off advanced btn btn-primary", null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("admbox basic btn btn-primary", null, 0);?>
			<?php }?>
				<a href="tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 tips" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['title']);
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> (Désactivée)<?php }?>|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
					<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

					<span class="title"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['title']);?>
</span>
				</a>
	<?php } ?>
</div>
<?php }} ?>
