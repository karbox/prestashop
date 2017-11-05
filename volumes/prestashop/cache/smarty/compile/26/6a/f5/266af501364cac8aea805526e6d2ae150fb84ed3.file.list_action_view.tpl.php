<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 19:50:14
         compiled from "/var/www/html/admin1/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117436900759ff5d664018a2-21022388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266af501364cac8aea805526e6d2ae150fb84ed3' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1509890570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117436900759ff5d664018a2-21022388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff5d66405d14_51290758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff5d66405d14_51290758')) {function content_59ff5d66405d14_51290758($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
