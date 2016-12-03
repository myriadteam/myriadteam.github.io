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
				return "Malferma al ciuj";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (miriad) estas mult-algoritma - la unua cifrovaluto kiu uzas 5 samtempajn haketfunkciojn. Malkiel Bitmono, kiun oni povas profitdone mini nur per
				ASICoj por SHA256d, Myriad estas malferma al ASICoj por SHA256d k Scrypt, ankau al grafiksprocesoroj k centraj procesoroj.";

			case clean("Secure"):
				return "Sekura";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Oni povas elekti el la 5 algoritmoj por mini — SHA256d, Scrypt, Myr-Groestl, Skein au Yescrypt —
				ciu havas celtempon de 5 minutoj por unu bloko. Entute, unu bloko trovigas proksimume ciun minuton. La malfacileco de ciu algoritmo dependas nur de ties propra haketrapideco.
				";

                        case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
                                return "Kunligita minado estis saltita je SHA256d &amp; Scrypt. Nun Myriad povas gajni de la grandega haketpotenco disponebla.";

			case clean("Fair Distribution"):
				return "Egaleca disdonado";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Ekzistas nek moneroj minitaj antau ol la lanco, nek kasitaj sumoj kiujn posedas komplotuloj. Ciuj havas egalan eblecon akiri Miriadojn je la kurzo de la publika merkato ";

			// technology

			case clean("Multi-Algorithm"):
				return "Multaj algoritmoj";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algoritmoj, kiuj ebligas efikan minadon per ASICoj, grafiksprocesoroj, k centraj procesoroj:";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Du rondoj de la SHA256d haketa algoritmo, unue uzata en la pionira cifrovaluto, Bitmono.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Dizajnita esti pasvorta haketa algoritmo nur por centraj procesoroj, nun oni minas gin per ASICoj por multaj cifrovalutoj. Litecoin estis la unua.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Speciale kreita por Myriad estas variajo de la haketa algoritmo Grøstl, unu el la 5 finalistoj en la haketa konkurso NIST SHA-3.";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "Alia finalisto de la haketa konkurso NIST SHA-3, unue uzata de Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Originale algoritmo nur por CPU, Qubit estas kombinajo de 5 konkursantoj de la haketa konkurso NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD k ECHO.";

			case clean("Merge Mining"):
				return "Kunligita Minado";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Ekde la 4002000a bloko, kunligita minado estis ebligita je la algoritmoj SHA256d k Scrypt. Nun Myriad povas utiligi la enorman haketpotencon trovebla
			ce valutoj kiuj uzas tiujn algoritmojn. Tio sekurigas la blokcenon de Myriad ec plu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Kunligita Minado, alinome AuxPow, permesas al oni fari laboron por trovi blokojn de gepatra valuto (ekz, Bitmono au Litecoin), kaj dume, reuzi tiun laboron por trovi Miriadajn blokojn, senkoste.
			Tio neniel havas malbonan efikon por la gepatra valuto.";

			case clean("Distribution"):
				return "Disdonado";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad naskigis en publika vido la 23an de Februaro, 18:30 UTC. La ";

			case clean("first mined block"):
				return "unua minita bloko";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " trovigis 4 minutoj post la lanco, kiu pruvas ke oni ne minis antau ol la lanco.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La premio por trovi blokojn estis dekomence 1,000MYR, kaj planita estis duonigo post ciuj 967,680 blokoj (proksimume 48 semajnoj). Enfine estos proksimume 2 bilionoj da MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time,
				Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead
				to greater consistency on the network, without affecting fairness of distribution."):
				return "Dekomence, la celtempo estis 30 sekundoj po bloko, 150 sekundoj po algoritmo. Je la 12a de Julio 2015, la komunumo decidis pliigi la celtempon al 60 sekundoj, do 300 sekundoj po algoritmo. Tio efektivigis je bloko 1,401,001. Tiutempe,
				Myriad suferis de malgranda haketpotenco. Ofte ministoj emis atendi gis la malfacileco malpliigis, tuj mini multajn blokojn, kaj poste salti al alia valuto gis la malfacileco remallevigis. Kiam Myriad ebligis kunligitan minadon je Scrypt k SHA256d, kaj ankau pliigis la celtempon de la blokoj,
				la rezulto estis pli fidebla valuto. Tio okazis sen forpreni de la disdonada egaleco.";

			case clean("Myriad's History"):
				return "Historio de Myriad";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "8bitcoder forkis Miriadon de Zetacoin, kaj lancis gin en Februaro 2014. Gi estas la unua cifrovaluto kiu uzas kvin laborpruvajn algoritmojn.
			kiel strategion por pliigi la sekurecon k largigi la ministaron — SHA256d k Scrypt por ministoj kun ASICoj,
			Skein k Myr-Groestl por ministoj kun grafiksprocesoroj, kaj Qubit por ministoj kun au grafiksprocesoroj au centraj procesoroj. Huntercoin, lancita malfrue en 2013, estis fakte
			la unua valuto kiu uzas multajn laborpruvajn algoritmojn (SHA256d k Scrypt), tamen gia fokuso ne estis pri minado, sed pri blokcen-bazita ludo kiu produktas la vastan plejmulton de la moneroj.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Multaj valutoj jam imitas Miriadon. Unue estis Saffroncoin, kiu ankau uzas 5 laborpruvajn algoritmojn.
			Aliaj valutoj forkigas imite. Digitalcoin nun havas 3 laborpruvajn algoritmojn, kaj Digibyte havas 5. Unitus estas alia valuto kun 5 laborpruvaj algoritmoj, kaj kelkaj el ili samas kiel en Myriad.
			Unitus ankau ebligas kunligitan minadon je ciuj siaj 5 algoritmoj. Auroracoin k Verge ankau anoncis siajn planojn forki sin al multaj algoritmoj.";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Auguston 2015, Myriad malmole forkigis por ebligi kunligitan minadon je SHA256d k Scrypt. La celo estis plibonigi la sekurecon kaj atingi pli stabilan haketpotencon je tiuj du algoritmoj.
			Tiutempe, la celtempo de la blokoj por ciu algoritmo estis sangita de 2.5 minutoj al 5 minutoj. Entute, unu bloko nun trovigas proksimume ciun minuton anstatau ciujn 30 sekundojn.
			Tiu sango signifas ke novaj moneroj dauros minigi dum pluaj 20 jaroj, ne 10 jaroj, kiel intencita dekomence.";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "La plej lasta versio estas 0.11.3.1, eldonita je la 7a Aprilo 2016. Vidu ";

			case clean(" announcement &amp; upgrade notes."):
				return "anoncon k sciigojn pri la gisdatigo.";

			case clean("Desktop"):
				return "Surtabla komputilo";

			case clean(" Windows"):
				return "Vindozo";

			case clean("32-bit Installer (11.5 MB)"):
				return "32-bita Instalilo (11.5 MB)";

			case clean("64-bit Installer (11.5 MB)"):
				return "64-bita Instalilo (11.5 MB)";

			case clean("Mobile"):
				return "Postelefono";

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
				return "Elsuti ";
			case clean("wallet"):
				return "monujon";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", elsuti minilon gustaspecan, trovi mingrupon, kaj ek!...";
			case clean("Mining Tutorial Video"):
				return "Filma Leciono pri Minado";
			case clean("Watch on "):
				return "Spektu ce ";
			case clean("Mining Software"):
				return "Mina Softvaro";
			case clean("Use any SHA256d compatible ASIC"):
				return "Uzu ian ajn ASIC tauga por SHA256d";
			case clean("Use any Scrypt compatible ASIC"):
				return "Uzu ian ajn ASIC tauga por Scrypt";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer por grafiksprocesora minado en OpenCL";
			case clean("ccminer for CUDA GPU mining"):
				return "ccminer por CUDA-grafiksprocesora minado";
			case clean("cpuminer-multi for CPU mining"):
				return "cpuminer-multi por minado per centra procesoro";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer por OpenCL-grafiksprocesora minado";
			case clean("BitcoinTalk Thread"):
				return "Fadeno ce BitcoinTalk (angle)";
			case clean("Windows Binaries"):
				return "Duumaj dosieroj por Vindozo";
			case clean("GitHub Source"):
				return "Kodfonto ce Github";
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
				return "zpool - Mingrupo de multaj cifrovalutoj";
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
				return "Monsangejoj";
				
			case clean("Shop"):
				return "Butikoj";
				
			case clean("List of Coinpayments stores"):
				return "Listo de butikoj ce Coinpayments";

			case clean("Other"):
				return "Aliaj";

			case clean("Faucet"):
				return "Krano";

			case clean("Testnet Information"):
				return "Informo pri testnet";

			case clean("cryptap.us Myriad page"):
				return "Myriad-pago cryptap.us";

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
				return "???";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad????????? - ????????5?????????????????SHA256d?ASIC???????,Myriad??SHA256d ASICS, Scrypt ASICS???, ????GPU?CPU???";

			case clean("Secure"):
				return "???";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "?????5???????????? — SHA256d, Scrypt, Myr-Groestl, Skein ? Yescrypt — ?????5????????,???5?????????,??????????????,???????????????????ASIC?,?GPU??SHA256d?Scrypt?????????,????????GPU???????????????????51%????,??????????????51%????";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "";

			case clean("Fair Distribution"):
				return "???";

			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "??????????????,?????????????????????Myriad?";

			// technology

			case clean("Multi-Algorithm"):
				return "????";

			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5???,???ASIC, GPU?CPU??????";

			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "???SHA256????, ????????????????????";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "??????CPU?????, ?????????, ??????????ASIC???";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "????Groestl??, ?Myriad???????, ?5???NIST SHA-3??????????";

			case clean("Another  of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "?????NIST SHA-3???????, ????Skeincoin?";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "Qubit???????CPU?????, ???5?NIST SHA-3??????? - Luffa, Cubehash, SHAvite, SIMD ? ECHO?";

			case clean("Merge Mining"):
				return "????";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "??400200?, ??SHA256D?Scrypt????????, ?????Myriad?????????????????, ?????Myriad????????";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "???????AuxPow, ????????(?????????)??????Myriad???????, ???????????????????????";

			case clean("Distribution"):
				return "??";

			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad?2014?2?23??18:30(UTC)????, ??????4?????, ?????”???”????";

			case clean("first mined block"):
				return "";

			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "????????1000 MYR, ?967,680?????(???48???), ??????20?MYR?";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "????????30?, ???????????150??2015?7?12?, ?????????????60?, ??????300?, ???1,401,001?????????, Myriad?????????SHA256d?Scrypt?????????, ??????????50????????SHA256d?Scrypt??aux-PoW???, ??????????????????, ?????????????";

			case clean("Myriad's History"):
				return "Myriad???";

			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad?8bitcoder???Zetacoin??, ?2014?2?????, ??????5?PoW???????, ??????????????, ????????????, ?????????? -   ASIC???SHA256?Scrypt, GPU???Skein?Myr-Groestl, ???CPU?GPU???Qubit?2013??????Huntercoin, ??????????PoW??(SHA256?Scrypt)???, ??????????, ??????????????????";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad??????, ????Saffroncoin, ????5?PoW??; Digitalcoin?Digibyte???????????3??5?PoW??; Unitus?????5??PoW??, ?Myriad????PoW??, ??????5?????????; Auroracoin?Verge??????????????????";

			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "2015?8?, Myriad???????????SHA256?Scrypt???????, ??????, ?????????????????, ??????????????5??(???2.5??), ?????????????1??(??30?); ???????????????????2, ?????20??";


			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "????0.11.3.1, ?2016?4?7???, ???";

			case clean(" announcement &amp; upgrade notes."):
				return "????????";

			// mining

			case clean("Getting Started"):
				return "??";
			case clean("Download a "):
				return "";
			case clean("wallet"):
				return "";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "????????????, ?????????...";
			case clean("Mining Tutorial Video"):
				return "??????";
			case clean("Watch on "):
				return "";
			case clean ("Youtube"):
				return "??Youtube???.";
			case clean("Mining Software"):
				return "????";
			case clean("Use any SHA256d compatible ASIC"):
				return "??????SHA256d?ASIC??";
			case clean("Use any Scrypt compatible ASIC"):
				return "??????Scrypt?ASIC??";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer,??OpenCL?GPU??";
			case clean("BitcoinTalk Thread"):
				return "BitcoinTalk???";
			case clean("Windows Binaries"):
				return "Windows????";
			case clean("GitHub Source"):
				return "GitHub???";
			case clean("Suggested Command Line"):
				return "???????";
			case clean("Pools"):
				return "??";
			case clean("P2Pool nodes"):
				return "????";
			case clean("Run Your Own Node"):
				return "????????";
			case clean("Merge Mining Pools"):
				return "??????";
			case clean("zpool - The miners multipool"):
				return "zpool - ??????";
			case clean("MultiPool"):
				return "MultiPool";


			// services
			case clean("Information &amp; Resources"):
				return "??&??";

			case clean("Exchanges"):
				return "???";

			case clean("Other"):
				return "??";

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
				return "?????t? se ?????";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "?? Myriad e??a? p???-a??????µ??? - ?a? t? p??t? ??µ?sµa p?? ??e? efa?µ?se? 5 ta?t???????? a??????µ??? e???????. Se a?t??es? µe t? Bitcoin, t? ?p??? µp??e? µ??? ?a e??????e? ?e?d?f??a µe t?? ???s? SHA256d e??p??sµ?? ASIC, t? Myriad e??a? a????t? se SHA256d ASICS, Scrypt ASICS, ???te? G?af???? ?a? ?pe?e??ast??.";
			case clean("Secure"):
				return "?sfa???";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "??a? a???a??????? µp??e? ?a ep????e? ?a? ?a ???s?µ?p???se? ?p???d?p?te ap? t??? 5 a??????µ??? - ??? SHA256d, t?? Scrypt, t?? Myr-Groestl, t?? Skein ? t?? qubit - 
				? ?a???a? ap? t??? ?p????? ??e? sa? st??? ? ?????? a??µesa sta µp??? ?a e??a? 5 ?ept?. S???????, ??a µp??? e????sseta? pe??p?? ???e 1 ?ept?. ??? ? d?s????a t?? ???e a??????µ?? ep??e??eta? µ??? ap? t? d??? t?? ???µ? e???????. 
				??? ta ASIC ????? ?atast?se? t?? e?????? µe ???te? G?af???? ??a t? SHA256d & t? Scrypt a?t?pa?a??????, ?? ?p????p?? a??????µ?? s??e?????? ?a ????a?????ta? ap? t?? e?????? µ?s? ?a?t?? G?af????.
				? p???-a??????µ??? p??s????s? p??sf??e? e?a??et??? a?t??? e???t?a se µ?a ep??es? 51% epe?d? µ?a se??? ap? d?af??et??? ????? e??a? apa?a?t?t? ??a ?a ß?e? t? 51% t?? µp???.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "? s?????e?s? t?? e??????? ??e? e?e???p????e? ??a t? SHA256d & Scrypt, ep?t??p??ta? st? Myriad ?a ep?fe???e? ap? t?? te??st?a d??aµ? e??????? p?? e??a? d?a??s?µ?.";
			case clean("Fair Distribution"):
				return "???a?? ?ata??µ?";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "?e? ?p???e p??e?????? ? ???f?? pe????s?e? p?? ?at????ta? ap? µ??µ????? st?? a???. ? ?a???a? ??e? µ?a ?s? e??a???a ?a ap??t?se? Myriad µe t?? t?µ? t?? a?????.";
			// technology
			case clean("Multi-Algorithm"):
				return "????ap???-???????µ??";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ???????µ??, p?? ?a??st??? d??at? t?? e?????? ??a ASIC, ???te? G?af???? ?a? ?pe?e??ast??:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "??? ????? t?? a??????µ?? SHA256d, ???s?µ?p??????a? ??a p??t? f??? ap? t? p??t?p??? ???pt???µ?sµa Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "S?ed?asµ??? ??a ?a e??a? ??a? a??????µ?? e??????? µe ?pe?e??ast??, t??a e????sseta? µe ASICs se p???? ???pt???µ?sµata, ?e?????ta? µe t? Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "???a e?d??? pa?a??a?? t?? a??????µ?? ?ata?e?µat?sµ?? Groestl ??a t? Myriad, e??a? ??a? ap? t??? p??te f??a??st a??????µ??? st? d?a????sµ? hash NIST SHA-3.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "??a ???? ap? t?? p??te f??a??st st? d?a????sµ? hash NIST SHA-3, ???s?µ?p??????e ??a p??t? f??? ap? t? Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "?????? ??a? a??????µ?? ??a ?pe?e??ast??, t? qubit s??d???e? 5 a?ta????st?? st? d?a????sµ? hash NIST SHA-3 - t?? Luffa, t?? Cubehash, t?? SHAvite, t?? SIMD ?a? t?? ECHO.";
			case clean("Merge Mining"):
				return "S?????e?s? ????????";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "?p? t? µp??? 4002000, ????e ? s?????e?s? t?? ????e??? p?? ep?t?ape? st??? a??????µ??? SHA256d ?a? Scrypt ?a e????ss??ta? µa??. ??t? ep?t?e?e st? Myriad ?a ep?fe???e? ap? t?? te??st?e? ta??t?te? e??????? p?? e??a? se ???s? ap? ??µ?sµata ???s?µ?p????ta? a?t??? t??? a??????µ??? ??a t?? pe?a?t??? d?asf???s? t?? a??s?da? s??a??a??? t?? Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "? S?????e?s? ????????, ? AuxPow sta a??????, ep?t??pe? t?? e??as?a p?? ???eta? ??a ??a ?????? ??µ?sµa (?p?? t? Bitcoin ? t? Litecoin) ?a ???s?µ?p????e? ??a ?a ß?e?te ?????a µp??? ??a t?? a??s?da s??a??a??? t?? Myriad, ????? ?a???a ep?p???? f??t? ? ep?d?as? st?? ap?d?s? t?? µ?t????? ??µ?sµat??.";
			case clean("Distribution"):
				return "??a??µ?";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "?? Myriad ?????f???se st?? 23 Feß???a???? t?? 2014 st?? 18:30 UTC. ?? p??t? µp??? e????sseta? t?sse?a ?ept? a???te?a, p?st?p????ta? ?ts? ?t? de? ?p???e p??e??????.";
			case clean("first mined block"):
				return "?? p??t? µp??? e????????e";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "t?sse?a ?ept? a???te?a, p?st?p????ta? ?ts? ?t? de? ?p???e p??e??????.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "? a????? aµ??ß? ?ta? 1.000 MYR, p?? µe?????e ?at? t? ?µ?s? µet? ap? 967.680 µp??? (pe??p?? 48 eßd?µ?de? a???te?a). ? S??????? p??sf??? e??a? pe??p?? 2 d?se?at?µµ???a MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "??????, ? st???? µp??? ?ta? 30 de?te???epta, ? 150 de?te???epta a?? a??????µ?. ?p? t?? 12 ??????? t?? 2015, ? ?????t?ta ap?f?s?se ?a a???se? t? ????? µp??? st??? sta 60 de?te???epta, ? 300 de?te???epta a?? a??????µ?, ? ?p??a ?e????se st? µp??? 1.401.001. 
				??e??? t?? ep???, t? Myriad ?pas?e ap? ?aµ??? d??aµ? e??????? ?a? e?tetaµ??? µet?ßas? t?? a???a??????? t?? Scrypt ?a? t?? SHA256d, p???a???ta? t?? p?a?µat??? µ?s? ????? µp??? ?a e??a? p??? ap? 50 de?te???epta. 
				??t?? ap? t? d??at?t?ta aux-POW ??a t? Scrypt ?a? t? SHA256d, ? a???s? t?? ?????? t?? µp??? e??e st??? ?a ?d???se? se µe?a??te?? s????? t? d??t??, ????? ?a ep??e??eta? ? aµe??????a t?? d?a??µ??.";
			case clean("Myriad's History"):
				return "?st???a t?? Myriad";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "?? Myriad ?e????se t? Feß??????? t?? 2014 ap? t?? 8bitcoder ?a? ßas?st??e st? Zetacoin. ?ta?  t? p??t? ???pt???µ?sµa p?? ???s?µ?p???se p??te a??????µ??? ap?de???? e??as?a? se µ?a p??sp??e?a ?a a???se? t?? asf??e?a, 
				?a??? ?a? t? d?e????s? t?? ß?s?? t?? a????p?? p?? ?a µp????sa? ?a e???????? t? ??µ?sµa - µe t??? a??????µ??? SHA256d ?a? Scrypt ??a ASIC a???a????????, 
				Skein ?a? Myr-Groestl ??a t??? a???a???????? µe ???te? G?af????, ?a? Qubit ??a a?t??? µe ???te? G?af???? ?a? ?pe?e??ast??. ?? Huntercoin, p?? ?e????se sta t??? t?? 2013, ?ta? st?? p?a?µat???t?ta 
				t? p??t? ???µa p?? ???s?µ?p???se p???ap???? a??????µ??? ?p?de???? ???as?a? (SHA256d ?a? Scrypt), a??? t? ep??e?t?? t?? de? ?ta? st?? e??????, a??? se ??a pa????d? ßas?sµ??? st?? a??s?da s??a??a??? p?? pa???a?e t?? µe???? p?e????f?a t?? ???? ??µ?sµ?t??.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "?? Myriad ??e? ?e???se? a??et? ??µ?sµata p?? t? a?t???a?a?, ? p??t? e? t?? ?p???? ?ta? t? Saffroncoin, t? ?p??? a???p????se ep?s?? p??te a??????µ??? Pow. 
				Digitalcoin ?a? Digibyte t?s? s????? d??a??t? ?a ???s?µ?p????? t?e?? ?a? p??te a??????µ??? ?p?de???? ???as?a? a?t?st???a. ?? Unitus e??a? ???? ??a ??µ?sµa p?? µ?????eta? p?????? a??????µ??? ?p?de???? ???as?a? µe t? Myriad, 
				?a? ep?t??pe? st??? ???ste? ?a s?????e?s??? t?? e?????? a??µesa st??? p??te a??????µ??? ?p?de???? ???as?a? p?? d?a??te?. ?? Auroracoin ?a? t? Verge ????? ep?s?? a?a?????se? s??d?a ??a p???ap???? a??????µ???.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "??? ?????st? t?? 2015 t? Myriad ???a?e ?ste ?a ep?t???e? t? s?????e?s? e??????? ??a SHA256d ?a? Scrypt a??????µ??? se µ?a p??sp??e?a ?a ße?t???e? ? asf??e?a ?a? ?a ep?te???e? µ?a p?? sta?e?? e?????? ep? t?? d?? a?t?? a??????µ??. ?p? a?t? t? st??µ? ?a? µet? ? ?????? µp??? ??a ???e a??????µ? ???a?e ep?s?? se p??te ?ept? (p??????µ???? 2,5 ?ept?), ??a ?a ep?te???e? ? s???????? ?????? µp??? t?? 1?? ?ept?? (p??????µ???? 30 de?te???epta). ? a??a?? a?t? ?a epe?te??e? t?? ?aµp??? e?p?µp?? µe ??a? pa?????ta 2x, se pe??p?? 20 ?????a.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "H ?e?e?ta?a ??d?s? e??a? ? 0.11.3.1, p?? ?????f???se st?? 7 ?p?????? 2016. ?e?te ";
			case clean(" announcement &amp; upgrade notes."):
				return " t?? a?a?????s? ??a t?? a?aß??µ?s? st?? s?µe??se??.";
			// mining
			case clean("Getting Started"):
				return "?e?????ta?";
			case clean("Download a "):
				return "?ateß?ste t? ";
			case clean("wallet"):
				return "p??t?f???";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return " ?a? t? p????aµµa e???????, ß?e?te µ?a p?s??a e??????? ?a? ?e????ste.";
			case clean("Mining Tutorial Video"):
				return "???te? ?d???? ??a t?? ???????.";
			case clean("Watch on "):
				return "?e?te t? st?";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "????sµ??? ????????";
			case clean("Use any SHA256d compatible ASIC"):
				return "???s?µ?p???ste ?p???d?p?te SHA256d s?µßat? ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "???s?µ?p???ste ?p???d?p?te Scrypt s?µßat? ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return " ? sgminer ??a OpenCL e?????? µe t?? ???s? ???ta? G?af????";
			case clean("BitcoinTalk Thread"):
				return "??µa st? BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows ???e?a";
			case clean("GitHub Source"):
				return "GitHub ???a??? ??d??a?";
			case clean("Suggested Command Line"):
				return "???te???µe?? ??t???";
			case clean("Pools"):
				return "??s??e? ????????";
			case clean("P2Pool nodes"):
				return "??µß?? t?? P2Pool";
			case clean("Run Your Own Node"):
				return "????te t?? d??? sa? ??µß?";
			case clean("Merge Mining Pools"):
				return "??s??e? S?????e?s?? t?? ????????";
			case clean("zpool - The miners multipool"):
				return "zpool - ? p???p?s??a t?? a???a???????";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "?????f???e? & ?????";
			case clean("Exchanges"):
				return "??ta??a?t???a";
			case clean("Other"):
				return "???a";
			case clean("Faucet"):
				return "???s? ??µ?sµ?t??";
			case clean("Testnet Information"):
				return "?????f???e? ????µast???? ???t???";
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
				return "??????? ???????";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad – ??????-???????????? - ??? ?????? ??????, ??????????? ? ????? ???????????? 5 ??? ???????, ???????????? ??? ????????. ? ??????? ?? ????????, ??????? ????? ????????? ??????? ????????? ????? ? ???????? SHA256d, Myriad ???????? ??? Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "?????????";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — 
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "?????? ????? ??????? ????? ?? 5 ????????? ?????????? – SHA256d, Scrypt, Myr-Groestl, Skein, ??? Yescrypt – ?????? ?? ??? ????? ????????????? ??????? ????? ????? – 5 ?????. ? ?????, ???? ????????? ?????????????? ?????? ??????. ? ??????????? ?? ??? ????? ??????? ????????? ???????????? ? ??? ?????????.
			? ?? ????? ??? ????? ?????? ?? ??????? ???????????? ? ?????????? SHA256d ? Scrypt ?????????????, ????????? ????????? ?????????? ????? ???????? ????????????. ?????? ????????????? ?????????? ??????? ????? ???????????? ? ????????????? ?????? ? ???????? ?????? ? ??????? 51%, ?????? ??? ??? ??????????? 51% ?????? ??????????? ???????? ?????? ????????????.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "???????????? ??????? ?????????? ???????????, ??????????? ? ???? SHA256d & Scrypt, ???????? Myriad ???????? ???????????? ?? ???? ???????? ????????? ?????????????? ?????????.";
			case clean("Fair Distribution"):
				return "??????? ?????????????";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "??????????? ??????? ? ?????????? ????????? ????? ? ??????? ????????. ??? ???????????? ???? ????? ?????????? ??????????? ??? ????????? Myriad ?? ???????? ?????????";
			// technology
			case clean("Multi-Algorithm"):
				return "????????????? ?????????";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ?????????? ????????? ??? ASIC, GPU ? CPU ????????";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "??? ?????? ??? ????????? ??????????? SHA256d, ??????? ?????????????? ???????? ??????????? - u?o???q.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "?????????? ???????????????? ??? ???????? ??? CPU, ?????? ???????????? ??? ?????? ??????? ?????????????? ???????? ? ??????? ASICs, ??????? ? Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "??????????? ?????? ??? Myriad ??????? ???-????????? – Groestl – ??? ???? ?? ???? ?????????? NIST SHA-3 ???????????? ?????????? ???????????.";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "??? ???? ?? ???? ?????????? ???????????? ?? ????? NIST SHA-3, ??????? ??? ??????? ??????????? Skeincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "?????????? ???????????????? ?????? ??? CPU ???????? Qubit ??????????? 5 ?????????? NIST SHA-3 ???????????? ?? ???-?????????? – Luffa, Cubehash, SHAvite, SIMD ? ECHO.";
			case clean("Merge Mining"):
				return "???????????? ???????";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "??????? ? ????? 4002000, ???????????? ??????? ???????? ??? SHA256d ? Scrypt ??????????. ??? ????????? Myriad ???????? ???????????? ?? ???? ???????? ?????????, ???????????? ? ?????? ????? ??????? ????????, ? ????? ?????????? ???????????? ?????????.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "???????????? ???????, ??? ?? ????????? ??? AuxPow, ????????? ???????????? ???????, ?????????????, ? ???????, ?? ??????? u?o???q ??? Lightcoin ??? ????????????? ?????????? ?????? ? ???? Myriad ??? ???? ?? ???? ??????? ?????????????? ????????.";
			case clean("Distribution"):
				return "?????????????";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad ???? ???????? ? ???? 23 ??????? 2014 ???? ? 18:30 UTC";
			case clean("first mined block"):
				return "?????? ????????? ????";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " ???????? ?????? 4 ??????, ??? ????? ??????????? ??? ?? ???? ???????? ????????.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "??????????, ??????? ?????????? 1,000 MYR, ? ??????????????? ?????? 967,680 ??????(???????? 48 ??????). ???????????? ?????????? ????? – 2 ????????? MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "?????????????, ????? ????? ?????????? 30 ??????, ??? 150 ?????? ?? ????????. ?? 12 ???? 2015 ?????????? ?????? ????????? ????? ????? ?? 60 ??????, ??? 300 ?????? ?? ????????. ?????? ??????? ???????? ? ???? ? ????? ?1,401,001. ? ?? ?????, ????? ???? Myriad ????? ?????? ??? ???? ? ??????? ?????????, ??????? ????? ????? ?????????? ????? 50 ??????. ? ?????????? ???? ?????????? aux-Pow ??? Scrypt ? SHA256d, ??? ????????? ??????? ????? ????? ? ??????? ? ?????? ??????????????? ? ???? ????? ??????? ?? ????????? ????????????? ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad ???????? ? ??????? 2014 ????????? ? ????? 8bitcoder, ? ???????????? ????? ???? ZtaCoin. ??? ?????? ?????? ??????, ???????????? 5 POW ?????????? ??? ?????????? ????????????, ? ????? ??? ???????? ?????? ???????? ? ??????? ??????????? – SHA256d ? Scrypt ??? ASIC ????????, Skein ? Myr-Groestl ??? GPU ????????, Qubit ??? GPU ? ??? ????????. HunterCoin, ?????????? ? ????? 2013, ?? ????? ????, ?????? ???????????? ????????? ?????????? POW ??? ????????(SHA256d ? Scrypt), ?? ??? ???? ?????????????? ?? ??? ????????, ? ??? ??? ?? ?????? ?????????, ??????? ? ?????????? ???? ????? ?????? ???-??????.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ???????? ????????? ???????? ????, ?????? ?? ??????? ??? Saffroncoin ??? ?? ???????????? 5 PoW ??????????. Digitalcoin ? Digibyte ????????? hard-fork, ????? ???????????? 3 ? 5 PoW ??????????, ??????????????. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "? ??????? 2015 ???? Myriad ???? ????-????????, ??? ???? ????? ???????? ?????? ??????? ?? ?????????? – Scrypt ? SHA256d, ????? ???? ?????????? ??????????? ??? ????? ???? ?? ???? ??????????. ? ?? ????? ??????? ????? ????? ??? ??????? ????????? ???????? ?? 5 ?????(?? ????? 2,5 ??????), ????? ???????? ????? ????? ????? ??? ???? ?????????? – 1 ??????(?? ????? 30 ??????). ??? ????????? ??????? ?????? ??????? ?????? ? ??????? ??????? 2?, ? ???????? ?????????????? ? 20 ?????.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "????????? ?????? 0.11.3.1, ???????? 7??? ?????? 2016. ????????";
			case clean(" announcement & upgrade notes."):
				return "????? & ?????? ??????????";
			// mining
			case clean("Getting Started"):
				return "????????";
			case clean("Download a "):
				return "??????? ";
			case clean("wallet"):
				return "???????";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", ???????? ?????? ??????? ????, ??????? ??? ? ??????...";
			case clean("Mining Tutorial Video"):
				return "????? ???????? ?? ????????";
			case clean("Watch on "):
				return "?????????? ??";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "???? ??? ????????";
			case clean("Use any SHA256d compatible ASIC"):
				return "??????????? ????? SHA256d-??????????? ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "??????????? ????? Scrypt-??????????? ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer ??? ???????? ????? OpenCL ?? ??????????(GPU)";
			case clean("BitcoinTalk Thread"):
				return "???? ?? BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows ??????????? ?????";
			case clean("GitHub Source"):
				return "GitHub ???????? ?????";
			case clean("Suggested Command Line"):
				return "??????? ? ????????? ??????";
			case clean("Pools"):
				return "????";
			case clean("P2Pool nodes"):
				return "P2Pool ????";
			case clean("Run Your Own Node"):
				return "??? ??????? ???????????? ????";
			case clean("Merge Mining Pools"):
				return "???? ????????????? ????????";
			case clean("zpool - The miners multipool"):
				return "zpool – ??????-???";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "?????????? ? ???????";
			case clean("Exchanges"):
				return "?????????";
			case clean("Other"):
				return "??????";
			case clean("Faucet"):
				return "????";
			case clean("Testnet Information"):
				return "Testnet ??????????";
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
				Habang hindi na naging mabunga ang pagmimina sa GPU sa SHA256d ?t Scrypt dahil sa mga ASICs, ang mga iba pang algorithm ay patuloy na dinodomina ng pagmimina sa GPU. 
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
				return "Noong una’y pang CPU algorithm lamang, pinagsama-sama ng Qubit ang 5 magkakalaban sa NIST SHA-3 hash competition – Luffa, Cubehash, SHAvite, SIMD ? ECHO.";
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
				return "Noong una, ang layon ng blocktime ay 30 segundo, o 150 segundo kada algorithm. Noong ika-12 ng ?uly?, 2015, nagpasya ang komunidad na taasan ang target blocktime sa 60 segundo, o 300 segundo kada algorithm, simula sa ika-1,401,001 na bloke. Noong panahong iyon, nahihirapan ang Myriad sa mababang has rate at malawak na hirap sa hopping sa Scrypt at SHA256d, dahilan upang ang aktwal na average block time ay humigit sa 50 segundo.
				Bukod sa pagpapagana ng aux-Pow sa Scrypt at SHA256d, ang pagtaas ng target block time ay nagbunga ng higit na consistency sa network, nang hindi naaapektuhan ang pagiging patas ng pamamahagi.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Ang Myriad ay inilunsad noong 2014 ni 8bitcoder, fork ito mula sa ZetaCoin. Ito ang unang cryptocurrency na gumamit ng 5 mga POW  algorithm sa kagustuhang pataasin ang seguridad at palawakin ang bilang ng mga taong maaring magmina nito - SHA256d at Scrypt para sa mga ASIC miners, Skein at Myr-Groestl para sa mga GPU miners, at Qubit para sa mga GPU at ??? miners. Ang HunterCoin, na inilunsad noong huling bahagi ng 2013, ay ang unang coin na gumamit ng maramihang mga POW algorithm(SHA256d at Scrypt), ngunit ito ay hindi nakatuon sa pagmimina, kundi sa isang blockchain-based na laro na lumikha ng malaking karamihan ng mga bagong coins.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Ang Myriad ang nagbigay-daan sa marami pang mga katulad nito,  nauna sa mga ito ang Saffroncoin, na gumamit din ng limang PoW algorithms. Digitalcoin at Digibyte ay parehong nag hard-fork upang gumamit ng 3 at 5 PoW algorithms. Ang Unitus ay isa pang 5-algo PoW coin na may ilang mga kaparehong PoW algorithms sa Myriad.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Noong Agosto 2015 Ang Myriad ay nag hard-fork upang bigyang-daan ang merge-mining sa kanilang Scrypt at SHA256d algorithms sa layuning pagandahin ang seguridad at makamit ang isang mas metatag na hashrate sa dalawang algorithm na iyon. Sa panahong ito ang target na block time ay 5 minuto (dating 2.5 minuto), upang makamit ang pangkalahatang block target time na 1 minuto (dating 30 segundo); Ang pagbabagong ito ay magpapataas sa emission curve ng 2?, sa humigit-kumulang na 20 taon.";
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
				return "?Une variante spéciale de Groestl algorithme de hachage pour Myriad, est l'un des cinq finalistes dans les algorithmes du concours hash NIST SHA-3.";
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
				return "???????? ?? ?????";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using 
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad (??????) ? ??????? ?????-???????????? ????????????, ????? ????????? ? ???? ?? 5 ???????????? ?????????? ???????. ?? ??????? ?? ???????, ????? ???? ?? ???? ?????? ???? ??? SHA256d ????, Myriad ? ???????? ?? ??????? ???????? SHA256d ? Scrypt ???? (ASIC), ????? ? ?? ????? ????? (GPU) ? ????????? (CPU)";
			case clean("Secure"):
				return "?????????";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "???????? ???? ?? ?????? ????? ? ?? ? ?? ???????? ????????? ?? ?????? ???????? - SHA256d, Scrypt, Myr-Groestl, Skein, ??? Yescrypt, ???? ????? ???? ??? ?????? ????? ?? 5 ??????. ???????? ????? ?? ???????? ?? ???? ? 1 ??????. ????? ????????? ????????? ??? ????????? ????????, ????? ?????? ?? ?????? ?? ??????????? ?????. ??????? ?? ????-??? ????????? ? SHA256d ? Scrypt ???????????, ??????????  ??? ??? ?? ???????? ?? ????? ???????. ?????-????????????? ?????? ????? ???????  ???????????? ?????????? ?? ????? ?? ???? 51% ?????? ??????? ?? ???????????? ??????? ????? ?? ???????? ?? 51% ?? ?????????.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "???????? ????? ? ???????? ?? SHA256d ? Scrypt, ????? ????????? ?? Myriad ?? ?? ????????? ?? ????????? ???????? ???????.";
			case clean("Fair Distribution"):
				return "????? ?????????????";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Myriad ?? ????????? ? ????????????? ????? ??? ????? ???????? ??????. ????? ??? ????? ???? ?? ?? ?????? ? ???? ?? ???????? ??????? ????";
			// technology
			case clean("Multi-Algorithm"):
				return "?????-?????????";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ?????????? ?????????? ?? ASIC, CPU ? GPU ?????:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "??? ?????????? ?? SHA256d ????????, ???????????? ?????????? ?? ???????";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "???????? ?? ???? ??????? ????????? ???? ?? ?????????, ????? ? ??????? ?? ????????? ?? ????-? ? ???????? ???????????? ???? Litecoin";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "????????? Myriad ??????? ?? Groestl ????????? ?????????, ???? ?? ????? ????????? ? NIST SHA-3 ???????????? ?? ????????";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "??? ???? ?? ????? ????????? ? NIST SHA-3 ????????????, ???????????? ????????? ?? Skeincoin";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "???????????? - ????????? ???? ?? ?????????, Qubit ????????? ? ???? ?? 5 ?????????? ?? NIST SHA-3 - Luffa, Cubehash, SHAvite, SIMD ? ECHO";
			case clean("Merge Mining"):
				return "???? ?????";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "?? ???? 4002000 ??????? ???????? ? ????????? ?? SHA256d ? Scrypt ???????????. ???? ????????? ?? Myriad ?? ?? ????????? ?? ????????? ???????? ???????, ????? ? ??????? ?? ???????? ?? ??????, ???? ?????????? ???? ?????????, ???????????? ??????????? Myriad ???????";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "?????? ????? (AuxPow) ????????? ???????? ????????? ?? ?????? ?????? ???? Bitcoin ??? Litecoin ?? ???? ?????????? ?? ???????? ?? ??????? ? Myriad ???????, ??? ???????????? ??????????? ????? ??????? ?? ?????????? ?????? ??????";
			case clean("Distribution"):
				return "?????????????";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad ?? ????? ??? ? ??????? ?? 23 ???????? 2014? ? 18:30 UTC (09:30 EEST)";
			case clean("first mined block"):
				return "?????? ????? ????";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "???? 4 ?????? ??-?????, ?????????? ?? ???? ????????????? ?????";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "?????????????? ??????? ?? 1000 MYR ?? ??????????? ?? ????? 967 680 ????? (????????????? 48 ???????). ???????????? ?????????? ? 2 ???????? MYR";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "????????????, ???????? ????? ?? ???? ? ???? 30 ??????? ??? 150 ????? ??????? ?? ?????????. ?? 12 ??? 2015? ? ?????? ???????? ????? ?? ???? ?? ???? ????????? ?? 60 ??????? ??? 300 ??????? ?? ????? ?????????. ???? ??????? ????? ? ???? ?? ???? 1 401 001. ?? ???? ????? Myriad ?????? ?? ????? ??????? ? ???????? ? ????????????? ????? SHA256d ? Scrypt, ????? ???? ?? ?????? ????? ?? ????? ?? ??? 50 ???????.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad ? ????????? ???? ???????? 2014? ?? 8bitcoder, ?????????? ?? Zetacoin. ?? ? ??????? ??????, ????? ???????? ??? \"proof-of-work\" ??????????, ?? ?? ??????? ??????????? ?? ??????? ? ?? ?? ???? ?????????? ?? ?????? ???? ?? ? ???????, SHA256d ? Scrypt ?? ????-?, Skein ? Myr-Groeetl ?? GPU ??????? ? Qubit ?? CPU. ????????, Huntercoing, ??????? ? ???? ?? 2013 ? ??????? ??????, ????? ???????? ?????? ?? ???? PoW (SHA256d ? Scrypt) ?????????, ?? ??????? ??? ?? ?? ???????? ??????? ????? ??????, ????????? ????? ???????? ???????? ???? ?? ????????? ?? ???? ??????";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ??? ? ??????? ????????, ?????? ?? ????? ? Saffroncoin, ????? ???? ???????? ??? PoW ??????????. Digitalcoin ? Digibyte ???? ?? ????? ?????????? ?? ??? ??????????, ????? ? Unitus, ????? ??? ???????? ?????? ????????? ? Myriad ? ????????? ?? ????????????? ?? ?????? ????? ???? ???????? ???. Auroracoin ? Verge ???? ?? ??????? ??????? ?? ??????????? ??? ?????? ?? ???? ?????????. ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "???? ??????, 2015? Myriad ????? ?????? ???????????, ?? ?? ??????? ?????? ????? ???? SHA256d ? Scrypt ??????????? ? ??? ?? ??????? ?????????? ?? ??????? ? ?? ?? ???????? ??-???????? ??????? ?? ?????????? ?????????. ?? ???? ?????, ???????? ????? ?? ???? ?? ????? ????????? ???? ?? ??????? ?? 2.5 ?????? ?? 5, ?? ?? ???????? ?????? ????? ?? ????? ?? 1 ??????, ???? ?????????? ? 30 ???????. ???? ????????? ??????? ?? ????? ?? ?????????? ?? ???????? ?? ?? ????? ?? ????????????? 20 ??????";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "?????????? ?????? ? 0.11.3.1, ??????? ?? 7 ????? 2016?. ??? ";
			case clean(" announcement &amp; upgrade notes."):
				return " ???????? ? ????????? ?? ???????.";
			// mining
			case clean("Getting Started"):
				return "???? ?? ??????";
			case clean("Download a "):
				return "??????? ";
			case clean("wallet"):
				return "????????";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", ??????? ???????? ??????, ?????? ?????? ? ????????...";
			case clean("Mining Tutorial Video"):
				return "????? - ????? ????";
			case clean("Watch on "):
				return "?????? ?";
			case clean ("Youtube"):
				return "Youtube.";
			case clean("Mining Software"):
				return "??????? ???????";
			case clean("Use any SHA256d compatible ASIC"):
				return "????????? SHA256d ????????? ????";
			case clean("Use any Scrypt compatible ASIC"):
				return "????????? Scrypt ????????? ????";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer ?? OpenCL GPU ?????";
			case clean("BitcoinTalk Thread"):
				return "???? ? BitcoinTalk";
			case clean("Windows Binaries"):
				return "Windows ???????";
			case clean("GitHub Source"):
				return "GitHub ????-???";
			case clean("Suggested Command Line"):
				return "???????? ???????? ?????";
			case clean("Pools"):
				return "???????";
			case clean("P2Pool nodes"):
				return "P2Pool ?????";
			case clean("Run Your Own Node"):
				return "?????? ???????? ?????";
			case clean("Merge Mining Pools"):
				return "???? ?????";
			case clean("zpool - The miners multipool"):
				return "zpool - ?????-??????? ?? ?????????";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information &amp; Resources"):
				return "?????????? ? ???????";
			case clean("Exchanges"):
				return "?????";
			case clean("Other"):
				return "?????";
			case clean("Faucet"):
				return "??????";
			case clean("Testnet Information"):
				return "?????????? ?? ????-???????";
				
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
				return "Myriad ist die erste Kryptowhrung mit fünf simultanen Hash Funktionen. Anders als Bitcoin kann Myriad mit SHA256 ASICs, Scrypt ASICs, GPUs & CPUs effektiv geschöpft werden.";
			case clean("Secure"):
				return "Sicherheit";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. 
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. 
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Miner können zwischen f?nf unterschiedlichen Algorithmen w?hlen - SHA256, Scrypt, Myr-Groestl, Skein und Yescrypt - jeder Algorithmus erzeugt etwa alle f?nf Minuten einen neuen Block. Ein neuer Block wird folglich etwa jede Minute gefunden. Die Komplexit?t eines jeden Algorithmus ist nur von seiner eigenen Hashrate abh?ngig. SHA256 und SCRYPT sind durch die Entwlickung von ASICs für Miner mit GPUs unrentabel. F?r diese Miner sind die ?brigen drei Algorithmen, welche nicht effektiv mit ASICs geschöpft werden k?nnen.
            Der Multi-Algorithmus Ansatz bietet au?ergew?hnlichen Schutz vor 51% Angriffen, da eine gro?e Anzahl von unterschiedlicher Hardware notwendig ist, um 51% aller Bl?cke zu finden.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Merge Mining ist f?r SHA256 und Scrypt verf?gbar. Es erlaubt Myriad von Bitcoin und Litecoins verfügbarer Hash Power zu profitieren.";
			case clean("Fair Distribution"):
				return "Faire Verteilung";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Kein Premine und keine versteckten Coins. Alle Nutzer haben die gleichen Chancen Myriad zu erhalten.";
			// technology
			case clean("Multi-Algorithm"):
				return "Eine Vielzahl an Algorithmen";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorithmen f?r ASICs, GPUs und CPUs";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "SHA256d ist der genutze Algorithmus von Bitcoin, der bekanntesten Kryptow?hrung.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Anfangs nur mit Hilfe von CPUs, wird der Algorithmus heute nur noch mit ASICs geschöpft";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Myriad nutzt eine abgewandelte Variante des Hash-Algorithmus Groestl. Groestl ist einer der f?nf Finalisten im NIST SHA-3 Wettbewerb.";
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
				return "Merge Mining bzw. AuxPow, erlaubt es, die Arbeit eines Parent Coin zu nutzen, um einen Block in Myriads Blockchain zu finden.";
			case clean("Distribution"):
				return "Verteilung";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad wurde am 23. Februar 2014 um 18.30 UTC ver?ffentlicht. Der";
			case clean("first mined block"):
				return " erste Block ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "wurde vier Minuten sp?ter gefunden. Damit ist Premine ausgeschlossen.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Anfangs lag die Belohnung für einen gefundenen Block bei 1.000 MYR. Diese halbiert sich alle 967680 Blocke (ca. alle 48 Wochen). Maximal werden zwei Milliarden Bl?cke geschöpft.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Die benötigte Zeit, um einen Block zu finden lag anfangs bei 30 Sekunden oder 150 Sekunden pro Algorithmus. Am 12. Juli 2015 entschied die Community diese Zeit auf 60 Sekunden bzw. 300 Sekunden pro Algorithmus anzuheben. Dies geschah effektiv mit Block 1.401.001. Der Grund für die Änderungen war, dass Myriad zu dieser Zeit an einer niedrigen Hashrate und h?ufigem difficulty hopping bei Scrypt und SHA256 litt. Dies sorgte daf?r, dass die Zeit bis ein Block gefunden wurde, bei ?ber 50 Sekunden lag.
            Neben der Aktivierung von auxPoW f?r Scrypt und SHA256 sorgte die Erh?hung der block time auf 60 Sekunden f&#252;r bessere Konsistenz im Netzwerk bei weiterhin fairer Verteilung. ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad wurde im Februar 2014 von 8bitcoder gelaunched, geforked aus Zetacoin. Myriad war der erste Coin mit Unterst?tzung f?r mehrere Algorithmen in der Hoffnung, dadurch die Sicherheit und die Anzahl der potentiellen Miner zu erh?hen. SHA256 und Scrypt f?r ASIC Miner, Skein und Myr-Groestl f?r GPU Miner und Qubit f?r GPU und CPU Miner. Huntercoin, Ende 2013 gelaunched, war eigentlich der erste Coin, welcher mehrere PoW Algorithmen nutze. Der Fokus lag aber nicht auf dem minen, sondern auf einem Blockchain basierten Spiel, welche den Gro?teil der verf?gbaren M?nzen produzierte.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad inspirierte mehrere Coins mit ?hnlichen Konzepten z.B. Saffroncoin, welches auch f?nf Algorithmen nutzt. Andere Coins wie Digitalcoin und Digibyte hard forkten um drei bzw. f?nf Algorithmen verwenden zuk?nnen. Unitus ist ein weiterer Coin, der mehrere Algorithmen mit Myriad teilt und dadurch Merge Mining erlaubt. Auroracoin und Verge k?ndigten au?erdem an auf Multi-Algo zu setzen.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Im August 2015 wurde Myriad hard geforkt, um Merge Mining mit Scrypt und SHA256 zu unterst?tzen. Damit sollte die Sicherheit erh?ht und die Hashrate stabilisiert werden. Die Block Time wurde auf 5 Minuten erhöht (zuvor 2.5 Minuten), um auf eine Gesamt Block Time von einer Minute (vorher 30 Sekunden) zu kommen. Die ?nderungen werden die Verteilungszeit um einen Faktor 2 verl?ngern, auf ca. 20 Jahre.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return " Die neueste Version ist 0.11.3.1, ver?ffentlicht am 06.07.2016. Siehe";
			case clean(" announcement & upgrade notes."):
				return "Ank?ndigungen und Abk?rzungsverzeichnis";
			// mining
			case clean("Getting Started"):
				return "Einf?hrung";
			case clean("Download a "):
				return "Lade ein  ";
			case clean("wallet"):
				return "wallet (Geldbeutel)";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return ", lade einen passenden Miner, finde einen Mining Pool und starte...";
			case clean("Mining Tutorial Video"):
				return "Mining Tutorial Video";
			case clean("Watch on "):
				return "Schaue auf";
			case clean ("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Mining Software";
			case clean("Use any SHA256d compatible ASIC"):
				return "Benutze einen SHA256 kompatiblen ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Benutze einen Scrypt kompatiblen ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer f?r OpenCL GPU mining";
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
				return "Starte deinen eigenen Node";
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
				return "Myriad è una moneta multi-algoritmica, è la prima valuta ad avere contemporaneamente 5 funzioni hash usate per il mining. A differenza di Bitcoin che può essere minato in modo redditizio soltanto utilizzando ASIC SHA–256d, Myriad è aperto agli ASIC SHA256d, ASIC Scrypt, GPU & CPU.";
			case clean("Secure"):
				return "Sicura";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt — each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Un miner può scegliere uno qualsiasi dei 5 algoritmi disponibili per il mining: SHA256d, Scrypt, Myr-Groestl, Skein o Yescrypt e ciascuno ha un tempo di blocco fisso di 5 minuti. In generale un blocco viene trovato ogni minuto. La difficoltà di ogni algoritmo viene regolata in base al suo hash rate. Mentre ASICs hanno reso il GPU mining basato sugli algoritmi SHA256d & Scrypt improduttivo, gli altri algoritmi continuano a dominare il GPU mining. L’approccio a più algoritmi offre un nuovo, esclusivo e innovativo metodo di protezione del 51% poiché per ottenere il 51% dei blocchi è necessaria una vasta gamma di hardware.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return " Il merge-mining è disponibile sugli algoritmi SHA256d & Scrypt, permettendo a Myriad di ottenere un vantaggio grazie all’enorme potenza di calcolo disponibile.";
			case clean("Fair Distribution"):
				return "Distribuzione equa";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Non ci sono premine o fortune nascoste possedute dagli sviluppatori. Tutti gli utenti della rete hanno le stesse possibilità di ottenere Myriad al prezzo di mercato.";
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
				return "Originariamente progettato solo per la CPU, l’algoritmo Qubit combina 5 algoritmi partecipanti alla competizione di hashing NIST SHA-3: Luffa, Cubehash, SHAvite, SIMD e ECHO.";
			case clean("Merge Mining"):
				return "Merge Mining";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "A partire dal blocco 4002000 il merge mining è disponibile per gli algoritmi SHA256d e Scrypt. Questo ha permesso a Myriad di ottenere un vantaggio grazie alla grande potenza di calcolo attualmente in uso da monete che usano questi algoritmi e ha garantito un'ulteriore sicurezza alla block chain Myriad.";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Il merge mining, conosciuto anche come AuxPow, consente l’utilizzo delle risorse impiegate per esempio per il mining su Bitcoin o Litecoin per trovare blocchi nella rete Myriad senza incorrere in alcun carico aggiuntivo.";
			case clean("Distribution"):
				return "Distribuzione";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad è stata rilasciata in rete il 23 febbraio 2014 alle 18:30 UTC";
			case clean("first mined block"):
				return "Il primo blocco ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " è stato trovato dopo 4 minuti, confermando che non vi è stata alcuna premine.";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "La ricompensa iniziale era di 1000 MYR e viene dimezzata ogni 967680 blocchi  (circa 48 settimane). Il numero massimo di monete è di 2 miliardi di MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Inizialmente il block time era di 30 secondi o 150 secondi per un algoritmo. Il 12 luglio 2015 la comunità ha deciso di aumentare il block time fino a 60 secondi o 300 secondi per un algoritmo, entrata in vigore dal blocco 1401001. A quel tempo, la rete Myriad soffriva di un basso hash rate e di una elevata difficoltà, causando un block time medio effettivo maggiore di 50 secondi. In aggiunta è stato abilitato AuxPow per Scrypt e SHA256d che ha aumentato il block time e ha portato a una maggiore coerenza nella rete senza alterare l’equità della distribuzione.";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad è stata lanciata nel febbraio 2014 da 8bitcoder ed è basata su ZetaCoin. È la prima criptovaluta che utilizza 5 algoritmi PoW per incrementare la sicurezza e per una maggiore copertura dei miner con algoritmi diversi: SHA256d e Scrypt per i miner ASIC, Skein e Myr-Groestl per i miner GPU, Qubit per il GPU e CPU mining. Qubit è stato sostituito con Yescrypt. HunterCoin, lanciato alla fine del 2013, fu infatti la prima moneta ad utilizzare diversi algoritmi POW (SHA256d e Scrypt), ma non fu progettata non per il mining, ma per i giochi basati su block chain che hanno dato vita a molte monete alternative.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ha dato vita a diversi spin-off, il primo dei quali era Saffroncoin, anch’esso basato su 5 algoritmi PoW. Digitalcoin e Digibyte entrambi hard-forked per utilizzare rispettivamente 3 e 5 algoritmi PoW. Unitus è un'altra moneta con 5 algoritmi PoW coin che condivide diversi algoritmi PoW con Myriad, e consente agli utenti il merge mining su tutti e 5 i suoi algoritmi. Anche Auroracoin e Verge hanno annunciato l'intenzione del fork per il multi-algo.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "Ad agosto 2015 la rete Myriad è stata divisa in due per consentire il merge mining sugli algoritmi Scrypt e SHA256d nel tentativo di migliorare la sicurezza e raggiungere un hash rate più stabile su questi due algoritmi. In quel momento il block time per ogni algoritmo è stato modificato in 5 minuti (in precedenza 2,5 minuti) per ottenere il block time totale per tutti gli algoritmi di 1 minuto (in precedenza 30 secondi). Questo cambiamento permetterà di allungare la curva di emissione con un fattore 2x e di equiparare a circa 20 anni.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "L’ultima versione 0.11.3.1 è stata rilasciata il 6 luglio 2016. Vedi:";
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
				return "zpool – multipool";
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
				return "?????? ??????";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
			return "5    ????? ????? ??????????  ???? ?????? ?????? ?????? ?? ?? ???? ???????–    Myriad
			????????? ?? ??????? .
			SHA256d, Myriad ??? ??? ??????? ¸ ????? ???? ?? ???? ????? ???????? ???? ???? ???????? ?????  Scrypt    ASICS , GPUS & CPUs ";
			case clean("Secure"):
				return "?????";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "???? ?????  ????? ?????? ???? ?? ????? ?????? ??????? ???????? ?? ?? ????????? ???? 
				SHA256d, Scrypt, Myr-Groestl, Skein, ??  Yescrypt ??????  ?? ???? ????? ???? ????? ?? 5 ?????
				?? ?????? ??? ???? ?????? ?? ????? .  ????? ????? ?? ???????? ??? ????? ??????? ?????? ??? .
				 ????? ???? ???? ??????? ?????? ???????? ?? ???????? ?? ???????? SHA256d, Scrypt ???? ????? 
				?????? ??? ???? ?? ???? ?????????? ??????? ?????????? . ????? ????????? ?????? ???? ??? ?????? ??????? ??????? ?????? ????? ????? 51 % ?? ??????? ??? ????? ??? ?????? ????? ?? ???????.";
			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "??????? ??????? ????????? ??????, ????? ???? SHA256d & Scrypt, ?????  ????  Myriad
				??????? ???? ?????? ????????? ??????? ???????";
			case clean("Fair Distribution"):
				return "?????? ??????? ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "?? ???????? ?? ????? ????? ???? ??????? ???????? ?????? ???? ???? ??????? ?????? ??? ???
				Myriad ???? ????? .  ?? ???? ????? ??????? ????? ?????? ?? ?????? ????? ???? ?????????? ??? ?????? ????? ??? ????????.";
			// technology
			case clean("Multi-Algorithm"):
				return " ??????????? ????????";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ???????????  ??????? ASIC  GPU ? CPU  ????";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "?????? ?? ????? ???????? SHA256d , ?????? ???? ??? ????? Bitcoin- ";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "???? ???? ??????? ??? ???? ???????? ???????? , ??????? ???? ?????? ????? ,?????? ?? ????? ??????? ????????  ASICs ??? Litecoin ";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "????? Myriad ??? ???? ????????? ??????? -  Groestl – ???? ?? ???? ?? ???????? ?????? ?????    NIST -SHA 3  ????????? ??????? ????????";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " ??? ???? ?? ???????? ?????? ???????? ?????? ???? NIST -SHA 3   ????? ?????? ???? ???  Skeincoin ";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "???? ?? ??????? ??? ????????? ???? ???????? ???????? ? Qubit ???? ??? 5 ???????? ????
				     Luffa , Cubehash , SHAvite ???????? ????????? ??????? – NIST - SHA 3 
				 .SIMD  ? ECHO";
			case clean("Merge Mining"):
				return "??????? ???????";
			case clean("Since block 1402000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "???? ?? ???? 40020000 ,  ??? ????? ???? ??????? SHA256d & Scrypt ??????????? ??? ??? ??? Myriad ???? ???? ??? ????  ???????? ???? ?????? ?? ??? ????? ??????? ?????? , ???? ?? ???? ????? ????????? ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "??????? ??????, ??????? ???? ????  AuxPow  ,  ???? ???????? ????? ??? , ??? ???? ?????? , ?? ??????? Bitcoin  ?? Litecoin   ?????? ?? ??? ????? ?? ?????? Myriad  ??? ???? ?? ????? ?????? ";
			case clean("Distribution"):
				return "????? ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad  ????  ????? 23/2/2014  , 18:30  UTC ";
			case clean("first mined block"):
				return "???? ??????? ?????";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return "???? ??? 4 ?????,  ??? ??????? ?? ???? ????????";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "?? ??????? , ???? ?????? 1000  MYR  , ???????? ?? ?? 967,680 ???? (????? 48 ?????? ) ???? ?????? ???? ?? ????? ??????? 20000000000   .";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "?? ??????? , ???? ????? ?? 30 ????? ??150 ????? ??? ?????????? , ???? 12/7/, 2015 ??? ??????? ?????? ??? ?????? ??? 60 ????? ?? 300 ????? ??? ???????? . ???? ??? ?????? ??? ??????? ?? ???? ?1,401,001 ??? ????? ???? ???? ??? ???? ??? Myriad ????  ????????? ??????? , ??? ????? ????? ???? ?? ???? 50 ????? ????????? ??? ??? , ?????????? ?? aux-Pow ????? Scrypt ?  SHA256d , ??? ??? ??? ????? ????? ???? ????????? ??? ? ??? ????? ???? ?? ?????? ??? ?????? ?? ???? ??????? ??? ????? ????? ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad ????? ?? /2/ 2014 ??? ??  ????? 8bitcoder ??? ????? ZtaCoin . ??? ?? ??? ???? ??????? ???????? 5 POW  ????????? ???? ????? ?? ??? ????? ?????? , ???? ?? ????? ???? ?? ???? ??????? ?? ????????? ??????-    SHA256d ?  Scrypt????? ??????? ?? ASIC ???? ????                                  , Ske				in ? Myr-Groestl ????? ??????? GPU , Qubit  , GPU , ???? ???????? ???????? ??????? .
				HunterCoin , ???? ???? ?? ????? ??? 2013 , ?? ?????? , ??? ?? ??????? ??? ????????? ????? ????? ??????? (SHA256d  ?  Scrypt),  ???? ?? ??? ????? ??????? , ?????? ????? ??? ???????? ???? ?????? ?? ??????? ??? ?????? ?? ???? ???? ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ???? ??? ?????? ????? , ????? ??? ?????? Saffroncoin   ???? 5 PoW ????????? ???? ????? Digitalcoin ? Digibyte ???? ?? ????? ?????? , hard-fork  ???????? 3,  5  PoW ????????? ???? ????? ??? ??????? ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
			return "?? ?? ??? 2015 ???? ????  Myriad  ????? ??????? , ?????? ??????? ???? ??? ??????????? – Scrypt ? SHA256d . ??? ????? ?? ????? ????? ????  ???? ?????? ??? ??? ??????????? ????? ??? ????? ??????? ???? ??? ??? ???????? ???? 5 ????? ( ??? , ?? 2.5 ????? ) ?????? ??? ????? ???????? ????? ????????????? – 1 ????? ( 30 ????? ?? ??? ???? ) ???? ??? ???? ????? ?????????? ??? 2 ???? , ?????? ?? ???? ?? 20 ???? .";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
                                return "???? ????? 0.11.3.1,  ???? ??? ?? 6 /7/ 2016  , ???? ";
			case clean(" announcement & upgrade notes."):
				return "????? ?????? ????? ";
			// mining
			case clean("Getting Started"):
				return "?????";
			case clean("Download a "):
				return "?????";
			case clean("wallet"):
				return "?????";
			case clean(", download a miner of the right type, find a pool and fire away..."):
				return "???? ????? ????? ?????? , ??? ???? ???? ? ??????.....";
			case clean("Mining Tutorial Video"):
				return "????? ??????? ???????";
			case clean("Watch on "):
				return "???? ???? ???";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "?????? ???????";
			case clean("Use any SHA256d compatible ASIC"):
				return " ??????? ??  SHA256d ?????? ?? ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "??????? ?? Scrypt  ?????? ?? ASIC";
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
				return "Otwarte dla kazdego";

			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
			SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs &amp; CPUs."):
				return "Myriad – wielu algoritmiczna - jest pierwsza moneta, która wprowadza  jednoczesnie  5 funkcji skrótu, wykorzystujacych do miningu. W odróznieniu  od Bitcoin, którym mozna oplacalnie kopnac poslugujac ASICs oraz algoritm SHA256d, Myriad jest dostepna dla Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "Bezpieczna";

			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
			While ASICs have rendered GPU mining on SHA256d &amp; Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
			The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "Kopacz moze wybrac którykolwiek z 5 dostepnych algorytmów – SHA256d, Scrypt, Myr-Groestl, Skein, lub Yescrypt – kazdy z nich ma fiksowany czas bloku docelowego - 5 minut. Calkowicie, blok zostaje znaleziony  w ciagu kazdej minuty. Zlozonosc kazdego z algorytmów reguluje sie w zaleznosci od predkosci koparki.
				Podczas gdy ASICs wplywa na mining za pomoca kart graficznych  z algorytmem SHA256d, ? Scrypt jest nieproduktywny, pozostale algorytmy dominuja w sferze  miningu kart graficznych. Sposób multi-algorytmiczny  nowe ekskluzywne oraz innowacyjne podejscie do metodyki  ochrony za pomoca 51%, poniewaz zeby otrzymac 51% bloków potrzebna jest duza ilosc sprzetu.";

			case clean("Merge mining has been enabled on SHA256d &amp; Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "Zbiorowy mining róznymi algorytmami, którzy zwlaszcza SHA256d &amp; Scrypt, zezwala Myriad otrzymac przewage kosztem olbrzymiej dostepnej mocy obliczeniowej.";

			case clean("Fair Distribution"):
				return "Sprawiedliwy podzial";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "Niema preminu oraz zadnych cudownych wtyków. Wszystkie uzytkownicy sieci maja jednakowe mozliwosci dla otrzymywania Myriad wedlug kursu rynkowego";
			// technology
			case clean("Multi-Algorithm"):
				return "Multi-algorytmy";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algorytmów dostepnych dla ASIC, GPU ? CPU kopania";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "Dwie rundy dla funkcji skrótu algorytmu SHA256d, po raz pierwszy wykorzystanych przez nowatora kryptowalut - Bitcoin.";

			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "Najpierw zaprojektowany do CPU miningu, teraz wykorzystuje sie do generowania przez alternatywne kryptowaluty  za pomoca ASICs, rozpoczynajac  od Litecoin.";

			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "Specyficzny wariant algorytmu skrótu Mariad – Groestl – jest jednym z pieciu finalistów   NIST SHA-3 konkurowania algorytmów skrótu.";

			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Kolejnym z pieciu finalistów  konkurowania algorytmów skrótu jest NIST SHA-3, który po raz pierwszy wykorzystany przez  Skeincoin.";

			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return " Poczatkowo przeznaczony tylko dla algorytmu qubit CPU laczy 5 uczestników NIST SHA-3 konkurencji  algorytmów skrótu - Trukwa, Cubehash, SHAvite, SIMD i echo.";

			case clean("Merge Mining"):
				return "Zbiorowy mining";

			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
			by coins using these algorithms, further securing the Myriad blockchain."):
				return "Rozpoczynajac od bloku 4002000, Zbiorowy mining jest dostepny na algorytmach SHA256d i Scrypt. To pozwolilo Myriad, miec przewage kosztem ogromnej predkosci koparki uzywanej przez inne kryptowaluty oraz ochrony blockchainu.";

			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
			or performance impact to the parent coin."):
				return "Zbiorowy mining, znany równiez jako AuxPow, umozliwia stosowanie srodków wydawanych na przyklad do miningu lub Bitcoin Litecoin potwierdzenie aktualnosci bloków w sieci Myriad bez ponoszenia jakiegokolwiek dodatkowego obciazenia.";

			case clean("Distribution"):
				return "Podzial";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad zostala wydana w sieci 23 lutego 2014 roku ? 18:30 UTC";

			case clean("first mined block"):
				return "pierwszy wykopany blok";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " pojawil sie przez 4 minuty, podtwierdzajac ze nie bylo zadnego preminu.";

			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "Na poczatku nagroda byla 1000 MYR, które  przepolowione kazde 967.680 jednostek (okolo 48 tygodni). Maksymalna liczba monet -  2 miliardy MYR.";

			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
			per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
			In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
				return "Poczatkowo czas bloku docelowego wynosil 30 sekund, lub 150 sekund na algorytmu. W dniu 12 lipca 2015 roku, wspólnota postanowila wydluzyc czas bloku docelowego do 60 sekund lub 300 sekund
			na algorytmie, Decyzja weszla w zycie  z bloku 1,401,001. W tym czasie Myriad miala niska predkosc koparki i rozlegle trudnosci na Scrypt i SHA256d, powodujac rzeczywisty sredni czas blok na ponad 50 sekund.
			Oprócz wlaczenia aux-POW na Scrypt i SHA256d, wzrost czasu bloku docelowego doprowadzil do lepszej koordynacji  w sieci, bez wplywu na jakosc podzialu"; 
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms
			in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
			Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
			coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad uruchomiony w lutym 2014 roku czlowiekiem z przezwiskiem 8bitcoder, jest odgalezieniem ZtaCoin. Jest to pierwsza waluta kryptograficzna z uzyciem 5 algorytmów POW dla zwiekszenia bezpieczenstwa, jak równiez wiekszego zasiegu miningu z róznych algorytmów - SHA256d i Scrypt ASIC do miningu i Motek Myr-Groestl do miningu GPU qubit dla GPU i CPU górnictwa. HunterCoin, rozpoczela sie pod koniec 2013 roku, w rzeczywistosci po raz pierwszy uzyl kilka algorytmów POW dla górnictwa (SHA256d i Scrypt), ale to nie byl przeznaczony do miningu , raczej na podstawie blockchain-gier, co dodatkowo dalo poczatek dla wielu nowych kryptowalut.";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad dal poczatek dla kilka  swoich odpowiedników, pierwszy to Saffroncoin tez wykorzystujacy 5 PoW algorytmy. Digitalcoin ? Digibyte dokonali hard-fork, zeby uzyc odpowiednio 3 i 5 PoW algorytmów .";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
			At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
			this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
				return "W sierpniu 2015 Myriad  dokonala  hard-fork,  aby umozliwic Zbiorowy mining na algorytmach - Scrypt i SHA256d celem bylo uzyskanie stabilnej  predkosci hashowania sieci w tych algorytmach. W tej chwili czas bloku docelowego dla kazdego algorytmu zmienili z 2,5 do 5 minut, zeby  czas ogólny dla wszystkich algorytmów sklada 1 minute(wczesniej 30 sekund). Ta zmiana pnaca w góre krzywa emisji za pomoca stopniu 2?, ? niweluje w przyblizeniu  20 lat.";
			 // wallets
			case clean("Latest version is 0.11.3.1, released July 6th 2016. See "):
				return "Biezaca wersja 0.11.3.1. Zobacz";
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
				return ", pobierz potrzebna koparke, znajdz gielde  zacznij...";
			case clean("Mining Tutorial Video"):
				return "Wideo samouczek do miningu";
			case clean("Watch on "):
				return "przyjrzec ";
			case clean("Youtube"):
				return "Youtube";
			case clean("Mining Software"):
				return "Soft do miningu";
			case clean("Use any SHA256d compatible ASIC"):
				return "Uzyj jakiekolwiek SHA256d-zgodnego ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return "Uzyj jakiekolwiek Scrypt-zgodny ASIC";
			case clean("sgminer for OpenCL GPU mining"):
				return "sgminer do miningu  OpenCL karty gficznej(GPU)";
			case clean("BitcoinTalk Thread"):
				return "Watek ?? BitcoinTalk";
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
				return "Aby rozpoczac wlasny wezel";
			case clean("Merge Mining Pools"):
				return " zbiorowe kopanie ";
			case clean("zpool - The miners multipool"):
				return "zpool – multipools";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return "Informacja ? Srodki";
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
        		    return "Mineração combinada também conhecida como AuxPow, permite usar os recursos usados por exemplo em mineração de u?o???q ou Lightcoin
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
        		    aumentar o tempo do bloco até 60 segundos ou 300 segungos para o algoritmo. Essa decisão começou a funcionar a partir do bloco ?1,401,001.
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
				return "????? ?????";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return "Myriad – ???? ?????????? ?????? – ??? ???? ????? ????? ????? 5-???????? ????? ??????? ??????. ?????? ????????, ??? ???? ????? ?? ???? ??-??? ????? ? ASIC ????????? SHA256d, Myriad ????? ?- Script, ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return "?????";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return "???? ???? ????? ?? ???????? ? 5 ??????? –
				 SHA256d, Scrypt, Myr-Groestl, Skein  ?? Yescrypt – ?? ??? ??? ??? ??? ?? ???? ???? ?????? – 5 ????. ???????, ???? ???? ???? ?? ???. ????? ? hash rate ?? ?? ????????, ????? ?? ????? ???. ??? ?? ??? ??- ASIC ??????? ?? ????? ??-??? ?????? ??? ?? ???????? SHA256d ? Scrypt ???? ????, ??? ??????????? ?????? ?? ????? ?????? ??-??? ?????? ???. ???? ?????????? ?????? ????? ???? ???? ??????? ??????? ???????? ?? ???? ????? 51%, ????? ?????? 51% ?? ?????? ???? ????? ??? ???? ?? ????.";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "????? ?????? ??-??? ?????????? ?????, ??????? ????? SHA256d & Scrypt ????? ? Myriad ???? ????? ???? ?????? ?????? ??????.  ";
			case clean("Fair Distribution"):
				return "????? ?????";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return "???? ????? ???? ??????? ?????? ??????? ?? ??? ????. ?? ?????? ???? ???? ???? ???????? ????? Myriad ????? ????";
			// technology
			case clean("Multi-Algorithm"):
				return "?????????? ??????";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 ?????????? ?????? ?????? ASIC, GPU ? CPU:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return "??? ??????? ????????? ?????? SHA256d ???????? ????? ??? ???? ?? ?????? ??????? – Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
				return "?????? ??????? ?????? ??-??? CPU, ????? ??????? ?????? ?? ??? ?????? ????? ???? ????? ????? ASICs, ??? ? Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return "?????? ??????? ?? ? Myriad ?? ???????? ????? – Groestl – ?? ??? ? 5 ?????????? ?? NIST SHA-3 ?? ????? ????????? ?????. ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return "??? ??? ?????? ?????????? ?? ?????? ?????? NIST SHA-3, ??? ?????? ?? ??????? ? keincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return "?????? ??????? ?? ?????????  CPU, Qubit ???? 5 ?????? NIST SHA-3 ????? ?????????? ????? – Lufffa, Cubehash, SHAvite, SIMD ? ECHO.";
 			case clean("Merge Mining"):
				return "????? ??????";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
				by coins using these algorithms, further securing the Myriad blockchain."):
				return "????? 4002000, ????? ?????? ????? ??????????? SHA256d ? Scrypt. ?? ???? ? Myriad ???? ????? ?? ????? hash rates ?????? ??????? ????? ??????? ??? ????, ??? ?? ????? ?????? ?? ????? ??????.  ";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "????? ??????, ????? ?? ? AuxPow, ?????? ?????? ??????? ??? ??????? ???? ?????? Bitcoin ?? Litecoin ????? ???? ?? ?????? ???? Myriad ??? ???? ??? ???? ????.";
			case clean("Distribution"):
				return "?????";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return "Myriad ????? ???? ? 23-??????? 2014 ? - UTC18:30 ";
			case clean("first mined block"):
				return " ???? ????? ????? ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " ????? ???? 4 ????, ??? ???? ??? ????? ??? ????? ????. ";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return "??????, ??? ??? 1,000 MYR ?????? ?? ????? ?? 967,680 ?????? (???? 48 ??????). ???? ????? ?? ?????? – 2 ????????? MYR. ";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return "?????? ??? ?? ???? ????? 30 ????? ?? 150 ????? ?????????. ?? ? 12 ????? 2015 ?????? ?????? ?????? ??? ?? ???? ?? 60 ????? ?? 300 ????? ?????????. ?????? ???? ????? ????? ????? ??' 1,401,001. ???? ???? Myriad ??? hash rate ???? ????? ??, ??? ????? ?? ???? ??? ??? 50 ?????. ???? ??? ???? aux-Pow ????????? Scrypt ? SHA256d, ??? ???? ??? ????? ?? ???? ????? ?????? ??? ???? ???? ??? ???? ?? ????? ?? ????? ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad ???? ??????? 2014 ??-??? ?? ??? ?? ?? ????? 8bitcoder ?????? ????? ????? ?? ZtaCoin. ?? ???? ????? ?????? ?????? ? 5 ?????????? POW ?????? ?????? ??? ?????? ???? ???? ?? ?????, Skein ? Myr-Groestl ?????? GPU, Qubit ?????? GPU ? CPU. ???? ? HunterCoin, ??? ???? ???? 2013,  ??? ?????? ?????? ???? ?????????? POW ?????? (SHA256d ? Scrypt), ?? ??? ????? ?? ??????, ??? ??????? ?? ???? ????? ??????, ??? ????? ????? ????? ?????? – ?????? bitcoin.   ";
			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
			Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
			and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad ????? ???? ?????? ????? ??, ??? ??? ??? Saffroncoin ??? ????? ? 5 ?????????? POW. Digitalcoin ? Digitbyte ????? hard-fork ??? ?????? ? 3 ? 5 ????????? POW ?????. ???? ??? ?????? ????????? ????? ????? ????? ????? ?????????? ?????? ????? mining-Unitus ????. Auroracoin ? Verge ?? ?? ?????? ?? ???? ?????? ???-???????????.  ";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms. At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "??????? 2015 ???? Myriad ??? hard-fork ??? ?????? ????? ????? ??????????? – Scrypt ? SHA256d ?? ??? ????? ? hash rate ???? ?? ???? ??????????? ????. ???? ????, ??? ????? ?? ???? ??? ???????? ???? ??? ? 5 ???? (???? ?? ??? 2,5 ????), ??? ???? ??? ??? ?? ???? ??? ?????????? – ??? ??? (???? ?? ??? ??? 30 ?????). ?????? ??? ????? ?? ????? ??????? ????? ????? ???? ?? 2 ?????? ???? ? 20 ????.   ";
			// wallets
			case clean("Latest version is 0.11.3.1, released April 7th 2016. See "):
                                return "???? ?????? 0.11.3.1 ?????? ? 7-? ???? 2016. ????";
			case clean(" announcement & upgrade notes."):
				return "???? ????? ? ????? ???????";
			case clean("Desktop"):
				return "PC";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-????? ??? (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-????? ??? (11.5 MB)";
			case clean("Mobile"):
				return "??????";
			case clean("Android"):
				return "Android";
			case clean("Source"):
				return "????";
			case clean("Source Code (0.11.3.1)"):
                                return "???? (0.11.3.1)";
			case clean("Other"):
				return "???";
			case clean("Linux"):
				return " Linux ";
			case clean("Windows"):
				return "Windows";
			case clean("JSWallet"):
				return "JS Wallet";
			case clean("Brain Wallet"):
				return " ???? ?????? ";
			case clean("Paper Wallet"):
				return " ???? ???? ";
			// mining
			case clean("Getting Started"):
				return " ????? ";
			case clean("Download a "):
				return " ?????? ";
			case clean("wallet"):
				return " ???? ";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return ", ????? ???? ???? ?????, ???? ????? ??????...";
			case clean("Mining Tutorial Video"):
				return " ????? ????? ?? ????? ";
			case clean("Watch on "):
				return " ????? ";
			case clean("Mining Software"):
				return " ????? ???? ????? ";
			case clean("Use any SHA256d compatible ASIC"):
				return "????? ? SHA256d ????? – ?????? ?? ASIC";
			case clean("Use any Scrypt compatible ASIC"):
				return " ? Scrypt ????? – ?????? ?? ASIC ";
			case clean("sgminer for OpenCL GPU mining"):
				return " sgminer ?????? GPU OpenCL ";
			case clean("ccminer for CUDA GPU mining"):
				return " ccminer ?????? GPU CUDA ";
			case clean("cpuminer-multi for CPU mining"):
				return " cpuminer-?? ???? ????? CPU ";
			case clean("cgminer for OpenCL GPU mining"):
				return "cgminer ?????? GPU OpenCL ";
			case clean("BitcoinTalk Thread"):
				return "??????? BitcoinTalk";
			case clean("Run your own node:"):
				return "?????? ???? ????";
			case clean("Other pools"):
				return " ????? ????? ";
			case clean("Merge Mining Pools"):
				return "????? ?????? ????? ";
			case clean("zpool - The miners multipool"):
				return "zpool – ??-???? ";
			case clean("MultiPool"):
				return "MultiPool";
			// services
			case clean("Information & Resources"):
				return " ???? ??????? ";
			case clean("???? ????? (1)"):
				return "Insight Esplorilo (1)";
			case clean("Insight Explorer (2)"):
				return " ???? ????? (2)";
			case clean("Abe Explorer"):
				return "Abe ???? ????? ";
			case clean("Network Status "):
				return " ??? ??? ";
			case clean("Exchanges"):
				return " ?????? ";
			case clean("Shop"):
				return " ???????? ";
			case clean("List of Coinpayments stores"):
				return " ????? ?? ?????? ?????? ???? ";
			case clean("Other"):
				return " ????? ";
			case clean("Faucet"):
				return " Faucet ";
			case clean("Testnet Information"):
				return "Testnet ??????";
			case clean("cryptap.us Myriad page"):
				return "Myriad-???? cryptap.us";
			case clean("Reddit/IRC myrbot information"):
				return " ?????? myrbot Reddit/IRC";
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
				return "?iner kan elk van 5 toegankelijke algoritmen kiezen – SHA256d, Scrypt, Myr-Groestl, Skein of Yescrypt – elk van hen heeft de gefixeerd doeltijd van een blok – 5 minuten. In 't geheel wordt het blok ongeveer iedere minuut gevonden. Afhankelijk van de hash rate van elk algoritme wordt ook zijn ingewikkeldheid gereguleerd.
				Terwijl Aashiqui de mining beinvloedt door videokaarten met het SHA256d-algoritme en Scrypt onproduktief is, domineren andere algoritmen de miningssfeer met videokaarten. De meerdere-algoritmenmethode schept een nieuwe exclusieve en innovatieve aanpak voor de beschermingsmethodiek met behulp van 51% want een overgroot scala aan apparatuur zal nodig zijn om 51% van de blokken te krijgen";
			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return "De gecombineerde mining met verschillend? algoritmen die SHA256d & Scrypt begrijpen, heeft Myriad gelaten een voordeel krijgen door middel van overgrote beschikbare rekenkapaciteiten";
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
				return "Een ander? finalist van de hash-algoritmenwedstrijd NIST SHA-3 die voor het eerst door Skeincoin gebruikt werd.";
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
			case clean("Merge Mining H? "):
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
	 	
	else if($lang == 'hr')
	{
		switch (clean($text))
		{
				// homepage
				case clean("Open To Anyone"):
					return "Otvorena svakom";

				case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
					return "Myriad – multi algorotmicna - to je prva novcanica , koristi istovremeno 5 heš opcija, koji koristi za maining. Za razliku od Bitkoina, koji može isplatlivo rudarstvo koristeci Asiki i algoritam SHA256d, Myriad dostupan za Scrypt ASICS, GPUS & CPUs.";
				case clean("Secure"):
					return "Sigurna";

				case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.
				While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.
				The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
					return "Rudar može izabrati bilo koji od 5 dostupni algoritama – SHA256d, Scrypt, Myr-Groestl, Skein, ili Yescrypt – svaki od njih fiksno cjelo vrijeme jedinici   – 5 minuta. U cjelom, jedinica nalazi se svaku minutu. Zavisi od heš reita svakog algoritma odreduje se i njugova težina.
					U tom vremenu kad Asiki utešava rudarstvo gragicke karticama sa algoritmama  SHA256d ? Scrypt nije produktivan, ostale algoritmi dominiraju podrucje rudarstva videokarticama. Nacin punomogucni algoritama stvara novi eksklusivan i poseban pristup sa tehnikom zaštiti s pomocju 51%, za to što za dobitak  51% jedinici treba se veliki izbor opremi.";

				case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
					return "Skupleno rudarstvo sa razlicitima algoritmama, ukljucuje u sebe SHA256d & Scrypt, dao Myriad dobiti prednost zbog ogromne dostupne snage.";

				case clean("Fair Distribution"):
					return "Poštena distribucija";
				case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
					return "Nema premain i  sakrivani carobni jedinici sa velikim dobitkom. Svi koristniki mreži imaju jednaki mogucnosti za dobitak Myriad po svojoj cjeni";
				// technology
				case clean("Multi-Algorithm"):
					return "velikomogucni algoritmi";
				case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
					return "5 algoritma dostupni za ASIC, GPU i CPU rudarstva";
				case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
					return "Dvije runde za algoritam heširovanja SHA256d, prvi put kosištena pionirom  cryptocurrency - Bitcoin.";

				case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
					return "Od pocetka isplanirovan za rudarstvo splanirovan pod rudarstvo CPU, sad se koristi za izlaz puno alternativnima novcanicama sa pomocu ASICs, pocine sa Litecoin.";

				case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
					return "Specificno samo za  Myriad variant sa heš-algoritmima – Groestl – to je jean od pet finaliste NIST SHA-3 natjecaja  algoritima heš.";

				case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
					return "Još jedan od pet finalisti natjecaja po heš NIST SHA-3, koji bio prvi put iskorišten Skeincoin.";

				case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
					return "Od pocetka napravljeni projekt samo iz pod  CPU algoritam Qubit kombinira 5  NIST SHA-3 clanovi natjecaja po heš algoritmima – Luffa, Cubehash, SHAvite, SIMD i ECHO.";

				case clean("Merge Mining"):
					return "Zajedno rudarstvo";

				case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
					return "Pocine od jedinici 4002000, zajednicko rudarstvo dostupno za SHA256d i Scrypt algoritmima. Ono dao  Myriad dobiti prednost zbog veliki heš-reitov, iskorišteni u tomu vremenu drugima novcanicima , još to osiguralo sigurnost jedinicici.";

				case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load
				or performance impact to the parent coin."):
					return "Zajednicesko rudarstvo, koji popularan kao AuxPow,daje koristit izvore i snagu, koji se troši, na primer, na rudarstvo  Bitcoin ili Litecoin za podtvrdu vrijednosti jedinici u mreži Myriad koja ne vuci ništa od dopunskog posla.";

				case clean("Distribution"):
					return "Distribucija";
				case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
					return "Myriad bila izdana u mrežu  23, veljaca 2014 u 18:30 UTC";

				case clean("first mined block"):
					return "prva pronadena jedinica";
				case clean(" came 4 minutes later, thus establishing that there was no premine."):
					return " pojavila se preko 4 minute, koja podtvrduje što nije bilo nikakvog prejmana.";

				case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
					return "Od pocetka, dobitak bio 1,000 MYR, i djelila se svaki 967,680 jedinici(oko 48 tednov). maksimalno se može dobiti novcanice  – 2 milliarda  MYR.";

				case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
				per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
				In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
					return "U svom vremenu , svaka jedinica bila  30 sekunda, ili 150 sekund  za algoritam. ali 12. srpanja  2015 zajednica odlucila povecati vrijeme jedinici do 60 sekunda, ili 300 sekunda za algoritam. Ova odluka pocela raditi u snagu sa jedinici ?1,401,001. u tom vremenu, kad je mreža Myriad imala nizak heš reit i veliku težinu, prosjek od jedinici javlja se vise od 50 sekunda. Kao dopunak bilo jos ukljuceno aux-Pow za Scrypt i SHA256d, ono povjecalo vrijeme jedinici i dao lijepsej slaženosti u mreži pretjecanje za poštenu distribuciju.";

				case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
				Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
				coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
					return "Myriad izdana u veljacu 2014 covjekom sa nikom 8bitcoder, i predstavljao  fork ZtaCoin. To je prva kripto valuta, koja koristi 5 POW algoritma za povjecanje sigurnosti, još za još višej  pokrivenost??? mainera sa razlicatima algoritmima – SHA256d i Scrypt za ASIC mainera, Skein i Myr-Groestl za GPU mainera, Qubit za GPU i ??? maininga . HunterCoin, pokrenuti na kraju 2013, zapravo, prva bila iskorištila nekoliko algoritima POW za rudarstvo(SHA256d i Scrypt), no ona bila splanirana nije za rudarstvo, za isgacke na osnove jediniceci, koja na kraju dali su život drugima alt-kojnima.";

				case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
				Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,
				and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
					return "Myriad iznjedrila nekoliko slicni sebe, prvi od kojih bio Saffroncoin takoder korištenij 5 PoW algoritama. Digitalcoin i Digibyte napravili su  hard-fork, da bi mogli koristitit  3 i 5 PoW algoritima, takoder.";

				case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
				At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
				this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
					return "U kolovozu 2015 mreža Myriad bila hard-forknuta, da bi mogla ukljuciti u sebe upaliti jedino rudarstvo na algoritmima – Scrypt i SHA256d, cilju bila dobitak sigurnog heš reita mreži na ovih algoritmima . u tom vremenu vrijeme jedinici za svakog algoritma promjenili do 5 minuta(prije toga  2,5 minutice), da bi se moglo dobiti cjelokupni  vrijeme jedinici za svih algoritmima – 1 minutu( prije toga samo  30 sekunda). ovo mjerenje vuci krivu emisije gore sa pomocu stupenice 2?, to se ravna približno k 20 godinam.";

				// wallets
				case clean("Latest version is 0.11.3.1, released July 7th 2016. See "):
					return "Zadnja versija 0.9.2.17, izdana 7. srpanj 2016. Gledajte";
				case clean(" announcement & upgrade notes."):
					return " objava & popis ažuriranje";
				// mining
				case clean("Getting Started"):
					return "Uvod";
				case clean("Download a "):
					return "Prenesi ";
				case clean("wallet"):
					return "zaporno";
				case clean(", download a miner of the right type, find a pool and fire away..."):
					return ", spržite mainer koji se treba, pronadite pul i idete dalije...";
				case clean("Mining Tutorial Video"):
					return "Video trening za rudarstvo";
				case clean("Watch on "):
					return "Si oglejte";
				case clean("Youtube"):
					return "Youtube";
				case clean("Mining Software"):
					return "Programska oprema za rudarstvo";
				case clean("Use any SHA256d compatible ASIC"):
					return "Koristite bilo koji SHA256d-koji paše za ASIC";
				case clean("Use any Scrypt compatible ASIC"):
					return "Koristite bilo koji Scrypt-koji paše za ASIC ";
				case clean("sgminer for OpenCL GPU mining"):
					return "sgminer za rudarstvo prek OpenCL na graficni kartici (GPU)";
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
					return "P2Pool vozlišca";
				case clean("Run Your Own Node"):
					return "Da zacnete svoje vozlišce";
				case clean("Merge Mining Pools"):
					return "Bazeni rudarjenja v kombinaciji";
				case clean("zpool - The miners multipool"):
					return "zpool – multi-floor";
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
					return "Žerjav";
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
					return "Herkese açik";
				case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using
				SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
					return "Myriad –multi-algoritmik - ayni zamanda, mining için kullanilan, 5 hash fonksiyonlari gerçeklestiren bir jeton. ASIC-ler ve SHA256d algoritma kullanarak ve sadece kârli mayinli edilebilir Bitcoin aksine, Myriad SHA256d ASICS,Scrypt ASICS, GPUS & CPUs için kullanilabilir.";
				case clean("Secure"):
					return "Güvenli";
				case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Yescrypt —
				each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate.While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining.The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
					return "Miner 5 mevcut algoritmalar arasinda herhangi birini seçebilir – SHA256d, Scrypt, Myr-Groestl, Skein, veya Yescrypt – Bunlarin her birisinde blogun sabit bir hedef süresi var– 5 dakika. Genellikte, blok yaklasik her bir dakika sonra oluyor. Her bir algoritmin zorlugu onun hash oranina g?re degerlendiriliyor. ASIC-ler mininge grafik kartlar ile SHA256d algoritma ile etkilerken,Scrypt verimsizdir, diger algoritmalar ise mining küresini grafik kartlar ile domine ediyorlar. Multi-algoritmalar islemi 51% yardimiyla koruma teknigi kullanarak yeni bir ?zel ve inovatif yaklasim olusturuyor ,çünkü 51% bloklari elde etmek için büyük bir ekipman araligi gerekiyor.";
				case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
					return "SHA256d & Scrypt-ten olusan birlesik mining, farkli algoritmalar ile, büyuk bir mevcut hesaplama kapasiteler nedeniyle Myriada yarar almaya izin verdi.";
				case clean("Fair Distribution"):
					return "Adil dagitim";
				case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
					return "Premayn ve büyük mükafatli gizli sihirli bloklar eksiktir. Tüm ag kullanicilar Myriadi piyasa degeri ile  elde etmek için esit firsatlara sahiptirler";
				// technology
				case clean("Multi-Algorithm"):
					return "Multi-algoritmalar";
				case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
					return "ASIC, GPU ve mining-in CPU-si için uygun 5 algoritma:";
				case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
					return "Ilk kez cryptocurrency ?ncüsü tarafindan kullanilan, SHA256d hashing algoritmasi için iki round- Bitcoin.";
				case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
					return "Baslangiçta CPU-sadece hazirlanan sifre hashing algoritmasi, simdi Litecoin-den baslayarak, ASICs yardimiyla, çikarma için bir çok alternatif jetonlar tarafindan kullaniliyor.";
				case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
					return "Sadece Myriad için spesifik olan hash algoritma opsiyonu– Groestl –bu NIST SHA-3 hashing algoritmalar yarismasinin bes finalistlerin biriir.";
				case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
					return "NIST SHA-3 hash yarismanisinda, ilk ?nce Skeincoin tarafindan kullanilmis bes finalistler arasindan baska biri.";
				case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
					return "Baslangiçta CPU-sadece hazirlanan algoritma Qubit 5 NIST SHA-3 hash algoritmalar yarisma katilimcimari birlestiriyor– Luffa, Cubehash, SHAvite, SIMD ve ECHO.";
				case clean("Merge Mining"):
					return "Birlesen mining";
				case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use
				by coins using these algorithms, further securing the Myriad blockchain."):
					return "4002000 bloktan baslayarak, birlesen mining SHA256d ve Scrypt algoritmalar için mevcuttur. Bu Myriad-a su an baska jetonlar tarafindan kullanilan büyük bir hash oranlari nedeniyle yarar almaya izin verdi hem de blockchain güvenligini sagladi.";
				case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
					return "Birlesen mining,AuxPow olarak da bilinen mesela Bitcoin miningi için harcanan kaynaklari kullanmaya izin veriyor veya Myriad aginda bloklarin geçerligini onaylamak için, ayni zamanda herhagi bir ek yük tasimadan.";
				case clean("Distribution"):
					return "Dagitim ";
				case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
					return "Myriad aga 23 Subat 2014 yilda saat 18:30 UTC yayilmisti";
				case clean("first mined block"):
					return "Ilk bulunan blok";
				case clean(" came 4 minutes later, thus establishing that there was no premine."):
					return " 4 dakika sonra ortaya çikti, b?ylece hiçbir premayn olmadigini onayladi.";
				case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
					return "Baslangiçta, mükafat 1,000 MYR idi, ve her 967,680 blok ikiye b?lünüyordu (yaklasik 48 hafta). Maksimum jeton sayisi – 2 milliard MYR.";
				case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds
				per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds.
				In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
					return "Aslinda blok süresi 30 saniye idi, veya 150 saniye algoritma için. Ama 12 Temmuz 2015 topluluk, blok süresini 60 saniyeye arttirmaya karar Verdi, veya 300 saniye algoritma için. Bu karar ?1,401,001 bloktan yürülüge girdi. Halbuki Myriad agi düsük hash oranina ve yüksek zorluga sahipti, ortlama blok süresi 50 saniyeden fazla idi. Ek olarak aux-Pow, Scrypt ve SHA256d için baglanmis olmustu, bu blogun hedef süresini arttirdi ve dagitim dürüstugunün etkisini atlayarak daha iyi bir ag kordinasyonuna yol açti";
				case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners,
				Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first
				coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
					return "Myriad Subat ayin 2014 8bitcoder kullanici adiyla taninan adam tarafindan yayilmisti, ve Zetacoin-dan çatallanmisti. Bu, güvenligin arttirilmasi için 5 POW algoritmalar kullanan ilk cryptocurrency, hem de degisik algoritmali minerlerin büyük bir kapsamasi için- SHA256d ve Scrypt ASIC minerleri için, Skein ve Myr-Groestl GPU minerleri için, Qubit GPU ve CPU miningler için      
					2013 yilin sonunda yayilan HunterCoin, aslinda, mining için ilk olarak bazi POW algoritmalari kullanmisti,(SHA256d ? Scrypt), ama o mining için tasaralanmamisti, ve  daha sonra bir çok jetonlara dogum veren blockchain temelinde olan oyunlar içindi.";
				case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms.
				Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad,and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
					return "Myriad birkaç analoglar olusmasina neden oldu, bunlardan birincisi ayrica 5 PoW algoritmalar kullanan Saffroncoin idi. Ona g?re Digitalcoin ve Digibyte 3 ve 5 PoW algoritmalari kullanmak için hard-fork yaptilar.";
				case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.
				At this time the target block time for each algorithm was also changed to five minutes (previously 2.5 minutes), to achieve an overall block target time of 1 minute (previously 30 seconds);
				this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
					return "Agustos ayi 2015 Myriad agi Scrypt ve SHA256d algoritmali tek miningi etkinlestirmek için hard-fork yapilmisti. Amaç bu algoritmalarda istikrarli bir ag hash orani kazanmakti. O zaman, tüm algoritmalar için toplam blok süresini elde etmek için - 1 dakika(30 saniyeye kadar) blogun hedef süresini 5 dakikaya kadar degistirdiler(?nce 2,5 dakikaydi).Bu degisim emisyon curvesini 2x yardimiyla yukariya çekecek ve yaklasik 20 seneye esitler.";
				// wallets
				case clean("Latest version is 0.9.2.17, released November 7th 2015. See "):
					return "Son versiyon 0.9.2.17, 7ci Kasim 2015 yayildi. Bakmak";
				case clean(" announcement & upgrade notes."):
					return "?nons & güncelleme listesi";
				// mining
				case clean("Getting Started"):
					return " Tanitim";
				case clean("Download a "):
					return "Indir";
				case clean("wallet"):
					return "Çanta";
				case clean(", download a miner of the right type, find a pool and fire away..."):
					return ", dogru tip mineri indirin, pulu bulun ve ileriye...";
				case clean("Mining Tutorial Video"):
					return "Mining Video egitimi";
				case clean("Watch on "):
					return "Bakmak ";
				case clean("Youtube"):
					return "Youtube";
				case clean("Mining Software"):
					return "Mining Yazilim";
				case clean("Use any SHA256d compatible ASIC"):
					return "Herhangi bir SHA256d-uygun ASIC-i kullanin ";
				case clean("Use any Scrypt compatible ASIC"):
					return "Herhangi bir Scrypt-uygun ASIC-i kullanin ";
				case clean("sgminer for OpenCL GPU mining"):
					return "sgminer minng için OpenCL ekran karti üzerinde(GPU)";
				case clean("BitcoinTalk Thread"):
					return "üzerinde iplik BitcoinTalk";
				case clean("Windows Binaries"):
					return "Windows yürütülebilir";
				case clean("GitHub Source"):
					return "GitHub kaynak dosyalari";
				case clean("Suggested Command Line"):
					return "Komut istemine";
				case clean("Pools"):
					return "Pula";
				case clean("P2Pool nodes"):
					return "P2Pool dügümleri";
				case clean("Run Your Own Node"):
					return "Kendi dügümünüzü baslatmak için";
				case clean("Merge Mining Pools"):
					return "Pula Birlesen mining ";
				case clean("zpool - The miners multipool"):
					return "zpool – multipool";
				case clean("MultiPool"):
					return "MultiPool";
				// services
				case clean("Information & Resources"):
					return "Bilgi ve Kaynaklar";
				case clean("Exchanges"):
					return "Esanjörleri";
				case clean("Other"):
					return "Diger";
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
				return " Deschisa pentru oricare ";
			case clean("Myriad is multi-algo - the first coin to implement 5 simultaneous hash functions. Unlike Bitcoin, which can only be profitably mined using SHA256d ASICs, Myriad is open to SHA256d ASICS, Scrypt ASICS, GPUs & CPUs."):
				return " Myriad – este multi-algoritmica  - este prima moneda, care a întruchipat în via?a simultan 5 hash-func?ii, utilizate pentru minerit. În deosebire de Bitcoin, prin care este posibil de a minerit-a profitabil, utilizând ASICS ?i algoritmul SHA256d, Myriad este accesibila pentru Scrypt ASICS, GPUS & CPUs.";
			case clean("Secure"):
				return " Nu este periculoasa ";
			case clean("A miner can choose to mine using any of the 5 algorithms — SHA256d, Scrypt, Myr-Groestl, Skein, or Qubit —
			each has a target block time of 5 minutes. Overall, a block is found approximately every 1 minute. Each algorithm's difficulty is only affected by its own hash rate. While ASICs have rendered GPU mining on SHA256d & Scrypt unproductive, the remaining algorithms continue to be dominated by GPU mining. The multi-algo approach offers exceptional 51% resistance because a range of different hardware is needed to find 51% of the blocks."):
				return " Minerit-erul poate alege oricare din cele 5 algoritmi accesibile – SHA256d, Scrypt, Myr-Groestl, Skein sau Qubit – fiecare din ele are ca ?inta un interval de timp fixat pentru bloc – 5 minute. În genere, blocul se afla aproximativ fiecare minuta. În dependen?a de hash-rate al fiecarui algoritm se regleaza ?i complica?ia lui.
				În acela?i timp ASICS-ul afecteaza minerit-ul prin placile video cu algoritmul SHA256d, dar Scrypt-ul este neproductiv, restul algoritmilor domina sfera minerit-ului prin placile video. Metoda algoritmilor multiple deschide o abordare noua ?i exclusiva catre metodica de protec?ie cu ajutorul a 51%, deoarece pentru a ajunge la 51% de blocuri va fi necesar un spectru enorm de echipament.";

			case clean("Merge mining has been enabled on SHA256d & Scrypt, allowing Myriad to benefit from the massive hash power available."):
				return " Combinarea Minerit-ului prin algoritmi diverse, care include SHA256d & Scrypt, a permis Myriad-ului de a capata un avantaj prin accesul la puteri de calcul enorme disponibile .";

			case clean("Fair Distribution"):
				return " Distribu?ia onesta ";
			case clean("No premine or hidden fortunes possessed by insiders. Everyone has an equal opportunity to obtain Myriad at the market rate."):
				return " Lipsesc pre-mine-ul ?i blocurile magice cu premii mari. To?i utilizatorii re?elei au posibilita?i egale pentru a ob?ine Myriad la pre?ul de pia?a ";
			// technology
			case clean("Multi-Algorithm"):
				return " Algoritmi multiple ";
			case clean("5 Algorithms, catering for ASIC, GPU and CPU mining:"):
				return "5 Algoritmi accesibile pentru ASIC, GPU ? CPU al minerit-ului:";
			case clean("Two rounds of the SHA256d hashing algorithm, first used by the pioneer cryptocurrency Bitcoin."):
				return " Doua runde pentru algoritmile de hash SHA256d, utilizare pentru prima data de pionerul valutei crypto - Bitcoin.";
			case clean("Designed to be a CPU-only password hashing algorithm, now mined with ASICs on many altcoins, starting with Litecoin."):
 				return " Proiectat din start pentru minerit-ul sub CPU, în prezent este utilizat pentru dobândirea multiplelor monede alternative cu ajutorul ASICs-ului, începând cu Litecoin.";
			case clean("A Myriad-specific variant of the Groestl hash algorithm, one of the five finalists in the NIST SHA-3 hash competition."):
				return " Specific numai pentru Myriad varianta hash-algoritmului – Groestl – reprezinta una din cele cinci finaliste NIST SHA-3 al concursului de hash-are a algoritmilor. ";
			case clean("Another of the five finalists in the NIST SHA-3 hash competition, first used by Skeincoin."):
				return " Înca unul din cele cinci finaliste al concursului de hash-are NIST SHA-3, care a fost utilizat keincoin.";
			case clean("Originally a CPU-only algorithm, Qubit combines 5 competitors in the NIST SHA-3 hash competition - Luffa, Cubehash, SHAvite, SIMD and ECHO."):
				return " Proiectat din start numai sub CPU algoritmul Qubit combina 5 participan?i NIST SHA-3 al concursului de hash-algoritmi – Luffa, Cubehash, SHAvite, SIMD ? ECHO.";
 			case clean("Merge Mining"):
				return " Minerit-ul combinat ";
			case clean("Since block 4002000, merge mining has been allowed on the SHA256d and Scrypt algorithms. This has enabled Myriad to take advantage of the huge hashrates currently in use by coins using these algorithms, further securing the Myriad blockchain."):
				return "Începând cu blocul 4002000 minerit-ul combinat este accesibil pentru algoritmile SHA256d ? Scrypt. Acest fapt a permis Myriad de a fi avantajata, mul?umit  hash-rate-urilor imense, utilizate în prezent de alte monede, concomitent ?i a asigurat securitatea blockchain-ului";
			case clean("Merge Mining, or AuxPow, allows the work being done for a parent coin (such as Bitcoin or Litecoin) to be used to find valid blocks on Myriad's blockchain, with no extra load or performance impact to the parent coin."):
				return "Minerit-ul combinat, cunoscut ca AuxPow, permite folosirea resurselor, cheltuite, de exemplu, pe minerit-ul Bitcoin sau Litecoin pentru confirmarea validita?ii blocurilor în re?eaua Myriad fara asumarea oricarei încarcari suplimentare.";
			case clean("Distribution"):
				return " Distribuirea ";
			case clean("Myriad was released to the wild on February 23, 2014 at 18:30 UTC. The "):
				return " Myriad a fost lansata în re?ea în data de 23 februarie ora 18:30 UTC ";
			case clean("first mined block"):
				return " primul bloc gasit ";
			case clean(" came 4 minutes later, thus establishing that there was no premine."):
				return " a aparut peste 4 minute, prin aceasta confirmând faptul, ca nu a fost nici un pre-mine ";
			case clean("The initial reward was 1,000 MYR, halving every 967,680 blocks (approximately 48 weeks). Total supply is approximately 2 billion MYR."):
				return " Din start, premiul era de 1,000 MYR, ?i se înjumata?ea la fiecare 967,680 blocuri (aproximativ 48 de saptamâni). Numarul maximal de monede – 2 miliarde MYR.";
			case clean("Initially, the target blocktime was 30 seconds, or 150 seconds per algorithm. On the 12th of July, 2015, the community decided to increase the target block time to 60 seconds, or 300 seconds per algorithm, effective at block 1,401,001. At the time, Myriad suffered from low hash rate and extensive difficulty hopping on Scrypt and SHA256d, causing the actual average block time to be over 50 seconds. In addition to enabling aux-PoW on Scrypt and SHA256d, the increase in target block time lead to greater consistency on the network, without affecting fairness of distribution."):
 				return " Ini?ial, timpul blocului era de 30 secunde sau 150 secunde pe algoritm. Însa din 12 iulie 2015 comunitatea a decis sa majoreze timpul blocului pâna la 60 secunde sau 300 secunde pe algoritm. Aceasta decizie a fost activate de la blocul ?1,401,001. În acela?i timp, când re?eaua Myriad aveaun hash-rate scazut ?i era maxim complicat, timpul mediu al blocului era de peste 50 secunde. În plus era activat aux-Pow pentru Scrypt ?i SHA256d, fapt, ce a ridicat timpul ?inta al blocului ?i a adus la o coordonare mai buna în re?ea, ocolind efectul asupra integrita?ii distribu?iei ";
			case clean("Myriad was launched in February 2014 by 8bitcoder, forked from Zetacoin. It was the first cryptocurrency to use five proof-of-work algorithms in an effort to increase security as well as broaden the base of people who could mine it - SHA256d and Scrypt for ASIC miners, Skein and Myr-Groestl for GPU miners, and Qubit for GPU and CPU miners. Huntercoin, launched in late 2013, was actually the first coin to use multiple PoW algorithms (SHA256d and Scrypt), but its focus was not on mining, rather on a blockchain-based game that produced the large majority of new coins."):
				return "Myriad a fost lansata în februarie 2014 de utilizatorul cu Nickname 8bitcoder ?i reprezinta un fork ZtaCoin. Acesta este prima crypto valuta, care utiliza 5 POW ale algoritmilor pentru ridicarea securita?ii, precum ?i pentru atragerea  mai multor maine-ri cu algoritmi diferite – SHA256d ?i Scrypt pentru ASIC maine-re, Skein ?i Myr-Groestl pentru GPU maine-re, Qubit pentru GPU ?i CPU maining.
				HunterCoin, lansata la finele anului 2013, de fapt, prima a utilizat mai multe algoritmi POW pentru maining (SHA256d ? Scrypt), însa ea a fost proiectata nu pentru maining, dar pentru jocuri bazate pe blockchaine, care ulterior a dat via?a mai multor alt-coin-e.";

			case clean("Myriad has spawned several spin-offs, the first of which was Saffroncoin, also utilizing five PoW algorithms. Digitalcoin and Digibyte both hard-forked to use three and five PoW algorithms, respectively. Unitus is another five-algo PoW coin that shares several PoW algos with Myriad, and allows users to merge-mine on all five of its algos. Auroracoin and Verge have also announced plans to fork to multi-algo."):
				return "Myriad a generat mai multe analogii ei însu?i, prima din care era Saffroncoin, care, de asemenea, utiliza  5 PoW algoritmi. Digitalcoin ?i Digibyte a efectuat hard-fork, pentru a utiliza 3 ?i 5 PoW, corespunzator. O alta moneda, care utilizeaza algoritmul de verificare a serviciului cu ajutorul a cinci algoritmi ?i con?ine în sine un minerit unic – Unitus. Auroracoin ?i Verge, de asemenea, au anun?at despre dorin?a de a utiliza sistemul multi-algoritm.";
			case clean("In August 2015 Myriad hard-forked to allow merge-mining on its SHA256d and Scrypt algorithms in an effort to improve security and achieve a more stable hashrate on those two algorithms.	At this time the target block time for each algorithm was also changed to five minutes (previously 2.5  minutes), to achieve an overall block target time of 1 minute (previously 30 seconds); this change will stretch the emission curve out by a factor of 2x, to approximately 20 years."):
 				return "În august 2015 re?eaua Myriad a fost hard-for?ata pentru a fi inclusa într-un minerit unic pe algoritmile – Scrypt ? SHA256d,scopul fiind atingerea hash-rate-ului stabil al re?elei, ce func?ioneaza pe aceste algoritmi. În acela?i timp, timpul ?inta al blocului pentru fiecare algoritm a fost modificat pâna la 5 minute (a fost 2,5 minute), pentru a ajunge la timpul general al blocului pentru toate algoritmile – 1 minut (a fost 30 secunde). Aceasta modificare va trage curba ascendenta a emisiilor în sus cu ajutorul gradului 2x ?i-l va egala aproximativ la 20 de ani.";
			// wallets
			case clean("Latest version is 0.11.3.1, released July 7th 2016. See "):
 				return "Ultima versiune 0.11.3.1, a fost lansata pe 7 Iulie 2016. Privi?i ";
			case clean(" announcement & upgrade notes."):
				return " Anun? & lista anun?urilor ";
			case clean("Desktop"):
				return "Desktop";
			case clean("Windows"):
				return "Windows";
			case clean("32-bit Installer (11.5 MB)"):
				return "32-bi?i de Instalare (11.5 MB)";
			case clean("64-bit Installer (11.5 MB)"):
				return "64-bi?i de Instalare (11.5 MB)";
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
				return "Portofel hârtie ";
			// mining
			case clean("Getting Started"):
				return " No?iuni De Baza ";
			case clean("Download a "):
				return " Descarcati o versiune ";
			case clean("wallet"):
				return "Portofel ";
 			case clean(", download a miner of the right type, find a pool and fire away..."):
 				return " download minerit-ul de tip necesar, gasi?i pool-ul ?i înainte… ";
			case clean("Mining Tutorial Video"):
				return " Tutorial  Video de Minerit ";
			case clean("Watch on "):
				return " Uita-te pe ";
			case clean("Mining Software"):
				return "Minerit Software-ul ";
			case clean("Use any SHA256d compatible ASIC"):
				return " Utiliza?i orice  SHA256d-compatibil ASIC ";
			case clean("Use any Scrypt compatible ASIC"):
				return " Utiliza?i orice  Scrypt-compatibil ASIC ";
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
				return " GitHub Sursa ";
			case clean("Suggested Command Line"):
				return " Sugestii pentru Linia de comanda ";
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
				return " Informa?ii ?i Resurse ";
			case clean("Block Explorer(1)"):
				return " Browsere blocuri (1)";
			case clean("Block Explorer(2)"):
				return " Browsere blocuri (2)";
			case clean("Abe Explorer"):
				return "Abe Browsere";
			case clean("Network Status"):
				return " Stare Re?ea ";
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
				return "Testnet informa?ie";
			case clean("cryptap.us Myriad page"):
				return " cryptap.us Myriad pagina ";
			case clean("Reddit/IRC myrbot information"):
				return "Reddit/IRC myrbot informa?ie ";
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
