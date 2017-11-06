<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:44:29
         compiled from "/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108158418559ff88a3c0aab0-59902854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd175c93a420d8320b1ab3437e4f60c4a4a8eb5fa' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1509975438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108158418559ff88a3c0aab0-59902854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff88a3c0d410_62538840',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff88a3c0d410_62538840')) {function content_59ff88a3c0d410_62538840($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
