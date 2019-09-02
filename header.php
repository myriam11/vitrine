<!DOCTYPE html>
<html lang="en">
<head>
    <!-- obligatoire pour précisre le jeu de caractère -->
    <meta charset="UTF-8">
    <!-- obligatoire pour que la page soit responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- EDGE VA BIENTOT MOURIR -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- très important pour le référencement -->
    <link rel="stylesheet" href="style.css">
    <title>BM Coiffure</title>

   
</head>
<body>
        <header>
        <h1><?php echo $h1 ?? "titre1 par défaut" ?></h1>
        <!-- menu de navigation -->
        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="galerie.php">galerie</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>
    </header>
      