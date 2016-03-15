<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="description" content="Myriad">
	<meta name="keywords" content="Myriad, Myriadcoin, Altcoin, Crypto, Cryptocurrency, Bitcoin, SHA256, Scrypt, Mining, Wallet, MYR, BTC, Blockchain, AuxPow, Merge Mining">
    <meta name="author" content="MyriadTeam">
    <link rel="icon" href="/favicon.ico">

<?php

	$languages = array("en","es");
	$titles = array();
	$titles['en']['default'] = 'Myriad. A Coin For Everyone';
	$titles['en']['technology'] = 'Myriad: Technology';
	$titles['en']['wallets'] = 'Myriad: Wallets';
	$titles['en']['mining'] = 'Myriad: Mining';
	$titles['en']['services'] = 'Myriad: Services';
	$titles['en']['social'] = 'Myriad: Social';
	
	$titles['es']['default'] = 'Myriad. Una moneda para todo el mundo';
	$titles['es']['technology'] = 'Myriad: Tecnología';
	$titles['es']['wallets'] = 'Myriad: Carteras';
	$titles['es']['mining'] = 'Myriad: Minería';
	$titles['es']['services'] = 'Myriad: Servicios';
	$titles['es']['social'] = 'Myriad: Social';
	
	
	switch ($path)
	{
		case 'technology':
		case 'wallets':
		case 'mining':
		case 'services':
		case 'social':
			$title = $titles[$lang][$path];
			break;
		default:
			$title = $titles[$lang]['default'];
			break;
	}
?>
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="/css/justified-nav.css" rel="stylesheet">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php
//echo $debug;
?>
    <div class="container">

	  <div>
		<p class="text-right">
<?php
	
	foreach ($languages as $l)
	{
		if($l == $lang)
		{
			print '<a class="language" href="/' . $l . '/' . $path . '" data-language="' . $l . '"><img src="/images/lang/' . $l . '.png" width="16" height="11" style="border=2;" /></a> ';
		}
		else
		{
			print '<a class="language" href="/' . $l . '/' . $path . '" data-language="' . $l . '"><img src="/images/lang/' . $l . '.png" width="16" height="11" /></a> ';
		}
	}
?>
		</p>
	  </div>
	  
      <div class="masthead">
	  
		<nav class="navbar navbar-inverse navbar-fixed-top visible-xs">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Myriad</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
<?php
	$navclass = $path=='home' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/home">Home</a></li>
<?php
	$navclass = $path=='technology' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/technology">Technology</a></li>
<?php
	$navclass = $path=='wallets' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/wallets">Wallets</a></li>
<?php
	$navclass = $path=='mining' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/mining">Mining</a></li>
<?php
	$navclass = $path=='services' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/services">Services</a></li>
<?php
	$navclass = $path=='social' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/social">Social</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<p class="visible-xs">&nbsp;</p>
	  
        <nav class="navbar navbar-default hidden-xs">
		<ul class="nav nav-justified">
<?php
	$navclass = $path=='home' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/home">Home</a></li>
<?php
	$navclass = $path=='technology' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/technology">Technology</a></li>
<?php
	$navclass = $path=='wallets' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/wallets">Wallets</a></li>
<?php
	$navclass = $path=='mining' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/mining">Mining</a></li>
<?php
	$navclass = $path=='services' ? 'active' : '';
?>
			<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/services">Services</a></li>
<?php
	$navclass = $path=='social' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/social">Social</a></li>
          </ul>
        </nav>
      </div>

	  