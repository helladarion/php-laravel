      <?php
        include_once('statics/header.php');
        include_once('libs/list_todo.php');
      ?>
          <div class="container-body">
            <div class="head-content">
              <div class="head clearfix">
                  <h2>Manage Todos</h2>
              </div>
              <div class="add_more clearfix">
                  <a href="addnew.php" class="btn btn-success">+ Add New</a>
              </div>
            </div>


            <table class="table table-striped">
              <thead>
                <tr>
                  <td> Title </td>
                  <td> Snippet </td>
                  <td> Due Date </td>
                  <td> Time Left </td>
                  <td> Progress </td>
                  <td> Actions </td>
                </tr>
              </thead>
              <tbody>
                <tr>

                   <?php
                     if($list_todo !== 0)
                     {
                       foreach ($list_todo as $key => $value)
                       {
                           $today = strtotime("now");
                           $due_date = strtotime($value['due_date']);
                           if($due_date > $today)
                           {
                             $hours = $due_date - $today;
                             $hours = $hours / 3600;
                             $time_left = $hours /24;
                             if($time_left < 1)
                             {
                               $time_left = 'Less than 1 day';
                             }
                             else
                             {
                               $time_left = round($time_left) . ' days remaining';
                             }
                           }
                           else
                           {
                             $time_left = 'Expired';
                           }
                         ?>
                           <td> <?php echo $value['title'] ?> </td>
                           <td> <?php echo $value['description'] ?> </td>
                           <td> <?php echo $value['due_date'] ?> </td>
                           <td> <?php echo $time_left ?> </td>
                           <td>
                             <div class="progress">
                               <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $value['progress']?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $value['progress']?>%;">
                                 <span class="sr-only"><?php echo $value['progress']?>% Complete</span>
                               </div>
                             </div>
                           </td>
                           <td> edit | delete </td>
                           </tr>
                           <?php
                       }
                     }
                     else
                     {
                        echo '<td colspan=6>Sorry no more todos under this section</td>';
                     }
                    ?>

              </tbody>
            </table>
          </div>
      </div>
  </body>
</html>






<?php
$link = mysqli_connect("127.0.0.1", "admin", "pass");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
//phpinfo();
?>
