<?php
	require_once('include/header.php');
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/logo.png" width="150" height="150"><img src="/images/technology.png" width="600" height="150"></p>
		<p class="visible-sm"><img src="/images/logo.png" width="100" height="100"><img src="/images/technology.png" width="400" height="100"></p>
		<p class="visible-xs"><img src="/images/logo.png" width="70" height="70"><img src="/images/technology.png" width="280" height="70"></p>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<h2>Multi-Algorithm</h2>
			<p>5 Algorithms, catering for ASIC, GPU and CPU mining:
			<dl>
				<dt>SHA256d</dt>
				<dd class="text-justify">Two rounds of the SHA256 hashing algorithm, first used by the pioneer cryptocurrency Bitcoin.</dd>
				<dt>Scrypt</dt>
				<dd class="text-justify">Designed to be a CPU only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin.</dd>
				<dt>Myr-Groestl</dt>
				<dd class="text-justify">A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition.</dd>
				<dt>Skein</dt>
				<dd class="text-justify">Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin.</dd>
				<dt>Qubit</dt>
				<dd class="text-justify">Originally a CPU only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO.</dd>
			</ul>
		</div>
		<div class="col-lg-4">
			<h2>Merge Mining</h2>
			<p class="text-justify">Since block 4002000, merge mining has been allowed on the Sha256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain.</p>
			<p class="text-justify">Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin.</p>
		</div>
		<div class="col-lg-4">
			<h2>Distribution</h2>
			<p class="text-justify">Myriad was released to the wild on February 23, 2014 at 18:30 UTC. 
			The <a href="http://insight-myr.cryptap.us/block/cb41589c918fba1beccca8bc6b34b2b928b4f9888595d7664afd6ec60a576291" target="_blank">first mined block</a> came 4 minutes later, thus establishing that there was no premine.</p>
			<p class="text-justify">The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR.</p>
			<p class="text-justify">For the first 1,401,000 blocks, the target blocktime was 30 seconds, or 150 seconds per algorithm. This has now been increased to 60 seconds, or 300 seconds per algorithm.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-left">Myriad's History</h3>
			<p class="text-justify">Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256 and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256 and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins.</p>
			<p class="text-justify">Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. 
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos.</p>
			<p class="text-justify">In August 2015 Myriad hard-forked to allow merge-mining on its SHA256 and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years.</p>
		</div>
	</div>

	
<?php
 	include 'include/footer.php';
?>
