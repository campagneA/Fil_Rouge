<?php
session_start();

if (!isset($_SESSION['pseudo'])) {
  header('Location: connexion.php');
}
// print_r($_SESSION);
include_once(__DIR__ . '/../view/showProfil.php');
include_once(__DIR__ . '/../service/UserService.php');


$userID = $_SESSION['id_user'];
if (isset($_POST['give_user'])) {
  $userS = new UserService;
  $user = $userS->selectAllFromUser($userID);
  echo json_encode($user);
} else if (isset($_POST['update_user'])) {
  $userS = new UserService;
  $user = $userS->updateThisUserData($userID, $_POST['columnName'], $_POST['newVal']);
} else if (isset($_POST['update_user_checkbox'])) {
  $userS = new UserService;
  $oldVal = $userS->updateThisUserCheckboxData($userID, $_POST['columnName']);
} else {
  showProfil();
}
