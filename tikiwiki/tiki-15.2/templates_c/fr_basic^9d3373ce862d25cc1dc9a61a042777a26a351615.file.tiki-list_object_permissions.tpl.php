<?php /* Smarty version Smarty-3.1.21, created on 2016-12-01 09:12:36
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-list_object_permissions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374494482583fe9840d9cd0-45289389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d3373ce862d25cc1dc9a61a042777a26a351615' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-list_object_permissions.tpl',
      1 => 1458104273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374494482583fe9840d9cd0-45289389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedbacks' => 0,
    'feedback' => 0,
    'all_groups' => 0,
    'size' => 0,
    'filterGroup' => 0,
    'gr' => 0,
    'res' => 0,
    'type' => 0,
    'content' => 0,
    'f' => 0,
    'default' => 0,
    'object' => 0,
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583fe98422a4b9_64318963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583fe98422a4b9_64318963')) {function content_583fe98422a4b9_64318963($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_select_all')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_function_permission_link')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.permission_link.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Liste des droits des objets<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="t_navbar">
	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Gérer les droits"),$_smarty_tpl);?>

</div>

<?php if (!empty($_smarty_tpl->tpl_vars['feedbacks']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['feedback'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feedback']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['feedback']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['feedback']->key => $_smarty_tpl->tpl_vars['feedback']->value) {
$_smarty_tpl->tpl_vars['feedback']->_loop = true;
 $_smarty_tpl->tpl_vars['feedback']->index++;
 $_smarty_tpl->tpl_vars['feedback']->first = $_smarty_tpl->tpl_vars['feedback']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feedback']['first'] = $_smarty_tpl->tpl_vars['feedback']->first;
?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['feedback']['first']) {?><br><?php }?>
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feedback']->value);?>

		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<br>
<?php if (count($_smarty_tpl->tpl_vars['all_groups']->value)>=5) {?>
	<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(6, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['all_groups']->value)+1, null, 0);?>
<?php }?>
<form method="post">
	<div class="clearfix forb-group">
		<legend>Filtre de groupe</legend>
		<fieldset>
			<div class="col-lg-6">
				<select class='form-control' multiple="multiple" id="filterGroup" name="filterGroup[]" size="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
					<option value=""<?php if (empty($_smarty_tpl->tpl_vars['filterGroup']->value)) {?>selected="selected"<?php }?>></option>
					<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->_loop = true;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['gr']->value,$_smarty_tpl->tpl_vars['filterGroup']->value)) {?>selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['gr']->value);?>
</option>
					<?php } ?>
				</select>
			</div>
			<div>
				<input type="submit" class="btn btn-default" name="filter" value="Filtrer">
			</div>
		</fieldset>
	</div>
</form>
<br>
<legend>Object Permissions</legend>
<ul class="nav nav-tabs" id="allperms">
	<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
		<li>
			<a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
" data-toggle="tab"><?php echo ucwords($_smarty_tpl->tpl_vars['type']->value);?>
</a>
		</li>
	<?php } ?>
</ul>
<div class="tab-content">
	<br>
	<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
		<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
" class="tab-pane">
			<ul class="nav nav-tabs" id="allperms">
				<li class="active"><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" data-toggle="tab">Global permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['default']);?>
)</a></li>
				<li><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-object" data-toggle="tab">Object permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['objects']);?>
)</a></li>
				<li><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-category" data-toggle="tab">Category permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['category']);?>
)</a></li>
			</ul>
			
			<div class="tab-content">
					<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" class="tab-pane active">
						<?php if (count($_smarty_tpl->tpl_vars['content']->value['default'])) {?>
							<form id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" method="post">
								<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
									<input type="hidden" name="filterGroup[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['f']->value);?>
">
								<?php } ?>
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<tr>
											<th class="checkbox-cell"><?php echo smarty_function_select_all(array('checkbox_names'=>'groupPerm[]'),$_smarty_tpl);?>
</th>
											<th>Groupe</th>
											<th>Droit d'accès</th>
										</tr>

										<?php  $_smarty_tpl->tpl_vars['default'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['default']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['default']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['default']->key => $_smarty_tpl->tpl_vars['default']->value) {
$_smarty_tpl->tpl_vars['default']->_loop = true;
?>
											<tr>
												<td class="checkbox-cell"><input type="checkbox" name="groupPerm[]" value='<?php echo smarty_modifier_escape(json_encode($_smarty_tpl->tpl_vars['default']->value));?>
'></td>
												<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default']->value['group']);?>
</td>
												<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['default']->value['perm']);?>
</td>
											</tr>
										<?php } ?>
									</table>
								</div>
								<legend>Perform action with selected permissions:</legend>
								<div class="form-group">
									<label for="delete" class="col-lg-4 control-label">
										Supprimer
									</label>
									<div class="col-lg-2">
										<button class="btn btn-default" name="delete" value="delete">
											OK
										</button>
									</div>
									<div class="col-lg-6"></div><br>
								</div>
								<div class="form-group">
									<label for="duplicate" class="col-lg-4 control-label">
										Assign to this group
									</label>
									<div class="col-lg-4">
										<div class="input-group">
											<input type="text" name="toGroup" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-default" name="duplicate" value="duplicate">
												OK
											</button>
										</span>
										</div>
									</div>
								</div>
							</form>
						<?php } else { ?><br>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Only default global permissions are being used.")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Only default global permissions are being used."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Only default global permissions are being used."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</div><br>
				
				<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-object" class="tab-pane">
					<?php if (count($_smarty_tpl->tpl_vars['content']->value['objects'])) {?>
						<form method="post">
							<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filterGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><input type="hidden" name="filterGroup[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['f']->value);?>
"><?php } ?>
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tr>
										<th class="checkbox-cell"><?php echo smarty_function_select_all(array('checkbox_names'=>'objectPerm[]'),$_smarty_tpl);?>
</th>
										<th>Objet</th>
										<th>Groupe</th>
										<th>Droit d'accès</th>
										<th>Raison</th>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['object']->value['special'])) {?>
											<?php  $_smarty_tpl->tpl_vars['special'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['special']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['special']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['special']->key => $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->_loop = true;
?>
												<tr>
													<td class="checkbox-cell"><input type="checkbox" name="objectPerm[]" value='<?php echo smarty_modifier_escape(json_encode($_smarty_tpl->tpl_vars['special']->value));?>
'></td>
													<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['objectName']);?>
</td>
													<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['group']);?>
</td>
													<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['perm']);?>
</td>
													<td class="text">
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['objectId'])) {?>
															
															<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>$_smarty_tpl->tpl_vars['special']->value['objectType'],'id'=>$_smarty_tpl->tpl_vars['special']->value['objectId'],'title'=>$_smarty_tpl->tpl_vars['special']->value['objectName'],'label'=>$_smarty_tpl->tpl_vars['special']->value['reason']),$_smarty_tpl);?>

														<?php } else { ?>
															<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['reason']);?>

														<?php }?>
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['detail'])) {?>(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['detail']);?>
)<?php }?>
													</td>
												</tr>
											<?php } ?>
										<?php }?>
									<?php } ?>
								</table>
							</div>
							<legend>Perform action with selected permissions:</legend>
							<div class="form-group">
								<label for="delete" class="col-lg-4 control-label">
									Supprimer
								</label>
								<div class="col-lg-2">
									<button class="btn btn-default" name="delete" value="delete">
										OK
									</button>
								</div>
								<div class="col-lg-6"></div><br>
							</div>
							<div class="form-group">
								<label for="duplicate" class="col-lg-4 control-label">
									Assign to this group
								</label>
								<div class="col-lg-4">
									<div class="input-group">
										<input type="text" name="toGroup" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-default" name="duplicate" value="duplicate">
												OK
											</button>
										</span>
									</div>
								</div>
							</div>
						</form>
					<?php } else { ?><br>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"No object permissions apply.")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"No object permissions apply."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"No object permissions apply."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
				
				<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-category" class="tab-pane">
					<?php if (count($_smarty_tpl->tpl_vars['content']->value['category'])) {?>
						<form method="post">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tr>
										<th>Objet</th>
										<th>Groupe</th>
										<th>Droit d'accès</th>
										<th>Raison</th>
									</tr>
									<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['object']->value['category'])) {?>
											<?php  $_smarty_tpl->tpl_vars['special'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['special']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['special']->key => $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->_loop = true;
?>
												<tr>
													<td class="text"><?php if (isset($_smarty_tpl->tpl_vars['object']->value['objectName'])) {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['objectName']);
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['objectId']);
}?></td>
													<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['group']);?>
</td>
													<td class="text"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['perm']);?>
</td>
													<td class="text">
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['objectId'])) {?>
															
															<?php echo smarty_function_permission_link(array('mode'=>'icon','type'=>$_smarty_tpl->tpl_vars['special']->value['objectType'],'id'=>$_smarty_tpl->tpl_vars['special']->value['objectId'],'title'=>$_smarty_tpl->tpl_vars['special']->value['objectName']),$_smarty_tpl);?>

															<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['reason']);?>
:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['objectName']);?>

														<?php } else { ?>
															<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['reason']);?>
: <?php echo $_smarty_tpl->tpl_vars['special']->value['objectName'];?>

														<?php }?>
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['detail'])) {?>(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['detail']);?>
)<?php }?>
													</td>
												</tr>
											<?php } ?>
										<?php }?>
									<?php } ?>
								</table>
							</div>
						</form>
					<?php } else { ?><br>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"No category permissions apply.")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"No category permissions apply."), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"No category permissions apply."), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</div>
			</div>
		</div>
	<?php } ?>
</div><?php }} ?>
