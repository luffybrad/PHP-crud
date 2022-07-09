<?php
//connect pgae to db
include "connect.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
    <div class="container">
        <a href="user.php"><button class="btn btn-primary my-5">Add user</button></a>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Username</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Password</th>
              <th scope="col" colspan="2">Operation</th>
            </tr>
          </thead>
          <tbody>
            <?php
            //sql_db query=>selecting all data from table
                $sql="Select * from `crud`";
                //variable for executing query
                $result=mysqli_query($conn,$sql);
                //checking if query is executed successfully using variable declared
                if($result){
                    //to fetch table data 
                    while($row=mysqli_fetch_assoc($result)){
                        $username=$row['username'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $password=$row['password'];
                        //displaying iteratively on table
                        //operations select db_table specifically to be operated on
                        echo "
                        <tr>
                        <th scope='row'>".$username."</th>
                        <td>".$name."</th>
                        <td>".$email."</td>
                        <td>".$mobile."</td>
                        <td>".$password."</td>
                        <td><a href='update.php?updateusername=".$username."'><button class='btn btn-primary'>Update</button></a></td>
                        <td><a href='delete.php?deleteusername=".$username."'><button class='btn btn-danger'>Delete</button></a></td>
                      </tr>
                      ";
                    }
                }
            ?>

          </tbody>
        </table>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>