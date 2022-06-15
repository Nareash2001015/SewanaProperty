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
    if(isset($_POST['person']))
    {
        $query = "select * from person;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th>Owner_ID </th>
                                <th>Per_contact_no </th>
                                <th>Per_address </th>
                                <th>Per_email </th>
                                <th>Per_name </th>
                                <th>NIC </th>
                                <th>Edit </th>
                                <th>Delete </th>
                            </tr>
                            </thead>
                                        <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Owner_ID  = $row['Owner_ID'];
                                        $Per_contact_no = $row['Per_contact_no'];
                                        $Per_address = $row['Per_address'];
                                        $Per_email = $row['Per_email'];
                                        $Per_name = $row['Per_name'];
                                        $NIC = $row['NIC'];
                                ?>
                                <tbody>
                                <tr>
                                            <td ><?php echo $Owner_ID ?></td>
                                            <td ><?php echo $Per_contact_no ?></td>
                                            <td ><?php echo $Per_address ?></td>
                                            <td ><?php echo $Per_email ?></td>
                                            <td ><?php echo $Per_name ?></td>
                                            <td ><?php echo $NIC ?></td>
                                            <td><a href="editperson.php?GetID=<?php echo $NIC ?>">Edit</a></td>
                                            <td><a href="deleteperson.php?Del=<?php echo $NIC ?>">Delete</a></td>
                                </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                        </table>
        </div>
    <?php
    }
    else if(isset($_POST['company']))
    {
        $query = "select * from company;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th>Owner_ID </th>
                                <th>Company_address </th>
                                <th>Company_name </th>
                                <th>Company_email	 </th>
                                <th>Comapany_contact_no </th>
                                <th>Company_ID </th>
                                <th>Edit </th>
                                <th>Delete </th>
                            </tr>
                            </thead>
                                        <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Owner_ID  = $row['Owner_ID'];
                                        $Company_address = $row['Company_address'];
                                        $Company_name = $row['Company_name'];
                                        $Company_email = $row['Company_email'];
                                        $Company_contact_no = $row['Company_contact_no'];
                                        $Company_ID = $row['Company_ID'];
                                ?>
                                <tbody>
                                <tr>
                                            <td ><?php echo $Owner_ID ?></td>
                                            <td ><?php echo $Company_address ?></td>
                                            <td ><?php echo $Company_name ?></td>
                                            <td ><?php echo $Company_email ?></td>
                                            <td ><?php echo $Company_contact_no ?></td>
                                            <td ><?php echo $Company_ID ?></td>
                                            <td><a href="editcompany.php?GetID=<?php echo $Company_ID ?>">Edit</a></td>
                                            <td><a href="deletecompany.php?Del=<?php echo $Company_ID ?>">Delete</a></td>
                                </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                        </table>
        </div>
    <?php
    }
    else if(isset($_POST['allowners']))
    {
         $query = "select * from owner;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <div class="position-absolute top-50 start-50 translate-middle">
                        <table class="table">
                            <thead class="table-dark">
                            <tr>
                                <th>Owner_ID </th>
                                <th>Edit </th>
                                <th>Delete </th>
                            </tr>
                            </thead>
                                        <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $Owner_ID  = $row['Owner_ID'];
                                ?>
                                <tbody>
                                <tr>
                                            <td ><?php echo $Owner_ID ?></td>
                                            <td><a href="editownerinfo.php?GetID=<?php echo $Owner_ID ?>">Edit</a></td>
                                            <td><a href="deleteownerinfo.php?Del=<?php echo $Owner_ID ?>">Delete</a></td>
                                </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
                        </table>
        </div>
    <?php
    }
    ?>
</body>
</html>