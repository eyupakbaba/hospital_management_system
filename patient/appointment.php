<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Book Appointment</title>

<body>
    <?php
        include("../include/header.php");
        include("../include/connection.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                        include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="text-center my-2">Book Appointment</h5>

                    <?php
                        $pat = $_SESSION['patient'];
                        $query = "SELECT * FROM  patient WHERE username='$pat'";

                        $sel = mysqli_query($connect,$query);
                        $row = mysqli_fetch_array($sel);

                        
                    ?>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="col-md-6">
                                    <form action="" method="post">
                                        <label for="">Appointment Date</label>
                                        <input type="date" name="date" class="form-control">
                                        <label for="">Symptoms</label>
                                        <input type="text" name="sym" class="form-control" autocomplete="off" placeholder="Enter Symtoms">
                                        <input type="submit" name="book" class="btn btn-info" value="Book Appointment">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>