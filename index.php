<?php
//definicia cookie
$session = session_start();
$cookie_name = "user";
$cookie_value = "JohnDoe";

setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400 = 1 day


//TODO dokoncit menu, upravit vzhlad, vyhadzat hovadiny, dokoncit kuchynsku verziu obedov nieco narychlo zbuchaj, otestuj
//TODO popis celeho projektu, pridaj ine projekty spolu s odkazmi do gitu. Maybe si vymsysli clanok o nejakej sracke v exceli commitni pushni do GITU a odovzdaj

?>


<!DOCTYPE HTML>
<html lang="sk-SK">
<head>
    <link rel="stylesheet" href="css/style.css"
    <meta charset="UTF-8">
    <title>Vitajte</title>
    <meta name="author" content="Marcel Kostolanský"
    <meta name="keyword" content="HTML, CSS, JavaScript, PHP">
    <meta name="description" content="Semestralny projekt INTE">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


</head>

<body>
<script src="js/JS.js"></script>

<header>
    <a class="uvod" href="index.php"><h1 class="uvod">Semestralne zadanie</h1></a>
    <h2 class="uvod">Internetove technologie</h2>
</header>
<div>
    <ul>
        <li><a class="active" href="index.php"><i class="fa fa-home fa-fw"></i></a></li>
        <li><a href="vloz.php">VKLADANIE</a></li>
        <li><a href="citaj.php">EDITOVANIE</a></li>
    </ul>
</div>
<!-- Reklama na uvod -->

<?php
include "config.php";
if(!$conn)
{
echo "Neuspesne pripojenie";
exit;
}
else
{
echo "Konektivita nadviazana";
}
?>
<div>
    <h1 style="font-size:10vw; text-align:center;">Vitajte!</h1>
    <div class="clock"></div>
</div>

<footer>
    <div class="footer">
        <p class="footer"><span>&copy;Marcel Kostolanský 2021</span></p>
    </div>
</footer>
</body>
</html>
