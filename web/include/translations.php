<?php

function translate($text, $lang)
{
	
	if($lang == 'es')
	{
		switch ($text)
		{
			// homepage
			case "Open To Anyone":
				return "Abierto a todos";
				
			case "Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs.":
				return "Myriad puede ser minado con CPU, GPU, &amp; y ASIC. Cualquiera puede minar con el hardware que este disponible.";
				
			case "Secure":
				return "Seguro";
				
			case "A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein or Qubit —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks.":
				return "5 algoritmos independientes, SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - cada una soporta el 20% de la red,
                                    cada algoritmo se ajusta de manera independiente, que hace que las recompensas por bloque sean igualitarias para
                                    todos, una resistencia excepcional de un 51% debido a la comunicacion de 5 algoritmos independientes.";
                                    
                        case "Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available.":
                                return "La seguridad ha aumentado gracias al permitir la mineria fusionada con Scrypt y SHA256d, permitiendo a Myriad
                                    beneficiarse del gran poder de hash.";
									
			case "Fair Distribution":
				return "Distribucion justa";
				
			case "No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate.":
				return "No existe el preminado y tampoco hay fortunas ocultas entre los desarrolladores. Todo el mundo tiene la misma oportunidad de obtener Myriad.";
			
			// technology
			
			case "Multi-Algorithm":
				return "Algoritmo multiple";
			
			case "5 Algorithms, catering for ASIC, GPU and CPU mining:":
				return "5 algoritmos, restauracion de la mineria ASIC, GPU y CPU:";
			
			case "Two rounds of the SHA256 hashing algorithm, first used by the pioneer cryptocurrency Bitcoin.":
				return "Dos rondas del algoritmo de hash SHA256, utilizados por primera vez por el pionero de las criptomonedas Bitcoin.";
			
			case "Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin.":
				return "Diseñado para ser un unico algoritmo con contraseña para CPU, ahora extraido con ASIC en muchas criptomonedas alternativas, empezando por Litecoin.";
			
			case "A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition.":
				return "Una variante especifica para Myriad basada en el algoritmo Groestl, es uno de los 5 finalistas de la NIST SHA-3 hash competition.";
			
			case "Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin.":
				return "Otro de los 5 finalistas de la NIST SHA-3 hash competition, utilizado por primera vez en Skeincoin.";
			
			case "Originally a CPU only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO.":
				return "Originalmente un algoritmo solo para CPU. Qubit combina algoritmos de 5 competidores de la NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD y ECHO.";
			
			case "Merge Mining":
				return "Mineria fusionada";
			
			case "Since block 4002000, merge mining has been allowed on the Sha256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain.":
				return "Desde el bloque 4002000, la mineria fusionada ha sido permitida en los algoritmos Sha256d y Scrypt. Esto ha hecho que Myriad tenga un avance para obtener un gran hashrate actualmente en uso
			por las monedas que usan esos algoritmos, aumentando la seguridad de la cadena de bloques de Myriad.";
			
			case "Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin.":
				return "La mineria fusionada, o AuxPow, permite que el trabajo que se haga para una moneda pariente (como Bitcoin o Litecoin) sirva para encontrar bloques en la cadena de bloques de Myriad, sin carga extra
			o impacto en el rendimiento de las otras monedas.";
			
			case "Distribution":
				return "Distribucion";
			
			case "Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The ":
				return "Myriad fue lanzado el dia 23 de Febrero de 2014 a las 18:30 UTC. El ";
			
			case "first mined block":
				return "primer bloque minado";
			
			case " came 4 minutes later, thus establishing that there was no premine.":
				return " fue a los 4 minutos despues del lanzamiento, estableciendo que no hubo preminado en la moneda.";
			
			case "The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR.":
				return "La recompensa inicial fue de 1000 MYR, esta se reduce a la mitad cada 967680 bloques (aproximadamente 48 semanas). Existe un suministro total de 2 billones de MYR.";
			
			case "Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time,
				Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead 
				to greater consistency on the network, without affecting fairness of distribution.":
				return "Para los primeros 1401000, el tiempo de objetivo por bloque fue de 30 segundos, o 150 segundos por algoritmo. Esto ahora fue cambiado a 60 segundos por bloque, o 300 segundos por algoritmo.";
			
			case "Myriad's History":
				return "Historia de Myriad";
			
			case "Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256 and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256 and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins.":
				return "Myriad fue lanzado en Febrero de 2014 por 8bitcoder, basado en Zetacoin. fue la primera criptomoneda en usar 5 algoritmos de prueba de trabajo
			en un esfuerzo para aumentar la seguridad asi como ampliar la base personas que podian minarlo - SHA256 y Scrypt para mineros ASIC,
			Skein y Myr-Groestl para mineros GPU, y Qubit para mineros GPU y CPU. Huntercoin, lanzado en 2013, fue la primera
			moneda en usar multiples algoritmos PoW (SHA256 y Scrypt), pero no esta enfocado en la mineria, solo basado un juego en la cadena de bloques que ha producido la gran mayoria de las criptomonedas alternativas that produced the large majority of new coins.";
			
			case "Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. 
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo.":
				return "Myriad ha dado varios projectos derivados, como por ejemplo Saffroncoin, y tambien a proyectos con 5 algoritmos PoW. 
			Digitalcoin and Digibyte son algunos de los ejemplos de tener 3 o 5 algoritmos PoW respectivamente, Unitus tambien tiene 5 algoritmos PoW que comparte algunos algoritmos con Myriad
			y permite a los usuarios tener mineria fusionada con estos.";
			
			case "In August 2015 Myriad hard-forked to allow merge-mining on its SHA256 and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years.":
				return "En Agosto de 2015 Myriad ha tenido una gran actualizacion que permite la mineria fusionada con los algoritmos SHA256 y Scrypt en un esfuerzo por aumentar la seguridad y tener velocidad de hashrate estable en esos dos algoritmos.
			En este momento el tiempo de bloque de destino para cada algoritmo también se cambió a cinco minutos (anteriormente 2.5 minutos), para lograr un tiempo general de selección de bloques de 1 min (anteriormente 30 seconds);
			este cambio estirara la curva de emision de monedas en un factor de 2x, a aproximadamente 20 años.";
			
			
			// wallets
			case "Latest version is 0.9.2.17, released November 7th 2015. See ":
				return "La ultima version es la 0.9.2.17, lanzada el 7 de Noviembre de 2015. Vea ";
				
			case " announcement &amp; upgrade notes.":
				return " el anuncio y las notas actualizadas.";
				
			// mining
			
			case "Getting Started":
				return "Empezando";
			case "Download a ":
				return "Descargue una ";
			case "wallet":
				return "billetera";
			case ", download a miner of the right type, find a pool and fire away...":
				return ", descargue un minero adecuado para el algoritmo, encuentre un pool de mineria y disfrute...";
			case "Mining Tutorial Video":
				return "Video tutorial de mineria";
			case "Watch on ":
				return "Vea en ";
			case "Mining Software":
				return "Programas de mineria";
			case "Use any SHA256d compatible ASIC":
				return "Use cualquier minero SHA256d compatible con ASIC";
			case "Use any Scrypt compatible ASIC":
				return "Use cualquier minero Scrypt compatible con ASIC";
			case "sgminer for OpenCL GPU mining":
				return "sgminer para mineria GPU OpenCL";
			case "BitcoinTalk Thread":
				return "Discusion de BitcoinTalk (Ingles)";
			case "Windows Binaries":
				return "Binarios de Windows";
			case "GitHub Source":
				return "Codigo fuente de Github";
			case "Suggested Command Line":
				return "Linea de comandos sugerida";
			case "Pools":
				return "Piscinas de mineria";
			case "P2Pool nodes":
				return "P2Pool nodos";
			case "Run Your Own Node":
				return "Corre tu propio nodo";
			case "Merge Mining Pools":
				return "Piscina minera con fusion de mineria";
			case "zpool - The miners multipool":
				return "zpool - Piscina multiple para mineros";
			case "MultiPool":
				return "Piscina multiple";
				
			
			// services
			case "Information &amp; Resources":
				return "Informacion y recursos";
				
			case "Exchanges":
				return "Paginas de intercambio";
				
			case "Other":
				return "Otros";
				
			case "Faucet":
				return "Grifos";
				
			case "Testnet Information":
				return "Informacion de testnet";
				
			default:
				return $text;
		}
	}
	
	else if ($lang == 'de')
	{
		switch ($text)
		{
			// homepage
			case "Open To Anyone":
				return "Offen für alle";
			
			case "Secure":
				return "Sichern";
				
			case "Fair Distribution":
				return "Gerechte Verteilung";

			// technology
			
			// wallets
			
			// mining
			
			// services

			
			default:
				return $text;
		}
	}
	
	else
	{
		return $text;
	}
}



?>
