<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 09:18:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/menu/manage_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964398705583feb03c3dda9-99058613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cdaea4bd8f547f3a5d32a0b6052a0913acaf905' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/menu/manage_menu.tpl',
      1 => 1424245440,
      2 => 'file',
    ),
    '5d85ac0f1a232cf642f7753fdad84ba3ae1e7c1f' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/layouts/internal/modal.tpl',
      1 => 1439300383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964398705583feb03c3dda9-99058613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583feb03d06173_93943755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583feb03d06173_93943755')) {function content_583feb03d06173_93943755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_service')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_function_ticket')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.ticket.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>

	<small>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['menuId']) {?>
			ID:<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['symbol']->value) {?>
			<a class="btn btn-link btn-sm tips" title="Symbol Information:<?php echo $_smarty_tpl->tpl_vars['symbol']->value['object'];?>
 (Nom du profil:<?php echo $_smarty_tpl->tpl_vars['symbol']->value['profile'];?>
, Profile Source:<?php echo $_smarty_tpl->tpl_vars['symbol']->value['domain'];?>
)">
				<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

			</a>
		<?php }?>	
	</small>
</h4>
</div>
<div class="modal-body">
	
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'manage_menu'),$_smarty_tpl);?>
" method="post" role="form" class="form">
		<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

		<div class="form-group">
			<label for="menus_name" class="control-label">
				Nom
			</label>
			<input type="text" name="name" id="menus_name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
" class="form-control" required="required">
		</div>
		<div class="form-group">
			<label for="menus_desc" class="control-label">
				Description
			</label>
			<textarea name="description" id="menus_desc" class="form-control"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['description']);?>
</textarea>
		</div>
		<div class="form-group">
			<label for="menus_type" class="control-label">
				Type
			</label>
			<select name="type" id="menus_type" class="form-control">
				<option value="d" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='d') {?>selected="selected"<?php }?>>sous-menus non vus (d)</option>
				<option value="e" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='e') {?>selected="selected"<?php }?>>sous-menus vus (e)</option>
				<option value="f" <?php if ($_smarty_tpl->tpl_vars['info']->value['type']=='f') {?>selected="selected"<?php }?>>fixe (f)</option>
			</select>
		</div>
		<div class="form-group">
			<label for="menus_parse">
				<input type="checkbox" name="parse" id="menus_parse"<?php if ($_smarty_tpl->tpl_vars['info']->value['parse']=='y') {?> checked="checked"<?php }?> value="1">
				Wiki Parse
			</label>
			<div class="help-block">Labels of all options will be wiki parsed.</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']=='y') {?>
			<div class="form-group">
				<label for="icon" class="control-label">
					Icône des répertoires
				</label>
				<input type="text" id="icon" name="icon" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['icon']);?>
" class="form-control">
				<div class="help-block">Chemin et nom de l'icône d'un répertoire fermé</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y') {?>
			<div class="form-group">
				<label for="use_items_icons">
					<input type="checkbox" id="use_items_icons" name="use_items_icons" <?php if ($_smarty_tpl->tpl_vars['info']->value['use_items_icons']=='y') {?> checked="checked"<?php }?> value="1">
					Configurer les icônes pour les entrées de menu
				</label>
			</div>
		<?php }?>
		<div class="submit">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']!='y') {?>
				<input type="hidden" name="use_items_icons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['use_items_icons'];?>
">
			<?php }?>
			<input type="hidden" name="confirm" value="1">
			<input type="hidden" name="menuId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['menuId']);?>
">
			<input type="submit" class="btn btn-primary" name="save" value="Enregistrer">
		</div>
	</form>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if (!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Fermer</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					OK
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
