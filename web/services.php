<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="row">
		<div class="col-lg-3">
			<h2><?php echo translate("Information &amp; Resources", $lang); ?></h2>
			<ul>
				<li><a href="http://insight-myr.cryptap.us/" target="_blank">Insight Explorer</a></li>
				<li><a href="https://cryptap.us/myr/explorer/chain/Myriadcoin" target="_blank">Abe Explorer</a></li>
				<li><a href="http://myriad.nutty.one/home" target="_blank"><?php echo translate("Network Status", $lang); ?></a></li>
			</ul>
		</div>
		<div class="col-lg-3">
			<h2><?php echo translate("Exchanges", $lang); ?></h2>
			<ul>
				<li><a href="https://bitsquare.io" target="_blank">Bitsquare</a></li>
				<li><a href="https://bittrex.com/Market/Index?MarketName=BTC-MYR" target="_blank">Bittrex</a></li>
				<li><a href="https://www.cryptopia.co.nz/Exchange?market=MYR_BTC" target="_blank">Cryptopia</a></li>
				<li><a href="https://www.litebit.eu/en/buy/myriadcoin" target="_blank">Litebit MYR/EUR</a></li>
			</ul>
		</div>
		<div class="col-lg-3">
			<h2><?php echo translate("Shop", $lang); ?></h2>
			<ul>
				<li><a href="https://www.coinpayments.net/store-directory-coin-MYR#list" target="_blank">List of Coinpayments stores</a></li>
			</ul>
		</div>
		<div class="col-lg-3">
			<h2><?php echo translate("Other", $lang); ?></h2>
			<ul>
				<li><a href="http://trip.myrcraft.com/" target="_blank"><?php echo translate("Game faucet", $lang); ?></a></li>
				<li><a href="https://cryptap.us/myr/faucet/" target="_blank"><?php echo translate("Faucet", $lang); ?></a></li>
				<li><a href="http://coinmarketcap.com/currencies/myriadcoin/" target="_blank">Coinmarketcap</a></li>
				<li><a href="https://www.reddit.com/r/myriadcoin/comments/47pww5/testnet_nodes_and_faucet/" target="_blank"><?php echo translate("Testnet Information", $lang); ?></a></li>
				<li><a href="https://cryptap.us/myr/" target="_blank">cryptap.us Myriad page</a></li>
				<li><a href="https://www.reddit.com/r/myrbot/wiki/index" target="_blank">Reddit/IRC myrbot information</a></li>
			</ul>
		</div>
	</div>
	
<?php		
 	include 'include/footer.php';
?>
