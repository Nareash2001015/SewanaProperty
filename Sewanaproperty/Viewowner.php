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
    if(isset($_POST['gotoformcompany']))
    {
    ?>
        <form action= "insertcompanyowner.php" method="POST">
            Enter the Onwer ID:
            <input class="form-control" type="text" name="Owner_ID" placeholder="Owner ID"><br>
            Enter the Company address:
            <input class="form-control" type="text" name="Company_address" placeholder="Company address"><br>
            Enter the Company NIC:
            <input class="form-control" type="text" name="Company_name" placeholder="Company NIC"><br>
            Enter the Company email:
            <input class="form-control" type="email" name="Company_email" placeholder="Company email"><br>
            Enter the Company contact number:
            <input class="form-control" type="number" name="Company_contact_no" placeholder="Company contact number"><br>
            Enter the Company ID:
            <input class="form-control" type="text" name="Company_ID" placeholder="Company ID"><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    elseif(isset($_POST['gotoformperson']))
    {
    ?>
        <form action= "insertpersonowner.php" method="POST">
            Enter the Onwer ID:
            <input class="form-control" type="text" name="Owner_ID" placeholder="Owner ID"><br>
            Enter the Person contact number:
            <input class="form-control" type="number" name="Per_contact_no" placeholder="Person contact number"><br>
            Enter the Person address:
            <input class="form-control" type="text" name="Per_address" placeholder="Person address"><br>
            Enter the Person email:
            <input class="form-control" type="email" name="Per_email" placeholder="Person email"><br>
            Enter the Person name:
            <input class="form-control" type="text" name="Per_name" placeholder="Person name"><br>
            Enter the Person NIC:
            <input class="form-control" type="text" name="NIC" placeholder="Person NIC"><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    elseif(isset($_POST['allproperties']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
        if(($username == "person" && $password == "person123") or ($username == "company" && $password == "company123")) 
        {
            header("location:allproperties.php");
        }
        else
        {
        ?>
            You have entered wrong password or username
        <?php
        }
    }
    ?>
    
</body>
</html>