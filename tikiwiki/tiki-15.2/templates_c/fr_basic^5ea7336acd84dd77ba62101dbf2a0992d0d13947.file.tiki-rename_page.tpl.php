<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 14:57:59
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-rename_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2035874449583ee8f74ea098-67700844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ea7336acd84dd77ba62101dbf2a0992d0d13947' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-rename_page.tpl',
      1 => 1417840096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2035874449583ee8f74ea098-67700844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'page_badchars_display' => 0,
    'prefs' => 0,
    'newname' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583ee8f7539d95_73690095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ee8f7539d95_73690095')) {function content_583ee8f7539d95_73690095($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Renommer la page: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar" role="navigation">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url'), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'class'=>"btn btn-default btn-sm navbar-btn",'_text'=>"Afficher la page"),$_smarty_tpl);?>

</div>

<form action="tiki-rename_page.php" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Erreur")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Erreur"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Conseil")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Conseil"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Conseil"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<input type="hidden" name="badname" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newname']->value);?>
">
			<input type="submit" class="btn btn-default btn-sm" name="confirm" value="Utiliser ce nom en tout cas">
		<?php }?>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<div class="form-group">
		<div class="col-sm-10">
			<label for="newpage" class="col-sm-2 control-label">Nouveau nom</label>
			<div class="col-sm-10">
				<input type='text' id='newpage' name='newpage' class="form-control" value='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newname']->value);?>
'>
			</div>
		</div>
		<div class="col-sm-2">
			<input type="submit" class="btn btn-primary btn-sm" name="rename" value="Renommer">
		</div>
	</div>
</form>
<?php }} ?>
