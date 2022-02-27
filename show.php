<?php

//PDO--PHP Database Object
include('Controller/CRUDController.php');
$id=$_GET['id'];
if(!$id)
{
  header('location:index.php');
}

$query="SELECT * FROM students WHERE id=$id";
$database=new CRUDController();

$results=$database->show($query);

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
         			<table class="table table-bordered table-stripped">
         				<tbody>
                <tr>
                  <th>ID</th>
                  <td><?php  echo $results->id;  ?></td>
                </tr>
                <tr>
                  <th>Name</th>
                  <td><?php  echo $results->name;  ?></td>
                </tr>
                <tr>
                  <th>Phone</th>
                  <td><?php  echo $results->phone;  ?></td>
                </tr>
                <tr>
                  <th>Address</th>
                  <td><?php  echo $results->address;  ?></td>
                </tr>
                </tbody>
         			</table>
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
