<?php
$conn="";
include "../config.php";
if($_POST["vloz"]=="ano")
{
    $id=0;
    $nazov=$_POST["nazov"];
    $veduci=$_POST["veduci"];



    $query="INSERT INTO `zaverecna_praca`(`id_prace`, `Nazov`,`Veduci`) VALUES (?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt,'iss',$id,$nazov,$veduci);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../Zav_praca.php");
}
?>