<!-- <link rel="stylesheet" href="../css/inscription.css"> -->
<?php
session_start();

include_once(__DIR__ . "/../view/inscription.php");
include_once(__DIR__ . "/../view/showHeader.php");
include_once(__DIR__ . "/../view/showFooter.php");

pageInscription();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=fil_rouge', 'root', '');

if (isset($_POST['inscription'])) {
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $mail = htmlspecialchars($_POST['mail']);
  $confirmMail = htmlspecialchars($_POST['mailConf']);
  $password2 = htmlspecialchars($_POST['passWord2']);
  $passwordConfirm = htmlspecialchars($_POST['passWordConf']);

  $hashPassword = password_hash($password2, PASSWORD_DEFAULT);

  $insertmbr = $bdd->prepare("INSERT INTO user_connecte(pseudo, nom, prenom, mail, hash_mdp) VALUES(?, ?, ?, ?, ?)");
  $insertmbr->execute(array($pseudo, $nom, $prenom, $mail, $hashPassword));

  echo "okkkkkkkkk";
} else {
  echo "not ocdzc,dsk,cds,cds,cdsl,csvsvsdk,,clk;";
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