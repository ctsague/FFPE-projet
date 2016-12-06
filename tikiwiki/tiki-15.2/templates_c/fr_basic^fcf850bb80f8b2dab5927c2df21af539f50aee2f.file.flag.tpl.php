<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:42:50
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454554013583ead2acd2162-71534187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf850bb80f8b2dab5927c2df21af539f50aee2f' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/prefs/flag.tpl',
      1 => 1444827468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454554013583ead2acd2162-71534187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ead2ad2bc21_11116924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ead2ad2bc21_11116924')) {function content_583ead2ad2bc21_11116924($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<div class="adminoption form-group">
		<label class="col-sm-4 control-label">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>

		</label>
        <div class="col-sm-8">
            <input id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" type="checkbox" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['value']=='y') {?>checked="checked" <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['p']->value['available']) {?>disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

               data-tiki-admin-child-block="#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
_childcontainer"
               data-tiki-admin-child-mode="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mode']->value);?>
"
                >
        		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
		    	<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		    <?php }?>
    	    <?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div>
<?php }} ?>
