<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:42:18
         compiled from "/var/www/html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2801804285a0074cac70c20-87108729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799c7b33b7ad0318fd80c400c9bcc0c4bf2975c9' => 
    array (
      0 => '/var/www/html/modules/blocknewsletter/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1509975439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2801804285a0074cac70c20-87108729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'disable' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a0074cac75198_80849705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0074cac75198_80849705')) {function content_5a0074cac75198_80849705($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
