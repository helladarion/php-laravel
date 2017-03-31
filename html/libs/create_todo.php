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

  include_once('classes/class.ManageTodo.php');
  include_once('libs/session.php');

  $init = new ManageTodo();

  if(isset($_POST["create_todo"]))
  {
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $due_date = $_POST["due_date"];
    $label = $_POST["label_under"];

    if(empty($title) || empty($due_date) || empty($label))
    {
      $error = 'All fields are required except the optional one';
    }
    else
    {
        $title = strip_tags($title);
        $desc = strip_tags($desc);

        $username = $session_name;
        $created_on = date("Y-m-d");

        $create_todo = $init->createTodo($username, $title, $desc, $due_date, $created_on, $label);
        if ($create_todo == 1)
        {
            $success = 'Todo created successfully';
        }
        else
        {
          $error = 'There was an error';
        }
    }
  }

 ?>
