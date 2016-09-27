<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="row">
		<div class="col-lg-4">
			<h2><?php echo translate("Multi-Algorithm", $lang); ?></h2>
			<p><?php echo translate("5 Algorithms, catering for ASIC, GPU and CPU mining:", $lang); ?>
			<dl>
				<dt>SHA256d</dt>
				<dd class="text-justify"><?php echo translate("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin.", $lang); ?></dd>
				<dt>Scrypt</dt>
				<dd class="text-justify"><?php echo translate("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin.", $lang); ?></dd>
				<dt>Myr-Groestl</dt>
				<dd class="text-justify"><?php echo translate("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition.", $lang); ?></dd>
				<dt>Skein</dt>
				<dd class="text-justify"><?php echo translate("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin.", $lang); ?></dd>
				<dt>Yescrypt</dt>
				<dd class="text-justify"><?php echo translate("CPU friendly, currently GPU resistant. Requires rapid random reads, typically from CPU L1 data cache.", $lang); ?></dd>
				<dt>Qubit (Retired Algorithm, no longer accepting blocks)</dt>
				<dd class="text-justify"><?php echo translate("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO.", $lang); ?></dd>
			</ul>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Merge Mining", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin.", $lang); ?></p>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Distribution", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The ", $lang); ?><a href="http://insight-myr.cryptap.us/block/cb41589c918fba1beccca8bc6b34b2b928b4f9888595d7664afd6ec60a576291" target="_blank"><?php echo translate("first mined block", $lang); ?></a><?php echo translate(" came 4 minutes later, thus establishing that there was no premine.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. 
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution.", $lang); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-left"><?php echo translate("Myriad's History", $lang); ?></h3>
			<p class="text-justify"><?php echo translate("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Qubit has since been replaced with Yescrypt. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. 
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years.", $lang); ?></p>
			<p class="text-justify"><?php echo translate("In August 2016, at block 1764000, Myriad used mining consensus to replace the Qubit algorithm with the Yescrypt algorithm to preserve mining decentralization. Myriad became the first cryptocurrency 
			to use mining consensus to change a mining algorithm.", $lang); ?></p>
		</div>
	</div>
	
<?php
 	include 'include/footer.php';
?>
