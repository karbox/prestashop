<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:44:09
         compiled from "/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201393713459fdd2392cb3b8-45176005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364d9a004aa5e598fd30db42581c56cb18f0537e' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1509806631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201393713459fdd2392cb3b8-45176005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fdd2392cbff0_66546930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdd2392cbff0_66546930')) {function content_59fdd2392cbff0_66546930($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
