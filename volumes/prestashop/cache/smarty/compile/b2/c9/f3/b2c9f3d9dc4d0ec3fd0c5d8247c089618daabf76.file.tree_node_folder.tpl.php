<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 15:44:07
         compiled from "/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210639838559fdd2376ae078-09266644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c9f3d9dc4d0ec3fd0c5d8247c089618daabf76' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1509806631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210639838559fdd2376ae078-09266644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fdd2376b0051_60521421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fdd2376b0051_60521421')) {function content_59fdd2376b0051_60521421($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
