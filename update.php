<?php
include('connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `staf` WHERE `id` = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST['update_btn'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        $query = "UPDATE `staf` SET `name` = '$name', `address` = '$address', `age` = '$age', `email` = '$email' WHERE `id` = $id";

        $result = mysqli_query($connection, $query);
        header('location:index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Values</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Update Values</h1>
    <div class="my-5" id="update_box">
        <div id="modal-body">
            <form action="update.php?id=<?php echo $id; ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control my-3" value="<?php echo $row['name']; ?>">

                    <label for="address">Address</label>
                    <input required type="text" name="address" class="form-control my-3" value="<?php echo $row['address']; ?>">

                    <label for="age">Age</label>
                    <input required type="number" name="age" class="form-control my-3" value="<?php echo $row['age']; ?>">

                    <label for="email">Email</label>
                    <input required type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                </div>
                <div id="update_footer" class="modal-footer my-5">
                    <a href="index.php" class="btn btn-secondary">Close</a>
                    <input id="update_button" name="update_btn" type="submit" class="btn btn-primary my-5" value="Update">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
