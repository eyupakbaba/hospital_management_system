<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="account.css">
</head>
<body> 
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 my-2 jumbotron">
                   
                    <h5 class="text-center text-info my-2">Create Account</h5>

                    <form method="post">
                        <div class="form-group">
                            <label for="">Firstname</label>
                            <input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label for="">Surname</label>
                            <input type="text" name="sname" class="form-control" autocomplete="off" placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="">Phone No</label>
                            <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone No">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" class="form-control">
                                <option value="">select your gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Country</label>
                            <select name="country" class="form-control">
                                <option value="">select your country</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Italy">Italy</option>
                                <option value="Brasil">Brasil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email">
                        </div>
                    </form>

                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    
</body>
</html>