<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 09:18:49
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admin_menus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:651660479583feaf926c741-17421132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d43f875da6f2bfae5f97d76b8b2e34ba440425' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-admin_menus.tpl',
      1 => 1457197740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651660479583feaf926c741-17421132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'prefs' => 0,
    'js' => 0,
    'channels' => 0,
    'tiki_p_edit_menu_option' => 0,
    'tiki_p_edit_menu' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583feaf9311147_32703566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583feaf9311147_32703566')) {function content_583feaf9311147_32703566($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_bootstrap_modal')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_self_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_popup')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_function_norecords')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.pagination_links.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Menus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
	<div class="t_navbar margin-bottom-md">
		<a class="btn btn-default" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'manage_menu'),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create Menu
		</a>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php",'_icon_name'=>"cogs",'_type'=>"link",'_text'=>"Modules"),$_smarty_tpl);?>

	</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
	<table class="table table-hover">
		<tr>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nom<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'type')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th>Options</th>
			<th></th>
		</tr>

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
				<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
</td>
				<td class="text">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value=='y'&&$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']!=42) {?>
						<a class="link tips" href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
" title=":Menu Options"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>
</a>
					<?php } else { ?>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name']);?>

					<?php }?>
					<span class="help-block">
						<?php echo nl2br(smarty_modifier_escape($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['description']));?>

					</span>
				</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['type'];?>
</td>
				<td><span class="badge"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['options'];?>
</span></td>
				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('menu_actions', null, null); ob_start(); ?>
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']!=42) {
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'manage_menu','menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Éditer"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'];?>
"><?php echo smarty_function_icon(array('name'=>"list",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Options du menu"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
}
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
$_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>"remove")); $_block_repeat=true; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>"remove"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Supprimer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('remove'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_menu_text'=>'y','_menu_icon'=>'y','_icon_name'=>"remove"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
echo $_smarty_tpl->tpl_vars['liend']->value;
}
} else {
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;
echo smarty_function_button(array('reset'=>"y",'menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId'],'_text'=>"Réinitialiser",'_auto_args'=>"reset,menuId",'_class'=>"btn btn-warning btn-sm"),$_smarty_tpl);
echo $_smarty_tpl->tpl_vars['liend']->value;?>
<hr><?php }
}
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=='y') {
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'clone_menu','menuId'=>$_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['menuId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Cloner"),$_smarty_tpl);?>
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
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['menu_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['menu_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php endfor; else: ?>
			<?php echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);?>

		<?php endif; ?>
	</table>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
