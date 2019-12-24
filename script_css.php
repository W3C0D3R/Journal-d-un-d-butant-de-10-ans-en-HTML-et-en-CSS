<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css">
	<title>Notre premier script CSS</title>
</head>
<body>
<center>
	<h1><span class="miniature">Écrire notre premier script CSS</span></h1><br><br>

<p>Nous avons beaucoup progressé sur HTML mais pourquoi ne pas s'améliorer ?</p>
<p>Dans ce cours, je vous propose d'étudier et d'écrire un petit script CSS :</p>
</center>

<h2>1.Le fichier CSS</h2>
<p>Pour faire du CSS, je vous demanderai d'avoir un fichier CSS externe.Un fichier CSS fini toujour par un <strong>.css</strong></p>
<p>Pour indiquer au fichier HTML d'utiliser le CSS, on écrit :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;link rel="stylesheet" type="text/css" href="nom_du_fichier.css"&gt;
</code>
</pre>
</div>
</center>

<p>Dans la balise &lt;head&gt; :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;link rel="stylesheet" type="text/css" href="nom_du_fichier.css"&gt;
	&lt;title&gt;Premier pas en CSS&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
</code>
</pre>
</div>
<p>Juste avant qu'on commence avec le CSS j'aimerais que vous écriviez ça dans le fichier CSS :</p>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">P
{
	color:red;
}
</code>
</pre>
</div>

<p>Et pour le script html :</p>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
	&lt;meta charset="utf-8"&gt;
	&lt;link rel="stylesheet" type="text/css" href="nom_du_fichier.css"&gt;
	&lt;title&gt;Premier pas en CSS&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
		&lt;h1&gt;Bienvenue !&lt;/h1&gt;
		&lt;p&gt;Aimes-tu mon site ?&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
</pre>
</div>

<p>Vous verrez normalement :</p>
<img src="images/normalement.png">

<h2>2.Étudier le script CSS</h2>
<p>reprenons le script CSS :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">p
{
	color:red;
}
</code>
</pre>
</div>
<p>Le p correspond à la balise &lt;p&gt;</p>
<p>Ça indique au CSS que nous devons appliquer les changements qu'à cette balise !</p>

<p>Le tout est contenu dans des accolades.</p>

<p>Et, pour finir, </p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">color:red;

</code>
</pre>
</div>

<p>Sert à dire en quel couleur sera le texte. En l'occurence, il sera en rouge.</p>

<h2>3.Information importante</h2>
<p>Au début, je vous ai demandé d'avoir un certain script HTML mais, il ne faut pas mettre ça à chaque fois que vous faites du CSS.Je vous ai fait écrire ça pour avoir la balise &lt;p&gt; et une autre pour voir si tout change ou pas !</p>

<center>
<div class="astubiencompris">
	<h1>As-tu bien compris ?</h1>
	<ul>
		<li>Comment indique-t-on à notre code HTML de se connecter avec le code CSS ?</li>
		<li>Quelle est la différence entre HTML et CSS</li>
	</ul>
	<h2>Travaux pratiques :</h2>
	<ul>
		<li>Tu dois créer un script HTML et changer un élément de la page</li>
	</ul>
</div>
</center>

<p><a href="index.php">Accueil</a></p>
</body> 
</html>