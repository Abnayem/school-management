<?php include('../includes/config.php') ?>
<?php


if(isset($_POST['submit']))
{
  $title = $_POST['title'];
  $section = implode(',',$_POST['section']);
  $added_date = date('Y-m-d');
  

  mysqli_query($db_conn,"INSERT INTO classes (title,section,added_date) VALUE ('$title','$section','$added_date')")
  or die('error');
}


?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Classes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Classes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
<div class="container-fluid">
<?php
if(isset($_REQUEST['action']))
{ 
?>
<div class="card">
<div class="card-header py-2">

<h3 class="card-title">Add New Classes</h3>


</div>
<div class="card-body">
<form action="" method="POST">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Title" required class="form-control"> 
  </div>
  <div class="form-group">
  <label for="section">Section</label>
    <?php
    

     if(!$db_conn)
     {
     echo "Connection failed";
     exit;
     
     }
     $query = mysqli_query($db_conn, 'SELECT * FROM sections');
     $count =1 ;
     while($section = mysqli_fetch_object( $query))
     { 
    ?>
  
       <div>
      <label for="<?=$count++?>">
        <input type="checkbox" name="section[]" id="<?=$count++?>" value="<?=$section->id?>" placeholder="Section">
        <?=$section->title?>
      </label>
     </div>
    <?php }?>
  </div>
  <button class="btn btn-success" name="submit">Submit</button>
</form>
</div>
</div>
<?php } else {?>
  <div class="card">
   <div class="card-header py-2">
     <h3 class="card-title">Classes</h3>
     <div class="card-tools">
      <a href="?action=add-new" class="btn btn-success"><i class="fa fa-plus mr-2"></i>Add New</a>
     </div>
   </div>
   <div class="card-body">
    <div class="table-responsive bg-white">
     <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Seection</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
    
      $count = 1;
      $args = array(
        'type' => 'class',
        'status' => 'publish',
      );
      $classes = get_posts($args);
foreach($classes as $class)
     
      {?>

        <tr>
          <td><?=$count++?></td>
          <td><?=$class->title?></td>
          <td>
            <?php
            //  $sections = explode(',',$classes->section);
            //  foreach($sections as $section)
            //  {
            //   $sec_query = mysqli_query($db_conn,'SELECT * FROM sections WHERE ID = '.$section.'');
            //   $sec = mysqli_fetch_object($sec_query);
            //   echo $sec->title.'<br>';
            //  }
           
            

            ?>
         
           </td>
          <td></td>
        </tr>


      <?php }?>
    </tbody>
     </table>
    </div>
   </div>
  </div>
<?php }?>
      </div>
    </section>
<?php include('footer.php'); ?>