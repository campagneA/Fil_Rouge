<?php
class UserDAO
{

  function selectAllFromUser(int $userID)
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'fil_rouge';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $sql = ('SELECT * FROM user_connecte WHERE id_user = ?');
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $userID, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch();

    return $user;
  }
  function updateThisUserData(int $userID, string $columnName,  $newVal)
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'fil_rouge';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $pdo = new PDO($dsn, $user, $password);

    $sql = ('UPDATE user_connecte SET ' . $columnName . ' = ? WHERE id_user = ?;');
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $newVal);
    $stmt->bindParam(2, $userID, PDO::PARAM_INT);
    $stmt->execute();
  }
  function updateThisUserCheckboxData(int $userID, string $columnName)
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'fil_rouge';
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $pdo = new PDO($dsn, $user, $password);

    //select value of column true or false?
    $sql = ('SELECT ' . $columnName . ' FROM user_connecte WHERE id_user = ?;');
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $userID, PDO::PARAM_INT);
    $stmt->execute();
    $oldVal = $stmt->fetch();

    //depending on result change value
    if ($oldVal[0] == true) {
      $sql2 = ('UPDATE user_connecte SET ' . $columnName . ' = false WHERE id_user = ?;');
    } elseif ($oldVal[0] == false) {
      $sql2 = ('UPDATE user_connecte SET ' . $columnName . ' = true WHERE id_user = ?;');
    }
    $stmt = $pdo->prepare($sql2);
    $stmt->bindParam(1, $userID, PDO::PARAM_INT);
    $stmt->execute();
  }
}
