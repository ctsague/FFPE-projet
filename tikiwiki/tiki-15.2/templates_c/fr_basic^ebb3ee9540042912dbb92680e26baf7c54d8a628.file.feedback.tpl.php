<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 10:58:23
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/utilities/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62631377583eb0cf1398c0-10528080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebb3ee9540042912dbb92680e26baf7c54d8a628' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/utilities/feedback.tpl',
      1 => 1450021324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62631377583eb0cf1398c0-10528080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxfeedback' => 0,
    'tikifeedback' => 0,
    'errors' => 0,
    'error' => 0,
    'feedbacks' => 0,
    'feedback' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eb0cf1b5571_74847277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eb0cf1b5571_74847277')) {function content_583eb0cf1b5571_74847277($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/block.tr.php';
?>

<div id="ajax-feedback" style="display:none"></div>
<?php if (isset($_smarty_tpl->tpl_vars['ajaxfeedback']->value)&&$_smarty_tpl->tpl_vars['ajaxfeedback']->value=='y') {?>
	<div id="posted-ajax-feedback">
		<?php echo $_smarty_tpl->getSubTemplate ("utilities/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['tikifeedback']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"Information")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tikifeedback']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['mes']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<br>
		<?php endfor; endif; ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Erreurs")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Erreurs"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['error']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['error']->index++;
 $_smarty_tpl->tpl_vars['error']->first = $_smarty_tpl->tpl_vars['error']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['error']['first'] = $_smarty_tpl->tpl_vars['error']->first;
?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['error']['first']) {?><br><?php }?>
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['error']->value);?>

		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Erreurs"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['feedbacks']->value)) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['feedback'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feedback']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['feedback']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['feedback']->key => $_smarty_tpl->tpl_vars['feedback']->value) {
$_smarty_tpl->tpl_vars['feedback']->_loop = true;
 $_smarty_tpl->tpl_vars['feedback']->index++;
 $_smarty_tpl->tpl_vars['feedback']->first = $_smarty_tpl->tpl_vars['feedback']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['feedback']['first'] = $_smarty_tpl->tpl_vars['feedback']->first;
?>
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feedback']->value);?>

			<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['feedback']['first']) {?><br><?php }?>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php }} ?>
