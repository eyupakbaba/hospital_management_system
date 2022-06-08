<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Profile</title>
</head>
<body>
    
    <?php
        include("../include/header.php");
        include("../include/connection.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">

                    <?php
                        include("sidenav.php");

                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <h5>My Profile</h5>

                                <form action="" method="post" enctype="multipart/form-data">

                                    <?php
                                        
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>