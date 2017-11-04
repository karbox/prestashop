<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:13:27
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181675799059fdcb07ec85d6-61901818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67aed5bc355d0a07fcd913a6cf774d8279edffd8' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1509804583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181675799059fdcb07ec85d6-61901818',
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
  'unifunc' => 'content_59fdcb07eca413_41311790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdcb07eca413_41311790')) {function content_59fdcb07eca413_41311790($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
