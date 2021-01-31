<?php
//konfiguracny subor pre DB
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="zadanie";


$conn=mysqli_connect($db_host, $db_user , $db_pass, $db_name);

/*
if(!$conn)
{
    echo "Neuspesne pripojenie";
    exit;
}
else
{
        echo "Konektivita nadviazana";
}
?>
*/