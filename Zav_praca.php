<head>
    <title>Zaverecne prace</title>
</head>
<?php
include "config.php";
include "menu.php";
?>

<h3>Zaverecne prace</h3>
<p>Vitaj v komponente zaverecnych prac</p>

<?php
include "ZP/zpForm.php";
mysqli_close($conn);
?>