<?php
include_once(__DIR__ . "/../view/jeux.php");

header();
?>

<body>
    <link rel="stylesheet" href="../css/style.css">
    <?php
    barNavigation();
    afficheJeux();
    ?>
</body>

</html>