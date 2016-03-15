<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/logo.png" width="150" height="150"><img src="/images/services.png" width="600" height="150"></p>
		<p class="visible-sm"><img src="/images/logo.png" width="100" height="100"><img src="/images/services.png" width="400" height="100"></p>
		<p class="visible-xs"><img src="/images/logo.png" width="70" height="70"><img src="/images/services.png" width="280" height="70"></p>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<h2><?php echo translate("Information &amp; Resources", $lang); ?></h2>
			<ul>
				<li><a href="http://birdonwheels5.no-ip.org/" target="_blank">Insight Explorer (1)</a></li>
				<li><a href="http://insight-myr.cryptap.us/" target="_blank">Insight Explorer (2)</a></li>
				<li><a href="https://cryptap.us/myr/explorer/chain/Myriadcoin" target="_blank">Abe Explorer</a></li>
				<li><a href="http://myriad.nutty.one/home" target="_blank"><?php echo translate("Network Status", $lang); ?></a></li>
			</ul>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Exchanges", $lang); ?></h2>
			<ul>
				<li><a href="https://poloniex.com/exchange/btc_myr" target="_blank">Poloniex</a></li>
				<li><a href="https://bittrex.com/Market/Index?MarketName=BTC-MYR" target="_blank">Bittrex</a></li>
				<li><a href="https://www.cryptopia.co.nz/Exchange?market=MYR_BTC" target="_blank">Cryptopia</a></li>
				<li><a href="https://safecex.com/market?q=MYR/BTC" target="_blank">Safecex</a></li>
			</ul>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Other", $lang); ?></h2>
			<ul>
				<li><a href="https://cryptap.us/myr/faucet/" target="_blank"><?php echo translate("Faucet", $lang); ?></a></li>
				<li><a href="http://coinmarketcap.com/currencies/myriadcoin/" target="_blank">Coinmarketcap</a></li>
				<li><a href="https://www.reddit.com/r/myriadcoin/comments/47pww5/testnet_nodes_and_faucet/" target="_blank"><?php echo translate("Testnet Information", $lang); ?></a></li>
			</ul>
		</div>
	</div>
	
<?php		
 	include 'include/footer.php';
?>
