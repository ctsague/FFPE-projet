<?php /* Smarty version Smarty-3.1.21, created on 2016-11-30 15:06:38
         compiled from "/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-calendar_listmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310377978583eeafec41305-80436254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c992ef4bdc979bbb956afc4c1300c20842b98b1' => 
    array (
      0 => '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/templates/tiki-calendar_listmode.tpl',
      1 => 1457197740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310377978583eeafec41305-80436254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'myurl' => 0,
    'sort_mode' => 0,
    'listevents' => 0,
    'event' => 0,
    'calendarId' => 0,
    'infocals' => 0,
    'libeg' => 0,
    'liend' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_583eeafed3abe1_82481825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583eeafed3abe1_82481825')) {function content_583eeafed3abe1_82481825($_smarty_tpl) {?><?php if (!is_callable('smarty_function_norecords')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_function_cycle')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_tiki_short_time')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/modifier.tiki_short_time.php';
if (!is_callable('smarty_function_icon')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include '/home/ctsague/exos/projet_ffpe/tikiwiki/tiki-15.2/lib/smarty_tiki/function.popup.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>

<table cellpadding="0" cellspacing="0" border="0" class="table normal table-striped table-hover">
	<tr>
		<th style="width:20%"><a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='start_desc') {?>start_asc<?php } else { ?>start_desc<?php }?>">Début</a></th>
		<th style="width:20%"><a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='end_desc') {?>end_asc<?php } else { ?>end_desc<?php }?>">Fin</a></th>
		<th><a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Nom</a></th>
		<th></th>
	</tr>
	<?php if (count($_smarty_tpl->tpl_vars['listevents']->value)==0) {
echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);
}?>

	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listevents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['calendarId'] = new Smarty_variable($_smarty_tpl->tpl_vars['event']->value['calendarId'], null, 0);?>
		<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['event']->value['start']<=time()&&$_smarty_tpl->tpl_vars['event']->value['end']>=time()) {?> selected<?php }?> vevent">
			<td class="date">
				<abbr class="dtstart" title="<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['start']);?>
">
					<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?todate=<?php echo $_smarty_tpl->tpl_vars['event']->value['start'];?>
" title="Changer le focus"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['start']);?>
</a>
				</abbr><br>
				<?php if ($_smarty_tpl->tpl_vars['event']->value['allday']) {?> Journée entière <?php } else { ?> <?php echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['event']->value['start']);?>
 <?php }?>
			</td>
			<td class="date">
				<?php if (smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['start'])!=smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['end'])) {?><abbr class="dtend" title="<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['end']);?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?todate=<?php echo $_smarty_tpl->tpl_vars['event']->value['end'];?>
" title="Changer le focus"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['event']->value['end']);?>
</a></abbr> <?php }?><br>
<?php if ($_smarty_tpl->tpl_vars['event']->value['start']!=$_smarty_tpl->tpl_vars['event']->value['end']&&$_smarty_tpl->tpl_vars['event']->value['allday']!=1) {
echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['event']->value['end']);
}?>
			</td>
			<td style="<?php if ($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor']!='') {?>background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
;<?php }?>">
				<a class="link" href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
" title="Afficher">
				<?php if ($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor']!='') {?><span style="color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
;"><?php }?>
				<span class="summary"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['event']->value['name']);?>
</span></a><br>
				<span class="description" style="font-style:italic"><?php echo $_smarty_tpl->tpl_vars['event']->value['parsed'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['event']->value['web']) {?>
					<br><a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['web'];?>
" target="_other" class="calweb" title="<?php echo $_smarty_tpl->tpl_vars['event']->value['web'];?>
"><img src="img/icons/external_link.gif" width="7" height="7" alt="&gt;"></a>
					<?php if ($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor']!='') {?></span><?php }?>
				<?php }?>
			</td>
			<td class="action">
				<?php if ($_smarty_tpl->tpl_vars['event']->value['modifiable']=="y") {?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('calendar_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-calendar_edit_item.php?calitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Éditer"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-calendar_edit_item.php?calitemId=<?php echo $_smarty_tpl->tpl_vars['event']->value['calitemId'];?>
&amp;delete=1"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Supprimer"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Actions"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['calendar_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['calendar_actions'];?>
</ul></li></ul>
					<?php }?>
				<?php }?>
			</td>
		</tr>
	<?php } ?>
</table>
<?php }} ?>
