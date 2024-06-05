<!-- <?php 
include "connect.php";
$id=$_GET['updateid'];

$sql="select * from `crud` where id='$id'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    
    $res=mysqli_query($con,$sql);

    if($res){
    // echo "update successfully";
     header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Update Operation</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="my-5 color-red">Update Operation</h1>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" 
                name="name" autocomplete="off" value=<?php echo $name?>>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter the Email" 
                name="email" autocomplete="off" value=<?php echo $email?>>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Mobile</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter mobile number" 
                name="mobile" autocomplete="off" value=<?php echo $mobile?>>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter password" 
                name="password" autocomplete="off" value=<?php echo $password?>>
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>