<?php
$conn="";
include "config.php";
?>
<table>
<form action="./edituj.php" method="POST" onsubmit="return confirm('Naozaj chces vykonat tieto zmeny ?');">

    <fieldset>
        <legend>Osobné údaje</legend>
        <input type="hidden" name="id" value="<?php echo $id;?>">
            <th>
                <label for="meno">Meno:</label>
                <input  type="text" name="meno" value="<?php echo $meno;?>" required autofocus><br>
            </th>
        <th>
            <label for="priezvisko">Priezvisko:</label>
            <input type="text" name="priezvisko" required autofocus
               value="<?php echo $priezvisko; ?>">
        </th>
        <th>
    </fieldset>
    <input class="btn btn-primary" type="submit" value="Uprav udaje"><br>
    <input type="hidden" name="uprav" value="ano">
    </th>

</form>
</table>