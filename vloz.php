<?php

$session = session_start();
$cookie_name = "user";
$cookie_value = "JohnDoe";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
?>


<!DOCTYPE HTML>
<html lang="sk-SK">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Vloz udaje</title>
    <meta name="author" content="Marcel Kostolanský"
    <meta name="keyword" content="HTML, CSS, JavaScript, PHP">
    <meta name="description" content="Semestralny projekt INTE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <a class="uvod" href="index.php"><h1 class="uvod">Semestralne zadanie</h1></a>
    <h2 class="uvod">Internetove technologie</h2>
</header>
<div>
    <ul>
        <li><a href="index.php"><i class="fa fa-home fa-fw"></i></a></li>
        <li class="active"><a href="vloz.php">VKLADANIE</a></li>
        <li><a href="citaj.php">EDITOVANIE</a></li>
    </ul>
</div>

<!-- DB connect  -->
<?php
$conn ="";
include "config.php";
?>

<!-- Formular -->

<h2>Informácie o študentovi:</h2>

    <form action="vloz.php" method="post" autocomplete="on">
        <fieldset>
            <legend>Osobne udaje</legend>
            <label for="meno">Meno:</label> <input id="meno" type="text" name="meno"
                                                   required autofocus placeholder="Meno"><br>
            <label for="priezvisko">Priezvisko:</label> <input id="priezvisko" type="text" name="priezvisko"
                                                               required autofocus placeholder="Priezvisko"><br>
            <label for="datum_narodenia">Dátum narodenia:<br></label> <input id="datum_narodenia" type="date" name="datum_narodenia"
                                                               required autofocus placeholder="dd.MM.yyyy"><br>
            <label for="odbor">Odbor:</label>
            <select name="odbor">
                <option label="AIA">Aplikovaná informatika a automatizácia v priemysle</option>
                <option label="IBE">Integrovaná bezpečnosť</option>
                <option label="KPR">Kvalita produkcie</option>
                <option label="MI">Materiálové inžinierstvo</option>
                <option label="MTTZ">Mechatronika v technologických zariadeniach</option>
                <option label="PPP">Personálna práca v priemyselnom podniku</option>
                <option label="PPT">Počítačová podpora výrobných technológií</option>
                <option label="PMA">Priemyselné manažérstvo</option>
                <option label="VTE">Výrobné technológie</option>
                <option label="VTVM">Výrobné technológie a výrobný manažment</option>
                <option label="VZS">Výrobné zariadenia a systémy</option>
            </select><br>
            <label for="datum_narodenia">Názov práce:<br></label> <input id="nazov_prace" type="text" name="zaverecna_praca"
                                                                             required autofocus placeholder="Názov práce"><br>

        </fieldset><br>
        <input type="submit" value="Vložiť"><br>
        <input type="hidden" name="Vlozit" value="ano">

    </form>
</div>

<!--<h2>Informácie o záverečnej práci:</h2>
<div ng-app="myApp" ng-controller="myCtrl">

    <form action="vloz.php" method="post" autocomplete="on">
        <fieldset>
            <legend>Údaje o záverečnej práci</legend>
            <label for="kod_prace">Kód práce:</label> <input id="kod_prace" ng-model="firstname" type="text" name="kod_prace"
                                                   required autofocus placeholder="Kód práce"><br>
            <label for="nazov_prace">Názov práce:</label> <input id="nazov_prace" ng-model="lastname" type="text" name="nazov_prace"
                                                               required autofocus placeholder="Názov práce"><br>
            <label for="meno_studenta">Meno študenta:<br></label> <input id="meno_studenta" ng-model="firstname" type="text" name="meno_studenta"
                                                                             required autofocus placeholder="Meno študenta"><br>
            <label for="priezvisko_studenta">Priezvisko študenta:<br></label> <input id="priezvisko_studenta" ng-model="idk" type="text" name="priezvisko_studenta"
                                                                         required autofocus placeholder="Priezvisko študenta"><br>
            <label for="meno_veduceho">Meno vedúceho:<br></label> <input id="meno_veduceho" ng-model="firstname" type="text" name="meno_veduceho"
                                                                         required autofocus placeholder="Meno vedúceho"><br>
            <label for="priezvisko_veduceho">Priezvisko vedúceho:<br></label> <input id="priezvisko_veduceho" ng-model="idk" type="text" name="priezvisko_veduceho"
                                                                                     required autofocus placeholder="Priezvisko veduceho"><br>
        </fieldset><br>
        <input type="submit" value="Vlozit"><br>
        <input type="hidden" name="vlozit" value="ano">

    </form>
</div>-->

<?php

//vkladanie udajov do DB
if ($_POST["Vlozit"] == "ano") {
    $meno = $_POST["meno"];
    $priezvisko = $_POST["priezvisko"];
    $datum_narodenia = $_POST["datum_narodenia"];
    $odbor = $_POST["odbor"];
    $zaverecna_praca = $_POST["zaverecna_praca"];
    $id = 0;

    $query = "INSERT INTO `student`(`ID`, `Meno`, `Priezvisko`, `Datum_narodenia`, `Odbor`, `Zaverecna_praca`) VALUES (?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'isssss', $id, $meno, $priezvisko, $datum_narodenia, $odbor, $zaverecna_praca);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:citaj.php");

}

mysqli_close($conn);
?>


</body>
</html>