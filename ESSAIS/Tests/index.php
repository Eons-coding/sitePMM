<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="visiteur.css" />
    <title>Accueil</title>
</head>

<body>
    <span id="topAnchor"></span>
<header>
    <h1>TITRE HEADER</h1>
    <script> echo "test";
        /* G�n�ration d'un nombre al�atoire */
        var in_nb ;
        in_nb = Math.round(Math.random()*100) ; /* x100 car le nombre g�n�r� vaut entre 0 et 1 */

        /* Analyse de valeur */
        function nbAnalyse(){
            if(in_nb == 0){
                alert("0") ;
            }
            else if(in_nb < 1){
                alert("1") ;
            }
            else{
                alert("Default") ;
            }
        }

        /* Traitement de password */
        var in_paswd ;
        function verifyPaswd(){
            in_paswd = document.security_gate.password.value;
            if(in_paswd == "paswdTest"){
                alert("Vous avez le droit d�entrer!");
            }
            else{
                alert("Vous n�avez PAS le droit d�entrer");
            }
        }

        /* Cr�ation de tableau */
        tab = ["1er","2e","3e","4e","5e","6e"] ;
        alert(tab.length);
        function Main(){
            nb = parseFloat(document.tableau.nb.value) - 1 ;
            alert("Le titre correspondant au num�ro est :" + tab[nb]) ;
        }
    </script>

    <p>Veuillez entrer votre mot de passe:</p>
    <form name="security_gate">
        <input type="Text" name="password">
        <input type="Button" value="ENTRER" onclick="verifyPaswd();">
    </form>
</header>
<nav>
    <ul>
        <li><a href="accueil.html">Accueil</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="cv.html">CV</a></li>
    </ul>
</nav>

<section>
    <aside>
        <h2>TITRE ASIDE</h2>
    </aside>
    <article>
        <h3>TITRE ARTICLE</h3>
    </article>
</section>

<footer>
    <p><a href="mailto:@gmail.com">Contact</a></p>
    <a href="#topAnchor">Retour vers le haut</a>
</footer>

<!-- ANCRES -->
<a href="#topAnchor">Retour vers le haut</a>
<!-- INFOBULLES: Titre pour l'URL lors du hover -->
<a href="URL" title="Message en passant sur le lien">Lien</a>

<!-- IMAGES -->
<img src="images/montagne.jpg" alt="Photo de montagne" />

<!-- FIGURES, ILLUSTRATION DE TEXTE -> images, code source, citations,... -->
<figure>
    <img src="images/IE6.png" alt="Logo Internet Explorer" />
    <img src="images/Firefox.png" alt="Logo Mozilla Firefox" />
    <img src="images/Chrome.png" alt="Logo Google Chrome" />
    <figcaption>Logos des diff�rents navigateurs</figcaption>
</figure>

<!-- CLASS -->
<p class="introduction">Bonjour et bienvenue sur mon site !</p>
<!--DANS LE CSS:
    .introduction
    {
        color:blue;
    }-->
<!-- ID : UNE SEULE FOIS DANS LE CODE -->
<p id="introduction">Bonjour et bienvenue sur mon site !</p>
<!--DANS LE CSS:
    #introduction
    {
        color:blue;
    }-->

<!-- SPAN -->
<p>Bonjour et <span class="salutations">bienvenue</span> sur mon site !</p>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: MIDGETSTORM
 * Date: 02-02-16
 * Time: 10:54
 */
?>