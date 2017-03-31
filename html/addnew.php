<?php
  include_once('statics/header.php');
  include_once('libs/create_todo.php');
?>

<div class="mainContent">
    <div class="head-content">
      <div class="head clearfix">
          <h2>Create Todos</h2>
      </div>
      <div class="add_more clearfix">

      </div>
    </div>

  <div class="container-body">
    <div class="mainBody">
      <div class="content">
          <?php if(isset($error)) {echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?>
          <?php if(isset($success)) {echo '<div class="alert alert-success" role="alert">'.$success.'</div>';} ?>
      </div>
      <form class="" action="addnew.php" method="post">
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title">
        </div>

        <div class="form-group">
          <label for="Description">Description <small> (Optional)</small></label>
          <textarea name="desc" class="form-control" rows="8" cols="80" placeholder="Description"></textarea>
        </div>

        <div class="form-group">
          <label for="Due Date">Due Date</label>
          <input type="text" class="form-control" name="due_date" id="due_date" placeholder="Due Date">
        </div>

        <div class="form-group">
          <label for="Label Under">Label Under</label>
          <select class="form-control" name="label_under">
              <option value="Inbox">Inbox</option>
              <option value="Read Later">Read Later</option>
              <option value="Important">Important</option>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="create_todo" value="Create" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>

</div>
