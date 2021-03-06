<?php
function showHeader($css = "")
{
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rosario:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/forum.css">
    <link rel="stylesheet" href="../css/fil_rouge.css">
    <?php
    if ($css) {
    ?>
      <link rel="stylesheet" href=<?php echo $css ?>>
    <?php
    }
    ?>
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/main.js"></script>
    <title>Square Enix France</title>
  </head>
<?php
}
