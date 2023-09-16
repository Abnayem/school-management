<?php include('../includes/config.php') ?>
<?php



if(isset($_POST['submit']))
{
  
$name = $_POST['course'];
$category =  $_POST['category'];
$duration =  $_POST['duration'];
$date =  date('Y-m-d');
$imgfile = $_FILES['thumnail']['name'];
$tmp_dir = $_FILES['thumnail']['tmp_name'];
$imgsize = $_FILES['thumnail']['size'];

    $upload_dir ='../dist/upload/';
		$img = strtolower(pathinfo($imgfile,PATHINFO_EXTENSION));
		$valid_exenstion = array('jpeg','jpg','png','gif');
		$productspic = rand(100,10000000).".".$img;
    
		if(in_array($img, $valid_exenstion))
		{
			if(move_uploaded_file($tmp_dir,$upload_dir.$productspic))
			{
				mysqli_query($db_conn,"INSERT INTO coureses (name,category,	duration,image,date) VALUE ('$name','$category','$duration','$productspic','$date')")
        or die(mysqli_error($db_conn));
        $_SESSION['success_msg'] = 'Course has been uploaded successfuly';
        header('Location: courses.php'); exit;
        
			}
			else
			{
        if($imgsize > 5000000)
       {
      echo "sorry,the file is soo long";
        }
				
			}
     
		}
		else
		{

			echo "sorry, only jpg,png and gif image are allowed";
    
		}
  

  
}


?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Courses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Courses</li>
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
<?php
if(isset($_REQUEST['action']))
{ 
?>
<div class="card">
<div class="card-header py-2">

<h3 class="card-title">Add New Courses</h3>


</div>
<div class="card-body">
<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Course Name</label>
    <input type="text" name="course" placeholder="Course Title" required class="form-control"> 
  </div>
  <div class="form-group">
<label for="category">Course Category</label>
  <select name="category" id="category" class="form-control">
    <option value="">Selected Category</option>
    <option value="web-design-and-development">Web Design & Development</option>
    <option value="app-development">App Development</option>
  </select>
</div>
<div class="form-group">
  <label for="duration">Course Duration</label>
<input type="text" name="duration" id="duration" class="form-control" placeholder="course Duration" required>
</div>
<div class="form-group">
<input type="file" name="thumnail" id="thumnail" required>
</div>
  <button class="btn btn-success" name="submit">Submit</button>
</form>
</div>
</div>
<?php } else {?>
  <div class="card">
   <div class="card-header py-2">
     <h3 class="card-title">Courses</h3>
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
        
        <th>Course Name</th>
        <th>Category</th>
        <th>Duration</th>
        <th>Date</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      <?php 
   
      $count = 1;
      $query = mysqli_query($db_conn,'SELECT * FROM coureses');
      while($courses = mysqli_fetch_object($query))
      {
        ?>

        <tr>
          <td><?=$count++?></td>
          <td><?=$courses->name?></td>
          <td><?=$courses->category?></td>
          <td><?=$courses->duration?></td>
          <td><?=$courses->date?></td>
          <td><img src="../dist/upload/<?=$courses->image?>" alt="<?=$courses->name?>" height="100"  class="border" style="height:178px;!important;object-fit:cover;object-position:center;"></td>
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