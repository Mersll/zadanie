<?php
$conn="";
include "config.php";
include "menu.php";
?>
    <h3>Vkladanie udajov o zaverecnej praci</h3>
    <form action="vloz_pracu.php" method="POST">


        <input type="hidden" name="kod_prace" value="0">
        <label for="Nazov_prace">Nazov práce:</label>
        <input type="text" name="nazov_prace"><br>

        <label for="nazov_prace">Názov práce:</label>
        <input type="text" name="nazov_prace"><br>

        <label for="student">Študent:</label>
        <input type="text" name="student"><br>

        <label for="veduci">Vedúci:</label>
        <input type="text" name="student"><br>

        <input type="submit" value="vlozit">
        <input type="hidden" name="vlozit" value="ano">
    </form>

<?php
include "insertstud.php";
mysqli_close($conn);
include "footer.php";
?>