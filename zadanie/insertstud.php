<?php
$conn="";
include "config.php";

if($_POST["vloz"]=="ano")
{
    $id=0;
    $meno=$_POST["meno"];
    $priezvisko=$_POST["priezvisko"];
    $odbor=$_POST["odbor"];

    //echo $meno." ".$priezvisko." ".$odbor;

    $query= "INSERT INTO student (id,meno,priezvisko,odbor) VALUES (?,?,?,?)";
    $stmt= mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt,'issi',$id,$meno,$priezvisko,$odbor);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_commit($conn);
}?>