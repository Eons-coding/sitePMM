
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
        <?php echo $website; ?>
    </title>
    <!-- La feuille de styles "base.css" doit être appelée en premier. -->
    <link rel="stylesheet" type="text/css" href="css/base.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/modele04.css" media="screen" />
</head>

<body>

<div id="global">

    <header id="entete">
        <h1>
            <img <?php echo "alt=".$logoText." src=".$logo." />";
            echo $pageTitle; ?>
        </h1>
        <p class="sous-titre">
            <strong>Caractéristiques:</strong>
            minimaliste,
            menu vertical à gauche,
            largeur fluide
        </p>
    </header><!-- #entete -->

    <nav id="navigation">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Tous les gabarits</a></li>
            <li><a href="index.php">Utilisation</a></li>
            <li><a href="index.php">Licence</a></li>
            <li><a href="index.php">Crédits</a></li>
        </ul>
    </nav><!-- #navigation -->

    <article id="contenu">
        <?php echo $article ?>
    </article><!-- #contenu -->

    <footer id="copyright">
        Mise en page &copy; 2008
        <a href="http://www.elephorm.com">Elephorm</a> et
        <a href="http://www.alsacreations.com">Alsacréations</a>
    </footer>

</div><!-- #global -->

</body>
</html>
