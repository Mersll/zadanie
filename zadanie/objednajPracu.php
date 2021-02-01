<?php
$conn="";
include "config.php";

if($_GET["praca"] == "ano")
{
    $idPraca=$_GET["idPrace"];
    $idStudent=$_GET["idStud"];


    $query = "UPDATE student SET meno,id_prace=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt,
        "sii",
        $idPraca,
        $idStudent);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_commit($conn);


/*
    $query2="UPDATE zaverecna_praca SET autor=? WHERE id_prace=?";
    $stmt2 = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt2, $query);
    mysqli_stmt_bind_param($stmt2, "ii", $idStudent,$idPraca);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt2);
    mysqli_commit($conn);
*/

}
?>