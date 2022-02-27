<?php

//PDO--PHP Database Object
include('Controller/CRUDController.php');
$database=new CRUDController();

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];

  $query="INSERT INTO students(name,phone,address) VALUES('$name','$phone','$address')";
 $database->store($query);
  header('Location:index.php');
}

?>

<?php  include('includes/header.php');   ?>
  <body>
   <div class="container mt-5">
   	<div class="row">
       <?php include('includes/sidebar.php');  ?>
         <div class="col-md-9">
         	<div class="card">
         		<div class="card-header">
         			<h4 class="mb-0 text-center">Students details</h4>
         		</div>
         		<div class="card-body">
             <div class="row justify-content-center">
                 <div class="col-md-6">
                  <form method="POST">
                <label class="w-100 mt-4">
                  <span>Name</span>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                 </label>
                 <label class="w-100 mt-4">
                  <span>Phone</span>
                    <input type="number" name="phone" class="form-control" placeholder="Enter your Phone">
                 </label>
                 <label class="w-100 mt-4">
                  <span>Address</span>
                    <textarea type="text" name="address" class="form-control" placeholder="Enter your address"></textarea> 
                </label>
              <button name="submit" type="submit" class="btn btn-outline-info my-4"><i class="fa-solid fa-plus"></i>Add student</button>
            </form>
                 </div>
         			</div>
              <a href="index.php"><button class="btn btn-outline-primary btn-sm">
                <i class="fa-solid fa-angles-left"></i>     Back</button>
              </a>
         		</div>
         	</div>
         </div>
   	</div>
   </div>

  <?php  include('includes/footer.php');  ?>
   
  </body>
</html>
