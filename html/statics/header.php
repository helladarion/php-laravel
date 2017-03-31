<?php include_once('libs/session.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Todo Maker</title>
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <script type="text/javascript" src="/js/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#due_date" ).datepicker({
          dateFormat: "yy-mm-dd"
        });
      });
    </script>
<div class="index-wrapper">
    <div class="content">
      <h2><strong>To</strong>do<strong>Ma</strong>ker</h2>
    </div>
    <div class="container menu">
      <ul class="nav nav-pills nav-stacked">
        <li role="navigation" <?php if($_GET['label'] == 'Inbox') { echo 'class="active"'; } ?>><a href="index.php?label=Inbox">Inbox</a></li>
        <li role="navigation" <?php if($_GET['label'] == 'Read Later') { echo 'class="active"'; } ?>><a href="index.php?label=Read Later">Read Later</a></li>
        <li role="navigation" <?php if($_GET['label'] == 'Important') { echo 'class="active"'; } ?>><a href="index.php?label=Important">Important</a></li>
      </ul>
    </div>
