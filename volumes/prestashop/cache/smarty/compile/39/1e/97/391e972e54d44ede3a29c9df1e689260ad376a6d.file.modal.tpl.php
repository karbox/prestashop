<?php /* Smarty version Smarty-3.1.19, created on 2017-12-03 18:28:33
         compiled from "/var/www/html/admin1/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93135164359ff86b4ed3e58-60521518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '391e972e54d44ede3a29c9df1e689260ad376a6d' => 
    array (
      0 => '/var/www/html/admin1/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1512306786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93135164359ff86b4ed3e58-60521518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ff86b4ed6471_94720753',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff86b4ed6471_94720753')) {function content_59ff86b4ed6471_94720753($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
