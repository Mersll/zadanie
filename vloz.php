<?php
$conn="";
include "config.php";
include "menu.php";
?>
<h3>Vkladanie udajov</h3>
<form action="vloz.php" method="POST">


    <input type="hidden" name="id" value="0">
    <label for="meno">MENO:</label>
    <input type="text" name="meno"><br>

    <label for="priezvisko">PRIEZVISKO:</label>
    <input type="text" name="priezvisko"><br>

    <label for="odbor">ODBOR</label>
    <select name="odbor">
        <option label="Aplikovaná informatika a automatizácia v priemysle">1</option>
        <option label="Integrovaná bezpečnosť">2</option>
        <option label="Kvalita produkcie">3</option>
        <option label="Materiálové inžinierstvo">4</option>
        <option label="Mechatronika v technologických zariadeniach">5</option>
        <option label="Personálna práca v priemyselnom podniku">6</option>
        <option label="Počítačová podpora výrobných technológií">7</option>
        <option label="Priemyselné manažérstvo">8</option>
        <option label="Výrobné technológie">9</option>
        <option label="Výrobné technológie a výrobný manažment">10</option>
        <option label="Výrobné zariadenia a systémy">11</option>
    </select><br>

    <input type="submit" value="vlozit">
    <input type="hidden" name="vlozit" value="ano">
</form>

<?php
    include "insertstud.php";
    mysqli_close($conn);
include "footer.php";
    ?>


