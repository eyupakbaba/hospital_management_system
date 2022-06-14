<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Total Incomes</title>

    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <?php

        include("../include/connection.php");
        include("../include/header.php");

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
                    
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>