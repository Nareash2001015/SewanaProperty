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
        $query = "select * from lease;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>property_no </th>
                    <th>Client_no </th>
                    <th>Payment_method </th>
                    <th>Rent_start_date </th>
                    <th>Rent_finish_date </th>
                    <th>Monthly_rent </th>
                    <th>Duration </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $property_no  = $row['property_no'];
                            $Client_no = $row['Client_no'];
                            $Payment_method = $row['Payment_method'];
                            $Rent_start_date = $row['Rent_start_date'];
                            $Rent_finish_date = $row['Rent_finish_date'];
                            $Monthly_rent = $row['Monthly_rent'];
                            $Duration = $row['Duration'];
                    ?>
                    <tbody>
                    <tr>
                        <td ><?php echo $property_no ?></td>
                        <td ><?php echo $Client_no ?></td>
                        <td ><?php echo $Payment_method ?></td>
                        <td ><?php echo $Rent_start_date ?></td>
                        <td ><?php echo $Rent_finish_date ?></td>
                        <td ><?php echo $Monthly_rent ?></td>
                        <td ><?php echo $Duration ?></td>
                        <td><a href="editleaseinfo.php?GetID=<?php echo $property_no.$Client_no ?>">Edit</a></td>
                        <td><a href="deleteleaseinfo.php?Del=<?php echo $property_no.$Client_no ?>">Delete</a></td>
                    </tr>
                    </tbody>
                    <?php
                        }
                    ?>
            </table>
        </div>
</body>
</html>















