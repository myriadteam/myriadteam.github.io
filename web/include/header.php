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

	$languages = array("en","es","eo","zh");
	$langnames = array("en" => "English", "es" => "Espanol", "eo" => "Esperanto", "zh" => "Chinese");
	$titles = array();
	$titles['en']['default'] = 'A Coin For Everyone';
	$titles['en']['technology'] = 'Technology';
	$titles['en']['wallets'] = 'Wallets';
	$titles['en']['mining'] = 'Mining';
	$titles['en']['services'] = 'Services';
	$titles['en']['social'] = 'Social';
	
	$titles['es']['default'] = 'Una moneda para todo el mundo';
	$titles['es']['technology'] = 'Tecnología';
	$titles['es']['wallets'] = 'Carteras';
	$titles['es']['mining'] = 'Minería';
	$titles['es']['services'] = 'Servicios';
	$titles['es']['social'] = 'Social';
	
	$titles['eo']['default'] = 'Valuto por ĉiuj';
	$titles['eo']['technology'] = 'Teknologio';
	$titles['eo']['wallets'] = 'Monujoj';
	$titles['eo']['mining'] = 'Minado';
	$titles['eo']['services'] = 'Servoj';
	$titles['eo']['social'] = 'Komunumo';	
	
	$titles['zh']['default'] = '主页';
	$titles['zh']['technology'] = '技术';
	$titles['zh']['wallets'] = '钱包';
	$titles['zh']['mining'] = '挖矿';
	$titles['zh']['services'] = '服务';
	$titles['zh']['social'] = '社交媒体';	
	
	switch ($path)
	{
		case 'technology':
		case 'wallets':
		case 'mining':
		case 'services':
		case 'social':
			$title = 'Myriad: ' . $titles[$lang][$path];
			$headerimg = $path . '.png';
			break;
		default:
			$title = 'Myriad. ' . $titles[$lang]['default'];
			$headerimg = 'header.png';
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

	  <div class="hidden-xs">
		<p class="text-right">
<?php
	
	foreach ($languages as $l)
	{
		print '<a href="/' . $l . '/' . $path . '"><img src="/images/lang/' . $l . '.png" width="16" height="11" title="' . $langnames[$l] . '"/></a> ';
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
					
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
							<ul class="dropdown-menu">
<?php
	
	foreach ($languages as $l)
	{
		print '<li><a href="/' . $l . '/' . $path . '">' . $langnames[$l] . '</a></li>';
	}
?>							
							</ul>
						</li>
					
<?php
	$navclass = $path=='home' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/home">Myriad</a></li>
<?php
	$navclass = $path=='technology' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/technology"><?php echo $titles[$lang]['technology']; ?></a></li>
<?php
	$navclass = $path=='wallets' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/wallets"><?php echo $titles[$lang]['wallets']; ?></a></li>
<?php
	$navclass = $path=='mining' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/mining"><?php echo $titles[$lang]['mining']; ?></a></li>
<?php
	$navclass = $path=='services' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/services"><?php echo $titles[$lang]['services']; ?></a></li>
<?php
	$navclass = $path=='social' ? 'active' : '';
?>
						<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/social"><?php echo $titles[$lang]['social']; ?></a></li>
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
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/home">Myriad</a></li>
<?php
	$navclass = $path=='technology' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/technology"><?php echo $titles[$lang]['technology']; ?></a></li>
<?php
	$navclass = $path=='wallets' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/wallets"><?php echo $titles[$lang]['wallets']; ?></a></li>
<?php
	$navclass = $path=='mining' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/mining"><?php echo $titles[$lang]['mining']; ?></a></li>
<?php
	$navclass = $path=='services' ? 'active' : '';
?>
			<li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/services"><?php echo $titles[$lang]['services']; ?></a></li>
<?php
	$navclass = $path=='social' ? 'active' : '';
?>
            <li class="<?php echo $navclass; ?>"><a href="/<?php echo $lang; ?>/social"><?php echo $titles[$lang]['social']; ?></a></li>
          </ul>
        </nav>
      </div>

<!-- header image -->	  

<?php
	if($lang != 'en')
	{
		// check to see if language specific header image exists
		if(file_exists($_SERVER["DOCUMENT_ROOT"] . "/images/$lang/$headerimg"))
		{
			$headerpath = "/images/$lang/$headerimg";
		}
		else
		{
			// otherwise use english
			$headerpath = "/images/en/$headerimg";
		}
	}
	else
	{
		$headerpath = "/images/en/$headerimg";
	}

	if($path == 'home')
	{
?>
	<div class="jumbotron">
	<p class="visible-lg visible-md"><img src="<?php echo $headerpath; ?>" width="699" height="225"></p>
	<p class="visible-sm"><img src="<?php echo $headerpath; ?>" width="466" height="150"></p>
	<p class="visible-xs"><img src="<?php echo $headerpath; ?>" width="350" height="113"></p>
	</div>
<?php
	}
	else
	{
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/logo.png" width="150" height="150"><img src="<?php echo $headerpath; ?>" width="600" height="150"></p>
		<p class="visible-sm"><img src="/images/logo.png" width="100" height="100"><img src="<?php echo $headerpath; ?>" width="400" height="100"></p>
		<p class="visible-xs"><img src="/images/logo.png" width="70" height="70"><img src="<?php echo $headerpath; ?>" width="280" height="70"></p>
	</div>
<?php
	}
?>

<!-- page content -->
