<?php

        session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Doctor</title>
</head>
<body>
    <?php

        include("../include/header.php");
        include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margi-left: -30px;">

                    <?php
                        include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">

                    <h5 class="text-center">Edit Doctor</h5>

                    <?php
                        if(isset($_GET['id'])){

                            $id = $_GET['id'];
                            
                            $query = "SELECT * FROM doctors WHERE id='$id'";
                            $res = mysqli_query($connect,$query);

                            $row = mysqli_fetch_array($res);

                        }
                    ?>
                    <div class="row">
                        <div class="col-md-8">

                            <h5 class=""text-center>Doctor Details</h5>
                            <h5 class="my-3">ID : <?php echo $row['id']; ?></h5>
                            <h5 class="my-3">Firstname : <?php echo $row['firstname']; ?></h5>
                            <h5 class="my-3">Surname : <?php echo $row['surname']; ?></h5>
                            <h5 class="my-3">Username : <?php echo $row['username']; ?></h5>
                            <h5 class="my-3">Email : <?php echo $row['email']; ?></h5>
                            <h5 class="my-3">Phone : <?php echo $row['phone']; ?></h5>
                            <h5 class="my-3">Gender : <?php echo $row['gender']; ?></h5>
                            <h5 class="my-3">Country : <?php echo $row['country']; ?></h5>
                            <h5 class="my-3">Date Registered : <?php echo $row['data_reg']; ?></h5>
                            <h5 class="my-3">Salary : <?php echo $row['salary']; ?></h5> 
                        </div>
                        <div class="col-md-4">
                            <h5 class="text-center">Update Salary</h5>
                            <form class="post">
                                <label>Enter Doctor's Salary</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>