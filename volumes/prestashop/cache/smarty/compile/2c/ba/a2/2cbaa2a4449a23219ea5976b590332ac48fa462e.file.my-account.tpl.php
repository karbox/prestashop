<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:13:31
         compiled from "/var/www/html/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156101663859fdcb0b3fb8f4-38164478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cbaa2a4449a23219ea5976b590332ac48fa462e' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1509804474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156101663859fdcb0b3fb8f4-38164478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fdcb0b3fe4f3_09905719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdcb0b3fe4f3_09905719')) {function content_59fdcb0b3fe4f3_09905719($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
