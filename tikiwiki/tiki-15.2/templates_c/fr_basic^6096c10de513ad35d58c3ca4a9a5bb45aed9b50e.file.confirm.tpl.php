<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 11:00:40
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:414016199583eb158b35a12-16121680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6096c10de513ad35d58c3ca4a9a5bb45aed9b50e' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/confirm.tpl',
      1 => 1427046842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '414016199583eb158b35a12-16121680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation_text' => 0,
    'confirm_detail' => 0,
    'confirmaction' => 0,
    'ticket' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb158b91ff7_30715490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb158b91ff7_30715490')) {function content_583eb158b91ff7_30715490($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_query')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
?>
<div class="panel panel-default">
	<?php if (!empty($_smarty_tpl->tpl_vars['confirmation_text']->value)) {?>
		<div class="panel-heading">
			<?php echo smarty_function_icon(array('name'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmation_text']->value);?>

		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['confirm_detail']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['confirm_detail']->value;?>

	<?php }?>
	<div class="panel-body">
		<form id='confirm' action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmaction']->value);?>
" method="post">
			<div>
				<?php echo smarty_function_query(array('_type'=>'form_input','_keepall'=>'y','ticket'=>$_smarty_tpl->tpl_vars['ticket']->value,'daconfirm'=>'y'),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:document.forms['confirm'].submit();return false;",'_text'=>"Cliquer ici pour confirmer votre action",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:history.back(); return false;",'_text'=>"Revenir à la page précédente",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_text'=>"Retour à la page d'accueil"),$_smarty_tpl);?>

			</div>
		</form>
	</div>
</div>
<?php }} ?>
