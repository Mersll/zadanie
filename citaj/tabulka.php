<?php

$query="SELECT `id`,`meno`,`priezvisko`,`odbor`,`id_prace` FROM `student` ORDER BY id ASC ";

$result=mysqli_query($conn,$query);
if(!$result)
{
    echo "Chyba pri tvoreni SQL dotazu".$query;
    exit;
}
?>
<table>
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Odbor</th>
        <th>Zaverecna praca</th>
        <th colspan="4">Akcia</th>
    </tr>

   <tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo $row["meno"]; ?></td>
            <td><?php echo $row["priezvisko"]; ?></td>
            <td><?php echo $row["odbor"]; ?></td>
            <td><?php echo $row["id_prace"]; ?></td>
            <td><a href="delete.php?id=<?php echo $row["id"];?>&zmazat=ano"><b>Zmazat</b></a></td>
            <td><a href="edituj.php?id=<?php echo $row["id"];?>&edituj=ano"><b>Edituj</b></a></td>
        </tr>
    <?php
    }
    mysqli_close($conn);
    ?>

</table>
