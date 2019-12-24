<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css">
	<title>Cours en rapport avec CSS</title>
	<style>
			div.float {
			 float: left;
			 padding:10px;
			 }
		.carre { width:110px; height:20px; }
	</style>
</head>
<body>
<center>
	<h1><span class="miniature">Comment ajouter un peu de couleur et un fond sur une page HTML</span></h1>
</center>

<p>Avant de commencer, j'aimerais vous faire voir la liste des couleurs en CSS :</p>

<div class="float">
<div class="carre" style="background-color:White;"></div></div><p>White</p>

<div class="float">
<div class="carre" style="background-color:Silver;"></div></div><p>Silver</p>

<div class="float">
<div class="carre" style="background-color:Gray;"></div></div><p>Gray</p>

<div class="float">
<div class="carre" style="background-color:Black;"></div></div><p>Black</p>

<div class="float">
<div class="carre" style="background-color:Red;"></div></div><p>Red</p>

<div class="float">
<div class="carre" style="background-color:Maroon;"></div></div><p>Maroon</p>

<div class="float">
<div class="carre" style="background-color:Lime;"></div></div><p>Lime</p>

<div class="float">
<div class="carre" style="background-color:Green;"></div></div><p>Green</p>

<div class="float">
<div class="carre" style="background-color:Yellow;"></div></div><p>Yellow</p>

<div class="float">
<div class="carre" style="background-color:Olive;"></div></div><p>Olive</p>

<div class="float">
<div class="carre" style="background-color:Blue;"></div></div><p>Blue</p>

<div class="float">
<div class="carre" style="background-color:Navy;"></div></div><p>Navy</p>

<div class="float">
<div class="carre" style="background-color:Fuchsia;"></div></div><p>Fuchsia</p>

<div class="float">
<div class="carre" style="background-color:Purple;"></div></div><p>Purple</p>

<div class="float">
<div class="carre" style="background-color:Aqua;"></div></div><p>Aqua</p>

<div class="float">
<div class="carre" style="background-color:Teal;"></div></div><p>Teal</p>


<h2>Le fond</h2>

<p>Pour ajouter une image de fond en CSS, on ajuste dans la balise &lt;body&gt;.</p>

<p>Dans la balise &lt;body&gt;, on utilise la propriété background-color ou background-image</p>

<p>Pourquoi 2 propriétés CSS ?</p>
<p><span class="arapetissire">C'est tout simplement parce que dans la première propriété  qui est background-color, on met juste une couleur de fond.Alors que dans la deuxième propriété qui est background-image, on insert une image.</span></p>

<p>Testons d'abord la propriété background-color.</p>
<p>Comme vous l'avez sûrement remarqué, on parle de couleur donc on se sert de ma petite liste du début du cours !</p>

<p>Petit exemple :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">body
{
	background-color: Teal;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/teal.png">

<h3>Propriété background-image</h3>

<p>La propriété pour mettre une image de fond est background-image, comme valeur mettez : url("nom_du_fichier.png").</p>

<p>Exemple :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">body
{
	background-image: url("wallpaper_ex.png");
}
</code>
</pre>
</div>

<p>Si j'éxécute le code :</p>

<img src="images/code.png"><br><br>

<center>
	<div class="astubiencompris">
		<h1>As-tu bien compris ?</h1>
		<ul>
			<li>Quelle propriété CSS sert à mettre un fond d'écran (en image) ?</li>
			<li>Quelle propriété CSS sert à mettre un fond (en couleur) ?</li>
				<h2>Travaux pratiques :</h2>
			<li>Fait un site avec une image de fond et <a href="mailto:adam.html.css@gmail.com">envoie-le moi</a></li>
		</ul>
	</div>
</center>

<p><a href="css.php">CSS</a></p>
<p><a href="html.php">HTML</a></p>
</body>
</html>