<?php
  include_once('statics/header.php');
  include_once('libs/list_todo.php');
  include_once('libs/edit_todo.php');
?>

<div class="mainContent">
    <div class="head-content">
      <div class="head clearfix">
          <h2>Edit Todos</h2>
      </div>
      <div class="add_more clearfix">

      </div>
    </div>

  <div class="container-body">
    <div class="mainBody">
      <div class="content">
        <form class="" action="edit.php?id=<?php echo $_GET['id']; ?>" method="post">
          <?php if(isset($error)) {echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';} ?>
          <?php if(isset($success)) {echo '<div class="alert alert-success" role="alert">'.$success.'</div>';} ?>
          <?php
            foreach ($list_todo as $td)
              $given_array = array("Inbox", "Read Later", "Important");
              $selected_array = array($td['label']);
              $array_remaining = array_diff($given_array, $selected_array);
            { ?>
      </div>
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" class="form-control" name="title" value="<?php echo $td['title'];?>">
        </div>

        <div class="form-group">
          <label for="Description">Description <small> (Optional)</small></label>
          <textarea name="desc" class="form-control" rows="8" cols="80"><?php echo $td['description'];?></textarea>
        </div>

        <div class="form-group">
          <label for="Due Date">Due Date</label>
          <input type="text" class="form-control" name="due_date" id="due_date" value="<?php echo $td['due_date'];?>">
        </div>
        <div class="form-group">
          <label for="Percentage Complete">Percentage Complete</label>
          <div id="seekbar"></div>
          <div id="progress"><?php echo $td['progress'];?>%</div>
          <input type="hidden" name="progress_value" value="<?php echo $td['progress'];?>" id="progress_value">
        </div>

        <div class="form-group">
          <label for="Label Under">Label Under</label>
          <select class="form-control" name="label_under">
              <?php echo '<option value="'.$td['label'].'">'.$td['label'].'</option>'; ?>
              <?php foreach ($array_remaining as $ar)
              {
                echo '<option value="'.$ar.'">'.$ar.'</option>';
              } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="submit" name="edit_todo" value="Edit" class="btn btn-success">
        </div>
        <?php
        }
         ?>
      </form>
    </div>
  </div>

</div>
