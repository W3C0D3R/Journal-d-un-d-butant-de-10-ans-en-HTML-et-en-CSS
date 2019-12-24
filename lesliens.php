<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css">
	<title>Créez des liens</title>
</head>
<body>
	<center>
	<h1><span class="miniature">Les liens :</span></h1><br><br>
<img src="images/html_css.png"/>
</center>

<h2>1. La navigation de page en page :</h2>

<h3>Vous ne voyez pas ce que c'est ?</h3>
<h3>Petit exemple ?</h3>

<p><a href="index.php">Acceuil</a></p>

<h3>Pour commencer, on va ouvrir des balises P et à l'intérieur des A :</h3>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="exemple.html"&gt;&lt;Acceuil&gt;/a&lt;&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Sur mon code, j'ai écrit à un moment donné <em>exemple.html</em> en fait, c'est le nom du fichier de l'acceuil de mon site !</p>
<p>Ne mettez pas <em>exemple.html</em> dans votre code sinon ça ne va pas fonctionner !</p>
<p>Je dis que ça ne peut pas fonctionner mais réellement ça peut fonctionner mais il faut avoir un fichier intitulé <em>exemple.html</em></p>

<h3>Testez ce code (en changeant le nom du fichier !) puis continuez le cours...</h3>

<h2>2. Aller directement sur un autre site :</h2>

<p>Dans ce chapitre, ça va être de la révision de ce qu'on a fait avant.</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="exemple.html"&gt;&lt;Acceuil&gt;/a&lt;&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Voici notre ancien code !</p>

<p>Nous allons maintenant le modifier comme ceci :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="https://openclassrooms.com"&gt;&lt;OpenClassrooms&gt;/a&lt;&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Si l'on exécute ce programme, on se redirigera bien sur le site d'<a href="https://openclassrooms.com">OpenClassrooms</a></p>

<h3>Une petite bulle sous chaques liens...</h3>

<p>Bonjour. Souhaitez-vous visiter <a href="https://openclassrooms.com" title="Ce site a été développé par Mathieu Nebra et Pierre Dubuc">OpenClassrooms</a> ?</p>

<p>Pour faire ça, changer un peul'ancien code :</p>
<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="https://openclassrooms.com"&gt;&lt;OpenClassrooms&gt;/a&lt;&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Et mettez :</p>
<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="https://openclassrooms.com" title="Ce site a été développé par Mathieu Nebra et Pierre Dubuc"&gt;OpenClassrooms&gt;&lt;/a&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>
<p>Le test :</p>

<p>Bonjour. Souhaitez-vous visiter <a href="https://openclassrooms.com" title="Ce site a été développé par Mathieu Nebra et Pierre Dubuc">OpenClassrooms</a> ?</p>
<p>Si vous restez quelques secondes avec la souris pointée sur ce lien, un texte apparaîtra !</p>

<h2>3. Envoyer un mail :</h2>
<p>On va encore garder l'ancien code source :</p>
<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="https://openclassrooms.com" title="Ce site a été développé par Mathieu Nebra et Pierre Dubuc"&gt;OpenClassrooms&gt;&lt;/a&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>On va le modifier :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="mailto:votrenom@bidule.com"&gt;Envoie-moi un e-mail !&lt;/a&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Et le tester !</p>

<h2>4. Faire faire télécharger un fichier à quelqu'un</h2>

<p>On va encore et encore reprendre l'ancien code source !</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="mailto:votrenom@bidule.com"&gt;Envoie-moi un e-mail !&lt;/a&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>

<p>Et le modifier !</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;p&gt;&lt;a href="monfichier.zip"&gt;Télécharge ce fichier&lt;/a&gt;&lt;/p&gt;
</code>
</pre>
</div>
</center>
<p>Par texte</p>

<p>On peut aussi le faire avec une image :</p>

<center>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="html">&lt;a href="monfichier.zip"&gt;&lt;img src="images/download_pdf.png"&gt;&lt;/a&gt;
</code>
</pre>
</div>
</center>

<p><a href="index.php">Accueil</a></p>
<p><a href="codessources.html">Les codes sources</a></p>
</body>
</html>