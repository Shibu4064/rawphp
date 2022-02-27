<?php

//PDO--PHP Database Object

include('Controller/CRUDController.php');
$database=new CRUDController();
$query="SELECT * FROM students";
$results= $database->index($query);


if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	$delete_query="DELETE FROM students WHERE id=$id";
	$database->delete($delete_query);
	header('location:index.php');
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
         			<h4 class="mb-0 text-center">Students List</h4>
         		</div>
         		<div class="card-body">
         			<table class="table table-bordered table-stripped">
         				<thead>
         					<tr class="text-center">
                       <th>SL</th>
                       <th>Name</th>
                       <th>Phone</th>
                       <th>Address</th>
                       <th>Action</th>
         					</tr>
         				 </thead>
         				<tbody>
         					<?php
         					$sl=1;
                  foreach ($results as $result) {
                    ?>
         					<tr class="text-center">
                               <td><?php echo $sl++;  ?></td>
                               <td><?php echo $result->name;  ?></td>
                               <td><?php echo $result->phone;  ?></td>
                               <td><?php echo $result->address;  ?></td>
                               <td class="justify-content-center d-flex">
                                     <a href="show.php?id=<?php echo $result->id ?>">    
                            	       <button class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i></button> 
                            	     </a>
                              <a href="edit.php?id=<?php echo $result->id ?>"> 	<button class="btn btn-info btn-sm ms-1"><i class="fa-solid fa-edit"></i></button>
                               </a>
                               	<form method="POST">
                               		<input type="number" class="d-none" name="id" value="<?php echo $result->id ?>">
                               	    <button name="delete" onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm ms-1">
                               	    	<i class="fa-solid fa-trash"></i>
                               	    </button>
                               </form>
                               </td>
         					</tr>
         				<?php  }  ?>
         				</tbody>
         			</table>
         		</div>
         	</div>
         </div>
   	</div>
   	
   </div>

  <?php  include('includes/footer.php');  ?>
   
  </body>
</html>
