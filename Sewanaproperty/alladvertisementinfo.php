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
        $query = "select * from advertise;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>Newspaper_ID </th>
                    <th>Property_no </th>
                    <th>Advertise_date </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>
                </thead>
                <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $Newspaper_ID  = $row['Newspaper_ID'];
                            $Property_no = $row['Property_no'];
                            $Advertise_date = $row['Advertise_date'];
                    ?>
                    <tbody>
                    <tr>
                        <td ><?php echo $Newspaper_ID ?></td>
                        <td ><?php echo $Property_no ?></td>
                        <td ><?php echo $Advertise_date ?></td>
                        <td><a href="editadvertisementinfo.php?GetID=<?php echo $Newspaper_ID.$Property_no ?>">Edit</a></td>
                        <td><a href="deleteadvertisemeninfo.php?Del=<?php echo $Newspaper_ID.$Property_no ?>">Delete</a></td>
                    </tr>
                    </tbody>
                    <?php
                        }
                    ?>
            </table>
        </div>
</body>
</html>















