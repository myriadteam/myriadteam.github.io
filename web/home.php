<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="row">
		<div class="col-lg-4">
			<h2><?php echo translate("Open To Anyone", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs.", $lang); ?></p>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Secure", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU and CPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks.", $lang); ?>
			<p class="text-justify"><?php echo translate("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available.", $lang); ?></p>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Fair Distribution", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate.", $lang); ?></p>
		</div>
	</div>
	  
<?php
 	include 'include/footer.php';
?>
