<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:18:55
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/object_perms_summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188467762583eb59fc0bc56-84212564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c2b71e9e614eddd4b8511acd422e69e81bbfa19' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/object_perms_summary.tpl',
      1 => 1417385885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188467762583eb59fc0bc56-84212564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permsType' => 0,
    'objectType' => 0,
    'name' => 0,
    'objectId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb59fc547a0_90171722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb59fc547a0_90171722')) {function content_583eb59fc547a0_90171722($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
?>
<div class="panel <?php if ($_smarty_tpl->tpl_vars['permsType']->value=='object') {?>panel-warning<?php } else { ?>panel-default<?php }?>">
	<div class="panel-body">
		<?php $_smarty_tpl->_capture_stack[0][] = array('permType', null, null); ob_start();
echo $_smarty_tpl->tpl_vars['objectType']->value;?>
s<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<a title="Droits d'accès" class="link <?php if ($_smarty_tpl->tpl_vars['permsType']->value=='object') {?>btn btn-warning btn-sm<?php }?>" href="tiki-objectpermissions.php?objectName=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value,"url");?>
&amp;objectType=<?php echo $_smarty_tpl->tpl_vars['objectType']->value;?>
&amp;permType=<?php echo Smarty::$_smarty_vars['capture']['permType'];?>
&amp;objectId=<?php echo $_smarty_tpl->tpl_vars['objectId']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['permsType']->value=='category') {?>
			<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

			</a>
			Aucune permission individuelle ne s'applique, les permissions sur les catégories s'appliquent
		<?php } elseif ($_smarty_tpl->tpl_vars['permsType']->value=='object') {?>
			<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

			</a>
			There are individual permissions set for this object
		<?php } else { ?>
			<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

			</a>
			Pas de droit d'accès individuel : les droits globaux s'appliquent
		<?php }?>
	</div>
</div>
<?php }} ?>
