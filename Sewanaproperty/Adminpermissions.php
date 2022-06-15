<?php
    require_once ("propertyconnect.php");    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Sewana property Renters</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
      </div>
    </nav>

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="container">
            <div class="card" style="width: 18rem;">
            <center>
                <div class="card-body">
                    <h5 class="card-title">Welcome admin</h5>
                    <form action="adminpermitselect.php" method="POST">
                        Newspaper details  <input type="radio" name="adminpermit" value = "newspaper"><br>
                        Property details  <input type="radio" name="adminpermit" value = "property"><br>
                        Branch details  <input type="radio" name="adminpermit" value = "branch"><br>
                        Owner details  <input type="radio" name="adminpermit" value = "owner"><br>
                        Client details  <input type="radio" name="adminpermit" value = "client"><br>
                        Staff details  <input type="radio" name="adminpermit" value = "staff"><br>
                        Advertisement details  <input type="radio" name="adminpermit" value = "advertise"><br>
                        Lease details  <input type="radio" name="adminpermit" value = "lease"><br>
                        <div class="col-12">
                            <button class="btn btn-primary" name="login">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    
</body>
</html>