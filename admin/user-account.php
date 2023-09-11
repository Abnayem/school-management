<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <th>S.No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
          </thead>
          <tbody>
          <?php  
          $db_conn = mysqli_connect('localhost','root','','ab_project');

          if(!$db_conn)
          {
          echo "Connection failed";
          exit;
          
          }
          $count = 1;
          $user_query = 'SELECT * FROM accounts where `type` = "'.$_REQUEST['user'].'"';
          $user_result = mysqli_query($db_conn , $user_query);
           
           
           // while($user = mysqli_fetch_array($user_result))
           // {
           //  echo $user['email'];
           // } 


           // $user = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
           // print_r($user);
          while($user = mysqli_fetch_object($user_result))
            {
             
            

          

          ?>
          <tr>
            <td><?=$count++?></td>
            <td><?=$user->name?></td>
            <td><?=$user->email?></td>
            <td></td>
          </tr>
          <?php }?>
          
          </tbody>
        </table>
          

          
          
        </div>
      
      </div>
    </section>
<?php include('footer.php'); ?>