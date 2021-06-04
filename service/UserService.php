<?php
include_once(__DIR__ . '/../model/UserModel.php');
include_once(__DIR__ . '/../DAO/UserDAO.php');
class UserService
{

  function selectAllFromUser(int $userID)
  {
    $userDAO = new UserDAO;
    return $userDAO->selectAllFromUser($userID);
  }
  function updateThisUserData(int $userID, string $columnName,  $newVal)
  {
    $userDAO = new UserDAO;
    return $userDAO->updateThisUserData($userID, $columnName, $newVal);
  }
  function updateThisUserCheckBoxData(int $userID, string $columnName)
  {
    $userDAO = new UserDAO;
    return $userDAO->updateThisUserCheckboxData($userID, $columnName);
  }
}
