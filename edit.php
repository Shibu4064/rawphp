<?php

//PDO--PHP Database Object

include('Controller/CRUDController.php');
$database=new CRUDController();

$id=$_GET['id'];
if(!$id)
{
  header('location:index.php');
}

$query="SELECT * FROM students where id=$id";
$results=$database->show($query);

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];

  $query="UPDATE students SET name='$name',phone='$phone',address='$address' where id=$id";
  $database->update($query);
  header('Location:index.php');
}
  include('includes/header.php');
?>

  <body>
   <div class="container mt-5">
   	<div class="row">
       <?php include('includes/sidebar.php');  ?>
         <div class="col-md-9">
         	<div class="card">
         		<div class="card-header">
         			<h4 class="mb-0 text-center">Update Details</h4>
         		</div>
         		<div class="card-body">
             <div class="row justify-content-center">
                 <div class="col-md-6">
                  <form method="POST">
                <label class="w-100 mt-4">
                  <span>Name</span>
                    <input type="text" name="name" value="<?php echo $results->name; ?>" class="form-control" placeholder="Enter your name">
                 </label>
                 <label class="w-100 mt-4">
                  <span>Phone</span>
                    <input type="number" name="phone" value="<?php echo $results->phone; ?>" class="form-control" placeholder="Enter your Phone">
                 </label>
                 <label class="w-100 mt-4">
                  <span>Address</span>
                    <textarea type="text" name="address" class="form-control" placeholder="Enter your address"><?php echo $results->address; ?></textarea> 
                </label>
              <button name="submit" type="submit" class="btn btn-outline-info my-4"><i class="fa-solid fa-user-edit"></i>Update Details</button>
            </form>
                 </div>
         			</div>
              <a href="index.php"><button class="btn btn-outline-primary btn-sm">
                <i class="fa-solid fa-angles-left"></i>   Back</button>
              </a>
         		</div>
         	</div>
         </div>
   	</div>
   </div>

  <?php  include('includes/footer.php');  ?>
   
  </body>
</html>
