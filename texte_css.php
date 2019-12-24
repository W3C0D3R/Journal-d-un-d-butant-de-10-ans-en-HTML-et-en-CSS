<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="12345.css">
	<title>Formatez du texte</title>
</head>
<body>
<center>
<h1><span class="miniature">Formatez du texte CSS</span></h1>
</center>

<h2>1.La taille du texte</h2>
<p>Pour changer la taille du texte, on utilise la propriété CSS font-size :</p>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	font-size: ;
}
</code>
</pre>
</div>
<p>Si l'on exécute ce code, rien ne se passera car nous n'avons pas donné une taille aux balises &lt;p&gt;</p>

<p>Pour définir une taille aux balises &lt;p&gt;, on écrit après les deux points la taille en pixel (Pour le test, on va dire 30px) :</p>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	font-size: 30px;
}
</code>
</pre>
</div>
<p>Si l'on teste cela, ça rendra :</p>
<img src="images/sionagarder.png">
<h3>Si on a gardé les modifications anciennes</h3>

<p>Et si on a recommencé :</p>
<img src="images/etsionrecommencer.png">

<p>Juste pour l'anecdote, on peut très bien remplacer l'unité pixel en em (ex: 0.2em) ou bien cm (ex: 0.3cm) ou encore en mm (ex: 123mm)</p>

<h2>2.La police (de caractère)</h2>

<p>Pour changer la police, on prend notre code avec les 20 pixels et on le transforme comme ceci :</p>
<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	font-size: 30px;
	font-family: "Comic Sans MS","Impact","Georgia","sans-serif";
}
</code>
</pre>
</div>
<p>La propriété CSS font-family sert à changer la police.</p>
<p>Dans le code, on demande à l'ordinateur d'utiliser en priorité la police Comic Sans MS.Si il ne l'a trouve pas, il ira chercher la police Impact puis la police Georgia et si vraiment il ne trouve rien, par désespoir,  il utilisera la police par défaut sans-serif. </p>

<p>Voici les polices que presque tout les ordinateur connaissent :</p>

<ul>
<li><p style="font-family: Arial">Arial</p></li>
<li><p style="font-family: Arial Black">Arial Black</p></li>
<li><p style="font-family: Comic Sans MS">Comic Sans MS</p></li>
<li><p style="font-family: Courier New">Courier New</p></li>
<li><p style="font-family: Georgia">Georgia</p></li>
<li><p style="font-family: Impact">Impact</p></li>
<li><p style="font-family: Times New Roman">Times New Roman</p></li>
<li><p style="font-family: Trebuchet MS">Trebuchet MS</p></li>
<li><p style="font-family: Verdana">Verdana</p></li>
</ul>
<p>Il y a une autre manière plus compliquée qui permet de faire télécharger les polices à l'ordinateur sans que le visiteur ne s'en aprerçoit mais c'est plus compliqué et pas encore à votre portée, vu que je ne ferai pas de tuto là dessus, si vous voulez faires de recherches là dessus,le mot-clé est @font-face.</p>

<h2>3.Italique, gras, souligné</h2>

<h3>Italique</h3>
<p>Pour mettre un texte en talique, on utilise la propriété CSS font-style avec le mot clé italic :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	font-style: italic;
}
</code>
</pre>
</div>

<p>Cela nous fera :</p>
<img src="images/cela.png">

<p>Ou bien :</p>
<img src="images/ceci.png">

<h3>Gras</h3>
<p>Pour mettre un texte en gras, on utilise la propriété CSS font-weight avec le mot clé bold :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	font-weight: bold;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/fera.png">

<p>Ou bien :</p>

<img src="images/bien.png">

<h3>Souligné</h3>
<p>Pour souligné du texte en CSS, on utilise la propriété text-decoration avec le mot clé underligne :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	text-decoration: underline;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/yes.png">

<p>Ou bien :</p>

<img src="images/ouaip.png">

<h3>Barré</h3>
<p>Pour barré du texte en CSS, on utilise la propriété text-decoration avec le mot clé line-through :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	text-decoration: line-through;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/ehmerde.png">

<p>Ou bien :</p>

<img src="images/ehnon.png">

<h2>4.L'alignement</h2>
<p>Pour aligner un élément à gauche, on uilise la propriété CSS text-align avec le mot-clé left :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	text-align: left;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/left.png">

<p>Ou bien :</p>

<img src="images/left2.png">

<p>Pour aligner un élément à droite, on uilise la propriété CSS text-align avec le mot-clé right :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	text-align: right;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/right.png">

<p>Pour centrer un élément, on uilise la propriété CSS text-align avec le mot-clé center :</p>

<div class="emulateur">
<pre id="r-431816" data-claire-element-id="431816"><code data-claire-semantic="css">p
{
	text-align: center;
}
</code>
</pre>
</div>

<p>Ça fera :</p>

<img src="images/center.png">

<p><a href="css.php">CSS</a></p>
<p><a href="html.php">HTML</a></p>

</body>
</html>