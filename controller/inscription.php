<!-- <link rel="stylesheet" href="../css/inscription.css"> -->
<?php
session_start();

include_once(__DIR__ . "/../view/inscription.php");
include_once(__DIR__ . "/../view/showHeader.php");
include_once(__DIR__ . "/../view/showFooter.php");

inscription();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=squaredb', 'root', '');

if (isset($_POST['inscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $confirmMail = htmlspecialchars($_POST['mailConf']);
    $password2 = htmlspecialchars($_POST['passWord2']);
    $passwordConfirm = htmlspecialchars($_POST['passWordConf']);

    $insertmbr = $bdd->prepare("INSERT INTO inscrits(pseudo, nom, prenom, mail, confirmMail, password2, passwordConfirm) VALUES(?, ?, ?, ?, ?, ?, ?)");
    $insertmbr->execute(array($pseudo, $nom, $prenom, $mail, $confirmMail, $password2, $passwordConfirm));

    echo "okkkkkkkkk";
}








?>

<body>


</body>

</html>


<!-- //barNavigation();
    //if ($_SESSION) {
            //Si connecté, afficheProfil()
   // } else {
       // pageInscription();
 //   } -->