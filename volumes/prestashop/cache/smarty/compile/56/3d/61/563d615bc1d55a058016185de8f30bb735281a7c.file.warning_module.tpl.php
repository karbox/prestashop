<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 18:37:43
         compiled from "/var/www/html/admin1/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11869464659ff86ba8fe212-73910608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '563d615bc1d55a058016185de8f30bb735281a7c' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1512306786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11869464659ff86ba8fe212-73910608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff86ba9201b8_44473652',
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff86ba9201b8_44473652')) {function content_59ff86ba9201b8_44473652($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
