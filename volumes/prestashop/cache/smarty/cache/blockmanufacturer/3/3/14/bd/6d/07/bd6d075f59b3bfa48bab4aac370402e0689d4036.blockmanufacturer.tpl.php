<?php /*%%SmartyHeaderCode:2193850375a006fff4a8709-77984659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6d075f59b3bfa48bab4aac370402e0689d4036' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1509975439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2193850375a006fff4a8709-77984659',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a251a970fac24_36986949',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a251a970fac24_36986949')) {function content_5a251a970fac24_36986949($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://localhost:8080/producenci" title="Producenci">
						Producenci
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://localhost:8080/1_prosto-records" title="Około Prosto Records">
							Prosto Records
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Wszyscy producenci</option>
													<option value="http://localhost:8080/1_prosto-records">Prosto Records</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
