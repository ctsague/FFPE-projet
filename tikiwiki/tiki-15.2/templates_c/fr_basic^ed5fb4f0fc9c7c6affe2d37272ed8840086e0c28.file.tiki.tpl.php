<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 09:58:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2131405547583ea2e3819f54-82545750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5fb4f0fc9c7c6affe2d37272ed8840086e0c28' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki.tpl',
      1 => 1418770945,
      2 => 'file',
    ),
    'bdb42c3b2dcdd194931dee5ad425729e305f4f96' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layouts/basic/layout_view.tpl',
      1 => 1465029023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2131405547583ea2e3819f54-82545750',
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
  'unifunc' => 'content_583ea2e3a1f207_68712554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ea2e3a1f207_68712554')) {function content_583ea2e3a1f207_68712554($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.html_body_attributes.php';
if (!is_callable('smarty_function_modulelist')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.modulelist.php';
if (!is_callable('smarty_function_error_report')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.error_report.php';
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

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


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

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


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

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


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

                
                
	<!-- Legacy template, no support for title block -->

                
                
	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>


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
