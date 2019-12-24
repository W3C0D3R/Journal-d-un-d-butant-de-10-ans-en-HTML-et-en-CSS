<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css">
	<title>Qu'est-ce que le web et qu'est-ce que le net ?</title>
	<style>

		Clignote{
			-webkit-animation: blink 1s linear infinite;
			-moz-animation: blink 1s linear infinite;
			animation: blink 1s linear infinite;
		}

		@-webkit-keyframes blink{
			0%{opacity: 1;}
			50%{opacity: 0;}
			100%{opacity: 1;}

		}
		@-moz-keyframes blink{
			0%{opacity: 1;}
			50%{opacity: 0;}
			100%{opacity: 1;}

		}
		@keyframes blink{
			0%{opacity: 1;}
			50%{opacity: 0;}
			100%{opacity: 1;}

		}

	</style>
</head>
<body>
<center>
	<h1><span class="miniature">Internet</span></h1>
</center>

<h1>1.Comment est stocké Internet ?</h1>

<p>Pour faire fonctionner notre site Web, on a besoin d'un serveur (ordinateur allumé 24h/24 7j/7 pour que le site tourne).</p>
<center>
<img src="images/serveur.png">
</center>

<p>Un serveur peut très bien tourner sur votre ordinateur mais attention car il faudra laisser allumé votre ordinateur pendant toute la journée et même la nuit.</p>
<p>Donc cela peut prendre feu ou bien faire sauter votre maison donc il est préferable d'utiliser la 2ème solution !</p>

<h2>2ème soultion :</h2>

<p>Pour éviter les risques, des entreprises stocks vos serveurs 24h/24 7j/7 dans un rayon climatisé appelé <Clignote>DATACENTER</Clignote></p>

<p>Un datacenter est un entrepot climatisé rempli de baies de serveurs (armoire remplie de serveurs)</p>
<center>
<img src="images/datacenter">
</center>

<p><a href="index.php">Accueil</a></p>
</body>
</html>