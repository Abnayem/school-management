<?php include('../includes/config.php') ?>

<?php
$error = '';
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5(123456780);
  $type = $_POST['type'];
  
  $check = mysqli_query($db_conn,"SELECT * FROM accounts WHERE email = '$email'");
  if(mysqli_num_rows($check) > 0)
  {
    $error = "Email already exists";
  }
  else
  {
    mysqli_query($db_conn,"INSERT INTO  accounts(`name`,`email`,`password`,`type`) VALUES('$name','$email','$password','$type')") or die(mysqli_error($db_conn));
    $_SESSION['success_msg'] = 'user has been succesfuly registerd';
    header('location: user-account.php?user='.$type);
    exit;
  }
  
  
}

?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="d-flex">
            <h1 class="m-0">Manage Accounts</h1>
            <a href="user-account.php?user=<?php echo ($_REQUEST['user'])?>&action=add-new" class="btn btn-primary">Add New</a>
            </div>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])?></li>
            </ol>
          </div>
          <?php
           
            if(isset($_SESSION['success_msg']))
            {?>
              <div class="col-12">
                <small class="text-success" style="font-size:16px"><?=$_SESSION['success_msg']?></small>
              </div>
            <?php 
              unset($_SESSION['success_msg']);
            }
          ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
       <?php if(isset($_GET['action']) && $_GET['action'])
       { 
       ?>
          <div class="card">
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full name" name="name">
                  <?php echo $error?>
                </div>
                 <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address" name="email">
                
                </div>
                <input type="hidden"   name="type" value="<?php echo $_REQUEST['user']?>">
                <input type="submit" name="submit" class="btn btn-primary" value="Register">
              </form>
            </div>
          </div>


       <?php } else { 
        
        ?>

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
       
      <?php }?>
      </div>
    </section>
<?php include('footer.php'); ?>