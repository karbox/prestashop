<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 13:14:15
         compiled from "/var/www/html/admin1/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110180453359ff8717ca3655-89168006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0601122a917da595678656ac06b526b37083998b' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1509970259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110180453359ff8717ca3655-89168006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff8717cb4f30_62818416',
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff8717cb4f30_62818416')) {function content_59ff8717cb4f30_62818416($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
