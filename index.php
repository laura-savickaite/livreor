<!-- un site de musique, maybe des instruments en vente ou prêt d'instruments/salles rassemblant plusieurs musiciens/radio etc...très ungodly hour vibes, très paillettes et sobre en même temps -->

<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '', 'livreor');

$login=$_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil || UC titre</title>
</head>
<body>
    <header>
    <?php 
    $request = mysqli_query($connect, "SELECT * FROM `utilisateurs` WHERE `login`= '".$login. "'"); 
    if(!isset($_SESSION['login'])){ ?>

    <section class="navbar">
        <a href="inscription.php"><p>Sign in</p></a>
        <a href="connexion.php"><p>Log in</p></a>
        <a href="livre-or.php"><p>Livre d'or</p></a>
    </section>
    <?php
    }else { ?>
    <section class="navbar">
        <a href="profil.php"><p>Mon profil</p></a>
        <a href="livre-or.php"><p>Livre d'or</p></a>
    </section>
    <?php
    }
    
    ?>
    </header>
    <main>
    <section>
        <div class="indexcase">
            hover ici ?
        </div>

    <marquee id="titrescroll" scrolldelay="90"><h1>UNGODLY  HOUR  RADIO</h1></marquee>
     <hr>
    </section>

    <section >
        <video autoplay muted loop id="indexvid">
            <source src="Assets/videoindex.mp4" type="video/mp4">
        </video>
    </section>
    </main>
    <footer>

    </footer>
</body>
</html>