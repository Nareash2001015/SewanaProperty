<?php 

    require_once("propertyconnect.php");

    $Company_ID = $_GET['GetID'];
    $query = "select * from company where Company_ID='".$Company_ID."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Company_ID  = $row['Company_ID'];
        $Owner_ID  = $row['Owner_ID'];
        $Company_address = $row['Company_address'];
        $Company_name = $row['Company_name'];
        $Company_email = $row['Company_email'];
        $Company_contact_no = $row['Company_contact_no'];
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
        <form action="updatecompanyowner.php?ID=<?php echo $Company_ID ?>" method="POST">
            Enter the Onwer ID:
            <input class="form-control" type="text" name="Owner_ID" placeholder="Owner ID" value="<?php echo $Owner_ID?>"><br>
            Enter the Company address:
            <input class="form-control" type="text" name="Company_address" placeholder="Company address" value="<?php echo $Company_address?>"><br>
            Enter the Company NIC:
            <input class="form-control" type="text" name="Company_name" placeholder="Company name" value="<?php echo $Company_name?>"><br>
            Enter the Company email:
            <input class="form-control" type="email" name="Company_email" placeholder="Company email" value="<?php echo $Company_email?>"><br>
            Enter the Company contact number:
            <input class="form-control" type="number" name="Company_contact_no" placeholder="Company contact number" value="<?php echo $Company_contact_no?>"><br>
            Enter the Company ID:
            <input class="form-control" type="text" name="Company_ID" placeholder="Company ID" value="<?php echo $Company_ID?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>