<?php
  //Show errors
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
  //End Debug Error functions

  include_once('classes/class.ManageUsers.php');
  if(isset($_POST['register']))
  {
    session_start();
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
        $password = password_hash($password, PASSWORD_DEFAULT);
        $register_user = $users->registerUsers($username, $password, $email, $ip_address, $time, $date);
        if($register_user == 1)
        {
          $make_session = $users->getUserInfo($username);
          foreach ($make_session as $userSessions)
          {
            $_SESSION['todo_name'] = $userSessions['username'];
            if(isset($_SESSION['todo_name']))
            {
              header("location: index.php");
            }
          }
          print_r($make_session);
        }
      }
      else
      {
          $error = 'Username already exists';
      }
    }
  }

  if(isset($_POST['login']))
  {
    session_start();
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];

    if(empty($username) || empty($password))
    {
      $error = 'All fields are required';
    }
    else
    {
        $login_user = new ManageUsers();
        $auth_user = $login_user->loginUsers($username, $password);

        if($auth_user == 1)
        {
          $make_session = $login_user->getUserInfo($username);

          foreach ($make_session as $userSessions)
          {
            $_SESSION['todo_name'] = $userSessions['username'];
            if(isset($_SESSION['todo_name']))
            {
              header("location: index.php");
            }
          }
          print_r($make_session);
        }
        else
        {
          $error = 'Invalid Credentials';
        }
    }
  }

 ?>
