<?php

function clean($text)
{
	// function to remove all whitespace for string comparison.
	$text = str_replace(" ","",$text);
	$text = str_replace("\t","",$text);
	$text = str_replace("\r","",$text);
	$text = str_replace("\n","",$text);
	return $text;
}

function translate($text, $lang)
{

	if($lang == 'es')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Abierto a todos";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad puede ser minado con CPU, GPU, &amp; y ASIC. Cualquiera puede minar con el hardware que este disponible.";

			case clean("Secure"):
				return "Seguro";

			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "5 algoritmos independientes, SHA256d, Scrypt, Myr-Groestl, Skein &amp; Yescrypt - cada una soporta el 20% de la red,
						cada algoritmo se ajusta de manera independiente, que hace que las recompensas por bloque sean igualitarias para
						todos, una resistencia excepcional de un 51% debido a la comunicacion de 5 algoritmos independientes.";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "La seguridad ha aumentado gracias al permitir la mineria fusionada con Scrypt y SHA256d, permitiendo a Myriad
						beneficiarse del gran poder de hash.";

			case clean("Fair Distribution"):
				return "Distribucion justa";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "No existe el preminado y tampoco hay fortunas ocultas entre los desarrolladores. Todo el mundo tiene la misma oportunidad de obtener Myriad.";

			// technology

			case clean("Multi-Algorithm"):
				return "Algoritmo multiple";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algoritmos, restauracion de la mineria ASIC, GPU y CPU:";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dos rondas del algoritmo de hash SHA256d, utilizados por primera vez por el pionero de las criptomonedas Bitcoin.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "DiseÃ±ado para ser un unico algoritmo con contraseÃ±a para CPU, ahora extraido con ASIC en muchas criptomonedas alternativas, empezando por Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Una variante especifica para Myriad basada en el algoritmo Groestl, es uno de los 5 finalistas de la NIST SHA-3 hash competition.";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Otro de los 5 finalistas de la NIST SHA-3 hash competition, utilizado por primera vez en Skeincoin.";

			case clean("CPU friendly, currently GPU resistant. Requires rapid random reads, typically from CPU L1 data cache."):
				return "Gentil con tu CPU, GPU actualmente resistentes. Requiere una lectura aleatoria de alta velocidad, típicamente de la caché de datos de la CPU L1.";
			
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originalmente un algoritmo solo para CPU. Qubit combina algoritmos de 5 competidores de la NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD y ECHO.";

			case clean("Merge Mining"):
				return "Mineria fusionada";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
				return "Desde el bloque 4002000, la mineria fusionada ha sido permitida en los algoritmos SHA256d y Scrypt. Esto ha hecho que Myriad tenga un avance para obtener un gran hashrate actualmente en uso por las monedas que usan esos algoritmos, aumentando la seguridad de la cadena de bloques de Myriad.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "La mineria fusionada, o AuxPow, permite que el trabajo que se haga para una moneda pariente (como Bitcoin o Litecoin) sirva para encontrar bloques en la cadena de bloques de Myriad, sin carga extra o impacto en el rendimiento de las otras monedas.";

			case clean("Distribution"):
				return "Distribucion";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad fue lanzado el dia 23 de Febrero de 2014 a las 18:30 UTC. El ";

			case clean("first mined block"):
				return "primer bloque minado";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " fue a los 4 minutos despues del lanzamiento, estableciendo que no hubo preminado en la moneda.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La recompensa inicial fue de 1000 MYR, esta se reduce a la mitad cada 967680 bloques (aproximadamente 48 semanas). Existe un suministro total de 2 billones de MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Inicialmente, el objetivo era 30 segundos por bloque, o 150 segundos por algoritmo. El 12 de Julio de 2015, la comunidad decidiÃ³ aumentar el tiempo del bloque a 60 segundos,
				o 300 segundos por algoritmo, que se verÃ­a reflejado en el bloque 1,401,001. En ese momento, Myriad sufriÃ³ de baja tasa de hash y de mayor dificultad sobre Scrypt y SHA256d, provocando 
				el actual tiempo promedio por bloque por encima 50 segundos. AdemÃ¡s para pernitir PoW adicional sobre Scrypt y SHA256d, el aumento en el tiempo objetivo por bloque nos llevÃ³ a una mejor coherencia en la red, sin afectar la equidad de la distribuciÃ³n.";

			case clean("Myriad's History"):
				return "Historia de Myriad";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad fue lanzado en Febrero de 2014 por 8bitcoder, basado en Zetacoin. fue la primera criptomoneda en usar 5 algoritmos de prueba de trabajo en un esfuerzo para aumentar la seguridad asi como ampliar la base personas que podian minarlo - SHA256d y Scrypt para mineros ASIC, Skein y Myr-Groestl para mineros GPU, y Qubit para mineros GPU y CPU. Huntercoin, lanzado en 2013, fue la primera moneda en usar multiples algoritmos PoW (SHA256d y Scrypt), pero no esta enfocado en la mineria, solo basado un juego en la cadena de bloques que ha producido la gran mayoria de las criptomonedas alternativas that produced the large majority of new coins.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ha dado varios projectos derivados, como por ejemplo Saffroncoin, y tambien a proyectos con 5 algoritmos PoW.
			Digitalcoin and Digibyte son algunos de los ejemplos de tener 3 o 5 algoritmos PoW respectivamente, Unitus tambien tiene 5 algoritmos PoW que comparte algunos algoritmos con Myriad
			y permite a los usuarios tener mineria fusionada con estos. Auroracoin y Verge tambiÃ©n han anunciado planes de hacer fork a multi-algoritmo.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "En Agosto de 2015 Myriad ha tenido una gran actualizacion que permite la mineria fusionada con los algoritmos SHA256d y Scrypt en un esfuerzo por aumentar la seguridad y tener velocidad de hashrate estable en esos dos algoritmos.
			En este momento el tiempo de bloque de destino para cada algoritmo tambiÃ©n se cambiÃ³ a cinco minutos (anteriormente 2.5 minutos), para lograr un tiempo general de selecciÃ³n de bloques de 1 min (anteriormente 30 seconds);
			este cambio estirara la curva de emision de monedas en un factor de 2x, a aproximadamente 20 aÃ±os.";
			
			case clean("In August 2016, at block 1764000, Myriad used mining consensus to replace the Qubit algorithm with the Yescrypt algorithm to preserve mining decentralization. Myriad became the first cryptocurrency to use mining consensus to change a mining algorithm."):
				return "En Agosto de 2016, en el bloque 1.764.000, Myriad utiliza la minería consenso para reemplazar el algoritmo Qubit con el algoritmo Yescrypt para preservar la descentralización de la minería. Myriad convirtió en el primer cripto-moneda para utilizar la minería consenso para cambiar un algoritmo de minería.";

			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La ultima version es la 0.11.3.1, lanzada el 7 de Abril de 2016. Vea ";

			case clean(" announcement &amp; upgrade notes."):
				return " el anuncio y las notas actualizadas.";

			// mining

			case clean("Getting Started"):
				return "Empezando";
			case clean("Download a "):
				return "Descargue una ";
			case clean("wallet"):
				return "billetera";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", descargue un minero adecuado para el algoritmo, encuentre un pool de mineria y disfrute...";
			case clean("Mining Tutorial Video"):
				return "Video tutorial de mineria";
			case clean("Watch on "):
				return "Vea en ";
			case clean("Mining Software"):
				return "Programas de mineria";
			case clean("Use any SHA256d compatible ASIC"):
				return "Use cualquier minero SHA256d compatible con ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Use cualquier minero Scrypt compatible con ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer para mineria GPU OpenCL";
			case clean("BitcoinTalk Thread"):
				return "Discusion de BitcoinTalk (Ingles)";
			case clean("Windows Binaries"):
				return "Binarios de Windows";
			case clean("GitHub Source"):
				return "Codigo fuente de Github";
			case clean("Suggested Command Line"):
				return "Linea de comandos sugerida";
			case clean("Pools"):
				return "Piscinas de mineria";
			case clean("P2Pool nodes"):
				return "P2Pool nodos";
			case clean("Run Your Own Node"):
				return "Corre tu propio nodo";
			case clean("Merge Mining Pools"):
				return "Piscina minera con fusion de mineria";
			case clean("zpool - The miners multipool"):
				return "zpool - Piscina multiple para mineros";
			case clean("MultiPool"):
				return "Piscina multiple";


			// services
			case clean("Information &amp; Resources"):
				return "Informacion y recursos";

			case clean("Exchanges"):
				return "Paginas de intercambio";

			case clean("Other"):
				return "Otros";

			case clean("Faucet"):
				return "Grifos";

			case clean("Testnet Information"):
				return "Informacion de testnet";

			default:
				return $text;
		}
	}

		else if($lang == 'eo')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Malferma al Ä‰iuj";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (miriad) estas mult-algoritma - la unua Ä‰ifrovaluto kiu uzas 5 samtempajn haketfunkciojn. Malkiel Bitmono, kiun oni povas profitdone mini nur per
				ASICoj por SHA256d, Myriad estas malferma al ASICoj por SHA256d k Scrypt, ankaÅ­ al grafiksprocesoroj k centraj procesoroj.";

			case clean("Secure"):
				return "Sekura";

			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Oni povas elekti el la 5 algoritmoj por mini â€” SHA256d, Scrypt, Myr-Groestl, Skein aÅ­ Yescrypt â€”
				Ä‰iu havas celtempon de 5 minutoj por unu bloko. Entute, unu bloko troviÄas proksimume Ä‰iun minuton. La malfacileco de Ä‰iu algoritmo dependas nur de ties propra haketrapideco.
				";

                        case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
                                return "Kunligita minado estis saltita je SHA256d &amp; Scrypt. Nun Myriad povas gajni de la grandega haketpotenco disponebla.";

			case clean("Fair Distribution"):
				return "Egaleca disdonado";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Ekzistas nek moneroj minitaj antaÅ­ ol la lanÄ‰o, nek kaÅitaj sumoj kiujn posedas komplotuloj. Äˆiuj havas egalan eblecon akiri Miriadojn je la kurzo de la publika merkato ";

			// technology

			case clean("Multi-Algorithm"):
				return "Multaj algoritmoj";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algoritmoj, kiuj ebligas efikan minadon per ASICoj, grafiksprocesoroj, k centraj procesoroj:";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Du rondoj de la SHA256d haketa algoritmo, unue uzata en la pionira Ä‰ifrovaluto, Bitmono.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dizajnita esti pasvorta haketa algoritmo nur por centraj procesoroj, nun oni minas Äin per ASICoj por multaj Ä‰ifrovalutoj. Litecoin estis la unua.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Speciale kreita por Myriad estas variaÄµo de la haketa algoritmo GrÃ¸stl, unu el la 5 finalistoj en la haketa konkurso NIST SHA-3.";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Alia finalisto de la haketa konkurso NIST SHA-3, unue uzata de Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originale algoritmo nur por CPU, Qubit estas kombinaÄµo de 5 konkursantoj de la haketa konkurso NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD k ECHO.";

			case clean("Merge Mining"):
				return "Kunligita Minado";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Ekde la 4002000a bloko, kunligita minado estis ebligita je la algoritmoj SHA256d k Scrypt. Nun Myriad povas utiligi la enorman haketpotencon trovebla
			Ä‰e valutoj kiuj uzas tiujn algoritmojn. Tio sekurigas la blokÄ‰enon de Myriad eÄ‰ plu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Kunligita Minado, alinome AuxPow, permesas al oni fari laboron por trovi blokojn de gepatra valuto (ekz, Bitmono aÅ­ Litecoin), kaj dume, reuzi tiun laboron por trovi Miriadajn blokojn, senkoste.
			Tio neniel havas malbonan efikon por la gepatra valuto.";

			case clean("Distribution"):
				return "Disdonado";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad naskiÄis en publika vido la 23an de Februaro, 18:30 UTC. La ";

			case clean("first mined block"):
				return "unua minita bloko";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " troviÄis 4 minutoj post la lanÄ‰o, kiu pruvas ke oni ne minis antaÅ­ ol la lanÄ‰o.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La premio por trovi blokojn estis dekomence 1,000MYR, kaj planita estis duoniÄo post Ä‰iuj 967,680 blokoj (proksimume 48 semajnoj). Enfine estos proksimume 2 bilionoj da MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time,
				Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead
				to greater consistency on the network, without affecting fairness of distribution."):
				return "Dekomence, la celtempo estis 30 sekundoj po bloko, 150 sekundoj po algoritmo. Je la 12a de Julio 2015, la komunumo decidis pliigi la celtempon al 60 sekundoj, do 300 sekundoj po algoritmo. Tio efektiviÄis je bloko 1,401,001. Tiutempe,
				Myriad suferis de malgranda haketpotenco. Ofte ministoj emis atendi Äis la malfacileco malpliiÄis, tuj mini multajn blokojn, kaj poste salti al alia valuto Äis la malfacileco remalleviÄis. Kiam Myriad ebligis kunligitan minadon je Scrypt k SHA256d, kaj ankaÅ­ pliigis la celtempon de la blokoj,
				la rezulto estis pli fidebla valuto. Tio okazis sen forpreni de la disdonada egaleco.";

			case clean("Myriad's History"):
				return "Historio de Myriad";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "8bitcoder forkis Miriadon de Zetacoin, kaj lanÄ‰is Äin en Februaro 2014. Äœi estas la unua Ä‰ifrovaluto kiu uzas kvin laborpruvajn algoritmojn.
			kiel strategion por pliigi la sekurecon k larÄigi la ministaron â€” SHA256d k Scrypt por ministoj kun ASICoj,
			Skein k Myr-Groestl por ministoj kun grafiksprocesoroj, kaj Qubit por ministoj kun aÅ­ grafiksprocesoroj aÅ­ centraj procesoroj. Huntercoin, lanÄ‰ita malfrue en 2013, estis fakte
			la unua valuto kiu uzas multajn laborpruvajn algoritmojn (SHA256d k Scrypt), tamen Äia fokuso ne estis pri minado, sed pri blokÄ‰en-bazita ludo kiu produktas la vastan plejmulton de la moneroj.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Multaj valutoj jam imitas Miriadon. Unue estis Saffroncoin, kiu ankaÅ­ uzas 5 laborpruvajn algoritmojn.
			Aliaj valutoj forkiÄas imite. Digitalcoin nun havas 3 laborpruvajn algoritmojn, kaj Digibyte havas 5. Unitus estas alia valuto kun 5 laborpruvaj algoritmoj, kaj kelkaj el ili samas kiel en Myriad.
			Unitus ankaÅ­ ebligas kunligitan minadon je Ä‰iuj siaj 5 algoritmoj. Auroracoin k Verge ankaÅ­ anoncis siajn planojn forki sin al multaj algoritmoj.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "AÅ­guston 2015, Myriad malmole forkiÄis por ebligi kunligitan minadon je SHA256d k Scrypt. La celo estis plibonigi la sekurecon kaj atingi pli stabilan haketpotencon je tiuj du algoritmoj.
			Tiutempe, la celtempo de la blokoj por Ä‰iu algoritmo estis ÅanÄita de 2.5 minutoj al 5 minutoj. Entute, unu bloko nun troviÄas proksimume Ä‰iun minuton anstataÅ­ Ä‰iujn 30 sekundojn.
			Tiu ÅanÄo signifas ke novaj moneroj daÅ­ros miniÄi dum pluaj 20 jaroj, ne 10 jaroj, kiel intencita dekomence.";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La plej lasta versio estas 0.11.3.1, eldonita je la 7a Aprilo 2016. Vidu ";

			case clean(" announcement &amp; upgrade notes."):
				return "anoncon k sciigojn pri la Äisdatigo.";

			case clean("Desktop"):
				return "Surtabla komputilo";

			case clean(" Windows"):
				return "Vindozo";

			case clean("32-bit Installer (11.5 MB)"):
				return "32-bita Instalilo (11.5 MB)";

			case clean("64-bit Installer (11.5 MB)"):
				return "64-bita Instalilo (11.5 MB)";

			case clean("Mobile"):
				return "PoÅtelefono";

			case clean("Android"):
				return "Android";

			case clean("Source"):
				return "Fonto";

			case clean("Source Code (0.11.3.1)"):
				return "Fontkodo (0.11.3.1)";

			case clean("Other"):
				return "Aliaj";

			case clean("Linux"):
				return "Linukso";

			case clean("Windows"):
				return "Vindozo";

			case clean("JSWallet"):
				return "JSMonujo";

			case clean("Brain Wallet"):
				return "Cerba Monujo";

			case clean("Paper Wallet"):
				return "Papera Monujo";

			// mining

			case clean("Getting Started"):
				return "Kiel komenci";
			case clean("Download a "):
				return "ElÅuti ";
			case clean("wallet"):
				return "monujon";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", elÅuti minilon Äustaspecan, trovi mingrupon, kaj ek!...";
			case clean("Mining Tutorial Video"):
				return "Filma Leciono pri Minado";
			case clean("Watch on "):
				return "Spektu Ä‰e ";
			case clean("Mining Software"):
				return "Mina Softvaro";
			case clean("Use any SHA256d compatible ASIC"):
				return "Uzu ian ajn ASIC taÅ­ga por SHA256d";
			case clean("Use any Scrypt compatible ASIC"):
				return "Uzu ian ajn ASIC taÅ­ga por Scrypt";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer por grafiksprocesora minado en OpenCL";
			case clean("ccminer for CUDA GPU mining"):
				return "ccminer por CUDA-grafiksprocesora minado";
			case clean("cpuminer-multi for CPU mining"):
				return "cpuminer-multi por minado per centra procesoro";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer por OpenCL-grafiksprocesora minado";
			case clean("BitcoinTalk Thread"):
				return "Fadeno Ä‰e BitcoinTalk (angle)";
			case clean("Windows Binaries"):
				return "Duumaj dosieroj por Vindozo";
			case clean("GitHub Source"):
				return "Kodfonto Ä‰e Github";
			case clean("Suggested Command Line"):
				return "Rekomendita Komandlineo";
			case clean("Pools"):
				return "Mingrupoj";
			case clean("P2Pool nodes"):
				return "P2Pool-nodoj";
			case clean("Run Your Own Node"):
				return "Starigu Vian Propran Nodon";
			case clean("Other pools"):
				return "Aliaj mingrupoj";
			case clean("Merge Mining Pools"):
				return "Mingrupoj por Kunligita Minado";
			case clean("zpool - The miners multipool"):
				return "zpool - Mingrupo de multaj Ä‰ifrovalutoj";
			case clean("MultiPool"):
				return "MultiPool";


			// services
			case clean("Information &amp; Resources"):
				return "Informado k risurcoj";

			case clean("Insight Explorer (1)"):
				return "Insight Esplorilo (1)";

			case clean("Insight Explorer (2)"):
				return "Insight Esplorilo (2)";

			case clean("Abe Explorer"):
				return "Abe Esplorilo";

			case clean("Network Status"):
				return "Reta Statuso";

			case clean("Exchanges"):
				return "MonÅanÄejoj";
				
			case clean("Shop"):
				return "Butikoj";
				
			case clean("List of Coinpayments stores"):
				return "Listo de butikoj Ä‰e Coinpayments";

			case clean("Other"):
				return "Aliaj";

			case clean("Faucet"):
				return "Krano";

			case clean("Testnet Information"):
				return "Informo pri testnet";

			case clean("cryptap.us Myriad page"):
				return "Myriad-paÄo cryptap.us";

			case clean("Reddit/IRC myrbot information"):
				return "Informo pri myrbot por Reddit/IRC";

			default:
				return $text;
		}
	}

	else if($lang == 'zh')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "å¼€æ”¾æ€§";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriadå…·æœ‰å¤åˆç®—æ³•çš„ç‰¹æ€§ - æ˜¯ç¬¬ä¸€ä¸ªåŒæ—¶åŒ…å«5ç§ç®—æ³•çš„åŠ å¯†è´§å¸ã€‚ä¸Žæ¯”ç‰¹å¸åªèƒ½ä½¿ç”¨SHA256dçš„ASICçŸ¿æœºæŒ–çŸ¿ä¸ä¸€æ ·ï¼ŒMyriadå…¼å®¹SHA256d ASICS, Scrypt ASICSç­‰ç®—æ³•, åŒæ—¶å…¼å®¹GPUåŠCPUæŒ–çŸ¿ã€‚";

			case clean("Secure"):
				return "å®‰å…¨æ€§";

			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "çŸ¿æœºå¯é€‰æ‹©5ç§ç®—æ³•ä¸­ä»»ä½•ä¸€ç§è¿›è¡ŒæŒ–çŸ¿ â€” SHA256d, Scrypt, Myr-Groestl, Skein æˆ– Yescrypt â€” æ¯ä¸€ç§å‡ä»¥5åˆ†é’Ÿçš„åŒºå—ä¸ºç›®æ ‡ï¼Œå› æ­¤åœ¨5ç§ç®—æ³•çš„è§’åº¦ä¸Šè®¡ç®—ï¼Œåªéœ€ä¸€åˆ†é’Ÿä¾¿å¯äº§å‡ºä¸€ä¸ªæ–°åŒºå—ï¼Œæ¯ç§ç®—æ³•çš„éš¾åº¦å—å…¶ç®—åŠ›å½±å“ã€‚å½“å¸‚åœºæŽ¨å‡ºASICåŽï¼Œåœ¨GPUä¸ŠæŒ–SHA256då’ŒScryptå·²ç»æ²¡æœ‰ä»€ä¹ˆæ•ˆçŽ‡äº†ï¼Œè€Œå‰©ä¸‹çš„ç®—æ³•ä»æ˜¯GPUæŒ–çŸ¿å ä¸»å¯¼åœ°ä½ã€‚å¤åˆç®—æ³•æä¾›äº†é¢å¤–çš„å51%æ”»å‡»æœºåˆ¶ï¼Œå› ä¸ºéœ€è¦ä¸€å¥—ä¸åŒçš„è®¾å¤‡åŒºå¯»æ‰¾51%çš„åŒºå—ã€‚";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "";

			case clean("Fair Distribution"):
				return "å…¬å¹³æ€§";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "æ²¡æœ‰é¢„æŒ–æˆ–å†…éƒ¨äººå‘˜æžé’±ç­‰å†…å¹•ï¼Œä»»ä½•äººéƒ½æœ‰åŒæ ·çš„æœºä¼šåœ¨åŒæ ·çš„å¸‚åœºä»·æ ¼ä¸‹è´­ä¹°Myriadã€‚";

			// technology

			case clean("Multi-Algorithm"):
				return "å¤åˆç®—æ³•";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5ç§ç®—æ³•ï¼Œå¯ç”¨äºŽASIC, GPUå’ŒCPUè®¾å¤‡çš„æŒ–çŸ¿ã€‚";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "ä¸¤è½®çš„SHA256å“ˆå¸Œç®—æ³•, ç¬¬ä¸€è½®åœ¨å¼€è¾ŸåŠ å¯†è´§å¸å§‹ç¥–æ¯”ç‰¹å¸ä¸­è¢«ä½¿ç”¨ã€‚";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "è®¾è®¡åªå¯ç”¨äºŽCPUçš„å“ˆå¸Œç®—æ³•, æœ€åˆç”¨äºŽèŽ±ç‰¹å¸æŒ–çŸ¿, çŽ°åœ¨ç”¨äºŽå¤šç§å±±å¯¨å¸çš„ASICæŒ–çŸ¿ã€‚";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "ä¸€ç§åŸºäºŽGroestlç®—æ³•, ä¸ºMyriadé‡èº«å®šåˆ¶çš„ç®—æ³•, æ˜¯5ä¸ªå‚ä¸ŽNIST SHA-3ç®—æ³•ç«žèµ›çš„ç®—æ³•ä¹‹ä¸€ã€‚";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "å¦ä¸€ä¸ªå‚ä¸ŽNIST SHA-3ç®—æ³•ç«žèµ›çš„ç®—æ³•, æœ€åˆç”¨äºŽSkeincoinã€‚";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Qubitæ˜¯ä¸€ä¸ªåªå¯ç”¨äºŽCPUæŒ–çŸ¿çš„ç®—æ³•, ç»“åˆäº†5ç§NIST SHA-3ç®—æ³•ç«žèµ›çš„ç®—æ³• - Luffa, Cubehash, SHAvite, SIMD å’Œ ECHOã€‚";

			case clean("Merge Mining"):
				return "åˆå¹¶æŒ–çŸ¿";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "åŒºå—400200åŽ, ç®—æ³•SHA256Då’ŒScryptå¼€å§‹å…è®¸åˆå¹¶æŒ–çŸ¿, åˆå¹¶æŒ–çŸ¿ä½¿Myriadèƒ½å¤Ÿåˆ©ç”¨è¿™äº›ç®—æ³•æ­£åœ¨ä½¿ç”¨çš„å¤§é‡ç®—åŠ›, æ­¤å¤–å¯åŠ å¼ºMyriadçš„åŒºå—é“¾å®‰å…¨æ€§ã€‚";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "åˆå¹¶æŒ–çŸ¿æˆ–è€…è¯´AuxPow, å…è®¸ç”¨äºŽçˆ¶ç³»å¸ç§(ä¾‹å¦‚æ¯”ç‰¹å¸æˆ–èŽ±ç‰¹å¸)çš„ç®—åŠ›è¿›è¡Œå¯¹Myriadæœ‰æ•ˆåŒºå—çš„å¯»æ‰¾, è€Œä¸ç”¨è€—è´¹å¯¹çŽ°æœ‰çˆ¶ç³»å¸ç§çš„ç®—åŠ›çš„æ€§èƒ½ä¸Šçš„æŸè€—ã€‚";

			case clean("Distribution"):
				return "åˆ†é…";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "MyriadäºŽ2014å¹´2æœˆ23å·çš„18:30(UTC)æ­£å¼ä¸Šçº¿, ç¬¬ä¸€ä¸ªåŒºå—äºŽ4åˆ†é’ŸåŽå‡ºäº§, è¿™ä¹Ÿç¡®è®¤äº†â€æ— é¢„æŒ–â€çš„äº‹å®žã€‚";

			case clean("first mined block"):
				return "";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "åˆå§‹çš„åŒºå—å¥–åŠ±æ˜¯1000 MYR, æ¯967,680åŒºå—åŽå‡åŠ(å¤§çº¦éœ€48å‘¨æ—¶é—´), å¸æ€»é‡å¤§çº¦ä¸º20äº¿MYRã€‚";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "æœ€åˆçš„åŒºå—æ—¶é—´ä¸º30ç§’, æˆ–è€…è¯´å¯¹äºŽæ¯ç§ç®—æ³•åˆ™æ˜¯150ç§’ã€‚2015å¹´7æœˆ12å·, ç¤¾åŒºå†³å®šå¢žåŠ ç›®æ ‡åŒºå—æ—¶é—´è‡³60ç§’, æˆ–è€…æ¯ç§ç®—æ³•300ç§’, åœ¨åŒºå—1,401,001å¼€å§‹ç”Ÿæ•ˆã€‚ä¸Žæ­¤åŒæ—¶, Myriadé­é‡äº†ä½Žç®—åŠ›åŠç®—æ³•SHA256dåŠScryptä¸Šçš„è¶…é¢çš„éš¾åº¦è·³è·ƒ, é€ æˆå®žé™…åŒºå—æ—¶é—´è¶…è¿‡50ç§’ã€‚é™¤äº†æ¿€æ´»ç®—æ³•SHA256dåŠScryptä¸Šçš„aux-PoWæœºåˆ¶å¤–, åŒºå—æ—¶é—´çš„å¢žåŠ å¸¦æ¥äº†è‰¯å¥½çš„ç½‘ç»œç¨³å®šæ€§, ä¹Ÿä¸æ¯«ä¸è¦æƒ³åˆ†é…çš„å…¬å¹³æ€§ã€‚";

			case clean("Myriad's History"):
				return "Myriadçš„åŽ†å²";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriadç”±8bitcoderæ”¹ç¼–è‡ªZetacoinè€Œæ¥, äºŽ2014å¹´2æœˆæ­£å¼ä¸Šçº¿, æ˜¯ç¬¬ä¸€ä¸ªä½¿ç”¨5ç§PoWç®—æ³•çš„åŠ å¯†è´§å¸, è¿™ç§åšæ³•å¤§å¤§åŠ å¼ºäº†è´§å¸å®‰å…¨æ€§, åŒæ—¶å¤§å¤§é™ä½Žäº†æŒ–çŸ¿çš„é—¨æ§›, å„ç±»çŸ¿æœºå‡å¯å‚ä¸ŽæŒ–çŸ¿ -   ASICçŸ¿æœºçš„SHA256å’ŒScrypt, GPUæ˜¾å¡çš„Skeinå’ŒMyr-Groestl, å’Œæ¥è‡ªCPUå’ŒGPUæŒ–çŸ¿çš„Qubitã€‚2013å¹´åŽæœŸä¸Šçº¿çš„Huntercoin, å…¶å®žæ˜¯ç¬¬ä¸€ä¸ªè¿ç”¨å¤åˆPoWç®—æ³•(SHA256å’ŒScrypt)çš„è´§å¸, ä½†å…¶å¹¶æœªå…³æ³¨æŒ–çŸ¿é¢†åŸŸ, è€Œæ˜¯å¦‚ä½•ç”Ÿäº§æ–°å¸çš„åŸºäºŽåŒºå—é“¾çš„æ¸¸æˆã€‚";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriadç»åŽ†å‡ æ¬¡åˆ†å‰, ç¬¬ä¸€æ¬¡æ˜¯Saffroncoin, åŒæ ·ä½¿ç”¨5ç§PoWç®—æ³•; Digitalcoinå’ŒDigibyteåˆ™æ‰§è¡Œç¡¬åˆ†å‰å¹¶åˆ†åˆ«ä½¿ç”¨3ç§å’Œ5ç§PoWç®—æ³•; Unitusæ˜¯å¦å¤–ä¸€ç§5ç®—æ³•PoWè´§å¸, ä¸ŽMyriadå…±äº«å‡ ç§PoWç®—æ³•, å¹¶å…è®¸ç”¨æˆ·å¯¹5ç§ç®—æ³•è¿›è¡Œåˆå¹¶æŒ–çŸ¿; Auroracoinå’ŒVergeä¹Ÿå®£å¸ƒè®¡åˆ’è¿›è¡Œç¡¬åˆ†å‰è‡³å¤åˆç®—æ³•ç‰ˆæœ¬ã€‚";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "2015å¹´8æœˆ, Myriadæ‰§è¡Œç¡¬åˆ†å‰å¹¶å…è®¸åœ¨ç®—æ³•SHA256å’ŒScryptä¸Šè¿›è¡Œåˆå¹¶æŒ–çŸ¿, ä»¥æé«˜å®‰å…¨æ€§, ç¨³å®šè¿™ä¸¤ç§ç®—æ³•çš„ç®—åŠ›ç½‘ç»œã€‚ä¸Žæ­¤åŒæ—¶, æ¯ç§ç®—æ³•çš„ç›®æ ‡åŒºå—æ—¶é—´æå‡è‡³5åˆ†é’Ÿ(æ­¤å‰æ˜¯2.5åˆ†é’Ÿ), ä»¥è¾¾åˆ°æ€»ä½“ä¸Šçš„ç›®æ ‡åŒºå—æ—¶é—´1åˆ†é’Ÿ(æ­¤å‰30ç§’); è¿™ä¸ªæ”¹å˜ä¼šä½¿è´§å¸çš„å‘è¡ŒæœŸé™ä¹˜ä»¥ä¸€ä¸ªæ•°å­—2, ä¹Ÿå°±æ˜¯å¤§çº¦20å¹´ã€‚";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "æœ€æ–°ç‰ˆæœ¬0.11.3.1, äºŽ2016å¹´4æœˆ7å·å‘å¸ƒ, è¯·æŸ¥çœ‹";

			case clean(" announcement &amp; upgrade notes."):
				return "ç‰ˆæœ¬æ›´æ–°å¤‡å¿˜å½•ã€‚";

			// mining

			case clean("Getting Started"):
				return "å…¥é—¨";
			case clean("Download a "):
				return "";
			case clean("wallet"):
				return "";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "ä¸‹è½½é’±åŒ…å’Œæ­£ç¡®çš„æŒ–çŸ¿è½¯ä»¶, å¯»æ‰¾çŸ¿æ± å¹¶å¼€åŠ¨çŸ¿æœº...";
			case clean("Mining Tutorial Video"):
				return "æŒ–çŸ¿æŒ‡å¼•è§†é¢‘";
			case clean("Watch on "):
				return "";
			case clean ("Youtube"):
				return "è¯·åœ¨Youtubeä¸Šè§‚çœ‹.";
			case clean("Mining Software"):
				return "æŒ–çŸ¿è½¯ä»¶";
			case clean("Use any SHA256d compatible ASIC"):
				return "ä½¿ç”¨ä»»ä½•é€‚ç”¨SHA256dçš„ASICçŸ¿æœº";
			case clean("Use any Scrypt compatible ASIC"):
				return "ä½¿ç”¨ä»»ä½•é€‚ç”¨Scryptçš„ASICçŸ¿æœº";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer,æ”¯æŒOpenCLçš„GPUæŒ–çŸ¿";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalkè®¨è®ºè´´";
			case clean("Windows Binaries"):
				return "Windowsé…ç½®æ–‡ä»¶";
			case clean("GitHub Source"):
				return "GitHubæºä»£ç ";
			case clean("Suggested Command Line"):
				return "å»ºè®®çš„å‘½ä»¤ä»£ç ";
			case clean("Pools"):
				return "çŸ¿æ± ";
			case clean("P2Pool nodes"):
				return "çŸ¿æ± èŠ‚ç‚¹";
			case clean("Run Your Own Node"):
				return "è¿è¡Œä½ è‡ªå·±çš„èŠ‚ç‚¹";
			case clean("Merge Mining Pools"):
				return "åˆå¹¶æŒ–çŸ¿çŸ¿æ± ";
			case clean("zpool - The miners multipool"):
				return "zpool - çŸ¿æ± å¤åˆçŸ¿æ± ";
			case clean("MultiPool"):
				return "MultiPool";


			// services
			case clean("Information &amp; Resources"):
				return "ä¿¡æ¯&èµ„æº";

			case clean("Exchanges"):
				return "äº¤æ˜“æ‰€";

			case clean("Other"):
				return "å…¶å®ƒ";

			case clean("Faucet"):
				return "Faucet";

			case clean("Testnet Information"):
				return "Testnet Information";

			default:
				return $text;
		}
	}
	
	else if($lang == 'el')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Î‘Î½Î¿Î¹Ï‡Ï„ÏŒ ÏƒÎµ ÏŒÎ»Î¿Ï…Ï‚";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Î¤Î¿ Myriad ÎµÎ¯Î½Î±Î¹ Ï€Î¿Î»Ï…-Î±Î»Î³Î¿ÏÎ¹Î¸Î¼Î¹ÎºÏŒ - ÎºÎ±Î¹ Ï„Î¿ Ï€ÏÏŽÏ„Î¿ Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± Ï€Î¿Ï… Î­Ï‡ÎµÎ¹ ÎµÏ†Î±ÏÎ¼ÏŒÏƒÎµÎ¹ 5 Ï„Î±Ï…Ï„ÏŒÏ‡ÏÎ¿Î½Î¿Ï…Ï‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚. Î£Îµ Î±Î½Ï„Î¯Î¸ÎµÏƒÎ· Î¼Îµ Ï„Î¿ Bitcoin, Ï„Î¿ Î¿Ï€Î¿Î¯Î¿ Î¼Ï€Î¿ÏÎµÎ¯ Î¼ÏŒÎ½Î¿ Î½Î± ÎµÎ¾Î¿ÏÏ…Ï‡Î¸ÎµÎ¯ ÎºÎµÏÎ´Î¿Ï†ÏŒÏÎ± Î¼Îµ Ï„Î·Î½ Ï‡ÏÎ®ÏƒÎ· SHA256d ÎµÎ¾Î¿Ï€Î»Î¹ÏƒÎ¼Î¿Ï ASIC, Ï„Î¿ Myriad ÎµÎ¯Î½Î±Î¹ Î±Î½Î¿Î¹ÎºÏ„ÏŒ ÏƒÎµ SHA256d ASICS, Scrypt ASICS, ÎšÎ¬ÏÏ„ÎµÏ‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½ ÎºÎ±Î¹ Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÏ„Î­Ï‚.";
			case clean("Secure"):
				return "Î‘ÏƒÏ†Î±Î»Î­Ï‚";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "ÎˆÎ½Î±Ï‚ Î±Î½Î¸ÏÎ±ÎºÏ‰ÏÏÏ‡Î¿Ï‚ Î¼Ï€Î¿ÏÎµÎ¯ Î½Î± ÎµÏ€Î¹Î»Î­Î¾ÎµÎ¹ ÎºÎ±Î¹ Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÎµÎ¹ Î¿Ï€Î¿Î¹Î¿Î´Î®Ï€Î¿Ï„Îµ Î±Ï€ÏŒ Ï„Î¿Ï…Ï‚ 5 Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ - Î¤Î¿Î½ SHA256d, Ï„Î¿Î½ Scrypt, Ï„Î¿Î½ Myr-Groestl, Ï„Î¿Î½ Skein Î® Ï„Î¿Î½ qubit - 
				Î¿ ÎºÎ±Î¸Î­Î½Î±Ï‚ Î±Ï€Î¿ Ï„Î¿Ï…Ï‚ Î¿Ï€Î¿Î¯Î¿Ï…Ï‚ Î­Ï‡ÎµÎ¹ ÏƒÎ±Î½ ÏƒÏ„ÏŒÏ‡Î¿ Î¿ Ï‡ÏÏŒÎ½Î¿Ï‚ Î±Î½Î¬Î¼ÎµÏƒÎ± ÏƒÏ„Î± Î¼Ï€Î»Î¿Îº Î½Î± ÎµÎ¯Î½Î±Î¹ 5 Î»ÎµÏ€Ï„Î¬. Î£Ï…Î½Î¿Î»Î¹ÎºÎ¬, Î­Î½Î± Î¼Ï€Î»Î¿Îº ÎµÎ¾Î¿ÏÏÏƒÏƒÎµÏ„Î±Î¹ Ï€ÎµÏÎ¯Ï€Î¿Ï… ÎºÎ¬Î¸Îµ 1 Î»ÎµÏ€Ï„ÏŒ. Î•Î½ÏŽ Î· Î´Ï…ÏƒÎºÎ¿Î»Î¯Î± Ï„Î¿Ï… ÎºÎ¬Î¸Îµ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï… ÎµÏ€Î·ÏÎµÎ¬Î¶ÎµÏ„Î±Î¹ Î¼ÏŒÎ½Î¿ Î±Ï€ÏŒ Ï„Î¿ Î´Î¹ÎºÏŒ Ï„Î·Ï‚ ÏÏ…Î¸Î¼ÏŒ ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚. 
				Î•Î½ÏŽ Ï„Î± ASIC Î­Ï‡Î¿Ï…Î½ ÎºÎ±Ï„Î±ÏƒÏ„Î®ÏƒÎµÎ¹ Ï„Î·Î½ ÎµÎ¾ÏŒÏÏ…Î¾Î· Î¼Îµ ÎšÎ¬ÏÏ„ÎµÏ‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½ Î³Î¹Î± Ï„Î¿ SHA256d & Ï„Î¿ Scrypt Î±Î½Ï„Î¹Ï€Î±ÏÎ±Î³Ï‰Î³Î¹ÎºÎ®, Î¿Î¹ Ï…Ï€ÏŒÎ»Î¿Î¹Ï€Î¿Î¹ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Î¹ ÏƒÏ…Î½ÎµÏ‡Î¯Î¶Î¿Ï…Î½ Î½Î± ÎºÏ…ÏÎ¹Î±ÏÏ‡Î¿ÏÎ½Ï„Î±Î¹ Î±Ï€ÏŒ Ï„Î·Î½ ÎµÎ¾ÏŒÏÏ…Î¾Î· Î¼Î­ÏƒÏ‰ ÎšÎ±ÏÏ„ÏŽÎ½ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½.
				Î— Ï€Î¿Î»Ï…-Î±Î»Î³Î¿ÏÎ¹Î¸Î¼Î¹ÎºÎ® Ï€ÏÎ¿ÏƒÎ­Î³Î³Î¹ÏƒÎ· Ï€ÏÎ¿ÏƒÏ†Î­ÏÎµÎ¹ ÎµÎ¾Î±Î¹ÏÎµÏ„Î¹ÎºÎ® Î±Î½Ï„Î¿Ï‡Î® ÎµÎ½Î¬Î½Ï„Î¹Î± ÏƒÎµ Î¼Î¹Î± ÎµÏ€Î¯Î¸ÎµÏƒÎ· 51% ÎµÏ€ÎµÎ¹Î´Î® Î¼Î¹Î± ÏƒÎµÎ¹ÏÎ¬ Î±Ï€ÏŒ Î´Î¹Î±Ï†Î¿ÏÎµÏ„Î¹ÎºÏŒ Ï…Î»Î¹ÎºÏŒ ÎµÎ¯Î½Î±Î¹ Î±Ï€Î±ÏÎ±Î¯Ï„Î·Ï„Î· Î³Î¹Î± Î½Î± Î²ÏÎµÎ¯ Ï„Î¿ 51% Ï„Ï‰Î½ Î¼Ï€Î»Î¿Îº.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Î— ÏƒÏ…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ· Ï„Î·Ï‚ ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ Î­Ï‡ÎµÎ¹ ÎµÎ½ÎµÏÎ³Î¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯ Î³Î¹Î± Ï„Î¿ SHA256d & Scrypt, ÎµÏ€Î¹Ï„ÏÎ­Ï€Î¿Î½Ï„Î±Ï‚ ÏƒÏ„Î¿ Myriad Î½Î± ÎµÏ€Ï‰Ï†ÎµÎ»Î·Î¸ÎµÎ¯ Î±Ï€ÏŒ Ï„Î·Î½ Ï„ÎµÏÎ¬ÏƒÏ„Î¹Î± Î´ÏÎ½Î±Î¼Î· ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ Ï€Î¿Ï… ÎµÎ¯Î½Î±Î¹ Î´Î¹Î±Î¸Î­ÏƒÎ¹Î¼Î·.";
			case clean("Fair Distribution"):
				return "Î”Î¯ÎºÎ±Î¹Î· ÎºÎ±Ï„Î±Î½Î¿Î¼Î®";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Î”ÎµÎ½ Ï…Ï€Î®ÏÎ¾Îµ Ï€ÏÎ¿ÎµÎ¾ÏŒÏÏ…Î¾Î· Î® ÎºÏÏ…Ï†Î­Ï‚ Ï€ÎµÏÎ¹Î¿Ï…ÏƒÎ¯ÎµÏ‚ Ï€Î¿Ï… ÎºÎ±Ï„Î­Ï‡Î¿Î½Ï„Î±Î¹ Î±Ï€ÏŒ Î¼Ï…Î·Î¼Î­Î½Î¿Ï…Ï‚ ÏƒÏ„Î·Î½ Î±ÏÏ‡Î®. ÎŸ ÎºÎ±Î¸Î­Î½Î±Ï‚ Î­Ï‡ÎµÎ¹ Î¼Î¹Î± Î¯ÏƒÎ· ÎµÏ…ÎºÎ±Î¹ÏÎ¯Î± Î½Î± Î±Ï€Î¿ÎºÏ„Î®ÏƒÎµÎ¹ Myriad Î¼Îµ Ï„Î·Î½ Ï„Î¹Î¼Î® Ï„Î·Ï‚ Î±Î³Î¿ÏÎ¬Ï‚.";
			// technology
			case clean("Multi-Algorithm"):
				return "Î Î¿Î»Î»Î±Ï€Î»Î¿Î¯-Î‘Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Î¹";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Î‘Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Î¹, Ï€Î¿Ï… ÎºÎ±Î¸Î¹ÏƒÏ„Î¿ÏÎ½ Î´Ï…Î½Î±Ï„Î® Ï„Î·Î½ ÎµÎ¾ÏŒÏÏ…Î¾Î· Î³Î¹Î± ASIC, ÎšÎ¬ÏÏ„ÎµÏ‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½ ÎºÎ±Î¹ Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÏ„Î­Ï‚:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Î”ÏÎ¿ Î³ÏÏÎ¿Î¹ Ï„Î¿Ï… Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï… SHA256d, Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®Î¸Î·ÎºÎ±Î½ Î³Î¹Î± Ï€ÏÏŽÏ„Î· Ï†Î¿ÏÎ¬ Î±Ï€ÏŒ Ï„Î¿ Ï€ÏÏ‰Ï„Î¿Ï€ÏŒÏÎ¿ ÎºÏÏ…Ï€Ï„Î¿Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Î£Ï‡ÎµÎ´Î¹Î±ÏƒÎ¼Î­Î½Î¿ Î³Î¹Î± Î½Î± ÎµÎ¯Î½Î±Î¹ Î­Î½Î±Ï‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï‚ ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ Î¼Îµ Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÏ„Î­Ï‚, Ï„ÏŽÏÎ± ÎµÎ¾Î¿ÏÏÏƒÏƒÎµÏ„Î±Î¹ Î¼Îµ ASICs ÏƒÎµ Ï€Î¿Î»Î»Î¬ ÎºÏÏ…Ï€Ï„Î¿Î½Î¿Î¼Î¯ÏƒÎ¼Î±Ï„Î±, Î¾ÎµÎºÎ¹Î½ÏŽÎ½Ï„Î±Ï‚ Î¼Îµ Ï„Î¿ Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "ä¸€ÎœÎ¹Î± ÎµÎ¹Î´Î¹ÎºÎ® Ï€Î±ÏÎ±Î»Î»Î±Î³Î® Ï„Î¿Ï… Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï… ÎºÎ±Ï„Î±ÎºÎµÏÎ¼Î±Ï„Î¹ÏƒÎ¼Î¿Ï Groestl Î³Î¹Î± Ï„Î¿ Myriad, ÎµÎ¯Î½Î±Î¹ Î­Î½Î±Ï‚ Î±Ï€ÏŒ Ï„Î¿Ï…Ï‚ Ï€Î­Î½Ï„Îµ Ï†Î¹Î½Î±Î»Î¯ÏƒÏ„ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ ÏƒÏ„Î¿ Î´Î¹Î±Î³Ï‰Î½Î¹ÏƒÎ¼ÏŒ hash NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "ÎœÎ¹Î± Î¬Î»Î»Î· Î±Ï€ÏŒ Ï„Î¹Ï‚ Ï€Î­Î½Ï„Îµ Ï†Î¹Î½Î±Î»Î¯ÏƒÏ„ ÏƒÏ„Î¿ Î´Î¹Î±Î³Ï‰Î½Î¹ÏƒÎ¼ÏŒ hash NIST SHA-3, Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®Î¸Î·ÎºÎµ Î³Î¹Î± Ï€ÏÏŽÏ„Î· Ï†Î¿ÏÎ¬ Î±Ï€ÏŒ Ï„Î¿ Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Î‘ÏÏ‡Î¹ÎºÎ¬ Î­Î½Î±Ï‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï‚ Î³Î¹Î± Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÏ„Î­Ï‚, Ï„Î¿ qubit ÏƒÏ…Î½Î´Ï…Î¬Î¶ÎµÎ¹ 5 Î±Î½Ï„Î±Î³Ï‰Î½Î¹ÏƒÏ„Î­Ï‚ ÏƒÏ„Î¿ Î´Î¹Î±Î³Ï‰Î½Î¹ÏƒÎ¼ÏŒ hash NIST SHA-3 - Ï„Î¿Î½ Luffa, Ï„Î¿Î½ Cubehash, Ï„Î¿Î½ SHAvite, Ï„Î¿Î½ SIMD ÎºÎ±Î¹ Ï„Î¿Î½ ECHO.";
			case clean("Merge Mining"):
				return "Î£Ï…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ· Î•Î¾ÏŒÏÏ…Î¾Î·Ï‚";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Î‘Ï€ÏŒ Ï„Î¿ Î¼Ï€Î»Î¿Îº 4002000, Î­Î³Î¹Î½Îµ Î· ÏƒÏ…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ· Ï„Ï‰Î½ Î¿ÏÏ…Ï‡ÎµÎ¯Ï‰Î½ Ï€Î¿Ï… ÎµÏ€Î¹Ï„ÏÎ±Ï€ÎµÎ¯ ÏƒÏ„Î¿Ï…Ï‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ SHA256d ÎºÎ±Î¹ Scrypt Î½Î± ÎµÎ¾Î¿ÏÏÏƒÏƒÎ¿Î½Ï„Î±Î¹ Î¼Î±Î¶Î¯. Î‘Ï…Ï„ÏŒ ÎµÏ€Î­Ï„ÏÎµÏˆÎµ ÏƒÏ„Î¿ Myriad Î½Î± ÎµÏ€Ï‰Ï†ÎµÎ»Î·Î¸ÎµÎ¯ Î±Ï€ÏŒ Ï„Î¹Ï‚ Ï„ÎµÏÎ¬ÏƒÏ„Î¹ÎµÏ‚ Ï„Î±Ï‡ÏÏ„Î·Ï„ÎµÏ‚ ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ Ï€Î¿Ï… ÎµÎ¯Î½Î±Î¹ ÏƒÎµ Ï‡ÏÎ®ÏƒÎ· Î±Ï€ÏŒ Î½Î¿Î¼Î¯ÏƒÎ¼Î±Ï„Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹ÏŽÎ½Ï„Î±Ï‚ Î±Ï…Ï„Î¿ÏÏ‚ Ï„Î¿Ï…Ï‚ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ Î³Î¹Î± Ï„Î·Î½ Ï€ÎµÏÎ±Î¹Ï„Î­ÏÏ‰ Î´Î¹Î±ÏƒÏ†Î¬Î»Î¹ÏƒÎ· Ï„Î·Ï‚ Î±Î»Ï…ÏƒÎ¯Î´Î±Ï‚ ÏƒÏ…Î½Î±Î»Î»Î±Î³ÏŽÎ½ Ï„Î¿Ï… Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Î— Î£Ï…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ· Î•Î¾ÏŒÏÏ…Î¾Î·Ï‚, Î® AuxPow ÏƒÏ„Î± Î±Î³Î³Î»Î¹ÎºÎ¬, ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÎ¹ Ï„Î·Î½ ÎµÏÎ³Î±ÏƒÎ¯Î± Ï€Î¿Ï… Î³Î¯Î½ÎµÏ„Î±Î¹ Î³Î¹Î± Î­Î½Î± Î³Î¿Î½Î¹ÎºÏŒ Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± (ÏŒÏ€Ï‰Ï‚ Ï„Î¿ Bitcoin Î® Ï„Î¿ Litecoin) Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î·Î¸ÎµÎ¯ Î³Î¹Î± Î½Î± Î²ÏÎµÎ¯Ï„Îµ Î­Î³ÎºÏ…ÏÎ± Î¼Ï€Î»Î¿Îº Î³Î¹Î± Ï„Î·Î½ Î±Î»Ï…ÏƒÎ¯Î´Î± ÏƒÏ…Î½Î±Î»Î»Î±Î³ÏŽÎ½ Ï„Î¿Ï… Myriad, Ï‡Ï‰ÏÎ¯Ï‚ ÎºÎ±Î½Î­Î½Î± ÎµÏ€Î¹Ï€Î»Î­Î¿Î½ Ï†ÏŒÏÏ„Î¿ Î® ÎµÏ€Î¯Î´ÏÎ±ÏƒÎ· ÏƒÏ„Î·Î½ Î±Ï€ÏŒÎ´Î¿ÏƒÎ· Ï„Î¿Ï… Î¼Î·Ï„ÏÎ¹ÎºÎ¿Ï Î½Î¿Î¼Î¯ÏƒÎ¼Î±Ï„Î¿Ï‚.";
			case clean("Distribution"):
				return "Î”Î¹Î±Î½Î¿Î¼Î®";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Î¤Î¿ Myriad ÎºÏ…ÎºÎ»Î¿Ï†ÏŒÏÎ·ÏƒÎµ ÏƒÏ„Î¹Ï‚ 23 Î¦ÎµÎ²ÏÎ¿Ï…Î±ÏÎ¯Î¿Ï… Ï„Î¿Ï… 2014 ÏƒÏ„Î¹Ï‚ 18:30 UTC. Î¤Î¿ Ï€ÏÏŽÏ„Î¿ Î¼Ï€Î»ÏŒÎº ÎµÎ¾Î¿ÏÏÏƒÏƒÎµÏ„Î±Î¹ Ï„Î­ÏƒÏƒÎµÏÎ± Î»ÎµÏ€Ï„Î¬ Î±ÏÎ³ÏŒÏ„ÎµÏÎ±, Ï€Î¹ÏƒÏ„Î¿Ï€Î¿Î¹ÏŽÎ½Ï„Î±Ï‚ Î­Ï„ÏƒÎ¹ ÏŒÏ„Î¹ Î´ÎµÎ½ Ï…Ï€Î®ÏÏ‡Îµ Ï€ÏÎ¿ÎµÎ¾ÏŒÏÏ…Î¾Î·.";
			case clean("first mined block"):
				return "Î¤Î¿ Ï€ÏÏŽÏ„Î¿ Î¼Ï€Î»ÏŒÎº ÎµÎ¾Î¿ÏÏÏ‡Î¸Î·ÎºÎµ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "Ï„Î­ÏƒÏƒÎµÏÎ± Î»ÎµÏ€Ï„Î¬ Î±ÏÎ³ÏŒÏ„ÎµÏÎ±, Ï€Î¹ÏƒÏ„Î¿Ï€Î¿Î¹ÏŽÎ½Ï„Î±Ï‚ Î­Ï„ÏƒÎ¹ ÏŒÏ„Î¹ Î´ÎµÎ½ Ï…Ï€Î®ÏÏ‡Îµ Ï€ÏÎ¿ÎµÎ¾ÏŒÏÏ…Î¾Î·.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Î— Î±ÏÏ‡Î¹ÎºÎ® Î±Î¼Î¿Î¹Î²Î® Î®Ï„Î±Î½ 1.000 MYR, Ï€Î¿Ï… Î¼ÎµÎ¹ÏŽÎ¸Î·ÎºÎµ ÎºÎ±Ï„Î¬ Ï„Î¿ Î®Î¼Î¹ÏƒÏ… Î¼ÎµÏ„Î¬ Î±Ï€Î¿ 967.680 Î¼Ï€Î»ÏŒÎº (Ï€ÎµÏÎ¯Ï€Î¿Ï… 48 ÎµÎ²Î´Î¿Î¼Î¬Î´ÎµÏ‚ Î±ÏÎ³ÏŒÏ„ÎµÏÎ±). Î— Î£Ï…Î½Î¿Î»Î¹ÎºÎ® Ï€ÏÎ¿ÏƒÏ†Î¿ÏÎ¬ ÎµÎ¯Î½Î±Î¹ Ï€ÎµÏÎ¯Ï€Î¿Ï… 2 Î´Î¹ÏƒÎµÎºÎ±Ï„Î¿Î¼Î¼ÏÏÎ¹Î± MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Î‘ÏÏ‡Î¹ÎºÎ¬, Î¿ ÏƒÏ„ÏŒÏ‡Î¿Ï‚ Î¼Ï€Î»ÏŒÎº Î®Ï„Î±Î½ 30 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î±, Î® 150 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î± Î±Î½Î¬ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿. Î‘Ï€ÏŒ Ï„Î¹Ï‚ 12 Î™Î¿ÏÎ»Î¯Î¿Ï… Ï„Î¿Ï… 2015, Î· ÎºÎ¿Î¹Î½ÏŒÏ„Î·Ï„Î± Î±Ï€Î¿Ï†Î¬ÏƒÎ¹ÏƒÎµ Î½Î± Î±Ï…Î¾Î®ÏƒÎµÎ¹ Ï„Î¿ Ï‡ÏÏŒÎ½Î¿ Î¼Ï€Î»Î¿Îº ÏƒÏ„ÏŒÏ‡Î¿ ÏƒÏ„Î± 60 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î±, Î® 300 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î± Î±Î½Î¬ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿, Î· Î¿Ï€Î¿Î¯Î± Î¾ÎµÎºÎ¯Î½Î·ÏƒÎµ ÏƒÏ„Î¿ Î¼Ï€Î»Î¿Îº 1.401.001. 
				Î•ÎºÎµÎ¯Î½Î· Ï„Î·Î½ ÎµÏ€Î¿Ï‡Î®, Ï„Î¿ Myriad Î­Ï€Î±ÏƒÏ‡Îµ Î±Ï€ÏŒ Ï‡Î±Î¼Î·Î»Î® Î´ÏÎ½Î±Î¼Î· ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ ÎºÎ±Î¹ ÎµÎºÏ„ÎµÏ„Î±Î¼Î­Î½Î· Î¼ÎµÏ„Î¬Î²Î±ÏƒÎ· Ï„Ï‰Î½ Î±Î½Î¸ÏÎ±ÎºÏ‰ÏÏÏ‡Ï‰Î½ Ï„Î¿Ï… Scrypt ÎºÎ±Î¹ Ï„Î¿Ï… SHA256d, Ï€ÏÎ¿ÎºÎ±Î»ÏŽÎ½Ï„Î±Ï‚ Ï„Î¿Î½ Ï€ÏÎ±Î³Î¼Î±Ï„Î¹ÎºÏŒ Î¼Î­ÏƒÎ¿ Ï‡ÏÏŒÎ½Î¿ Î¼Ï€Î»Î¿Îº Î½Î± ÎµÎ¯Î½Î±Î¹ Ï€Î¬Î½Ï‰ Î±Ï€ÏŒ 50 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î±. 
				Î•ÎºÏ„ÏŒÏ‚ Î±Ï€ÏŒ Ï„Î· Î´Ï…Î½Î±Ï„ÏŒÏ„Î·Ï„Î± aux-POW Î³Î¹Î± Ï„Î¿ Scrypt ÎºÎ±Î¹ Ï„Î¿ SHA256d, Î· Î±ÏÎ¾Î·ÏƒÎ· Ï„Î¿Ï… Ï‡ÏÏŒÎ½Î¿Ï… Ï„Ï‰Î½ Î¼Ï€Î»Î¿Îº ÎµÎ¯Ï‡Îµ ÏƒÏ„ÏŒÏ‡Î¿ Î½Î± Î¿Î´Î·Î³Î®ÏƒÎµÎ¹ ÏƒÎµ Î¼ÎµÎ³Î±Î»ÏÏ„ÎµÏÎ· ÏƒÏ…Î½Î¿Ï‡Î® Ï„Î¿ Î´Î¯ÎºÏ„Ï…Î¿, Ï‡Ï‰ÏÎ¯Ï‚ Î½Î± ÎµÏ€Î·ÏÎµÎ¬Î¶ÎµÏ„Î±Î¹ Î· Î±Î¼ÎµÏÎ¿Î»Î·ÏˆÎ¯Î± Ï„Î·Ï‚ Î´Î¹Î±Î½Î¿Î¼Î®Ï‚.";
			case clean("Myriad's History"):
				return "Î™ÏƒÏ„Î¿ÏÎ¯Î± Ï„Î·Ï‚ Myriad";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Î¤Î¿ Myriad Î¾ÎµÎºÎ¯Î½Î·ÏƒÎµ Ï„Î¿ Î¦ÎµÎ²ÏÎ¿Ï…Î¬ÏÎ¹Î¿ Ï„Î¿Ï… 2014 Î±Ï€Î¿ Ï„Î¿Î½ 8bitcoder ÎºÎ±Î¹ Î²Î±ÏƒÎ¯ÏƒÏ„Î·ÎºÎµ ÏƒÏ„Î¿ Zetacoin. Î‰Ï„Î±Î½  Ï„Î¿ Ï€ÏÏŽÏ„Î¿ ÎºÏÏ…Ï€Ï„Î¿Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± Ï€Î¿Ï… Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¯Î·ÏƒÎµ Ï€Î­Î½Ï„Îµ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ Î±Ï€ÏŒÎ´ÎµÎ¹Î¾Î·Ï‚ ÎµÏÎ³Î±ÏƒÎ¯Î±Ï‚ ÏƒÎµ Î¼Î¹Î± Ï€ÏÎ¿ÏƒÏ€Î¬Î¸ÎµÎ¹Î± Î½Î± Î±Ï…Î¾Î®ÏƒÎµÎ¹ Ï„Î·Î½ Î±ÏƒÏ†Î¬Î»ÎµÎ¹Î±, 
				ÎºÎ±Î¸ÏŽÏ‚ ÎºÎ±Î¹ Ï„Î· Î´Î¹ÎµÏÏÏ…Î½ÏƒÎ· Ï„Î·Ï‚ Î²Î¬ÏƒÎ·Ï‚ Ï„Ï‰Î½ Î±Î½Î¸ÏÏŽÏ€Ï‰Î½ Ï€Î¿Ï… Î¸Î± Î¼Ï€Î¿ÏÎ¿ÏÏƒÎ±Î½ Î½Î± ÎµÎ¾Î¿ÏÏÎ¾Î¿Ï…Î½ Ï„Î¿ Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± - Î¼Îµ Ï„Î¿Ï…Ï‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ SHA256d ÎºÎ±Î¹ Scrypt Î³Î¹Î± ASIC Î±Î½Î¸ÏÎ±ÎºÏ‰ÏÏÏ‡Î¿Ï…Ï‚, 
				Skein ÎºÎ±Î¹ Myr-Groestl Î³Î¹Î± Ï„Î¿Ï…Ï‚ Î±Î½Î¸ÏÎ±ÎºÏ‰ÏÏÏ‡Î¿Ï…Ï‚ Î¼Îµ ÎšÎ¬ÏÏ„ÎµÏ‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½, ÎºÎ±Î¹ Qubit Î³Î¹Î± Î±Ï…Ï„Î¿ÏÏ‚ Î¼Îµ ÎšÎ¬ÏÏ„ÎµÏ‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½ ÎºÎ±Î¹ Î•Ï€ÎµÎ¾ÎµÏÎ³Î±ÏƒÏ„Î­Ï‚. Î¤Î¿ Huntercoin, Ï€Î¿Ï… Î¾ÎµÎºÎ¯Î½Î·ÏƒÎµ ÏƒÏ„Î± Ï„Î­Î»Î· Ï„Î¿Ï… 2013, Î®Ï„Î±Î½ ÏƒÏ„Î·Î½ Ï€ÏÎ±Î³Î¼Î±Ï„Î¹ÎºÏŒÏ„Î·Ï„Î± 
				Ï„Î¿ Ï€ÏÏŽÏ„Î¿ ÎºÎ­ÏÎ¼Î± Ï€Î¿Ï… Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¯Î·ÏƒÎµ Ï€Î¿Î»Î»Î±Ï€Î»Î¿ÏÏ‚ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ Î‘Ï€ÏŒÎ´ÎµÎ¹Î¾Î·Ï‚ Î•ÏÎ³Î±ÏƒÎ¯Î±Ï‚ (SHA256d ÎºÎ±Î¹ Scrypt), Î±Î»Î»Î¬ Ï„Î¿ ÎµÏ€Î¯ÎºÎµÎ½Ï„ÏÏŒ Ï„Î¿Ï… Î´ÎµÎ½ Î®Ï„Î±Î½ ÏƒÏ„Î·Î½ ÎµÎ¾ÏŒÏÏ…Î¾Î·, Î±Î»Î»Î¬ ÏƒÎµ Î­Î½Î± Ï€Î±Î¹Ï‡Î½Î¯Î´Î¹ Î²Î±ÏƒÎ¹ÏƒÎ¼Î­Î½Î¿ ÏƒÏ„Î·Î½ Î±Î»Ï…ÏƒÎ¯Î´Î± ÏƒÏ…Î½Î±Î»Î»Î±Î³ÏŽÎ½ Ï€Î¿Ï… Ï€Î±ÏÎ®Î³Î±Î³Îµ Ï„Î·Î½ Î¼ÎµÎ³Î¬Î»Î· Ï€Î»ÎµÎ¹Î¿ÏˆÎ·Ï†Î¯Î± Ï„Ï‰Î½ Î½Î­Ï‰Î½ Î½Î¿Î¼Î¹ÏƒÎ¼Î¬Ï„Ï‰Î½.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Î¤Î¿ Myriad Î­Ï‡ÎµÎ¹ Î³ÎµÎ½Î½Î®ÏƒÎµÎ¹ Î±ÏÎºÎµÏ„Î¬ Î½Î¿Î¼Î¯ÏƒÎ¼Î±Ï„Î± Ï€Î¿Ï… Ï„Î¿ Î±Î½Ï„Î­Î³ÏÎ±ÏˆÎ±Î½, Î· Ï€ÏÏŽÏ„Î· ÎµÎº Ï„Ï‰Î½ Î¿Ï€Î¿Î¯Ï‰Î½ Î®Ï„Î±Î½ Ï„Î¿ Saffroncoin, Ï„Î¿ Î¿Ï€Î¿Î¯Î¿ Î±Î¾Î¹Î¿Ï€Î¿Î¹Î¿ÏÏƒÎµ ÎµÏ€Î¯ÏƒÎ·Ï‚ Ï€Î­Î½Ï„Îµ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ Pow. 
				Digitalcoin ÎºÎ±Î¹ Digibyte Ï„ÏŒÏƒÎ¿ ÏƒÎºÎ»Î·ÏÎ¬ Î´Î¹Ï‡Î±Î»Ï‰Ï„Î® Î½Î± Ï‡ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î¿ÏÎ½ Ï„ÏÎµÎ¹Ï‚ ÎºÎ±Î¹ Ï€Î­Î½Ï„Îµ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ Î‘Ï€ÏŒÎ´ÎµÎ¹Î¾Î·Ï‚ Î•ÏÎ³Î±ÏƒÎ¯Î±Ï‚ Î±Î½Ï„Î¯ÏƒÏ„Î¿Î¹Ï‡Î±. Î¤Î¿ Unitus ÎµÎ¯Î½Î±Î¹ Î¬Î»Î»Î¿ Î­Î½Î± Î½ÏŒÎ¼Î¹ÏƒÎ¼Î± Ï€Î¿Ï… Î¼Î¿Î¹ÏÎ¬Î¶ÎµÏ„Î±Î¹ Ï€Î¿Î»Î»Î¿ÏÏ‚ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ Î‘Ï€ÏŒÎ´ÎµÎ¹Î¾Î·Ï‚ Î•ÏÎ³Î±ÏƒÎ¯Î±Ï‚ Î¼Îµ Ï„Î¿ Myriad, 
				ÎºÎ±Î¹ ÎµÏ€Î¹Ï„ÏÎ­Ï€ÎµÎ¹ ÏƒÏ„Î¿Ï…Ï‚ Ï‡ÏÎ®ÏƒÏ„ÎµÏ‚ Î½Î± ÏƒÏ…Î³Ï‡Ï‰Î½ÎµÏÏƒÎ¿Ï…Î½ Ï„Î·Î½ ÎµÎ¾ÏŒÏÏ…Î¾Î· Î±Î½Î¬Î¼ÎµÏƒÎ± ÏƒÏ„Î¿Ï…Ï‚ Ï€Î­Î½Ï„Îµ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚ Î‘Ï€ÏŒÎ´ÎµÎ¹Î¾Î·Ï‚ Î•ÏÎ³Î±ÏƒÎ¯Î±Ï‚ Ï€Î¿Ï… Î´Î¹Î±Î¸Î­Ï„ÎµÎ¹. Î¤Î¿ Auroracoin ÎºÎ±Î¹ Ï„Î¿ Verge Î­Ï‡Î¿Ï…Î½ ÎµÏ€Î¯ÏƒÎ·Ï‚ Î±Î½Î±ÎºÎ¿Î¹Î½ÏŽÏƒÎµÎ¹ ÏƒÏ‡Î­Î´Î¹Î± Î³Î¹Î± Ï€Î¿Î»Î»Î±Ï€Î»Î¿ÏÏ‚ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Î¿Ï…Ï‚.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Î¤Î¿Î½ Î‘ÏÎ³Î¿Ï…ÏƒÏ„Î¿ Ï„Î¿Ï… 2015 Ï„Î¿ Myriad Î¬Î»Î»Î±Î¾Îµ ÏŽÏƒÏ„Îµ Î½Î± ÎµÏ€Î¹Ï„ÏÎ­ÏˆÎµÎ¹ Ï„Î· ÏƒÏ…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ· ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ Î³Î¹Î± SHA256d ÎºÎ±Î¹ Scrypt Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿Ï…Ï‚ ÏƒÎµ Î¼Î¹Î± Ï€ÏÎ¿ÏƒÏ€Î¬Î¸ÎµÎ¹Î± Î½Î± Î²ÎµÎ»Ï„Î¹Ï‰Î¸ÎµÎ¯ Î· Î±ÏƒÏ†Î¬Î»ÎµÎ¹Î± ÎºÎ±Î¹ Î½Î± ÎµÏ€Î¹Ï„ÎµÏ…Ï‡Î¸ÎµÎ¯ Î¼Î¹Î± Ï€Î¹Î¿ ÏƒÏ„Î±Î¸ÎµÏÎ® ÎµÎ¾ÏŒÏÏ…Î¾Î· ÎµÏ€Î¯ Ï„Ï‰Î½ Î´ÏÎ¿ Î±Ï…Ï„ÏŽÎ½ Î±Î»Î³Î¿ÏÎ¯Î¸Î¼Ï‰Î½. Î‘Ï€ÏŒ Î±Ï…Ï„Î® Ï„Î· ÏƒÏ„Î¹Î³Î¼Î® ÎºÎ±Î¹ Î¼ÎµÏ„Î¬ Î¿ Ï‡ÏÏŒÎ½Î¿Ï‚ Î¼Ï€Î»ÏŒÎº Î³Î¹Î± ÎºÎ¬Î¸Îµ Î±Î»Î³ÏŒÏÎ¹Î¸Î¼Î¿ Î¬Î»Î»Î±Î¾Îµ ÎµÏ€Î¯ÏƒÎ·Ï‚ ÏƒÎµ Ï€Î­Î½Ï„Îµ Î»ÎµÏ€Ï„Î¬ (Ï€ÏÎ¿Î·Î³Î¿Ï…Î¼Î­Î½Ï‰Ï‚ 2,5 Î»ÎµÏ€Ï„Î¬), Î³Î¹Î± Î½Î± ÎµÏ€Î¹Ï„ÎµÏ…Ï‡Î¸ÎµÎ¯ Î¿ ÏƒÏ…Î½Î¿Î»Î¹ÎºÏŒÏ‚ Ï‡ÏÏŒÎ½Î¿Ï‚ Î¼Ï€Î»Î¿Îº Ï„Î¿Ï… 1Î¿Ï‚ Î»ÎµÏ€Ï„Î¿Ï (Ï€ÏÎ¿Î·Î³Î¿Ï…Î¼Î­Î½Ï‰Ï‚ 30 Î´ÎµÏ…Ï„ÎµÏÏŒÎ»ÎµÏ€Ï„Î±). Î— Î±Î»Î»Î±Î³Î® Î±Ï…Ï„Î® Î¸Î± ÎµÏ€ÎµÎºÏ„ÎµÎ¯Î½ÎµÎ¹ Ï„Î·Î½ ÎºÎ±Î¼Ï€ÏÎ»Î· ÎµÎºÏ€Î¿Î¼Ï€Î®Ï‚ Î¼Îµ Î­Î½Î±Î½ Ï€Î±ÏÎ¬Î³Î¿Î½Ï„Î± 2x, ÏƒÎµ Ï€ÎµÏÎ¯Ï€Î¿Ï… 20 Ï‡ÏÏŒÎ½Î¹Î±.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "H Î¤ÎµÎ»ÎµÏ…Ï„Î±Î¯Î± Î­ÎºÎ´Î¿ÏƒÎ· ÎµÎ¯Î½Î±Î¹ Î· 0.11.3.1, Ï€Î¿Ï… ÎºÏ…ÎºÎ»Î¿Ï†ÏŒÏÎ·ÏƒÎµ ÏƒÏ„Î¹Ï‚ 7 Î‘Ï€ÏÎ¯Î»Î¹Î¿Ï‚ 2016. Î”ÎµÎ¯Ï„Îµ ";
			case clean(" announcement &amp; upgrade notes."):
				return " Ï„Î·Î½ Î±Î½Î±ÎºÎ¿Î¯Î½Ï‰ÏƒÎ· Î³Î¹Î± Ï„Î·Î½ Î±Î½Î±Î²Î¬Î¸Î¼Î¹ÏƒÎ· ÏƒÏ„Î¹Ï‚ ÏƒÎ·Î¼ÎµÎ¹ÏŽÏƒÎµÎ¹Ï‚.";
			// mining
			case clean("Getting Started"):
				return "ÎžÎµÎºÎ¹Î½ÏŽÎ½Ï„Î±Ï‚";
			case clean("Download a "):
				return "ÎšÎ±Ï„ÎµÎ²Î¬ÏƒÏ„Îµ Ï„Î¿ ";
			case clean("wallet"):
				return "Ï€Î¿ÏÏ„Î¿Ï†ÏŒÎ»Î¹";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " ÎºÎ±Î¹ Ï„Î¿ Ï€ÏÏŒÎ³ÏÎ±Î¼Î¼Î± ÎµÎ¾ÏŽÏÏ…Î¾Î·Ï‚, Î²ÏÎµÎ¯Ï„Îµ Î¼Î¹Î± Ï€Î¹ÏƒÎ¯Î½Î± ÎµÎ¾ÏŒÏÏ…Î¾Î·Ï‚ ÎºÎ±Î¹ Î¾ÎµÎºÎ¹Î½Î®ÏƒÏ„Îµ.";
			case clean("Mining Tutorial Video"):
				return "Î’Î¯Î½Ï„ÎµÎ¿ ÎŸÎ´Î·Î³ÏŒÏ‚ Î³Î¹Î± Ï„Î·Î½ Î•Î¾ÏŒÏÏ…Î¾Î·.";
			case clean("Watch on "):
				return "Î”ÎµÎ¯Ï„Îµ Ï„Î¿ ÏƒÏ„Î¿";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "Î›Î¿Î³Î¹ÏƒÎ¼Î¹ÎºÏŒ Î•Î¾ÏŒÏÏ…Î¾Î·Ï‚";
			case clean("Use any SHA256d compatible ASIC"):
				return "Î§ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÏ„Îµ Î¿Ï€Î¿Î¹Î¿Î´Î®Ï€Î¿Ï„Îµ SHA256d ÏƒÏ…Î¼Î²Î±Ï„ÏŒ ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Î§ÏÎ·ÏƒÎ¹Î¼Î¿Ï€Î¿Î¹Î®ÏƒÏ„Îµ Î¿Ï€Î¿Î¹Î¿Î´Î®Ï€Î¿Ï„Îµ Scrypt ÏƒÏ…Î¼Î²Î±Ï„ÏŒ ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return " ÎŸ sgminer Î³Î¹Î± OpenCL ÎµÎ¾ÏŒÏÏ…Î¾Î· Î¼Îµ Ï„Î·Î½ Ï‡ÏÎ®ÏƒÎ· ÎšÎ¬ÏÏ„Î±Ï‚ Î“ÏÎ±Ï†Î¹ÎºÏŽÎ½";
			case clean("BitcoinTalk Thread"):
				return "ÎÎ®Î¼Î± ÏƒÏ„Î¿ BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Î‘ÏÏ‡ÎµÎ¯Î±";
			case clean("GitHub Source"):
				return "GitHub Î Î·Î³Î±Î¯Î¿Ï‚ ÎšÏŽÎ´Î¹ÎºÎ±Ï‚";
			case clean("Suggested Command Line"):
				return "Î ÏÎ¿Ï„ÎµÎ¹Î½ÏŒÎ¼ÎµÎ½Î· Î•Î½Ï„Î¿Î»Î®";
			case clean("Pools"):
				return "Î Î¹ÏƒÎ¯Î½ÎµÏ‚ Î•Î¾ÏŒÏÏ…Î¾Î·Ï‚";
			case clean("P2Pool nodes"):
				return "ÎšÏŒÎ¼Î²Î¿Î¹ Ï„Î¿Ï… P2Pool";
			case clean("Run Your Own Node"):
				return "Î¤ÏÎ­Î¾Ï„Îµ Ï„Î¿Î½ Î´Î¹ÎºÏŒ ÏƒÎ±Ï‚ ÎºÏŒÎ¼Î²Î¿";
			case clean("Merge Mining Pools"):
				return "Î Î¹ÏƒÎ¯Î½ÎµÏ‚ Î£Ï…Î³Ï‡ÏŽÎ½ÎµÏ…ÏƒÎ·Ï‚ Ï„Î·Ï‚ Î•Î¾ÏŒÏÏ…Î¾Î·Ï‚";
			case clean("zpool - The miners multipool"):
				return "zpool - Î— Ï€Î¿Î»Ï…Ï€Î¹ÏƒÎ¯Î½Î± Ï„Ï‰Î½ Î±Î½Î¸ÏÎ±ÎºÏ‰ÏÏÏ‡Ï‰Î½";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¯ÎµÏ‚ & Î ÏŒÏÎ¿Î¹";
			case clean("Exchanges"):
				return "Î‘Î½Ï„Î±Î»Î»Î±ÎºÏ„Î®ÏÎ¹Î±";
			case clean("Other"):
				return "Î†Î»Î»Î±";
			case clean("Faucet"):
				return "Î’ÏÏÏƒÎ· ÎÎ¿Î¼Î¹ÏƒÎ¼Î¬Ï„Ï‰Î½";
			case clean("Testnet Information"):
				return "Î Î»Î·ÏÎ¿Ï†Î¿ÏÎ¯ÎµÏ‚ Î”Î¿ÎºÎ¹Î¼Î±ÏƒÏ„Î¹ÎºÎ¿Ï Î”Î¹ÎºÏ„ÏÎ¿Ï…";
			default:
					return $text;
		}
	}
	
	else if($lang == 'ru')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "ÐžÑ‚ÐºÑ€Ñ‹Ñ‚Ð° ÐºÐ°Ð¶Ð´Ð¾Ð¼Ñƒ";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad â€“ Ð¼ÑƒÐ»ÑŒÑ‚Ð¸-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‡Ð½Ð° - ÑÑ‚Ð¾ Ð¿ÐµÑ€Ð²Ð°Ñ Ð¼Ð¾Ð½ÐµÑ‚Ð°, Ð²Ð¾Ð¿Ð»Ð¾Ñ‚Ð¸Ð²ÑˆÐ°Ñ Ð² Ð¶Ð¸Ð·Ð½ÑŒ Ð¾Ð´Ð½Ð¾Ð²Ñ€ÐµÐ¼ÐµÐ½Ð½Ð¾ 5 Ñ…ÐµÑˆ Ñ„ÑƒÐ½ÐºÑ†Ð¸Ð¹, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÐ¼Ñ‹Ñ… Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°. Ð’ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð¸Ð¸ Ð¾Ñ‚ Ð‘Ð¸Ñ‚ÐºÐ¾Ð¸Ð½Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ñ€Ð¸Ð±Ñ‹Ð»ÑŒÐ½Ð¾ Ð¼Ð°Ð¹Ð½Ð¸Ñ‚ÑŒ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑ ÐÑÐ¸ÐºÐ¸ Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼ SHA256d, Myriad Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð° Ð´Ð»Ñ Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Ð‘ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð°";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€” 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "ÐœÐ°Ð¹Ð½ÐµÑ€ Ð¼Ð¾Ð¶ÐµÑ‚ Ð²Ñ‹Ð±Ñ€Ð°Ñ‚ÑŒ Ð»ÑŽÐ±Ð¾Ð¹ Ð¸Ð· 5 Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ñ‹Ñ… Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² â€“ SHA256d, Scrypt, Myr-Groestl, Skein, Ð¸Ð»Ð¸ Yescrypt â€“ ÐºÐ°Ð¶Ð´Ñ‹Ð¹ Ð¸Ð· Ð½Ð¸Ñ… Ð¸Ð¼ÐµÐµÑ‚ Ñ„Ð¸ÐºÑÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ð¾Ðµ Ñ†ÐµÐ»ÐµÐ²Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° â€“ 5 Ð¼Ð¸Ð½ÑƒÑ‚. Ð’ Ñ†ÐµÐ»Ð¾Ð¼, Ð±Ð»Ð¾Ðº Ð½Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑÑ Ð¿Ñ€Ð¸Ð±Ð»Ð¸Ð·Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ ÐºÐ°Ð¶Ð´ÑƒÑŽ Ð¼Ð¸Ð½ÑƒÑ‚Ñƒ. Ð’ Ð·Ð°Ð²Ð¸ÑÐ¸Ð¼Ð¾ÑÑ‚Ð¸ Ð¾Ñ‚ Ñ…ÐµÑˆ Ñ€ÐµÐ¹Ñ‚Ð° ÐºÐ°Ð¶Ð´Ð¾Ð³Ð¾ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð° Ñ€ÐµÐ³ÑƒÐ»Ð¸Ñ€ÑƒÐµÑ‚ÑÑ Ð¸ ÐµÐ³Ð¾ ÑÐ»Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ.
			Ð’ Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ñ ÐºÐ°Ðº ÐÑÐ¸ÐºÐ¸ Ð²Ð»Ð¸ÑÑŽÑ‚ Ð½Ð° Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³ Ð²Ð¸Ð´ÐµÐ¾ÐºÐ°Ñ€Ñ‚Ð°Ð¼Ð¸ Ñ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð¼ SHA256d Ð° Scrypt Ð½ÐµÐ¿Ñ€Ð¾Ð´ÑƒÐºÑ‚Ð¸Ð²ÐµÐ½, Ð¾ÑÑ‚Ð°Ð»ÑŒÐ½Ñ‹Ðµ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ñ‹ Ð´Ð¾Ð¼Ð¸Ð½Ð¸Ñ€ÑƒÑŽÑ‚ ÑÑ„ÐµÑ€Ñƒ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð° Ð²Ð¸Ð´ÐµÐ¾ÐºÐ°Ñ€Ñ‚Ð°Ð¼Ð¸. Ð¡Ð¿Ð¾ÑÐ¾Ð± Ð¼Ð½Ð¾Ð¶ÐµÑÑ‚Ð²ÐµÐ½Ð½Ñ‹Ñ… Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² ÑÐ¾Ð·Ð´Ð°Ñ‘Ñ‚ Ð½Ð¾Ð²Ñ‹Ð¹ ÑÐºÑÐºÐ»ÑŽÐ·Ð¸Ð²Ð½Ñ‹Ð¹ Ð¸ Ð¸Ð½Ð½Ð¾Ð²Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ð¹ Ð¿Ð¾Ð´Ñ…Ð¾Ð´ Ðº Ð¼ÐµÑ‚Ð¾Ð´Ð¸ÐºÐµ Ð·Ð°Ñ‰Ð¸Ñ‚Ñ‹ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ 51%, Ð¿Ð¾Ñ‚Ð¾Ð¼Ñƒ Ñ‡Ñ‚Ð¾ Ð´Ð»Ñ Ð·Ð°Ð¿Ð¾Ð»ÑƒÑ‡ÐµÐ½Ð¸Ñ 51% Ð±Ð»Ð¾ÐºÐ¾Ð² Ð¿Ð¾Ð½Ð°Ð´Ð¾Ð±Ð¸Ñ‚ÑÑ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ñ‹Ð¹ ÑÐ¿ÐµÐºÑ‚Ñ€ Ð¾Ð±Ð¾Ñ€ÑƒÐ´Ð¾Ð²Ð°Ð½Ð¸Ñ.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "ÐžÐ±ÑŠÐµÐ´Ð¸Ð½ÐµÐ½Ð½Ñ‹Ð¹ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³ Ñ€Ð°Ð·Ð»Ð¸Ñ‡Ð½Ñ‹Ð¼Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð°Ð¼Ð¸, Ð²ÐºÐ»ÑŽÑ‡Ð°ÑŽÑ‰Ð¸Ð¼Ð¸ Ð² ÑÐµÐ±Ñ SHA256d & Scrypt, Ð¿Ð¾Ð·Ð²Ð¾Ð»Ð¸Ð» Myriad Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð¿Ñ€ÐµÐ¸Ð¼ÑƒÑ‰ÐµÑÑ‚Ð²Ð¾ Ð·Ð° ÑÑ‡Ñ‘Ñ‚ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ñ‹Ñ… Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ñ‹Ñ… Ð²Ñ‹Ñ‡Ð¸ÑÐ»Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ñ… Ð¼Ð¾Ñ‰Ð½Ð¾ÑÑ‚ÐµÐ¹.";
			case clean("Fair Distribution"):
				return "Ð§ÐµÑÑ‚Ð½Ð¾Ðµ Ñ€Ð°ÑÐ¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "ÐžÑ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‚ Ð¿Ñ€ÐµÐ¼Ð°Ð¹Ð½ Ð¸ ÑÐ¿Ñ€ÑÑ‚Ð°Ð½Ð½Ñ‹Ðµ Ð²Ð¾Ð»ÑˆÐµÐ±Ð½Ñ‹Ðµ Ð±Ð»Ð¾ÐºÐ¸ Ñ Ð±Ð¾Ð»ÑŒÑˆÐ¾Ð¹ Ð½Ð°Ð³Ñ€Ð°Ð´Ð¾Ð¹. Ð’ÑÐµ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ð¸ ÑÐµÑ‚Ð¸ Ð¸Ð¼ÐµÑŽÑ‚ Ð¾Ð´Ð¸Ð½Ð°ÐºÐ¾Ð²Ñ‹Ðµ Ð²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚Ð¸ Ð´Ð»Ñ Ð¿Ð¾Ð»ÑƒÑ‡ÐµÐ½Ð¸Ñ Myriad Ð¿Ð¾ Ñ€Ñ‹Ð½Ð¾Ñ‡Ð½Ð¾Ð¹ ÑÑ‚Ð¾Ð¸Ð¼Ð¾ÑÑ‚Ð¸";
			// technology
			case clean("Multi-Algorithm"):
				return "ÐœÐ½Ð¾Ð¶ÐµÑÑ‚Ð²ÐµÐ½Ð½Ñ‹Ðµ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ñ‹";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ÐÐ»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ñ‹Ñ… Ð´Ð»Ñ ASIC, GPU Ð¸ CPU Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Ð”Ð²Ð° Ñ€Ð°ÑƒÐ½Ð´Ð° Ð´Ð»Ñ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð° Ñ…ÐµÑˆÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ SHA256d, Ð²Ð¿ÐµÑ€Ð²Ñ‹Ðµ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð½Ñ‹Ñ… Ð¿Ð¸Ð¾Ð½ÐµÑ€Ð¾Ð¼ ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑŽÑ‚ - uá´‰oÉ”Ê‡á´‰q.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Ð˜Ð·Ð½Ð°Ñ‡Ð°Ð»ÑŒÐ½Ð¾ ÑÐ¿Ñ€Ð¾ÐµÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ð¹ Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð° Ð¿Ð¾Ð´ CPU, Ñ‚ÐµÐ¿ÐµÑ€ÑŒ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÑ‚ÑÑ Ð´Ð»Ñ Ð´Ð¾Ð±Ñ‹Ñ‡Ð¸ Ð¼Ð½Ð¾Ð³Ð¸Ð¼Ð¸ Ð°Ð»Ñ‚ÐµÑ€Ð½Ð°Ñ‚Ð¸Ð²Ð½Ñ‹Ð¼Ð¸ Ð¼Ð¾Ð½ÐµÑ‚Ð°Ð¼Ð¸ Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ ASICs, Ð½Ð°Ñ‡Ð¸Ð½Ð°Ñ Ñ Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Ð¡Ð¿ÐµÑ†Ð¸Ñ„Ð¸Ñ‡Ð½Ñ‹Ð¹ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð´Ð»Ñ Myriad Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚ Ñ…ÐµÑˆ-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð° â€“ Groestl â€“ ÑÑ‚Ð¾ Ð¾Ð´Ð¸Ð½ Ð¸Ð· Ð¿ÑÑ‚Ð¸ Ñ„Ð¸Ð½Ð°Ð»Ð¸ÑÑ‚Ð¾Ð² NIST SHA-3 ÑÐ¾Ñ€ÐµÐ²Ð½Ð¾Ð²Ð°Ð½Ð¸Ñ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² Ñ…ÐµÑˆÐ¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ñ.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Ð•Ñ‰Ðµ Ð¾Ð´Ð¸Ð½ Ð¸Ð· Ð¿ÑÑ‚Ð¸ Ñ„Ð¸Ð½Ð°Ð»Ð¸ÑÑ‚Ð¾Ð² ÑÐ¾Ñ€ÐµÐ²Ð½Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¿Ð¾ Ñ…ÐµÑˆÐ°Ð¼ NIST SHA-3, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð±Ñ‹Ð» Ð²Ð¿ÐµÑ€Ð²Ñ‹Ðµ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½ Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Ð˜Ð·Ð½Ð°Ñ‡Ð°Ð»ÑŒÐ½Ð¾ ÑÐ¿Ñ€Ð¾ÐµÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð½Ñ‹Ð¹ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð¿Ð¾Ð´ CPU Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼ Qubit ÐºÐ¾Ð¼Ð±Ð¸Ð½Ð¸Ñ€ÑƒÐµÑ‚ 5 ÑƒÑ‡Ð°ÑÑ‚Ð½Ð¸ÐºÐ¾Ð² NIST SHA-3 ÑÐ¾Ñ€ÐµÐ²Ð½Ð¾Ð²Ð°Ð½Ð¸Ñ Ð¿Ð¾ Ñ…ÐµÑˆ-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð°Ð¼ â€“ Luffa, Cubehash, SHAvite, SIMD Ð¸ ECHO.";
			case clean("Merge Mining"):
				return "ÐžÐ±ÑŠÐµÐ´Ð¸Ð½ÐµÐ½Ð½Ñ‹Ð¹ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "ÐÐ°Ñ‡Ð¸Ð½Ð°Ñ Ñ Ð±Ð»Ð¾ÐºÐ° 4002000, Ð¾Ð±ÑŠÐµÐ´Ð¸Ð½ÐµÐ½Ð½Ñ‹Ð¹ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³ Ð´Ð¾ÑÑ‚ÑƒÐ¿ÐµÐ½ Ð´Ð»Ñ SHA256d Ð¸ Scrypt Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð². Ð­Ñ‚Ð¾ Ð¿Ð¾Ð·Ð²Ð¾Ð»Ð¸Ð»Ð¾ Myriad Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð¿Ñ€ÐµÐ¸Ð¼ÑƒÑ‰ÐµÑÑ‚Ð²Ð¾ Ð·Ð° ÑÑ‡Ñ‘Ñ‚ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ñ‹Ñ… Ñ…ÐµÑˆÑ€ÐµÐ¹Ñ‚Ð¾Ð², Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐµÐ¼Ñ‹Ñ… Ð² Ð´Ð°Ð½Ð½Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð´Ñ€ÑƒÐ³Ð¸Ð¼Ð¸ Ð¼Ð¾Ð½ÐµÑ‚Ð°Ð¼Ð¸, Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð¾Ð±ÐµÑÐ¿ÐµÑ‡Ð¸Ð»Ð¾ Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑ‚ÑŒ Ð±Ð»Ð¾ÐºÑ‡ÐµÐ¹Ð½Ð°.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "ÐžÐ±ÑŠÐµÐ´Ð¸Ð½ÐµÐ½Ð½Ñ‹Ð¹ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³, Ñ‚Ð°Ðº Ð¶Ðµ Ð¸Ð·Ð²ÐµÑÑ‚Ð½Ñ‹Ð¹ ÐºÐ°Ðº AuxPow, Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐµÑ‚ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ñ€ÐµÑÑƒÑ€ÑÑ‹, Ð·Ð°Ñ‚Ñ€Ð°Ñ‡Ð¸Ð²Ð°ÐµÐ¼Ñ‹Ðµ, Ðº Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ñƒ, Ð½Ð° Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³ uá´‰oÉ”Ê‡á´‰q Ð¸Ð»Ð¸ Lightcoin Ð´Ð»Ñ Ð¿Ð¾Ð´Ñ‚Ð²ÐµÑ€Ð¶Ð´ÐµÐ½Ð¸Ñ Ð²Ð°Ð»Ð¸Ð´Ð½Ð¾ÑÑ‚Ð¸ Ð±Ð»Ð¾ÐºÐ¾Ð² Ð² ÑÐµÑ‚Ð¸ Myriad Ð¿Ñ€Ð¸ ÑÑ‚Ð¾Ð¼ Ð½Ðµ Ð½ÐµÑÑ Ð½Ð¸ÐºÐ°ÐºÐ¾Ð¹ Ð´Ð¾Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾Ð¹ Ð½Ð°Ð³Ñ€ÑƒÐ·ÐºÐ¸.";
			case clean("Distribution"):
				return "Ð Ð°ÑÐ¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad Ð±Ñ‹Ð»Ð° Ð²Ñ‹Ð¿ÑƒÑ‰ÐµÐ½Ð° Ð² ÑÐµÑ‚ÑŒ 23 Ð¤ÐµÐ²Ñ€Ð°Ð»Ñ 2014 Ð³Ð¾Ð´Ð° Ð² 18:30 UTC";
			case clean("first mined block"):
				return "Ð¿ÐµÑ€Ð²Ñ‹Ð¹ Ð½Ð°Ð¹Ð´ÐµÐ½Ð½Ñ‹Ð¹ Ð±Ð»Ð¾Ðº";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " Ð¿Ð¾ÑÐ²Ð¸Ð»ÑÑ ÑÐ¿ÑƒÑÑ‚Ñ 4 Ð¼Ð¸Ð½ÑƒÑ‚Ñ‹, Ñ‚ÐµÐ¼ ÑÐ°Ð¼Ñ‹Ð¼ Ð¿Ð¾Ð´Ñ‚Ð²ÐµÑ€Ð¶Ð´Ð°Ñ Ñ‡Ñ‚Ð¾ Ð½Ðµ Ð±Ñ‹Ð»Ð¾ Ð½Ð¸ÐºÐ°ÐºÐ¾Ð³Ð¾ Ð¿Ñ€ÐµÐ¼Ð°Ð¹Ð½Ð°.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Ð˜Ð·Ð½Ð°Ñ‡Ð°Ð»ÑŒÐ½Ð¾, Ð½Ð°Ð³Ñ€Ð°Ð´Ð° ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÐ»Ð° 1,000 MYR, Ð¸ ÑƒÐ¿Ð¾Ð»Ð¾Ð²Ð¸Ð½Ð¸Ð²Ð°Ð»Ð°ÑÑŒ ÐºÐ°Ð¶Ð´Ñ‹Ðµ 967,680 Ð±Ð»Ð¾ÐºÐ¾Ð²(Ð¿Ñ€Ð¸Ð¼ÐµÑ€Ð½Ð¾ 48 Ð½ÐµÐ´ÐµÐ»ÑŒ). ÐœÐ°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ð¾Ðµ ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ Ð¼Ð¾Ð½ÐµÑ‚ â€“ 2 Ð¼Ð¸Ð»Ð»Ð¸Ð°Ñ€Ð´Ð° MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "ÐŸÐµÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»ÑŒÐ½Ð¾, Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÐ»Ð¾ 30 ÑÐµÐºÑƒÐ½Ð´, Ð¸Ð»Ð¸ 150 ÑÐµÐºÑƒÐ½Ð´ Ð½Ð° Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼. ÐÐ¾ 12 Ð¸ÑŽÐ»Ñ 2015 ÑÐ¾Ð¾Ð±Ñ‰ÐµÑÑ‚Ð²Ð¾ Ñ€ÐµÑˆÐ¸Ð»Ð¾ ÑƒÐ²ÐµÐ»Ð¸Ñ‡Ð¸Ñ‚ÑŒ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° Ð´Ð¾ 60 ÑÐµÐºÑƒÐ½Ð´, Ð¸Ð»Ð¸ 300 ÑÐµÐºÑƒÐ½Ð´ Ð½Ð° Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼. Ð”Ð°Ð½Ð½Ð¾Ðµ Ñ€ÐµÑˆÐµÐ½Ð¸Ðµ Ð²ÑÑ‚ÑƒÐ¿Ð¸Ð»Ð¾ Ð² ÑÐ¸Ð»Ñƒ Ñ Ð±Ð»Ð¾ÐºÐ° â„–1,401,001. Ð’ Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ñ, ÐºÐ¾Ð³Ð´Ð° ÑÐµÑ‚ÑŒ Myriad Ð¸Ð¼ÐµÐ»Ð° Ð½Ð¸Ð·ÐºÐ¸Ð¹ Ñ…ÐµÑˆ Ñ€ÐµÐ¹Ñ‚ Ð¸ Ð²Ñ‹ÑÐ¾ÐºÑƒÑŽ ÑÐ»Ð¾Ð¶Ð½Ð¾ÑÑ‚ÑŒ, ÑÑ€ÐµÐ´Ð½ÐµÐµ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° ÑÐ¾ÑÑ‚Ð°Ð²Ð»ÑÐ»Ð¾ Ð±Ð¾Ð»ÐµÐµ 50 ÑÐµÐºÑƒÐ½Ð´. Ð’ Ð´Ð¾Ð¿Ð¾Ð»Ð½ÐµÐ½Ð¸Ðµ Ð±Ñ‹Ð»Ð¾ Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡ÐµÐ½Ð¾ aux-Pow Ð´Ð»Ñ Scrypt Ð¸ SHA256d, Ñ‡Ñ‚Ð¾ ÑƒÐ²ÐµÐ»Ð¸Ñ‡Ð¸Ð»Ð¾ Ñ†ÐµÐ»ÐµÐ²Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° Ð¸ Ð¿Ñ€Ð¸Ð²ÐµÐ»Ð¾ Ðº Ð»ÑƒÑ‡ÑˆÐµÐ¹ ÑÐ¾Ð³Ð»Ð°ÑÐ¾Ð²Ð°Ð½Ð½Ð¾ÑÑ‚Ð¸ Ð² ÑÐµÑ‚Ð¸ Ð¼Ð¸Ð½ÑƒÑ Ð²Ð»Ð¸ÑÐ½Ð¸Ðµ Ð½Ð° Ñ‡ÐµÑÑ‚Ð½Ð¾ÑÑ‚ÑŒ Ñ€Ð°ÑÐ¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ñ ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad Ð·Ð°Ð¿ÑƒÑ‰ÐµÐ½Ð° Ð² Ñ„ÐµÐ²Ñ€Ð°Ð»Ðµ 2014 Ñ‡ÐµÐ»Ð¾Ð²ÐµÐºÐ¾Ð¼ Ñ Ð½Ð¸ÐºÐ¾Ð¼ 8bitcoder, Ð¸ Ð¿Ñ€ÐµÐ´ÑÑ‚Ð°Ð²Ð»ÑÐµÑ‚ ÑÐ¾Ð±Ð¾Ð¹ Ñ„Ð¾Ñ€Ðº ZtaCoin. Ð­Ñ‚Ð¾ Ð¿ÐµÑ€Ð²Ð°Ñ ÐºÑ€Ð¸Ð¿Ñ‚Ð¾ Ð²Ð°Ð»ÑŽÑ‚Ð°, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‰Ð°Ñ 5 POW Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² Ð´Ð»Ñ ÑƒÐ²ÐµÐ»Ð¸Ñ‡ÐµÐ½Ð¸Ñ Ð±ÐµÐ·Ð¾Ð¿Ð°ÑÐ½Ð¾ÑÑ‚Ð¸, Ð° Ñ‚Ð°ÐºÐ¶Ðµ Ð´Ð»Ñ Ð±Ð¾Ð»ÑŒÑˆÐµÐ³Ð¾ Ð¾Ñ…Ð²Ð°Ñ‚Ð° Ð¼Ð°Ð¹Ð½ÐµÑ€Ð¾Ð² Ñ Ñ€Ð°Ð·Ð½Ñ‹Ð¼Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð°Ð¼Ð¸ â€“ SHA256d Ð¸ Scrypt Ð´Ð»Ñ ASIC Ð¼Ð°Ð¹Ð½ÐµÑ€Ð¾Ð², Skein Ð¸ Myr-Groestl Ð´Ð»Ñ GPU Ð¼Ð°Ð¹Ð½ÐµÑ€Ð¾Ð², Qubit Ð´Ð»Ñ GPU Ð¸ Ð¦ÐŸÐ£ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°. HunterCoin, Ð·Ð°Ð¿ÑƒÑ‰ÐµÐ½Ð½Ð°Ñ Ð² ÐºÐ¾Ð½Ñ†Ðµ 2013, Ð½Ð° ÑÐ°Ð¼Ð¾Ð¼ Ð´ÐµÐ»Ðµ, Ð¿ÐµÑ€Ð²Ð°Ñ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð»Ð° Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² POW Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°(SHA256d Ð¸ Scrypt), Ð½Ð¾ Ð¾Ð½Ð° Ð±Ñ‹Ð»Ð° ÑÐ¿Ñ€Ð¾ÐµÐºÑ‚Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð° Ð½Ðµ Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°, Ð° Ð´Ð»Ñ Ð¸Ð³Ñ€ Ð½Ð° Ð¾ÑÐ½Ð¾Ð²Ðµ Ð±Ð»Ð¾ÐºÑ‡ÐµÐ¹Ð½Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ðµ Ð² Ð´Ð°Ð»ÑŒÐ½ÐµÐ¹ÑˆÐµÐ¹ Ð´Ð°Ð»Ð¸ Ð¶Ð¸Ð·Ð½ÑŒ Ð¼Ð½Ð¾Ð³Ð¸Ð¼ Ð°Ð»Ñ‚-ÐºÐ¾Ð¸Ð½Ð°Ð¼.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad Ð¿Ð¾Ñ€Ð¾Ð´Ð¸Ð»Ð° Ð½ÐµÑÐºÐ¾Ð»ÑŒÐºÐ¾ Ð°Ð½Ð°Ð»Ð¾Ð³Ð¾Ð² ÑÐµÐ±Ðµ, Ð¿ÐµÑ€Ð²Ñ‹Ð¹ Ð¸Ð· ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ñ… Ð±Ñ‹Ð» Saffroncoin Ñ‚Ð°Ðº Ð¶Ðµ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑŽÑ‰Ð¸Ð¹ 5 PoW Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð². Digitalcoin Ð¸ Digibyte ÑÐ¾Ð²ÐµÑ€ÑˆÐ¸Ð»Ð¸ hard-fork, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ 3 Ð¸ 5 PoW Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð², ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÐµÐ½Ð½Ð¾. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Ð’ Ð°Ð²Ð³ÑƒÑÑ‚Ðµ 2015 ÑÐµÑ‚ÑŒ Myriad Ð±Ñ‹Ð»Ð° Ñ…Ð°Ñ€Ð´-Ñ„Ð¾Ñ€ÐºÐ½ÑƒÑ‚Ð°, Ð´Ð»Ñ Ñ‚Ð¾Ð³Ð¾ Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð²ÐºÐ»ÑŽÑ‡Ð¸Ñ‚ÑŒ ÐµÐ´Ð¸Ð½Ñ‹Ð¹ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³ Ð½Ð° Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð°Ñ… â€“ Scrypt Ð¸ SHA256d, Ñ†ÐµÐ»ÑŒÑŽ Ð±Ñ‹Ð»Ð¾ Ð´Ð¾ÑÑ‚Ð¸Ð¶ÐµÐ½Ð¸Ðµ ÑÑ‚Ð°Ð±Ð¸Ð»ÑŒÐ½Ð¾Ð³Ð¾ Ñ…ÐµÑˆ Ñ€ÐµÐ¹Ñ‚Ð° ÑÐµÑ‚Ð¸ Ð½Ð° ÑÑ‚Ð¸Ñ… Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð°Ñ…. Ð’ Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ñ Ñ†ÐµÐ»ÐµÐ²Ð¾Ðµ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° Ð´Ð»Ñ ÐºÐ°Ð¶Ð´Ð¾Ð³Ð¾ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð° Ð¸Ð·Ð¼ÐµÐ½Ð¸Ð»Ð¸ Ð´Ð¾ 5 Ð¼Ð¸Ð½ÑƒÑ‚(Ð´Ð¾ ÑÑ‚Ð¾Ð³Ð¾ 2,5 Ð¼Ð¸Ð½ÑƒÑ‚Ñ‹), Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð¾Ð±Ñ‰ÐµÐµ Ð²Ñ€ÐµÐ¼Ñ Ð±Ð»Ð¾ÐºÐ° Ð´Ð»Ñ Ð²ÑÐµÑ… Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¾Ð² â€“ 1 Ð¼Ð¸Ð½ÑƒÑ‚Ñƒ(Ð´Ð¾ ÑÑ‚Ð¾Ð³Ð¾ 30 ÑÐµÐºÑƒÐ½Ð´). Ð­Ñ‚Ð¾ Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ðµ Ð²Ñ‹Ñ‚ÑÐ½ÐµÑ‚ ÐºÑ€Ð¸Ð²ÑƒÑŽ ÑÐ¼Ð¸ÑÑÐ¸Ð¸ Ð½Ð°Ð²ÐµÑ€Ñ… Ñ Ð¿Ð¾Ð¼Ð¾Ñ‰ÑŒÑŽ ÑÑ‚ÐµÐ¿ÐµÐ½Ð¸ 2Ñ…, Ð¸ ÑƒÑ€Ð°Ð²Ð½ÑÐµÑ‚ Ð¿Ñ€Ð¸Ð±Ð»Ð¸Ð·Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾ Ðº 20 Ð³Ð¾Ð´Ð°Ð¼.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "ÐŸÐ¾ÑÐ»ÐµÐ´Ð½ÑÑ Ð²ÐµÑ€ÑÐ¸Ñ 0.11.3.1, Ð²Ñ‹Ð¿ÑƒÑ‰ÐµÐ½Ð° 7Ð¾Ð³Ð¾ Ð°Ð¿Ñ€ÐµÐ»ÑŒ 2016. Ð¡Ð¼Ð¾Ñ‚Ñ€Ð¸Ñ‚Ðµ";
			case clean(" announcement & upgrade notes."):
				return "ÐÐ½Ð¾Ð½Ñ & ÑÐ¿Ð¸ÑÐ¾Ðº Ð¾Ð±Ð½Ð¾Ð²Ð»ÐµÐ½Ð¸Ð¹";
			// mining
			case clean("Getting Started"):
				return "Ð’Ð²ÐµÐ´ÐµÐ½Ð¸Ðµ";
			case clean("Download a "):
				return "Ð¡ÐºÐ°Ñ‡Ð°Ñ‚ÑŒ ";
			case clean("wallet"):
				return "ÐºÐ¾ÑˆÐµÐ»Ñ‘Ðº";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", ÑÐºÐ°Ñ‡Ð°Ð¹Ñ‚Ðµ Ð¼Ð°Ð¹Ð½ÐµÑ€ Ð½ÑƒÐ¶Ð½Ð¾Ð³Ð¾ Ñ‚Ð¸Ð¿Ð°, Ð½Ð°Ð¹Ð´Ð¸Ñ‚Ðµ Ð¿ÑƒÐ» Ð¸ Ð²Ð¿ÐµÑ€Ñ‘Ð´...";
			case clean("Mining Tutorial Video"):
				return "Ð’Ð¸Ð´ÐµÐ¾ Ð¾Ð±ÑƒÑ‡ÐµÐ½Ð¸Ðµ Ð¿Ð¾ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ñƒ";
			case clean("Watch on "):
				return "ÐŸÐ¾ÑÐ¼Ð¾Ñ‚Ñ€ÐµÑ‚ÑŒ Ð½Ð°";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Ð¡Ð¾Ñ„Ñ‚ Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°";
			case clean("Use any SHA256d compatible ASIC"):
				return "Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐ¹Ñ‚Ðµ Ð»ÑŽÐ±Ð¾Ð¹ SHA256d-ÑÐ¾Ð²Ð¼ÐµÑÑ‚Ð¸Ð¼Ñ‹Ð¹ ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÐ¹Ñ‚Ðµ Ð»ÑŽÐ±Ð¾Ð¹ Scrypt-ÑÐ¾Ð²Ð¼ÐµÑÑ‚Ð¸Ð¼Ñ‹Ð¹ ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer Ð´Ð»Ñ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð° Ñ‡ÐµÑ€ÐµÐ· OpenCL Ð½Ð° Ð²Ð¸Ð´ÐµÐ¾ÐºÐ°Ñ€Ñ‚Ðµ(GPU)";
			case clean("BitcoinTalk Thread"):
				return "Ð¢Ñ€ÐµÐ´ Ð½Ð° BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Ð¸ÑÐ¿Ð¾Ð»Ð½ÑÐµÐ¼Ñ‹Ðµ Ñ„Ð°Ð¹Ð»Ñ‹";
			case clean("GitHub Source"):
				return "GitHub Ð¸ÑÑ…Ð¾Ð´Ð½Ñ‹Ðµ Ñ„Ð°Ð¹Ð»Ñ‹";
			case clean("Suggested Command Line"):
				return "Ð’Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð² ÐºÐ¾Ð¼Ð°Ð½Ð´Ð½Ð¾Ð¹ ÑÑ‚Ñ€Ð¾ÐºÐµ";
			case clean("Pools"):
				return "ÐŸÑƒÐ»Ñ‹";
			case clean("P2Pool nodes"):
				return "P2Pool Ð½Ð¾Ð´Ñ‹";
			case clean("Run Your Own Node"):
				return "Ð”Ð»Ñ Ð·Ð°Ð¿ÑƒÑÐºÐ° ÑÐ¾Ð±ÑÑ‚Ð²ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð½Ð¾Ð´Ð°";
			case clean("Merge Mining Pools"):
				return "ÐŸÑƒÐ»Ñ‹ Ð¾Ð±ÑŠÐµÐ´Ð¸Ð½ÐµÐ½Ð½Ð¾Ð³Ð¾ Ð¼Ð°Ð¹Ð½Ð¸Ð½Ð³Ð°";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ Ð¼ÑƒÐ»ÑŒÑ‚Ð¸-Ð¿Ð¾Ð»";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ñ Ð¸ Ð ÐµÑÑƒÑ€ÑÑ‹";
			case clean("Exchanges"):
				return "ÐžÐ±Ð¼ÐµÐ½Ð½Ð¸ÐºÐ¸";
			case clean("Other"):
				return "Ð”Ñ€ÑƒÐ³Ð¾Ðµ";
			case clean("Faucet"):
				return "ÐšÑ€Ð°Ð½";
			case clean("Testnet Information"):
				return "Testnet Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ñ";
			default:
					return $text;
		}
	}
	
	else if($lang == 'tl')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Bukas para sa Lahat";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad â€“ Ang Myriad ay multi-algo â€“ ang unang coin na nagpatupad ng 5 sabayang hash functions. 
				Di gaya ng Bitcoin, na maari lamang mapakinabangan sa pagmimina gamit ang SHA256d, ang Myriad ay bukas para sa SHA256d ASICS, Scrypt ASICS, GPUS at CPUs.";
			case clean("Secure"):
				return "Ligtas";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ang nagmimina ay maaring gumamit ng alinman sa 5 algorithm â€“ SHA256d, Scrypt, Myr-Groestl, Skein, o Yescrypt â€“ bawat isa ay may target na 5 minutong bloke. 
				Sa pangkalahatan, ang isang bloke ay natatagpuan humigit-kumulang kada isang minuto. Ang hirap ng bawat algorithm ay naaapektuhan lamang ng sarili nitong hash rate. 
				Habang hindi na naging mabunga ang pagmimina sa GPU sa SHA256d Ð°t Scrypt dahil sa mga ASICs, ang mga iba pang algorithm ay patuloy na dinodomina ng pagmimina sa GPU. 
				Ang multi-algo na pamamaraan ay nagbibigay ng katangi-tanging 51% na paglaban dahil ibaâ€™t-ibang hardware ang kailangan para mahanap ang 51% ng mga bloke.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Ang merge mining ay pinagana sa SHA256d at Scrypt, dahilan upang ang Myriad ay makinabang sa napakalaking hash power na magagamit.";
			case clean("Fair Distribution"):
				return "Patas na Pamamahagi";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Walang premine o nakatagong yaman na hawak ng mga insider. Lahat ay may pantay-pantay na pagkakataon upang makakuha ng Myriad sa presyo ng merkado.";
			// technology
			case clean("Multi-Algorithm"):
				return "Multi-Algorithm";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorithm, para sa ASIC, GPU at CPU mining";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dalawang ikot ng SHA256d hashing algorithm, unang ginamit ng pinakaunang cryptocurrency â€“ ang Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dinisenyo upang maging pang CPU lamang na password hashing algorithm, ngayon ay minimina na kasama ng ASICs sa maraming altcoins, na nagsimula sa Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Isang variant na particular sa Myriad ng Groestl hash algorithm, isa sa limang finalist sa kompetisyong NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Isa pa sa limang finalist sa kompetisyong NIST SHA-3, unang ginamit ng Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Noong unaâ€™y pang CPU algorithm lamang, pinagsama-sama ng Qubit ang 5 magkakalaban sa NIST SHA-3 hash competition â€“ Luffa, Cubehash, SHAvite, SIMD Ð¸ ECHO.";
			case clean("Merge Mining"):
				return "Merge Mining";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Simula sa ika-4002000 na bloke, ang merge mining ay pinapayagan sa SHA256d at Scrypt algorithm. Ito ay pinapayagan sa Myriad para pakinabangan ang napakalaking hashrates na ginagamit ngayon ng mga coins na gumagamit sa mga algorithm na ito, na mas lalo pang nagsisiguro sa Myriad blockchain.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Ang merge mining, o AuxPow, ay nagbibigay daan upang ang trabahong nagawa para sa parent coin (gaya ng Bitcoin o Litecoin) ay magamit upang humanap ng mga balidong bloke sa blockchain ng Myriad, ng walang karagdagang bigat o epekto sa trabaho ng parent coin.";
			case clean("Distribution"):
				return "Pamamahagi";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Ang Myriad ay pinakawalan sa lahat noong Pebrero 23, 2014 ng  18:30 UTC";
			case clean("first mined block"):
				return "unang blokeng namina";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " dumating makalipas ang 4 minuto, katunayang walang nangyaring premine.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Ang unang reward ay 1,000 MYR, mangangalahati kada 967,680 bloke (humigit kumulang 48 na linggo). Kabuuang bilang ay humigit kumulang â€“ 2 Bilyong MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Noong una, ang layon ng blocktime ay 30 segundo, o 150 segundo kada algorithm. Noong ika-12 ng ÐulyÐ¾, 2015, nagpasya ang komunidad na taasan ang target blocktime sa 60 segundo, o 300 segundo kada algorithm, simula sa ika-1,401,001 na bloke. Noong panahong iyon, nahihirapan ang Myriad sa mababang has rate at malawak na hirap sa hopping sa Scrypt at SHA256d, dahilan upang ang aktwal na average block time ay humigit sa 50 segundo.
				Bukod sa pagpapagana ng aux-Pow sa Scrypt at SHA256d, ang pagtaas ng target block time ay nagbunga ng higit na consistency sa network, nang hindi naaapektuhan ang pagiging patas ng pamamahagi.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Ang Myriad ay inilunsad noong 2014 ni 8bitcoder, fork ito mula sa ZetaCoin. Ito ang unang cryptocurrency na gumamit ng 5 mga POW  algorithm sa kagustuhang pataasin ang seguridad at palawakin ang bilang ng mga taong maaring magmina nito - SHA256d at Scrypt para sa mga ASIC miners, Skein at Myr-Groestl para sa mga GPU miners, at Qubit para sa mga GPU at Ð¦ÐŸÐ£ miners. Ang HunterCoin, na inilunsad noong huling bahagi ng 2013, ay ang unang coin na gumamit ng maramihang mga POW algorithm(SHA256d at Scrypt), ngunit ito ay hindi nakatuon sa pagmimina, kundi sa isang blockchain-based na laro na lumikha ng malaking karamihan ng mga bagong coins.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Ang Myriad ang nagbigay-daan sa marami pang mga katulad nito,  nauna sa mga ito ang Saffroncoin, na gumamit din ng limang PoW algorithms. Digitalcoin at Digibyte ay parehong nag hard-fork upang gumamit ng 3 at 5 PoW algorithms. Ang Unitus ay isa pang 5-algo PoW coin na may ilang mga kaparehong PoW algorithms sa Myriad.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Noong Agosto 2015 Ang Myriad ay nag hard-fork upang bigyang-daan ang merge-mining sa kanilang Scrypt at SHA256d algorithms sa layuning pagandahin ang seguridad at makamit ang isang mas metatag na hashrate sa dalawang algorithm na iyon. Sa panahong ito ang target na block time ay 5 minuto (dating 2.5 minuto), upang makamit ang pangkalahatang block target time na 1 minuto (dating 30 segundo); Ang pagbabagong ito ay magpapataas sa emission curve ng 2Ñ…, sa humigit-kumulang na 20 taon.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Pinakabagong Bersyon ay 0.11.3.1, inilimbag noong ika-7 ng Abril 2016. Tingnan ";
			case clean(" announcement &amp; upgrade notes."):
				return " paunawa at tala ng upgrade";
			// mining
			case clean("Getting Started"):
				return "Pagsisimula";
			case clean("Download a "):
				return "Magdownload ng ";
			case clean("wallet"):
				return "pitaka";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", Magdownload ng angkop na pangmina, humanap ng pool at magmina...";
			case clean("Mining Tutorial Video"):
				return " Bidyong Nagtuturo ng Pagmimina ";
			case clean("Watch on "):
				return "Panuorin sa";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Software para sa Pagmimina";
			case clean("Use any SHA256d compatible ASIC"):
				return "Gumamit ng anumang SHA256d compatible na ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Gumamit ng anumang Scrypt compatible na ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer para sa OpenCL GPU mining";
			case clean("BitcoinTalk Thread"):
				return "thread sa BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Binaries";
			case clean("GitHub Source"):
				return "GitHub Source";
			case clean("Suggested Command Line"):
				return "Rekomendadong Command Line";
			case clean("Pools"):
				return "Mga Pool";
			case clean("P2Pool nodes"):
				return "Mga P2Pool nodes";
			case clean("Run Your Own Node"):
				return "Magpatakbo ng Sarili mong Node";
			case clean("Merge Mining Pools"):
				return "Mga Merge Mining Pools ";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ ang multipool ng mga nagmimina";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Impormasyon at mga Mapagkukunan";
			case clean("Exchanges"):
				return "Mga Palitan";
			case clean("Other"):
				return "Iba pa";
			case clean("Faucet"):
				return "Gripo";
			case clean("Testnet Information"):
				return "Impormasyon sa Testnet";
			default:
					return $text;
		}
	}
	
	else if($lang == 'fr')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Ouvert Ã  tous";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Le Myriad est multi-algorithmique - et la premiÃ¨re monnaie qui a mis en place cinq algorithmes d'extraction simultanÃ©s. Contrairement Ã  bitcoin, qui ne peut qu' Ãªtre extrait avec profit en utilisant SHA256d ASIC, le Myriad est ouvert Ã  SHA256d ASICS, Scrypt ASICS, aux cartes graphiques et processeurs.";
			case clean("Secure"):
				return "SÃ»r";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Un mineur peut sÃ©lectionner et utiliser l'un des cinq algorithmes - Dans SHA256d, le Scrypt, le Myr-Groestl, le Skein ou qubit  - chucun vise au temps parmi les blocs d'Ãªtre 5 minutes. Dans l'ensemble, un bloc est extrait environ chaque minute. Bien que la difficultÃ© de chaque algorithme n'est affectÃ©e que par son propre taux d'extraction. Alors que ASIC ont fait l'exploitation miniÃ¨re aux cartes graphiques pour SHA256d & Scrypt, les autres algorithmes sont encore dominÃ©s par l'exploitation miniÃ¨re par la carte graphique. L'approche multi-algorithmique offre une excellente rÃ©sistance contre une attaque de 51% en raison d'un certain nombre de diffÃ©rents matÃ©riels qui sont nÃ©cessaires pour trouver 51% des blocs."; 
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "La fusion de l'exploitation miniÃ¨re a Ã©tÃ© activÃ©e Ã  SHA256d & Scrypt, permettant Ã  Myriad de bÃ©nÃ©ficier de l'Ã©norme puissance miniÃ¨re disponible.";
			case clean("Fair Distribution"):
				return "RÃ©partition Ã©quitable";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Il n'y avait pas prÃ©-extraction ou fortunes cachÃ©es possedÃ©es par les initiÃ©s au debut. Tout le monde a une chance Ã©gale d'acquÃ©rir Myriad avec le prix du marchÃ©";
			// technology
			case clean("Multi-Algorithm"):
				return "Plusieurs-Algorithmes";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algorithmes qui permettent l'exploitation miniÃ¨re pour ASIC, processeurs et cartes graphiques :";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Deux tours de l'algorithme SHA256d, ont Ã©tÃ© utilisÃ©s d'abord par le bitcoin champion de la crypto-monnaie.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "DessinÃ© pour Ãªtre un algorithme d'extraction avec des processeurs, maintenant exploitÃ© avec ASICs dans de nombreux crypto-monnaie, en commenÃ§ant par Litecoin.
				MYR-Groestl";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "ä¸€Une variante spÃ©ciale de Groestl algorithme de hachage pour Myriad, est l'un des cinq finalistes dans les algorithmes du concours hash NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Un autre des cinq finalistes dans le hachage de la concurrence NIST SHA-3, a Ã©tÃ© utilisÃ© d'abord par le Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "A l'origine un algorithme pour processeurs, le qubit combine cinq concurrents dans le concours hash NIST SHA-3 - le Luffa, le Cubehash, l'SHAvite, SIMD et ECHO. ";
			case clean("Merge Mining"):
				return "Fusion MiniÃ¨re";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "A partir du bloc 4002000, a Ã©tÃ© la fusion des mines qui permet aux algorithmes SHA256d et Scrypt d'Ãªtre exploitÃ©s ensemble. Cela a permis Ã  Myriad de bÃ©nÃ©ficier des vitesses d'extraction Ã©normes qui sont en cours d'utilisation par des piÃ¨ces de monnaie en utilisant ces algorithmes pour assurer en outre la chaÃ®ne de transaction Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "La fusion de l'exploitation miniÃ¨re, ou Aux-Pow en anglais, permet le travail effectuÃ© pour une monnaie de parent (comme bitcoin ou Litecoin) d'Ãªtre utilisÃ© pour trouver des blocs valides Ã  la chaÃ®ne de transaction Myriad sans aucune charge ou impact supplÃ©mentaire sur la performance de la monnaie-parent.";
			case clean("Distribution"):
				return "Distribution";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Le Myriad a Ã©tÃ© publiÃ© le 23 FÃ©vrier, en 2014 Ã  18h30 UTC.";
			case clean("first mined block"):
				return " Le premier bloc est extrait ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "quatre minutes plus tard, identifiant ainsi qu'il n'y avait pas de prÃ©-extraction.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Le montant initial Ã©tait 1.000 MYR, qui a Ã©tÃ© rÃ©duit de moitiÃ© aprÃ¨s 967 680 blocs (environ 48 semaines plus tard). L'offre totale est environ 2 milliards MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Dans un premier temps, le bloc cible Ã©tait 30 secondes ou 150 secondes par algorithme. Le 12 Juillet 2015, la communautÃ© a dÃ©cidÃ© d'augmenter le temps du bloc cible en 60 secondes, soit 300 secondes par algorithme, qui a commencÃ© au bloc 1.401.001. A cette Ã©poque, le Myriad a souffert de la force d'extraction faible et une vaste migration des mineurs de Scrypt et SHA256d, provoquant la durÃ©e moyenne rÃ©elle de bloquer plus de 50 secondes. Outre la possibilitÃ© aux-POW pour Scrypt et SHA256d, l'augmentation du temps de bloc a Ã©tÃ© conÃ§u pour conduire Ã  un rÃ©seau plus cohÃ©rent, sans affecter l'Ã©quitÃ© de la distribution.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Le Myriad a Ã©tÃ© lancÃ© en FÃ©vrier 2014 par 8bitcoder et basÃ© sur Zetacoin. Il a Ã©tÃ© la premiÃ¨re crypto-monnaie qui a utilisÃ© cinq algorithmes de preuve du travail dans un effort pour accroÃ®tre la sÃ©curitÃ© et Ã©largir la base de personnes qui pourraient miner la monnaie avec les algorithmes SHA256d et Scrypt mineurs ASIC, Couronne et Myr-Groestl pour mineurs avec les cartes graphiques, et Qubit pour eux avec des cartes graphiques et processeurs. Le Huntercoin, qui a dÃ©butÃ© Ã  la fin de 2013, Ã©tait en fait la premiÃ¨re piÃ¨ce de monnaie qui a utilisÃ© plusieurs algorithmes de preuve du travail (SHA256d et Scrypt), mais l'Ã©picentre n'Ã©tait pas dans l'extaction, mais dans un jeu basÃ© sur la chaÃ®ne des transactions qui a produit la grande majoritÃ© de la nouvelle monnaie. ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Le Myriad a donnÃ© naissance Ã  plusieurs monnaies qui l'ont copiÃ©e, dont le premier Ã©tait le Saffroncoin, qui mettait Ã©galement en valeur cinq algorithmes PoW. Digitalcoin et Digibyte avec une si dure et fourchue utilisation de trois Ã  cinq algorithmes de preuve du travail parallÃ¨lement. Le Unitus est une autre monnaie qui partage de nombreux algorithmes de preuve du travail avec Myriad, et permet aux utilisateurs de fusionner l'exploitation miniÃ¨re entre les cinq algorithmes de preuve du travail qui sont disponibles. Le Auroracoin et Verge ont Ã©galement annoncÃ© des plans pour plusieurs algorithmes.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "En AoÃ»t 2015, le Myriad a Ã©tÃ© modifiÃ© pour permettre la fusion des mines pour SHA256d et Scrypt algorithmes dans un effort pour amÃ©liorer la sÃ©curitÃ© et de parvenir Ã  une exploitation miniÃ¨re plus stable sur ces deux algorithmes. DÃ¨s ce moment le temps de bloc pour chaque algorithme a Ã©galement changÃ© en cinq minutes (auparavant 2,5 minutes), pour obtenir le temps total de bloc d'une minute (auparavant 30 secondes). Ce changement permettra de prolonger la courbe d'Ã©mission avec un agent 2x, Ã  environ 20 ans.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La derniÃ¨re version est la 0.11.3.1, qui a Ã©tÃ© publiÃ©e le 7 Avril 2016. Voir ";
			case clean(" announcement &amp; upgrade notes."):
				return " l'annonce pour mettre Ã  niveau les notes.";
			// mining
			case clean("Getting Started"):
				return "En commenÃ§ant";
			case clean("Download a "):
				return "TÃ©lÃ©charger ";
			case clean("wallet"):
				return "porte-monnaie";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " et le programme de l'exploitation miniÃ¨re, trouvez une piscine miniÃ¨re et commencez.";
			case clean("Mining Tutorial Video"):
				return "Guide de la vidÃ©o Ã  l'extraction miniÃ¨re.";
			case clean("Watch on "):
				return "voir en";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "Logiciel d'extraction";
			case clean("Use any SHA256d compatible ASIC"):
				return "Utilisez un SHA256d ASIC compatible";
			case clean("Use any Scrypt compatible ASIC"):
				return "Utilisez un ASIC compatible Scrypt";
			case clean("sgminer for OpenCL GPU mining"):
				return " Le sgminer pour OpenCL extraction en utilisant des Cartes Graphiques";
			case clean("BitcoinTalk Thread"):
				return "Fil Ã  BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Documents";
			case clean("GitHub Source"):
				return "GitHub Code source";
			case clean("Suggested Command Line"):
				return "Ordre recommandÃ©e";
			case clean("Pools"):
				return "Piscines d'extraction";
			case clean("P2Pool nodes"):
				return "Noeud du P2Pool";
			case clean("Run Your Own Node"):
				return "Lancez votre propre noeud";
			case clean("Merge Mining Pools"):
				return "Piscines pour la fusion d'extraction";
			case clean("zpool - The miners multipool"):
				return "zpool - La multi-piscine des mineurs";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Information et Ressources";
			case clean("Exchanges"):
				return "Echanges";
			case clean("Other"):
				return "Autres";
			case clean("Faucet"):
				return "Robinet de monnaie";
			case clean("Testnet Information"):
				return "Informations d'un rÃ©seau d'Ã©preuve";
			default:
					return $text;
		}
	}
	
	if($lang == 'id')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Terbuka untuk semua";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad adalah multi algoritma â€“ Merupakan koin yang pertama kali mengimplementasikan 5 fungsi hash secara simultan. Tidak seperti bitcoin, yang hanya menguntungkan jika ditambang menggunakan  SHA256d ASIC, Myriad terbuka untuk penambangan menggunakan SHA256d ASIC, Scrypt ASIC, GPU &amp; CPU.";

			case clean("Secure"):
				return "Aman";

			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Setiap penambang dapat memilih untuk menambang menggunakan salah satu dari 5 algoritma â€” SHA256d, Scrypt, Myr-Groestl, Skein atau Yescrypt â€” Tiap algoritma mempunyai 5 menit untuk target waktu bloknya. Secara garis besar, tiap blok ditemukan sekitar 1 menit sekali. Tingkat kesulitan setiap algoritma dipengaruhi oleh 'hash rate' masing- masing algoritma tersebut.
				Ketika ASIC mengalahkan penambangan menggunakan GPU pada SHA256d &amp; Scrypt tidak produktif, algoritmas yang lain masih di dominasi oleh GPU.
				Pendekatan multi algoritma menawarkan resistansi  yang luar biasa terhadap serangan  51%, karena beraneka macam perangkat keras diperlukan untuk mendapatkan blok sebanyak 51%."; 

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Penambangan terpadu telah diaktifkan untuk SHA256d & Scrypt, memberikan keuntungan pada Myriad dari daya hash yang besar tersebut.";

			case clean("Fair Distribution"):
				return "Distribusi yang Adil ";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Tidak ada penambangan awal sebelumnya atau keuntungan tersembunyi. Semua orang mempunyai kesempatan yang sama untuk memiliki  Myriad pada harga pasar";

			// technology
			case clean("Multi-Algorithm"):
				return "Multi Algoritma";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algoritma, disediakan untuk penambang yang menggunakan ASIC, GPU dan CPU:";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dua ronde dari algoritma SHA256d, pertama kali digunakan oleh pelopor kriptokurensi yaitu bitcoin.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dengan desain awal ditujukan hanya untuk CPU- dengan penggunaan kata sandi untuk algoritmanya, saat ini ditambang menggunakan ASIC pada banyak koin alternatif, dimulai dengan Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Myriad merupakan varian spesifik dari algoritma Groestl, salah satu dari lima finalis pada kompetisi hash NIST SHA-3.";

			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Salah satu dari lima finalis pada kompetisi hash NIST SHA-3, yang digunakan pertama kali oleh Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Algoritma yang semula hanya ditujukan untuk CPU, Qubit mengkombinasikan 5 algoritma yang saling bersaing pada kompetisi hash NIST SHA-3 â€“ yaitu Luffa, Cubehash, SHAvite, SIMD dan ECHO. ";

			case clean("Merge Mining"):
				return "Penambangan terpadu";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Saat blok 4002000, penambangan terpadu telah dilakukan dengan algoritma SHA256d dan Scrypt.  Hal ini sangat menguntungkan bagi Myriad, didapatkan hashrate yang sangat besar yang dihasilkan oleh koin lain yang juga menggunakan algoritma ini, pada akhirnya blockchain Myriad mendapatkan pengamanan yang lebih baik.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Pada penambangan terpadu, atau  Aux Pow,  dimana pekerjaan yang dilakukan untuk koin induk (seperti bitcoin atau litecoin) digunakan untuk mendapatkan blok pada blockchain Myriad, dengan tidak ada beban ekstra atau dampak performansi pada koin induk.";

			case clean("Distribution"):
				return "Distribusi";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad dilepas ke umum pada tanggal 23 Februari 2014 jam 18:30 UTC.";

			case clean("first mined block"):
				return " Blok yang pertama dari penambangan ";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "didapatkan 4 menit kemudian, yang membuktikan bahwa tidak ada penambangan awal sebelumnya.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Imbalan awal adalah 1.000 MYR, menjadi separuh setiap 967.680 blok sekali (sekitar 48 minggu).  Suplai total sekitar 2 milyar MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Awalnya, target waktu  mendapatkan blok adalah 30 detik, atau 150 detik per algoritma, Pada 12 Juli 2015, komunitas memutuskan untuk meningkatkan target waktu blok menjadi 60 detik, atau 300 detik per algoritma, dimulai pada blok 1.401.001. Saat itu, Myriad memiliki masalah yang didapat dari hashrate yang rendah dan tingkat kesulitan melonjak pada algoritma Scrypt dan SHA256d, yang menyebabkan rata- rata waktu blok lebih dari 50 detik.
				Sebagai tambahan dari pengaktifan Aux-PoW pada Scrypt dan SHA256d, yaitu meningkatkan target waktu blok yang pada akhirnya meningkatkan konsistensi dalam jaringan, tanpa mempunyai efek pada distribusi ";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad dilluncurkan pada Februari 2014 oleh 8bitcoder, yang mengambil cabang dari Zetacoin. Kriptokurensi yang pertama kali menggunakan 5 algoritma proof of work. Dalam upaya untuk meningkatkan keamanan dan meningkatkan jumlah penambang yang bisa menambang Myriad â€“ SHA256d dan Scrypt untuk penambang menggunakan ASIC, Skein dan Myr-Groestl untuk penambang menggunakan GPU, dan Qubit untuk penambang menggunakan GPU dan CPU. Huntercoin, yang diluncurkan akhir 2013, adalah koin yang pertama kali menggunakan multi algoritma PoW (SHA256d dan Scrypt), akan tetapi fokusnya bukan pada penambangan, melainkan lebih pada permainan berbasis blockchain yang menghasilkan sebagian besar dari koin tersebut. ";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad mengalami beberapa kali spin- off, pertama kali adalah Saffroncoin, yang juga menggunakan lima algoritma PoW. Sedangkan Digitalcoin dan Digibyte masing- masing menggunakan tiga algoritma PoW dan lima algoritma PoW. Unitus adalah koin yang juga menggunakan lima algoritma PoW seperti Myriad, yang mana semua algoritma tersebut dapat digunakan untuk penambangan terpadu. Auroracoin dan Verge juga mengumumkan rencana untuk berubah menjadi multi- algo.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Pada Agustus 2015, Myriad mengalami pembaharuan sehingga dapat dilakukan penambangan terpadu untuk algoritma SHA256d dan Scrypt, hal ini bertujuan untuk meningkatkan factor keamanan dan mendapatkan hashrate yang lebih stabil untuk kedua algoritma tersebut. Saat ini target waktu blok untuk tiap algoritma juga mengalami perubahan menjadi 5 menit ( dari sebelumnya 2,5 menit), untuk mendapatkan target waktu blok 1 menit secara keseluruhan (dari sebelumnya 30 detik); perubahan ini akan memperbesar kurva emisi dengan 2X faktor perkalian, menjadi sekitar 20 tahun.";

			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Versi terbaru adalahs 0.11.3.1, diluncurkan tanggal 7 April 2016. Lihat ";

			case clean(" announcement &amp; upgrade notes."):
				return " pengumuman &amp; catatan terbaru";

			// mining
			case clean("Getting Started"):
				return "Yang diperlukan";

			case clean("Download a "):
				return "Unduh ";

			case clean("wallet"):
				return "dompet";

			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " unduh tipe perangkat lunak dari penambang, daftar pool dan mulai...";

			case clean("Mining Tutorial Video"):
				return "Video Cara Penambangan";

			case clean("Watch on "):
				return "Lihat di";

			case clean ("Youtube"):
				return "Youtube.";

			case clean("Mining Software"):
				return "Perangkat Lunak Penambang";

			case clean("Use any SHA256d compatible ASIC"):
				return "Gunakan ASIC dengan kompatibilitas SHA256d";

			case clean("Use any Scrypt compatible ASIC"):
				return "Gunakan ASIC dengan kompatibilitas Scrypt";

			case clean("sgminer for OpenCL GPU mining"):
				return " Sgminer untuk penambangan menggunakan OpenCL GPU";

			case clean("BitcoinTalk Thread"):
				return "Thread pada BitcoinTalk";

			case clean("Windows Binaries"):
				return "Binari Windows";

			case clean("GitHub Source"):
				return "Kode sumber di GitHub ";

			case clean("Suggested Command Line"):
				return "Saran untuk baris perintah";

			case clean("Pools"):
				return "Pool";

			case clean("P2Pool nodes"):
				return "Node dari P2Pool";

			case clean("Run Your Own Node"):
				return "Jalankan Node mu sendiri";

			case clean("Merge Mining Pools"):
				return "Pool untuk Penambangan terpadu";

			case clean("zpool - The miners multipool"):
				return "zpool â€“ penambangan dengan multipool";

			case clean("MultiPool"):
				return "MultiPool";

			// services
			case clean("Information &amp; Resources"):
				return "Informasi &amp; Sumber";

			case clean("Exchanges"):
				return "Penukaran";

			case clean("Other"):
				return "Lain- lain";

			case clean("Faucet"):
				return "Faucet";

			case clean("Testnet Information"):
				return "Informasi mengenai testnet";
				
			default:
					return $text;
		}
	}
	
	else if($lang == 'bg')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Ð”Ð¾ÑÑ‚ÑŠÐ¿Ð½Ð° Ð·Ð° Ð²ÑÐµÐºÐ¸";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (ÐœÐ¸Ñ€Ð¸Ð°Ð´) Ðµ Ð¿ÑŠÑ€Ð²Ð°Ñ‚Ð° Ð¼ÑƒÐ»Ñ‚Ð¸-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‡Ð½Ð° ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑƒÑ‚Ð°, ÐºÐ¾ÑÑ‚Ð¾ Ð¾Ð±ÐµÐ´Ð¸Ð½ÑÐ²Ð° Ð² ÑÐµÐ±Ðµ ÑÐ¸ 5 ÐµÐ´Ð½Ð¾Ð²Ñ€ÐµÐ¼ÐµÐ½Ð½Ð¸ ÑˆÐ¸Ñ„Ñ€Ð¾Ð²Ð°Ñ‡Ð½Ð¸ Ñ„ÑƒÐ½ÐºÑ†Ð¸Ð¸. Ð—Ð° Ñ€Ð°Ð·Ð»Ð¸ÐºÐ° Ð¾Ñ‚ Ð‘Ð¸Ñ‚ÐºÐ¾Ð¹Ð½, ÐºÐ¾ÑÑ‚Ð¾ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð±ÑŠÐ´Ðµ Ð´Ð¾Ð±Ð¸Ñ‚Ð° ÑÐ°Ð¼Ð¾ ÑÑŠÑ SHA256d ÐÐ¡Ð˜Ðš, Myriad Ðµ Ð´Ð¾ÑÑ‚ÑŠÐ¿Ð½Ð° Ð·Ð° Ð¼Ð¸Ð½ÑŒÐ¾Ñ€Ð¸ Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‰Ð¸ SHA256d Ð¸ Scrypt ÐÐ¡Ð˜Ðš (ASIC), ÐºÐ°ÐºÑ‚Ð¾ Ð¸ Ð·Ð° Ð²Ð¸Ð´ÐµÐ¾ ÐºÐ°Ñ€Ñ‚Ð¸ (GPU) Ð¸ Ð¿Ñ€Ð¾Ñ†ÐµÑÐ¾Ñ€Ð¸ (CPU)";
			case clean("Secure"):
				return "Ð¡Ð¸Ð³ÑƒÑ€Ð½Ð¾ÑÑ‚";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€” 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "ÐœÐ¸Ð½ÑŒÐ¾Ñ€ÑŠÑ‚ Ð¼Ð¾Ð¶Ðµ Ð´Ð° Ð¸Ð·Ð±ÐµÑ€Ðµ ÐºÐ¾Ð¹Ñ‚Ð¾ Ð¸ Ð´Ð° Ðµ Ð¾Ñ‚ ÑÐ»ÐµÐ´Ð½Ð¸Ñ‚Ðµ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸ Ð·Ð° ÑÐ²Ð¾Ð¸Ñ‚Ðµ Ð¾Ð¿ÐµÑ€Ð°Ñ†Ð¸Ð¸ - SHA256d, Scrypt, Myr-Groestl, Skein, Ð¸Ð»Ð¸ Yescrypt, ÐºÐ°Ñ‚Ð¾ Ð²ÑÐµÐºÐ¸ Ð±Ð»Ð¾Ðº Ð¸Ð¼Ð° ÐºÑ€Ð°Ð¹Ð½Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð¾Ñ‚ 5 Ð¼Ð¸Ð½ÑƒÑ‚Ð¸. Ð¡Ñ€ÐµÐ´Ð½Ð¾Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð·Ð° Ð½Ð°Ð¼Ð¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ð±Ð»Ð¾Ðº Ðµ 1 Ð¼Ð¸Ð½ÑƒÑ‚Ð°. Ð’ÑÐµÐºÐ¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼ Ñ€Ð°Ð·Ð¿Ð¾Ð»Ð°Ð³Ð° ÑÑŠÑ ÑÐ¾Ð±ÑÑ‚Ð²ÐµÐ½Ð° Ñ‚Ñ€ÑƒÐ´Ð½Ð¾ÑÑ‚, ÐºÐ¾ÑÑ‚Ð¾ Ð·Ð°Ð²Ð¸ÑÐ¸ Ð¾Ñ‚ ÑÐ¸Ð»Ð°Ñ‚Ð° Ð½Ð° ÑÑŠÐ¾Ñ‚Ð²ÐµÑ‚Ð½Ð°Ñ‚Ð° Ð¼Ñ€ÐµÐ¶Ð°. Ð’ÑŠÐ¿Ñ€ÐµÐºÐ¸ Ñ‡Ðµ ÐÐ¡Ð˜Ðš-Ð¸Ñ‚Ðµ Ð´Ð¾Ð¼Ð¸Ð½Ð¸Ñ€Ð°Ñ‚ Ð² SHA256d Ð¸ Scrypt Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‚Ðµ, Ð¾ÑÑ‚Ð°Ð½Ð°Ð»Ð¸Ñ‚Ðµ  Ð²ÑÐµ Ð¾Ñ‰Ðµ ÑÐ° Ð´Ð¾ÑÑ‚ÑŠÐ¿Ð½Ð¸ Ð·Ð° Ð²Ð¸Ð´ÐµÐ¾ ÐºÐ°Ñ€Ñ‚Ð¸Ñ‚Ðµ. ÐœÑƒÐ»Ñ‚Ð¸-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‡Ð½Ð¸Ñ Ð¿Ð¾Ð´Ñ…Ð¾Ð´ Ð¿Ñ€Ð°Ð²Ð¸ Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð°  Ð¸Ð·ÐºÐ»ÑŽÑ‡Ð¸Ñ‚ÐµÐ»Ð½Ð¾ Ð¸Ð·Ð´ÑŠÑ€Ð¶Ð»Ð¸Ð²Ð° Ð½Ð° Ð°Ñ‚Ð°ÐºÐ¸ Ð¾Ñ‚ Ñ‚Ð¸Ð¿Ð° 51% Ð·Ð°Ñ€Ð°Ð´Ð¸ Ð½ÑƒÐ¶Ð´Ð°Ñ‚Ð° Ð½Ð° Ñ€Ð°Ð·Ð½Ð¾Ð¾Ð±Ñ€Ð°Ð·ÐµÐ½ Ñ…Ð°Ñ€Ð´ÑƒÐµÑ€ Ð½ÑƒÐ¶ÐµÐ½ Ð·Ð° Ð½Ð°Ð¼Ð¸Ñ€Ð°Ð½Ðµ Ð½Ð° 51% Ð¾Ñ‚ Ð±Ð»Ð¾ÐºÐ¾Ð²ÐµÑ‚Ðµ.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Ð¡Ð¼ÐµÑÐµÐ½Ð¸Ñ Ð´Ð¾Ð±Ð¸Ð² Ðµ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½ Ð½Ð° SHA256d Ð¸ Scrypt, ÐºÐ¾ÐµÑ‚Ð¾ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐ²Ð° Ð½Ð° Myriad Ð´Ð° ÑÐµ Ð²ÑŠÐ·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¾Ñ‚ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ð°Ñ‚Ð° Ñ…ÐµÑˆÐ¸Ñ€Ð°Ñ‰Ð° Ð¼Ð¾Ñ‰Ð½Ð¾ÑÑ‚.";
			case clean("Fair Distribution"):
				return "Ð Ð°Ð²Ð½Ð¾ Ñ€Ð°Ð·Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Myriad Ð½Ðµ Ñ€Ð°Ð·Ð¿Ð¾Ð»Ð°Ð³Ð° Ñ Ð¿Ñ€ÐµÐ´Ð²Ð°Ñ€Ð¸Ñ‚ÐµÐ»ÐµÐ½ Ð´Ð¾Ð±Ð¸Ð² Ð¸Ð»Ð¸ Ñ‚Ð°Ð¹Ð½Ð¸ Ð²ÑŠÑ‚Ñ€ÐµÑˆÐ½Ð¸ Ð·Ð°Ð¿Ð°ÑÐ¸. Ð’ÑÐµÐºÐ¸ Ð¸Ð¼Ð° Ñ€Ð°Ð²ÐµÐ½ ÑˆÐ°Ð½Ñ Ð´Ð° ÑÐµ ÑÐ´Ð¾Ð±Ð¸Ðµ Ñ Ð½ÐµÐ³Ð¾ Ð½Ð° Ñ‚ÐµÐºÑƒÑ‰Ð°Ñ‚Ð° Ð¿Ð°Ð·Ð°Ñ€Ð½Ð° Ñ†ÐµÐ½Ð°";
			// technology
			case clean("Multi-Algorithm"):
				return "ÐœÑƒÐ»Ñ‚Ð¸-Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼Ð° Ð¾Ñ‚Ð³Ð¾Ð²Ð°Ñ€ÑÑ‰Ð¸ Ð·Ð° ASIC, CPU Ð¸ GPU Ð´Ð¾Ð±Ð¸Ð²:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Ð”Ð²Ðµ Ð¿Ð¾Ð²Ñ‚Ð¾Ñ€ÐµÐ½Ð¸Ñ Ð¾Ñ‚ SHA256d Ñ…ÐµÑˆÐ¸Ñ€Ð°Ð½Ðµ, Ð¿ÑŠÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»Ð½Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ð½Ð¾ Ð¾Ñ‚ Ð‘Ð¸Ñ‚ÐºÐ¾Ð¹Ð½";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Ð¡ÑŠÐ·Ð´Ð°Ð´ÐµÐ½ Ð´Ð° Ð±ÑŠÐ´Ðµ Ñ…ÐµÑˆÐ¸Ñ€Ð°Ñ‰ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼ ÑÐ°Ð¼Ð¾ Ð·Ð° Ð¿Ñ€Ð¾Ñ†ÐµÑÐ¾Ñ€Ð¸, ÐºÐ¾Ð¹Ñ‚Ð¾ Ð² Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ð° ÑÐµ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚Ð²Ð° Ð¾Ñ‚ ÐÐ¡Ð˜Ðš-Ð¸ Ð² Ñ€Ð°Ð·Ð»Ð¸Ñ‡Ð½Ð¸ ÐºÑ€Ð¸Ð¿Ñ‚Ð¾Ð²Ð°Ð»ÑƒÑ‚Ð¸ ÐºÐ°Ñ‚Ð¾ Litecoin";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Ð¡Ð¿ÐµÑ†Ð¸Ð°Ð»ÐµÐ½ Myriad Ð²Ð°Ñ€Ð¸Ð°Ð½Ñ‚ Ð½Ð° Groestl Ñ…ÐµÑˆÐ¸Ñ€Ð°Ñ‰Ð¸Ñ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼, ÐµÐ´Ð¸Ð½ Ð¾Ñ‚ Ð¿ÐµÑ‚Ñ‚Ðµ Ñ„Ð¸Ð½Ð°Ð»Ð¸ÑÑ‚Ð¸ Ð² NIST SHA-3 ÑÑŠÑÑ‚ÐµÐ·Ð°Ð½Ð¸ÐµÑ‚Ð¾ Ð¿Ð¾ Ñ…ÐµÑˆÐ¸Ñ€Ð°Ð½Ðµ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "ÐžÑ‰Ðµ ÐµÐ´Ð¸Ð½ Ð¾Ñ‚ Ð¿ÐµÑ‚Ñ‚Ðµ Ñ„Ð¸Ð½Ð°Ð»Ð¸ÑÑ‚Ð° Ð² NIST SHA-3 ÑÑŠÑÑ‚ÐµÐ·Ð°Ð½Ð¸ÐµÑ‚Ð¾, Ð¿ÑŠÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»Ð½Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ð½ Ð¾Ñ‚ Skeincoin";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "ÐŸÑŠÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»Ð½Ð¾ - Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼ ÑÐ°Ð¼Ð¾ Ð·Ð° Ð¿Ñ€Ð¾Ñ†ÐµÑÐ¾Ñ€Ð¸, Qubit Ð¾Ð±ÐµÐ´Ð¸Ð½ÑÐ²Ð° Ð² ÑÐµÐ±Ðµ ÑÐ¸ 5 Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼Ð° Ð¾Ñ‚ NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD Ð¸ ECHO";
			case clean("Merge Mining"):
				return "Ð¡Ð»ÑÑ‚ Ð´Ð¾Ð±Ð¸Ð²";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "ÐžÑ‚ Ð±Ð»Ð¾Ðº 4002000 ÑÐ»ÑÑ‚Ð¾Ñ‚Ð¾ Ð¼Ð¸Ð½Ð¸Ñ€Ð°Ð½Ðµ Ðµ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ð¾ Ð½Ð° SHA256d Ð¸ Scrypt Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‚Ðµ. Ð¢Ð¾Ð²Ð° Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐ²Ð° Ð½Ð° Myriad Ð´Ð° ÑÐµ Ð²ÑŠÐ·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¾Ñ‚ Ð¾Ð³Ñ€Ð¾Ð¼Ð½Ð°Ñ‚Ð° Ñ…ÐµÑˆÐ¸Ñ€Ð°Ñ‰Ð° Ð¼Ð¾Ñ‰Ð½Ð¾ÑÑ‚, ÐºÐ¾ÑÑ‚Ð¾ Ð² Ð¼Ð¾Ð¼ÐµÐ½Ñ‚Ð° ÑÐµ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¾Ñ‚ Ð¼Ð¾Ð½ÐµÑ‚Ð¸, ÑÑŠÑ‰Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‰Ð¸ Ñ‚ÐµÐ·Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸, Ð´Ð¾Ð¿ÑŠÐ»Ð½Ð¸Ñ‚ÐµÐ»Ð½Ð¾ Ð¿Ð¾Ð´ÑÐ¸Ð»Ð²Ð°Ð¹ÐºÐ¸ Myriad Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð°";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Ð¡Ð»ÐµÑ‚Ð¸Ñ Ð´Ð¾Ð±Ð¸Ð² (AuxPow) Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐ²Ð° Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ñ‚Ð° Ð¸Ð·Ð²ÑŠÑ€ÑˆÐµÐ½Ð° Ð·Ð° ÑÑ…Ð¾Ð´Ð½Ð° Ð¼Ð¾Ð½ÐµÑ‚Ð° ÐºÐ°Ñ‚Ð¾ Bitcoin Ð¸Ð»Ð¸ Litecoin Ð´Ð° Ð±ÑŠÐ´Ðµ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ð½Ð° Ð·Ð° Ð½Ð°Ð¼Ð¸Ñ€Ð°Ð½Ðµ Ð½Ð° Ð±Ð»Ð¾ÐºÐ¾Ð²Ðµ Ð² Myriad Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð°, Ð±ÐµÐ· Ð´Ð¾Ð¿ÑŠÐ»Ð½Ð¸Ñ‚ÐµÐ»Ð½Ð¾ Ð½Ð°Ñ‚Ð¾Ð²Ð°Ñ€Ð²Ð°Ð½Ðµ Ð²ÑŠÑ€Ñ…Ñƒ Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð° Ð½Ð° Ð²ÑŠÐ¿Ñ€Ð¾ÑÐ½Ð°Ñ‚Ð° ÑÑ…Ð¾Ð´Ð½Ð° Ð¼Ð¾Ð½ÐµÑ‚Ð°";
			case clean("Distribution"):
				return "Ð Ð°Ð·Ð¿Ñ€ÐµÐ´ÐµÐ»ÐµÐ½Ð¸Ðµ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad Ð·Ð° Ð¿ÑŠÑ€Ð²Ð¸ Ð¿ÑŠÑ‚ Ðµ Ð¿ÑƒÑÐ½Ð°Ñ‚Ð° Ð½Ð° 23 Ñ„ÐµÐ²Ñ€ÑƒÐ°Ñ€Ð¸ 2014Ð³ Ð² 18:30 UTC (09:30 EEST)";
			case clean("first mined block"):
				return "ÐŸÑŠÑ€Ð²Ð¸Ñ Ð´Ð¾Ð±Ð¸Ñ‚ Ð±Ð»Ð¾Ðº";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "Ð¸Ð´Ð²Ð° 4 Ð¼Ð¸Ð½ÑƒÑ‚Ð¸ Ð¿Ð¾-ÐºÑŠÑÐ½Ð¾, Ð´Ð¾ÐºÐ°Ð·Ð²Ð°Ð¹ÐºÐ¸ Ñ‡Ðµ Ð½ÑÐ¼Ð° Ð¿Ñ€ÐµÐ´Ð²Ð°Ñ€Ð¸Ñ‚ÐµÐ»ÐµÐ½ Ð´Ð¾Ð±Ð¸Ð²";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "ÐŸÑŠÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»Ð½Ð°Ñ‚Ð° Ð½Ð°Ð³Ñ€Ð°Ð´Ð° Ð¾Ñ‚ 1000 MYR ÑÐµ Ð¿Ñ€ÐµÐ¿Ð¾Ð»Ð¾Ð²ÑÐ²Ð° Ð½Ð° Ð²ÑÐµÐºÐ¸ 967 680 Ð±Ð»Ð¾ÐºÐ° (Ð¿Ñ€Ð¸Ð±Ð»Ð¸Ð·Ð¸Ñ‚ÐµÐ»Ð½Ð¾ 48 ÑÐµÐ´Ð¼Ð¸Ñ†Ð¸). ÐœÐ°ÐºÑÐ¸Ð¼Ð°Ð»Ð½Ð¾Ñ‚Ð¾ ÐºÐ¾Ð»Ð¸Ñ‡ÐµÑÑ‚Ð²Ð¾ Ðµ 2 Ð¼Ð¸Ð»Ð¸Ð°Ñ€Ð´Ð° MYR";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "ÐŸÑŠÑ€Ð²Ð¾Ð½Ð°Ñ‡Ð°Ð»Ð½Ð¾, ÐºÑ€Ð°Ð¹Ð½Ð¾Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð·Ð° Ð±Ð»Ð¾Ðº Ðµ Ð±Ð¸Ð»Ð¾ 30 ÑÐµÐºÑƒÐ½Ð´Ð¸ Ð¸Ð»Ð¸ 150 Ð²ÑÐµÐºÐ¸ ÑÐµÐºÑƒÐ½Ð´Ð¸ Ð·Ð° Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼. ÐÐ° 12 Ð®Ð»Ð¸ 2015Ð³ Ðµ Ñ€ÐµÑˆÐµÐ½Ð¾ ÐºÑ€Ð°Ð¹Ð½Ð¾Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð·Ð° Ð±Ð»Ð¾Ðº Ð´Ð° Ð±ÑŠÐ´Ðµ ÑƒÐ²ÐµÐ»Ð¸Ñ‡ÐµÐ½Ð¾ Ð½Ð° 60 ÑÐµÐºÑƒÐ½Ð´Ð¸ Ð¸Ð»Ð¸ 300 ÑÐµÐºÑƒÐ½Ð´Ð¸ Ð·Ð° Ð²ÑÐµÐºÐ¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼. Ð¢Ð¾Ð²Ð° Ð¿Ñ€Ð°Ð²Ð¸Ð»Ð¾ Ð²Ð»Ð¸Ð·Ð° Ð² ÑÐ¸Ð»Ð° Ð¾Ñ‚ Ð±Ð»Ð¾Ðº 1 401 001. ÐŸÐ¾ Ñ‚Ð¾Ð²Ð° Ð²Ñ€ÐµÐ¼Ðµ Myriad ÑÑ‚Ñ€Ð°Ð´Ð° Ð¾Ñ‚ Ð½Ð¸ÑÑŠÐº Ñ…Ð°ÑˆÑ€ÐµÐ¹Ñ‚ Ð¸ Ñ‚Ñ€ÑƒÐ´Ð½Ð¾ÑÑ‚ Ð² Ð¿Ñ€ÐµÐ¼Ð¸Ð½Ð°Ð²Ð°Ð½ÐµÑ‚Ð¾ Ð¼ÐµÐ¶Ð´Ñƒ SHA256d Ð¸ Scrypt, ÐºÐ¾ÐµÑ‚Ð¾ Ð²Ð¾Ð´Ð¸ Ð´Ð¾ ÑÑ€ÐµÐ´Ð½Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð½Ð° Ð±Ð»Ð¾ÐºÐ° Ð¾Ñ‚ Ð½Ð°Ð´ 50 ÑÐµÐºÑƒÐ½Ð´Ð¸.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad Ðµ ÑÑŠÐ·Ð´Ð°Ð´ÐµÐ½Ð° Ð¿Ñ€ÐµÐ· Ð¤ÐµÐ²Ñ€ÑƒÐ°Ñ€Ð¸ 2014Ð³ Ð¾Ñ‚ 8bitcoder, Ñ€Ð°Ð·ÐºÐ»Ð¾Ð½ÐµÐ½Ð° Ð¾Ñ‚ Zetacoin. Ð¢Ñ Ðµ Ð¿ÑŠÑ€Ð²Ð°Ñ‚Ð° Ð²Ð°Ð»ÑƒÑ‚Ð°, ÐºÐ¾ÑÑ‚Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¿ÐµÑ‚ \"proof-of-work\" Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼Ð°, Ð·Ð° Ð´Ð° ÑƒÐ²ÐµÐ»Ð¸Ñ‡Ð¸ ÑÐ¸Ð³ÑƒÑ€Ð½Ð¾ÑÑ‚Ñ‚Ð° Ð½Ð° Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð° Ð¸ Ð·Ð° Ð´Ð° Ð´Ð°Ð´Ðµ Ð²ÑŠÐ·Ð¼Ð¾Ð¶Ð½Ð¾ÑÑ‚ Ð½Ð° Ð¿Ð¾Ð²ÐµÑ‡Ðµ Ñ…Ð¾Ñ€Ð° Ð´Ð° Ñ Ð´Ð¾Ð±Ð¸Ð²Ð°Ñ‚, SHA256d Ð¸ Scrypt Ð·Ð° ÐÐ¡Ð˜Ðš-Ð¸, Skein Ð¸ Myr-Groeetl Ð·Ð° GPU Ð¼Ð¸Ð½ÑŒÐ¾Ñ€Ð¸ Ð¸ Qubit Ð·Ð° CPU. Ð’ÑÑŠÑ‰Ð½Ð¾ÑÑ‚, Huntercoing, Ð¿ÑƒÑÐ½Ð°Ñ‚Ð° Ð² ÐºÑ€Ð°Ñ Ð½Ð° 2013 Ðµ Ð¿ÑŠÑ€Ð²Ð°Ñ‚Ð° Ð¼Ð¾Ð½ÐµÑ‚Ð¾, ÐºÐ¾ÑÑ‚Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¿Ð¾Ð²ÐµÑ‡Ðµ Ð¾Ñ‚ ÐµÐ´Ð¸Ð½ PoW (SHA256d Ð¸ Scrypt) Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼, Ð½Ð¾ Ð½ÐµÐ¹Ð½Ð°Ñ‚Ð° Ñ†ÐµÐ» Ð½Ðµ ÑÐµ Ñ„Ð¾ÐºÑƒÑÐ¸Ñ€Ð° Ñ‚Ð¾Ð»ÐºÐ¾Ð²Ð° Ð²ÑŠÑ€Ñ…Ñƒ Ð´Ð¾Ð±Ð¸Ð²Ð°, Ð¾Ñ‚ÐºÐ¾Ð»ÐºÐ¾Ñ‚Ð¾ Ð²ÑŠÑ€Ñ…Ñƒ Ð±Ð»Ð¾ÐºÑ‡ÐµÐ¹Ð½ Ð±Ð°Ð·Ð¸Ñ€Ð°Ð½Ð° Ð¸Ð³Ñ€Ð° Ð·Ð° ÑÑŠÐ·Ð´Ð°Ð²Ð°Ð½Ðµ Ð½Ð° Ð½Ð¾Ð²Ð¸ Ð¼Ð¾Ð½ÐµÑ‚Ð¸";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad Ð¸Ð¼Ð° Ð¸ Ð½ÑÐºÐ¾Ð»ÐºÐ¾ ÐºÐ»Ð¾Ð½Ð¸Ð½Ð³Ð°, Ð¿ÑŠÑ€Ð²Ð¸Ñ Ð¾Ñ‚ ÐºÐ¾Ð¸Ñ‚Ð¾ Ðµ Saffroncoin, ÐºÐ¾Ð¹Ñ‚Ð¾ ÑÑŠÑ‰Ð¾ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð° Ð¿ÐµÑ‚ PoW Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼Ð°. Digitalcoin Ð¸ Digibyte ÑÑŠÑ‰Ð¾ ÑÐ° ÐºÐ¾Ð¿Ð¸Ñ Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ñ‰Ð¸ Ð¿Ð¾ Ñ‚Ñ€Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼Ð°, ÐºÐ°ÐºÑ‚Ð¾ Ð¸ Unitus, ÐºÐ¾Ð¹Ñ‚Ð¾ Ð¸Ð¼Ð° Ð¸Ð·Ð¿Ð¾Ð»Ð·Ð²Ð° ÑÑ…Ð¾Ð´Ð½Ð¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸ Ñ Myriad Ð¸ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐ²Ð° Ð½Ð° Ð¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ñ‚ÐµÐ»Ð¸Ñ‚Ðµ ÑÐ¸ ÑÐ¼ÐµÑÐµÐ½ Ð´Ð¾Ð±Ð¸Ð² Ñ‡Ñ€ÐµÐ· Ð²ÑÐ¸Ñ‡ÐºÐ¸Ñ‚Ðµ Ð¿ÐµÑ‚. Auroracoin Ð¸ Verge ÑÑŠÑ‰Ð¾ ÑÐ° Ð¾Ð±ÑÐ²Ð¸Ð»Ð¸ Ð¿Ð»Ð°Ð½Ð¾Ð²Ðµ Ð·Ð° Ð¿Ñ€ÐµÐ¼Ð¸Ð½Ð°Ð²Ð°Ð½Ðµ ÐºÑŠÐ¼ Ð¿Ð¾Ð²ÐµÑ‡Ðµ Ð¾Ñ‚ ÐµÐ´Ð¸Ð½ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "ÐŸÑ€ÐµÐ· ÐÐ²Ð³ÑƒÑÑ‚, 2015Ð³ Myriad Ð¿Ñ€Ð°Ð²Ð¸ Ñ‚Ð²ÑŠÑ€Ð´Ð¾ Ñ€Ð°Ð·ÐºÐ»Ð¾Ð½ÐµÐ½Ð¸Ðµ, Ð·Ð° Ð´Ð° Ð¿Ð¾Ð·Ð²Ð¾Ð»Ð¸ ÑÐ¼ÐµÑÐµÐ½ Ð´Ð¾Ð±Ð¸Ð² Ñ‡Ñ€ÐµÐ· SHA256d Ð¸ Scrypt Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸Ñ‚Ðµ Ñ Ñ†ÐµÐ» Ð´Ð° Ð¿Ð¾Ð´Ð¾Ð±Ñ€Ð¸ ÑÐ¸Ð³ÑƒÑ€Ð½ÑÑ‚Ñ‚Ð° Ð½Ð° Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð° Ð¸ Ð·Ð° Ð´Ð° Ð¿Ð¾ÑÑ‚Ð¸Ð³Ð½Ðµ Ð¿Ð¾-ÑÑ‚Ð°Ð±Ð¸Ð»ÐµÐ½ Ñ…Ð°ÑˆÑ€ÐµÐ¹Ñ‚ Ð½Ð° Ð²ÑŠÐ¿Ñ€Ð¾ÑÐ½Ð¸Ñ‚Ðµ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚Ð¼Ð¸. ÐŸÐ¾ Ñ‚Ð¾Ð²Ð° Ð²Ñ€ÐµÐ¼Ðµ, ÐºÑ€Ð°Ð¹Ð½Ð¾Ñ‚Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð·Ð° Ð±Ð»Ð¾Ðº Ð½Ð° Ð²ÑÐµÐºÐ¸ Ð°Ð»Ð³Ð¾Ñ€Ð¸Ñ‚ÑŠÐ¼ ÑÑŠÑ‰Ð¾ ÑÐµ Ð¿Ñ€Ð¾Ð¼ÐµÐ½Ñ Ð¾Ñ‚ 2.5 Ð¼Ð¸Ð½ÑƒÑ‚Ð¸ Ð½Ð° 5, Ð·Ð° Ð´Ð° Ð¿Ð¾ÑÑ‚Ð¸Ð³Ð½Ðµ ÑÑ€ÐµÐ´Ð½Ð¾ Ð²Ñ€ÐµÐ¼Ðµ Ð½Ð° Ð±Ð»Ð¾ÐºÐ° Ð¾Ñ‚ 1 Ð¼Ð¸Ð½ÑƒÑ‚Ð°, ÐºÐ°Ñ‚Ð¾ Ð¿Ñ€ÐµÐ´Ð¸ÑˆÐ½Ð¾Ñ‚Ð¾ Ðµ 30 ÑÐµÐºÑƒÐ½Ð´Ð¸. Ð¢Ð¾Ð²Ð° Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐ²Ð° Ð²Ñ€ÐµÐ¼ÐµÑ‚Ð¾ Ð·Ð° Ð´Ð¾Ð±Ð¸Ð² Ð´Ð¾ Ð¸Ð·Ñ‡ÐµÑ€Ð¿Ð²Ð°Ð½Ðµ Ð½Ð° Ð¼Ð¾Ð½ÐµÑ‚Ð¸Ñ‚Ðµ Ð´Ð° ÑÐµ ÑƒÐ´Ð²Ð¾Ð¸ Ð´Ð¾ Ð¿Ñ€Ð¸Ð±Ð»Ð¸Ð·Ð¸Ñ‚ÐµÐ»Ð½Ð¾ 20 Ð³Ð¾Ð´Ð¸Ð½Ð¸";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "ÐŸÐ¾ÑÐ»ÐµÐ´Ð½Ð°Ñ‚Ð° Ð²ÐµÑ€ÑÐ¸Ñ Ðµ 0.11.3.1, Ð¿ÑƒÑÐ½Ð°Ñ‚Ð° Ð½Ð° 7 Ð°Ð¿Ñ€Ð¸Ð» 2016Ð³. Ð’Ð¸Ð¶ ";
			case clean(" announcement &amp; upgrade notes."):
				return " Ð¸Ð·Ð²ÐµÑÑ‚Ð¸Ñ Ð¸ Ð¿Ð¾ÑÑÐ½ÐµÐ½Ð¸Ñ Ð¿Ð¾ ÑŠÐ¿Ð´ÐµÐ¹Ñ‚Ð°.";
			// mining
			case clean("Getting Started"):
				return "ÐšÐ°Ñ‚Ð¾ Ð·Ð° Ð½Ð°Ñ‡Ð°Ð»Ð¾";
			case clean("Download a "):
				return "Ð˜Ð·Ñ‚ÐµÐ³Ð»Ð¸ ";
			case clean("wallet"):
				return "Ð¿Ð¾Ñ€Ñ‚Ñ„ÐµÐ¹Ð»";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", Ð¸Ð·Ñ‚ÐµÐ³Ð»Ð¸ Ð¿Ð¾Ð´Ñ…Ð¾Ð´ÑÑ‰ Ð¼Ð¸Ð½ÑŒÐ¾Ñ€, Ð½Ð°Ð¼ÐµÑ€Ð¸ Ð±Ð°ÑÐµÐ¹Ð½ Ð¸ Ð·Ð°Ð¿Ð¾Ñ‡Ð²Ð°Ð¹...";
			case clean("Mining Tutorial Video"):
				return "Ð”Ð¾Ð±Ð¸Ð² - Ð’Ð¸Ð´ÐµÐ¾ ÑƒÑ€Ð¾Ðº";
			case clean("Watch on "):
				return "Ð“Ð»ÐµÐ´Ð°Ð¹ Ð²";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "ÐœÐ°Ð¹Ð½Ð¸Ð½Ð³ ÑÐ¾Ñ„Ñ‚ÑƒÐµÑ€";
			case clean("Use any SHA256d compatible ASIC"):
				return "Ð˜Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ð¹ SHA256d ÑÑŠÐ²Ð¼ÐµÑÑ‚Ð¸Ð¼ ÐÐ¡Ð˜Ðš";
			case clean("Use any Scrypt compatible ASIC"):
				return "Ð˜Ð·Ð¿Ð¾Ð»Ð·Ð²Ð°Ð¹ Scrypt ÑÑŠÐ²Ð¼ÐµÑÑ‚Ð¸Ð¼ ÐÐ¡Ð˜Ðš";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer Ð·Ð° OpenCL GPU Ð´Ð¾Ð±Ð¸Ð²";
			case clean("BitcoinTalk Thread"):
				return "Ð¢ÐµÐ¼Ð° Ð² BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Ñ„Ð°Ð¹Ð»Ð¾Ð²Ðµ";
			case clean("GitHub Source"):
				return "GitHub ÑÐ¾Ñ€Ñ-ÐºÐ¾Ð´";
			case clean("Suggested Command Line"):
				return "ÐŸÑ€Ð¸Ð¼ÐµÑ€Ð½Ð° ÐºÐ¾Ð¼Ð°Ð½Ð´Ð½Ð° Ð»Ð¸Ð½Ð¸Ñ";
			case clean("Pools"):
				return "Ð‘Ð°ÑÐµÐ¹Ð½Ð¸";
			case clean("P2Pool nodes"):
				return "P2Pool Ð²ÑŠÐ·Ð»Ð¸";
			case clean("Run Your Own Node"):
				return "Ð¡ÑŠÐ·Ð´Ð°Ð¹ ÑÐ¾Ð±ÑÑ‚Ð²ÐµÐ½ Ð²ÑŠÐ·ÐµÐ»";
			case clean("Merge Mining Pools"):
				return "Ð¡Ð»ÑÑ‚ Ð´Ð¾Ð±Ð¸Ð²";
			case clean("zpool - The miners multipool"):
				return "zpool - ÐœÑƒÐ»Ñ‚Ð¸-Ð±Ð°ÑÐµÐ¹Ð½Ð° Ð½Ð° Ð¼Ð¸Ð½ÑŒÐ¾Ñ€Ð¸Ñ‚Ðµ";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ñ Ð¸ Ñ€ÐµÑÑƒÑ€ÑÐ¸";
			case clean("Exchanges"):
				return "Ð‘Ð¾Ñ€ÑÐ¸";
			case clean("Other"):
				return "Ð”Ñ€ÑƒÐ³Ð¸";
			case clean("Faucet"):
				return "ÐšÑ€Ð°Ð½Ñ‡Ðµ";
			case clean("Testnet Information"):
				return "Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ñ Ð·Ð° Ð¢ÐµÑÑ‚-Ð¼Ñ€ÐµÐ¶Ð°Ñ‚Ð°";
				
			default:
					return $text;
				
		}
	}

	else if($lang == 'de')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Offen für jeden";   
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad ist Multi-Algo - die erste Kryptowährung mit fünf simultanen Hash Funktionen. Anders als Bitcoin, welches nur durch SHA256 ASICs profitabel gemined wird, kann Myriad von SHA256 und Scrypt ASICs sowie GPUs & CPUs gemined werden.";
			case clean("Secure"):
				return "Sicherheit";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit â€” 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ein Miner kann zwischen fünf unterschiedlichen Algorithmen wählen - SHA256, Scrypt, Myr-Groestl, Skein oder Yescrypt - jeder Algorithmus besitzt eine target block time von fünf Minuten. Ein Block wird durchschnittlich jede Minute gefunden. Die Komplexität jedes Algorithmus ist nur von ihrer eigenen Hashrate abhängig. SHA256 sowie SCRYPT ASICs haben dafür gesorgt, dass das minen dieser Algorithmen für GPUs unrentabel wurde. Für diese Miner sind die übrigen drei Algorithmen, welche nicht durch ASICs gemined werden können.
Der Multi-Algorithmus Ansatz bietet außergewöhnlichen Schutz vor 51% Angriffen, da eine große Anzahl von unterschiedlicher Hardware notwendig ist, um 51% aller Blöcke zufinden.
";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Merge Mining ist für SHA256 und Scrypt verfügbar, welche es Myriad erlaubt von der massiven verfügbaren Hash Power zu profitieren.";
			case clean("Fair Distribution"):
				return "Faire Verteilung";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Kein premine oder versteckte Coins, welche von Insindern gehalten werden. Alle Benutzer haben die gleichen Chancen Myriad zu erhalten.";
			// technology
			case clean("Multi-Algorithm"):
				return "Eine Vielzahl an Algorithmen";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorithmen für ASICs, GPU und CPU";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "SHA256 ist der genutze Algorithmus von Bitcoin, der bekanntesten Kryptowährung.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "anfangs nur von CPUs gemined, wird der Algorithmus heute genauso wie der Altcoin Litecoin mit ASICs gemined";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return " Eine abgewandelte Variante des Hash-Algorithmus Groestl wird von Myriad genutzt. Groestl ist einer der fünf Finalisten im NIST SHA-3 Wettbewerb.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Ein weiterer NIST-SHA3 Finalist. Zuerst eingesetzt von Skeincoin";
			case clean("YESCRPT"):
				return "YESCRYPT";
			case clean("Merge Mining"):
				return "Merge Mining";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Seit Block 1402000 ist Merge Mining aktiv. Dies erlaubt Myriad von der immensen Hashrate zu profitieren, welche die Coins mit SHA256 und Scrypt Algorithmen bereitstellen.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Merge Mining oder auch AuxPow, erlaubt es, die Arbeit, welche für einen Parent Coin durchgeführt wurde, auch für Myriad zu nutzen, um einen Block auf Myriads Blockchain zu finden.";
			case clean("Distribution"):
				return "Verteilung";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad wurde am 23 Februar 2014 um 18.30 UTC veröffentlicht. Der";
			case clean("first mined block"):
				return " erste Block ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "wurde vier Minuten später gefunden. Damit wurde premine ausgeschlossen.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Die erste Bezahlung waren 1000 MYR. Diese halbiert sich alle 967680 Blocke (ca. alle 48 Wochen). Maximal werden zwei Milliarden Blöche gemined.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Anfangs betrug die target blocktime 30 Sekunden oder 150 Sekunden pro Algorithmus. Am 12. Juli 2015 entschied die Community die target block time auf 60 Sekunden bzw. 300 Sekunden pro Algorithmus anzuheben. Effektiv ab Block 1.401.001. Dies geschah, da Myriad zu dieser Zeit an einer niedrigen Hashrate und häufigem difficulty hopping bei Scrypt und SHA256 litt. Dies sorgte dafür, dass die durchschnittliche block time bei über 50 Sekunden lag.
Neben der Aktivierung von auxPoW für Scrypt und SHA256 sorgte die Erhöhung der block time auf 60 Sekunden für bessere Konsistenz im Netzwerk bei gleichzeit weiterhin fairer Verteilung. ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad wurde am  Februar 2014 von 8bitcoder gelaunched, geforked aus Zetacoin. Myriad war der erste Coin mit Unterstützung für mehrere Algorithmen mit der Hoffnung, dadurch die Sicherheit und die Anzahl der potentiellen Miner zu erhöhen. SHA256 und Scrypt für ASIC Miner, Skein und Myr-Groestl für GPU Miner und Qubit für GPU und CPU Miner. Huntercoin, welcher Ende 2013 gelaunched wurde, war eigentlich der erste Coin, welcher mehrere PoW Algorithmen nutze. Der Fokus lag aber nicht auf dem minen, sondern auf einem Blockchain basierten Spiel, welche den Großteil der verfügbaren Münzen produzierte.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad inspirierte mehrere Coins mit ähnlichen Konzepten z.B. Saffroncoin, welches auch fünf Algorithmen nutzt. Andere Coins wie Digitalcoin und Digibyte hard forkten um drei bzw. fünf Algorithmen verwenden zukönnen. Unitus ist ein weiterer Coin, der mehrere Algorithmen mit Myriad teilt und dadurch merge mining erlaubt. Auroracoin und Verge kündigten außerdem an auf Multi-Algo zu setzen.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Im August 2015 wurde Myriad hard geforkt, um merge mining mit Scrypt und SHA256 zu unterstützen. Damit sollte die Sicherheit erhöht und die Hashrate stabilisiert werden. Die block time wurde auf 5 Minuten geändert(zuvor 2.5 Minuten), um auf eine gesamt block time von einer Minute (vorher 30 Sekunden) zu kommen. Die Änderungen werden die Verteilungszeit um einen Faktor 2 verlängern, auf ca. 20 Jahre.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return " Die neueste Version ist 0.11.3.1, veröffentlicht am 4/07/2016. Siehe";
			case clean(" announcement & upgrade notes."):
				return "Ankündigungen und Abkürzungsverzeichnis";
			// mining
			case clean("Getting Started"):
				return "Die Einführung";
			case clean("Download a "):
				return "Lade ein  ";
			case clean("wallet"):
				return "wallet (Geldbeutel) ";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "lade einen passenden miner, finde einen mining pool und starte...";
			case clean("Mining Tutorial Video"):
				return "Mining Tutorial Video";
			case clean("Watch on "):
				return "Schaue auf";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Mining Softvare";
			case clean("Use any SHA256d compatible ASIC"):
				return "Benutze einen SHA256 kompatiblen ASIC ";
			case clean("Use any Scrypt compatible ASIC"):
				return "Benutze einen Scrypt kompatiblen ASIC ";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer für OpenCL GPU mining";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalk Thread";
			case clean("Windows Binaries"):
				return "Windows Executables";
			case clean("GitHub Source"):
				return "GitHunt Quelldateien";
			case clean("Suggested Command Line"):
				return "Empfohlene Kommadozeilen Befehle";
			case clean("Pools"):
				return "Pools";
			case clean("P2Pool nodes"):
				return "P2Pool nodes";
			case clean("Run Your Own Node"):
				return "Seinen eigenen Node starten";
			case clean("Merge Mining Pools"):
				return "Merge Mining Pools";
			case clean("zpool - Tae Berg Multipol "):
				return "zpool - ";
			case clean("MultiPool"):
				return " Multi-Pool";
			// services
			case clean("Information & Resources"):
				return "Informationen und Ressourcen";
			case clean("Exchanges"):
				return "Exchanges";
			case clean("Other"):
				return "Anderes";
			case clean("Faucet"):
				return "Faucet";
			case clean("Testnet Information"):
				return "Testnet Informationen";
			default:
					return $text;
		}
	}

	else if($lang == 'it')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Aperta a tutti";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad Ã¨ una moneta multi-algoritmica, Ã¨ la prima valuta ad avere contemporaneamente 5 funzioni hash usate per il mining. A differenza di Bitcoin che puÃ² essere minato in modo redditizio soltanto utilizzando ASIC SHAâ€“256d, Myriad Ã¨ aperto agli ASIC SHA256d, ASIC Scrypt, GPU & CPU.";
			case clean("Secure"):
				return "Sicura";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€” each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Un miner puÃ² scegliere uno qualsiasi dei 5 algoritmi disponibili per il mining: SHA256d, Scrypt, Myr-Groestl, Skein o Yescrypt e ciascuno ha un tempo di blocco fisso di 5 minuti. In generale un blocco viene trovato ogni minuto. La difficoltÃ  di ogni algoritmo viene regolata in base al suo hash rate. Mentre ASICs hanno reso il GPU mining basato sugli algoritmi SHA256d & Scrypt improduttivo, gli altri algoritmi continuano a dominare il GPU mining. Lâ€™approccio a piÃ¹ algoritmi offre un nuovo, esclusivo e innovativo metodo di protezione del 51% poichÃ© per ottenere il 51% dei blocchi Ã¨ necessaria una vasta gamma di hardware.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return " Il merge-mining Ã¨ disponibile sugli algoritmi SHA256d & Scrypt, permettendo a Myriad di ottenere un vantaggio grazie allâ€™enorme potenza di calcolo disponibile.";
			case clean("Fair Distribution"):
				return "Distribuzione equa";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Non ci sono premine o fortune nascoste possedute dagli sviluppatori. Tutti gli utenti della rete hanno le stesse possibilitÃ  di ottenere Myriad al prezzo di mercato.";
			// technology
			case clean("Multi-Algorithm"):
				return "Multi-Algoritmi";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algoritmi disponibili per ASIC, GPU e mining CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Due cicli con l'algoritmo di hashing SHA256d, utilizzato per la prima volta dalla criptovaluta Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Originariamente progettato per il CPU mining adesso viene minato con ASIC su molte monete alternative, a partire da Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Una versione specifica solo per Myriad dell'algoritmo di hashing Groestl, uno dei cinque finalisti della competizione di hashing NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Un altro dei cinque finalisti della competizione NIST SHA-3 di hashing, utilizzato per la prima volta da Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originariamente progettato solo per la CPU, lâ€™algoritmo Qubit combina 5 algoritmi partecipanti alla competizione di hashing NIST SHA-3: Luffa, Cubehash, SHAvite, SIMD e ECHO.";
			case clean("Merge Mining"):
				return "Merge Mining";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "A partire dal blocco 4002000 il merge mining Ã¨ disponibile per gli algoritmi SHA256d e Scrypt. Questo ha permesso a Myriad di ottenere un vantaggio grazie alla grande potenza di calcolo attualmente in uso da monete che usano questi algoritmi e ha garantito un'ulteriore sicurezza alla block chain Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Il merge mining, conosciuto anche come AuxPow, consente lâ€™utilizzo delle risorse impiegate per esempio per il mining su Bitcoin o Litecoin per trovare blocchi nella rete Myriad senza incorrere in alcun carico aggiuntivo.";
			case clean("Distribution"):
				return "Distribuzione";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad Ã¨ stata rilasciata in rete il 23 febbraio 2014 alle 18:30 UTC";
			case clean("first mined block"):
				return "Il primo blocco ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " Ã¨ stato trovato dopo 4 minuti, confermando che non vi Ã¨ stata alcuna premine.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La ricompensa iniziale era di 1000 MYR e viene dimezzata ogni 967680 blocchi  (circa 48 settimane). Il numero massimo di monete Ã¨ di 2 miliardi di MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Inizialmente il block time era di 30 secondi o 150 secondi per un algoritmo. Il 12 luglio 2015 la comunitÃ  ha deciso di aumentare il block time fino a 60 secondi o 300 secondi per un algoritmo, entrata in vigore dal blocco 1401001. A quel tempo, la rete Myriad soffriva di un basso hash rate e di una elevata difficoltÃ , causando un block time medio effettivo maggiore di 50 secondi. In aggiunta Ã¨ stato abilitato AuxPow per Scrypt e SHA256d che ha aumentato il block time e ha portato a una maggiore coerenza nella rete senza alterare lâ€™equitÃ  della distribuzione.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad Ã¨ stata lanciata nel febbraio 2014 da 8bitcoder ed Ã¨ basata su ZetaCoin. Ãˆ la prima criptovaluta che utilizza 5 algoritmi PoW per incrementare la sicurezza e per una maggiore copertura dei miner con algoritmi diversi: SHA256d e Scrypt per i miner ASIC, Skein e Myr-Groestl per i miner GPU, Qubit per il GPU e CPU mining. Qubit Ã¨ stato sostituito con Yescrypt. HunterCoin, lanciato alla fine del 2013, fu infatti la prima moneta ad utilizzare diversi algoritmi POW (SHA256d e Scrypt), ma non fu progettata non per il mining, ma per i giochi basati su block chain che hanno dato vita a molte monete alternative.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ha dato vita a diversi spin-off, il primo dei quali era Saffroncoin, anchâ€™esso basato su 5 algoritmi PoW. Digitalcoin e Digibyte entrambi hard-forked per utilizzare rispettivamente 3 e 5 algoritmi PoW. Unitus Ã¨ un'altra moneta con 5 algoritmi PoW coin che condivide diversi algoritmi PoW con Myriad, e consente agli utenti il merge mining su tutti e 5 i suoi algoritmi. Anche Auroracoin e Verge hanno annunciato l'intenzione del fork per il multi-algo.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Ad agosto 2015 la rete Myriad Ã¨ stata divisa in due per consentire il merge mining sugli algoritmi Scrypt e SHA256d nel tentativo di migliorare la sicurezza e raggiungere un hash rate piÃ¹ stabile su questi due algoritmi. In quel momento il block time per ogni algoritmo Ã¨ stato modificato in 5 minuti (in precedenza 2,5 minuti) per ottenere il block time totale per tutti gli algoritmi di 1 minuto (in precedenza 30 secondi). Questo cambiamento permetterÃ  di allungare la curva di emissione con un fattore 2x e di equiparare a circa 20 anni.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Lâ€™ultima versione 0.11.3.1 Ã¨ stata rilasciata il 6 luglio 2016. Vedi:";
			case clean(" announcement & upgrade notes."):
				return "Annunci & elenco di aggiornamenti";
			// mining
			case clean("Getting Started"):
				return "Guida introduttiva";
			case clean("Download a "):
				return "Scarica lo";
			case clean("wallet"):
				return "wallet";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", scaricare il giusto miner per il tuo algoritmo, trova una pool e divertiti...";
			case clean("Mining Tutorial Video"):
				return "Video Tutorial del Mining";
			case clean("Watch on "):
				return "Vedi su";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Mining Software";
			case clean("Use any SHA256d compatible ASIC"):
				return "Utilizza qualsiasi SHA256d compatibile ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Utilizza qualsiasi Scrypt compatibile ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer per il mining GPU OpenCL";
			case clean("BitcoinTalk Thread"):
				return "Thread su BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Binaries";
			case clean("GitHub Source"):
				return "GitHub Source";
			case clean("Suggested Command Line"):
				return "Command Line suggerita";
			case clean("Pools"):
				return "Pool";
			case clean("P2Pool nodes"):
				return "Nodi P2Pool";
			case clean("Run Your Own Node"):
				return "Esegui il proprio nodo";
			case clean("Merge Mining Pools"):
				return "Pool Merge Mining";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ multipool";
			case clean("MultiPool"):
				return "Multipool";
			// services
			case clean("Information & Resources"):
				return "Informazioni e risorse";
			case clean("Exchanges"):
				return "Exchange";
			case clean("Other"):
				return "Altro";
			case clean("Faucet"):
				return "Faucet";
			case clean("Testnet Information"):
				return "Informazioni Testnet";
			default:
					return $text;
		}
	}
	
	else if($lang == 'ar')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Ù…ÙØªÙˆØ­Ø© Ù„Ù„Ø¬Ù…ÙŠØ¹";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
			return "5    Ù…ØªØ¹Ø¯Ø¯ ØªÙ…Ø§Ù…Ø§ Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ©  ÙˆÙ‡Ø°Ø§ Ø§Ù„Ø¹Ù…Ù„Ø© Ø§Ù„Ø§ÙˆÙ„Ù‰ Ù„ØªØ­Ù‚ÙŠÙ‚ ÙƒÙ„ Ù…Ù† Ø¸Ø§Ø¦Ù Ø§Ù„ØªØ¬Ø²Ø¦Ø©â€“    Myriad
			Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…Ø© ÙÙŠ Ø§Ù„ØªØ¹Ø¯ÙŠÙ† .
			SHA256d, Myriad Ø¹Ù„Ù‰ Ø¹ÙƒØ³ Ø¨ÙŠØªÙƒÙˆÙŠÙ† Â¸ ÙˆØ§Ù„ØªÙŠ ÙŠÙ…ÙƒÙ† Ø§Ù† ØªÙƒÙˆÙ† Ù…Ø±Ø¨Ø­Ø© Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§Ø³ÙŠÙƒ Ù…Ø§ÙŠÙ† Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© ÙŠØªÙˆÙØ±  Scrypt    ASICS , GPUS & CPUs ";
			case clean("Secure"):
				return "Ø§Ù„Ø§Ù…Ù†";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ø­Ø§Ù„Ø© Ù†Ø¸ÙŠÙØ©  ÙˆØ´Ø±ÙƒØ© Ø§Ù„ØªØ¹ÙŠÙ† ÙŠÙ…ÙƒÙ† Ø§Ù† ØªØ®ØªØ§Ø± Ù„Ø§Ø²Ø§Ù„Ø© Ø§Ù„Ø§Ù„ØºØ§Ù… Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§ÙŠ Ù…Ù† Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø®Ù…Ø³Ø© 
				SHA256d, Scrypt, Myr-Groestl, Skein, Ø§Ùˆ  Yescrypt ÙˆØ¹Ù…ÙˆÙ…Ø§  ÙƒÙ„ Ù„Ø¯ÙŠØ© Ø§Ù„ÙˆÙ‚Øª ÙƒØªÙ„Ù‡ Ø§Ù„Ù‡Ø¯Ù Ù…Ù† 5 Ø¯Ù‚Ø§Ø¦Ù‚
				ØªÙ… Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„Ù‰ ÙƒØªÙ„Ø© ØªÙ‚Ø±ÙŠØ¨Ø§ ÙƒÙ„ Ø¯Ù‚ÙŠÙ‚Ø© .  ÙŠØªØ§Ø«Ø± ØµØ¹ÙˆØ¨Ø© ÙƒÙ„ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© ÙÙ‚Ø· Ø¨Ù…Ø¹Ø¯Ù„ Ø§Ù„ØªØ¬Ø²Ø¦Ø© Ø§Ù„Ø®Ø§ØµØ© Ø¨Ù‡Ø§ .
				 Ø¨ÙŠÙ†Ù…Ø§ Ø§Ø³ÙŠÙƒ ØªØ¤Ø«Ø± Ø§Ù„ØªØ¹Ø¯ÙŠÙ† Ø¨Ø·Ø§Ù‚Ø§Øª Ø§Ù„Ø±Ø³ÙˆÙ…Ø§Øª Ù…Ø¹ Ø§Ù„Ø±Ø³ÙˆÙ…Ø§Øª Ù…Ø¹ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© SHA256d, Scrypt ÙˆØºÙŠØ± Ù…Ù†ØªØ¬Ø© 
				ÙˆØªÙ‡ÙŠÙ…Ù† Ø¹Ù„Ù‰ Ø¨Ù‚ÙŠØ© Ù…Ù† Ù†Ø·Ø§Ù‚ Ø®ÙˆØ§Ø±Ø±Ø²Ù…ÙŠØ§Øª Ø§Ù„ØªÙ†Ù‚ÙŠØ¨ Ø¹Ù†Ø§Ù„Ø±Ø³ÙˆÙ…Ø§Øª . Ø·Ø±ÙŠÙ‚Ø© Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ù…ØªØ¹Ø¯Ø¯Ø© ÙŠØ®Ù„Ù‚ Ù†Ù‡Ø¬ Ø§Ù„Ø­ØµØ±ÙŠ ÙˆØ§Ù„Ø¬Ø¯ÙŠØ¯ Ø§Ù„Ù…Ø¨ØªÙƒØ± Ù„Ø·Ø±ÙŠÙ‚Ø© Ø­Ù…Ø§ÙŠØ© Ø¨Ù†Ø³Ø¨Ø© 51 % Ù…Ù† Ø§Ù„ÙˆØ­Ø¯Ø§Øª Ø³ÙˆÙ ØªØ­ØªØ§Ø¬ Ø§Ù„Ù‰ Ù…Ø¬Ù…ÙˆØ¹Ø© ÙˆØ§Ø³ØºØ© Ù…Ù† Ø§Ù„Ù…Ø¹Ø¯Ø§Øª.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Ø§Ù„ØªØ¹Ø¯ÙŠÙ† Ø§Ù„Ù…ØªØ­Ø¯Ø© Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ù…Ø®ØªÙ„ÙØ©, ÙˆØ§Ù„ØªÙŠ ØªØ´Ù…Ù„ SHA256d & Scrypt, ØªÙ…ÙƒÙŠÙ†  Ù„ÙƒØ³Ø¨  Myriad
				Ù…ÙŠØ²Ø©Ø¹Ù„Ù‰ Ø­Ø³Ø§Ø¨ Ø§Ù„Ù‚Ø¯Ø±Ø© Ø§Ù„Ø­Ø§Ø³ÙˆØ¨ÙŠØ© Ø§Ù„Ù‡Ø§Ø¦Ù„Ø© Ø§Ù„Ù…ØªØ§Ø­Ø©";
			case clean("Fair Distribution"):
				return "Ø¨ØµØ±Ø§Ø­Ø© Ø§Ù„ØªÙˆØ²ÙŠØ¹ ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Ù„Ø§ Ø¨Ø±ÙŠÙ…Ø§ÙŠÙ†ÙŠ Ø§Ùˆ Ø«Ø±ÙˆØ§Øª Ù…Ø®Ø¨Ø§Ø© Ø§Ù„ØªÙŠ ØªÙ…ØªÙ„ÙƒÙ‡Ø§ Ø§Ù„Ù…Ø·Ù„Ø¹ÙŠÙ† Ø§Ù„Ø¬Ù…ÙŠØ¹ Ù„Ø¯ÙŠØ© ÙØ±ØµØ© Ù…ØªØ³Ø§ÙˆÙŠØ© Ù„Ù„Ø­ØµÙˆÙ„ Ø¹Ù„Ù‰ Ø¹Ø¯Ø¯
				Myriad Ø¨Ø³Ø¹Ø± Ø§Ù„Ø³ÙˆÙ‚ .  Ù„Ø§ ØªÙˆØ¬Ø¯ Ù…Ø®Ø¨Ø§Ø© Ø¨Ø±ÙŠÙ…Ø§ÙŠÙ† Ø§Ù„Ø³Ø­Ø± ÙˆØ§Ù„Ù‚Ø·Ø¹ Ù…Ø¹ Ù…ÙƒØ§ÙØ§Ø© Ø¹Ø§Ù„ÙŠØ© Ø¬Ù…ÙŠØ¹ Ø§Ù„Ù…Ø³ØªØ®Ø¯Ù…ÙŠÙ† Ø¹Ù„Ù‰ Ø§Ù„Ø´Ø¨ÙƒØ© Ù„Ø¯ÙŠÙ‡Ù… Ù†ÙØ³ Ø§Ù„Ø§Ø¶Ø·Ø±Ø§Ø¨.";
			// technology
			case clean("Multi-Algorithm"):
				return " Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ù„Ù…ØªØ¹Ø¯Ø¯Ø©";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª  Ø§Ù„Ù…ØªØ§Ø­Ø© ASIC  GPU Ùˆ CPU  Ù…Ø§ÙŠÙ†";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Ø¬ÙˆÙ„ØªØ§Ù† Ù…Ù† ØªØ¬Ø²Ø¦Ø© Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© SHA256d , Ø§Ø³ØªØ®Ø¯Ù… Ù„Ø§ÙˆÙ„ Ù…Ø±Ø© Ø±Ø§Ø¦Ø¯Ø© Bitcoin- ";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "ØµÙ…Ù…Øª Ø§ØµÙ„Ø§ Ù„Ù„ØªØ¹Ø¯ÙŠÙ† ØªØ­Øª ÙˆØ­Ø¯Ø© Ø§Ù„Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ù„Ù…Ø±ÙƒØ²ÙŠØ© , ÙˆÙŠØ³ØªØ®Ø¯Ù… Ø§Ù„Ø§Ù† Ù„Ø§Ù†ØªØ§Ø¬ Ø¨Ø¯ÙŠÙ„Ø© ,Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø§Ù„Ù‚Ø·Ø¹ Ø§Ù„Ù†Ù‚Ø¯ÙŠØ© Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù…  ASICs Ù…Ù†Ø° Litecoin ";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Ù…Ø­Ø¯Ø¯Ø© Myriad Ø³ÙˆÙ‰ Ø®ÙŠØ§Ø± ÙˆØ®ÙˆØ§Ø±Ø²Ù…ÙŠØ© Ø§Ù„ØªØ¬Ø±Ø¦Ø© -  Groestl â€“ ÙˆÙ‡Ø°Ø§ Ù‡Ùˆ ÙˆØ§Ø­Ø¯ Ù…Ù† Ø§Ù„Ù…Ø±Ø´Ø­ÙŠÙ† Ø§Ù„Ø®Ù…Ø³Ø© Ù„Ù†ÙŠØ³Øª    NIST -SHA 3  Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ù„ØªØ¬Ø²Ø¦Ø© Ø§Ù„Ù…Ù†Ø§ÙØ³Ø©";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Ø§Ø®Ø± ÙˆØ§Ø­Ø¯ Ù…Ù† Ø§Ù„Ù…Ø±Ø´Ø­ÙŠÙ† Ø§Ù„Ø®Ù…Ø³Ø© Ù„Ù„Ù…Ø³Ø§Ø¨Ù‚Ø© ØªØ¬Ø²Ø¦Ø§Øª Ù†ÙŠØ³Øª NIST -SHA 3   ÙˆØ§Ù„Ø°ÙŠ Ø§Ø³ØªØ®Ø¯Ù… Ù„Ø§ÙˆÙ„ Ù…Ø±Ø©  Skeincoin ";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "ØµÙ…Ù…Øª ÙÙŠ Ø§Ù„Ø¨Ø¯Ø§ÙŠØ© ÙÙ‚Ø· Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© ÙˆØ­Ø¯Ø© Ø§Ù„Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ù„Ù…Ø±ÙƒØ²ÙŠØ© Ùˆ Qubit ÙŠØ¬Ù…Ø¹ Ø¨ÙŠÙ† 5 Ù…ØªØ´Ø§Ø±ÙƒÙŠÙ† Ù†ÙŠØ³Øª
				     Luffa , Cubehash , SHAvite Ø§Ù„Ù…Ù†Ø§ÙØ³Ø© Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ù„ØªØ¬Ø²Ø¦Ø© â€“ NIST - SHA 3 
				 .SIMD  Ùˆ ECHO";
			case clean("Merge Mining"):
				return "Ø§Ù„Ù…ØªØ­Ø¯Ø© Ù„Ù„ØªØ¹Ø¯ÙŠÙ†";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "ÙˆØ¨Ù‡Ø§ Ø§Ù† ÙƒØªÙ„Ø© 40020000 ,  ÙˆÙ‡Ùˆ Ù…Ø´ØªØ±Ùƒ Ù…Ù†Ø§Ø­ Ù„Ù„ØªØ¹Ø¯ÙŠÙ† SHA256d & Scrypt Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª ÙˆÙ‚Ø¯ Ù…ÙƒÙ† Ù‡Ø°Ø§ Myriad Ù„ÙƒØ³Ø¨ Ù…ÙŠØ²Ø© Ø¹Ù„Ù‰ Ø­Ø³Ø§Ø¨  Ù‡ÙŠØ´Ø±ÙŠØªÙˆÙ Ø¶Ø®Ù…Ø© ØªØ³ØªØ®Ø¯Ù… ÙÙŠ Ù‡Ø°Ø§ Ø§Ù„ÙˆÙ‚Øª Ø§Ù„Ø¹Ù…Ù„Ø§Øª Ø§Ù„Ø§Ø®Ø±Ù‰ , ÙØ¶Ù„Ø§ Ø¹Ù† Ø¶Ù…Ø§Ù† Ø³Ù„Ø§Ù…Ø© Ø¨Ù„Ø§ÙƒØ´ÙŠÙ†ÙˆØ§ ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "Ø§Ù„ØªØ¹Ø¯ÙŠÙ† Ø§Ù„Ù…ÙˆØ­Ø¯, Ø§Ù„Ù…Ø¹Ø±ÙˆÙ Ø§ÙŠØ¶Ø§ Ø¨Ø§Ø³Ù…  AuxPow  ,  ÙŠØ³Ù…Ø­ Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… Ù…ÙˆØ§Ø±Ø¯ Ù‚Ø¶Ù‰ , Ø¹Ù„Ù‰ Ø³Ø¨ÙŠÙ„ Ø§Ù„Ù…Ø«Ø§Ù„ , ÙÙŠ Ø§Ù„ØªØ¹Ø¯ÙŠÙ† Bitcoin  Ø§Ùˆ Litecoin   Ù„Ù„ØªØ§ÙƒØ¯ Ù…Ù† ØµØ­Ø© Ø§Ù„ÙƒØªÙ„ ÙÙŠ Ø§Ù„Ø´Ø¨ÙƒØ© Myriad  Ø¯ÙˆÙ† ØªÙƒØ¨Ø¯ Ø§ÙŠ Ø§Ø¹Ø¨Ø§Ø¡ Ø§Ø¶Ø§ÙÙŠØ© ";
			case clean("Distribution"):
				return "ØªÙˆØ²ÙŠØ¹ ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad  Ø§ÙØ±Ø¬  Ù„Ø´Ø¨ÙƒØ© 23/2/2014  , 18:30  UTC ";
			case clean("first mined block"):
				return "ÙƒØªÙ„Ø© Ø§Ù„Ù…Ø·Ø§Ø¨Ù‚ Ø§Ù„Ø§ÙˆÙ„";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "Ø¸Ù‡Ø±Øª Ø¨Ø¹Ø¯ 4 Ø¯Ù‚Ø§Ø¦Ù‚,  Ù…Ù…Ø§ ÙŠØ¤ÙƒØ¯Ø§Ù†Ù‡ Ù„Ø§ ÙŠÙˆØ¬Ø¯ Ø¨Ø±ÙŠÙ…Ø§ÙŠÙ†Ø§";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "ÙÙŠ Ø§Ù„Ø¨Ø¯Ø§ÙŠØ© , ÙƒØ§Ù†Øª Ù…ÙƒØ§ØºØ§Ø© 1000  MYR  , ÙˆØ§Ù„Ø§Ù†ØµØ§Ù ÙÙŠ ÙƒÙ„ 967,680 ÙˆØ­Ø¯Ø© (Ø­ÙˆØ§Ù„ÙŠ 48 Ø§Ø³Ø¨ÙˆØ¹Ø§ ) Ø§Ù„Ø­Ø¯ Ø§Ù„Ø§Ù‚ØµÙ‰ Ù„Ø¹Ø¯Ø¯ Ù…Ù† Ø§Ù„Ù‚Ø·Ø¹ Ø§Ù„Ù†Ù‚Ø¯ÙŠØ© 20000000000   .";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "ÙÙŠ Ø§Ù„Ø¨Ø¯Ø§ÙŠØ© , ÙˆØ­Ø¯Ø© Ø§Ù„Ø²Ù…Ù† Ù‡Ùˆ 30 Ø«Ø§Ù†ÙŠØ© Ø§Ùˆ150 Ø«Ø§Ù†ÙŠØ© Ø¹Ù„Ù‰ Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© , ÙˆÙ„ÙƒÙ† 12/7/, 2015 Ù‚Ø±Ø± Ø§Ù„Ù…Ø¬ØªÙ…Ø¹ Ù„Ø²ÙŠØ§Ø¯Ø© Ø­Ø¯Ø© Ø²Ù…ÙŠÙ†ÙŠØ© Ø§Ù„Ù‰ 60 Ø«Ø§Ù†ÙŠØ© Ø§Ùˆ 300 Ø«Ø§Ù†ÙŠØ© Ø¹Ù„Ù‰ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© . ÙˆØ¬Ø§Ø¡ Ù‡Ø°Ø§ Ø§Ù„Ù‚Ø±Ø§Ø± Ø­ÙŠØ² Ø§Ù„ØªÙ†ÙÙŠØ° ÙÙŠ ÙƒØªÙ„Ø© â„–1,401,001 ÙˆÙÙŠ Ø§Ù„ÙˆÙ‚Øª Ø§Ù„Ø°ÙŠ ÙƒØ§Ù†Øª ÙÙŠÙ‡ Ø´Ø¨ÙƒØ© ÙƒØ§Ù† Myriad Ø§Ø¯Ù†Ù‰  ÙˆØ§Ù„Ø¹Ø§Ù„Ù…ÙŠØ© Ø§Ù„ØªØ¹Ù‚ÙŠØ¯ , ÙƒØ§Ù† Ù…ØªÙˆØ³Ø· Ø§Ù„ÙˆÙ‚Øª Ø§ÙƒØ«Ø± Ù…Ù† ÙˆØ­Ø¯Ø© 50 Ø«Ø§Ù†ÙŠØ© ÙˆØ¨Ø§Ù„Ø§Ø¶Ø§ÙØ© Ø§Ù„Ù‰ Ø°Ù„Ùƒ , ÙƒØ§Ù†ØªÙ…Ø±ØªØ¨Ø·Ø© Ù…Ø¹ aux-Pow Ø§Ù„Ø­Ø±Ø¨ Scrypt Ùˆ  SHA256d , Ù…Ù…Ø§ Ø§Ø¯Ù‰ Ø§Ù„Ù‰ Ø²ÙŠØ§Ø¯Ø© Ø§Ù„ÙˆÙ‚Øª ÙƒØªÙ„Ø© Ø§Ù„Ù…Ø³ØªÙ‡Ø¯ÙØ© ÙˆØ§Ø¯ Ù‰ Ø§Ù„Ù‰ Ø§ØªØ³Ø§Ù‚ Ø§ÙØ¶Ù„ ÙÙŠ Ø§Ù„Ø´Ø¨ÙƒØ© Ø¯ÙˆÙ† Ø§Ù„Ù…Ø±ÙˆØ± Ù…Ù† Ø®Ù„Ø§Ù„ Ø§Ù„ØªØ§Ø«ÙŠØ± Ø¹Ù„Ù‰ ØªÙˆØ²ÙŠØ¹ Ø§Ù„ØµØ¯Ù‚ ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad Ø§Ø·Ù„Ù‚Øª ÙÙŠ /2/ 2014 Ø±Ø¬Ù„ Ù…Ø¹  Ø§Ù„Ù„Ù‚Ø¨ 8bitcoder ÙˆÙ‡Ùˆ Ù…ÙØªØ±Ù‚ ZtaCoin . Ù‡Ø°Ø§ Ù‡Ùˆ Ø§ÙˆÙ„ Ø¹Ù…Ù„Ø© Ø§Ù„ØªØ´ÙÙŠØ± Ø¨Ø§Ø³ØªØ®Ø¯Ø§Ù… 5 POW  Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ø³Ø±Ù‰ Ø§Ù„Ø­Ø±Ø¨ Ù…Ù† Ø§Ø¬Ù„ Ø²ÙŠØ§Ø¯Ø© Ø§Ù„Ø§Ù…Ø§Ù† , ÙØ¶Ù„Ø§ Ø¹Ù† ØªØºØ·ÙŠØ© Ø§ÙƒØ¨Ø± Ù…Ù† Ø¹Ù…Ø§Ù„ Ø§Ù„Ù…Ù†Ø§Ø¬Ù… Ù…Ø¹ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ù…Ø®ØªÙ„ÙØ©-    SHA256d Ùˆ  ScryptÙ„Ø¹Ù…Ø§Ù„ Ø§Ù„Ù…Ù†Ø§Ø¬Ù… Ù…Ø¹ ASIC Ø®ØµÙ„Ø© Ø®ÙŠÙˆØ·                                  , Ske				in ï»­ Myr-Groestl Ù„Ø¹Ù…Ø§Ù„ Ø§Ù„Ù…Ù†Ø§Ø¬Ù… GPU , Qubit  , GPU , ÙˆØ­Ø¯Ø© Ø§Ù„Ù…Ø¹Ø§Ù„Ø¬Ø© Ø§Ù„Ù…Ø±ÙƒØ²ÙŠØ© Ù„Ù„ØªØ¹Ø¯ÙŠÙ† .
				HunterCoin , Ø§Ù„ØªÙŠ Ø¨Ø¯Ø§Øª ÙÙŠ Ø§ÙˆØ§Ø®Ø± Ø¹Ø§Ù… 2013 , ÙÙŠ Ø§Ù„ÙˆØ§Ù‚Ø¹ , Ø§ÙˆÙ„ Ù…Ù† Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø¹Ø¯Ø© Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ù„Ø§Ø³Ø±Ù‰ Ø§Ù„Ø­Ø±Ø¨ Ø§Ù„ØªØ¹Ø¯ÙŠÙ† (SHA256d  Ùˆ  Scrypt),  ÙˆÙ„ÙƒÙ† Ù„Ù… ØªÙƒÙ† Ù…ØµÙ…Ù…Ø© Ù„Ù„ØªØ¹Ø¯ÙŠÙ† , ÙˆØ§Ù„Ø¹Ø§Ø¨ ØªØ¹ØªÙ…Ø¯ Ø¹Ù„Ù‰ Ø¨Ù„Ø§ÙƒØ´ÙŠÙ†Ø§ Ø§Ø¹Ø·Ù‰ Ø§Ù„Ù…Ø²ÙŠØ¯ Ù…Ù† Ø§Ù„ÙˆÙ„Ø§Ø¯Ø© Ø§Ù„Ù‰ Ø§Ù„Ø¹Ø¯ÙŠØ¯ Ù…Ù† Ø¨Ø¯ÙŠÙ„ ÙƒÙˆÙŠÙ† ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ÙˆÙ„Ø¯Øª Ø¹Ø¯Ø© Ø§Ù„Ù†Ø¸ÙŠØ± Ø­Ø§Ù„ÙŠØ§ , Ø§ÙˆÙ„Ù‡Ø§ ÙƒØ§Ù† ÙŠØ³ØªØ®Ø¯Ù… Saffroncoin   Ø§ÙŠØ¶Ø§ 5 PoW Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ø³Ø±Ù‰ Ø§Ù„Ø­Ø±Ø¨ Digitalcoin Ùˆ Digibyte Ø¬Ø¹Ù„Øª Ù…Ù† Ø§Ù„ØµØ¹Ø¨ Ø§Ù„Ø´ÙˆÙƒØ© , hard-fork  Ù„Ø§Ø³ØªØ®Ø¯Ø§Ù… 3,  5  PoW Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø§Ø³Ø±Ù‰ Ø§Ù„Ø­Ø±Ø¨ Ø¹Ù„Ù‰ Ø§Ù„ØªÙˆØ§Ù„ÙŠ ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
			return "ÙÙŠ Ø§Ø¨ Ø¹Ø§Ù… 2015 ÙƒØ§Ù†Øª Ø´Ø¨ÙƒØ©  Myriad  Ø§Ù„ØµØ¹Ø¨ ÙØ§Ø±ÙƒÙˆØªØ§ , Ù„ØªÙ…ÙƒÙŠÙ† Ø§Ù„ØªØ¹Ø¯ÙŠÙ† ÙˆØ§Ø­Ø¯ Ø¹Ù„Ù‰ Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª â€“ Scrypt Ùˆ SHA256d . ÙƒØ§Ù† Ø§Ù„Ù‡Ø¯Ù Ù‡Ùˆ ØªØ­Ù‚ÙŠÙ‚ ØªØ¬Ø²Ø¦Ø© Ø´Ø¨ÙƒØ©  Ø±ÙŠØªØ§ Ù…Ø³ØªÙ‚Ø±Ø© Ø¹Ù„Ù‰ Ù‡Ø°Ù‡ Ø§Ù„Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§Øª Ø¨ÙŠÙ†Ù…Ø§ ÙŠØªÙ… ØªØºÙŠÙŠØ± Ø§Ù„ØªÙˆÙ‚ÙŠØª ÙƒØªÙ„Ø© Ù‡Ø¯Ù Ù„ÙƒÙ„ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ© Ù„Ù…Ø¯Ø© 5 Ø¯Ù‚Ø§Ø¦Ù‚ ( Ø­ØªÙ‰ , Ù…Ù† 2.5 Ø¯Ù‚ÙŠÙ‚Ø© ) Ù„Ù„Ø­ØµÙˆÙ„ Ø¹Ù„Ù‰ Ø§Ù„ÙˆÙ‚Øª Ø§Ù„Ø§Ø¬Ù…Ø§Ù„ÙŠ Ù„Ø¬Ù…ÙŠØ¹ Ø®ÙˆØ§Ø±Ø²Ù…ÙŠØ§ØªÙƒØªÙ„Ø© â€“ 1 Ø¯Ù‚ÙŠÙ‚Ø© ( 30 Ø«Ø§Ù†ÙŠØ© ÙÙŠ ÙˆÙ‚Øª Ø³Ø§Ø¨Ù‚ ) ØªØºÙŠØ± Ø³Ø­Ø¨ ÙƒØ¨Ø§Ø± Ù…Ù†Ø­Ù†Ù‰ Ø§Ù„Ø§Ù†Ø¨Ø¹Ø§Ø«Ø§Øª Ø§Ù„Ù‰ 2 Ø¯Ø±Ø¬Ø© , ÙˆØªØ¹Ø§Ø¯Ù„ Ù…Ø§ ÙŠÙ‚Ø±Ø¨ Ù…Ù† 20 Ø¹Ø§Ù…Ø§ .";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
                                return "ïºŽïº£ïºªïº› ïºŽïº»ïº©ïºïº­ 0.11.3.1,  ïºŽï»Ÿïº¬ï»³ ïº¹ïº©ïº­ ï»’ï»³ 6 /7/ 2016  , ïºŽï»¨ï»‡ïº­ ";
			case clean(" announcement & upgrade notes."):
				return "Ø§Ø¹Ù„Ø§Ù† ÙˆØªØ­Ø¯ÙŠØ« Ù‚Ø§Ø¦Ù…Ø© ";
			// mining
			case clean("Getting Started"):
				return "Ù…Ù‚Ø¯Ù…Ø©";
			case clean("Download a "):
				return "ØªØ­Ù…ÙŠÙ„";
			case clean("wallet"):
				return "Ù…Ø­ÙØ¸Ø©";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "Ù…ÙŠÙ†Ø± ØªØ­Ù…ÙŠÙ„ Ø§Ù„Ù†ÙˆØ¹ Ø§Ù„ØµØ­ÙŠØ­ , Ø­Ø¯Ø¯ Ù…ÙˆÙ‚Ø¹ ØªØ¬Ù…Ø¹ Ùˆ Ø§Ù„Ø°Ù‡Ø§Ø¨.....";
			case clean("Mining Tutorial Video"):
				return "ØªØ¯Ø±ÙŠØ¨ Ø§Ù„ÙÙŠØ¯ÙŠÙˆ Ù„Ù„ØªØ¹Ø¯ÙŠÙ†";
			case clean("Watch on "):
				return "Ù†Ù„Ù‚ÙŠ Ù†Ø¸Ø±Ø© Ø¹Ù„Ù‰";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Ø¨Ø±Ù†Ø§Ù…Ø¬ Ù„Ù„ØªØ¹Ø¯ÙŠÙ†";
			case clean("Use any SHA256d compatible ASIC"):
				return " Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§ÙŠ  SHA256d Ù…ØªÙˆØ§ÙÙ‚ Ù…Ø¹ ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Ø§Ø³ØªØ®Ø¯Ø§Ù… Ø§ÙŠ Scrypt  Ù…ØªÙˆØ§ÙÙ‚ Ù…Ø¹ ASIC";
			default:
					return $text;
		}
	}
	
	else if($lang == 'pl')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "Otwarte dla kaÅ¼dego";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad â€“ wielu algoritmiczna - jest pierwszÄ… monetÄ…, ktÃ³ra wprowadza  jednoczeÅ›nie  5 funkcji skrÃ³tu, wykorzystujÄ…cych do miningu. W odrÃ³Å¼nieniu  od Bitcoin, ktÃ³rym moÅ¼na opÅ‚acalnie kopnÄ…Ä‡ posÅ‚ugujÄ…c ASICs oraz algoritm SHA256d, Myriad jest dostÄ™pna dla Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Bezpieczna";

			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Kopacz moÅ¼e wybraÄ‡ ktÃ³rykolwiek z 5 dostÄ™pnych algorytmÃ³w â€“ SHA256d, Scrypt, Myr-Groestl, Skein, lub Yescrypt â€“ kaÅ¼dy z nich ma fiksowany czas bloku docelowego - 5 minut. CaÅ‚kowicie, blok zostaje znaleziony  w ciÄ…gu kaÅ¼dej minuty. ZÅ‚oÅ¼onoÅ›Ä‡ kaÅ¼dego z algorytmÃ³w reguluje siÄ™ w zaleÅ¼noÅ›ci od prÄ™dkoÅ›ci koparki. 
				Podczas gdy ASICs wpÅ‚ywa na mining za pomocÄ… kart graficznych  z algorytmem SHA256d, Ð° Scrypt jest nieproduktywny, pozostaÅ‚e algorytmy dominujÄ… w sferze  miningu kart graficznych. SposÃ³b multi-algorytmiczny  nowe ekskluzywne oraz innowacyjne podejÅ›cie do metodyki  ochrony za pomocÄ… 51%, poniewaÅ¼ Å¼eby otrzymaÄ‡ 51% blokÃ³w potrzebna jest duÅ¼a iloÅ›Ä‡ sprzÄ™tu.";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Zbiorowy mining rÃ³Å¼nymi algorytmami, ktÃ³rzy zwÅ‚aszcza SHA256d &amp; Scrypt, zezwala Myriad otrzymaÄ‡ przewagÄ™ kosztem olbrzymiej dostÄ™pnej mocy obliczeniowej.";

			case clean("Fair Distribution"):
				return "Sprawiedliwy podzial";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Niema preminu oraz Å¼adnych cudownych wtykÃ³w. Wszystkie uÅ¼ytkownicy sieci majÄ… jednakowe moÅ¼liwoÅ›ci dla otrzymywania Myriad wedÅ‚ug kursu rynkowego";
			// technology
			case clean("Multi-Algorithm"):
				return "Multi-algorytmy";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 AlgorytmÃ³w dostÄ™pnych dla ASIC, GPU Ð¸ CPU kopania";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dwie rundy dla funkcji skrÃ³tu algorytmu SHA256d, po raz pierwszy wykorzystanych przez nowatora kryptowalut - Bitcoin.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Najpierw zaprojektowany do CPU miningu, teraz wykorzystuje siÄ™ do generowania przez alternatywne kryptowaluty  za pomocÄ… ASICs, rozpoczynajÄ…c  od Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Specyficzny wariant algorytmu skrÃ³tu Mariad â€“ Groestl â€“ jest jednym z piÄ™ciu finalistÃ³w   NIST SHA-3 konkurowania algorytmÃ³w skrÃ³tu.";

			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Kolejnym z piÄ™ciu finalistÃ³w  konkurowania algorytmÃ³w skrÃ³tu jest NIST SHA-3, ktÃ³ry po raz pierwszy wykorzystany przez  Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return " PoczÄ…tkowo przeznaczony tylko dla algorytmu qubit CPU Å‚Ä…czy 5 uczestnikÃ³w NIST SHA-3 konkurencji  algorytmÃ³w skrÃ³tu - Trukwa, Cubehash, SHAvite, SIMD i echo.";

			case clean("Merge Mining"):
				return "Zbiorowy mining";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "RozpoczynajÄ…c od bloku 4002000, Zbiorowy mining jest dostÄ™pny na algorytmach SHA256d i Scrypt. To pozwoliÅ‚o Myriad, mieÄ‡ przewagÄ™ kosztem ogromnej prÄ™dkoÅ›ci koparki uÅ¼ywanej przez inne kryptowaluty oraz ochrony blockchainu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Zbiorowy mining, znany rÃ³wnieÅ¼ jako AuxPow, umoÅ¼liwia stosowanie Å›rodkÃ³w wydawanych na przykÅ‚ad do miningu lub Bitcoin Litecoin potwierdzenie aktualnoÅ›ci blokÃ³w w sieci Myriad bez ponoszenia jakiegokolwiek dodatkowego obciÄ…Å¼enia.";

			case clean("Distribution"):
				return "PodziaÅ‚";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad zostala wydana w sieci 23 lutego 2014 roku Ð² 18:30 UTC";

			case clean("first mined block"):
				return "pierwszy wykopany blok";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " pojawiÅ‚ siÄ™ przez 4 minuty, podtwierdzajÄ…c Å¼e nie byÅ‚o Å¼adnego preminu.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Na poczÄ…tku nagroda byÅ‚a 1000 MYR, ktÃ³re  przepoÅ‚owione kaÅ¼de 967.680 jednostek (okoÅ‚o 48 tygodni). Maksymalna liczba monet -  2 miliardy MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "PoczÄ…tkowo czas bloku docelowego wynosiÅ‚ 30 sekund, lub 150 sekund na algorytmu. W dniu 12 lipca 2015 roku, wspÃ³lnota postanowiÅ‚a wydÅ‚uÅ¼yÄ‡ czas bloku docelowego do 60 sekund lub 300 sekund
			na algorytmie, Decyzja weszÅ‚a w Å¼ycie  z bloku 1,401,001. W tym czasie Myriad miaÅ‚a niskÄ… prÄ™dkoÅ›Ä‡ koparki i rozlegÅ‚e trudnoÅ›ci na Scrypt i SHA256d, powodujÄ…c rzeczywisty Å›redni czas blok na ponad 50 sekund.
			OprÃ³cz wÅ‚Ä…czenia aux-POW na Scrypt i SHA256d, wzrost czasu bloku docelowego doprowadziÅ‚ do lepszej koordynacji  w sieci, bez wpÅ‚ywu na jakoÅ›Ä‡ podziaÅ‚u"; 
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad uruchomiony w lutym 2014 roku czÅ‚owiekiem z przezwiskiem 8bitcoder, jest odgaÅ‚Ä™zieniem ZtaCoin. Jest to pierwsza waluta kryptograficzna z uÅ¼yciem 5 algorytmÃ³w POW dla zwiÄ™kszenia bezpieczeÅ„stwa, jak rÃ³wnieÅ¼ wiÄ™kszego zasiÄ™gu miningu z rÃ³Å¼nych algorytmÃ³w - SHA256d i Scrypt ASIC do miningu i Motek Myr-Groestl do miningu GPU qubit dla GPU i CPU gÃ³rnictwa. HunterCoin, rozpoczÄ™Å‚a siÄ™ pod koniec 2013 roku, w rzeczywistoÅ›ci po raz pierwszy uÅ¼yÅ‚ kilka algorytmÃ³w POW dla gÃ³rnictwa (SHA256d i Scrypt), ale to nie byÅ‚ przeznaczony do miningu , raczej na podstawie blockchain-gier, co dodatkowo daÅ‚o poczÄ…tek dla wielu nowych kryptowalut.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad daÅ‚ poczÄ…tek dla kilka  swoich odpowiednikÃ³w, pierwszy to Saffroncoin teÅ¼ wykorzystujÄ…cy 5 PoW algorytmy. Digitalcoin Ð¸ Digibyte dokonali hard-fork, Å¼eby uÅ¼yÄ‡ odpowiednio 3 i 5 PoW algorytmÃ³w .";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "W sierpniu 2015 Myriad  dokonaÅ‚a  hard-fork,  aby umoÅ¼liwiÄ‡ Zbiorowy mining na algorytmach - Scrypt i SHA256d celem byÅ‚o uzyskanie stabilnej  prÄ™dkoÅ›ci hashowania sieci w tych algorytmach. W tej chwili czas bloku docelowego dla kaÅ¼dego algorytmu zmienili z 2,5 do 5 minut, Å¼eby  czas ogÃ³lny dla wszystkich algorytmÃ³w skÅ‚ada 1 minutÄ™(wczeÅ›niej 30 sekund). Ta zmiana pnÄ…cÄ… w gÃ³rÄ™ krzywÄ… emisji za pomocÄ… stopniu 2Ñ…, Ð¸ niweluje w przybliÅ¼eniu  20 lat.";
			 // wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "BieÅ¼Ä…ca wersja 0.11.3.1. Zobacz";
			case clean(" announcement & upgrade notes."):
				return "Anons & lista aktualizacji";
			// mining
			case clean("Getting Started"):
				return "Wprowadzenie";
			case clean("Download a "):
				return "Pobierz";
			case clean("wallet"):
				return "portfel";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", pobierz potrzebnÄ… koparkÄ™, znajdÅº gieÅ‚dÄ™  zacznij...";
			case clean("Mining Tutorial Video"):
				return "Wideo samouczek do miningu";
			case clean("Watch on "):
				return "przyjrzeÄ‡ ";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Soft do miningu";
			case clean("Use any SHA256d compatible ASIC"):
				return "UÅ¼yj jakiekolwiek SHA256d-zgodnego ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "UÅ¼yj jakiekolwiek Scrypt-zgodny ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer do miningu  OpenCL karty gficznej(GPU)";
			case clean("BitcoinTalk Thread"):
				return "WÄ…tek Ð½Ð° BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows pliki binarne";
			case clean("GitHub Source"):
				return "GitHub pliki podstawowe";
			case clean("Suggested Command Line"):
				return "W wierszu polecenia";
			case clean("Pools"):
				return "Pools";
			case clean("P2Pool nodes"):
				return "P2Pool nody";
			case clean("Run Your Own Node"):
				return "Aby rozpoczÄ…Ä‡ wÅ‚asny wÄ™zeÅ‚";
			case clean("Merge Mining Pools"):
				return " zbiorowe kopanie ";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ multipools";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "Informacja Ð¸ Åšrodki";
			case clean("Exchanges"):
				return "Kantorzy";
			case clean("Other"):
				return "Inne";
			case clean("Faucet"):
				return "Bateria";
			case clean("Tstnet Information"):
				return "Testnet Informacja";
			default:
					return $text;
		}
	}
	
	else if($lang == 'pt')
	{
		switch (clean($text))
		{
        		// homepage
	   		case clean("Open To Anyone"):
        		    return "Aberta para todos";
        		case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
        		    return "Myriad Ã© a primeira moeda multi-algoritmica que comeÃ§ou a usar simultaneamente as 5 funÃ§Ãµes de hash utilizados para mineraÃ§Ã£o.
        		    Comparando com a Bitcoin que pode ser lucrativa fazendo mineraÃ§Ã£o com ASICs e algoritmo SHA256d, Myriad estÃ¡ disponÃ­vel para Scrypt ASICS,
        		    GPUS & CPUs.";
        		case clean("Secure"):
        		    return "Segura";
        		case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit â€”
        		each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected
        		by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be
			dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to
		        find 51% of the blocks."):
			    return "Minerador pode escolher um dos 5 algoritmos disponÃ­veis: SHA256d, Scrypt, Myr-Groestl, Skein, ou Qubit â€“ cada um deles tem tempo alvo
        		    do bloco fixo - 5 minutos. Em geral, aproximadamente cada minuto hÃ¡ um bloco. Dificuldade de algoritmo estÃ¡ regularizada dependendo de hash
        		    rate de cada um. Enquanto os ASICs afetam a mineraÃ§Ã£o com placa de vÃ­deo com algoritmo SHA256d e o Scrypt estÃ¡ inÃºtil, os outros algoritmos
        		    estÃ£o dominando a mineraÃ§Ã£o atravÃ©s das placas de vÃ­deo. O mÃ©todo dos algoritmos multiplus cria uma abordagem nova, exclusiva e inovadora
        		    para o mÃ©todo de proteÃ§Ã£o com 51%, porque para conseguir 51% dos blocos precisa variedade enorme dos equipamentos.";
        		case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
        		    return "MineraÃ§Ã£o combinada com os algoritmos diferentes, inclusive o SHA256d & Scrypt, permitiu a destacar Myriad por causa do gigante
        		    desempenho disponÃ­vel de computaÃ§Ã£o.";
        		case clean("Fair Distribution"):
			    return "DistribuiÃ§Ã£o justa";
        		case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
            		    return "NÃ£o hÃ¡ prÃ©-mineraÃ§Ã£o e os blocos mÃ¡gicos escondidos com o grande prÃ©mio. Todos os usuÃ¡rios da rede tÃªm as mesmas possibilidades de
            		    receber a Myriad com o preÃ§o do mercado";
			// technology
        		case clean("Multi-Algorithm"):
        		    return "Algoritmos mÃºltiplus";
         		case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
        		    return "5 algoritmos disponÃ­veis para mineraÃ§Ã£o ASIC, GPU e CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
			    return "Dois cÃ­rculos de hash de SHA256d, primeiramente usados pelo pioneiro da criptomoeda Bitcoin";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
        		    return "Inicialmente projetado para mineraÃ§Ã£o CPU, agora estÃ¡ utilizado para extraÃ§Ã£o das muitas moedas alternativas usando ASICs, comeÃ§ou da
        		Litecoin.";
         		case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
        		    return "Especificado somente para Myriad opÃ§Ã£o de algoritmo hash Groestl Ã© somente um dos 5 finalistas do NIST SHA-3 â€“ uma competiÃ§Ã£o dos
        		    algoritmos de hash.";
		        case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
		            return "Mais um dos 5 finalistas da competiÃ§Ã£o dos algoritmos de hash Ã© NIST SHA-3, primeiro ele foi usado pela Skeincoin.";
		        case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and
			ECHO."):
		            return "Inicialmente projetado somente para CPU, o agoritmo Qubit contem os 5 participantes do NIST SHA-3 â€“ uma competiÃ§Ã£o dos algotitmos de
        		    hash â€“ entre quias estÃ£o Luffa, Cubehash, SHAvite, SIMD e ECHO.";
			case clean("Merge Mining"):
        		    return "MineraÃ§Ã£o combinada";
        		case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of
			the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
			    return "Desde o bloco 4002000, mineraÃ§Ã£o combinada estÃ¡ disponÃ­vel para os algoritmos SHA256d e Scrypt. Isso permite Myriad ganhar uma
		            vantagem por causa das grandes hashrates, usadas pelas outras moedas e tambÃ©m fornecer a seguranÃ§a do blockchain.";
		        case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on
			Myriad's blockchain, with no extra load or performance impact to the parent coin."):
        		    return "MineraÃ§Ã£o combinada tambÃ©m conhecida como AuxPow, permite usar os recursos usados por exemplo em mineraÃ§Ã£o de uá´‰oÉ”Ê‡á´‰q ou Lightcoin
	        	    para confirmaÃ§Ã£o de validade dos blocos na rede de Myriad no mesmo tempo sem nenhuma carga adicional.";
         		case clean("Distribution"):
        		    return "DistribuiÃ§Ã£o";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
        		    return "Myriad comeÃ§ou a ser utilizada 23 de fevereiro de 2014 Ã s 18:30 UTC";
		        case clean("first mined block"):
			    return "primeiro bloco encontrado";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
        		    return " apareceu depois de 4 minutos confirmando a ausÃªncia de qualquer prÃ©-mineraÃ§Ã£o";
         		case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
        		    return "No comeÃ§o o prÃªmio era de 1,000 MYR, ele se dobrava cada 967,680 blocos(aproximadamente 48 semanas). O mÃ¡ximo permitido sÃ£o
			     2 000 000 000 MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase
			the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate
			and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling
			aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of
			distribution."):
		            return "Inicialmente o tempo do bloco era de 30 segundos ou 150 segundos para o algoritmo. Mas 12 de julho de 2015 a comunidade decidiu
        		    aumentar o tempo do bloco atÃ© 60 segundos ou 300 segungos para o algoritmo. Essa decisÃ£o comeÃ§ou a funcionar a partir do bloco â„–1,401,001.
        		    Enquanto a rede Myriad tinha hashrate baixo e dificuldade alta, o tempo mÃ©dio de um bloco era mais de 50 segundos. Adicionalmente foi
        		    contactado aux-Pow para Scrypt e SHA256d, que aumentaram o tempo alvo do bloco e melhoraram a coordenaÃ§Ã£o na rede passando a
		            interferÃªncia da certa distribuiÃ§Ã£o";
		       	case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work
		       	algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein			
		       	and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
		       	coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the
		       	large majority of new coins."):
            		    return "Myriad foi lanÃ§ada em fevereiro de 2014 pela pessoa chamado de 8bitcoder, e Ã© uma bifurcaÃ§Ã£o da ztaCoin. Ela Ã© a primeira criptomoeda,
        		    que estava utilizando os 5 algoritmos POW para aumentar a seguranÃ§a, e tambÃ©m para maior cobertura dos mineiros com os algoritmos diferentes
        		    â€“ SHA256d e Scrypt para ASIC mineiros, Skein e Myr-Groestl para GPU mineiros, Qubit para GPU e CPU mineraÃ§Ãµes. HunterCoin foi lanÃ§ada no final
        		    de 2013, na realidade, ela foi a primeira moeda que usava os algoritmos POW para mineraÃ§Ã£o(SHA256d e Scrypt), mas ela foi projetada para os
			    jogos na base de blockchain e nÃ£o para mineraÃ§Ã£o. Muitos desses jogos foram o comeÃ§o das moedas alternativas.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both
            		hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
            		and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
			     return "Myriad gerou alguns dos seus analogos, primeiro dos quais foi Saffroncoin que tambÃ©m usou os 5 algoritmos PoW. Digitalcoin e Digibyte
			     fizeram o hardfork, para usar 3 e 5 PoW algoritmos. Unitus Ã© um outra moeda PoW  de 5 algorÃ­timos que compartilha com vÃ¡rios algoritmos PoW com Myriad,				
			     e permite aos usÃ¡rios minar em conjunto todos esses algoritmos. Auroracoin e Verge tambÃ©m anunciaram planos de fork para multi-algoritmo.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve
        		a more stable hashrate on those two algorithms.   At this time the target block time for each algorithm was also changed to five minutes
        		(previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve
        		out by a factor of 2x, to approximately 20 years."):			
        		      return "Em agosto de 2015 foi feito hardfork na rede Myriad, para ligar nos algoritmos Scrypt e SHA256d a mineraÃ§Ã£o unida, a meta era conseguir
			      hash rate estÃ¡vel nesses algoritmos. Nesse Ã©poca o tempo alvo do bloco para cada algoritmo foi aumentado atÃ© 5 minutos(antes disso foram 2,5
        		      minutos), para conseguir o tempo geral do bloco para todos os algoritmos 1 minuto(antes disso foram 30 segundos). Essa mudanÃ§a estende a
        		      curva da emissÃ£o para cima usando a exponenciaÃ§Ã£o 2x e equaliza aproximadamente aos 20 anos.";
		        // wallets
		        case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
             		      return "Ãšltima versÃ£o 0.11.3.1, lanÃ§ada 6 de julho 2016. Clique aqui.";
             		case clean(" announcement & upgrade notes."):
			      return "AnÃºncios & lista das atualizaÃ§Ãµes";
			case clean("Desktop"):
        		      return "PC";
        		case clean("Windows"):
        		      return "Windows";
        		case clean("32-bit Installer (11.5 MB)"):
        		      return "Instalador de 32-bit (11.5 MB)";
        		case clean("64-bit Installer (11.5 MB)"):
        		      return "Instalador de 64-bit (11.5 MB)";
        		case clean("Mobile"):
        		      return "mÃ³vel";
        		case clean("Android"):
			      return "Android";
		        case clean("Source"):
		             return "Fonte";
			case clean("Source Code (0.11.3.1)"):
		             return "Fonte (0.11.3.1)";
		        case clean("Other"):
		             return "Outro";
        		case clean("Linux"):
        		     return "Linux";
			case clean("Windows"):
        		     return "Windows";
        		case clean("JSWallet"):
        		     return "JS Carteira";
        		case clean("Brain Wallet"):
        		     return "CÃ©rebro Carteira";
        		case clean("Paper Wallet"):
        		     return "Carteira de papel";
        		// mining
        		case clean("Getting Started"):
        		    return "IntroduÃ§Ã£o";
        		case clean("Download a "):
        		    return "Baixar ";
        		case clean("wallet"):
        		    return "Bolsa";
        		case clean(", download a miner of the right type, find a pool and fire away..."):
        		    return ", baixe o mineiro necessario, encontre pool e comeÃ§a...";
        		case clean("Mining Tutorial Video"):
        		    return "FormaÃ§Ã£o de vÃ­deo na mining";
        		case clean("Watch on "):
        		    return "DÃª uma olhada ";
        		case clean("Mining Software"):
        		    return "Software da mining";
        		case clean("Use any SHA256d compatible ASIC"):
			    return "Usa qualquer SHA256d-compartivel com ASIC";
        		case clean("Use any Scrypt compatible ASIC"):
			    return "Usa qualquer Scrypt-compartivel com ASIC";
        		case clean("sgminer for OpenCL GPU mining"):
        		    return "sgminer por grafiksprocesora mining en OpenCL";
        		case clean("ccminer for CUDA GPU mining"):
        		    return "ccminer por grafiksprocesora mining en CUDA";
        		case clean("cpuminer-multi for CPU mining"):
        		    return "cpuminer-multi por grafiksprocesora mining en CPU";
        		case clean("cgminer for OpenCL GPU mining"):
        		    return "cgminer por OpenCL-grafiksprocesora minado";
        		case clean("BitcoinTalk Thread"):
        		    return "NegociaÃ§Ãµes sobre BitcoinTalk";
        		case clean("Windows Binaries"):
        		    return "Windows executÃ¡veis";
        		case clean("GitHub Source"):
        		    return "GitHub arquivos de origem";
        		case clean("Suggested Command Line"):
        		    return "No prompt de comando";
        		case clean("Pools"):
        		    return "Pula";
        		case clean("P2Pool nodes"):
        		    return "P2Pool Pula";
        		case clean("Run Your Own Node"):
			    return "Para lanÃ§amento do seu prÃ³prio node";
        		case clean("Other pools"):
            		    return "Otra pula";
			case clean("Merge Mining Pools"):
        		    return "MineraÃ§Ã£o combinada Pula";
         		case clean("zpool - The miners multipool"):
            		    return "zpool â€“ multi-pula";
        		case clean("MultiPool"):
        		    return "MultiPula";
			// services
        		case clean("Information & Resources"):
        		    return "InformaÃ§Ãµes e recursos";
			case clean("VisÃ£o Explorador (1)"):
		            return "Insight Esplorilo (1)";
		        case clean("VisÃ£o Explorador (2)"):
        		    return "Insight Esplorilo (2)";
			case clean("Abe Explorer"):
        		    return "Abe Explorador";
        		case clean("Network Status"):
        		    return "Status da rede";
        		case clean("Exchanges"):
        		    return "Trocadores";
			case clean("Shop"):
        		    return "Loja";
        		case clean("List of Coinpayments stores"):
        		    return "Lista de Coin lojas que aceitem";
        		case clean("Other"):
        		    return "De outros";
			case clean("Faucet"):
            		    return "Faucet";
			case clean("Testnet Information"):
        		    return "Testnet informaÃ§Ã£o";
        		case clean("cryptap.us Myriad page"):
        		    return "cryptap.us a pÃ¡gina Myriad";
        		case clean("Reddit/IRC myrbot information"):
        		    return "Reddit/IRC myrbot em formaÃ§Ã£o";
			default:
        			return $text;
			
		}
	}

	else if($lang == 'ru')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "×–×ž×™× ×” ×œ×›×•×œ×";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return "Myriad â€“ ×‘×¢×œ×ª ××œ×’×•×¨×™×ª×ž×™× ×ž×¨×•×‘×™× â€“ ×–××ª ×ž×˜×‘×¢ ×¨××©×•×Ÿ ×©×”×‘×™× ×œ×—×™×™× 5-×¤×•× ×§×¦×™×•×ª ×’×™×‘×•×‘ ×”×ž×©×ž×©×•×ª ×œ×›×¨×™×™×”. ×œ×”×‘×“×™×œ ×ž×‘×™×˜×§×•×™×Ÿ, ××©×¨ ××¤×©×¨ ×œ×›×¨×•×ª ×¢× ×¨×•×•×— ×¢×œ-×™×“×™ ×©×™×ž×•×© ×‘ ASIC ×•××œ×’×•×¨×™×ª× SHA256d, Myriad ×–×ž×™× ×” ×œ- Script, ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "×‘×˜×•×—×”";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "×›×•×¨×” ×¨×©××™ ×œ×‘×—×•×¨ ×›×œ ××œ×’×•×¨×™×ª× ×ž 5 ×”×–×ž×™× ×™× â€“
				 SHA256d, Scrypt, Myr-Groestl, Skein  ××• Yescrypt â€“ ×›×œ ××—×“ ×ž×”× ×‘×¢×œ ×–×ž×Ÿ ×©×œ ×‘×œ×•×§ ×§×‘×•×¢ ×•×ž×ž×•×§×“ â€“ 5 ×“×§×•×ª. ×‘×›×œ×œ×™×•×ª, ×‘×œ×•×§ × ×ž×¦× ×‘×¢×¨×š ×›×œ ×“×§×”. ×‘×”×ª×× ×œ hash rate ×©×œ ×›×œ ××œ×’×•×¨×™×ª×, ×ž×•×ª×× ×’× ×”×§×•×©×™ ×©×œ×•. ×™×—×“ ×¢× ×–××ª ×©×‘- ASIC ×ž×©×¤×™×¢×™× ×¢×œ ×›×¨×™×™×” ×¢×œ-×™×“×™ ×›×¨×˜×™×¡×™ ×ž×¡×š ×¢× ××œ×’×•×¨×™×ª× SHA256d ×• Scrypt ××™× ×• ×™×¢×™×œ, ×©××¨ ×”××œ×’×•×¨×™×ª×ž×™× ×©×•×œ×˜×™× ×¢×œ ×”×ª×—×•× ×”×›×¨×™×™×” ×¢×œ-×™×“×™ ×›×¨×˜×™×¡×™ ×ž×¡×š. ×©×™×˜×ª ××œ×’×•×¨×™×ª×ž×™× ×ž×¨×•×‘×™× ×™×•×¦×¨×ª ×’×™×©×” ×—×“×©×” ×™×™×—×•×“×™×ª ×•×—×“×©× ×™×ª ×œ×ž×ª×•×“×™×§×” ×©×œ ×”×’× ×” ×‘×¢×–×¨×ª 51%, ×ž×›×•×•×Ÿ ×©×œ×§×‘×œ×ª 51% ×©×œ ×‘×œ×•×§×™× × ×“×¨×© ×ž×’×•×•×Ÿ ×¨×—×‘ ×ž××•×“ ×©×œ ×¦×™×•×“.";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "×›×¨×™×™×” ×ž×©×•×œ×‘×ª ×¢×œ-×™×“×™ ××œ×’×•×¨×™×ª×ž×™× ×©×•× ×™×, ×”×›×•×œ×œ×™× ×‘×ª×•×›× SHA256d & Scrypt ××¤×©×¨×” ×œ Myriad ×œ×§×‘×œ ×™×ª×¨×•×Ÿ ×‘×’×œ×œ ×”×¢×•×¦×ž×” ×”×¢×¦×•×ž×” ×”×–×ž×™× ×”.  ";
			case clean("Fair Distribution"):
				return "×—×œ×•×§×” ×”×•×’× ×ª";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "×—×¡×¨×” ×›×¨×™×™×” ×ž×¨××© ×•×‘×œ×•×§×™× ×§×¡×•×ž×™× ×ž×•×¡×ª×¨×™× ×¢× ×¤×¨×¡ ×’×“×•×œ. ×›×œ ×ž×©×ª×ž×©×™ ×”×¨×©×ª ×‘×¢×œ×™ ××•×ª× ××¤×©×¨×•×™×•×ª ×œ×§×‘×œ×ª Myriad ×‘×ž×—×™×¨ ×”×©×•×§";
			// technology
			case clean("Multi-Algorithm"):
				return "××œ×’×•×¨×™×ª×ž×™× ×ž×¨×•×‘×™×";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ××œ×’×•×¨×™×ª×ž×™× ×–×ž×™× ×™× ×œ×›×¨×™×™×” ASIC, GPU ×• CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "×©× ×™ ×¡×™×‘×•×‘×™× ×œ××œ×’×•×¨×™×ª× ×”×’×™×‘×•×‘ SHA256d ×©×œ×¨××©×•× ×” ×”×©×ª×ž×© ×‘×”× ×—×œ×•×¥ ×©×œ ×ž×˜×‘×¢×•×ª ×ž×‘×•×–×¨×™× â€“ Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "×‘×ª×—×™×œ×” ×”×ž×ª×•×›× ×Ÿ ×œ×›×¨×™×™×” ×¢×œ-×™×“×™ CPU, ×¢×›×©×™×• ×ž×©×ª×ž×©×™× ×œ×›×¨×™×™×” ×¢×œ ×™×“×™ ×ž×˜×‘×¢×•×ª ×©×•× ×•×ª ×¨×‘×•×ª ××—×¨×•×ª ×‘×¢×–×¨×ª ASICs, ×”×—×œ ×ž Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "××¤×©×¨×•×ª ×™×™×—×•×“×™×ª ×¨×§ ×œ Myriad ×©×œ ××œ×’×•×¨×™×ª× ×’×™×‘×•×‘ â€“ Groestl â€“ ×–×” ××—×“ ×ž 5 ×”×¤×™× ×œ×™×¡×˜×™× ×©×œ NIST SHA-3 ×©×œ ×ª×—×¨×•×ª ××œ×’×•×¨×™×ª×ž×™ ×’×™×‘×•×‘. ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "×¢×•×“ ××—×“ ×ž×—×ž×™×©×” ×”×¤×™× ×œ×™×¡×˜×™× ×©×œ ×”×ª×—×¨×•×ª ×œ×’×™×‘×•×‘ NIST SHA-3, ××©×¨ ×”×©×ª×ž×©×• ×‘×• ×œ×¨××©×•× ×” ×‘ keincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "×‘×ª×—×™×œ×” ×”×ž×ª×•×›× ×Ÿ ×¨×§ ×œ××œ×’×•×¨×™×ª×  CPU, Qubit ×ž×©×œ×‘ 5 ×ž×©×ª×ª×¤×™ NIST SHA-3 ×ª×—×¨×•×ª ×‘××œ×’×•×¨×™×ª×ž×™ ×’×™×‘×•×‘ â€“ Lufffa, Cubehash, SHAvite, SIMD ×• ECHO.";
 			case clean("Merge Mining"):
				return "×›×¨×™×™×” ×ž×©×•×œ×‘×ª";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
				by coins using these algorithms, further securing the Myriad blockchain."):
				return "×ž×‘×œ×•×§ 4002000, ×›×¨×™×™×” ×ž×©×•×œ×‘×ª ×–×ž×™× ×” ×œ××œ×’×•×¨×™×ª×ž×™× SHA256d ×• Scrypt. ×–×” ××¤×©×¨ ×œ Myriad ×œ×§×‘×œ ×™×ª×¨×•×Ÿ ×¢×œ ×—×©×‘×•×Ÿ hash rates ×¢× ×§×™×™× ×©×ž×˜×‘×¢×•×ª ××—×¨×™× ×ž×©×ª×ž×©×™× ×‘×”× ×›×™×•×, ×•×–×” ×’× ×”×‘×˜×™×— ×‘×˜×™×—×•×ª ×©×œ ×©×¨×©×¨×ª ×‘×œ×•×§×™×.  ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "×›×¨×™×™×” ×ž×©×•×œ×‘×ª, ×™×“×•×¢×” ×’× ×› AuxPow, ×ž××¤×©×¨×ª ×œ×”×©×ª×ž×© ×‘×ž×©××‘×™× ××©×¨ ×ž×©×§×™×¢×™× ×œ×ž×©×œ ×œ×›×¨×™×™×ª Bitcoin ××• Litecoin ×œ××©×•×¨ ×ª×•×§×£ ×©×œ ×‘×œ×•×§×™× ×‘×¨×©×ª Myriad ×•×œ× ×œ×©××ª ×©×•× ×¢×•×ž×¡ × ×•×¡×£.";
			case clean("Distribution"):
				return "×—×œ×•×§×”";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad ×”×•× ×¤×§ ×œ×¨×©×ª ×‘ 23-×‘×¤×‘×¨×•××¨ 2014 ×‘ - UTC18:30 ";
			case clean("first mined block"):
				return " ×‘×œ×•×§ ×¨××©×•×Ÿ ×ž×ž×•×§×© ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " ×”×•×¤×™×¢ ×œ××—×¨ 4 ×“×§×•×ª, ×•×–×” ××™×©×¨ ×©×œ× ×”×™×™×ª×” ×©×•× ×›×¨×™×™×” ×ž×¨××©. ";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "×‘×”×ª×—×œ×”, ×¤×¨×¡ ×”×™×” 1,000 MYR ×•×—×•×œ×§×” ×¤×™ ×©× ×™×™× ×›×œ 967,680 ×‘×œ×•×§×™× (×‘×¢×¨×š 48 ×©×‘×•×¢×•×ª). ×›×ž×•×ª ×ž×¨×‘×™×ª ×©×œ ×ž×˜×‘×¢×•×ª â€“ 2 ×ž×™×œ×™××¨×“×™× MYR. ";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return "×‘×”×ª×—×œ×” ×–×ž×Ÿ ×©×œ ×‘×œ×•×§ ×”×™×•×•×” 30 ×©× ×™×•×ª ××• 150 ×©× ×™×•×ª ×œ××œ×’×•×¨×™×ª×. ××š ×‘ 12 ×‘×™×•×œ×™ 2015 ×”×§×”×™×œ×” ×”×—×œ×™×˜×” ×œ×”×’×“×™×œ ×–×ž×Ÿ ×©×œ ×‘×œ×•×§ ×¢×“ 60 ×©× ×™×•×ª ××• 300 ×©× ×™×•×ª ×œ××œ×’×•×¨×™×ª×. ×”×”×—×œ×˜×” ×”×–××ª × ×›× ×¡×” ×œ×ª×•×§×£ ×ž×‘×œ×•×§ ×ž×¡' 1,401,001. ×›××©×¨ ×œ×¨×©×ª Myriad ×”×™×” hash rate × ×ž×•×š ×•×§×•×©×™ ×¨×‘, ×–×ž×Ÿ ×ž×ž×•×¦×¢ ×©×œ ×‘×œ×•×§ ×”×™×” ×ž×¢×œ 50 ×©× ×™×•×ª. × ×•×¡×£ ×œ×›×š ×—×•×‘×¨ aux-Pow ×œ××œ×’×•×¨×™×ª× Scrypt ×• SHA256d, ×•×–×” ×”×¢×œ×” ×–×ž×Ÿ ×ž×ž×•×§×“ ×©×œ ×‘×œ×•×§ ×•×”×‘×™× ×œ×ª×™××•× ×˜×•×‘ ×™×•×ª×¨ ×‘×¨×©×ª ×•×œ× ×•×¦×“×§ ×©×œ ×—×œ×•×§×” ×œ× ×”×•×©×¤×¢ ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad ×”×•×©×§ ×‘×¤×‘×¨×•××¨ 2014 ×¢×œ-×™×“×™ ×‘×Ÿ ××“× ×¢× ×©× ×ž×©×ª×ž×© 8bitcoder ×•×ž×”×•×•×” ×ž×¢×¦×ž×• ×¤×™×ª×•×— ×©×œ ZtaCoin. ×–×” ×ž×˜×‘×¢ ×ž×‘×•×–×¨ ×”×¨××©×•×Ÿ ×©×ž×©×ª×ž×© ×‘ 5 ××œ×’×•×¨×™×ª×ž×™× POW ×œ×”×’×‘×¨×ª ×‘×˜×™×—×•×ª ×•×’× ×œ×›×™×¡×•×™ ×ž×§×™×£ ×™×•×ª×¨ ×©×œ ×›×•×¨×™×, Skein ×• Myr-Groestl ×œ×›×•×¨×™× GPU, Qubit ×œ×›×¨×™×™×ª GPU ×• CPU. ×”××ž×ª ×© HunterCoin, ××©×¨ ×”×•×©×§ ×‘×¡×•×£ 2013,  ×”×™×” ×”×¨××©×•×Ÿ ×©×”×©×ª×ž×© ×‘×›×ž×” ××œ×’×•×¨×™×ª×ž×™× POW ×œ×›×¨×™×™×” (SHA256d ×• Scrypt), ××š ×”×™×” ×ž×¢×•×¦×‘ ×œ× ×œ×›×¨×™×™×”, ××œ× ×œ×ž×©×—×§×™× ×¢×œ ×‘×¡×™×¡ ×©×¨×©×¨×ª ×‘×œ×•×§×™×, ××©×¨ ×‘×”×ž×©×š ×”×‘×™××• ×œ×”×¨×‘×” ×ž×˜×‘×¢×•×ª â€“ ×ª×—×œ×™×¤×™ bitcoin.   ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ×”×‘×™××” ×œ×›×ž×” ×ž×˜×‘×¢×•×ª ×“×•×ž×™× ×œ×•, ××—×“ ×ž×”× ×”×™×” Saffroncoin ×©×’× ×ž×©×ª×ž×© ×‘ 5 ××œ×’×•×¨×™×ª×ž×™× POW. Digitalcoin ×• Digitbyte ×‘×™×¦×¢×• hard-fork ×›×“×™ ×œ×”×©×ª×ž×© ×‘ 3 ×• 5 ××œ×’×•×¨×™×ª×ž×™ POW ×‘×”×ª××. ×ž×˜×‘×¢ ××—×¨ ×©×ž×©×ª×ž×© ×‘××œ×’×•×¨×™×ª× ×‘×“×™×§×ª ×¢×‘×•×“×” ×‘×¢×–×¨×ª ×—×ž×™×©×” ××œ×’×•×¨×™×ª×ž×™× ×•×”×ž×›×™×œ ×‘×ª×•×›×• mining-Unitus ××—×™×“. Auroracoin ×• Verge ×’× ×›×Ÿ ×”×•×“×™×¢×• ×¢×œ ×¨×¦×•×Ÿ ×œ×”×©×ª×ž×© ×‘×¨×‘-××œ×’×•×¨×™×ª×ž×™×•×ª.  ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "×‘××•×’×•×¡×˜ 2015 ×‘×¨×©×ª Myriad ×¢×©×• hard-fork ×›×“×™ ×œ×”×¤×¢×™×œ ×›×¨×™×™×” ××—×™×“×” ×‘××œ×’×•×¨×™×ª×ž×™× â€“ Scrypt ×• SHA256d ×¢×œ ×ž× ×ª ×œ×”×’×™×¢ ×œ hash rate ×™×¦×™×‘ ×©×œ ×”×¨×©×ª ×‘××œ×’×•×¨×™×ª×ž×™× ×”××œ×”. ×‘××ª×• ×”×–×ž×Ÿ, ×–×ž×Ÿ ×ž×ž×•×§×“ ×©×œ ×‘×œ×•×§ ×œ×›×œ ××œ×’×•×¨×™×ª× ×©×™×ž×• ×œ×¢×“ ×œ 5 ×“×§×•×ª (×œ×¤× ×™ ×›×Ÿ ×”×™×• 2,5 ×“×§×•×ª), ×›×“×™ ×œ×§×‘×œ ×–×ž×Ÿ ×–×”×” ×©×œ ×‘×œ×•×§ ×œ×›×œ ××œ×’×•×¨×™×ª×ž×™× â€“ ×“×§×” ××—×ª (×œ×¤× ×™ ×›×Ÿ ×”×•× ×”×™×” 30 ×©× ×™×•×ª). ×”×©×™× ×•×™ ×”×–×” ×™×ž×©×•×š ××ª ×¢×§×•×ž×ª ×”××ž×™×¡×™×” ×œ×ž×¢×œ×” ×‘×¢×–×¨×ª ×—×–×§×” ×©×œ 2 ×•×™×©×•×•×” ×‘×¢×¨×š ×œ 20 ×©× ×™×.   ";
			// wallets
			case clean("Latest version is 0.11.3.1, released April 7th 2016. See "):
                                return "×’×¨×¡×” ××—×¨×•× ×” 0.11.3.1 ×”×•× ×¤×§×” ×‘ 7-×™ ×™×•×œ×™ 2016. ×ª×¨××”";
			case clean(" announcement & upgrade notes."):
				return "×”×¦×’×” ×ž×§×“×ž×ª ×• ×¨×©×™×ž×ª ×—×™×“×•×©×™×";
			case clean("Desktop"):
				return "PC";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-×”×ª×§× ×” ×§×¦×ª (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-×”×ª×§× ×” ×§×¦×ª (11.5 MB)";
			case clean("Mobile"):
				return "×¡×œ×•×œ×¨×™";
			case clean("Android"):
				return "Android";
			case clean("Source"):
				return "×ž×§×•×¨";
			case clean("Source Code (0.11.3.1)"):
                                return "×ž×§×•×¨ (0.11.3.1)";
			case clean("Other"):
				return "××—×¨";
			case clean("Linux"):
				return " Linux ";
			case clean("Windows"):
				return "Windows";
			case clean("JSWallet"):
				return "JS Wallet";
			case clean("Brain Wallet"):
				return " ××¨× ×§ ×–×™×›×¨×•×Ÿ ";
			case clean("Paper Wallet"):
				return " ××¨× ×§ × ×™×™×¨ ";
			// mining
			case clean("Getting Started"):
				return " ×”×§×“×ž×” ";
			case clean("Download a "):
				return " ×œ×”×•×¨×“×” ";
			case clean("wallet"):
				return " ××¨× ×§ ";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return ", ×ª×•×¨×™×“ ×›×•×¨×” ×ž×¡×•×’ ×”× ×“×¨×©, ×ª×ž×¦× ×§×‘×•×¦×” ×•×§×“×™×ž×”...";
			case clean("Mining Tutorial Video"):
				return " ×”×›×©×¨×ª ×•×™×“××• ×¢×œ ×›×¨×™×™×” ";
			case clean("Watch on "):
				return " ×ª×¡×ª×›×œ ";
			case clean("Mining Software"):
				return " ×ª×•×›× ×” ×¢×‘×•×¨ ×›×¨×™×™×” ";
			case clean("Use any SHA256d compatible ASIC"):
				return "×ª×©×ª×ž×© ×‘ SHA256d ×›×œ×©×”×• â€“ ×”×ž×ª××™× ×¢× ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return " ×‘ Scrypt ×›×œ×©×”×• â€“ ×”×ž×ª××™× ×¢× ASIC ";
			case clean("sgminer for OpenCL GPU mining"):
				return " sgminer ×œ×›×¨×™×™×ª GPU OpenCL ";
			case clean("ccminer for CUDA GPU mining"):
				return " ccminer ×œ×›×¨×™×™×ª GPU CUDA ";
			case clean("cpuminer-multi for CPU mining"):
				return " cpuminer-×¨×‘ ×¢×‘×•×¨ ×›×¨×™×™×ª CPU ";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer ×œ×›×¨×™×™×ª GPU OpenCL ";
			case clean("BitcoinTalk Thread"):
				return "×¤Ö¼Ö°×ªÖ´×™×œ BitcoinTalk";
			case clean("Run your own node:"):
				return "×œ×”×¤×¢×œ×ª ×¦×•×ž×ª ×ž×©×œ×š";
			case clean("Other pools"):
				return " ×‘×¨×›×•×ª ××—×¨×•×ª ";
			case clean("Merge Mining Pools"):
				return "×›×¨×™×™×” ×ž×©×•×œ×‘×ª ×‘×¨×›×•×ª ";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ ×¨×‘-×‘×¨×›×” ";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return " ×ž×™×“×¢ ×•×ž×©××‘×™× ";
			case clean("×ž×’×œ×” ××¨×¦×•×ª (1)"):
				return "Insight Esplorilo (1)";
			case clean("Insight Explorer (2)"):
				return " ×ž×’×œ×” ××¨×¦×•×ª (2)";
			case clean("Abe Explorer"):
				return "Abe ×ž×’×œ×” ××¨×¦×•×ª ";
			case clean("Network Status "):
				return " ×ž×¦×‘ ×¨×©×ª ";
			case clean("Exchanges"):
				return " ×—×™×œ×•×¤×™ ";
			case clean("Shop"):
				return " ×œÖ´×§Ö°× ×•Ö¹×ª ";
			case clean("List of Coinpayments stores"):
				return " ×¨×©×™×ž×” ×©×œ ×—× ×•×™×•×ª ×ª×©×œ×•×ž×™ ×ž×˜×‘×¢ ";
			case clean("Other"):
				return " ×Ö·×—Öµ×¨ ";
			case clean("Faucet"):
				return " Faucet ";
			case clean("Testnet Information"):
				return "Testnet ×žÖµ×™×“Ö¸×¢";
			case clean("cryptap.us Myriad page"):
				return "Myriad-×¢×ž×•×“ cryptap.us";
			case clean("Reddit/IRC myrbot information"):
				return " ×žÖµ×™×“Ö¸×¢ myrbot Reddit/IRC";
			default:
				return $text;
			}
		}

	else if($lang == 'nl')
	{
      		switch (clean($text))
      		{
			// homepage
			case clean("Open To Anyone"):
				return "Open voor iedereen";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return "Myriad â€“ multi-algoritmisch is de eerste munt die heeft tegelijkertijd geÃ¯mplementeerd 5 hashfuncties die voor de mining gebruikt worden.  In tegenstelling tot de Bitcoin die profitabel gemind worden konnen met gebruik van Aashiqui  en het SHA256d-algoritme, is  Myriad toegankelijk voor Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Ongevaarlijk";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ðœiner kan elk van 5 toegankelijke algoritmen kiezen â€“ SHA256d, Scrypt, Myr-Groestl, Skein of Yescrypt â€“ elk van hen heeft de gefixeerd doeltijd van een blok â€“ 5 minuten. In 't geheel wordt het blok ongeveer iedere minuut gevonden. Afhankelijk van de hash rate van elk algoritme wordt ook zijn ingewikkeldheid gereguleerd.
				Terwijl Aashiqui de mining beinvloedt door videokaarten met het SHA256d-algoritme en Scrypt onproduktief is, domineren andere algoritmen de miningssfeer met videokaarten. De meerdere-algoritmenmethode schept een nieuwe exclusieve en innovatieve aanpak voor de beschermingsmethodiek met behulp van 51% want een overgroot scala aan apparatuur zal nodig zijn om 51% van de blokken te krijgen";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "De gecombineerde mining met verschillendÐµ algoritmen die SHA256d & Scrypt begrijpen, heeft Myriad gelaten een voordeel krijgen door middel van overgrote beschikbare rekenkapaciteiten";
			case clean("Fair Distribution"):
				return "Eerlijke distributie";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Er zijn niet de premine en de verborgen magische blokken met grote beloning. Alle netwerkgebruikers hebben dezelfde kansen om Myriad tegen marktwaarde te krijgen";
			// technology
			case clean("Multi-Algorithm"):
				return "Meerdere algoritmen";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algoritmen die voor ASIC, GPU en CPU-mining toegankelijk zijn:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Twee rondes voor het SHA256d-hash-algoritme die voor het eerst door de cryptogeld pionier - Bitcoin gebruikt werden.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
 				return "Oorspronkelijk ontworpen voor de CPU mining, wordt nu voor de winning met vele alternatieve munten door middel van ASICs, vanaf Litecoin gebruikt.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Een slechts voor Myriad specifieke variant van het hash-algoritme â€“ Groestl â€“ is een van vijf finalisten van de NIST SHA-3-hash-algoritmenwedstrijd.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Een anderÐµ finalist van de hash-algoritmenwedstrijd NIST SHA-3 die voor het eerst door Skeincoin gebruikt werd.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Het slechts voor CPU oorspronkelijk ontworpen Qubit-algoritme combineert 5 deelnemers van de NIST SHA-3-hash-algoritmenwedstrijd â€“ Luffa, Cubehash, SHAvite, SIMD en ECHO.";
 			case clean("Merge Mining"):
				return "Gecombineerde mining";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
				return "Vanaf het blok 4002000 is de gecombineerde mining voor de SHA256d- en Scrypt-algoritme beschikbaar. Het heeft Myriad gelaten een voordeel krijgen door middel van de overgrote hash rates die thans door andere munten gebruikt worden evenals voor de veiligheid van de blockchain gezorgd heeft.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "De gecombineerde mining die ook bekend is als AuxPow, laat gebruiken de ressources die bijv. voor de Bitcoin- of Litecoin-mining verbruikt worden om de  validiteit van blokken in het Myriad netwerk te bekrachtigen, erbij geen extra belasting afdragend.";
			case clean("Distribution"):
				return "Distributie";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad werd in het netwerk om 18:30 UTC op 23 februari 2014 uitgebracht";
			case clean("first mined block"):
				return "het eerste gevonden blok";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " heeft na 4 minuten verschenen, daardoor bevestigend dat er geen premine was.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Oorspronkelijk bedroeg de beloning 1,000 MYR en werd elke 967,680 blokken(ongeveer 48 weken) gehalveerd. Het maximum aantal munten is 2 milliarden.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return "Oorspronkelijk was de bloktijd 30 seconden of 150 seconden per algoritme. Op 12 juli   2015 heeft echter de gemeenschap  besloten de bloktijd te vermeerderen tot 60 seconden of 300 seconden per algoritme. Het besluit heeft in werking getreden vanaf het blok nr. 1,401,001. Terwijl het Myriad netwerk een lage hash rate en hoge complexiteit had, was de gemiddelde bloktijd meer dan 50 seconden. Bovendien, werd aangesloten aux-Pow voor Scrypt en SHA256d, wat de doeltijd van een blok vermeerderde en tot een betere samenhang in het network leidde, de invloed op de eerlijkheid van de distributie voorbijgaand.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad werd in februari 2014 door een mens met de nicknaam 8bitcoder gelanceerd en is de ZtaCoin fork. Het is het eerste cryptogeld die 5  POW algoritmen gebruikt om de veiligheid te verhogen evenals de miners met verschillende algoritmen - SHA256d en Scrypt voor ASICminers, Skein en Myr-Groestl voor GPU miners, Qubit voor de GPU en CPU mining meer te omvatten.   HunterCoin die aan het eind van het jaar 2013 gelanceerd werd, heeft inderdaad  als eerste enkele POW algoritmen voor de mining SHA256d en Scrypt)gebruikt, zij werd echter ontworpen niet voor de mining, maar voor de spellen op basis van de blockchain die verder aan vele altcoins het leven gaven.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad heeft vele zijn equivalenten voortgebracht, het eerste van welke  was  Saffroncoin die evenals 5 PoW algoritmen gebruikt. Digitalcoin en Digibyte hebben de hard-fork gemaakt om 3 en 5 PoW algoritmen respectievelijk te gebruiken. Unitus is nog eens vijf-algo PoW munt die verschillende PoW algos met Myriad deelt, en stelt gebruikers in staat om te fuseren-mine op alle vijf van haar algos. Auroracoin en Verge hebben ook plannen aangekondigd om vork om multi-algo";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.   At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "In augustus 2015 werd het Myriad netwerk gehardforkt om een verenigde mining op algoritmen - Scrypt en SHA256d te activeren, het doel zijnd een stabiele hash rate op deze algoritmen te bereiken. Toen werd de doeltijd van een blok voor elk algoritme tot 5 minuten (ertoe zijnd 2,5 minuten) veranderd om de  totale tijd van een blok voor alle algoritmen â€“ 1 minuut (ertoe zijnd 30 seconden) te krijgen. De verandering zal de emissiecurve met behulp van de 2x graad optrekken en met omtrent 20  jaren gelijkmaken.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 7th 2016. See "):
 				return "De nieuwste versie 0.11.3.1 op 7 juli 2016 uitgegeven. Zie ";
			case clean(" announcement & upgrade notes."):
				return " aankondiging & Update lijst ";
			case clean("Desktop"):
				return "PC";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-bit Installer (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-bit Installer (11.5 MB)";
			case clean("Mobile"):
				return "Mobiel";
			case clean("Android"):
				return " Android ";
			case clean("Source"):
				return "Bron";
			case clean("Source Code (0.11.3.1)"):
				return "Broncode (0.11.3.1)";
			case clean("Other"):
				return "Anders";
			case clean("Linux"):
				return " Linux ";
			case clean("Windows"):
				return " Windows ";
			case clean("JSWallet"):
				return " JSWallet ";
			case clean("Brain Wallet"):
				return "Hersenen Wallet";
			case clean("Paper Wallet"):
				return "Papier Wallet";
			// mining
			case clean("Getting Started"):
				return "Ermee beginnen";
			case clean("Download a "):
				return "Download een";
			case clean("wallet"):
				return "wallet";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return ", download een vereist type miner, vind de pool en vooruit...";
			case clean("Mining Tutorial Video"):
				return "Mining zelfstudie video";
			case clean("Watch on "):
				return "Bekijk op ";
			case clean("Mining Software"):
				return "Mining Software";
			case clean("Use any SHA256d compatible ASIC"):
				return "Gebruik elk SHA256d-compatible  ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Gebruik elk Scrypt-compatible  ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer voor OpenCL GPU mining ";
			case clean("ccminer for CUDA GPU mining"):
				return " ccminer voor CUDA GPU mining ";
			case clean("cpuminer-multi for CPU mining"):
				return "cpuminer-multi voon CPU mining";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer voon OpenCL GPU mining";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalk draad";
			case clean("Windows Binaries"):
				return "Windows binaries";
			case clean("GitHub Source"):
				return "GitHub bron";
			case clean("Suggested Command Line"):
				return "Gesuggereerd command line";
			case clean("Pools"):
				return "Pools";
			case clean("P2Pool nodes"):
				return "P2Pool nodes";
			case clean("Run Your Own Node"):
				return "Om je eigen node te lanceren";
			case clean("Other pools"):
				return "Anders pools";
			case clean("Merge Mining Há»“ "):
				return "gecombineerde mining";
			case clean("zpool - The miners multipool"):
				return "zpool â€“ The miners multipool";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "informatie en bronnen";
			case clean("VisÃ£o Explorador (1)"):
				return "Blok Explorer (1)";
			case clean("VisÃ£o Explorador (2)"):
				return "Blok Explorer (2)";
			case clean("Abe Explorer"):
				return "Abe Explorer";
			case clean("Network Status"):
				return "netwerk toestand";
			case clean("Exchanges"):
				return "Markten";
			case clean("Shop"):
				return "winkel";
			case clean("List of Coinpayments stores"):
				return "Lijst van winkels met behulp van Myriad";
			case clean("Other"):
				return "Ander";
			case clean("Faucet"):
				return "Faucet";
			case clean("Testnet Information"):
				return "Testnet Informatie";
			case clean("cryptap.us Myriad page"):
				return "cryptap.us Myriad pagina";
			case clean("Reddit/IRC myrbot information"):
				return "Reddit/IRC myrbot informatie";
        		 default:
					return $text;
      	
      			}
	 	}
	 	
	else if($lang == 'hr')
	{
		switch (clean($text))
		{
				// homepage
				case clean("Open To Anyone"):
					return "Otvorena svakom";

				case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
					return "Myriad â€“ multi algorotmiÄna - to je prva novÄ‡anica , koristi istovremeno 5 heÅ¡ opcija, koji koristi za maining. Za razliku od Bitkoina, koji moÅ¾e isplatlivo rudarstvo koristeÄ‡i Asiki i algoritam SHA256d, Myriad dostupan za Scrypt ASICS, GPUS & CPUs.";
				case clean("Secure"):
					return "Sigurna";

				case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
					return "Rudar moÅ¾e izabrati bilo koji od 5 dostupni algoritama â€“ SHA256d, Scrypt, Myr-Groestl, Skein, ili Yescrypt â€“ svaki od njih fiksno cjelo vrijeme jedinici   â€“ 5 minuta. U cjelom, jedinica nalazi se svaku minutu. Zavisi od heÅ¡ reita svakog algoritma odreÄ‘uje se i njugova teÅ¾ina.
					U tom vremenu kad Asiki uteÅ¡ava rudarstvo gragiÄke karticama sa algoritmama  SHA256d Ð° Scrypt nije produktivan, ostale algoritmi dominiraju podruÄje rudarstva videokarticama. NaÄin punomoguÄni algoritama stvara novi eksklusivan i poseban pristup sa tehnikom zaÅ¡titi s pomoÄ‡ju 51%, za to Å¡to za dobitak  51% jedinici treba se veliki izbor opremi.";

				case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
					return "Skupleno rudarstvo sa razliÄ‡itima algoritmama, ukljucuje u sebe SHA256d & Scrypt, dao Myriad dobiti prednost zbog ogromne dostupne snage.";

				case clean("Fair Distribution"):
					return "PoÅ¡tena distribucija";
				case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
					return "Nema premain i  sakrivani Äarobni jedinici sa velikim dobitkom. Svi koristniki mreÅ¾i imaju jednaki moguÄnosti za dobitak Myriad po svojoj cjeni";
				// technology
				case clean("Multi-Algorithm"):
					return "velikomoguÄni algoritmi";
				case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
					return "5 algoritma dostupni za ASIC, GPU i CPU rudarstva";
				case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
					return "Dvije runde za algoritam heÅ¡irovanja SHA256d, prvi put kosiÅ¡tena pionirom  cryptocurrency - Bitcoin.";

				case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
					return "Od poÄetka isplanirovan za rudarstvo splanirovan pod rudarstvo CPU, sad se koristi za izlaz puno alternativnima novÄanicama sa pomoÄ‡u ASICs, poÄine sa Litecoin.";

				case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
					return "SpecifiÄno samo za  Myriad variant sa heÅ¡-algoritmima â€“ Groestl â€“ to je jean od pet finaliste NIST SHA-3 natjecaja  algoritima heÅ¡.";

				case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
					return "JoÅ¡ jedan od pet finalisti natjecaja po heÅ¡ NIST SHA-3, koji bio prvi put iskoriÅ¡ten Skeincoin.";

				case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
					return "Od poÄetka napravljeni projekt samo iz pod  CPU algoritam Qubit kombinira 5  NIST SHA-3 Älanovi natjeÄaja po heÅ¡ algoritmima â€“ Luffa, Cubehash, SHAvite, SIMD i ECHO.";

				case clean("Merge Mining"):
					return "Zajedno rudarstvo";

				case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
					return "PoÄine od jedinici 4002000, zajedniÄko rudarstvo dostupno za SHA256d i Scrypt algoritmima. Ono dao  Myriad dobiti prednost zbog veliki heÅ¡-reitov, iskoriÅ¡teni u tomu vremenu drugima novcanicima , joÅ¡ to osiguralo sigurnost jediniÄ‡ici.";

				case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
				or performance impact to the parent coin."):
					return "ZajedniÄ‡esko rudarstvo, koji popularan kao AuxPow,daje koristit izvore i snagu, koji se troÅ¡i, na primer, na rudarstvo  Bitcoin ili Litecoin za podtvrdu vrijednosti jedinici u mreÅ¾i Myriad koja ne vuÄ‡i niÅ¡ta od dopunskog posla.";

				case clean("Distribution"):
					return "Distribucija";
				case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
					return "Myriad bila izdana u mreÅ¾u  23, veljaÄa 2014 u 18:30 UTC";

				case clean("first mined block"):
					return "prva pronaÄ‘ena jedinica";
				case clean(" came 4 minutes later, thus establishing that there was no premine."):
					return " pojavila se preko 4 minute, koja podtvrduje Å¡to nije bilo nikakvog prejmana.";

				case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
					return "Od poÄetka, dobitak bio 1,000 MYR, i djelila se svaki 967,680 jedinici(oko 48 tednov). maksimalno se moÅ¾e dobiti novÄanice  â€“ 2 milliarda  MYR.";

				case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
				per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
				In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
					return "U svom vremenu , svaka jedinica bila  30 sekunda, ili 150 sekund  za algoritam. ali 12. srpanja  2015 zajednica odluÄila poveÄati vrijeme jedinici do 60 sekunda, ili 300 sekunda za algoritam. Ova odluka pocela raditi u snagu sa jedinici â„–1,401,001. u tom vremenu, kad je mreÅ¾a Myriad imala nizak heÅ¡ reit i veliku teÅ¾inu, prosjek od jedinici javlja se vise od 50 sekunda. Kao dopunak bilo jos ukljuÄeno aux-Pow za Scrypt i SHA256d, ono povjeÄalo vrijeme jedinici i dao lijepsej slaÅ¾enosti u mreÅ¾i pretjecanje za poÅ¡tenu distribuciju.";

				case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
				Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
				coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
					return "Myriad izdana u veljaÄu 2014 Äovjekom sa nikom 8bitcoder, i predstavljao  fork ZtaCoin. To je prva kripto valuta, koja koristi 5 POW algoritma za povjeÄanje sigurnosti, joÅ¡ za joÅ¡ viÅ¡ej  pokrivenostÐ´Ð»Ñ mainera sa razliÄatima algoritmima â€“ SHA256d i Scrypt za ASIC mainera, Skein i Myr-Groestl za GPU mainera, Qubit za GPU i Ð¦ÐŸÐ£ maininga . HunterCoin, pokrenuti na kraju 2013, zapravo, prva bila iskoriÅ¡tila nekoliko algoritima POW za rudarstvo(SHA256d i Scrypt), no ona bila splanirana nije za rudarstvo, za isgaÄke na osnove jediniÄeci, koja na kraju dali su Å¾ivot drugima alt-kojnima.";

				case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
				Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
				and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
					return "Myriad iznjedrila nekoliko sliÄni sebe, prvi od kojih bio Saffroncoin takoÄ‘er koriÅ¡tenij 5 PoW algoritama. Digitalcoin i Digibyte napravili su  hard-fork, da bi mogli koristitit  3 i 5 PoW algoritima, takoÄ‘er.";

				case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
				At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
				this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
					return "U kolovozu 2015 mreÅ¾a Myriad bila hard-forknuta, da bi mogla ukljuÄiti u sebe upaliti jedino rudarstvo na algoritmima â€“ Scrypt i SHA256d, cilju bila dobitak sigurnog heÅ¡ reita mreÅ¾i na ovih algoritmima . u tom vremenu vrijeme jedinici za svakog algoritma promjenili do 5 minuta(prije toga  2,5 minutice), da bi se moglo dobiti cjelokupni  vrijeme jedinici za svih algoritmima â€“ 1 minutu( prije toga samo  30 sekunda). ovo mjerenje vuÄi krivu emisije gore sa pomoÄ‡u stupenice 2Ñ…, to se ravna pribliÅ¾no k 20 godinam.";

				// wallets
				case clean("Latest version is 0.11.3.1, released July 7th 2016. See "):
					return "Zadnja versija 0.9.2.17, izdana 7. srpanj 2016. Gledajte";
				case clean(" announcement & upgrade notes."):
					return " objava & popis aÅ¾uriranje";
				// mining
				case clean("Getting Started"):
					return "Uvod";
				case clean("Download a "):
					return "Prenesi ";
				case clean("wallet"):
					return "zaporno";
				case clean(", download a miner of the right type, find a pool and fire away..."):
					return ", sprÅ¾ite mainer koji se treba, pronaÄ‘ite pul i idete dalije...";
				case clean("Mining Tutorial Video"):
					return "Video trening za rudarstvo";
				case clean("Watch on "):
					return "Si oglejte";
				case clean("Youtube"):
					return "Youtube";
				case clean("Mining Software"):
					return "Programska oprema za rudarstvo";
				case clean("Use any SHA256d compatible ASIC"):
					return "Koristite bilo koji SHA256d-koji paÅ¡e za ASIC";
				case clean("Use any Scrypt compatible ASIC"):
					return "Koristite bilo koji Scrypt-koji paÅ¡e za ASIC ";
				case clean("sgminer for OpenCL GPU mining"):
					return "sgminer za rudarstvo prek OpenCL na grafiÄni kartici (GPU)";
				case clean("BitcoinTalk Thread"):
					return "Navoj na BitcoinTalk";
				case clean("Windows Binaries"):
					return "Windows izvedljive";
				case clean("GitHub Source"):
					return "GitHub izvedljive";
				case clean("Suggested Command Line"):
					return "V ukazno vrstico";
				case clean("Pools"):
					return "Pula";
				case clean("P2Pool nodes"):
					return "P2Pool vozliÅ¡Äa";
				case clean("Run Your Own Node"):
					return "Da zaÄnete svoje vozliÅ¡Äe";
				case clean("Merge Mining Pools"):
					return "Bazeni rudarjenja v kombinaciji";
				case clean("zpool - The miners multipool"):
					return "zpool â€“ multi-floor";
				case clean("MultiPool"):
					return "MultiPool";
				// services
				case clean("Information & Resources"):
					return "Informacije in viri";
				case clean("Exchanges"):
					return "Izmenjevalniki";
				case clean("Other"):
					return "Druga";
				case clean("Faucet"):
					return "Å½erjav";
				case clean("Testnet Information"):
					return "Testnet Informacije";
        		 	default:
					return $text;
      			}
	 	}
	else if($lang == 'tr')
	{
		switch (clean($text))
		{
				// homepage
				case clean("Open To Anyone"):
					return "Herkese aÃ§Ä±k";
				case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
					return "Myriad â€“multi-algoritmik - aynÄ± zamanda, mining iÃ§in kullanÄ±lan, 5 hash fonksiyonlarÄ± gerÃ§ekleÅŸtiren bir jeton. ASIC-ler ve SHA256d algoritma kullanarak ve sadece kÃ¢rlÄ± mayÄ±nlÄ± edilebilir Bitcoin aksine, Myriad SHA256d ASICS,Scrypt ASICS, GPUS & CPUs iÃ§in kullanÄ±labilir.";
				case clean("Secure"):
					return "GÃ¼venli";
				case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt â€”
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
					return "Miner 5 mevcut algoritmalar arasÄ±nda herhangi birini seÃ§ebilir â€“ SHA256d, Scrypt, Myr-Groestl, Skein, veya Yescrypt â€“ BunlarÄ±n her birisinde bloÄŸun sabit bir hedef sÃ¼resi varâ€“ 5 dakika. Genellikte, blok yaklaÅŸÄ±k her bir dakika sonra oluyor. Her bir algoritmin zorluÄŸu onun hash oranÄ±na gÓ§re deÄŸerlendiriliyor. ASIC-ler mininge grafik kartlar ile SHA256d algoritma ile etkilerken,Scrypt verimsizdir, diÄŸer algoritmalar ise mining kÃ¼resini grafik kartlar ile domine ediyorlar. Multi-algoritmalar iÅŸlemi 51% yardÄ±mÄ±yla koruma tekniÄŸi kullanarak yeni bir Ó§zel ve inovatif yaklaÅŸÄ±m oluÅŸturuyor ,Ã§Ã¼nkÃ¼ 51% bloklarÄ± elde etmek iÃ§in bÃ¼yÃ¼k bir ekipman aralÄ±ÄŸÄ± gerekiyor.";
				case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
					return "SHA256d & Scrypt-ten oluÅŸan birleÅŸik mining, farklÄ± algoritmalar ile, bÃ¼yuk bir mevcut hesaplama kapasiteler nedeniyle Myriada yarar almaya izin verdi.";
				case clean("Fair Distribution"):
					return "Adil daÄŸÄ±tÄ±m";
				case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
					return "Premayn ve bÃ¼yÃ¼k mÃ¼kafatlÄ± gizli sihirli bloklar eksiktir. TÃ¼m aÄŸ kullanicilar MyriadÄ± piyasa deÄŸeri ile  elde etmek iÃ§in eÅŸit fÄ±rsatlara sahiptirler";
				// technology
				case clean("Multi-Algorithm"):
					return "Multi-algoritmalar";
				case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
					return "ASIC, GPU ve mining-in CPU-sÄ± iÃ§in uygun 5 algoritma:";
				case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
					return "Ilk kez cryptocurrency Ó§ncÃ¼sÃ¼ tarafÄ±ndan kullanÄ±lan, SHA256d hashing algoritmasÄ± iÃ§in iki round- Bitcoin.";
				case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
					return "BaÅŸlangÄ±Ã§ta CPU-sadece hazÄ±rlanan ÅŸifre hashing algoritmasÄ±, ÅŸimdi Litecoin-den baÅŸlayarak, ASICs yardÄ±mÄ±yla, Ã§Ä±karma iÃ§in bir Ã§ok alternatif jetonlar tarafÄ±ndan kullanÄ±lÄ±yor.";
				case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
					return "Sadece Myriad iÃ§in spesifik olan hash algoritma opsiyonuâ€“ Groestl â€“bu NIST SHA-3 hashing algoritmalar yarÄ±ÅŸmasÄ±nÄ±n beÅŸ finalistlerin biriir.";
				case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
					return "NIST SHA-3 hash yarÄ±ÅŸmanÄ±sÄ±nda, ilk Ó§nce Skeincoin tarafÄ±ndan kullanÄ±lmÄ±ÅŸ beÅŸ finalistler arasÄ±ndan baÅŸka biri.";
				case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
					return "BaÅŸlangÄ±Ã§ta CPU-sadece hazÄ±rlanan algoritma Qubit 5 NIST SHA-3 hash algoritmalar yarÄ±ÅŸma katÄ±lÄ±mcÄ±marÄ± birleÅŸtiriyorâ€“ Luffa, Cubehash, SHAvite, SIMD ve ECHO.";
				case clean("Merge Mining"):
					return "BirleÅŸen mining";
				case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
				by coins using these algorithms, further securing the Myriad blockchain."):
					return "4002000 bloktan baÅŸlayarak, birleÅŸen mining SHA256d ve Scrypt algoritmalar iÃ§in mevcuttur. Bu Myriad-a ÅŸu an baska jetonlar tarafÄ±ndan kullanÄ±lan bÃ¼yÃ¼k bir hash oranlarÄ± nedeniyle yarar almaya izin verdi hem de blockchain gÃ¼venliÄŸini saÄŸladÄ±.";
				case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
					return "BirleÅŸen mining,AuxPow olarak da bilinen mesela Bitcoin miningi iÃ§in harcanan kaynaklarÄ± kullanmaya izin veriyor veya Myriad aÄŸÄ±nda bloklarÄ±n geÃ§erliÄŸini onaylamak iÃ§in, aynÄ± zamanda herhagi bir ek yÃ¼k taÅŸÄ±madan.";
				case clean("Distribution"):
					return "DaÄŸÄ±tÄ±m ";
				case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
					return "Myriad aÄŸa 23 Åžubat 2014 yÄ±lda saat 18:30 UTC yayÄ±lmÄ±ÅŸtÄ±";
				case clean("first mined block"):
					return "Ilk bulunan blok";
				case clean(" came 4 minutes later, thus establishing that there was no premine."):
					return " 4 dakika sonra ortaya Ã§Ä±ktÄ±, bÓ§ylece hiÃ§bir premayn olmadÄ±ÄŸÄ±nÄ± onayladÄ±.";
				case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
					return "BaÅŸlangÄ±Ã§ta, mÃ¼kafat 1,000 MYR idi, ve her 967,680 blok ikiye bÓ§lÃ¼nÃ¼yordu (yaklaÅŸÄ±k 48 hafta). Maksimum jeton sayÄ±sÄ± â€“ 2 milliard MYR.";
				case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
				per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
				In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
					return "AslÄ±nda blok sÃ¼resi 30 saniye idi, veya 150 saniye algoritma iÃ§in. Ama 12 Temmuz 2015 topluluk, blok sÃ¼resini 60 saniyeye arttÄ±rmaya karar Verdi, veya 300 saniye algoritma iÃ§in. Bu karar â„–1,401,001 bloktan yÃ¼rÃ¼lÃ¼ÄŸe girdi. Halbuki Myriad aÄŸÄ± dÃ¼ÅŸÃ¼k hash oranÄ±na ve yÃ¼ksek zorluÄŸa sahipti, ortlama blok sÃ¼resi 50 saniyeden fazla idi. Ek olarak aux-Pow, Scrypt ve SHA256d iÃ§in baÄŸlanmÄ±ÅŸ olmuÅŸtu, bu bloÄŸun hedef sÃ¼resini arttÄ±rdÄ± ve daÄŸÄ±tÄ±m dÃ¼rÃ¼stuÄŸunÃ¼n etkisini atlayarak daha iyi bir aÄŸ kordinasyonuna yol aÃ§tÄ±";
				case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
				Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
				coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
					return "Myriad Åžubat ayÄ±n 2014 8bitcoder kullanÄ±cÄ± adÄ±yla tanÄ±nan adam tarafÄ±ndan yayÄ±lmÄ±ÅŸtÄ±, ve Zetacoin-dan Ã§atallanmÄ±ÅŸtÄ±. Bu, gÃ¼venliÄŸin arttÄ±rÄ±lmasÄ± iÃ§in 5 POW algoritmalar kullanan ilk cryptocurrency, hem de deÄŸiÅŸik algoritmalÄ± minerlerin bÃ¼yÃ¼k bir kapsamasÄ± iÃ§in- SHA256d ve Scrypt ASIC minerleri iÃ§in, Skein ve Myr-Groestl GPU minerleri iÃ§in, Qubit GPU ve CPU miningler iÃ§in      
					2013 yÄ±lÄ±n sonunda yayÄ±lan HunterCoin, aslÄ±nda, mining iÃ§in ilk olarak bazÄ± POW algoritmalarÄ± kullanmÄ±ÅŸtÄ±,(SHA256d Ð¸ Scrypt), ama o mining iÃ§in tasaralanmamÄ±ÅŸtÄ±, ve  daha sonra bir Ã§ok jetonlara doÄŸum veren blockchain temelinde olan oyunlar iÃ§indi.";
				case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
				Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
					return "Myriad birkaÃ§ analoglar oluÅŸmasÄ±na neden oldu, bunlardan birincisi ayrÄ±ca 5 PoW algoritmalar kullanan Saffroncoin idi. Ona gÓ§re Digitalcoin ve Digibyte 3 ve 5 PoW algoritmalarÄ± kullanmak iÃ§in hard-fork yaptÄ±lar.";
				case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
				At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
				this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
					return "AÄŸustos ayÄ± 2015 Myriad aÄŸÄ± Scrypt ve SHA256d algoritmalÄ± tek miningi etkinleÅŸtirmek iÃ§in hard-fork yapÄ±lmÄ±ÅŸtÄ±. AmaÃ§ bu algoritmalarda istikrarlÄ± bir aÄŸ hash oranÄ± kazanmaktÄ±. O zaman, tÃ¼m algoritmalar iÃ§in toplam blok sÃ¼resini elde etmek iÃ§in - 1 dakika(30 saniyeye kadar) bloÄŸun hedef sÃ¼resini 5 dakikaya kadar deÄŸiÅŸtirdiler(Ó§nce 2,5 dakikaydÄ±).Bu deÄŸiÅŸim emisyon curvesini 2x yardÄ±mÄ±yla yukarÄ±ya Ã§ekecek ve yaklaÅŸÄ±k 20 seneye eÅŸitler.";
				// wallets
				case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
					return "Son versiyon 0.9.2.17, 7ci KasÄ±m 2015 yayÄ±ldÄ±. Bakmak";
				case clean(" announcement & upgrade notes."):
					return "Ðnons & gÃ¼ncelleme listesi";
				// mining
				case clean("Getting Started"):
					return " TanÄ±tÄ±m";
				case clean("Download a "):
					return "Indir";
				case clean("wallet"):
					return "Ã‡anta";
				case clean(", download a miner of the right type, find a pool and fire away..."):
					return ", doÄŸru tip mineri indirin, pulu bulun ve ileriye...";
				case clean("Mining Tutorial Video"):
					return "Mining Video eÄŸitimi";
				case clean("Watch on "):
					return "Bakmak ";
				case clean("Youtube"):
					return "Youtube";
				case clean("Mining Software"):
					return "Mining YazÄ±lÄ±m";
				case clean("Use any SHA256d compatible ASIC"):
					return "Herhangi bir SHA256d-uygun ASIC-Ä± kullanÄ±n ";
				case clean("Use any Scrypt compatible ASIC"):
					return "Herhangi bir Scrypt-uygun ASIC-Ä± kullanÄ±n ";
				case clean("sgminer for OpenCL GPU mining"):
					return "sgminer minng iÃ§in OpenCL ekran kartÄ± Ã¼zerinde(GPU)";
				case clean("BitcoinTalk Thread"):
					return "Ã¼zerinde iplik BitcoinTalk";
				case clean("Windows Binaries"):
					return "Windows yÃ¼rÃ¼tÃ¼lebilir";
				case clean("GitHub Source"):
					return "GitHub kaynak dosyalarÄ±";
				case clean("Suggested Command Line"):
					return "Komut istemine";
				case clean("Pools"):
					return "Pula";
				case clean("P2Pool nodes"):
					return "P2Pool dÃ¼ÄŸÃ¼mleri";
				case clean("Run Your Own Node"):
					return "Kendi dÃ¼ÄŸÃ¼mÃ¼nÃ¼zÃ¼ baÅŸlatmak Ä±Ã§in";
				case clean("Merge Mining Pools"):
					return "Pula BirleÅŸen mining ";
				case clean("zpool - The miners multipool"):
					return "zpool â€“ multipool";
				case clean("MultiPool"):
					return "MultiPool";
				// services
				case clean("Information & Resources"):
					return "Bilgi ve Kaynaklar";
				case clean("Exchanges"):
					return "EÅŸanjÃ¶rleri";
				case clean("Other"):
					return "DiÄŸer";
				case clean("Faucet"):
					return "Faucet";
				case clean("Testnet Information"):
					return "Testnet bilgi";
                		default:
                        		return $text;
                }
        }
        else if($lang == 'ro')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return " DeschisÄƒ pentru oricare ";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return " Myriad â€“ este multi-algoritmicÄƒ  - este prima monedÄƒ, care a Ã®ntruchipat Ã®n viaÈ›Äƒ simultan 5 hash-funcÈ›ii, utilizate pentru minerit. ÃŽn deosebire de Bitcoin, prin care este posibil de a minerit-a profitabil, utilizÃ¢nd ASICS È™i algoritmul SHA256d, Myriad este accesibilÄƒ pentru Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return " Nu este periculoasÄƒ ";
			case clean("A miner can choose to mine using any of the 5 algorithms â€” SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit â€”
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return " Minerit-erul poate alege oricare din cele 5 algoritmi accesibile â€“ SHA256d, Scrypt, Myr-Groestl, Skein sau Qubit â€“ fiecare din ele are ca È›intÄƒ un interval de timp fixat pentru bloc â€“ 5 minute. ÃŽn genere, blocul se aflÄƒ aproximativ fiecare minutÄƒ. ÃŽn dependenÈ›Äƒ de hash-rate al fiecÄƒrui algoritm se regleazÄƒ È™i complicaÈ›ia lui.
				ÃŽn acelaÈ™i timp ASICS-ul afecteazÄƒ minerit-ul prin plÄƒcile video cu algoritmul SHA256d, dar Scrypt-ul este neproductiv, restul algoritmilor dominÄƒ sfera minerit-ului prin plÄƒcile video. Metoda algoritmilor multiple deschide o abordare nouÄƒ È™i exclusivÄƒ cÄƒtre metodica de protecÈ›ie cu ajutorul a 51%, deoarece pentru a ajunge la 51% de blocuri va fi necesar un spectru enorm de echipament.";

			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return " Combinarea Minerit-ului prin algoritmi diverse, care include SHA256d & Scrypt, a permis Myriad-ului de a cÄƒpÄƒta un avantaj prin accesul la puteri de calcul enorme disponibile .";

			case clean("Fair Distribution"):
				return " DistribuÈ›ia onestÄƒ ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return " Lipsesc pre-mine-ul È™i blocurile magice cu premii mari. ToÈ›i utilizatorii reÈ›elei au posibilitÄƒÈ›i egale pentru a obÈ›ine Myriad la preÈ›ul de piaÈ›Äƒ ";
			// technology
			case clean("Multi-Algorithm"):
				return " Algoritmi multiple ";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algoritmi accesibile pentru ASIC, GPU Ð¸ CPU al minerit-ului:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return " DouÄƒ runde pentru algoritmile de hash SHA256d, utilizare pentru prima datÄƒ de pionerul valutei crypto - Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
 				return " Proiectat din start pentru minerit-ul sub CPU, Ã®n prezent este utilizat pentru dobÃ¢ndirea multiplelor monede alternative cu ajutorul ASICs-ului, Ã®ncepÃ¢nd cu Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return " Specific numai pentru Myriad varianta hash-algoritmului â€“ Groestl â€“ reprezintÄƒ una din cele cinci finaliste NIST SHA-3 al concursului de hash-are a algoritmilor. ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " ÃŽncÄƒ unul din cele cinci finaliste al concursului de hash-are NIST SHA-3, care a fost utilizat keincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return " Proiectat din start numai sub CPU algoritmul Qubit combinÄƒ 5 participanÈ›i NIST SHA-3 al concursului de hash-algoritmi â€“ Luffa, Cubehash, SHAvite, SIMD Ð¸ ECHO.";
 			case clean("Merge Mining"):
				return " Minerit-ul combinat ";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
				return "ÃŽncepÃ¢nd cu blocul 4002000 minerit-ul combinat este accesibil pentru algoritmile SHA256d Ð¸ Scrypt. Acest fapt a permis Myriad de a fi avantajatÄƒ, mulÈ›umit  hash-rate-urilor imense, utilizate Ã®n prezent de alte monede, concomitent È™i a asigurat securitatea blockchain-ului";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "Minerit-ul combinat, cunoscut ca AuxPow, permite folosirea resurselor, cheltuite, de exemplu, pe minerit-ul Bitcoin sau Litecoin pentru confirmarea validitÄƒÈ›ii blocurilor Ã®n reÈ›eaua Myriad fÄƒrÄƒ asumarea oricÄƒrei Ã®ncÄƒrcÄƒri suplimentare.";
			case clean("Distribution"):
				return " Distribuirea ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return " Myriad a fost lansatÄƒ Ã®n reÈ›ea Ã®n data de 23 februarie ora 18:30 UTC ";
			case clean("first mined block"):
				return " primul bloc gÄƒsit ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " a apÄƒrut peste 4 minute, prin aceasta confirmÃ¢nd faptul, cÄƒ nu a fost nici un pre-mine ";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return " Din start, premiul era de 1,000 MYR, È™i se Ã®njumÄƒtÄƒÈ›ea la fiecare 967,680 blocuri (aproximativ 48 de sÄƒptÄƒmÃ¢ni). NumÄƒrul maximal de monede â€“ 2 miliarde MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return " IniÈ›ial, timpul blocului era de 30 secunde sau 150 secunde pe algoritm. ÃŽnsÄƒ din 12 iulie 2015 comunitatea a decis sÄƒ majoreze timpul blocului pÃ¢nÄƒ la 60 secunde sau 300 secunde pe algoritm. AceastÄƒ decizie a fost activate de la blocul â„–1,401,001. ÃŽn acelaÈ™i timp, cÃ¢nd reÈ›eaua Myriad aveaun hash-rate scÄƒzut È™i era maxim complicat, timpul mediu al blocului era de peste 50 secunde. ÃŽn plus era activat aux-Pow pentru Scrypt È™i SHA256d, fapt, ce a ridicat timpul È›intÄƒ al blocului È™i a adus la o coordonare mai bunÄƒ Ã®n reÈ›ea, ocolind efectul asupra integritÄƒÈ›ii distribuÈ›iei ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad a fost lansatÄƒ Ã®n februarie 2014 de utilizatorul cu Nickname 8bitcoder È™i reprezintÄƒ un fork ZtaCoin. Acesta este prima crypto valutÄƒ, care utiliza 5 POW ale algoritmilor pentru ridicarea securitÄƒÈ›ii, precum È™i pentru atragerea  mai multor maine-ri cu algoritmi diferite â€“ SHA256d È™i Scrypt pentru ASIC maine-re, Skein È™i Myr-Groestl pentru GPU maine-re, Qubit pentru GPU È™i CPU maining.
				HunterCoin, lansatÄƒ la finele anului 2013, de fapt, prima a utilizat mai multe algoritmi POW pentru maining (SHA256d Ð¸ Scrypt), Ã®nsÄƒ ea a fost proiectatÄƒ nu pentru maining, dar pentru jocuri bazate pe blockchaine, care ulterior a dat viaÈ›Äƒ mai multor alt-coin-e.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad a generat mai multe analogii ei Ã®nsuÈ™i, prima din care era Saffroncoin, care, de asemenea, utiliza  5 PoW algoritmi. Digitalcoin È™i Digibyte a efectuat hard-fork, pentru a utiliza 3 È™i 5 PoW, corespunzÄƒtor. O altÄƒ monedÄƒ, care utilizeazÄƒ algoritmul de verificare a serviciului cu ajutorul a cinci algoritmi È™i conÈ›ine Ã®n sine un minerit unic â€“ Unitus. Auroracoin È™i Verge, de asemenea, au anunÈ›at despre dorinÈ›a de a utiliza sistemul multi-algoritm.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.	At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "ÃŽn august 2015 reÈ›eaua Myriad a fost hard-forÈ›atÄƒ pentru a fi inclusÄƒ Ã®ntr-un minerit unic pe algoritmile â€“ Scrypt Ð¸ SHA256d,scopul fiind atingerea hash-rate-ului stabil al reÈ›elei, ce funcÈ›ioneazÄƒ pe aceste algoritmi. ÃŽn acelaÈ™i timp, timpul È›intÄƒ al blocului pentru fiecare algoritm a fost modificat pÃ¢nÄƒ la 5 minute (a fost 2,5 minute), pentru a ajunge la timpul general al blocului pentru toate algoritmile â€“ 1 minut (a fost 30 secunde). AceastÄƒ modificare va trage curba ascendentÄƒ a emisiilor Ã®n sus cu ajutorul gradului 2x È™i-l va egala aproximativ la 20 de ani.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 7th 2016. See "):
 				return "Ultima versiune 0.11.3.1, a fost lansatÄƒ pe 7 Iulie 2016. PriviÈ›i ";
			case clean(" announcement & upgrade notes."):
				return " AnunÈ› & lista anunÈ›urilor ";
			case clean("Desktop"):
				return "Desktop";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-biÈ›i de Instalare (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-biÈ›i de Instalare (11.5 MB)";
			case clean("Mobile"):
				return " Mobil ";
			case clean("Android"):
				return " Android ";
			case clean("Source"):
				return "Sursa";
			case clean("Source Code (0.11.3.1)"):
				return "Sursa Cod (0.11.3.1)";
			case clean("Other"):
				return " Alte ";
			case clean("Linux"):
				return " Linux ";
			case clean("JSWallet"):
				return " JSWallet ";
			case clean("Brain wallet"):
				return "Creierul portofel ";
			case clean("Paper Wallet"):
				return "Portofel hÃ¢rtie ";
			// mining
			case clean("Getting Started"):
				return " NoÈ›iuni De BazÄƒ ";
			case clean("Download a "):
				return " DescÄƒrcaÅ£i o versiune ";
			case clean("wallet"):
				return "Portofel ";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return " download minerit-ul de tip necesar, gÄƒsiÈ›i pool-ul È™i Ã®nainteâ€¦ ";
			case clean("Mining Tutorial Video"):
				return " Tutorial  Video de Minerit ";
			case clean("Watch on "):
				return " Uita-te pe ";
			case clean("Mining Software"):
				return "Minerit Software-ul ";
			case clean("Use any SHA256d compatible ASIC"):
				return " UtilizaÈ›i orice  SHA256d-compatibil ASIC ";
			case clean("Use any Scrypt compatible ASIC"):
				return " UtilizaÈ›i orice  Scrypt-compatibil ASIC ";
			case clean("sgminer for OpenCL GPU mining "):
				return " cgminer pentru OpenCL minerit GPU ";
			case clean("ccminer for CUDA GPU mining"):
				return " cgminer pentru GPU CUDA minerit ";
			case clean("cpuminer-multi for CPU mining"):
				return " cpuminer-multiplu pentru minerit CPU ";
			case clean("cgminer for OpenCL GPU mining"):
				return " cgminer pentru OpenCL minerit GPU ";
			case clean("BitcoinTalk Thread"):
				return " BitcoinTalk Subiect ";
			case clean("Windows Binaries"):
				return "Windows Binare ";
			case clean("GitHub Source"):
				return " GitHub SursÄƒ ";
			case clean("Suggested Command Line"):
				return " Sugestii pentru Linia de comandÄƒ ";
			case clean("Pools"):
				return " POOL-uri ";
			case clean("P2Pool nodes"):
				return "P2Pool Noduri retea ";
			case clean("Run Your Own Node"):
				return " Pentru lansarea propriului noduri retea ";
			case clean("Other pools"):
				return " Alte Noduri retea ";
			case clean("Merge Mining Pool "):
				return " Combinarea Minerit POOL-uri ";
			case clean("zpool - The miners multi pool"):
				return " zpool - Multi-Pool pentru mineri ";
			case clean("MultiPool"):
				return "Multi-Pool";
			// services
			case clean("Information & Resources"):
				return " InformaÈ›ii È˜i Resurse ";
			case clean("Block Explorer(1)"):
				return " Browsere blocuri (1)";
			case clean("Block Explorer(2)"):
				return " Browsere blocuri (2)";
			case clean("Abe Explorer"):
				return "Abe Browsere";
			case clean("Network Status"):
				return " Stare ReÈ›ea ";
			case clean("Exchanges"):
				return " Exchanges ";
			case clean("Shop"):
				return " Magazin ";
			case clean("List of Coinpayments stores"):
				return " Lista magazinelor care platesc moneda";
			case clean("Other"):
				return "Alte";
			case clean("Faucet"):
				return "Faucet";
			case clean("Testnet Information"):
				return "Testnet informaÈ›ie";
			case clean("cryptap.us Myriad page"):
				return " cryptap.us Myriad paginÄƒ ";
			case clean("Reddit/IRC myrbot information"):
				return "Reddit/IRC myrbot informaÈ›ie ";
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
