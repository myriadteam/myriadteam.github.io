<?php
	require_once('include/header.php');
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/logo.png" width="150" height="150"><img src="/images/mining.png" width="600" height="150"></p>
		<p class="visible-sm"><img src="/images/logo.png" width="100" height="100"><img src="/images/mining.png" width="400" height="100"></p>
		<p class="visible-xs"><img src="/images/logo.png" width="70" height="70"><img src="/images/mining.png" width="280" height="70"></p>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<h2>Getting Started</h2>
			<p class="text-justify">Download a <a href="/wallets">wallet</a>, download a miner of the right type, find a pool and fire away...</p>
			<h2>Mining Tutorial Video</h2>
			<p class="text-justify">
			Watch on <a href="https://www.youtube.com/watch?v=961LFNZjLlY" target="_blank">Youtube</a>.</p>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h2>Mining Software</h2>
			<dl>
				<dt>SHA256d</dt>
				<dd>Use any SHA256d compatible ASIC<hr></dd>
				<dt>Scrypt</dt>
				<dd>Use any Scrypt compatible ASIC<hr></dd>
				<dt>Myr-Groestl</dt>
				<dd>
					<ul>
						<li>sgminer for OpenCL GPU mining
							<ul>
								<li><a href="https://bitcointalk.org/index.php?topic=632503.0" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://www.nicehash.com/index.jsp?p=software#amdgpu" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/sgminer-dev/sgminer" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>sgminer --algorithm myriadcoin-groestl --no-extranonce -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li>ccminer for CUDA GPU mining
							<ul>
								<li><a href="https://bitcointalk.org/?topic=770064" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://github.com/tpruvot/ccminer/releases/latest" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/tpruvot/ccminer" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>ccminer -a myr-gr -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li>cpuminer-multi for CPU mining
							<ul>
								<li><a href="https://bitcointalk.org/?topic=841401" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>cpuminer -a myr-gr -o {pool-URL} -O Username:Password</code></div>
						</li>						</ul>
					<hr>
				</dd>
				<dt>Skein</dt>
				<dd>
					<ul>
						<li>cgminer for OpenCL GPU mining
							<ul>
								<li><a href="https://www.dropbox.com/s/uhbp9r6m8zzqnke/cgminer_skein.zip">Windows 32 bit</a></li>
								<li><a href="https://github.com/reorder/cgminer_skein" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>cgminer --skein -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li>cpuminer-multi for CPU mining
							<ul>
								<li><a href="https://bitcointalk.org/?topic=841401" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>cpuminer -a skein -o {pool-URL} -O Username:Password</code></div>
						</li>
					</ul>
					<hr>
				</dd>
				<dt>Qubit</dt>
				<dd>
					<ul>
						<li>sgminer for OpenCL GPU mining
							<ul>
								<li><a href="https://bitcointalk.org/index.php?topic=632503.0" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://www.nicehash.com/index.jsp?p=software#amdgpu" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/sgminer-dev/sgminer" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>sgminer --algorithm qubitcoin --no-extranonce -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li>ccminer for CUDA GPU mining
							<ul>
								<li><a href="https://bitcointalk.org/?topic=770064" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://github.com/tpruvot/ccminer/releases/latest" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/tpruvot/ccminer" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>ccminer -a qubit -o {pool-URL} -O Username:Password</code></div>
						</li>
						<li>cpuminer-multi for CPU mining
							<ul>
								<li><a href="https://bitcointalk.org/?topic=841401" target="_blank">BitcoinTalk Thread</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank">Windows Binaries</a></li>
								<li><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank">GitHub Source</a></li>
							</ul>
							Suggested Command Line
							<div class="well well-sm"><code>cpuminer -a qubit -o {pool-URL} -O Username:Password</code></div>
						</li>
					</ul>
				</dd>
			</dl>
		</div>

		<div class="col-lg-6">
			<h2>Pools</h2>
			<h3>P2Pool nodes</h3>
			<dl>
				<dd>SHA256d</dd>
				<dt>
					<ul>
						<li><a href="http://birdonwheels5.no-ip.org:5578/static/" target="_blank">Bird's pool</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Scrypt</dd>
				<dt>
					<ul>
						<li><a href="http://p2pool.e-pool.net:8878/static/" target="_blank">E-pool</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Myr-Groestl</dd>
				<dt>
					<ul>
						<li><a href="http://birdonwheels5.no-ip.org:5578" target="_blank">East Coast U.S.A.</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Skein</dd>
				<dt>
					<ul>
						<li><a href="http://mine4free.noip.me:5589" target="_blank">UK</a></li>
						<li><a href="http://birdonwheels5.no-ip.org:5589" target="_blank">East Coast U.S.A.</a></li>
						<li><a href="http://tanukifu.ddns.net:5589" target="_blank">U.S.A.</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Qubit</dd>
				<dt>
					<ul>
						<li><a href="http://birdonwheels5.no-ip.org:5567" target="_blank">East Coast U.S.A.</a></li>
						<li><a href="http://tanukifu.ddns.net:5567" target="_blank">U.S.A.</a></li>
					</ul>
				</dt>
			</dl>
			<hr>
			<h3>Other pools</h3>
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
					</ul>
					<hr>
				</dt>
				<dd>Qubit</dd>
				<dt>
					<ul>
						<li><a href="http://www.miners-pool.eu/" target="_blank">Miners-pool eu</a></li>
						<li><a href="https://myriadcoin-qubit.miningpoolhub.com/" target="_blank">Mining Pool Hub</a></li>
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
			<h3>Merge Mining Pools</h3>
			<dl>
				<dd>SHA256d</dd>
				<dt>
					<ul>
						<li><a href="http://www.zpool.ca/" target="_blank">zpool - The miners multipool</a></li>
						<li><a href="https://www.multipool.us/" target="_blank">MultiPool</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Scrypt</dd>
				<dt>
					<ul>
						<li><a href="http://www.zpool.ca/" target="_blank">zpool - The miners multipool</a></li>
					</ul>
					<hr>
				</dt>
				<dd>Qubit</dd>
				<dt>
					<ul>
						<li><a href="http://www.zpool.ca/" target="_blank">zpool - The miners multipool</a></li>
					</ul>
					<hr>
				</dt>
			</dl>
		</div>
	</div>

<?php
 	include 'include/footer.php';
?>
