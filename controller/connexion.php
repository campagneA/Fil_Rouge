<?php
include_once(__DIR__ . '/../view/showConnexion.php');
include_once(__DIR__ . '/../model/userModel.php');
showConnexion();

if (isset($_POST['connexion'])) {
  $pseudo = $_POST['pseudoPHP'];
  $mdp = $_POST['mdpPHP'];

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'fil_rouge';
  $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
  $pdo = new PDO($dsn, $user, $password);



  $sql = "SELECT * FROM user_connecte WHERE pseudo LIKE ?";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(1, $pseudo, PDO::PARAM_STR);
  $stmt->execute();
  $count = $stmt->rowCount();
  if ($count == 1) {
    $infos = $stmt->fetch();
    if (password_verify($mdp, $infos['hash_mdp'])) {
      echo 'Password is valid!';
      session_start();
      $_SESSION['pseudo'] = $pseudo;
      $_SESSION['role'] = $infos['role'];

      exit;
    } else {
      exit('mauvais mdp');
    }
  } else {
    exit('pseudo inconnu');
  }
}
