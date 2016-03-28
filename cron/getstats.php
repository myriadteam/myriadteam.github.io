<?php
	@chdir(dirname(__FILE__).'/'); //Change dir.
	set_time_limit(600);
	
	$outfile = '../web/json/stats.json';
	
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
	
	$data = get_data("http://myriad.nutty.one/json/network.php");
	if($data->errorno==0)
	{
		file_put_contents($outfile, json_encode($data));
	}


?>