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
        $query = "select * from property;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>property_no </th>
                    <th>Proposed_rental </th>
                    <th>Property_address </th>
                    <th>No_of_rooms </th>
                    <th>Property_type </th>
                    <th>Owner_ID </th>
                    <th>edit </th>
                    <th>delete </th>
                </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $property_no  = $row['property_no'];
                            $Proposed_rental = $row['Proposed_rental'];
                            $Property_address = $row['Property_address'];
                            $No_of_rooms = $row['No_of_rooms'];
                            $Property_type = $row['Property_type'];
                            $Owner_ID = $row['Owner_ID'];
                    ?>
                    <tbody>
                    <tr>
                                <td ><?php echo $property_no ?></td>
                                <td ><?php echo $Proposed_rental ?></td>
                                <td ><?php echo $Property_address ?></td>
                                <td ><?php echo $No_of_rooms ?></td>
                                <td ><?php echo $Property_type ?></td>
                                <td ><?php echo $Owner_ID ?></td>
                                <td><a href="editpropertyinfo.php?GetID=<?php echo $property_no ?>">Edit</a></td>
                                <td><a href="deletepropertyinfo.php?Del=<?php echo $property_no ?>">Delete</a></td>
                    </tr>
                    </tbody>
                    <?php
                        }
                    ?>
            </table>
        </div>
</body>
</html>















