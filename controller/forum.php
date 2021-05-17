<?php
include_once(__DIR__ . "/../view/all.php");
include_once(__DIR__ . "/../view/forum.php");

header();
?>

<body>
    <?php
    barNavigation();
    ?>
    <link rel="stylesheet" href="../css/forum.css">
    <?php
    pageForum();
    ?>
</body>

</html>