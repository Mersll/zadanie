<?php
if ($_POST["uprav"] == "ano") {
    $id = $_POST["id"];
    $meno = $_POST["meno"];
    $priezvisko = $_POST["priezvisko"];

    echo "Aktualizovane info: " . $meno . " " . $priezvisko;
    $query = "UPDATE Student SET meno= ?, priezvisko= ? where id=?";
    $stmt = mysqli_stmt_init($conn);


    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $meno, $priezvisko, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_commit($conn);
    header("Location: citaj.php");
}
?>