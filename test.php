<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Image Upload</title>
  </head>

  <body>
    <pre>
    <?php
     if(isset($_POST['submit'])){
      $image=$_FILES['image']['name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $path='image/uploaded-image-'.random_int(1000, 9999).'.'.$extension;
     move_uploaded_file($_FILES['image']['tmp_name'],$path);
     }
    ?>
</pre>
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-danger">
              <h4 class="mb-0">Image Upload</h4>
            </div>
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data">
                <input type="file" name="image" class="form-control my-3">
                <button class="btn btn-info" type="submit" name="submit">Save Image</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="mb-0">Project Details</h4>
            </div>
            <div class="card-body">
            <?php
               echo $_SERVER['PHP_SELF'] ."<br>";
               echo $_SERVER['SERVER_NAME'] ."<br>";
              echo $_SERVER['SERVER_SOFTWARE'] ."<br>";
              echo $_SERVER['SERVER_PROTOCOL'] ."<br>";
              echo $_SERVER['HTTP_USER_AGENT'] ."<br>";

            /*  setcookie('user', 'user_value_4064',time()+5);

              if(isset($_COOKIE['user'])){
                 echo $_COOKIE['user'];
                 }
              else{
                 echo 'No Cookie Found';
                 }   */

            date_default_timezone_set('Asia/Dhaka');
            echo date('d-m-y & h:i:s a') ."<br>";   //D means  week day,,M means month
             echo date('D, M-Y') ."<br>";

           ?>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>



<?php
echo "public access modifier";
class Phone{
  public $model='13 Pro', $price='135000';
}
class Iphone extends Phone{
  public $color='Red';
  //parent er properties override can be done
  public $price='500000';
}
$iphone=new Iphone();

echo $iphone->model;
echo '<br/>' ;
echo $iphone->price;
echo '<br/>' ;
echo $iphone->color;
echo '<br/>' ;
?>

<?php
echo "private access modifier";
class Mobile{
  protected $model='13 Pro', $price='135000';
}
class Apple extends Mobile{
  public $new_model;
  //parent er properties override can be done
  public function __construct()
  {
    $this->new_model=$this->model;
  }
}
$phone=new Apple();

echo $phone->new_model;
echo '<br/>' ;

?>
