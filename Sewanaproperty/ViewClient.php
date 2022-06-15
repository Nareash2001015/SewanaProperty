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

        if($username == "client" && $password == "client123")
        {
            $query = "select * from client;" ;
            $result = mysqli_query($con,$query); 
            ?>
            <div class="position-absolute top-50 start-50 translate-middle">
                            <table class="table">
                                <thead class="table-dark">
                                <tr>
                                    <th>Client_no </th>
                                    <th>Client_email </th>
                                    <th>Client_NIC </th>
                                    <th>Client_full_name </th>
                                    <th>Emp_ID </th>
                                    <th>Branch_no </th>
                                    <th>Registered_date </th>
                                </tr>
                                </thead>
                                            <?php
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                            $Client_no  = $row['Client_no'];
                                            $Client_email = $row['Client_email'];
                                            $Client_NIC = $row['Client_NIC'];
                                            $Client_full_name = $row['Client_full_name'];
                                            $Emp_ID = $row['Emp_ID'];
                                            $Branch_no = $row['Branch_no'];
                                            $Registered_date = $row['Registered_date'];
                                    ?>
                                    <tbody>
                                    <tr>
                                                <td ><?php echo $Client_no ?></td>
                                                <td ><?php echo $Client_email ?></td>
                                                <td ><?php echo $Client_NIC ?></td>
                                                <td ><?php echo $Client_full_name ?></td>
                                                <td ><?php echo $Emp_ID ?></td>
                                                <td ><?php echo $Branch_no ?></td>
                                                <td ><?php echo $Registered_date ?></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <?php
                                $querynew = "select * from client_property_req;" ;
                                $resultnew = mysqli_query($con,$querynew); 
                                ?>
                                    <table class="table">
                                        <thead class="table-dark">
                                        <tr>
                                            <th>Client_no </th>
                                            <th>Requirement_no </th>
                                            <th>Requirement_type </th>
                                            <th>Area_willing_to_rent </th>
                                            <th>Max_rent </th>
                                            <th>Property_type </th>
                                        </tr>
                                        </thead>
                                                    <?php
                                                while($row = mysqli_fetch_assoc($resultnew))
                                                {
                                                    $Client_no  = $row['Client_no'];
                                                    $Requirement_no = $row['Requirement_no'];
                                                    $Requirement_type = $row['Requirement_type'];
                                                    $Area_willing_to_rent = $row['Area_willing_to_rent'];
                                                    $Max_rent = $row['Max_rent'];
                                                    $Property_type = $row['Property_type'];
                                            ?>
                                            <tbody>
                                            <tr>
                                                        <td ><?php echo $Client_no ?></td>
                                                        <td ><?php echo $Requirement_no ?></td>
                                                        <td ><?php echo $Requirement_type ?></td>
                                                        <td ><?php echo $Area_willing_to_rent ?></td>
                                                        <td ><?php echo $Max_rent ?></td>
                                                        <td ><?php echo $Property_type ?></td>
                                            </tr>
                                            </tbody>
                                            <?php
                                                }
                                            ?>
                                    </table>
                                    <?php
                                    }
                                    ?>
            </div>
            <?php
        }
        else
        {
            echo "You have entered wrong password or username";
        }
    }
    elseif(isset($_POST['gotoform']))
    {
    ?>
        <h5 align="center">Insert client details</h5>
        <form action= "insertclient.php" method="POST">
            Enter the client number:
            <input class="form-control" type="text" name="Client_no" placeholder="Client number"><br>
            Enter the email:
            <input class="form-control" type="email" name="Client_email" placeholder="First name"><br>
            Enter the NIC:
            <input class="form-control" type="text" name="Client_NIC" placeholder="Last name"><br>
            Enter the full name:
            <input class="form-control" type="text" name="Client_full_name" placeholder="Telephone number"><br>
            Enter the staff number of the employee registrered:
            <input class="form-control" type="text" name="Emp_ID" placeholder="Prefered type"><br>
            Enter the Branch number:
            <input class="form-control" type="text" name="Branch_no" placeholder="Maximum rent"><br>
            Enter the registered date:
            <input class="form-control" type="date" name="Registered_date" placeholder="Registered date"><br>
            <div class="col-12">
                <input type="submit" name= "insert" class="btn btn-primary">
            </div>
        </form><br>

        <h5 align="center">Insert property requirement details</h5>
        <form action="insertpropertyreq.php" method="post">
            Enter the Client number:
            <input class="form-control" type="text" name="Client_no" placeholder="Client number" ><br>
            Enter the Requirement number:
            <input class="form-control" type="text" name="Requirement_no" placeholder="Requirement number" ><br>
            Enter the Requirement type:
            <input class="form-control" type="text" name="Requirement_type" placeholder="Requirement type" ><br>
            Enter the area willing to rent:
            <input class="form-control" type="text" name="Area_willing_to_rent" placeholder="area willing to rent" ><br>
            Enter the maximum rent:
            <input class="form-control" type="number" name="Max_rent" placeholder="maximum rent" ><br>
            Enter the property type:
            <input class="form-control" type="text" name="Property_type" placeholder="property type"><br>
            <div class="col-12">
                <input type="submit" name= "submit" class="btn btn-primary">
            </div>
        </form>
    <?php
    }
    ?>
</body>
</html>