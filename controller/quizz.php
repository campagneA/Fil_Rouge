<?php
include_once(__DIR__ . "/../view/all.php");
include_once(__DIR__ . "/../view/quizz.php");

header();
?>

<body>
    <?php
    barNavigation()
    ?>
    <!-- if ($_POST) {
        <link rel="stylesheet" href="../css/quizz_Facile.css">
        afficheQuizz($_POST['???']);
    } else { -->
    <link rel="stylesheet" href="../css/quizz.css">
    <?php
    choixQuizz();
    ?>
    <!-- } -->
</body>

</html>