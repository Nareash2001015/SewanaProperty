<?php 

    require_once("propertyconnect.php");

    $Emp_ID = $_GET['GetID'];
    $query = "select * from supervisor where Emp_ID='".$Emp_ID."';";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Emp_ID  = $row['Emp_ID'];
        $supervisor_no = $row['supervisor_no'];
        $Emp_start_date = $row['Emp_start_date'];
        $Staff_type = $row['Staff_type'];
        $Emp_DOB = $row['Emp_DOB'];
        $Emp_NIC = $row['Emp_NIC'];
        $Emp_Name = $row['Emp_Name'];
        $Emp_contact_no = $row['Emp_contact_no'];
        $Emp_Gender = $row['Emp_Gender'];
        $Emp_salary = $row['Emp_salary'];
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
        <form action="updatesupervisor.php?ID=<?php echo $Emp_ID ?>" method="post">
        Enter the staff number:
        <input class="form-control" type="text" name="Emp_ID" placeholder="staff number" value="<?php echo $Emp_ID?>"><br>
        Enter the supervisor number:
        <input class="form-control" type="number" name="supervisor_no" placeholder="supervisor number" value="<?php echo $supervisor_no?>"><br>
        Enter the staff start date:
        <input class="form-control" type="date" name="Emp_start_date" placeholder="staff start date" value="<?php echo $Emp_start_date?>"><br>
        Enter the staff type:
        <input class="form-control" type="text" name="Staff_type" placeholder="staff type" value="<?php echo $Staff_type?>"><br>
        Enter the date of birth:
        <input class="form-control" type="date" name="Emp_DOB" placeholder="maximum rent" value="<?php echo $Emp_DOB?>"><br>
        Enter the NIC:
        <input class="form-control" type="text" name="Emp_NIC" placeholder="date of birth" value="<?php echo $Emp_NIC?>"><br>
        Enter the name:
        <input class="form-control" type="text" name="Emp_Name" placeholder="name" value="<?php echo $Emp_Name?>"><br>
        Enter the gender:
        <input class="form-control" type="text" name="Emp_Gender" placeholder="gender" value="<?php echo $Emp_Gender?>"><br>
        Enter the contact number:
        <input class="form-control" type="number" name="Emp_contact_no" placeholder="contact number" value="<?php echo $Emp_contact_no?>"><br>
        Enter the staff salary:
        <input class="form-control" type="number" name="Emp_salary" placeholder="staff salary" value="<?php echo $Emp_salary?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>