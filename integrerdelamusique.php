<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css">
	<title>Intégrer de la musique sur une page HTML</title>
</head>
<body>

<center>
<h1><span class="miniature">Intégrer de la musique dans une page HTML</span></h1>
</center>
<p>Pour intégrer de la musique, je vous demanderais d'avoir un fichier audio.</p>

<p>Voici la première ligne de code que l'on va expliquer juste après :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;video controls width="500" height="30"&gt;
</code>
</pre>
</div>
</center>

<p>Déjà, tout est stocké dans la balise video.</p>
<p>Dans la balise video, on trouve controls qui sert à dire que l'on peut activer/désactiver le son ou bien avancer/reculer dans la vidéo.</p>
<p>On y trouve width qui définit la largeur et height la hauteur.</p>

<p>Deuxième ligne :</p>
<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;source src="1.mp3"&gt;
</code>
</pre>
</div>
</center>

<p>Sur la deuxième ligne, source src c'est que img src (c'est là où on insert !)</p>

<p>Et puis on ferme le tout et c'est finit !</p>

<h2>On fait le test ??</h2>

<video controls width="500" height="30">
	<source src="1.mp3">
</video>

<p>Et oui, ça marche !</p>

<p>Si vous savez faire ça pour la musique, vous savez aussi le faire pour la vidéo :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;videos controls width="500" height="300"&gt;
	&lt;source src="1.mp4"&gt;
</code>
</pre>
</div>
</center>

<h2>On fait le test ??</h2>

<video controls width="500" height="300">
<source src="1.mp4">
</video>

<p><a href="index.php">Accueil</a></p>

</body>
</html>
