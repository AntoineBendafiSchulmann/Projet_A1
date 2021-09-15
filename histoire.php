<!DOCTYPE html>
<html>
	<head>
		<title>Histoire et Relations perso</title>
		<link rel="stylesheet" type="text/css" href="style/histoire.css">
		<meta name="description" content="Ma description">
		<meta name="author"content="Bendafi-Schulmann Antoine">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1"> <!-- pour installer le responsive pour adapter appareils mobiles -->
	</head>
	<body class="light"> <!-- corps de la page -->

		<div class="btn-toggle">Night</div>
		<header> <!-- haut de la page -->
		<h1>Pyke</h1>
			
		<?php
		
		session_start();

		if(isset($_SESSION["status"]) && $_SESSION['status'] == 'admin') {
			?><a href="dashboard.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php
		}elseif(isset($_SESSION["user"])) {
			?><a href="user_interface.php"><div class="user_connected"><strong>Logged in as <?php echo $_SESSION['user'] ?></strong></div></a><?php 
		}else{ 
			?><a href="connexion.php"><div class="connection"><strong>Login / Register</strong></div></a><?php
		}

		?>
		</header>
		<nav> <!-- menu du site -->
			<div id="menu"></div>
			<div class="menu2"><strong>History/relationships</strong></div>
			<a href="index.php"><div class="menu1"><strong>Home</strong></div></a>
			<a href="galerie.php"><div class="menu3"><strong>Gallery</strong></div></a>
			<a href="contact.php"><div class="menu4"><strong>Contact</strong></div></a>
		</nav>
		<section>
			<p id="biographie">Pyke lived his youth like many in Bilgewater: working at the slaughterhouse docks. All day, every day, monstrous creatures from the depths were brought to the docks. He was employed in an area known as the Bloody Dock, as the tide itself wasn't enough to wash away the red tint that lapped beneath the wooden pontoons.

He was accustomed to his profession: dreadful work and meager pay. Day after day, Pyke saw heavy gold purses pass through the hands of captains and their crews in exchange for the huge carcasses he cut up with the other workers. The urge to own more than a few copper coins seized him and he managed to get himself hired on a ship. Few sailors dared to hunt in the traditional Snake Island way: pouncing on the huge prey, hooks in hand, to start chopping them out while they were still alive. Pyke, in this regard, was fearless and extremely skillful. He quickly gained a reputation as the best harpooner one could buy for a golden kraken. He knew the meat was worthless compared to some of the still fresh organs of the biggest and most dangerous beasts.

Depending on the difficulty of the hunt, each sea monster had its price. The most wanted in Bilgewater was the squalacanth. In its mouth, with its sharp teeth like blades, were pockets of an organic material so precious that it was sought after throughout Runeterra, for various magical distillations: with a single flask of this oil with blue shards, one could buy ten times a ship and its crew. But it was while he was hunting with an inexperienced captain that Pyke learned where a life of blood and guts could lead.

During their hunt, the sailors suddenly saw a huge squalacanth appear, which opened its mouth wide enough to reveal an impressive quantity of cerulean oil. Several harpoon lines immobilized the beast, and although it was taller and older than anything he had seen before, Pyke threw himself into its mouth without hesitation.
As he began to work, a deep vibration was felt in the creature's throat. A maelstrom of bubbles burst the ocean's surface and a tidal wave began to push the ship's hull. The captain panicked and cut Pyke's lifeline. The last thing the harpooner saw before the beast's jaws closed was the look of fear from his comrades. Then he was swallowed alive.

But that wasn't the end for Pyke.

In the deepest abyss of the ocean, crushed by the unbearable pressure and still locked in the mouth of the monster, he opened his eyes again. There were blue lights all around him, by the thousands, and they seemed to be looking at him. Echoes of something ancient and mysterious filled his brain, crushing his mind, flooding him with visions of all he had just lost while others grew fat.

A new hunger seized Pyke: the desire for revenge. He would plunge the corpses of those who had wronged him into the depths.

Back in Bilgewater, no one thought much of this death. The job was dangerous and accidents were frequent. But as the months passed, strange events eventually fueled the rumors. Many ship captains were found eviscerated at dawn. It was whispered in bars that it was a supernatural killer who had been harmed and who was taking revenge on his former comrades, the sailors of a cursed ship called The Terror. In the past, being a captain was a source of pride; it was becoming a source of fear.

And soon, it was not just the captains, but also lieutenants who were killed, long-haul officers, bankers… anyone associated with the bloody slaughterhouse market. A new name appeared on the research posters: a thousand kraken reward for the Ripper of the Abyss.

Driven by memories the depths warped, Pyke succeeded where most failed: he sowed fear in the hearts of unscrupulous businessmen, killers and scoundrels of the high seas. Yet no one remembers ever seeing a ship called The Terror docked at Bilgewater docks.

Bilgewater, the town of monster hunters, has become a monster's hunting ground. <br><strong>And Pyke has no intention of stopping.</strong></p>
		
			<div class="video">
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nSSKcUI_aF8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>

			</div>
		</section>

		<script src="javascript/histoire_darkmode.js">
				
	

			</script>
			
	</body>
</html>