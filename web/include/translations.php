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

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
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
				return "Diseñado para ser un unico algoritmo con contraseña para CPU, ahora extraido con ASIC en muchas criptomonedas alternativas, empezando por Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Una variante especifica para Myriad basada en el algoritmo Groestl, es uno de los 5 finalistas de la NIST SHA-3 hash competition.";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Otro de los 5 finalistas de la NIST SHA-3 hash competition, utilizado por primera vez en Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originalmente un algoritmo solo para CPU. Qubit combina algoritmos de 5 competidores de la NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD y ECHO.";

			case clean("Merge Mining"):
				return "Mineria fusionada";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Desde el bloque 4002000, la mineria fusionada ha sido permitida en los algoritmos SHA256d y Scrypt. Esto ha hecho que Myriad tenga un avance para obtener un gran hashrate actualmente en uso
			por las monedas que usan esos algoritmos, aumentando la seguridad de la cadena de bloques de Myriad.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "La mineria fusionada, o AuxPow, permite que el trabajo que se haga para una moneda pariente (como Bitcoin o Litecoin) sirva para encontrar bloques en la cadena de bloques de Myriad, sin carga extra
			o impacto en el rendimiento de las otras monedas.";

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
				return "Inicialmente, el objetivo era 30 segundos por bloque, o 150 segundos por algoritmo. El 12 de Julio de 2015, la comunidad decidió aumentar el tiempo del bloque a 60 segundos,
				o 300 segundos por algoritmo, que se vería reflejado en el bloque 1,401,001. En ese momento, Myriad sufrió de baja tasa de hash y de mayor dificultad sobre Scrypt y SHA256d, provocando 
				el actual tiempo promedio por bloque por encima 50 segundos. Además para pernitir PoW adicional sobre Scrypt y SHA256d, el aumento en el tiempo objetivo por bloque nos llevó a una mejor coherencia en la red, sin afectar la equidad de la distribución.";

			case clean("Myriad's History"):
				return "Historia de Myriad";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad fue lanzado en Febrero de 2014 por 8bitcoder, basado en Zetacoin. fue la primera criptomoneda en usar 5 algoritmos de prueba de trabajo
			en un esfuerzo para aumentar la seguridad asi como ampliar la base personas que podian minarlo - SHA256d y Scrypt para mineros ASIC,
			Skein y Myr-Groestl para mineros GPU, y Qubit para mineros GPU y CPU. Huntercoin, lanzado en 2013, fue la primera
			moneda en usar multiples algoritmos PoW (SHA256d y Scrypt), pero no esta enfocado en la mineria, solo basado un juego en la cadena de bloques que ha producido la gran mayoria de las criptomonedas alternativas that produced the large majority of new coins.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ha dado varios projectos derivados, como por ejemplo Saffroncoin, y tambien a proyectos con 5 algoritmos PoW.
			Digitalcoin and Digibyte son algunos de los ejemplos de tener 3 o 5 algoritmos PoW respectivamente, Unitus tambien tiene 5 algoritmos PoW que comparte algunos algoritmos con Myriad
			y permite a los usuarios tener mineria fusionada con estos. Auroracoin y Verge también han anunciado planes de hacer fork a multi-algoritmo.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "En Agosto de 2015 Myriad ha tenido una gran actualizacion que permite la mineria fusionada con los algoritmos SHA256d y Scrypt en un esfuerzo por aumentar la seguridad y tener velocidad de hashrate estable en esos dos algoritmos.
			En este momento el tiempo de bloque de destino para cada algoritmo también se cambió a cinco minutos (anteriormente 2.5 minutos), para lograr un tiempo general de selección de bloques de 1 min (anteriormente 30 seconds);
			este cambio estirara la curva de emision de monedas en un factor de 2x, a aproximadamente 20 años.";


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
				return "Malferma al ĉiuj";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (miriad) estas mult-algoritma - la unua ĉifrovaluto kiu uzas 5 samtempajn haketfunkciojn. Malkiel Bitmono, kiun oni povas profitdone mini nur per
				ASICoj por SHA256d, Myriad estas malferma al ASICoj por SHA256d k Scrypt, ankaŭ al grafiksprocesoroj k centraj procesoroj.";

			case clean("Secure"):
				return "Sekura";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Oni povas elekti el la 5 algoritmoj por mini — SHA256d, Scrypt, Myr-Groestl, Skein aŭ Yescrypt —
				ĉiu havas celtempon de 5 minutoj por unu bloko. Entute, unu bloko troviĝas proksimume ĉiun minuton. La malfacileco de ĉiu algoritmo dependas nur de ties propra haketrapideco.
				";

                        case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
                                return "Kunligita minado estis saltita je SHA256d &amp; Scrypt. Nun Myriad povas gajni de la grandega haketpotenco disponebla.";

			case clean("Fair Distribution"):
				return "Egaleca disdonado";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Ekzistas nek moneroj minitaj antaŭ ol la lanĉo, nek kaŝitaj sumoj kiujn posedas komplotuloj. Ĉiuj havas egalan eblecon akiri Miriadojn je la kurzo de la publika merkato ";

			// technology

			case clean("Multi-Algorithm"):
				return "Multaj algoritmoj";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algoritmoj, kiuj ebligas efikan minadon per ASICoj, grafiksprocesoroj, k centraj procesoroj:";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Du rondoj de la SHA256d haketa algoritmo, unue uzata en la pionira ĉifrovaluto, Bitmono.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dizajnita esti pasvorta haketa algoritmo nur por centraj procesoroj, nun oni minas ĝin per ASICoj por multaj ĉifrovalutoj. Litecoin estis la unua.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Speciale kreita por Myriad estas variaĵo de la haketa algoritmo Grøstl, unu el la 5 finalistoj en la haketa konkurso NIST SHA-3.";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Alia finalisto de la haketa konkurso NIST SHA-3, unue uzata de Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originale algoritmo nur por CPU, Qubit estas kombinaĵo de 5 konkursantoj de la haketa konkurso NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD k ECHO.";

			case clean("Merge Mining"):
				return "Kunligita Minado";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Ekde la 4002000a bloko, kunligita minado estis ebligita je la algoritmoj SHA256d k Scrypt. Nun Myriad povas utiligi la enorman haketpotencon trovebla
			ĉe valutoj kiuj uzas tiujn algoritmojn. Tio sekurigas la blokĉenon de Myriad eĉ plu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Kunligita Minado, alinome AuxPow, permesas al oni fari laboron por trovi blokojn de gepatra valuto (ekz, Bitmono aŭ Litecoin), kaj dume, reuzi tiun laboron por trovi Miriadajn blokojn, senkoste.
			Tio neniel havas malbonan efikon por la gepatra valuto.";

			case clean("Distribution"):
				return "Disdonado";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad naskiĝis en publika vido la 23an de Februaro, 18:30 UTC. La ";

			case clean("first mined block"):
				return "unua minita bloko";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " troviĝis 4 minutoj post la lanĉo, kiu pruvas ke oni ne minis antaŭ ol la lanĉo.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La premio por trovi blokojn estis dekomence 1,000MYR, kaj planita estis duoniĝo post ĉiuj 967,680 blokoj (proksimume 48 semajnoj). Enfine estos proksimume 2 bilionoj da MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time,
				Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead
				to greater consistency on the network, without affecting fairness of distribution."):
				return "Dekomence, la celtempo estis 30 sekundoj po bloko, 150 sekundoj po algoritmo. Je la 12a de Julio 2015, la komunumo decidis pliigi la celtempon al 60 sekundoj, do 300 sekundoj po algoritmo. Tio efektiviĝis je bloko 1,401,001. Tiutempe,
				Myriad suferis de malgranda haketpotenco. Ofte ministoj emis atendi ĝis la malfacileco malpliiĝis, tuj mini multajn blokojn, kaj poste salti al alia valuto ĝis la malfacileco remalleviĝis. Kiam Myriad ebligis kunligitan minadon je Scrypt k SHA256d, kaj ankaŭ pliigis la celtempon de la blokoj,
				la rezulto estis pli fidebla valuto. Tio okazis sen forpreni de la disdonada egaleco.";

			case clean("Myriad's History"):
				return "Historio de Myriad";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "8bitcoder forkis Miriadon de Zetacoin, kaj lanĉis ĝin en Februaro 2014. Ĝi estas la unua ĉifrovaluto kiu uzas kvin laborpruvajn algoritmojn.
			kiel strategion por pliigi la sekurecon k larĝigi la ministaron — SHA256d k Scrypt por ministoj kun ASICoj,
			Skein k Myr-Groestl por ministoj kun grafiksprocesoroj, kaj Qubit por ministoj kun aŭ grafiksprocesoroj aŭ centraj procesoroj. Huntercoin, lanĉita malfrue en 2013, estis fakte
			la unua valuto kiu uzas multajn laborpruvajn algoritmojn (SHA256d k Scrypt), tamen ĝia fokuso ne estis pri minado, sed pri blokĉen-bazita ludo kiu produktas la vastan plejmulton de la moneroj.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Multaj valutoj jam imitas Miriadon. Unue estis Saffroncoin, kiu ankaŭ uzas 5 laborpruvajn algoritmojn.
			Aliaj valutoj forkiĝas imite. Digitalcoin nun havas 3 laborpruvajn algoritmojn, kaj Digibyte havas 5. Unitus estas alia valuto kun 5 laborpruvaj algoritmoj, kaj kelkaj el ili samas kiel en Myriad.
			Unitus ankaŭ ebligas kunligitan minadon je ĉiuj siaj 5 algoritmoj. Auroracoin k Verge ankaŭ anoncis siajn planojn forki sin al multaj algoritmoj.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Aŭguston 2015, Myriad malmole forkiĝis por ebligi kunligitan minadon je SHA256d k Scrypt. La celo estis plibonigi la sekurecon kaj atingi pli stabilan haketpotencon je tiuj du algoritmoj.
			Tiutempe, la celtempo de la blokoj por ĉiu algoritmo estis ŝanĝita de 2.5 minutoj al 5 minutoj. Entute, unu bloko nun troviĝas proksimume ĉiun minuton anstataŭ ĉiujn 30 sekundojn.
			Tiu ŝanĝo signifas ke novaj moneroj daŭros miniĝi dum pluaj 20 jaroj, ne 10 jaroj, kiel intencita dekomence.";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La plej lasta versio estas 0.11.3.1, eldonita je la 7a Aprilo 2016. Vidu ";

			case clean(" announcement &amp; upgrade notes."):
				return "anoncon k sciigojn pri la ĝisdatigo.";

			case clean("Desktop"):
				return "Surtabla komputilo";

			case clean(" Windows"):
				return "Vindozo";

			case clean("32-bit Installer (11.5 MB)"):
				return "32-bita Instalilo (11.5 MB)";

			case clean("64-bit Installer (11.5 MB)"):
				return "64-bita Instalilo (11.5 MB)";

			case clean("Mobile"):
				return "Poŝtelefono";

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
				return "Elŝuti ";
			case clean("wallet"):
				return "monujon";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", elŝuti minilon ĝustaspecan, trovi mingrupon, kaj ek!...";
			case clean("Mining Tutorial Video"):
				return "Filma Leciono pri Minado";
			case clean("Watch on "):
				return "Spektu ĉe ";
			case clean("Mining Software"):
				return "Mina Softvaro";
			case clean("Use any SHA256d compatible ASIC"):
				return "Uzu ian ajn ASIC taŭga por SHA256d";
			case clean("Use any Scrypt compatible ASIC"):
				return "Uzu ian ajn ASIC taŭga por Scrypt";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer por grafiksprocesora minado en OpenCL";
			case clean("ccminer for CUDA GPU mining"):
				return "ccminer por CUDA-grafiksprocesora minado";
			case clean("cpuminer-multi for CPU mining"):
				return "cpuminer-multi por minado per centra procesoro";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer por OpenCL-grafiksprocesora minado";
			case clean("BitcoinTalk Thread"):
				return "Fadeno ĉe BitcoinTalk (angle)";
			case clean("Windows Binaries"):
				return "Duumaj dosieroj por Vindozo";
			case clean("GitHub Source"):
				return "Kodfonto ĉe Github";
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
				return "zpool - Mingrupo de multaj ĉifrovalutoj";
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
				return "Monŝanĝejoj";
				
			case clean("Shop"):
				return "Butikoj";
				
			case clean("List of Coinpayments stores"):
				return "Listo de butikoj ĉe Coinpayments";

			case clean("Other"):
				return "Aliaj";

			case clean("Faucet"):
				return "Krano";

			case clean("Testnet Information"):
				return "Informo pri testnet";

			case clean("cryptap.us Myriad page"):
				return "Myriad-paĝo cryptap.us";

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
				return "开放性";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad具有复合算法的特性 - 是第一个同时包含5种算法的加密货币。与比特币只能使用SHA256d的ASIC矿机挖矿不一样，Myriad兼容SHA256d ASICS, Scrypt ASICS等算法, 同时兼容GPU及CPU挖矿。";

			case clean("Secure"):
				return "安全性";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "矿机可选择5种算法中任何一种进行挖矿 — SHA256d, Scrypt, Myr-Groestl, Skein 或 Yescrypt — 每一种均以5分钟的区块为目标，因此在5种算法的角度上计算，只需一分钟便可产出一个新区块，每种算法的难度受其算力影响。当市场推出ASIC后，在GPU上挖SHA256d和Scrypt已经没有什么效率了，而剩下的算法仍是GPU挖矿占主导地位。复合算法提供了额外的反51%攻击机制，因为需要一套不同的设备区寻找51%的区块。";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "";

			case clean("Fair Distribution"):
				return "公平性";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "没有预挖或内部人员捞钱等内幕，任何人都有同样的机会在同样的市场价格下购买Myriad。";

			// technology

			case clean("Multi-Algorithm"):
				return "复合算法";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5种算法，可用于ASIC, GPU和CPU设备的挖矿。";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "两轮的SHA256哈希算法, 第一轮在开辟加密货币始祖比特币中被使用。";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "设计只可用于CPU的哈希算法, 最初用于莱特币挖矿, 现在用于多种山寨币的ASIC挖矿。";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "一种基于Groestl算法, 为Myriad量身定制的算法, 是5个参与NIST SHA-3算法竞赛的算法之一。";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "另一个参与NIST SHA-3算法竞赛的算法, 最初用于Skeincoin。";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Qubit是一个只可用于CPU挖矿的算法, 结合了5种NIST SHA-3算法竞赛的算法 - Luffa, Cubehash, SHAvite, SIMD 和 ECHO。";

			case clean("Merge Mining"):
				return "合并挖矿";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "区块400200后, 算法SHA256D和Scrypt开始允许合并挖矿, 合并挖矿使Myriad能够利用这些算法正在使用的大量算力, 此外可加强Myriad的区块链安全性。";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "合并挖矿或者说AuxPow, 允许用于父系币种(例如比特币或莱特币)的算力进行对Myriad有效区块的寻找, 而不用耗费对现有父系币种的算力的性能上的损耗。";

			case clean("Distribution"):
				return "分配";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad于2014年2月23号的18:30(UTC)正式上线, 第一个区块于4分钟后出产, 这也确认了”无预挖”的事实。";

			case clean("first mined block"):
				return "";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "初始的区块奖励是1000 MYR, 每967,680区块后减半(大约需48周时间), 币总量大约为20亿MYR。";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "最初的区块时间为30秒, 或者说对于每种算法则是150秒。2015年7月12号, 社区决定增加目标区块时间至60秒, 或者每种算法300秒, 在区块1,401,001开始生效。与此同时, Myriad遭遇了低算力及算法SHA256d及Scrypt上的超额的难度跳跃, 造成实际区块时间超过50秒。除了激活算法SHA256d及Scrypt上的aux-PoW机制外, 区块时间的增加带来了良好的网络稳定性, 也丝毫不要想分配的公平性。";

			case clean("Myriad's History"):
				return "Myriad的历史";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad由8bitcoder改编自Zetacoin而来, 于2014年2月正式上线, 是第一个使用5种PoW算法的加密货币, 这种做法大大加强了货币安全性, 同时大大降低了挖矿的门槛, 各类矿机均可参与挖矿 -   ASIC矿机的SHA256和Scrypt, GPU显卡的Skein和Myr-Groestl, 和来自CPU和GPU挖矿的Qubit。2013年后期上线的Huntercoin, 其实是第一个运用复合PoW算法(SHA256和Scrypt)的货币, 但其并未关注挖矿领域, 而是如何生产新币的基于区块链的游戏。";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad经历几次分叉, 第一次是Saffroncoin, 同样使用5种PoW算法; Digitalcoin和Digibyte则执行硬分叉并分别使用3种和5种PoW算法; Unitus是另外一种5算法PoW货币, 与Myriad共享几种PoW算法, 并允许用户对5种算法进行合并挖矿; Auroracoin和Verge也宣布计划进行硬分叉至复合算法版本。";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "2015年8月, Myriad执行硬分叉并允许在算法SHA256和Scrypt上进行合并挖矿, 以提高安全性, 稳定这两种算法的算力网络。与此同时, 每种算法的目标区块时间提升至5分钟(此前是2.5分钟), 以达到总体上的目标区块时间1分钟(此前30秒); 这个改变会使货币的发行期限乘以一个数字2, 也就是大约20年。";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "最新版本0.11.3.1, 于2016年4月7号发布, 请查看";

			case clean(" announcement &amp; upgrade notes."):
				return "版本更新备忘录。";

			// mining

			case clean("Getting Started"):
				return "入门";
			case clean("Download a "):
				return "";
			case clean("wallet"):
				return "";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "下载钱包和正确的挖矿软件, 寻找矿池并开动矿机...";
			case clean("Mining Tutorial Video"):
				return "挖矿指引视频";
			case clean("Watch on "):
				return "";
			case clean ("Youtube"):
				return "请在Youtube上观看.";
			case clean("Mining Software"):
				return "挖矿软件";
			case clean("Use any SHA256d compatible ASIC"):
				return "使用任何适用SHA256d的ASIC矿机";
			case clean("Use any Scrypt compatible ASIC"):
				return "使用任何适用Scrypt的ASIC矿机";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer,支持OpenCL的GPU挖矿";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalk讨论贴";
			case clean("Windows Binaries"):
				return "Windows配置文件";
			case clean("GitHub Source"):
				return "GitHub源代码";
			case clean("Suggested Command Line"):
				return "建议的命令代码";
			case clean("Pools"):
				return "矿池";
			case clean("P2Pool nodes"):
				return "矿池节点";
			case clean("Run Your Own Node"):
				return "运行你自己的节点";
			case clean("Merge Mining Pools"):
				return "合并挖矿矿池";
			case clean("zpool - The miners multipool"):
				return "zpool - 矿池复合矿池";
			case clean("MultiPool"):
				return "MultiPool";


			// services
			case clean("Information &amp; Resources"):
				return "信息&资源";

			case clean("Exchanges"):
				return "交易所";

			case clean("Other"):
				return "其它";

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
				return "Ανοιχτό σε όλους";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Το Myriad είναι πολυ-αλγοριθμικό - και το πρώτο νόμισμα που έχει εφαρμόσει 5 ταυτόχρονους αλγόριθμους εξόρυξης. Σε αντίθεση με το Bitcoin, το οποίο μπορεί μόνο να εξορυχθεί κερδοφόρα με την χρήση SHA256d εξοπλισμού ASIC, το Myriad είναι ανοικτό σε SHA256d ASICS, Scrypt ASICS, Κάρτες Γραφικών και Επεξεργαστές.";
			case clean("Secure"):
				return "Ασφαλές";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ένας ανθρακωρύχος μπορεί να επιλέξει και να χρησιμοποιήσει οποιοδήποτε από τους 5 αλγορίθμους - Τον SHA256d, τον Scrypt, τον Myr-Groestl, τον Skein ή τον qubit - 
				ο καθένας απο τους οποίους έχει σαν στόχο ο χρόνος ανάμεσα στα μπλοκ να είναι 5 λεπτά. Συνολικά, ένα μπλοκ εξορύσσεται περίπου κάθε 1 λεπτό. Ενώ η δυσκολία του κάθε αλγορίθμου επηρεάζεται μόνο από το δικό της ρυθμό εξόρυξης. 
				Ενώ τα ASIC έχουν καταστήσει την εξόρυξη με Κάρτες Γραφικών για το SHA256d & το Scrypt αντιπαραγωγική, οι υπόλοιποι αλγόριθμοι συνεχίζουν να κυριαρχούνται από την εξόρυξη μέσω Καρτών Γραφικών.
				Η πολυ-αλγοριθμική προσέγγιση προσφέρει εξαιρετική αντοχή ενάντια σε μια επίθεση 51% επειδή μια σειρά από διαφορετικό υλικό είναι απαραίτητη για να βρεί το 51% των μπλοκ.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Η συγχώνευση της εξόρυξης έχει ενεργοποιηθεί για το SHA256d & Scrypt, επιτρέποντας στο Myriad να επωφεληθεί από την τεράστια δύναμη εξόρυξης που είναι διαθέσιμη.";
			case clean("Fair Distribution"):
				return "Δίκαιη κατανομή";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Δεν υπήρξε προεξόρυξη ή κρυφές περιουσίες που κατέχονται από μυημένους στην αρχή. Ο καθένας έχει μια ίση ευκαιρία να αποκτήσει Myriad με την τιμή της αγοράς.";
			// technology
			case clean("Multi-Algorithm"):
				return "Πολλαπλοί-Αλγόριθμοι";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Αλγόριθμοι, που καθιστούν δυνατή την εξόρυξη για ASIC, Κάρτες Γραφικών και Επεξεργαστές:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Δύο γύροι του αλγόριθμου SHA256d, χρησιμοποιήθηκαν για πρώτη φορά από το πρωτοπόρο κρυπτονόμισμα Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Σχεδιασμένο για να είναι ένας αλγόριθμος εξόρυξης με Επεξεργαστές, τώρα εξορύσσεται με ASICs σε πολλά κρυπτονομίσματα, ξεκινώντας με το Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "一Μια ειδική παραλλαγή του αλγορίθμου κατακερματισμού Groestl για το Myriad, είναι ένας από τους πέντε φιναλίστ αλγορίθμους στο διαγωνισμό hash NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Μια άλλη από τις πέντε φιναλίστ στο διαγωνισμό hash NIST SHA-3, χρησιμοποιήθηκε για πρώτη φορά από το Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Αρχικά ένας αλγόριθμος για Επεξεργαστές, το qubit συνδυάζει 5 ανταγωνιστές στο διαγωνισμό hash NIST SHA-3 - τον Luffa, τον Cubehash, τον SHAvite, τον SIMD και τον ECHO.";
			case clean("Merge Mining"):
				return "Συγχώνευση Εξόρυξης";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Από το μπλοκ 4002000, έγινε η συγχώνευση των ορυχείων που επιτραπεί στους αλγόριθμους SHA256d και Scrypt να εξορύσσονται μαζί. Αυτό επέτρεψε στο Myriad να επωφεληθεί από τις τεράστιες ταχύτητες εξόρυξης που είναι σε χρήση από νομίσματα χρησιμοποιώντας αυτούς τους αλγορίθμους για την περαιτέρω διασφάλιση της αλυσίδας συναλλαγών του Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Η Συγχώνευση Εξόρυξης, ή AuxPow στα αγγλικά, επιτρέπει την εργασία που γίνεται για ένα γονικό νόμισμα (όπως το Bitcoin ή το Litecoin) να χρησιμοποιηθεί για να βρείτε έγκυρα μπλοκ για την αλυσίδα συναλλαγών του Myriad, χωρίς κανένα επιπλέον φόρτο ή επίδραση στην απόδοση του μητρικού νομίσματος.";
			case clean("Distribution"):
				return "Διανομή";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Το Myriad κυκλοφόρησε στις 23 Φεβρουαρίου του 2014 στις 18:30 UTC. Το πρώτο μπλόκ εξορύσσεται τέσσερα λεπτά αργότερα, πιστοποιώντας έτσι ότι δεν υπήρχε προεξόρυξη.";
			case clean("first mined block"):
				return "Το πρώτο μπλόκ εξορύχθηκε";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "τέσσερα λεπτά αργότερα, πιστοποιώντας έτσι ότι δεν υπήρχε προεξόρυξη.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Η αρχική αμοιβή ήταν 1.000 MYR, που μειώθηκε κατά το ήμισυ μετά απο 967.680 μπλόκ (περίπου 48 εβδομάδες αργότερα). Η Συνολική προσφορά είναι περίπου 2 δισεκατομμύρια MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Αρχικά, ο στόχος μπλόκ ήταν 30 δευτερόλεπτα, ή 150 δευτερόλεπτα ανά αλγόριθμο. Από τις 12 Ιούλίου του 2015, η κοινότητα αποφάσισε να αυξήσει το χρόνο μπλοκ στόχο στα 60 δευτερόλεπτα, ή 300 δευτερόλεπτα ανά αλγόριθμο, η οποία ξεκίνησε στο μπλοκ 1.401.001. 
				Εκείνη την εποχή, το Myriad έπασχε από χαμηλή δύναμη εξόρυξης και εκτεταμένη μετάβαση των ανθρακωρύχων του Scrypt και του SHA256d, προκαλώντας τον πραγματικό μέσο χρόνο μπλοκ να είναι πάνω από 50 δευτερόλεπτα. 
				Εκτός από τη δυνατότητα aux-POW για το Scrypt και το SHA256d, η αύξηση του χρόνου των μπλοκ είχε στόχο να οδηγήσει σε μεγαλύτερη συνοχή το δίκτυο, χωρίς να επηρεάζεται η αμεροληψία της διανομής.";
			case clean("Myriad's History"):
				return "Ιστορία της Myriad";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Το Myriad ξεκίνησε το Φεβρουάριο του 2014 απο τον 8bitcoder και βασίστηκε στο Zetacoin. Ήταν  το πρώτο κρυπτονόμισμα που χρησιμοποίησε πέντε αλγόριθμους απόδειξης εργασίας σε μια προσπάθεια να αυξήσει την ασφάλεια, 
				καθώς και τη διεύρυνση της βάσης των ανθρώπων που θα μπορούσαν να εξορύξουν το νόμισμα - με τους αλγόριθμους SHA256d και Scrypt για ASIC ανθρακωρύχους, 
				Skein και Myr-Groestl για τους ανθρακωρύχους με Κάρτες Γραφικών, και Qubit για αυτούς με Κάρτες Γραφικών και Επεξεργαστές. Το Huntercoin, που ξεκίνησε στα τέλη του 2013, ήταν στην πραγματικότητα 
				το πρώτο κέρμα που χρησιμοποίησε πολλαπλούς αλγόριθμους Απόδειξης Εργασίας (SHA256d και Scrypt), αλλά το επίκεντρό του δεν ήταν στην εξόρυξη, αλλά σε ένα παιχνίδι βασισμένο στην αλυσίδα συναλλαγών που παρήγαγε την μεγάλη πλειοψηφία των νέων νομισμάτων.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Το Myriad έχει γεννήσει αρκετά νομίσματα που το αντέγραψαν, η πρώτη εκ των οποίων ήταν το Saffroncoin, το οποίο αξιοποιούσε επίσης πέντε αλγορίθμους Pow. 
				Digitalcoin και Digibyte τόσο σκληρά διχαλωτή να χρησιμοποιούν τρεις και πέντε αλγορίθμους Απόδειξης Εργασίας αντίστοιχα. Το Unitus είναι άλλο ένα νόμισμα που μοιράζεται πολλούς αλγορίθμους Απόδειξης Εργασίας με το Myriad, 
				και επιτρέπει στους χρήστες να συγχωνεύσουν την εξόρυξη ανάμεσα στους πέντε αλγορίθμους Απόδειξης Εργασίας που διαθέτει. Το Auroracoin και το Verge έχουν επίσης ανακοινώσει σχέδια για πολλαπλούς αλγορίθμους.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Τον Αύγουστο του 2015 το Myriad άλλαξε ώστε να επιτρέψει τη συγχώνευση εξόρυξης για SHA256d και Scrypt αλγόριθμους σε μια προσπάθεια να βελτιωθεί η ασφάλεια και να επιτευχθεί μια πιο σταθερή εξόρυξη επί των δύο αυτών αλγορίθμων. Από αυτή τη στιγμή και μετά ο χρόνος μπλόκ για κάθε αλγόριθμο άλλαξε επίσης σε πέντε λεπτά (προηγουμένως 2,5 λεπτά), για να επιτευχθεί ο συνολικός χρόνος μπλοκ του 1ος λεπτού (προηγουμένως 30 δευτερόλεπτα). Η αλλαγή αυτή θα επεκτείνει την καμπύλη εκπομπής με έναν παράγοντα 2x, σε περίπου 20 χρόνια.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "H Τελευταία έκδοση είναι η 0.11.3.1, που κυκλοφόρησε στις 7 Απρίλιος 2016. Δείτε ";
			case clean(" announcement &amp; upgrade notes."):
				return " την ανακοίνωση για την αναβάθμιση στις σημειώσεις.";
			// mining
			case clean("Getting Started"):
				return "Ξεκινώντας";
			case clean("Download a "):
				return "Κατεβάστε το ";
			case clean("wallet"):
				return "πορτοφόλι";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " και το πρόγραμμα εξώρυξης, βρείτε μια πισίνα εξόρυξης και ξεκινήστε.";
			case clean("Mining Tutorial Video"):
				return "Βίντεο Οδηγός για την Εξόρυξη.";
			case clean("Watch on "):
				return "Δείτε το στο";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "Λογισμικό Εξόρυξης";
			case clean("Use any SHA256d compatible ASIC"):
				return "Χρησιμοποιήστε οποιοδήποτε SHA256d συμβατό ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Χρησιμοποιήστε οποιοδήποτε Scrypt συμβατό ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return " Ο sgminer για OpenCL εξόρυξη με την χρήση Κάρτας Γραφικών";
			case clean("BitcoinTalk Thread"):
				return "Νήμα στο BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Αρχεία";
			case clean("GitHub Source"):
				return "GitHub Πηγαίος Κώδικας";
			case clean("Suggested Command Line"):
				return "Προτεινόμενη Εντολή";
			case clean("Pools"):
				return "Πισίνες Εξόρυξης";
			case clean("P2Pool nodes"):
				return "Κόμβοι του P2Pool";
			case clean("Run Your Own Node"):
				return "Τρέξτε τον δικό σας κόμβο";
			case clean("Merge Mining Pools"):
				return "Πισίνες Συγχώνευσης της Εξόρυξης";
			case clean("zpool - The miners multipool"):
				return "zpool - Η πολυπισίνα των ανθρακωρύχων";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Πληροφορίες & Πόροι";
			case clean("Exchanges"):
				return "Ανταλλακτήρια";
			case clean("Other"):
				return "Άλλα";
			case clean("Faucet"):
				return "Βρύση Νομισμάτων";
			case clean("Testnet Information"):
				return "Πληροφορίες Δοκιμαστικού Δικτύου";
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
				return "Открыта каждому";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad – мульти-алгоритмична - это первая монета, воплотившая в жизнь одновременно 5 хеш функций, используемых для майнинга. В отличии от Биткоина, который можно прибыльно майнить используя Асики и алгоритм SHA256d, Myriad доступна для Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Безопасна";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Майнер может выбрать любой из 5 доступных алгоритмов – SHA256d, Scrypt, Myr-Groestl, Skein, или Yescrypt – каждый из них имеет фиксированное целевое время блока – 5 минут. В целом, блок находится приблизительно каждую минуту. В зависимости от хеш рейта каждого алгоритма регулируется и его сложность.
			В то время как Асики влияют на майнинг видеокартами с алгоритмом SHA256d а Scrypt непродуктивен, остальные алгоритмы доминируют сферу майнинга видеокартами. Способ множественных алгоритмов создаёт новый эксклюзивный и инновационный подход к методике защиты с помощью 51%, потому что для заполучения 51% блоков понадобится огромный спектр оборудования.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Объединенный майнинг различными алгоритмами, включающими в себя SHA256d & Scrypt, позволил Myriad получить преимущество за счёт огромных доступных вычислительных мощностей.";
			case clean("Fair Distribution"):
				return "Честное распределение";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Отсутствуют премайн и спрятанные волшебные блоки с большой наградой. Все пользователи сети имеют одинаковые возможности для получения Myriad по рыночной стоимости";
			// technology
			case clean("Multi-Algorithm"):
				return "Множественные алгоритмы";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Алгоритмов доступных для ASIC, GPU и CPU майнинга";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Два раунда для алгоритма хеширования SHA256d, впервые использованных пионером криптовалют - uᴉoɔʇᴉq.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Изначально спроектированный для майнинга под CPU, теперь используется для добычи многими алтернативными монетами с помощью ASICs, начиная с Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Специфичный только для Myriad вариант хеш-алгоритма – Groestl – это один из пяти финалистов NIST SHA-3 соревнования алгоритмов хеширования.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Еще один из пяти финалистов соревнования по хешам NIST SHA-3, который был впервые использован Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Изначально спроектированный только под CPU алгоритм Qubit комбинирует 5 участников NIST SHA-3 соревнования по хеш-алгоритмам – Luffa, Cubehash, SHAvite, SIMD и ECHO.";
			case clean("Merge Mining"):
				return "Объединенный майнинг";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Начиная с блока 4002000, объединенный майнинг доступен для SHA256d и Scrypt алгоритмов. Это позволило Myriad получить преимущество за счёт огромных хешрейтов, используемых в данное время другими монетами, а также обеспечило безопасность блокчейна.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Объединенный майнинг, так же известный как AuxPow, позволяет использовать ресурсы, затрачиваемые, к примеру, на майнинг uᴉoɔʇᴉq или Lightcoin для подтверждения валидности блоков в сети Myriad при этом не неся никакой дополнительной нагрузки.";
			case clean("Distribution"):
				return "Распределение";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad была выпущена в сеть 23 Февраля 2014 года в 18:30 UTC";
			case clean("first mined block"):
				return "первый найденный блок";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " появился спустя 4 минуты, тем самым подтверждая что не было никакого премайна.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Изначально, награда составляла 1,000 MYR, и уполовинивалась каждые 967,680 блоков(примерно 48 недель). Максимальное количество монет – 2 миллиарда MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Первоначально, время блока составляло 30 секунд, или 150 секунд на алгоритм. Но 12 июля 2015 сообщество решило увеличить время блока до 60 секунд, или 300 секунд на алгоритм. Данное решение вступило в силу с блока №1,401,001. В то время, когда сеть Myriad имела низкий хеш рейт и высокую сложность, среднее время блока составляло более 50 секунд. В дополнение было подключено aux-Pow для Scrypt и SHA256d, что увеличило целевое время блока и привело к лучшей согласованности в сети минуя влияние на честность распределения ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad запущена в феврале 2014 человеком с ником 8bitcoder, и представляет собой форк ZtaCoin. Это первая крипто валюта, использующая 5 POW алгоритмов для увеличения безопасности, а также для большего охвата майнеров с разными алгоритмами – SHA256d и Scrypt для ASIC майнеров, Skein и Myr-Groestl для GPU майнеров, Qubit для GPU и ЦПУ майнинга. HunterCoin, запущенная в конце 2013, на самом деле, первая использовала несколько алгоритмов POW для майнинга(SHA256d и Scrypt), но она была спроектирована не для майнинга, а для игр на основе блокчейна, которые в дальнейшей дали жизнь многим алт-коинам.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad породила несколько аналогов себе, первый из которых был Saffroncoin так же использующий 5 PoW алгоритмов. Digitalcoin и Digibyte совершили hard-fork, чтобы использовать 3 и 5 PoW алгоритмов, соответственно. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "В августе 2015 сеть Myriad была хард-форкнута, для того чтобы включить единый майнинг на алгоритмах – Scrypt и SHA256d, целью было достижение стабильного хеш рейта сети на этих алгоритмах. В то время целевое время блока для каждого алгоритма изменили до 5 минут(до этого 2,5 минуты), чтобы получить общее время блока для всех алгоритмов – 1 минуту(до этого 30 секунд). Это изменение вытянет кривую эмиссии наверх с помощью степени 2х, и уравняет приблизительно к 20 годам.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Последняя версия 0.11.3.1, выпущена 7ого апрель 2016. Смотрите";
			case clean(" announcement & upgrade notes."):
				return "Анонс & список обновлений";
			// mining
			case clean("Getting Started"):
				return "Введение";
			case clean("Download a "):
				return "Скачать ";
			case clean("wallet"):
				return "кошелёк";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", скачайте майнер нужного типа, найдите пул и вперёд...";
			case clean("Mining Tutorial Video"):
				return "Видео обучение по майнингу";
			case clean("Watch on "):
				return "Посмотреть на";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Софт для майнинга";
			case clean("Use any SHA256d compatible ASIC"):
				return "Используйте любой SHA256d-совместимый ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Используйте любой Scrypt-совместимый ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer для майнинга через OpenCL на видеокарте(GPU)";
			case clean("BitcoinTalk Thread"):
				return "Тред на BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows исполняемые файлы";
			case clean("GitHub Source"):
				return "GitHub исходные файлы";
			case clean("Suggested Command Line"):
				return "Введите в командной строке";
			case clean("Pools"):
				return "Пулы";
			case clean("P2Pool nodes"):
				return "P2Pool ноды";
			case clean("Run Your Own Node"):
				return "Для запуска собственного нода";
			case clean("Merge Mining Pools"):
				return "Пулы объединенного майнинга";
			case clean("zpool - The miners multipool"):
				return "zpool – мульти-пол";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Информация и Ресурсы";
			case clean("Exchanges"):
				return "Обменники";
			case clean("Other"):
				return "Другое";
			case clean("Faucet"):
				return "Кран";
			case clean("Testnet Information"):
				return "Testnet Информация";
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
				return "Myriad – Ang Myriad ay multi-algo – ang unang coin na nagpatupad ng 5 sabayang hash functions. 
				Di gaya ng Bitcoin, na maari lamang mapakinabangan sa pagmimina gamit ang SHA256d, ang Myriad ay bukas para sa SHA256d ASICS, Scrypt ASICS, GPUS at CPUs.";
			case clean("Secure"):
				return "Ligtas";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ang nagmimina ay maaring gumamit ng alinman sa 5 algorithm – SHA256d, Scrypt, Myr-Groestl, Skein, o Yescrypt – bawat isa ay may target na 5 minutong bloke. 
				Sa pangkalahatan, ang isang bloke ay natatagpuan humigit-kumulang kada isang minuto. Ang hirap ng bawat algorithm ay naaapektuhan lamang ng sarili nitong hash rate. 
				Habang hindi na naging mabunga ang pagmimina sa GPU sa SHA256d аt Scrypt dahil sa mga ASICs, ang mga iba pang algorithm ay patuloy na dinodomina ng pagmimina sa GPU. 
				Ang multi-algo na pamamaraan ay nagbibigay ng katangi-tanging 51% na paglaban dahil iba’t-ibang hardware ang kailangan para mahanap ang 51% ng mga bloke.";
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
				return "Dalawang ikot ng SHA256d hashing algorithm, unang ginamit ng pinakaunang cryptocurrency – ang Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dinisenyo upang maging pang CPU lamang na password hashing algorithm, ngayon ay minimina na kasama ng ASICs sa maraming altcoins, na nagsimula sa Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Isang variant na particular sa Myriad ng Groestl hash algorithm, isa sa limang finalist sa kompetisyong NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Isa pa sa limang finalist sa kompetisyong NIST SHA-3, unang ginamit ng Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Noong una’y pang CPU algorithm lamang, pinagsama-sama ng Qubit ang 5 magkakalaban sa NIST SHA-3 hash competition – Luffa, Cubehash, SHAvite, SIMD и ECHO.";
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
				return "Ang unang reward ay 1,000 MYR, mangangalahati kada 967,680 bloke (humigit kumulang 48 na linggo). Kabuuang bilang ay humigit kumulang – 2 Bilyong MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Noong una, ang layon ng blocktime ay 30 segundo, o 150 segundo kada algorithm. Noong ika-12 ng Нulyо, 2015, nagpasya ang komunidad na taasan ang target blocktime sa 60 segundo, o 300 segundo kada algorithm, simula sa ika-1,401,001 na bloke. Noong panahong iyon, nahihirapan ang Myriad sa mababang has rate at malawak na hirap sa hopping sa Scrypt at SHA256d, dahilan upang ang aktwal na average block time ay humigit sa 50 segundo.
				Bukod sa pagpapagana ng aux-Pow sa Scrypt at SHA256d, ang pagtaas ng target block time ay nagbunga ng higit na consistency sa network, nang hindi naaapektuhan ang pagiging patas ng pamamahagi.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Ang Myriad ay inilunsad noong 2014 ni 8bitcoder, fork ito mula sa ZetaCoin. Ito ang unang cryptocurrency na gumamit ng 5 mga POW  algorithm sa kagustuhang pataasin ang seguridad at palawakin ang bilang ng mga taong maaring magmina nito - SHA256d at Scrypt para sa mga ASIC miners, Skein at Myr-Groestl para sa mga GPU miners, at Qubit para sa mga GPU at ЦПУ miners. Ang HunterCoin, na inilunsad noong huling bahagi ng 2013, ay ang unang coin na gumamit ng maramihang mga POW algorithm(SHA256d at Scrypt), ngunit ito ay hindi nakatuon sa pagmimina, kundi sa isang blockchain-based na laro na lumikha ng malaking karamihan ng mga bagong coins.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Ang Myriad ang nagbigay-daan sa marami pang mga katulad nito,  nauna sa mga ito ang Saffroncoin, na gumamit din ng limang PoW algorithms. Digitalcoin at Digibyte ay parehong nag hard-fork upang gumamit ng 3 at 5 PoW algorithms. Ang Unitus ay isa pang 5-algo PoW coin na may ilang mga kaparehong PoW algorithms sa Myriad.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Noong Agosto 2015 Ang Myriad ay nag hard-fork upang bigyang-daan ang merge-mining sa kanilang Scrypt at SHA256d algorithms sa layuning pagandahin ang seguridad at makamit ang isang mas metatag na hashrate sa dalawang algorithm na iyon. Sa panahong ito ang target na block time ay 5 minuto (dating 2.5 minuto), upang makamit ang pangkalahatang block target time na 1 minuto (dating 30 segundo); Ang pagbabagong ito ay magpapataas sa emission curve ng 2х, sa humigit-kumulang na 20 taon.";
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
				return "zpool – ang multipool ng mga nagmimina";
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
				return "Ouvert à tous";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Le Myriad est multi-algorithmique - et la première monnaie qui a mis en place cinq algorithmes d'extraction simultanés. Contrairement à bitcoin, qui ne peut qu' être extrait avec profit en utilisant SHA256d ASIC, le Myriad est ouvert à SHA256d ASICS, Scrypt ASICS, aux cartes graphiques et processeurs.";
			case clean("Secure"):
				return "Sûr";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Un mineur peut sélectionner et utiliser l'un des cinq algorithmes - Dans SHA256d, le Scrypt, le Myr-Groestl, le Skein ou qubit  - chucun vise au temps parmi les blocs d'être 5 minutes. Dans l'ensemble, un bloc est extrait environ chaque minute. Bien que la difficulté de chaque algorithme n'est affectée que par son propre taux d'extraction. Alors que ASIC ont fait l'exploitation minière aux cartes graphiques pour SHA256d & Scrypt, les autres algorithmes sont encore dominés par l'exploitation minière par la carte graphique. L'approche multi-algorithmique offre une excellente résistance contre une attaque de 51% en raison d'un certain nombre de différents matériels qui sont nécessaires pour trouver 51% des blocs."; 
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "La fusion de l'exploitation minière a été activée à SHA256d & Scrypt, permettant à Myriad de bénéficier de l'énorme puissance minière disponible.";
			case clean("Fair Distribution"):
				return "Répartition équitable";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Il n'y avait pas pré-extraction ou fortunes cachées possedées par les initiés au debut. Tout le monde a une chance égale d'acquérir Myriad avec le prix du marché";
			// technology
			case clean("Multi-Algorithm"):
				return "Plusieurs-Algorithmes";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 algorithmes qui permettent l'exploitation minière pour ASIC, processeurs et cartes graphiques :";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Deux tours de l'algorithme SHA256d, ont été utilisés d'abord par le bitcoin champion de la crypto-monnaie.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dessiné pour être un algorithme d'extraction avec des processeurs, maintenant exploité avec ASICs dans de nombreux crypto-monnaie, en commençant par Litecoin.
				MYR-Groestl";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "一Une variante spéciale de Groestl algorithme de hachage pour Myriad, est l'un des cinq finalistes dans les algorithmes du concours hash NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Un autre des cinq finalistes dans le hachage de la concurrence NIST SHA-3, a été utilisé d'abord par le Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "A l'origine un algorithme pour processeurs, le qubit combine cinq concurrents dans le concours hash NIST SHA-3 - le Luffa, le Cubehash, l'SHAvite, SIMD et ECHO. ";
			case clean("Merge Mining"):
				return "Fusion Minière";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "A partir du bloc 4002000, a été la fusion des mines qui permet aux algorithmes SHA256d et Scrypt d'être exploités ensemble. Cela a permis à Myriad de bénéficier des vitesses d'extraction énormes qui sont en cours d'utilisation par des pièces de monnaie en utilisant ces algorithmes pour assurer en outre la chaîne de transaction Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "La fusion de l'exploitation minière, ou Aux-Pow en anglais, permet le travail effectué pour une monnaie de parent (comme bitcoin ou Litecoin) d'être utilisé pour trouver des blocs valides à la chaîne de transaction Myriad sans aucune charge ou impact supplémentaire sur la performance de la monnaie-parent.";
			case clean("Distribution"):
				return "Distribution";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Le Myriad a été publié le 23 Février, en 2014 à 18h30 UTC.";
			case clean("first mined block"):
				return " Le premier bloc est extrait ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "quatre minutes plus tard, identifiant ainsi qu'il n'y avait pas de pré-extraction.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Le montant initial était 1.000 MYR, qui a été réduit de moitié après 967 680 blocs (environ 48 semaines plus tard). L'offre totale est environ 2 milliards MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Dans un premier temps, le bloc cible était 30 secondes ou 150 secondes par algorithme. Le 12 Juillet 2015, la communauté a décidé d'augmenter le temps du bloc cible en 60 secondes, soit 300 secondes par algorithme, qui a commencé au bloc 1.401.001. A cette époque, le Myriad a souffert de la force d'extraction faible et une vaste migration des mineurs de Scrypt et SHA256d, provoquant la durée moyenne réelle de bloquer plus de 50 secondes. Outre la possibilité aux-POW pour Scrypt et SHA256d, l'augmentation du temps de bloc a été conçu pour conduire à un réseau plus cohérent, sans affecter l'équité de la distribution.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Le Myriad a été lancé en Février 2014 par 8bitcoder et basé sur Zetacoin. Il a été la première crypto-monnaie qui a utilisé cinq algorithmes de preuve du travail dans un effort pour accroître la sécurité et élargir la base de personnes qui pourraient miner la monnaie avec les algorithmes SHA256d et Scrypt mineurs ASIC, Couronne et Myr-Groestl pour mineurs avec les cartes graphiques, et Qubit pour eux avec des cartes graphiques et processeurs. Le Huntercoin, qui a débuté à la fin de 2013, était en fait la première pièce de monnaie qui a utilisé plusieurs algorithmes de preuve du travail (SHA256d et Scrypt), mais l'épicentre n'était pas dans l'extaction, mais dans un jeu basé sur la chaîne des transactions qui a produit la grande majorité de la nouvelle monnaie. ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Le Myriad a donné naissance à plusieurs monnaies qui l'ont copiée, dont le premier était le Saffroncoin, qui mettait également en valeur cinq algorithmes PoW. Digitalcoin et Digibyte avec une si dure et fourchue utilisation de trois à cinq algorithmes de preuve du travail parallèlement. Le Unitus est une autre monnaie qui partage de nombreux algorithmes de preuve du travail avec Myriad, et permet aux utilisateurs de fusionner l'exploitation minière entre les cinq algorithmes de preuve du travail qui sont disponibles. Le Auroracoin et Verge ont également annoncé des plans pour plusieurs algorithmes.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "En Août 2015, le Myriad a été modifié pour permettre la fusion des mines pour SHA256d et Scrypt algorithmes dans un effort pour améliorer la sécurité et de parvenir à une exploitation minière plus stable sur ces deux algorithmes. Dès ce moment le temps de bloc pour chaque algorithme a également changé en cinq minutes (auparavant 2,5 minutes), pour obtenir le temps total de bloc d'une minute (auparavant 30 secondes). Ce changement permettra de prolonger la courbe d'émission avec un agent 2x, à environ 20 ans.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La dernière version est la 0.11.3.1, qui a été publiée le 7 Avril 2016. Voir ";
			case clean(" announcement &amp; upgrade notes."):
				return " l'annonce pour mettre à niveau les notes.";
			// mining
			case clean("Getting Started"):
				return "En commençant";
			case clean("Download a "):
				return "Télécharger ";
			case clean("wallet"):
				return "porte-monnaie";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " et le programme de l'exploitation minière, trouvez une piscine minière et commencez.";
			case clean("Mining Tutorial Video"):
				return "Guide de la vidéo à l'extraction minière.";
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
				return "Fil à BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows Documents";
			case clean("GitHub Source"):
				return "GitHub Code source";
			case clean("Suggested Command Line"):
				return "Ordre recommandée";
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
				return "Informations d'un réseau d'épreuve";
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
				return "Myriad adalah multi algoritma – Merupakan koin yang pertama kali mengimplementasikan 5 fungsi hash secara simultan. Tidak seperti bitcoin, yang hanya menguntungkan jika ditambang menggunakan  SHA256d ASIC, Myriad terbuka untuk penambangan menggunakan SHA256d ASIC, Scrypt ASIC, GPU &amp; CPU.";

			case clean("Secure"):
				return "Aman";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Setiap penambang dapat memilih untuk menambang menggunakan salah satu dari 5 algoritma — SHA256d, Scrypt, Myr-Groestl, Skein atau Yescrypt — Tiap algoritma mempunyai 5 menit untuk target waktu bloknya. Secara garis besar, tiap blok ditemukan sekitar 1 menit sekali. Tingkat kesulitan setiap algoritma dipengaruhi oleh 'hash rate' masing- masing algoritma tersebut.
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
				return "Algoritma yang semula hanya ditujukan untuk CPU, Qubit mengkombinasikan 5 algoritma yang saling bersaing pada kompetisi hash NIST SHA-3 – yaitu Luffa, Cubehash, SHAvite, SIMD dan ECHO. ";

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
				return "Myriad dilluncurkan pada Februari 2014 oleh 8bitcoder, yang mengambil cabang dari Zetacoin. Kriptokurensi yang pertama kali menggunakan 5 algoritma proof of work. Dalam upaya untuk meningkatkan keamanan dan meningkatkan jumlah penambang yang bisa menambang Myriad – SHA256d dan Scrypt untuk penambang menggunakan ASIC, Skein dan Myr-Groestl untuk penambang menggunakan GPU, dan Qubit untuk penambang menggunakan GPU dan CPU. Huntercoin, yang diluncurkan akhir 2013, adalah koin yang pertama kali menggunakan multi algoritma PoW (SHA256d dan Scrypt), akan tetapi fokusnya bukan pada penambangan, melainkan lebih pada permainan berbasis blockchain yang menghasilkan sebagian besar dari koin tersebut. ";

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
				return "zpool – penambangan dengan multipool";

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
				return "Достъпна за всеки";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (Мириад) е първата мулти-алгоритмична криптовалута, която обединява в себе си 5 едновременни шифровачни функции. За разлика от Биткойн, която може да бъде добита само със SHA256d АСИК, Myriad е достъпна за миньори ползващи SHA256d и Scrypt АСИК (ASIC), както и за видео карти (GPU) и процесори (CPU)";
			case clean("Secure"):
				return "Сигурност";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Миньорът може да избере който и да е от следните алгоритми за своите операции - SHA256d, Scrypt, Myr-Groestl, Skein, или Yescrypt, като всеки блок има крайно време от 5 минути. Средното време за намиране на блок е 1 минута. Всеки алгоритъм разполага със собствена трудност, която зависи от силата на съответната мрежа. Въпреки че АСИК-ите доминират в SHA256d и Scrypt алгоритмите, останалите  все още са достъпни за видео картите. Мулти-алгоритмичния подход прави мрежата  изключително издържлива на атаки от типа 51% заради нуждата на разнообразен хардуер нужен за намиране на 51% от блоковете.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Смесения добив е позволен на SHA256d и Scrypt, което позволява на Myriad да се възползва от огромната хешираща мощност.";
			case clean("Fair Distribution"):
				return "Равно разпределение";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Myriad не разполага с предварителен добив или тайни вътрешни запаси. Всеки има равен шанс да се сдобие с него на текущата пазарна цена";
			// technology
			case clean("Multi-Algorithm"):
				return "Мулти-алгоритъм";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 алгоритъма отговарящи за ASIC, CPU и GPU добив:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Две повторения от SHA256d хеширане, първоначално използвано от Биткойн";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Създаден да бъде хеширащ алгоритъм само за процесори, който в момента се обработва от АСИК-и в различни криптовалути като Litecoin";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Специален Myriad вариант на Groestl хеширащия алгоритъм, един от петте финалисти в NIST SHA-3 състезанието по хеширане";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Още един от петте финалиста в NIST SHA-3 състезанието, първоначално използван от Skeincoin";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Първоначално - алгоритъм само за процесори, Qubit обединява в себе си 5 алгоритъма от NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD и ECHO";
			case clean("Merge Mining"):
				return "Слят добив";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "От блок 4002000 слятото миниране е позволено на SHA256d и Scrypt алгоритмите. Това позволява на Myriad да се възползва от огромната хешираща мощност, която в момента се използва от монети, също използващи тези алгоритми, допълнително подсилвайки Myriad мрежата";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Слетия добив (AuxPow) позволява работата извършена за сходна монета като Bitcoin или Litecoin да бъде използвана за намиране на блокове в Myriad мрежата, без допълнително натоварване върху мрежата на въпросната сходна монета";
			case clean("Distribution"):
				return "Разпределение";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad за първи път е пусната на 23 февруари 2014г в 18:30 UTC (09:30 EEST)";
			case clean("first mined block"):
				return "Първия добит блок";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "идва 4 минути по-късно, доказвайки че няма предварителен добив";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Първоначалната награда от 1000 MYR се преполовява на всеки 967 680 блока (приблизително 48 седмици). Максималното количество е 2 милиарда MYR";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Първоначално, крайното време за блок е било 30 секунди или 150 всеки секунди за алгоритъм. На 12 Юли 2015г е решено крайното време за блок да бъде увеличено на 60 секунди или 300 секунди за всеки алгоритъм. Това правило влиза в сила от блок 1 401 001. По това време Myriad страда от нисък хашрейт и трудност в преминаването между SHA256d и Scrypt, което води до средно време на блока от над 50 секунди.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad е създадена през Февруари 2014г от 8bitcoder, разклонена от Zetacoin. Тя е първата валута, която използва пет \"proof-of-work\" алгоритъма, за да увеличи сигурността на мрежата и за да даде възможност на повече хора да я добиват, SHA256d и Scrypt за АСИК-и, Skein и Myr-Groeetl за GPU миньори и Qubit за CPU. Всъщност, Huntercoing, пусната в края на 2013 е първата монето, която използва повече от един PoW (SHA256d и Scrypt) алгоритъм, но нейната цел не се фокусира толкова върху добива, отколкото върху блокчейн базирана игра за създаване на нови монети";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad има и няколко клонинга, първия от които е Saffroncoin, който също използва пет PoW алгоритъма. Digitalcoin и Digibyte също са копия използващи по три алгоритъма, както и Unitus, който има използва сходни алгоритми с Myriad и позволява на потребителите си смесен добив чрез всичките пет. Auroracoin и Verge също са обявили планове за преминаване към повече от един алгоритъм. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "През Август, 2015г Myriad прави твърдо разклонение, за да позволи смесен добив чрез SHA256d и Scrypt алгоритмите с цел да подобри сигурнстта на мрежата и за да постигне по-стабилен хашрейт на въпросните алгоритми. По това време, крайното време за блок на всеки алгоритъм също се променя от 2.5 минути на 5, за да постигне средно време на блока от 1 минута, като предишното е 30 секунди. Това позволява времето за добив до изчерпване на монетите да се удвои до приблизително 20 години";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Последната версия е 0.11.3.1, пусната на 7 април 2016г. Виж ";
			case clean(" announcement &amp; upgrade notes."):
				return " известия и пояснения по ъпдейта.";
			// mining
			case clean("Getting Started"):
				return "Като за начало";
			case clean("Download a "):
				return "Изтегли ";
			case clean("wallet"):
				return "портфейл";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", изтегли подходящ миньор, намери басейн и започвай...";
			case clean("Mining Tutorial Video"):
				return "Добив - Видео урок";
			case clean("Watch on "):
				return "Гледай в";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "Майнинг софтуер";
			case clean("Use any SHA256d compatible ASIC"):
				return "Използвай SHA256d съвместим АСИК";
			case clean("Use any Scrypt compatible ASIC"):
				return "Използвай Scrypt съвместим АСИК";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer за OpenCL GPU добив";
			case clean("BitcoinTalk Thread"):
				return "Тема в BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows файлове";
			case clean("GitHub Source"):
				return "GitHub сорс-код";
			case clean("Suggested Command Line"):
				return "Примерна командна линия";
			case clean("Pools"):
				return "Басейни";
			case clean("P2Pool nodes"):
				return "P2Pool възли";
			case clean("Run Your Own Node"):
				return "Създай собствен възел";
			case clean("Merge Mining Pools"):
				return "Слят добив";
			case clean("zpool - The miners multipool"):
				return "zpool - Мулти-басейна на миньорите";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "Информация и ресурси";
			case clean("Exchanges"):
				return "Борси";
			case clean("Other"):
				return "Други";
			case clean("Faucet"):
				return "Кранче";
			case clean("Testnet Information"):
				return "Информация за Тест-мрежата";
				
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
				return "Das Sind für alle freigebt";   
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad ist multi-algorithmus Programme. Sie habt Wertunge 5 hash-funktionen zugleich. Myriad sind für SHA256d ASICs, Scrypt ASICS, GPU und CPU freigebt, im Gegensatz zu Bitcoin welche anwendungt für Bergbau SHA256d ASICS allein.";
			case clean("Secure"):
				return "Der Schutz";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Der Bergbau kannt jeder aus 5 verfügbane (SHA256d, Scrzpt, Myr-Groestl, Sheir, Yescrypt) Algorithmus wählen. Sheir oder Qubit halt ziele-blocke Zeit aus 5 Minuten. Die Kompliziert heit je aus jeder Algorithmus seine hash-Maß nachdem. ASICS habt GPU-bergbau on SHA256d sich aus wirken; Scrypt ist kontraproduktiv; andere Algorithmen fortsetzt aus GPU-bergbau führen. Eine menge Algorithmus Prozess schlägt Stabilität vor 51%, dass reichlich Ausrünstung erlagen 51 aus Blöcken forderlich.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "United Mining verschiedene Algorithmen, die SHA256d & Scrypt umfassen, aktiviert Myriad zur Verfügung einen Vorteil auf Kosten der riesigen Rechenleistung zu gewinnen.";
			case clean("Fair Distribution"):
				return "Verteilung der Ehrlichkeit";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Sie habt `premine’ und versteckt Blöcken mit große Belohnung nicht. Alle Benutzer haben ebenbürtig die Möglichkeit Myriad auf Marktwirschaft erhalten.";
			// technology
			case clean("Multi-Algorithm"):
				return "Mehrere Algorithmen";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorithmen sind für Bergbau mit ASICs, GPU und CPU erhalten.";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Bitcoin ist ein Pionier aus Krzptowährung zuerst vervendt SHA256d zwei Runde zu.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Das sind zuerst proektiert für CPU-bergbau verwenden alternativen Münzen ab Litecoin zu.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Hash-algorithmus Groestl ist spezialität für Myriad; er war ein von fünf Finalisten aus Wettkampfes hash-algorithmus NIST-SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Andere hash-algorithmus NIST-SHA-3 Finalist habt im Skeincoin gebrauchen.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Er mädrescht 5 NIST-SHA-3 Teilnehmer: Luffa, Cubehash, SHAvite, SIMD, ECHO.";
			case clean("Merge Mining"):
				return "Nutzungen Bergbau";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Nutzungen Bergbau ist für SHA256d und Scrypt fang Block 400200 verfügbar an. Myriad habt Nutzen auf Konsten der große hash-wiertunge, dass andere Münzen gebraucht, dass Schutze bieten aus „blockchain“.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Nutzungen Bergbau(auxPow) ermöglicht Ressourcen für Litecoin oder Bitcoin Bergbau erhölt Belastungen nicht zu verwenden.";
			case clean("Distribution"):
				return "Verteilung";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad habt im Netwerk aus 02/23/2014 am 18:30 UTC veröffentlich. Der";
			case clean("first mined block"):
				return " erste Block ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "habt aus 4 minuten gefunden, dass Mann stätigen „premine“ be nicht .";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Die erste Auszeichnung war 1000 MYR und Sie habt jeder 967680 Blöcken (über 48 Wochen) halbierungen. Maximal zahl war 2 Milliarden MYR an.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Eingangs ziele-blocke Zeit war 30 Sekunden oder 150 Sekunden pro Algorithmus. 07/12/2015 Gemeinschaft beschlossen ziele-blocke Zeit zu 60 oder 300 Sekunden erhöhen. Angegeben Entschluss in Kraft tretet aus Block #1401001. Damals Netzwerk Myriad habt gering  hash-wiertunge und groß Kompliziertheit ziele-blocke Zeit war 50 und mehr Sekunden. Außerdem aux-Pow für Scrypt und SHA256d war verbunden. Angegeben Entschluss habt block-zeit erhönen, das sind besten Übereinstimmung im Netzwerk am ohne Auswirkung auf Verteilung der Ehrlichkeit.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad habt am  Februar 2014 des Kerbe 8bitcoder lassen an, Sie war fork aus Zetacoin. Sie war erste Münze mit Unterstützung des mehrere Algorithmus. Es erlaubt Schutz und Bergbau Umfang mit verschiedene  Algorithmen: SHA256d und Scrypt für ASICS-bergmanne; Skein und Myr-Groestl für GPU-bergmanne; Qubit für GPU und CPU Bergbau. HunterCoin habt zwei Algorithmen für Bergbau (SHA256d und Scrypt); oder Sie habt für „blockchain“ Spielen entworfen. „Blockchain“ Spielen habt Leben für viele neue Mützen gegeben.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad habt mehrere Analoga präsentiert. Das erste Analoga war Saffrocoin mit 5 Algorithmen, Digitalcoin und Digibyte verplichtet „hard-fork“ für 3 oder 5 PoW-Algorithmen zu verwenden. Unitus ist ein weiteres Fünf-algo PoW Münze, die mehrere PoW algos mit Myriad teilt, und ermöglicht es Benutzern, auf allen seinen fünf algos to-Mine zu verschmelzen. Auroracoin und Verge haben auch angekündigt, Pläne Multi-algo zu gabeln.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Am August 2015 Netzwerk Myriad habt „hard-fork“ zu einzig Bergbau für Algorithmen Scrypt und SHA256d nahme auf. Das Ziel war stabil hash-wertung am diese Algorithmen erreichen. Block-zeit war auf 5 Minuten geändert(vor 2.5 Minuten); dass Gesamtzeit 1 Minute(vor 30 Sekunden) würde. Diese Veränderung wird Emissionskurve mit Maß 2x erhöhen, und es wird bis 20 Jähre.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return " Die neueste Version 0.11.3.1 habt 4/07/2016 veröffentlicht. Sie mal!";
			case clean(" announcement & upgrade notes."):
				return "Kündigen und Abkürzungsverzeichnis";
			// mining
			case clean("Getting Started"):
				return "Die Einführung";
			case clean("Download a "):
				return "Herunterladen ";
			case clean("wallet"):
				return "Geldbeutel ";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "Bergmann laden Sie die richtige Art und vorwärts";
			case clean("Mining Tutorial Video"):
				return "Videotraining auf Bergbau";
			case clean("Watch on "):
				return "Software für den Bergbau";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Bergbau Softvare";
			case clean("Use any SHA256d compatible ASIC"):
				return "Abgeschnitten Yana ShA256d kompatible Asik ";
			case clean("Use any Scrypt compatible ASIC"):
				return " Abgeschnitten Yana Scrypt kompatible Asik ";
			case clean("sgminer for OpenCL GPU mining"):
				return "Bergmann für den Bergbau durch OpenCL auf der Grafikkarte";
			case clean("BitcoinTalk Thread"):
				return "Trades auf BitCoin Diskussion";
			case clean("Windows Binaries"):
				return "Windows Executables";
			case clean("GitHub Source"):
				return "GitHunt Quelldateien";
			case clean("Suggested Command Line"):
				return "An der Eingabeaufforderung";
			case clean("Pools"):
				return "Poolen";
			case clean("P2Pool nodes"):
				return "P2Pool Knoten";
			case clean("Run Your Own Node"):
				return "Seinen eigenen Knoten zu starten";
			case clean("Merge Mining Pools"):
				return "Die vereinigten Pools von Bergbau";
			case clean("zpool - Tae Berg Multipol "):
				return "zpool - ";
			case clean("MultiPool"):
				return " Multi-Pool";
			// services
			case clean("Information & Resources"):
				return "Informationen und Ressourcen";
			case clean("Exchanges"):
				return "Tauscher";
			case clean("Other"):
				return "andere";
			case clean("Faucet"):
				return "Kran";
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
				return "Myriad è una multi-algoritmica ed è la prima moneta che contiene contemporaneamente 5 funzioni hash usate per il mining. A differenza di Bitcoin che può essere minato in modo redditizio utilizzando ASICs e l’algoritmo SHA–256d, Myriad è disponibile per Scrypt ASICs, GPUs & CPUs.";
			case clean("Secure"):
				return "Sicura";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Un minatore può scegliere uno qualsiasi dei 5 algoritmi disponibili: SHA256d, Scrypt, Myr-Groestl, Skein o Yescrypt e ciascuno ha il tempo di blocco o il block time fisso di 5 minuti. In generale un blocco viene estratto ogni minuto. La difficoltà di ogni algoritmo viene regolata in base al suo hash rate. Mentre ASICs hanno reso il GPU mining basato sugli algoritmi SHA256d & Scrypt improduttivo, gli altri algoritmi continuano a dominare il GPU mining. L’approccio a più algoritmi offre un nuovo, esclusivo e innovativo metodo di protezione con  il 51% poiché per ottenere il 51% dei blocchi è necessaria una vasta gamma di hardware.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return " Il fuse mineraria combinato su diversi tipi di algoritmi, inclusi SHA256d & Scrypt, ha permesso a Myriad di ottenere un vantaggio grazie all’enorme potenza di calcolo disponibile.";
			case clean("Fair Distribution"):
				return "Distribuzione equa";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Non ci sono preestrazioni o blocchi con una grande ricompensa nascosti. Tutti gli utenti della rete hanno le stesse possibilità per ottenere Myriad al prezzo di mercato.";
			// technology
			case clean("Multi-Algorithm"):
				return "Algoritmi multipli";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "Ci sono 5 algoritmi disponibili per ASIC, GPU e CPU mining:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Due cicli di algoritmo di hashing SHA256d utilizzati per la prima volta dal pioniere di criptovaluta Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Originariamente progettato per il CPU mining adesso viene usato per l’estrazione da molte monete alternative con ASICs, a partire da Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Una versione specifica solo per Myriad di algoritmo di hashing  Groestl è uno dei cinque finalisti della competizione NIST SHA-3 degli algoritmi di hashing.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Un altro dei cinque finalisti della competizione NIST SHA-3 per funzioni hash che è stato utilizzato per la prima volta da Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originariamente progettato solo per la CPU, l’algoritmo Qubit combina 5 partecipanti della competizione NIST SHA-3 per funzioni hash: Luffa, Cubehash, SHAvite, SIMD e ECHO.";
			case clean("Merge Mining"):
				return "Fuse Mineraria";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Partendo dal blocco 4002000 il merged mining è disponibile per gli algoritmi SHA256d e Scrypt. Questo ha permesso a Myriad di ottenere un vantaggio grazie ai grandi hash rate utilizzati attualmente da altre monete e ha garantito la sicurezza della block chain.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Il merged mining, conosciuto anche come AuxPow, consente l’utilizzo  delle risorse impiegate per esempio per il mining  su Bitcoin o Litecoin per confermare la validità dei blocchi nella rete Myriad senza incorrere in alcun carico aggiuntivo.";
			case clean("Distribution"):
				return "Distribuzione";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad è stata rilasciata in rete il 23 febbraio 2014 alle 18:30 UTC";
			case clean("first mined block"):
				return "Il primo blocco ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " è stato estratto dopo 4 minuti, confermando che non vi è stato alcun premine o preestrazione.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La ricompensa iniziale era di 1000 MYR e veniva dimezzata ogni 967680 blocchi  (circa 48 settimane). Il numero massimo di monete è 2 miliardi di MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "All’inizio il block time era di 30 secondi o 150 secondi per un algoritmo. Ma il 12 luglio 2015 la comunità ha deciso di aumentare il block time fino a 60 secondi o 300 secondi per un algoritmo. Tale decisione è entrata in vigore dal blocco № 1401001. Nel momento in cui la rete Myriad aveva il hash rate basso e la complessità elevata, il block time medio era più di 50 secondi. In aggiunta è stato collegato AuxPow per Scrypt e SHA256d che ha aumentato il block time e ha portato a una maggiore coerenza nella rete senza alterare l’equità della distribuzione.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad è stata lanciata nel febbraio 2014 da una persona con il nickname 8bitcoder ed è basata su ZetaCoin. È la prima criptovaluta che utilizza 5 algoritmi POW per incrementare la sicurezza e per una maggiore copertura dei minatori con algoritmi diversi: SHA256d e Scrypt per i minatori ASIC, Skein e Myr-Groestl per i minatori GPU, Qubit per il GPU e CPU mining. HunterCoin, lanciata alla fine del 2013, fu infatti la prima moneta a utilizzare diversi algoritmi POW per il mining (SHA256d e Scrypt), essa fu progettata non per il mining, ma per i giochi basati su block chain che hanno dato vita a molte monete alternative.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return " Myriad ha generato diversi analoghi, il primo dei quali era Saffroncoin, anch’esso basato su 5 algoritmi POW. Digitalcoin e Digibyte si sono divisi per utilizzare 3 e 5 algoritmi POW rispettivamente. Auroracoin e Verge hanno anche annunciato l'intenzione di bivio per multi-algo.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Ad agosto 2015 la rete Myriad è stata divisa in due per consentire un unico mining sugli algoritmi Scrypt e SHA256d nel tentativo di migliorare la sicurezza e raggiungere un hash rate più stabile su questi due algoritmi. In quel momento il block time per ogni algoritmo è stato modificato in 5 minuti (in precedenza 2,5 minuti) per ottenere il block time totale per tutti gli algoritmi di 1 minuto (in precedenza 30 secondi). Questo cambiamento permetterà di allungare la curva di emissione con un fattore 2x e di equiparare a circa 20 anni.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "L’ultima versione 0.11.3.1 è stata rilasciata il 7 April 2016. Vedi:";
			case clean(" announcement & upgrade notes."):
				return "Annunci & elenco di aggiornamenti";
			// mining
			case clean("Getting Started"):
				return "Iniziare";
			case clean("Download a "):
				return "Scarica";
			case clean("wallet"):
				return "borsa";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", scaricare il tipo richiesto di minatore, trova la piscina e andare...";
			case clean("Mining Tutorial Video"):
				return "Formazione video on Mineraria";
			case clean("Watch on "):
				return "dare un'occhiata a";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return " Software per mineraria ";
			case clean("Use any SHA256d compatible ASIC"):
				return " Utilizzare qualsiasi SHA256d compatibile ASIC ";
			case clean("Use any Scrypt compatible ASIC"):
				return "Utilizzare qualsiasi Scrypt compatibile ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "cgminer per l'estrazione tramite OpenCL sulla scheda grafica (GPU)";
			case clean("BitcoinTalk Thread"):
				return "Scambi su BitcoinTalk";
			case clean("Windows Binaries"):
				return "I file eseguibili di Windows ";
			case clean("GitHub Source"):
				return "File di origine GitHub";
			case clean("Suggested Command Line"):
				return " Al prompt dei comandi";
			case clean("Pools"):
				return "Pula";
			case clean("P2Pool nodes"):
				return "P2Pool nodi";
			case clean("Run Your Own Node"):
				return "Rune Ure DMS Nodier ";
			case clean("Merge Mining Pools"):
				return "Pula Fuse Mineraria";
			case clean("zpool - The miners multipool"):
				return "zpool – multipul";
			case clean("MultiPool"):
				return "Multipul ";
			// services
			case clean("Information & Resources"):
				return "Informazioni e risorse";
			case clean("Exchanges"):
				return "Scambiatori";
			case clean("Other"):
				return "Altro";
			case clean("Faucet"):
				return "Crane";
			case clean("Testnet Information"):
				return "Testnet Informazioni";
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
				return "مفتوحة للجميع";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
			return "5    متعدد تماما الخوارزمية  وهذا العملة الاولى لتحقيق كل من ظائف التجزئة–    Myriad
			المستخدمة في التعدين .
			SHA256d, Myriad على عكس بيتكوين ¸ والتي يمكن ان تكون مربحة باستخدام اسيك ماين خوارزمية يتوفر  Scrypt    ASICS , GPUS & CPUs ";
			case clean("Secure"):
				return "الامن";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "حالة نظيفة  وشركة التعين يمكن ان تختار لازالة الالغام باستخدام اي من خوارزميات خمسة 
				SHA256d, Scrypt, Myr-Groestl, Skein, او  Yescrypt وعموما  كل لدية الوقت كتله الهدف من 5 دقائق
				تم العثور على كتلة تقريبا كل دقيقة .  يتاثر صعوبة كل خوارزمية فقط بمعدل التجزئة الخاصة بها .
				 بينما اسيك تؤثر التعدين بطاقات الرسومات مع الرسومات مع خوارزمية SHA256d, Scrypt وغير منتجة 
				وتهيمن على بقية من نطاق خواررزميات التنقيب عنالرسومات . طريقة خوارزميات متعددة يخلق نهج الحصري والجديد المبتكر لطريقة حماية بنسبة 51 % من الوحدات سوف تحتاج الى مجموعة واسغة من المعدات.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "التعدين المتحدة خوارزميات مختلفة, والتي تشمل SHA256d & Scrypt, تمكين  لكسب  Myriad
				ميزةعلى حساب القدرة الحاسوبية الهائلة المتاحة";
			case clean("Fair Distribution"):
				return "بصراحة التوزيع ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "لا بريمايني او ثروات مخباة التي تمتلكها المطلعين الجميع لدية فرصة متساوية للحصول على عدد
				Myriad بسعر السوق .  لا توجد مخباة بريماين السحر والقطع مع مكافاة عالية جميع المستخدمين على الشبكة لديهم نفس الاضطراب.";
			// technology
			case clean("Multi-Algorithm"):
				return " الخوارزميات المتعددة";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 الخوارزميات  المتاحة ASIC  GPU و CPU  ماين";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "جولتان من تجزئة خوارزمية SHA256d , استخدم لاول مرة رائدة Bitcoin- ";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "صممت اصلا للتعدين تحت وحدة المعالجة المركزية , ويستخدم الان لانتاج بديلة ,العديد من القطع النقدية باستخدام  ASICs منذ Litecoin ";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "محددة Myriad سوى خيار وخوارزمية التجرئة -  Groestl – وهذا هو واحد من المرشحين الخمسة لنيست    NIST -SHA 3  خوارزميات التجزئة المنافسة";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " اخر واحد من المرشحين الخمسة للمسابقة تجزئات نيست NIST -SHA 3   والذي استخدم لاول مرة  Skeincoin ";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "صممت في البداية فقط لخوارزمية وحدة المعالجة المركزية و Qubit يجمع بين 5 متشاركين نيست
				     Luffa , Cubehash , SHAvite المنافسة خوارزميات التجزئة – NIST - SHA 3 
				 .SIMD  و ECHO";
			case clean("Merge Mining"):
				return "المتحدة للتعدين";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "وبها ان كتلة 40020000 ,  وهو مشترك مناح للتعدين SHA256d & Scrypt الخوارزميات وقد مكن هذا Myriad لكسب ميزة على حساب  هيشريتوف ضخمة تستخدم في هذا الوقت العملات الاخرى , فضلا عن ضمان سلامة بلاكشينوا ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "التعدين الموحد, المعروف ايضا باسم  AuxPow  ,  يسمح باستخدام موارد قضى , على سبيل المثال , في التعدين Bitcoin  او Litecoin   للتاكد من صحة الكتل في الشبكة Myriad  دون تكبد اي اعباء اضافية ";
			case clean("Distribution"):
				return "توزيع ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad  افرج  لشبكة 23/2/2014  , 18:30  UTC ";
			case clean("first mined block"):
				return "كتلة المطابق الاول";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "ظهرت بعد 4 دقائق,  مما يؤكدانه لا يوجد بريماينا";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "في البداية , كانت مكاغاة 1000  MYR  , والانصاف في كل 967,680 وحدة (حوالي 48 اسبوعا ) الحد الاقصى لعدد من القطع النقدية 20000000000   .";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "في البداية , وحدة الزمن هو 30 ثانية او150 ثانية على الخوارزمية , ولكن 12/7/, 2015 قرر المجتمع لزيادة حدة زمينية الى 60 ثانية او 300 ثانية على خوارزمية . وجاء هذا القرار حيز التنفيذ في كتلة №1,401,001 وفي الوقت الذي كانت فيه شبكة كان Myriad ادنى  والعالمية التعقيد , كان متوسط الوقت اكثر من وحدة 50 ثانية وبالاضافة الى ذلك , كانتمرتبطة مع aux-Pow الحرب Scrypt و  SHA256d , مما ادى الى زيادة الوقت كتلة المستهدفة واد ى الى اتساق افضل في الشبكة دون المرور من خلال التاثير على توزيع الصدق ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad اطلقت في /2/ 2014 رجل مع  اللقب 8bitcoder وهو مفترق ZtaCoin . هذا هو اول عملة التشفير باستخدام 5 POW  خوارزميات اسرى الحرب من اجل زيادة الامان , فضلا عن تغطية اكبر من عمال المناجم مع خوارزميات مختلفة-    SHA256d و  Scryptلعمال المناجم مع ASIC خصلة خيوط                                  , Ske				in ﻭ Myr-Groestl لعمال المناجم GPU , Qubit  , GPU , وحدة المعالجة المركزية للتعدين .
				HunterCoin , التي بدات في اواخر عام 2013 , في الواقع , اول من استخدام عدة خوارزميات لاسرى الحرب التعدين (SHA256d  و  Scrypt),  ولكن لم تكن مصممة للتعدين , والعاب تعتمد على بلاكشينا اعطى المزيد من الولادة الى العديد من بديل كوين ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ولدت عدة النظير حاليا , اولها كان يستخدم Saffroncoin   ايضا 5 PoW خوارزميات اسرى الحرب Digitalcoin و Digibyte جعلت من الصعب الشوكة , hard-fork  لاستخدام 3,  5  PoW خوارزميات اسرى الحرب على التوالي ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
			return "في اب عام 2015 كانت شبكة  Myriad  الصعب فاركوتا , لتمكين التعدين واحد على الخوارزميات – Scrypt و SHA256d . كان الهدف هو تحقيق تجزئة شبكة  ريتا مستقرة على هذه الخوارزميات بينما يتم تغيير التوقيت كتلة هدف لكل خوارزمية لمدة 5 دقائق ( حتى , من 2.5 دقيقة ) للحصول على الوقت الاجمالي لجميع خوارزمياتكتلة – 1 دقيقة ( 30 ثانية في وقت سابق ) تغير سحب كبار منحنى الانبعاثات الى 2 درجة , وتعادل ما يقرب من 20 عاما .";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
                                return "ﺎﺣﺪﺛ ﺎﺻﺩﺍﺭ 0.11.3.1,  ﺎﻟﺬﻳ ﺹﺩﺭ ﻒﻳ 6 /7/ 2016  , ﺎﻨﻇﺭ ";
			case clean(" announcement & upgrade notes."):
				return "اعلان وتحديث قائمة ";
			// mining
			case clean("Getting Started"):
				return "مقدمة";
			case clean("Download a "):
				return "تحميل";
			case clean("wallet"):
				return "محفظة";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "مينر تحميل النوع الصحيح , حدد موقع تجمع و الذهاب.....";
			case clean("Mining Tutorial Video"):
				return "تدريب الفيديو للتعدين";
			case clean("Watch on "):
				return "نلقي نظرة على";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "برنامج للتعدين";
			case clean("Use any SHA256d compatible ASIC"):
				return " استخدام اي  SHA256d متوافق مع ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "استخدام اي Scrypt  متوافق مع ASIC";
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
				return "Otwarte dla każdego";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad – wielu algoritmiczna - jest pierwszą monetą, która wprowadza  jednocześnie  5 funkcji skrótu, wykorzystujących do miningu. W odróżnieniu  od Bitcoin, którym można opłacalnie kopnąć posługując ASICs oraz algoritm SHA256d, Myriad jest dostępna dla Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Bezpieczna";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Kopacz może wybrać którykolwiek z 5 dostępnych algorytmów – SHA256d, Scrypt, Myr-Groestl, Skein, lub Yescrypt – każdy z nich ma fiksowany czas bloku docelowego - 5 minut. Całkowicie, blok zostaje znaleziony  w ciągu każdej minuty. Złożoność każdego z algorytmów reguluje się w zależności od prędkości koparki. 
				Podczas gdy ASICs wpływa na mining za pomocą kart graficznych  z algorytmem SHA256d, а Scrypt jest nieproduktywny, pozostałe algorytmy dominują w sferze  miningu kart graficznych. Sposób multi-algorytmiczny  nowe ekskluzywne oraz innowacyjne podejście do metodyki  ochrony za pomocą 51%, ponieważ żeby otrzymać 51% bloków potrzebna jest duża ilość sprzętu.";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Zbiorowy mining różnymi algorytmami, którzy zwłaszcza SHA256d &amp; Scrypt, zezwala Myriad otrzymać przewagę kosztem olbrzymiej dostępnej mocy obliczeniowej.";

			case clean("Fair Distribution"):
				return "Sprawiedliwy podzial";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Niema preminu oraz żadnych cudownych wtyków. Wszystkie użytkownicy sieci mają jednakowe możliwości dla otrzymywania Myriad według kursu rynkowego";
			// technology
			case clean("Multi-Algorithm"):
				return "Multi-algorytmy";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorytmów dostępnych dla ASIC, GPU и CPU kopania";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dwie rundy dla funkcji skrótu algorytmu SHA256d, po raz pierwszy wykorzystanych przez nowatora kryptowalut - Bitcoin.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Najpierw zaprojektowany do CPU miningu, teraz wykorzystuje się do generowania przez alternatywne kryptowaluty  za pomocą ASICs, rozpoczynając  od Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Specyficzny wariant algorytmu skrótu Mariad – Groestl – jest jednym z pięciu finalistów   NIST SHA-3 konkurowania algorytmów skrótu.";

			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Kolejnym z pięciu finalistów  konkurowania algorytmów skrótu jest NIST SHA-3, który po raz pierwszy wykorzystany przez  Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return " Początkowo przeznaczony tylko dla algorytmu qubit CPU łączy 5 uczestników NIST SHA-3 konkurencji  algorytmów skrótu - Trukwa, Cubehash, SHAvite, SIMD i echo.";

			case clean("Merge Mining"):
				return "Zbiorowy mining";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Rozpoczynając od bloku 4002000, Zbiorowy mining jest dostępny na algorytmach SHA256d i Scrypt. To pozwoliło Myriad, mieć przewagę kosztem ogromnej prędkości koparki używanej przez inne kryptowaluty oraz ochrony blockchainu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Zbiorowy mining, znany również jako AuxPow, umożliwia stosowanie środków wydawanych na przykład do miningu lub Bitcoin Litecoin potwierdzenie aktualności bloków w sieci Myriad bez ponoszenia jakiegokolwiek dodatkowego obciążenia.";

			case clean("Distribution"):
				return "Podział";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad zostala wydana w sieci 23 lutego 2014 roku в 18:30 UTC";

			case clean("first mined block"):
				return "pierwszy wykopany blok";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " pojawił się przez 4 minuty, podtwierdzając że nie było żadnego preminu.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Na początku nagroda była 1000 MYR, które  przepołowione każde 967.680 jednostek (około 48 tygodni). Maksymalna liczba monet -  2 miliardy MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Początkowo czas bloku docelowego wynosił 30 sekund, lub 150 sekund na algorytmu. W dniu 12 lipca 2015 roku, wspólnota postanowiła wydłużyć czas bloku docelowego do 60 sekund lub 300 sekund
			na algorytmie, Decyzja weszła w życie  z bloku 1,401,001. W tym czasie Myriad miała niską prędkość koparki i rozległe trudności na Scrypt i SHA256d, powodując rzeczywisty średni czas blok na ponad 50 sekund.
			Oprócz włączenia aux-POW na Scrypt i SHA256d, wzrost czasu bloku docelowego doprowadził do lepszej koordynacji  w sieci, bez wpływu na jakość podziału"; 
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad uruchomiony w lutym 2014 roku człowiekiem z przezwiskiem 8bitcoder, jest odgałęzieniem ZtaCoin. Jest to pierwsza waluta kryptograficzna z użyciem 5 algorytmów POW dla zwiększenia bezpieczeństwa, jak również większego zasięgu miningu z różnych algorytmów - SHA256d i Scrypt ASIC do miningu i Motek Myr-Groestl do miningu GPU qubit dla GPU i CPU górnictwa. HunterCoin, rozpoczęła się pod koniec 2013 roku, w rzeczywistości po raz pierwszy użył kilka algorytmów POW dla górnictwa (SHA256d i Scrypt), ale to nie był przeznaczony do miningu , raczej na podstawie blockchain-gier, co dodatkowo dało początek dla wielu nowych kryptowalut.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad dał początek dla kilka  swoich odpowiedników, pierwszy to Saffroncoin też wykorzystujący 5 PoW algorytmy. Digitalcoin и Digibyte dokonali hard-fork, żeby użyć odpowiednio 3 i 5 PoW algorytmów .";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "W sierpniu 2015 Myriad  dokonała  hard-fork,  aby umożliwić Zbiorowy mining na algorytmach - Scrypt i SHA256d celem było uzyskanie stabilnej  prędkości hashowania sieci w tych algorytmach. W tej chwili czas bloku docelowego dla każdego algorytmu zmienili z 2,5 do 5 minut, żeby  czas ogólny dla wszystkich algorytmów składa 1 minutę(wcześniej 30 sekund). Ta zmiana pnącą w górę krzywą emisji za pomocą stopniu 2х, и niweluje w przybliżeniu  20 lat.";
			 // wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Bieżąca wersja 0.11.3.1. Zobacz";
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
				return ", pobierz potrzebną koparkę, znajdź giełdę  zacznij...";
			case clean("Mining Tutorial Video"):
				return "Wideo samouczek do miningu";
			case clean("Watch on "):
				return "przyjrzeć ";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Soft do miningu";
			case clean("Use any SHA256d compatible ASIC"):
				return "Użyj jakiekolwiek SHA256d-zgodnego ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Użyj jakiekolwiek Scrypt-zgodny ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer do miningu  OpenCL karty gficznej(GPU)";
			case clean("BitcoinTalk Thread"):
				return "Wątek на BitcoinTalk";
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
				return "Aby rozpocząć własny węzeł";
			case clean("Merge Mining Pools"):
				return " zbiorowe kopanie ";
			case clean("zpool - The miners multipool"):
				return "zpool – multipools";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "Informacja и Środki";
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
	
	else if($lang == 'ko')
	{
		switch (clean($text))
		{
			// homepage
			case clean("Open To Anyone"):
				return "아무 사람에게 열려 있다";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return "Myriad 은 많은 알고리즘이 가져 있다. 처음에 나온 코인인데 마이닝을 이용하도록 동시에 5 해시 함수에서 실현했다. ASICS 및 SHA256d알고리즘을  유리하게 마이닝한 덕분에 비트코인과 달리 Myriad은 ScryptASICS, GPUS&CPUs을 위해는 유효한다";
			case clean("Secure"):
				return "위험하지 않다";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "마이너가 5 가능한 알고리즘 중 하나를 선택할 수 있다. SHA256d, Scrypt, Myr-Groestl, Skein이나 Qubit은 각 착안 블록은 고정 된 5 분 시간이 있다.일반적으로는, 블록은 약 매분 찾을 수 있다. 각 알고리즘 헤시레이트에 따라 복잡성이 조정되고 있다. Asik이  그래픽 카드가 들어 있는 SHA256d알고리즘으로 마이닝을   영향을 하는 동안 Scrypt가 비생산적이다. 나머지는 마이닝 알고리즘 그래픽의 범위에 의해 지배된다. 여러 알고리즘이 있는 방법은  보호 절차에 51%과 더부로 새로운 독점하고 혁신적인 접근 방식을 만든다. 이유는 블록의 51 %는 장비의 거대한 범위가 필요가 있어야겠다";

			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "여러 가지 알고리즘으로 결합된 마이닝이 SHA256d&Scrypt을 포함한다. Myriad은 가능한 엄청난 컴퓨팅  떡분에 파워이득을 받기가 현실하게 되었다";

			case clean("Fair Distribution"):
				return "정직한 분포";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "프리마안하고 숨겨진 높은 보수와 마법의 블록이 없다. 모든 네트워크 사용자가 Myriad을 시장 가치를 얻기 위해 똑같은 기회가 갖고 있다";
			// technology
			case clean("Multi-Algorithm"):
				return "여러 알고리즘";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return " ASIC, GPU & CPU마이닝을 위해 가능한 5 알고리즘:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Bitcoin은 암호 화폐 선구자로 처음에 사용된 SHA256d 해시 알고리즘의 두 라운드이다.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
 				return "원래 CPU 마이닝을  위해 설계되었는데 현재는Lite coin부터 시작해서ASICs과 더불어 많은 대안 코인의 추출에 사용된다.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Groestl인 헤시 알고리즘에 대한 특정 무수한 유일한 옵션이 헤시 알고리즘 경쟁의NISTSHA-3다섯 최종 후보 중 하나이다.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "헤시 알고리즘 경쟁의NISTSHA-3다섯 최종 후보 중하나도 있는데처음에kein coin으로 사용된 것이다.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "우선 CPU 알고리즘위해만 설계되어서Qubit은헤시 알고리즘 경쟁의 5 회원: Luffa, Cubehash, SHAvite, SIMD, ECHO을 결합한다";
 			case clean("Merge Mining"):
				return "결합 된마이닝";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
				return "4002000블로그부터 시삭해서, SHA256d 및 Scrypt 알고리즘을 사용할 수 있는 결합된 마이닝이다.  이는 Myriad에게 거대한 헤시레이트의 비용 이점을 얻기 위해 수많은 활성화가 나타났다. 이는다른 코인으로 사용하기 때문에 블록 체인 안전을 보장했다.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "다른 AuxPow 이름으로 알려진 결합된 마이닝이 Bitcoin이나  Litecoin을 위한 사용하는 자원의 이용을 준다. Myriad 네트워크 장치의 유효성을 확인하며 추가 하중을 지지 않는다.";
			case clean("Distribution"):
				return "분포";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad은 2014년 2월 23일 18:30 UTC에 네트워크에서 나왔다.";
			case clean("first mined block"):
				return "처음에 찾은 블로그";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " 4분 후에 나와서 아무 프리마인이 없었던 것을 확인했다.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "원래 수상이 1,000 MYR이었느데 967,680 블로그마다 절반으로  떨어졌다 (약 48주). 코인의 최대 개수는 2십억MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return "원래 블로그 시간은 30초였는데 다른 말로는  1 알고리즘이 150초 필요했다. 그러나2015년 07 월 12 일에 커뮤니티가 60 초까지 단위 시간을  증가로 결정했다, 다른 말로는  1 알고리즘이 300초 필요했다. 이 결정은 №1,401,001블록에 발효됐다. Myriad 네트워크가 낮은 헤시레이트와 높은 복잡성이 있었을때 평균 블록 시간은 50초였다. 또는  для Scrypt 및 SHA256d을 위해 aux-Pow이 연결되었다. 그 덕분에 대상 단위 시간 증가하고 네트워크의 더 나은 일관성을 얻었다. 정직의 분포에 미치는 영향을 페스했다.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "2014년 2월 8bitcoder이라고 하는 사람이 Myriad을 출시했으며ZtaCoin fork을 표현한다. 이것은 5 POW 알고리즘을 이용하는 첫번째 암호 화폐가  
			안정성을 증가시키기 위한 만든 것이다. 그 뿐만 아니라 다른 알고리즘 ASIC 마이너 SHA256d 및 Scrypt  , GPU 마이너 Skein 및 Myr-Groestl, GPU 마이너 Qubit의 광부의 더 범위에 대한 것이다. 2013년말에 출시된 HunterCoin은, 사실은, 먼저 광산 마이닝 POW (SHA256d и Scrypt)위한 여러 알고리즘을 사용했지만광산 용으로 설계되지 않았고 게임 블로그 체인에 따라 만들게 되었다. 그것들이 많은 알트 코인에게 생명을 주었다.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return " Myriad그것은 현재 여러 유사체를 만들었다. 그 중에 먼저 나오고  5 PoW 알고리즘을 이요하는 Saffroncoin이다. 3 и 5 PoW 알고리즘을 이요하기 위해Digital coin및Digibyte hard-fork을 했다. Unitus는 5개 알고리즘으로 PoW를 시행하는 코인이고 여러 PoW 알고리즘을 Myriad와 공유한다, 그리고 사용자로 하여금 5개의 알고리즘을 통합 채굴알 수 있게 한다. Auroracoin과 Verge는 이미 멀티 알고리즘으로 Fork하기로 공지하였다";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.	At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "2015년 8월에 Myriad 네트워크는hard -fork, Scrypt 및 SHA256d알고리즘에 대한 하나의 광산을 가능하게 하도록–그 목적은 안정된 네트워크는 이러한 알고리즘을 헤시 레이트  달성했다. 그 시간에 타겟 유닛 시간은 알고리즘마다에서 5분까지 변화했다. (옛날에는 2.5 분이었다. 이유는 모든 알고리즘에 대한 전체 블록의 1분 시간을 얻을 수 있는 것이다. (옛날에는30초였다). 이 변화는 2도 사용ㅎ기 때문에 곡선 위쪽으로 방출을 끌어하고약 20 년 균등하겠다.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
 				return "0.11.3.1 최신 버전인데 2016년7월6일에 출시했다. 공지 사항 및 업데이트 목록을 찾아 보세요";
			case clean(" announcement & upgrade notes."):
				return "발표 및 메모를 업그레이드";
			case clean("Desktop"):
				return "바탕 화면";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-비트 설치(11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-비트 설치(11.5 MB)";
			case clean("Mobile"):
				return "변하기 쉬운";
			case clean("Android"):
				return "기계적 인조 인간";
			case clean("Source"):
				return "출처";
			case clean("Source Code (0.11.3.1)"):
				return "소스 코드(0.11.3.1)";
			case clean("Other"):
				return "다른";
			case clean("Linux"):
				return "리눅스";
			case clean("Windows"):
				return " Windows ";
			case clean("JSWallet"):
				return " JSWallet ";
			case clean("Brain wallet"):
				return "뇌 지갑";
			case clean("Paper Wallet"):
				return "페이퍼 월렛";
			// mining
			case clean("Getting Started"):
				return "시작하기";
			case clean("Download a "):
				return "다운로드";
			case clean("wallet"):
				return "지갑";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return ",마이너의 필요하신 종류를 다운로드하셔서 앞으로 풀ㄹ을 찾아 보세요...";
			case clean("Mining Tutorial Video"):
				return "채굴 튜토리얼 비디오4";
			case clean("Watch on "):
				return "시계";
			case clean("Mining Software"):
				return "채굴 소프트웨어";
			case clean("Use any SHA256d compatible ASIC"):
				return "아무 SHA256d 과 호환이 있는 ASIC을 사용하세요";
			case clean("Use any Scrypt compatible ASIC"):
				return "아무 Scrypt 과 호환이 있는 ASIC 을 사용하세요";
			case clean("sgminer for OpenCL GPU mining "):
				return "OpenCL 의 GPU 마이닝 sgminer ";
			case clean("ccminer for CUDA GPU mining"):
				return "CUDA 의 GPU 마이닝 cgminer ";
			case clean("cpuminer-multi for CPU mining"):
				return "CPU 마이닝 cpuminer 멀티";
			case clean("cgminer for OpenCL GPU mining"):
				return "의 OpenCL GPU 마이닝 cgminer";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalk 실";
			case clean("Windows Binaries"):
				return "Windows 바이너리";
			case clean("GitHub Source"):
				return "GitHub 출처";
			case clean("Suggested Command Line"):
				return "추천 명령행";
			case clean("Pools"):
				return "=풀";
			case clean("P2Pool nodes"):
				return "P2Pool 노드";
			case clean("Run Your Own Node"):
				return "당신이 소유한 Node를 실행"			
			case clean("Other pools"):
				return "다른 =풀";
			case clean("Merge Mining Pool "):
				return "결합된 마이닝이 =풀";
			case clean("zpool - The miners multi pool"):
				return "zpool –=채굴자 =풀";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "정보 및 자료";
			case clean("Visão Explorador (1)"):
				return "블록 탐색기(1)";
			case clean("Visão Explorador (2)"):
				return "블록 탐색기(2)";
			case clean("Abe Explorer"):
				return "아베 탐색기";
			case clean("Network Status"):
				return "네트워크 상태";
			case clean("Exchanges"):
				return "교환";
			case clean("Shop"):
				return "가게";
			case clean("List of Coinpayments stores"):
				return "매장을 받아들이는 동전";
			case clean("Other"):
				return "다른";
			case clean("Faucet"):
				return "Faucet";
			case clean("Testnet Information"):
				return "Testnet 정보";
			case clean("cryptap.us Myriad page"):
				return " cryptap.us Myriad 페이지";
			case clean("Reddit/IRC myrbot information"):
				return "Reddit/IRC myrbot 정보";
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
        		    return "Myriad é a primeira moeda multi-algoritmica que começou a usar simultaneamente as 5 funções de hash utilizados para mineração.
        		    Comparando com a Bitcoin que pode ser lucrativa fazendo mineração com ASICs e algoritmo SHA256d, Myriad está disponível para Scrypt ASICS,
        		    GPUS & CPUs.";
        		case clean("Secure"):
        		    return "Segura";
        		case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
        		each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected
        		by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be
			dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to
		        find 51% of the blocks."):
			    return "Minerador pode escolher um dos 5 algoritmos disponíveis: SHA256d, Scrypt, Myr-Groestl, Skein, ou Qubit – cada um deles tem tempo alvo
        		    do bloco fixo - 5 minutos. Em geral, aproximadamente cada minuto há um bloco. Dificuldade de algoritmo está regularizada dependendo de hash
        		    rate de cada um. Enquanto os ASICs afetam a mineração com placa de vídeo com algoritmo SHA256d e o Scrypt está inútil, os outros algoritmos
        		    estão dominando a mineração através das placas de vídeo. O método dos algoritmos multiplus cria uma abordagem nova, exclusiva e inovadora
        		    para o método de proteção com 51%, porque para conseguir 51% dos blocos precisa variedade enorme dos equipamentos.";
        		case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
        		    return "Mineração combinada com os algoritmos diferentes, inclusive o SHA256d & Scrypt, permitiu a destacar Myriad por causa do gigante
        		    desempenho disponível de computação.";
        		case clean("Fair Distribution"):
			    return "Distribuição justa";
        		case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
            		    return "Não há pré-mineração e os blocos mágicos escondidos com o grande prémio. Todos os usuários da rede têm as mesmas possibilidades de
            		    receber a Myriad com o preço do mercado";
			// technology
        		case clean("Multi-Algorithm"):
        		    return "Algoritmos múltiplus";
         		case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
        		    return "5 algoritmos disponíveis para mineração ASIC, GPU e CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
			    return "Dois círculos de hash de SHA256d, primeiramente usados pelo pioneiro da criptomoeda Bitcoin";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
        		    return "Inicialmente projetado para mineração CPU, agora está utilizado para extração das muitas moedas alternativas usando ASICs, começou da
        		Litecoin.";
         		case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
        		    return "Especificado somente para Myriad opção de algoritmo hash Groestl é somente um dos 5 finalistas do NIST SHA-3 – uma competição dos
        		    algoritmos de hash.";
		        case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
		            return "Mais um dos 5 finalistas da competição dos algoritmos de hash é NIST SHA-3, primeiro ele foi usado pela Skeincoin.";
		        case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and
			ECHO."):
		            return "Inicialmente projetado somente para CPU, o agoritmo Qubit contem os 5 participantes do NIST SHA-3 – uma competição dos algotitmos de
        		    hash – entre quias estão Luffa, Cubehash, SHAvite, SIMD e ECHO.";
			case clean("Merge Mining"):
        		    return "Mineração combinada";
        		case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of
			the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
			    return "Desde o bloco 4002000, mineração combinada está disponível para os algoritmos SHA256d e Scrypt. Isso permite Myriad ganhar uma
		            vantagem por causa das grandes hashrates, usadas pelas outras moedas e também fornecer a segurança do blockchain.";
		        case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on
			Myriad's blockchain, with no extra load or performance impact to the parent coin."):
        		    return "Mineração combinada também conhecida como AuxPow, permite usar os recursos usados por exemplo em mineração de uᴉoɔʇᴉq ou Lightcoin
	        	    para confirmação de validade dos blocos na rede de Myriad no mesmo tempo sem nenhuma carga adicional.";
         		case clean("Distribution"):
        		    return "Distribuição";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
        		    return "Myriad começou a ser utilizada 23 de fevereiro de 2014 às 18:30 UTC";
		        case clean("first mined block"):
			    return "primeiro bloco encontrado";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
        		    return " apareceu depois de 4 minutos confirmando a ausência de qualquer pré-mineração";
         		case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
        		    return "No começo o prêmio era de 1,000 MYR, ele se dobrava cada 967,680 blocos(aproximadamente 48 semanas). O máximo permitido são
			     2 000 000 000 MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase
			the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate
			and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling
			aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of
			distribution."):
		            return "Inicialmente o tempo do bloco era de 30 segundos ou 150 segundos para o algoritmo. Mas 12 de julho de 2015 a comunidade decidiu
        		    aumentar o tempo do bloco até 60 segundos ou 300 segungos para o algoritmo. Essa decisão começou a funcionar a partir do bloco №1,401,001.
        		    Enquanto a rede Myriad tinha hashrate baixo e dificuldade alta, o tempo médio de um bloco era mais de 50 segundos. Adicionalmente foi
        		    contactado aux-Pow para Scrypt e SHA256d, que aumentaram o tempo alvo do bloco e melhoraram a coordenação na rede passando a
		            interferência da certa distribuição";
		       	case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work
		       	algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein			
		       	and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
		       	coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the
		       	large majority of new coins."):
            		    return "Myriad foi lançada em fevereiro de 2014 pela pessoa chamado de 8bitcoder, e é uma bifurcação da ztaCoin. Ela é a primeira criptomoeda,
        		    que estava utilizando os 5 algoritmos POW para aumentar a segurança, e também para maior cobertura dos mineiros com os algoritmos diferentes
        		    – SHA256d e Scrypt para ASIC mineiros, Skein e Myr-Groestl para GPU mineiros, Qubit para GPU e CPU minerações. HunterCoin foi lançada no final
        		    de 2013, na realidade, ela foi a primeira moeda que usava os algoritmos POW para mineração(SHA256d e Scrypt), mas ela foi projetada para os
			    jogos na base de blockchain e não para mineração. Muitos desses jogos foram o começo das moedas alternativas.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both
            		hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
            		and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
			     return "Myriad gerou alguns dos seus analogos, primeiro dos quais foi Saffroncoin que também usou os 5 algoritmos PoW. Digitalcoin e Digibyte
			     fizeram o hardfork, para usar 3 e 5 PoW algoritmos. Unitus é um outra moeda PoW  de 5 algorítimos que compartilha com vários algoritmos PoW com Myriad,				
			     e permite aos usários minar em conjunto todos esses algoritmos. Auroracoin e Verge também anunciaram planos de fork para multi-algoritmo.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve
        		a more stable hashrate on those two algorithms.   At this time the target block time for each algorithm was also changed to five minutes
        		(previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve
        		out by a factor of 2x, to approximately 20 years."):			
        		      return "Em agosto de 2015 foi feito hardfork na rede Myriad, para ligar nos algoritmos Scrypt e SHA256d a mineração unida, a meta era conseguir
			      hash rate estável nesses algoritmos. Nesse época o tempo alvo do bloco para cada algoritmo foi aumentado até 5 minutos(antes disso foram 2,5
        		      minutos), para conseguir o tempo geral do bloco para todos os algoritmos 1 minuto(antes disso foram 30 segundos). Essa mudança estende a
        		      curva da emissão para cima usando a exponenciação 2x e equaliza aproximadamente aos 20 anos.";
		        // wallets
		        case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
             		      return "Última versão 0.11.3.1, lançada 6 de julho 2016. Clique aqui.";
             		case clean(" announcement & upgrade notes."):
			      return "Anúncios & lista das atualizações";
			case clean("Desktop"):
        		      return "PC";
        		case clean("Windows"):
        		      return "Windows";
        		case clean("32-bit Installer (11.5 MB)"):
        		      return "Instalador de 32-bit (11.5 MB)";
        		case clean("64-bit Installer (11.5 MB)"):
        		      return "Instalador de 64-bit (11.5 MB)";
        		case clean("Mobile"):
        		      return "móvel";
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
        		     return "Cérebro Carteira";
        		case clean("Paper Wallet"):
        		     return "Carteira de papel";
        		// mining
        		case clean("Getting Started"):
        		    return "Introdução";
        		case clean("Download a "):
        		    return "Baixar ";
        		case clean("wallet"):
        		    return "Bolsa";
        		case clean(", download a miner of the right type, find a pool and fire away..."):
        		    return ", baixe o mineiro necessario, encontre pool e começa...";
        		case clean("Mining Tutorial Video"):
        		    return "Formação de vídeo na mining";
        		case clean("Watch on "):
        		    return "Dê uma olhada ";
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
        		    return "Negociações sobre BitcoinTalk";
        		case clean("Windows Binaries"):
        		    return "Windows executáveis";
        		case clean("GitHub Source"):
        		    return "GitHub arquivos de origem";
        		case clean("Suggested Command Line"):
        		    return "No prompt de comando";
        		case clean("Pools"):
        		    return "Pula";
        		case clean("P2Pool nodes"):
        		    return "P2Pool Pula";
        		case clean("Run Your Own Node"):
			    return "Para lançamento do seu próprio node";
        		case clean("Other pools"):
            		    return "Otra pula";
			case clean("Merge Mining Pools"):
        		    return "Mineração combinada Pula";
         		case clean("zpool - The miners multipool"):
            		    return "zpool – multi-pula";
        		case clean("MultiPool"):
        		    return "MultiPula";
			// services
        		case clean("Information & Resources"):
        		    return "Informações e recursos";
			case clean("Visão Explorador (1)"):
		            return "Insight Esplorilo (1)";
		        case clean("Visão Explorador (2)"):
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
        		    return "Testnet informação";
        		case clean("cryptap.us Myriad page"):
        		    return "cryptap.us a página Myriad";
        		case clean("Reddit/IRC myrbot information"):
        		    return "Reddit/IRC myrbot em formação";
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
				return "זמינה לכולם";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return "Myriad – בעלת אלגוריתמים מרובים – זאת מטבע ראשון שהביא לחיים 5-פונקציות גיבוב המשמשות לכרייה. להבדיל מביטקוין, אשר אפשר לכרות עם רווח על-ידי שימוש ב ASIC ואלגוריתם SHA256d, Myriad זמינה ל- Script, ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "בטוחה";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "כורה רשאי לבחור כל אלגוריתם מ 5 הזמינים –
				 SHA256d, Scrypt, Myr-Groestl, Skein  או Yescrypt – כל אחד מהם בעל זמן של בלוק קבוע וממוקד – 5 דקות. בכלליות, בלוק נמצא בערך כל דקה. בהתאם ל hash rate של כל אלגוריתם, מותאם גם הקושי שלו. יחד עם זאת שב- ASIC משפיעים על כרייה על-ידי כרטיסי מסך עם אלגוריתם SHA256d ו Scrypt אינו יעיל, שאר האלגוריתמים שולטים על התחום הכרייה על-ידי כרטיסי מסך. שיטת אלגוריתמים מרובים יוצרת גישה חדשה ייחודית וחדשנית למתודיקה של הגנה בעזרת 51%, מכוון שלקבלת 51% של בלוקים נדרש מגוון רחב מאוד של ציוד.";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "כרייה משולבת על-ידי אלגוריתמים שונים, הכוללים בתוכם SHA256d & Scrypt אפשרה ל Myriad לקבל יתרון בגלל העוצמה העצומה הזמינה.  ";
			case clean("Fair Distribution"):
				return "חלוקה הוגנת";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "חסרה כרייה מראש ובלוקים קסומים מוסתרים עם פרס גדול. כל משתמשי הרשת בעלי אותם אפשרויות לקבלת Myriad במחיר השוק";
			// technology
			case clean("Multi-Algorithm"):
				return "אלגוריתמים מרובים";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 אלגוריתמים זמינים לכרייה ASIC, GPU ו CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "שני סיבובים לאלגוריתם הגיבוב SHA256d שלראשונה השתמש בהם חלוץ של מטבעות מבוזרים – Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "בתחילה המתוכנן לכרייה על-ידי CPU, עכשיו משתמשים לכרייה על ידי מטבעות שונות רבות אחרות בעזרת ASICs, החל מ Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "אפשרות ייחודית רק ל Myriad של אלגוריתם גיבוב – Groestl – זה אחד מ 5 הפינליסטים של NIST SHA-3 של תחרות אלגוריתמי גיבוב. ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "עוד אחד מחמישה הפינליסטים של התחרות לגיבוב NIST SHA-3, אשר השתמשו בו לראשונה ב keincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "בתחילה המתוכנן רק לאלגוריתם  CPU, Qubit משלב 5 משתתפי NIST SHA-3 תחרות באלגוריתמי גיבוב – Lufffa, Cubehash, SHAvite, SIMD ו ECHO.";
 			case clean("Merge Mining"):
				return "כרייה משולבת";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
				by coins using these algorithms, further securing the Myriad blockchain."):
				return "מבלוק 4002000, כרייה משולבת זמינה לאלגוריתמים SHA256d ו Scrypt. זה אפשר ל Myriad לקבל יתרון על חשבון hash rates ענקיים שמטבעות אחרים משתמשים בהם כיום, וזה גם הבטיח בטיחות של שרשרת בלוקים.  ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "כרייה משולבת, ידועה גם כ AuxPow, מאפשרת להשתמש במשאבים אשר משקיעים למשל לכריית Bitcoin או Litecoin לאשור תוקף של בלוקים ברשת Myriad ולא לשאת שום עומס נוסף.";
			case clean("Distribution"):
				return "חלוקה";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad הונפק לרשת ב 23-בפברואר 2014 ב - UTC18:30 ";
			case clean("first mined block"):
				return " בלוק ראשון ממוקש "
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " הופיע לאחר 4 דקות, וזה אישר שלא הייתה שום כרייה מראש. ";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "בהתחלה, פרס היה 1,000 MYR וחולקה פי שניים כל 967,680 בלוקים (בערך 48 שבועות). כמות מרבית של מטבעות – 2 מיליארדים MYR. ";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return "בהתחלה זמן של בלוק היווה 30 שניות או 150 שניות לאלגוריתם. אך ב 12 ביולי 2015 הקהילה החליטה להגדיל זמן של בלוק עד 60 שניות או 300 שניות לאלגוריתם. ההחלטה הזאת נכנסה לתוקף מבלוק מס' 1,401,001. כאשר לרשת Myriad היה hash rate נמוך וקושי רב, זמן ממוצע של בלוק היה מעל 50 שניות. נוסף לכך חובר aux-Pow לאלגוריתם Scrypt ו SHA256d, וזה העלה זמן ממוקד של בלוק והביא לתיאום טוב יותר ברשת ולא וצדק של חלוקה לא הושפע ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad הושק בפברואר 2014 על-ידי בן אדם עם שם משתמש 8bitcoder ומהווה מעצמו פיתוח של ZtaCoin. זה מטבע מבוזר הראשון שמשתמש ב 5 אלגוריתמים POW להגברת בטיחות וגם לכיסוי מקיף יותר של כורים, Skein ו Myr-Groestl לכורים GPU, Qubit לכריית GPU ו CPU. האמת ש HunterCoin, אשר הושק בסוף 2013,  היה הראשון שהשתמש בכמה אלגוריתמים POW לכרייה (SHA256d ו Scrypt), אך היה מעוצב לא לכרייה, אלא למשחקים על בסיס שרשרת בלוקים, אשר בהמשך הביאו להרבה מטבעות – תחליפי bitcoin.   ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad הביאה לכמה מטבעות דומים לו, אחד מהם היה Saffroncoin שגם משתמש ב 5 אלגוריתמים POW. Digitalcoin ו Digitbyte ביצעו hard-fork כדי להשתמש ב 3 ו 5 אלגוריתמי POW בהתאם. מטבע אחר שמשתמש באלגוריתם בדיקת עבודה בעזרת חמישה אלגוריתמים והמכיל בתוכו mining-Unitus אחיד. Auroracoin ו Verge גם כן הודיעו על רצון להשתמש ברב-אלגוריתמיות.  ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "באוגוסט 2015 ברשת Myriad עשו hard-fork כדי להפעיל כרייה אחידה באלגוריתמים – Scrypt ו SHA256d על מנת להגיע ל hash rate יציב של הרשת באלגוריתמים האלה. באתו הזמן, זמן ממוקד של בלוק לכל אלגוריתם שימו לעד ל 5 דקות (לפני כן היו 2,5 דקות), כדי לקבל זמן זהה של בלוק לכל אלגוריתמים – דקה אחת (לפני כן הוא היה 30 שניות). השינוי הזה ימשוך את עקומת האמיסיה למעלה בעזרת חזקה של 2 וישווה בערך ל 20 שנים.   ";
			// wallets
			case clean("Latest version is 0.11.3.1, released April 7th 2016. See "):
                                return "גרסה אחרונה 0.11.3.1 הונפקה ב 7-י יולי 2016. תראה";
			case clean(" announcement & upgrade notes."):
				return "הצגה מקדמת ו רשימת חידושים";
			case clean("Desktop"):
				return "PC";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-התקנה קצת (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-התקנה קצת (11.5 MB)";
			case clean("Mobile"):
				return "סלולרי";
			case clean("Android"):
				return "Android";
			case clean("Source"):
				return "מקור";
			case clean("Source Code (0.11.3.1)"):
                                return "מקור (0.11.3.1)";
			case clean("Other"):
				return "אחר";
			case clean("Linux"):
				return " Linux ";
			case clean("Windows"):
				return "Windows";
			case clean("JSWallet"):
				return "JS Wallet";
			case clean("Brain Wallet"):
				return " ארנק זיכרון ";
			case clean("Paper Wallet"):
				return " ארנק נייר ";
			// mining
			case clean("Getting Started"):
				return " הקדמה ";
			case clean("Download a "):
				return " להורדה ";
			case clean("wallet"):
				return " ארנק ";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return ", תוריד כורה מסוג הנדרש, תמצא קבוצה וקדימה...";
			case clean("Mining Tutorial Video"):
				return " הכשרת וידאו על כרייה ";
			case clean("Watch on "):
				return " תסתכל ";
			case clean("Mining Software"):
				return " תוכנה עבור כרייה ";
			case clean("Use any SHA256d compatible ASIC"):
				return "תשתמש ב SHA256d כלשהו – המתאים עם ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return " ב Scrypt כלשהו – המתאים עם ASIC ";
			case clean("sgminer for OpenCL GPU mining"):
				return " sgminer לכריית GPU OpenCL ";
			case clean("ccminer for CUDA GPU mining"):
				return " ccminer לכריית GPU CUDA ";
			case clean("cpuminer-multi for CPU mining"):
				return " cpuminer-רב עבור כריית CPU ";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer לכריית GPU OpenCL ";
			case clean("BitcoinTalk Thread"):
				return "פְּתִיל BitcoinTalk";
			case clean("Run your own node:"):
				return "להפעלת צומת משלך";
			case clean("Other pools"):
				return " ברכות אחרות ";
			case clean("Merge Mining Pools"):
				return "כרייה משולבת ברכות ";
			case clean("zpool - The miners multipool"):
				return "zpool – רב-ברכה ";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return " מידע ומשאבים ";
			case clean("מגלה ארצות (1)"):
				return "Insight Esplorilo (1)";
			case clean("Insight Explorer (2)"):
				return " מגלה ארצות (2)";
			case clean("Abe Explorer"):
				return "Abe מגלה ארצות ";
			case clean("Network Status "):
				return " מצב רשת ";
			case clean("Exchanges"):
				return " חילופי ";
			case clean("Shop"):
				return " לִקְנוֹת ";
			case clean("List of Coinpayments stores"):
				return " רשימה של חנויות תשלומי מטבע ";
			case clean("Other"):
				return " אַחֵר ";
			case clean("Faucet"):
				return " Faucet ";
			case clean("Testnet Information"):
				return "Testnet מֵידָע";
			case clean("cryptap.us Myriad page"):
				return "Myriad-עמוד cryptap.us";
			case clean("Reddit/IRC myrbot information"):
				return " מֵידָע myrbot Reddit/IRC";
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
				return "Myriad – multi-algoritmisch is de eerste munt die heeft tegelijkertijd geïmplementeerd 5 hashfuncties die voor de mining gebruikt worden.  In tegenstelling tot de Bitcoin die profitabel gemind worden konnen met gebruik van Aashiqui  en het SHA256d-algoritme, is  Myriad toegankelijk voor Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Ongevaarlijk";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Мiner kan elk van 5 toegankelijke algoritmen kiezen – SHA256d, Scrypt, Myr-Groestl, Skein of Yescrypt – elk van hen heeft de gefixeerd doeltijd van een blok – 5 minuten. In 't geheel wordt het blok ongeveer iedere minuut gevonden. Afhankelijk van de hash rate van elk algoritme wordt ook zijn ingewikkeldheid gereguleerd.
				Terwijl Aashiqui de mining beinvloedt door videokaarten met het SHA256d-algoritme en Scrypt onproduktief is, domineren andere algoritmen de miningssfeer met videokaarten. De meerdere-algoritmenmethode schept een nieuwe exclusieve en innovatieve aanpak voor de beschermingsmethodiek met behulp van 51% want een overgroot scala aan apparatuur zal nodig zijn om 51% van de blokken te krijgen";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "De gecombineerde mining met verschillendе algoritmen die SHA256d & Scrypt begrijpen, heeft Myriad gelaten een voordeel krijgen door middel van overgrote beschikbare rekenkapaciteiten";
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
				return "Een slechts voor Myriad specifieke variant van het hash-algoritme – Groestl – is een van vijf finalisten van de NIST SHA-3-hash-algoritmenwedstrijd.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Een anderе finalist van de hash-algoritmenwedstrijd NIST SHA-3 die voor het eerst door Skeincoin gebruikt werd.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Het slechts voor CPU oorspronkelijk ontworpen Qubit-algoritme combineert 5 deelnemers van de NIST SHA-3-hash-algoritmenwedstrijd – Luffa, Cubehash, SHAvite, SIMD en ECHO.";
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
 				return "In augustus 2015 werd het Myriad netwerk gehardforkt om een verenigde mining op algoritmen - Scrypt en SHA256d te activeren, het doel zijnd een stabiele hash rate op deze algoritmen te bereiken. Toen werd de doeltijd van een blok voor elk algoritme tot 5 minuten (ertoe zijnd 2,5 minuten) veranderd om de  totale tijd van een blok voor alle algoritmen – 1 minuut (ertoe zijnd 30 seconden) te krijgen. De verandering zal de emissiecurve met behulp van de 2x graad optrekken en met omtrent 20  jaren gelijkmaken.";
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
			case clean("Merge Mining Hồ "):
				return "gecombineerde mining";
			case clean("zpool - The miners multipool"):
				return "zpool – The miners multipool";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "informatie en bronnen";
			case clean("Visão Explorador (1)"):
				return "Blok Explorer (1)";
			case clean("Visão Explorador (2)"):
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

	else
	{
		return $text;
	}
}



?>
