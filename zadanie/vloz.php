<?php
$conn="";
include "config.php";
include "menu.php";
?>
<h3>Vkladanie údajov</h3>
<table>
<form action="vloz.php" method="POST">

<th>
    <input type="hidden" name="id" value="0">
    <label for="meno">MENO:</label><br>
    <label for="priezvisko">PRIEZVISKO:</label><br>
    <label for="odbor">ODBOR</label><br>
</th>
    <th>
    <input type="text" name="meno"><br>


    <input type="text" name="priezvisko"><br>


    <select name="odbor"><br>

        <?php
            $query="SELECT nazovOdb, id_odboru FROM odbor ORDER BY id_odboru ASC";
            $result=mysqli_query($conn,$query);
            if(!$result)
            {
                echo "chyba pri SQL dopyte";
            }

            while ($row=mysqli_fetch_assoc($result))
        {
        ?>
        <option value="<?php echo $row["id_odboru"]; ?>"> <?php echo $row["nazovOdb"];?> </option>
    <?php
        }
    ?>
    </select>
    </th>
    <br>
<th>
    <input type="submit" value="vlozit">
    <input type="hidden" name="vloz" value="ano">
</th>
</form>
</table>
<?php
    include "insertstud.php";
    mysqli_close($conn);
    include "footer.php";
?>