<?php   
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Profile</title>
</head>
<body>

    <?php

        include("../include/header.php");

        include("../include/connection.php");

    

        $ad = $_SESSION['admin'];

        $query = "SELECT * from admin WHERE username = '$ad'";

        $res = mysqli_query($connect,$query);

        while($row = mysqli_fetch_array($res)){

            $username = $row[1];
            $profiles = $row[3];
        }

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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                
                                <h4>
                                    <?php 
                                        
                                
                                        echo $username . " " ; 
                                    
                                    ?>PROFILE
                                </h4>
            
                                <?php
                                    
                                    if(isset($_POST['update'])){

                                        $profile = $_FILES['profile']['name'];

                                        if(empty($profile)){

                                        }else{
                                            $query = "UPDATE admin SET profile = '$profile' WHERE username = '$ad' ";

                                            $result = mysqli_query($connect,$query);

                                            if($result){

                                                move_uploaded_file($_FILES['profile']['tmp_name'],"img/$profile");
                                            }
                                        }
                                    }
                                
                                ?>
                                <form method="post" enctype="multipart/form-data">
                                    

                                    <?php 

                                    $ad = $_SESSION['admin'];
                                    
                                    $query = "SELECT * from admin WHERE username = '$ad'";

                                    $res = mysqli_query($connect,$query);

                                    while($row = mysqli_fetch_row($res)){

                                        
                                        $username = $row[1];
                                        $profiles = $row[3];
                                        

                                    }

                                    ?>

                                    <img src='img/<?php echo $profiles; ?>' class='col-md-12' style='height: 250px;'>
                                    
                                    <br></br>
                                    <div class="form-group">
                                        <label for="">UPDATE PROFILE</label>
                                        <input type="file" name="profile" class="form-control">
                                    </div>
                                    
                                    <input type="submit" name="update" value="UPDATE" style="margin-top: 10px;">
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