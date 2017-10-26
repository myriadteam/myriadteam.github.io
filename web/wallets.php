<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="row">
		<h3 class="text-center"><?php echo translate("Latest version is 0.14.2.1, released October 20th 2017. See ", $lang); ?><a href="https://www.reddit.com/r/myriadcoin/comments/78wjp4/myriadcoin_01421/" target="_blank"><?php echo translate(" announcement &amp; upgrade notes.", $lang); ?></a></h3>
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<h2>Desktop</h2>
			<ul class="list-unstyled">
				<li><img src="/images/windows.png" width="48" height="48"> Windows
					<ul>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/download/v0.14.2.1/myriadcoin-0.14.2.1-win32.zip" target="_blank">32-bit ZIP</a></li>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/download/v0.14.2.1/myriadcoin-0.14.2.1-win32-setup.exe" target="_blank">32-bit Installer</a></li>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/download/v0.14.2.1/myriadcoin-0.14.2.1-win64.zip" target="_blank">64-bit ZIP</a></li>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/download/v0.14.2.1/myriadcoin-0.14.2.1-win64-setup.exe" target="_blank">64-bit Installer</a></li>
					</ul>
				</li>
				<li>&nbsp;</li>
				<li><img src="/images/apple.png" width="48" height="48"> Mac OSX
					<ul>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/download/v0.14.2.1/myriadcoin-0.14.2.1-osx.dmg" target="_blank">OSX DMG</a></li>
					</ul>
				</li>
				<li>&nbsp;</li>
				<li><img src="/images/github.png" width="48" height="48"> Other Builds
					<ul>
						<li><a href="https://github.com/myriadteam/myriadcoin/releases/tag/v0.14.2.1" target="_blank">other builds</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h2>Mobile</h2>
			<ul class="list-unstyled">
				<li><img src="/images/android.png" width="48" height="48"> Android (0.11.2)
					<ul>
						<li><a href="https://play.google.com/store/apps/details?id=hashengineering.myriadcoin.wallet" target="_blank">Google Play-Store</a></li>
					</ul>
			</ul>
		</div>
		<div class="col-md-3">
			<h2>Source</h2>
			<ul class="list-unstyled">
				<li><img src="/images/github.png" width="48" height="48"> GitHub
					<ul>
						<li><a href="https://github.com/myriadteam/myriadcoin/archive/v0.14.2.1.zip" target="_blank">Source Code zip (0.14.2.1)</a></li>
						<li><a href="https://github.com/myriadteam/myriadcoin" target="_blank">Git Repository</a></li>
					</ul>
			</ul>
		</div>
		<div class="col-md-3">
			<h2>Other</h2>
			<ul class="list-unstyled">
				<li><a href="https://cryptap.us/myr/electrum/" target="_blank"><img src="/images/electrum.png" width="48" height="48"> Electrum
					<ul>
						<li><a href="https://github.com/cryptapus/electrum-myr" target="_blank">GitHub</a></li>
						<li><a href="https://cryptap.us/myr/electrum/Electrum_myr-2.7.17.0.tar.gz" target="_blank">Linux</a></li>
						<li><a href="https://cryptap.us/myr/electrum/electrum-myr-2.7.17.0-setup.exe" target="_blank">Windows</a></li>
						<li><a href="https://cryptap.us/myr/electrum/electrum_myr-2.7.17.0-macosx.dmg" target="_blank">Mac OSX</a></li>
					</ul>
				</li>
				<li>&nbsp;</li>
				<li><a href="https://cryptap.us/myr/jswallet" target="_blank">JSWallet</a></li>
				<li>&nbsp;</li>
				<li><a href="https://cryptap.us/myr/brainwallet" target="_blank">Brain Wallet</a></li>
				<li>&nbsp;</li>
				<li><a href="https://cryptap.us/myr/paperwallet.html" target="_blank">Paper Wallet</a></li>
				<li>&nbsp;</li>
				<li><a href="http://hydra-myr.cryptap.us/" target="_blank">Copay (beta)</a></li>
			</ul>
		</div>
	</div>	
	
<?php
 	include 'include/footer.php';
?>
