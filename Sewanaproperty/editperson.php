<?php 

    require_once("propertyconnect.php");

    $NIC = $_GET['GetID'];
    $query = "select * from person where NIC='".$NIC."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $NIC     = $row['NIC'];
        $Owner_ID = $row['Owner_ID'];
        $Per_contact_no  = $row['Per_contact_no'];
        $Per_address  = $row['Per_address'];
        $Per_email  = $row['Per_email'];
        $Per_name   = $row['Per_name'];
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
<form action="updatepersonowner.php?ID=<?php echo $NIC ?>" method="POST">
            Enter the Onwer ID:
            <input class="form-control" type="text" name="Owner_ID" placeholder="Owner ID" value="<?php echo $Owner_ID?>"><br>
            Enter the Person contact number:
            <input class="form-control" type="number" name="Per_contact_no" placeholder="Person contact number" value="<?php echo $Per_contact_no?>"><br>
            Enter the Person address:
            <input class="form-control" type="text" name="Per_address" placeholder="Person address" value="<?php echo $Per_address?>"><br>
            Enter the Person email:
            <input class="form-control" type="email" name="Per_email" placeholder="Person email" value="<?php echo $Per_email?>"><br>
            Enter the Person name:
            <input class="form-control" type="text" name="Per_name" placeholder="Person name" value="<?php echo $Per_name?>"><br>
            Enter the Person NIC:
            <input class="form-control" type="text" name="NIC" placeholder="Person NIC" value="<?php echo $NIC?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>