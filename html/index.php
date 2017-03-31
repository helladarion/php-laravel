      <?php include_once('statics/header.php'); ?>
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
                  <td> Todo </td>
                  <td> Should complete it </td>
                  <td> 2017-03-30 </td>
                  <td> 18hours </td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </td>
                  <td> edit | delete </td>

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
