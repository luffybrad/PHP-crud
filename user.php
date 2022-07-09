<?php
//connecting page to db
include 'connect.php';
//capture form data once form is submitted
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    //sql query declaration to insert form data to db
    $sql="insert into `crud` (username,name,email,mobile,password) values('$username','$name', '$email','$mobile','$password')";
    //variable for execution of query
    $res= mysqli_query($conn,$sql);
    //checking if query is executed successfully using variable declared
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
        <!--post method to hide user data. name attribute to uniquely identify form data-->
        <form method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Names" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" placeholder="+2547XXXXXXXX" name="mobile">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </center>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>