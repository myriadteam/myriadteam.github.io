<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/header.png" width="699" height="225"></p>
		<p class="visible-sm"><img src="/images/header.png" width="466" height="150"></p>
		<p class="visible-xs"><img src="/images/header.png" width="350" height="113"></p>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<h2><?php echo translate("Open To Anyone", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("Myriad can be mined with CPUs, GPUs, &amp; ASICs. Anyone can mine with whatever hardware they have available.", $lang); ?></p>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Secure", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("5 Independent Algorithms - SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - each sharing 20% of the network. Each algorithm's difficulty is adjusted
			independently, ensuring block rewards are competed for equally. Exceptional resistance to 51% attacks due to the combination of 5 independent algorithms.
			Security has been further enhanced by allowing merge-mining of SHA256d and Scrypt, allowing Myriad to benefit from the massive hash power available.", $lang); ?>
		</div>
		<div class="col-lg-4">
			<h2><?php echo translate("Fair Distribution", $lang); ?></h2>
			<p class="text-justify"><?php echo translate("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate.", $lang); ?></p>
		</div>
	</div>
	  
<?php
 	include 'include/footer.php';
?>
