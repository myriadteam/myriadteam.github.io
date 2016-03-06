<?php
	require_once('include/language.php');
	require_once('include/header.php');
?>
	<div class="jumbotron">
		<p class="visible-lg visible-md"><img src="/images/header.png" width="699" height="225"></p>
		<p class="visible-sm"><img src="/images/header.png" width="466" height="150"></p>
		<p class="visible-xs"><img src="/images/header.png" width="350" height="113"></p>
	</div>


<?php
	if($lang == 'es')
	{
?>

	<div class="row">
		<div class="col-lg-4">
			<h2>Abierto a todos</h2>
			<p class="text-justify">Myriad puede ser minado con CPU, GPU, &amp; y ASIC. Cualquiera puede minar con el hardware que este disponible.</p>
		</div>
		<div class="col-lg-4">
			<h2>Seguro</h2>
			<p class="text-justify">5 algoritmos independientes, SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - cada una soporta el 20% de la red,
                                    cada algoritmo se ajusta de manera independiente, que hace que las recompensas por bloque sean igualitarias para
                                    todos, una resistencia excepcional de un 51% debido a la comunicacion de 5 algoritmos independientes.
                                    
                                    La seguridad ha aumentado gracias al permitir la mineria fusionada con Scrypt y SHA256d, permitiendo a Myriad
                                    beneficiarse del gran poder de hash
		</div>
		<div class="col-lg-4">
			<h2>Distribucion justa</h2>
			<p class="text-justify">No existe el preminado y tampoco hay fortunas ocultas entre los desarrolladores. Todo el mundo tiene la misma oportunidad de obtener Myriad.</p>
		</div>
	</div>
	
<?php
	}
	elseif($lang=='de')
	{
?>

	<div class="row">
		<div class="col-lg-4">
			<h2>Offen für alle</h2>
			<p class="text-justify">Myriad can be mined with CPUs, GPUs, &amp; ASICs. Anyone can mine with whatever hardware they have available.</p>
		</div>
		<div class="col-lg-4">
			<h2>Sichern</h2>
			<p class="text-justify">5 Independent Algorithms - SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - each sharing 20% of the network. Each algorithm's difficulty is adjusted
			independently, ensuring block rewards are competed for equally. Exceptional resistance to 51% attacks due to the combination of 5 independent algorithms.
			Security has been further enhanced by allowing merge-mining of SHA256d and Scrypt, allowing Myriad to benefit from the massive hash power available.
		</div>
		<div class="col-lg-4">
			<h2>Gerechte Verteilung</h2>
			<p class="text-justify">No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate.</p>
		</div>
	</div>
	
<?php
	}
	else
	{
?>

	<div class="row">
		<div class="col-lg-4">
			<h2>Open To Anyone</h2>
			<p class="text-justify">Myriad can be mined with CPUs, GPUs, &amp; ASICs. Anyone can mine with whatever hardware they have available.</p>
		</div>
		<div class="col-lg-4">
			<h2>Secure</h2>
			<p class="text-justify">5 Independent Algorithms - SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - each sharing 20% of the network. Each algorithm's difficulty is adjusted
			independently, ensuring block rewards are competed for equally. Exceptional resistance to 51% attacks due to the combination of 5 independent algorithms.
			Security has been further enhanced by allowing merge-mining of SHA256d and Scrypt, allowing Myriad to benefit from the massive hash power available.
		</div>
		<div class="col-lg-4">
			<h2>Fair Distribution</h2>
			<p class="text-justify">No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate.</p>
		</div>
	</div>
	  
<?php
	}
 	include 'include/footer.php';
?>
