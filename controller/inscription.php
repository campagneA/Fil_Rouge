<?php
session_start();
include_once(__DIR__ . "/../view/all.php");
include_once(__DIR__ . "/../view/inscription.php");

header();
?>

<body>

    <link rel="stylesheet" href="../css/inscription.css">
    <?php
    barNavigation();
    if ($_SESSION) {
        // Si connecté, afficheProfil()
    } else {
        pageInscription();
    }
    ?>
</body>

</html>