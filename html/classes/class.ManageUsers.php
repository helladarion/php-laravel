<?php
  include_once('class.database.php');

  class ManageUsers {
    public $link;

    function __construct() {
      $db_connection = new dbConnection();
      $this->link = $db_connection->connect();
      return $this->link;
    }

    function registerUsers($username, $password, $email, $ip_address, $time, $date) {
      $query = $this->link->prepare("INSERT INTO users (username, password,email, ip_address, time, date) VALUES (?,?,?,?,?,?)");
      $values = array($username, $password, $email, $ip_address, $time, $date);
      $query->execute($values);
      $counts = $query->rowcount();
      return $counts;
    }

    function loginUsers($username, $password) {
      $db_password = $this->link->query("SELECT password FROM users WHERE username = '$username'")->fetchAll()[0]['password'];
      if (password_verify($password, $db_password))
      {
        $query = $this->link->query("SELECT * FROM users WHERE username = '$username'");
        $rowcount = $query->rowCount();
        return $rowcount;
      }
      return 0;
    }

    function getUserInfo($username) {
      $query = $this->link->query("SELECT * FROM users WHERE username = '$username'");
      $rowcount = $query->rowCount();
      if($rowcount == 1) {
        $result = $query->fetchAll();
        return $result;
      } else {
        return $rowcount;
      }
    }
  }

  //$users = new ManageUsers();
  //echo $users->registerUsers('rafa','123123', 'contact.rafaelpr@gmail.com','127.0.0.1', '08:00', '29-03-2017');
 ?>
