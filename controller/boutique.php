<?php
session_start();
include_once(__DIR__ . "/../view/all.php");
include_once(__DIR__ . "/../view/boutique.php");

header();

?>

<body>
    <?php
    barNavigation()
    ?>

    <link rel="stylesheet" href="boutique.css">
    <?php
    navBoutique();
    listeBoutique();
    ?>

</body>

</html>