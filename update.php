<?php
//connect page to db
include 'connect.php';
//identify row to be updated
$username = $_GET['updateusername'];
//query=> select specific row from db_table
$sql="Select * from `crud` where username=$username";
//variable for query execution
$result = mysqli_query($conn,$sql);
//variable for fetch selected row data
$row=mysqli_fetch_assoc($result);
//variable allocation for fetched data
$username=$row['username'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
//submission action
if(isset($_POST['submit'])){
  //variable assigning for submitted form data
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    //sql query => update selected row data
    $sql="update `crud` set username='$username',name='$name',email='$email',mobile='$mobile',passwprd='$password' where id=$id";
    //variable for query execution
    $res= mysqli_query($conn,$sql);
    //checking of successful query execution using variable declared
    if($res){
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container mt-5">
        <center>
        <form method="POST">
        <!--value displays initial data before update-->
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control"  value=<?php echo $username ?> placeholder="BK1" name="username">
          </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"  value=<?php echo $name ?> placeholder="Names" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control"  value=<?php echo $email ?> placeholder="Email" name="email">
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control"  value=<?php echo $mobile ?> placeholder="+2547XXXXXXXX" name="mobile">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control"  value=<?php echo $password ?> placeholder="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        </center>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>