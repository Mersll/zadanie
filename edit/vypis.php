<?php
if ($_GET["id"] != "" && $_GET["edituj"] == "ano")
{
    $query = "select meno, priezvisko from Student where id=" . $_GET["id"];
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result))
    {
        $id = $_GET["id"];
        $meno = $row["meno"];
        $priezvisko = $row["priezvisko"];

    }
    include "edit/form.php";
}
include "edit/spracovanie.php";
?>