<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="row">
		<div class="col-lg-12">
			<h2><?php echo translate("Getting Started", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("Download a ", $lang); ?><a href="/wallets"><?php echo translate("wallet", $lang); ?></a><?php echo translate(", download a miner of the right type, find a pool and fire away...", $lang); ?></p>
			<h2><?php echo translate("Mining Tutorial Video", $lang); ?></h2>
			<p class="text-justify">
			<?php echo translate("Watch on ", $lang); ?><a href="https://www.youtube.com/watch?v=961LFNZjLlY" target="_blank"><?php echo translate("Youtube", $lang); ?></a>.</p>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h2><?php echo translate("Mining Software", $lang); ?></h2>
			<dl>
				<dt>SHA256d</dt>
				<dd><?php echo translate("Use any SHA256d compatible ASIC", $lang); ?><hr></dd>
				<dt>Scrypt</dt>
				<dd><?php echo translate("Use any Scrypt compatible ASIC", $lang); ?><hr></dd>
				<dt>Myr-Groestl</dt>
				<dd>
					<ul>
						<li><?php echo translate("sgminer for OpenCL GPU mining", $lang); ?>
							<ul>
								<li><a href="https://bitcointalk.org/index.php?topic=632503.0" target="_blank"><?php echo translate("BitcoinTalk Thread", $lang); ?></a></li>
								<li><a href="https://www.nicehash.com/index.jsp?p=software#amdgpu" target="_blank"><?php echo translate("Windows Binaries", $lang); ?></a></li>
								<li><a href="https://github.com/sgminer-dev/sgminer" target="_blank"><?php echo translate("GitHub Source", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>sgminer --algorithm myriadcoin-groestl --no-extranonce -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li><?php echo translate("ccminer for CUDA GPU mining", $lang); ?>
							<ul>
								<li><a href="https://bitcointalk.org/?topic=770064" target="_blank"><?php echo translate("BitcoinTalk Thread", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/ccminer/releases/latest" target="_blank"><?php echo translate("Windows Binaries", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/ccminer" target="_blank"><?php echo translate("GitHub Source", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>ccminer -a myr-gr -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li><?php echo translate("cpuminer-multi for CPU mining", $lang); ?>
							<ul>
								<li><a href="https://bitcointalk.org/?topic=841401" target="_blank"><?php echo translate("BitcoinTalk Thread", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank"><?php echo translate("Windows Binaries", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank"><?php echo translate("GitHub Source", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>cpuminer -a myr-gr -o {pool-URL} -O Username:Password</code></div>
						</li>
					</ul>
					<hr>
				</dd>
				<dt>Skein</dt>
				<dd>
					<ul>
						<li><?php echo translate("cgminer for OpenCL GPU mining", $lang); ?>
							<ul>
								<li><a href="https://www.dropbox.com/s/uhbp9r6m8zzqnke/cgminer_skein.zip"><?php echo translate("Windows 32 bit", $lang); ?></a></li>
								<li><a href="https://github.com/reorder/cgminer_skein" target="_blank"><?php echo translate("GitHub Source", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>cgminer --skein -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li><?php echo translate("cpuminer-multi for CPU mining", $lang); ?>
							<ul>
								<li><a href="https://bitcointalk.org/?topic=841401" target="_blank"><?php echo translate("BitcoinTalk Thread", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank"><?php echo translate("Windows Binaries", $lang); ?></a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank"><?php echo translate("GitHub Source", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>cpuminer -a skein -o {pool-URL} -O Username:Password</code></div>
						</li>
					</ul>
					<hr>
				</dd>
				<dt>Yescrypt</dt>
				<dd>
					<ul>
						<li><?php echo translate("CPUMiner Multi optimized", $lang); ?>
							<ul>
								<li><a href="https://bitcointalk.org/index.php?topic=1326803.0" target="_blank"><?php echo translate("BitcoinTalk Thread", $lang); ?></a></li>
							</ul>
							<?php echo translate("Suggested Command Line", $lang); ?>
							<div class="well well-sm"><code>cpuminer -a yescrypt -o {pool-URL} -u username -p password</code></div>
						</li>
						<li><a href="https://www.reddit.com/r/myriadcoin/comments/5160fp/new_version_of_myrminer_gui_for_yescrypt_cpu/" target="_blank"><?php echo translate("Graphical Yescrypt CPU miner for Windows", $lang); ?></a></li>
						<li><a href="https://play.google.com/store/apps/details?id=com.kangaderoo.neoneonminer&hl=en" target="_blank"><?php echo translate("NeoNeonMiner for Android (supports Yescrypt)", $lang); ?></a></li>
					</ul>
				</dd>
			</dl>
		</div>

		<div class="col-lg-6">
			<h2><?php echo translate("Pools", $lang); ?></h2>
			<h3><?php echo translate("P2Pool nodes", $lang); ?></h3>
			<dl>
				<dd>Myr-Groestl</dd>
				<dt>
					<ul>
						<li><a href="http://nz.nutty.one:5545" target="_blank">New Zealand</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Skein</dd>
				<dt>
					<ul>
						<li><a href="http://nz.nutty.one:5589" target="_blank">New Zealand</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Yescrypt</dd>
				<dt>
					<ul>
						<li>TBD</li>
					</ul>
					<hr>
				</dt>
				<dd><?php echo translate("Run Your Own Node", $lang); ?></dd>
				<dt>
					<ul>
						<li><a href="https://github.com/nzsquirrell/p2pool-myriad" target="_blank"><?php echo translate("Grab the P2Pool code &amp; instructions from here", $lang); ?></a></li>
					</ul>
				</dt>
			</dl>
			<hr>
			<h3><?php echo translate("Other pools", $lang); ?></h3>
			<hr>
			<dl>
				<dd>SHA256d</dd>
				<dt>
					<ul>
						<li><a href="http://myrsha256.miningfield.com/" target="_blank">Miningfield</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Myr-Groestl</dd>
				<dt>
					<ul>
						<li><a href="http://www.miners-pool.eu/" target="_blank">Miners-pool eu</a></li>
						<li><a href="https://myriadcoin-groestl.miningpoolhub.com/" target="_blank">Mining Pool Hub</a></li>
						<li><a href="https://myrgrs.suprnova.cc/" target="_blank">Suprnova</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Yescrypt</dd>
				<dt>
					<ul>
						<li><a href="http://www.miners-pool.eu/" target="_blank">Miners-pool eu</a></li>
						<li><a href="http://myriadcoin.tk" target="_blank">Erkan Yilmaz's Pool with Unitus merged-mining (beta)</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Skein</dd>
				<dt>
					<ul>
						<li><a href="https://myriadcoin-skein.miningpoolhub.com/" target="_blank">Mining Pool Hub</a></li>
					</ul>
					<hr>
				</dt>
			</dl>
			<h3><?php echo translate("Merge Mining Pools", $lang); ?></h3>
			<dl>
				<dd>SHA256d</dd>
				<dt>
					<ul>
						<li><a href="http://www.zpool.ca/" target="_blank"><?php echo translate("zpool - The miners multipool", $lang); ?></a></li>
						<li><a href="https://www.multipool.us/" target="_blank"><?php echo translate("MultiPool", $lang); ?></a></li>
					</ul>
					<hr>
				</dt>
				<dd>Scrypt</dd>
				<dt>
					<ul>
						<li><a href="http://www.zpool.ca/" target="_blank"><?php echo translate("zpool - The miners multipool", $lang); ?></a></li>
					</ul>
					<hr>
				</dt>
			</dl>
		</div>
	</div>
	
<?php
 	include 'include/footer.php';
?>
