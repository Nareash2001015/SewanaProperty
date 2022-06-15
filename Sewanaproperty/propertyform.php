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
    <form action= "insertpropertydetails.php" method="POST">
        Enter the Property number:
        <input class="form-control" type="text" name="property_no" placeholder="Property number"><br>
        Enter the Proposed rental value:
        <input class="form-control" type="number" name="Proposed_rental" placeholder="Proposed rental value"><br>
        Enter the Number of rooms:
        <input class="form-control" type="number" name="No_of_rooms" placeholder="Number of rooms"><br>
        Enter the Property type:
        <input class="form-control" type="text" name="Property_type" placeholder="Property type"><br>
        Enter the Owner ID:
        <input class="form-control" type="text" name="Owner_ID" placeholder="Owner ID"><br>
        <div class="col-12">
            <button  name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
         
</body>
</html>