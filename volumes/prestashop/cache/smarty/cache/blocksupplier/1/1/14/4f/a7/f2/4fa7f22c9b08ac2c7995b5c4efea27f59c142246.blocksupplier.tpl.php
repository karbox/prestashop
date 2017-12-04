<?php /*%%SmartyHeaderCode:5818524515a006fff534e14-00820711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa7f22c9b08ac2c7995b5c4efea27f59c142246' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1509975439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5818524515a006fff534e14-00820711',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a251dca0ba9a6_86447318',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a251dca0ba9a6_86447318')) {function content_5a251dca0ba9a6_86447318($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost:8080/dostawcy" title="Dostawcy">
					Dostawcy
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost:8080/1__eminem-plytki-swirki" 
					title="Więcej o Eminem Płytki Świrki">
				                Eminem Płytki Świrki
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Wszyscy dostawcy</option>
													<option value="http://localhost:8080/1__eminem-plytki-swirki">Eminem Płytki Świrki</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
