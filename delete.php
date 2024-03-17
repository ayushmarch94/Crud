<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <?php
        include('connect.php');

        $id=$_GET['id'];
        $query="delete from staf where `id`='$id'";
        $result=mysqli_query($connection,$query);
        header('location:index.php');
    ?>
</body>
</html>