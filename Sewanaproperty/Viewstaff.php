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
    <?php
    if(isset($_POST['login']))
    {
        $username = $_POST['user'] ;
        $password = $_POST['pass'] ;

        if(($username == "assistant" && $password == "assistant123") or ($username == "manager" && $password == "manager123") or ($username == "supervisor" && $password == "supervisor123"))
        {
            header("location:allproperties.php");
        }
        else
        {
            ?>
            You have entered wrong username or password.
            <?php
        }
    }
    elseif(isset($_POST['assistant']))
    {
    ?>
        <form action= "insertassistant.php" method="POST">
            Enter the staff number:
            <input class="form-control" type="text" name="Emp_ID" placeholder="staff number" ><br>
            Enter the supervisor ID of staff's supervisor:
            <input class="form-control" type="text" name="Supervisor_ID" placeholder="supervisor ID of staff's supervisor" ><br>
            Enter the appointed date:
            <input class="form-control" type="date" name="Appoint_date" placeholder="supervisor ID of staff's supervisor" ><br>
            Enter the staff start date:
            <input class="form-control" type="date" name="Emp_start_date" placeholder="staff start date" ><br>
            Enter the staff type:
            <input class="form-control" type="text" name="Staff_type" placeholder="staff type" ><br>
            Enter the date of birth:
            <input class="form-control" type="date" name="Emp_DOB" placeholder="maximum rent" ><br>
            Enter the NIC:
            <input class="form-control" type="text" name="Emp_NIC" placeholder="date of birth"><br>
            Enter the name:
            <input class="form-control" type="text" name="Emp_Name" placeholder="name" ><br>
            Enter the gender:
            <input class="form-control" type="text" name="Emp_Gender" placeholder="gender"><br>
            Enter the contact number:
            <input class="form-control" type="number" name="Emp_contact_no" placeholder="contact number" ><br>
            Enter the staff salary:
            <input class="form-control" type="number" name="Emp_salary" placeholder="staff salary" ><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    elseif(isset($_POST['supervisor']))
    {
    ?>
        <form action= "insertsupervisor.php" method="POST">
        Enter the staff number:
        <input class="form-control" type="text" name="Emp_ID" placeholder="staff number" ><br>
        Enter the supervisor number:
        <input class="form-control" type="number" name="supervisor_no" placeholder="supervisor number" ><br>
        Enter the staff start date:
        <input class="form-control" type="date" name="Emp_start_date" placeholder="staff start date" ><br>
        Enter the staff type:
        <input class="form-control" type="text" name="Staff_type" placeholder="staff type"><br>
        Enter the date of birth:
        <input class="form-control" type="date" name="Emp_DOB" placeholder="maximum rent"><br>
        Enter the NIC:
        <input class="form-control" type="text" name="Emp_NIC" placeholder="date of birth" ><br>
        Enter the name:
        <input class="form-control" type="text" name="Emp_Name" placeholder="name" ><br>
        Enter the gender:
        <input class="form-control" type="text" name="Emp_Gender" placeholder="gender" ><br>
        Enter the contact number:
        <input class="form-control" type="number" name="Emp_contact_no" placeholder="contact number" ><br>
        Enter the staff salary:
        <input class="form-control" type="number" name="Emp_salary" placeholder="staff salary"><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    else if(isset($_POST['manager']))
    {
    ?>
        <form action= "insertmanager.php" method="POST">
        Enter the staff number:
        <input class="form-control" type="text" name="Emp_ID" placeholder="staff number"><br>
        Enter the manager number:
        <input class="form-control" type="number" name="Manager_no" placeholder="manager number"><br>
        Enter the appointed date:
        <input class="form-control" type="date" name="Appoint_date" placeholder="appointed date" ><br>
        Enter the staff start date:
        <input class="form-control" type="date" name="Emp_start_date" placeholder="staff start date"><br>
        Enter the staff type:
        <input class="form-control" type="text" name="Staff_type" placeholder="staff type" ><br>
        Enter the date of birth:
        <input class="form-control" type="date" name="Emp_DOB" placeholder="maximum rent" ><br>
        Enter the NIC:
        <input class="form-control" type="text" name="Emp_NIC" placeholder="date of birth"><br>
        Enter the name:
        <input class="form-control" type="text" name="Emp_Name" placeholder="name"><br>
        Enter the gender:
        <input class="form-control" type="text" name="Emp_Gender" placeholder="gender"><br>
        Enter the contact number:
        <input class="form-control" type="number" name="Emp_contact_no" placeholder="contact number" ><br>
        Enter the staff salary:
        <input class="form-control" type="number" name="Emp_salary" placeholder="staff salary" ><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    else if(isset($_POST['staff']))
    {
    ?>
        <form action= "insertstaff.php" method="POST">
            Enter the staff number:
            <input class="form-control" type="text" name="Emp_ID" placeholder="staff number"><br>
            Enter the staff start date:
            <input class="form-control" type="date" name="Emp_start_date" placeholder="staff start date" ><br>
            Enter the staff type:
            <input class="form-control" type="text" name="Staff_type" placeholder="staff type"><br>
            Enter the date of birth:
            <input class="form-control" type="date" name="Emp_DOB" placeholder="maximum rent"><br>
            Enter the NIC:
            <input class="form-control" type="text" name="Emp_NIC" placeholder="date of birth"><br>
            Enter the name:
            <input class="form-control" type="text" name="Emp_Name" placeholder="name"><br>
            Enter the gender:
            <input class="form-control" type="text" name="Emp_Gender" placeholder="gender" ><br>
            Enter the contact number:
            <input class="form-control" type="number" name="Emp_contact_no" placeholder="contact number" ><br>
            Enter the Job type:
            <input class="form-control" type="text" name="Job_type" placeholder="Job type" ><br>
            Enter the staff salary:
            <input class="form-control" type="number" name="Emp_salary" placeholder="staff salary" ><br>
            Enter the branch number:
            <input class="form-control" type="text" name="Branch_no" placeholder="branch number"><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    ?>
</body>
</html>