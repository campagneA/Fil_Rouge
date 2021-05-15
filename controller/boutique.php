<?php
session_start();
include_once(__DIR__ . "/../view/allView.php");
include_once(__DIR__ . "/../view/boutiqueView.php");

header();

navBoutique();
?>

<body>

    <link rel="stylesheet" href="boutique.css">
    <?php
    listeBoutique();
    ?>

</body>

</html>