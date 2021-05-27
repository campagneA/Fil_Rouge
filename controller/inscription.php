<!-- <link rel="stylesheet" href="../css/inscription.css"> -->
<?php
session_start();

include_once(__DIR__ . "/../view/inscription.php");
include_once(__DIR__ . "/../view/showHeader.php");
include_once(__DIR__ . "/../view/showFooter.php");

pageInscription();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=fil_rouge', 'root', '');

if (isset($_POST['inscription'])) {
  if (!empty($_POST['pseudo']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mailConf']) && !empty($_POST['passWord2']) && !empty($_POST['passWordConf'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $confirmMail = htmlspecialchars($_POST['mailConf']);
    $password2 = htmlspecialchars($_POST['passWord2']);
    $passwordConfirm = htmlspecialchars($_POST['passWordConf']);
    $pseudolength = strlen($pseudo);
    $hashPassword = password_hash($password2, PASSWORD_DEFAULT);

    if($pseudolength <= 255)
    {
      if($mail == $confirmMail)
      {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
          $reqmail = $bdd->prepare("SELECT * FROM user_connecte WHERE mail = ?");
          $reqmail->execute(array($mail));
          $mailexist = $reqmail->rowCount();
          if($mailexist == 0)
          
            {
        
          if($password2 == $passwordConfirm)
          {
            $insertmbr = $bdd->prepare("INSERT INTO user_connecte(pseudo, nom, prenom, mail, hash_mdp) VALUES(?, ?, ?, ?, ?)");
            $insertmbr->execute(array($pseudo, $nom, $prenom, $mail, $hashPassword));
            $erreur = "Votre compte a bien été crée";
          }
          else
          {
            $erreur = "Vos mots de passes ne correspondent pas";
          }
        }
        else {
          $erreur = "Adresse mail déjà utilisé!";
        }
        }
        else 
        {
          $erreur = "Votre addresse mail n'est pas valide";
        }
      }
      else
      {
        $erreur = "Vos addresses mails ne correspondent pas";
      }
      }
      else
      {
        $erreur = "Votre pseudo ne doit pas dépasser 255 caractères";
      }

    } 
    else {
      $erreur = "tous les champs doivent être complétés !";
    }
}

if (isset($erreur)) {
  echo '<font color="red">' . $erreur . "</font";
}

?>

</body>

</html>


<!-- //barNavigation();
    //if ($_SESSION) {
            //Si connecté, afficheProfil()
   // } else {
       // pageInscription();
 //   } -->