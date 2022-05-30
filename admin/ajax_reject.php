<?php

    include("../include/connection.php");

    $id = $_POST['id'];

    $query = "UPDATE doctors WHERE status = 'Rejected' WHERE id = '$id'";

    mysqli_query($connect,$query);


?>