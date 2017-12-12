<?php
	@chdir(dirname(__FILE__).'/'); //Change dir.
	set_time_limit(600);
	
	$outfile = '../web/json/price.json';
	
	function get_data($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		$response = curl_exec($ch);

		$output = new stdClass;
		$output->errorno = curl_errno($ch);
		$output->errormsg = curl_error($ch);
		$output->data = '';
		if($output->errorno==0)
		{
			$output->data = json_decode($response);
		}
		return $output;
	}

	$output = new stdClass;
	
	// We're not on polo right now
	//$poloniex = get_data("https://poloniex.com/public?command=returnTicker");
	$bittrex = get_data("https://bittrex.com/api/v1.1/public/getmarketsummaries");

	//if($poloniex->errorno==0 && $bittrex->errorno==0)
	if ($bittrex->errorno==0)
	{
		$output->updated = time();
/*		$output->poloniex = new stdClass;
		$output->poloniex->last = floatval($poloniex->data->BTC_MYR->last);
		$output->poloniex->high = floatval($poloniex->data->BTC_MYR->high24hr);
		$output->poloniex->low = floatval($poloniex->data->BTC_MYR->low24hr);
		$output->poloniex->vol = floatval($poloniex->data->BTC_MYR->baseVolume);
*/
		$output->bittrex = new stdClass;
		foreach($bittrex->data->result as $market)
		{
			if($market->MarketName=='BTC-XMY')
			{
				$output->bittrex->last = floatval($market->Last);
				$output->bittrex->high = floatval($market->High);
				$output->bittrex->low = floatval($market->Low);
				$output->bittrex->vol = floatval($market->BaseVolume);
				break;
			}
		}
		file_put_contents($outfile, json_encode($output));
	}





?>