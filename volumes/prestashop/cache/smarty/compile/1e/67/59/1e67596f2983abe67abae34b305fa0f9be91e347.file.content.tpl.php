<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:13:34
         compiled from "/var/www/html/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93102418759fdcb0e3e1c88-40721475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e67596f2983abe67abae34b305fa0f9be91e347' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/content.tpl',
      1 => 1509804583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93102418759fdcb0e3e1c88-40721475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fdcb0e3e3510_27459615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdcb0e3e3510_27459615')) {function content_59fdcb0e3e3510_27459615($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
