<?php 

    require_once("propertyconnect.php");

    $Client_no = $_GET['GetID'];
    $query = "select * from client where Client_no='".$Client_no."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Client_no  = $row['Client_no'];
        $Client_email = $row['Client_email'];
        $Client_NIC = $row['Client_NIC'];
        $Client_full_name = $row['Client_full_name'];
        $Emp_ID = $row['Emp_ID'];
        $Branch_no = $row['Branch_no'];
        $Registered_date = $row['Registered_date'];
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
        <form action="updateclientinfo.php?ID=<?php echo $Client_no ?>" method="post">
            Enter the client number:
            <input class="form-control" type="text" name="Client_no" placeholder="Client number" value="<?php echo $Client_no?>"><br>
            Enter the email:
            <input class="form-control" type="email" name="Client_email" placeholder="email" value="<?php echo $Client_email?>"><br>
            Enter the NIC:
            <input class="form-control" type="text" name="Client_NIC" placeholder="NIC" value="<?php echo $Client_no?>"><br>
            Enter the full name:
            <input class="form-control" type="text" name="Client_full_name" placeholder="full name" value="<?php echo $Client_full_name?>"><br>
            Enter the staff ID of the employee registrered:
            <input class="form-control" type="text" name="Emp_ID" placeholder="staff ID" value="<?php echo $Emp_ID?>"><br>
            Enter the Branch number:
            <input class="form-control" type="text" name="Branch_no" placeholder="Branch number"value="<?php echo $Branch_no?>"><br>
            Enter the registered date:
            <input class="form-control" type="date" name="Registered_date" placeholder="Registered date"value="<?php echo $Registered_date?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>