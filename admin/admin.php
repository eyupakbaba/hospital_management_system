<?php

    session_start();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Admin</title>
</head>
<body>
    <?php
        include("../include/header.php");


    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">
                    <?php
                        include("sidenav.php");
                        include("../include/connection.php");
                    ?>
                </div>
                <div class="col-md-10">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-center">All Administrators</h5> 

                                <?php

                                    $ad = isset($_SESSION['admin']);
                                    $query = "SELECT * FROM admin WHERE username !='$ad'";
                                    $res = mysqli_query($connect,$query);
                                    
                                    $output = "
                                        <table class='table table-bordered'>
                                        <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th style='width: 10%;'>Action</th>
                                        </tr>
                                    ";

                                    if(mysqli_num_rows($res) < 1){
                                        
                                        $output .= "<tr>
                                                        <td colspan='3' class='text-center'>No New Admin
                                                        <i class='fa-solid fa-user-secret fa-2x' style='color:white;'></i>
                                                        </td>
                                                    </tr>";
                                    }
                                    while($row = mysqli_fetch_array($res)){
                                        
                                        $id = $row['id'];
                                        $username = $row['username'];
                                        
                                        $output .= "
                                        
                                            <tr>
                                            <td>$id</td>
                                            <td>$username</td>
                                            <td>
                                                <a href='admin?id=$id'><button id='$id' class='btn btn-danger remove'>Remove</button></a>
                                            </td>
                                        ";
                                    }
                                    $output .="
                                        </tr>
                                        </table>
                                    
                                    ";

                                    echo $output;

                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];

                                        $query = "DELETE FROM admin WHERE id = '$id'";
                                        mysqli_query($connect,$query);
                                    }
                                ?>

                            </div>
                
                        </div>
                    </div>        
                </div>
            </div>    
        </div>
    </div>
</body>
</html>