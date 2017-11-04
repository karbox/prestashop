<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:13:31
         compiled from "/var/www/html/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155328116159fdcb0b1277f7-21486405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5c567864ae43fece2b0b23392fb5d51db30b079' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1509804474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155328116159fdcb0b1277f7-21486405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fdcb0b12ecf5_81642417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdcb0b12ecf5_81642417')) {function content_59fdcb0b12ecf5_81642417($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
