<?php /*%%SmartyHeaderCode:202992299159ff90d70fa1f7-93430152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054440a5b928799e8ca909a0b328db11279aee9a' => 
    array (
      0 => '/var/www/html/themes/default-bootstrap/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1509890571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202992299159ff90d70fa1f7-93430152',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a006fa94019f4_22915678',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a006fa94019f4_22915678')) {function content_5a006fa94019f4_22915678($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost:8080/moje-konto" title="Zarządzaj moim kontem klienta" rel="nofollow">Moje konto</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost:8080/historia-zamowien" title="Moje zamówienia" rel="nofollow">Moje zamówienia</a></li>
						<li><a href="http://localhost:8080/pokwitowania" title="Moje rachunki" rel="nofollow">Moje rachunki</a></li>
			<li><a href="http://localhost:8080/adresy" title="Moje adresy" rel="nofollow">Moje adresy</a></li>
			<li><a href="http://localhost:8080/dane-osobiste" title="Zarządzaj moimi informacjami osobistymi" rel="nofollow">Moje informacje osobiste</a></li>
						
            <li><a href="http://localhost:8080/?mylogout" title="Wyloguj się" rel="nofollow">Wyloguj się</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
