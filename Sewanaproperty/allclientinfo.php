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
                <th>Edit </th>
                <th>Delete </th>
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
                            <td><a href="editclientinfo.php?GetID=<?php echo $Client_no ?>">Edit</a></td>
                            <td><a href="deleteclientinfo.php?Del=<?php echo $Client_no ?>">Delete</a></td>
                </tr>
                </tbody>
                <?php
                    }
                ?>
        </table>
    <br>

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
                <th>Edit </th>
                <th>Delete </th>
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
                            <td><a href="editpropertyreq.php?GetID=<?php echo $Client_no ?>">Edit</a></td>
                            <td><a href="deletepropertyreq.php?Del=<?php echo $Client_no ?>">Delete</a></td>
                </tr>
                </tbody>
                <?php
                    }
                ?>
        </table>
    </div>
           
</body>
</html>