<?php
session_start();
include_once(__DIR__ . "/../view/allView.php");

header();
?>

<body>

    <link rel="stylesheet" href="../css/profil.css">
    <?php
    barNavigation();
    if ($_SESSION) {
        // Si connecté, afficheProfil()
    } else {
        pageConnexion();
    }
    ?>
</body>

</html>