<?php
    require_once ("propertyconnect.php");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="rent.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="position-absolute top-50 start-50 translate-middle">
            <div class="container">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <center>
                        <h5 class="card-title">Welcome staff</h5>
                        <form action = "Viewstaff.php" method = "POST">
                            
                            
                            Username<input type="text" name="user" placeholder="Username"><br>
                            password  <input type="password" name="pass" placeholder="password"><br><br>
                           
                            <div class="col-12">
                                <button class="btn btn-primary" name="login">Submit</button>
                            </div>or<br>

                            <div class="col-12">
                                    <button class="btn btn-primary" name="assistant">Sign up as Assistant</button>
                            </div>or<br>
                            <div class="col-12">
                                    <button class="btn btn-primary" name="supervisor">Sign up as Supervisor</button>
                            </div>or<br>
                            <div class="col-12">
                                    <button class="btn btn-primary" name="manager">Sign up as Manager</button>
                            </div>or<br>
                            <div class="col-12">
                                    <button class="btn btn-primary" name="staff">Sign up as other staff</button>
                            </div>
                            <!--<button type="submit" name="client" value="Sign up as a client"></center><br>-->
        
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>

