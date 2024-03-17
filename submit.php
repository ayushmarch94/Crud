<?php
    $name=$_POST['name'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $email=$_POST['email'];

    $query="insert into staf (`name`,`address`,`age`,`email`)
    values('$name','$address','$age','$email')";
    include('connect.php');
    $result=mysqli_query($connection,$query);
    header('location:index.php');

?>