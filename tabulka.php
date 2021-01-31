<head>
    <title>Citaj</title>
</head>
<body>
<style>
    table
    {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th
    {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 4px;
    }

    tr:nth-child(even)
    {
        background-color: #dddddd;
    }

</style>

<?php
$conn ="";
include "config.php";
?>


<?php
$query = "SELECT `ID`, `Meno`, `Priezvisko`, `Datum_narodenia`, `Odbor`, `Zaverecna_praca` FROM `student` ORDER BY `id` ASC";
$result = mysqli_query($conn, $query); // mysqli_query - vykona prikaz

if (!$result)
{
    echo "Error: Neda sa vykonat prikaz SQL: " . $query . ".<br>" . PHP_EOL;
    exit;
}

?>
<table>
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Dátum narodenia</th>
        <th>Odbor</th>
        <th>Názov práce</th>
        <th colspan="4">Akcia</th>
    </tr>

    <?

    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["meno"] ?></td>
            <td><?php echo $row["priezvisko"] ?></td>
            <td><?php echo $row["datum_narodenia"] ?></td>
            <td><?php echo $row["odbor"] ?></td>
            <td><?php echo $row["zaverecna_praca"] ?></td>
<?}?>
</table>