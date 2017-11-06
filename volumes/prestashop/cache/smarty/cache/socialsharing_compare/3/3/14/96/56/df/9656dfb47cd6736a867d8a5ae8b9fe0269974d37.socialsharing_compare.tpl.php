<?php /*%%SmartyHeaderCode:5347288235a006fff69a0c1-71137093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9656dfb47cd6736a867d8a5ae8b9fe0269974d37' => 
    array (
      0 => '/var/www/html/modules/socialsharing/views/templates/hook/socialsharing_compare.tpl',
      1 => 1509975439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5347288235a006fff69a0c1-71137093',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a006fff6a94a8_12872397',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a006fff6a94a8_12872397')) {function content_5a006fff6a94a8_12872397($_smarty_tpl) {?>	<div id="social-share-compare">
		<p>Udostępnij to porównanie znajomym:</p>
		<p class="socialsharing_product">
					<button data-type="twitter" type="button" class="btn btn-default btn-twitter social-sharing">
				<i class="icon-twitter"></i> Tweetuj
			</button>
							<button data-type="facebook" type="button" class="btn btn-default btn-facebook social-sharing">
				<i class="icon-facebook"></i> Udostępnij
			</button>
							<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus social-sharing">
				<i class="icon-google-plus"></i> Google+
			</button>
							<button data-type="pinterest" type="button" class="btn btn-default btn-pinterest social-sharing">
				<i class="icon-pinterest"></i> Pinterest
			</button>
				</p>
	</div>
<?php }} ?>
