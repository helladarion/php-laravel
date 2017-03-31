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
  include_once('session.php');
  $init = new ManageTodo();

  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $list_todo = $init->listIndTodo(array('id'=>$id), $session_name);
  }
  else
  {
    if(isset($_GET['label']))
    {
      $label = $_GET['label'];
      $list_todo = $init->listTodo($session_name, $label);
    }
    else
    {
      $list_todo = $init->listTodo($session_name);
    }
  }



  //print_r($list_todo);
 ?>
