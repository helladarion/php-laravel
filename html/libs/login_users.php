<?php
  if(isset($_POST['register']))
  {
    session_start();
    include_once('classes/class.ManageUsers.php');
    $users = new ManageUsers();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d");
    $date = date("H:i:s");

    if(empty($username) || empty($email) || empty($password) || empty($repassword))
    {
      $error = 'All fields are required';
    }
    elseif ($password !== $repassword)
    {
      $error = 'Password does not match';
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $error = 'Email is not valid';
    }
    else
    {
      $check_availability = $users->getUserInfo($username);
      if($check_availability == 0)
      {
        $register_user = $users->registerUsers($username, $password, $email, $ip_address, $time, $date);
        if($register_user == 1)
        {
          $make_sessions = $users->getUserInfo($username);
          foreach ($make_sessions as $userSessions)
          {
            $_SESSION['todo_name'] = $userSessions['username'];
            if(isset($_SESSION['todo_name']))
            {
              header("location: index.php");
            }
          }
          print_r($make_sessions);
        }
      }
      else
      {
          $error = 'Username already exists';
      }
    }
  }


 ?>
