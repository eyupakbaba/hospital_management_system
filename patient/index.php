<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Patient Dashboard</title>

    <link rel="stylesheet" href="patient.css">
</head>
<body>
    <?php
        include("../include/header.php");

        
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div id="side" class="col-md-2">

                    <?php
                        include("sidenav.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <h5 class="my-3">Patient Dashboard</h5>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>