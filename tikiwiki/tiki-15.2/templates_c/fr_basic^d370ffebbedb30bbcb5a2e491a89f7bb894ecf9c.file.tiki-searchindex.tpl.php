<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:08:44
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-searchindex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145052926583eeb7c1547f3-58926256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd370ffebbedb30bbcb5a2e491a89f7bb894ecf9c' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-searchindex.tpl',
      1 => 1383254803,
      2 => 'file',
    ),
    'bdb42c3b2dcdd194931dee5ad425729e305f4f96' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layouts/basic/layout_view.tpl',
      1 => 1465029023,
      2 => 'file',
    ),
    '93ada0eb9ab29682163836ec1f2043fcdd3faf8a' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-searchindex_form.tpl',
      1 => 1426590624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145052926583eeb7c1547f3-58926256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'page_id' => 0,
    'cookie_consent_html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eeb7c2438b9_09408869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eeb7c2438b9_09408869')) {function content_583eeb7c2438b9_09408869($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.modulelist.php';
if (!is_callable('smarty_function_error_report')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.error_report.php';
if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
    <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php echo $_smarty_tpl->getSubTemplate ("layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<div class="container">
    <div class="page-header" id="page-header">
        <?php echo smarty_function_modulelist(array('zone'=>'top','class'=>'row top_modules'),$_smarty_tpl);?>

        <div class="topbar row" id="topbar">
            <?php echo smarty_function_modulelist(array('zone'=>'topbar'),$_smarty_tpl);?>

        </div>
    </div>

    <div class="row row-middle" id="row-middle">
        <?php if (zone_is_empty('left')&&zone_is_empty('right')) {?>
            <div class="col-md-12 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_error_report(array(),$_smarty_tpl);?>

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Search",'admpage'=>"search")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recherche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
                
<?php /*  Call merged included template "tiki-searchindex_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1145052926583eeb7c1547f3-58926256');
content_583eeb7c18cf84_87047312($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-searchindex_form.tpl" */?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
        <?php } elseif (zone_is_empty('left')) {?>
            <div class="col-md-9 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_error_report(array(),$_smarty_tpl);?>

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Search",'admpage'=>"search")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recherche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
                
<?php /*  Call merged included template "tiki-searchindex_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1145052926583eeb7c1547f3-58926256');
content_583eeb7c18cf84_87047312($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-searchindex_form.tpl" */?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-3" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        <?php } elseif (zone_is_empty('right')) {?>
            <div class="col-md-9 col-md-push-3 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_error_report(array(),$_smarty_tpl);?>

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Search",'admpage'=>"search")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recherche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
                
<?php /*  Call merged included template "tiki-searchindex_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1145052926583eeb7c1547f3-58926256');
content_583eeb7c18cf84_87047312($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-searchindex_form.tpl" */?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-3 col-md-pull-9" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
        <?php } else { ?>
            <div class="col-md-8 col-md-push-2 col1" id="col1">
                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop']!='n'&&!zone_is_empty('pagetop'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

                <?php }?>
                <?php echo smarty_function_error_report(array(),$_smarty_tpl);?>

                
                
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Search",'admpage'=>"search")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Recherche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                
                
<?php /*  Call merged included template "tiki-searchindex_form.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1145052926583eeb7c1547f3-58926256');
content_583eeb7c18cf84_87047312($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "tiki-searchindex_form.tpl" */?>

                <?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']=='fixed'||($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom']!='n'&&!zone_is_empty('pagebottom'))) {?>
                    <?php echo smarty_function_modulelist(array('zone'=>'pagebottom'),$_smarty_tpl);?>

                <?php }?>
            </div>
            <div class="col-md-2 col-md-pull-8" id="col2">
                <?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

            </div>
            <div class="col-md-2" id="col3">
                <?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

            </div>
        <?php }?>
    </div>

    <footer class="footer" id="footer">
        <div class="footer_liner">
            <?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'row row-sidemargins-zero'),$_smarty_tpl);?>

        </div>
    </footer>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
    <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:08:44
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-searchindex_form.tpl" */ ?>
<?php if ($_valid && !is_callable('content_583eeb7c18cf84_87047312')) {function content_583eeb7c18cf84_87047312($_smarty_tpl) {?><?php if (!is_callable('smarty_block_filter')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.filter.php';
?>
<div class="margin-bottom-md nohighlight">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_search_box']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('filter', array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value)); $_block_repeat=true; echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
</div><!--nohighlight-->
	

<?php if (isset($_smarty_tpl->tpl_vars['results']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['results']->value;?>

<?php }?>
<?php }} ?>
