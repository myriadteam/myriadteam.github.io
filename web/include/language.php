<?php

	session_start();
	
	$path = pathinfo($_SERVER['SCRIPT_FILENAME'],PATHINFO_FILENAME);
	
	$debug = '';
	
	if(isset($_GET['lang']))
	{
		$lang = substr(trim($_GET['lang']),0,2);
	}
	else
	{
		$lang = 'en';
	}	
	
	$debug .= "LANG=$lang;";
	
	if(isset($_SESSION['lang']))
	{
		// session exists, not first page load in session.
		$slang = $_SESSION['lang'];
		$debug .= "SESSION=$slang;";
		
		// has a new lang been selected?
		if($slang != $lang)
		{
			// language selection has changed. change session value, save cookie.
			$_SESSION['lang'] = $lang;
			$debug .= "SETSESSION=$lang;";
			setcookie('language',$lang,time()+3600*24*7,'/');
			$debug .= "SETCOOKIE=$lang;";
		}
		else
		{
			// capture cookie for debug.
			$clang = substr(trim($_COOKIE['language']),0,2);
			$debug .= "COOKIE=$clang;";
		}
	}
	else
	{
		$debug .= "SESSION=UNSET;";
		// first page load, look for existing cookie
		if(isset($_COOKIE['language']))
		{
			// cookie exists, load and compare
			$clang = substr(trim($_COOKIE['language']),0,2);
			$debug .= "COOKIE=$clang;";
			if($clang != $lang)
			{
				// cookie says different language to what we are on, save session.
				$_SESSION['lang'] = $clang;
				// now redirect
				$debug .= "REDIRECT:$clang;";
				header("Location: " . $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . '/' . $clang . '/' . $path);
				die();
			}
			else
			{
				// cookie and current lang agree, save session.
				$_SESSION['lang'] = $lang;
				$debug .= "SETSESSION=$lang;";
			}
		}
		else
		{
			// no cookie exists, try to auto-detect
			$debug .= "COOKIE=UNSET;";
			$debug .= "LANG_ACCEPT={" . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "};";
			$langs = array();
			if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
			{
				// break up string into pieces (languages and q factors)
				preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);

				if (count($lang_parse[1]))
				{
					// create a list like "en" => 0.8
					$langs = array_combine($lang_parse[1], $lang_parse[4]);
			
					// set default to 1 for any without q factor
					foreach ($langs as $lang => $val)
					{
						if ($val === '') $langs[$lang] = 1;
					}

					// sort list based on value	
					arsort($langs, SORT_NUMERIC);
				}
			}

			// look through sorted list and use first one that matches our languages

			// default - show english
			$nlang = 'en';
			foreach ($langs as $l => $val)
			{
				if (strpos($l, 'es') === 0)
				{
					// show spanish
					$nlang = 'es';
					break;
				}
				else if (strpos($l, 'zh') === 0)
				{
					// show chinese
					$nlang = 'zh';
					break;
				}
				else if (strpos($l, 'eo') === 0)
				{
					// show esperanto
					$nlang = 'eo';
					break;
				}
				else if (strpos($l, 'en') === 0)
				{
					// show english
					$nlang = 'en';
					break;
				}
				else if (strpos($l, 'el') === 0)
				{
					// show greek
					$nlang = 'el';
					break;
				}	
				else if (strpos($l, 'ru') === 0)
				{
					// show russian
					$nlang = 'ru';
					break;
				}	
				else if (strpos($l, 'tl') === 0)
				{
					// show tagalog
					$nlang = 'tl';
					break;
				}
				else if (strpos($l, 'fr') === 0)
				{
					// show french
					$nlang = 'fr';
					break;
				}
				else if (strpos($l, 'id') === 0)
				{
					// show indonesian
					$nlang = 'id';
					break;
				}
				else if (strpos($l, 'bg') === 0)
				{
					// show bulgarian
					$nlang = 'bg';
					break;
				}
				else if (strpos($l, 'de') === 0)
				{
					// show german
					$nlang = 'de';
					break;
				}
				else if (strpos($l, 'it') === 0)
				{
					// show italian
					$nlang = 'it';
					break;
				}
				else if (strpos($l, 'ar') === 0)
				{
					// show arabic
					$nlang = 'ar';
					break;
				}
				else if (strpos($l, 'pl') === 0)
				{
					// show polish
					$nlang = 'pl';
					break;
				}
				else if (strpos($l, 'pt') === 0)
				{
					// show portuguese
					$nlang = 'pt';
					break;
				}
				else if (strpos($l, 'ko') === 0)
				{
					// show korean
					$nlang = 'ko';
					break;
				}
				else if (strpos($l, 'vn') === 0)
				{
					// show vietnamese
					$nlang = 'vn';
					break;
				}
			}
			$debug .= "DETECTED=$nlang;";
			$_SESSION['lang'] = $nlang;
			$debug .= "SETSESSION=$nlang;";
			setcookie('language',$nlang,time()+3600*24*7,'/');
			$debug .= "SETCOOKIE=$nlang;";
			
			// if detected language is not the current, redirect.
			if($lang != $nlang)
			{
				$debug .= "REDIRECT:$nlang;";
				header("Location: " . $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . '/' . $nlang . '/' . $path);
				die();				
			}
		}
	}
	
	require_once('translations.php');
?>
