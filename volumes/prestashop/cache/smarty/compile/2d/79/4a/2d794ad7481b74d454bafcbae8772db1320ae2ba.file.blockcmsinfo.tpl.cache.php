<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 14:54:34
         compiled from "/var/www/html/modules/blockcmsinfo/blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315332015a00699a1ca640-60808963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d794ad7481b74d454bafcbae8772db1320ae2ba' => 
    array (
      0 => '/var/www/html/modules/blockcmsinfo/blockcmsinfo.tpl',
      1 => 1509975439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315332015a00699a1ca640-60808963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00699a1d2e19_01351018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00699a1d2e19_01351018')) {function content_5a00699a1d2e19_01351018($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
