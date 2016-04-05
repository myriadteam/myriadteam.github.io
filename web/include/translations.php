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

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "5 algoritmos independientes, SHA256d, Scrypt, Myr-Groestl, Skein &amp; Qubit - cada una soporta el 20% de la red,
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
				return "Para los primeros 1401000, el tiempo de objetivo por bloque fue de 30 segundos, o 150 segundos por algoritmo. Esto ahora fue cambiado a 60 segundos por bloque, o 300 segundos por algoritmo.";

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
			y permite a los usuarios tener mineria fusionada con estos.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "En Agosto de 2015 Myriad ha tenido una gran actualizacion que permite la mineria fusionada con los algoritmos SHA256d y Scrypt en un esfuerzo por aumentar la seguridad y tener velocidad de hashrate estable en esos dos algoritmos.
			En este momento el tiempo de bloque de destino para cada algoritmo también se cambió a cinco minutos (anteriormente 2.5 minutos), para lograr un tiempo general de selección de bloques de 1 min (anteriormente 30 seconds);
			este cambio estirara la curva de emision de monedas en un factor de 2x, a aproximadamente 20 años.";


			// wallets
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "La ultima version es la 0.9.2.17, lanzada el 7 de Noviembre de 2015. Vea ";

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

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Oni povas elekti el la 5 algoritmoj por mini — SHA256d, Scrypt, Myr-Groestl, Skein aŭ Qubit —
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
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "La plej lasta versio estas 0.9.2.17, eldonita je la 7a Novembro 2015. Vidu ";

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

			case clean("Source Code (0.9.2.17)"):
				return "Fontkodo (0.9.2.17)";

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

	else if ($lang == 'de')
	{
		switch ($text)
		{
			// homepage
			case clean("Open To Anyone"):
				return "Offen für alle";

			case clean("Secure"):
				return "Sichern";

			case clean("Fair Distribution"):
				return "Gerechte Verteilung";

			// technology

			// wallets

			// mining

			// services


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

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "矿机可选择5种算法中任何一种进行挖矿 — SHA256d, Scrypt, Myr-Groestl, Skein 或 Qubit — 每一种均以5分钟的区块为目标，因此在5种算法的角度上计算，只需一分钟便可产出一个新区块，每种算法的难度受其算力影响。当市场推出ASIC后，在GPU上挖SHA256d和Scrypt已经没有什么效率了，而剩下的算法仍是GPU挖矿占主导地位。复合算法提供了额外的反51%攻击机制，因为需要一套不同的设备区寻找51%的区块。";

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
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "最新版本0.9.2.17, 于2015年11月7号发布, 请查看版本更新备忘录。";

			case clean(" announcement &amp; upgrade notes."):
				return "";

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
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
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
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "H Τελευταία έκδοση είναι η 0.9.2.17, που κυκλοφόρησε στις 7 Νοέμβρη 2015. Δείτε ";
			case clean(" announcement &amp; upgrade notes."):
				return " την ανακοίνωση για την αναβάθμιση στις σημειώσεις.";
			// mining
			case clean("Getting Started"):
				return "Ξεκινώντας";
			case clean("Download a "):
				return "Κατεβάστε το";
			case clean("wallet"):
				return "πορτοφόλι";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "και το πρόγραμμα εξώρυξης, βρείτε μια πισίνα εξόρυξης και ξεκινήστε.";
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
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Майнер может выбрать любой из 5 доступных алгоритмов – SHA256d, Scrypt, Myr-Groestl, Skein, или Qubit – каждый из них имеет фиксированное целевое время блока – 5 минут. В целом, блок находится приблизительно каждую минуту. В зависимости от хеш рейта каждого алгоритма регулируется и его сложность.
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
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "Последняя версия 0.9.2.17, выпущена 7ого Ноября 2015. Смотрите";
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
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Ang nagmimina ay maaring gumamit ng alinman sa 5 algorithm – SHA256d, Scrypt, Myr-Groestl, Skein, o Qubit – bawat isa ay may target na 5 minutong bloke. 
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
			case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
				return "Pinakabagong Bersyon ay 0.9.2.17, inilimbag noong ika-7 ng Nobyembre 7 2015. Tingnan";
			case clean(" announcement &amp; upgrade notes."):
				return "Paunawa at tala ng upgrade";
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
		}
	}
	
	else
	{
		return $text;
	}
}



?>
