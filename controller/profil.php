<?php
session_start();

if (!isset($_SESSION['pseudo'])) {
  header('Location: connexion.php');
}
// print_r($_SESSION);
include_once(__DIR__ . '/../view/showProfil.php');
include_once(__DIR__ . '/../service/UserService.php');

$userS = new UserService;
$userID = $_SESSION['id_user'];
if (isset($_POST['give_user'])) {
  $user = $userS->selectAllFromUser($userID);
  echo json_encode($user);
} else if (isset($_POST['update_user'])) {
  $columname = htmlspecialchars($_POST['columnName']);
  $newVal = htmlspecialchars($_POST['newVal']);
  $user = $userS->updateThisUserData($userID, $columname, $newVal);
} else if (isset($_POST['update_user_checkbox'])) {
  $columname = htmlspecialchars($_POST['columnName']);
  $oldVal = $userS->updateThisUserCheckboxData($userID, $columname);
} else {
  showProfil();
}
