<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:50:33
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-listpages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1427049384583eaef9c0bc13-67447784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d84276b1b847aecf3699857817618fde259b88' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-listpages.tpl',
      1 => 1458300953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1427049384583eaef9c0bc13-67447784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsOn' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'find' => 0,
    'maxRecords' => 0,
    'error' => 0,
    'mapview' => 0,
    'aliases' => 0,
    'alias' => 0,
    'tiki_p_edit' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eaef9ceac89_01728707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eaef9ceac89_01728707')) {function content_583eaef9ceac89_01728707($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_tabset')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_wikiplugin')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.wikiplugin.php';
if (!is_callable('smarty_modifier_sefurl')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_wikipages')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Liste des pages Wiki")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Liste des pages Wiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Liste des pages Wiki</h2>
		<?php if (!$_smarty_tpl->tpl_vars['tsOn']->value) {?>
			<div class="clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'pagename','find_show_languages'=>'y','find_show_languages_excluded'=>'y','find_show_categories_multi'=>'y','find_show_num_rows'=>'y','find_in'=>"<ul><li>Nom de la page</li></ul>"), 0);?>

			</div>
		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('map_only'=>'y'), 0);?>

		<?php }?>
		<form name="checkform" method="get">
			<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
			<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
			<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<input type="hidden" name="maxRecords" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRecords']->value);?>
">
		</form>
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
			<div class="alert alert-warning">
				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400")); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>

		<div id="tiki-listpages-content">
			<?php if ($_smarty_tpl->tpl_vars['aliases']->value) {?>
				<div class="aliases">
					<strong>Alias de page trouvés:</strong>
					<?php  $_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aliases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alias']->key => $_smarty_tpl->tpl_vars['alias']->value) {
$_smarty_tpl->tpl_vars['alias']->_loop = true;
?>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['alias']->value['toPage']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['alias']->value['fromPage']);?>
" class="alias"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['alias']->value['toPage']);?>
;</a>
					<?php } ?>
				</div>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-listpages_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clean'=>'n'), 0);?>

		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Liste des pages Wiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Créer une page Wiki")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Créer une page Wiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Créer une page Wiki</h2><br>
			<div>
				<form method="get" action="tiki-editpage.php" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-3">Saisir le nom de la page que vous souhaitez créer</label>
						<div class="col-sm-9">
							<input class="form-control" id="pagename" type="text" name="page">
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']) {?>
					<div class="form-group">
						<label class="control-label col-sm-3"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create page within %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-sm-9">
							<input type="checkbox" name="namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['namespace_default']);?>
" checked="checked">
						</div>
					</div>
					<?php }?>
					<div class="form-group">
						<label class="control-label col-sm-3"></label>
						<div class="col-sm-9">
							<input class="btn btn-primary" type="submit" name="quickedit" value="Créer une page">
						</div>
					</div>
					
				</form>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Créer une page Wiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
