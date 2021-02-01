<?php

$query="SELECT student.id, student.meno,student.priezvisko,odbor.nazovOdb,student.id_prace 
    FROM student 
    LEFT JOIN odbor on student.odbor=odbor.id_odboru 
    ORDER BY id ASC";

$result=mysqli_query($conn,$query);
if(!$result)
{
    echo "Chyba pri tvoreni SQL dotazu".$query;
    exit;
}
?>
<div>
<table class="table table-striped">
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Odbor</th>
        <th>Záverečná práca</th>
        <th style="text-align: center" colspan="4">Akcia</th>
    </tr>

   <tr>
            <?php
            /*SELECT student.meno,student.priezvisko,odbor.nazovOdb,student.id_prace FROM student LEFT JOIN odbor on student.odbor=odbor.id_odboru ORDER BY id ASC*/
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <td><?php echo $row["meno"]; ?></td>
            <td><?php echo $row["priezvisko"]; ?></td>
            <td><?php echo $row["nazovOdb"]; ?></td>
            <td><?php echo $row["id_prace"]; ?></td>
            <td><a href="./delete.php?id=<?php echo $row["id"];?>&zmazat=ano"><b>Zmazať</b></a></td>
            <td><a href="./edituj.php?id=<?php echo $row["id"];?>&edituj=ano"><b>Edituj</b></a></td>
       <?php
       if($row["id_prace"]==NULL)
       {
           ?>
            <td><a href="./zvolZp.php?id=<?php echo $row["id"];?>&zvol=ano"><b>Zvoľ si prácu</b></a></td>
        </tr>
    <?php
       }
       else
       {
    ?>
           <td>Už máš zvolenú prácu</td>
           </tr>
    <?php
    }
    }
    mysqli_close($conn);
    ?>

</table>
</div>
