	</div> <!-- /container -->

	<nav class="navbar navbar-default navbar-fixed-bottom hidden-xs" style="min-height: 10px;">
		<div class="container">
				<p class="text-center small">
<?php

	$price = json_decode(file_get_contents('json/price.json'));
	print 'Market Data: <a href="https://poloniex.com/exchange#btc_myr" target="_blank">Poloniex</a> [Last ' . sprintf('%02.08f',$price->poloniex->last);
	print ', <span style="color: Green">High ' . sprintf('%02.08f',$price->poloniex->high) . '</span>, <span style="color: Red">Low ' . sprintf('%02.08f',$price->poloniex->low);
	print '</span>, <span style="color: Blue">Volume ' . sprintf('%02.08f',$price->poloniex->vol) . ' BTC</span>] ';
	print ', <a href="https://bittrex.com/Market/?MarketName=BTC-MYR" target="_blank">Bittrex</a> [Last ' . sprintf('%02.08f',$price->bittrex->last);
	print ', <span style="color: Green">High ' . sprintf('%02.08f',$price->bittrex->high) . '</span>, <span style="color: Red">Low ' . sprintf('%02.08f',$price->bittrex->low);
	print '</span>, <span style="color: Blue">Volume ' . sprintf('%02.08f',$price->bittrex->vol) . ' BTC</span>]<br/>';
	
	$stats = json_decode(file_get_contents('json/stats.json'));
	print 'Best Block: <a href="http://insight-myr.cryptap.us/block/' . $stats->data->BestHash . '" target="_blank">' . $stats->data->Blocks . '</a> ';
	print ', Hashrates: SHA256d ' . $stats->data->SHA_hash;
	print ', Scrypt ' . $stats->data->SCR_hash;
	print ', Myr-Groestl ' . $stats->data->MGR_hash;
	print ', Skein ' . $stats->data->SKN_hash;
	print ', Qubit ' . $stats->data->QUB_hash;
?>
					<br/>&copy; 2015-2016, Myriad Developers
				</p>
		</div>
	</nav>

	<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69532365-1', 'auto');
  ga('send', 'pageview');

 
	
  
</script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
