<?php 

    require_once("propertyconnect.php");

    $Client_no = $_GET['GetID'];
    $query = "select * from client_property_req where Client_no='".$Client_no."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Client_no  = $row['Client_no'];
        $Requirement_no = $row['Requirement_no'];
        $Requirement_type = $row['Requirement_type'];
        $Area_willing_to_rent = $row['Area_willing_to_rent'];
        $Max_rent = $row['Max_rent'];
        $Property_type = $row['Property_type'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <form action="updatepropertyreq.php?ID=<?php echo $property_no ?>" method="post">
        Enter the Client number:
        <input class="form-control" type="text" name="Client_no	" placeholder="Client number" value="<?php echo $Client_no?>"><br>
        Enter the Requirement number:
        <input class="form-control" type="number" name="Requirement_no" placeholder="Requirement number" value="<?php echo $Requirement_no?>"><br>
        Enter the Requirement type:
        <input class="form-control" type="text" name="Requirement_type" placeholder="Requirement type" value="<?php echo $Requirement_type?>"><br>
        Enter the area willing to rent:
        <input class="form-control" type="text" name="Area_willing_to_rent" placeholder="area willing to rent" value="<?php echo $Area_willing_to_rent?>"><br>
        Enter the maximum rent:
        <input class="form-control" type="number" name="Max_rent" placeholder="maximum rent" value="<?php echo $Max_rent?>"><br>
        Enter the property type:
        <input class="form-control" type="text" name="Property_type" placeholder="property type" value="<?php echo $Property_type?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>