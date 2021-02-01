<head>
    <title>Záverečné práce</title>
</head>
<?php
include "config.php";
include "menu.php";
?>

<h3>Záverečné práce</h3>
<p>Vitaj v komponente záverečných prác</p>

<?php
include "ZP/zpForm.php";
include "footer.php";
mysqli_close($conn);
?>