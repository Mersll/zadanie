<?php
$conn="";
include "config.php";
include "menu.php";

//middle content
if ($_GET["zvol"] =="ano" && $_GET["id"]!="")
{
    $idStud=$_GET["id"];

echo"<h3>Zvol si záverečnú prácu</h3>";
echo"<p>Komponent pre študentov na zvolenie záverečnej práce</p>";

$query="SELECT zaverecna_praca.id_prace,zaverecna_praca.nazov,zaverecna_praca.veduci,druh_prace.cely_nazov 
FROM zaverecna_praca 
LEFT JOIN druh_prace ON zaverecna_praca.druh_prace=druh_prace.id_typ 
WHERE Autor IS NULL";
$result=mysqli_query($conn,$query);

if(!$result)
{
    echo"Chyba v SQL dotaze".$query;
}
?>
<table class="table table-striped">
    <tr>
        <th>Akcia</th>
        <th>Nazov</th>
        <th>Veduci</th>
        <th>Typ prace</th>
    </tr>

<form action="zvolZp.php" method="get">
    <input type="hidden" name="idStud" value="<?php echo $idStud;?>">
<?php

    while ($row=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><input type="radio" name="idPrace" value="<?php echo $row["id_prace"]; ?>"></td>
        <td> <?php echo $row["nazov"];      ?></td>
        <td> <?php echo $row["veduci"];     ?></td>
        <td> <?php echo $row["cely_nazov"]; ?></td>
    </tr>
<?php
}
?>

</table>
    <input type="submit" value="Vyber si pracu">
    <input type="hidden" name="praca" value="ano">
    </form>

<?php
include "objednajPracu.php";

include "footer.php";
mysqli_close($conn);
}
else
{
}
?>