<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Students details</h1>
    <div id="box">
        <button class="btn btn-primary" id="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Students</button>
    </div>
    <div class="container">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr class="table-dark">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Age</td>
                    <td>Email</td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $query = "SELECT * FROM staf";
                $result = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
                <?php
                };
                ?>
            </tbody>
            <?php
                include("modal.php");
            ?>
        </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>