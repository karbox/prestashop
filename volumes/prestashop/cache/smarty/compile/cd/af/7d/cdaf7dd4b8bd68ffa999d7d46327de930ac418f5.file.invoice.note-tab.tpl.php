<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 21:42:04
         compiled from "/var/www/html/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7308850535a24619c0760f5-20825770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdaf7dd4b8bd68ffa999d7d46327de930ac418f5' => 
    array (
      0 => '/var/www/html/pdf/invoice.note-tab.tpl',
      1 => 1512306789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7308850535a24619c0760f5-20825770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a24619c07e898_84122912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a24619c07e898_84122912')) {function content_5a24619c07e898_84122912($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
