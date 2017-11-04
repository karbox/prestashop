<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:13:28
         compiled from "/var/www/html/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21875747759fdcb0804ab77-86774530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2f26a32795f3ffad7f75f5b4db98606b00ed84d' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1509804583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21875747759fdcb0804ab77-86774530',
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
  'unifunc' => 'content_59fdcb0805b527_66136662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdcb0805b527_66136662')) {function content_59fdcb0805b527_66136662($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
