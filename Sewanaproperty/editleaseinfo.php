<?php 

    require_once("propertyconnect.php");

    $connectID = $_GET['GetID'];
    $query = "select * from lease where concat(property_no,Client_no)='".$connectID."';" ;  
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $property_no  = $row['property_no'];
        $Client_no = $row['Client_no'];
        $Payment_method = $row['Payment_method'];
        $Rent_start_date = $row['Rent_start_date'];
        $Rent_finish_date = $row['Rent_finish_date'];
        $Monthly_rent = $row['Monthly_rent'];
        $Duration = $row['Duration'];
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
        <form action="updateleaseinfo.php?ID=<?php echo $property_no.$Client_no ?>" method="post">
        Enter the Property number:
        <input class="form-control" type="text" name="property_no" placeholder="Property number" value="<?php echo $property_no?>"><br>
        Enter the Client number:
        <input class="form-control" type="text" name="Client_no" placeholder="Client number" value="<?php echo $Client_no?>"><br>
        Enter the Payment method:
        <input class="form-control" type="text" name="Payment_method" placeholder="Payment method" value="<?php echo $Payment_method?>"><br>
        Enter the rent start date:
        <input class="form-control" type="date" name="Rent_start_date" placeholder="rent start date" value="<?php echo $Rent_start_date?>"><br>
        Enter the rent finish date:
        <input class="form-control" type="date" name="Rent_finish_date" placeholder="rent finish date" value="<?php echo $Rent_finish_date?>"><br>
        Enter the monthly rent:
        <input class="form-control" type="number" name="Monthly_rent" placeholder="monthly rent" value="<?php echo $Monthly_rent?>"><br>
        Enter the rent duration:
        <input class="form-control" type="number" name="Duration" placeholder="year" value="<?php echo $Duration?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>