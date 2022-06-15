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
    
    $query = "select * from supervisor;" ;
    $result = mysqli_query($con,$query); 
    ?>
    <div class="position-absolute top-50 start-50 translate-middle">
        <h5 align="center">Supervisor table</h5>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Emp_ID </th>
                <th>supervisor_no </th>
                <th>Emp_start_date </th>
                <th>Staff_type </th>
                <th>Emp_DOB </th>
                <th>Emp_NIC </th>
                <th>Emp_Name </th>
                <th>Emp_Gender </th>
                <th>Emp_contact_no </th>
                <th>Emp_salary </th>
                <th>Edit </th>
                <th>Delete </th>
            </tr>
            </thead>
                        <?php
                    while($row = mysqli_fetch_assoc($result))
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
                ?>
                <tbody>
                <tr>
                            <td ><?php echo $Emp_ID ?></td>
                            <td ><?php echo $supervisor_no ?></td>
                            <td ><?php echo $Emp_start_date ?></td>
                            <td ><?php echo $Staff_type ?></td>
                            <td ><?php echo $Emp_DOB ?></td>
                            <td ><?php echo $Emp_NIC ?></td>
                            <td ><?php echo $Emp_Name ?></td>
                            <td ><?php echo $Emp_Gender ?></td>
                            <td ><?php echo $Emp_contact_no ?></td>
                            <td ><?php echo $Emp_salary ?></td>
                            <td><a href="editsupervisorinfo.php?GetID=<?php echo $Emp_ID ?>">Edit</a></td>
                            <td><a href="deletesupervisorinfo.php?Del=<?php echo $Emp_ID ?>">Delete</a></td>
                </tr>
                </tbody>
                <?php
                    }
                ?>
        </table>
    <br>

        <?php
        $query = "select * from assistant;" ;
        $result = mysqli_query($con,$query); 
        ?>
        <h5 align="center">Assistant table</h5>
        <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>Emp_ID </th>
                    <th>Supervisor_ID </th>
                    <th>Appoint_date</th>
                    <th>Emp_start_date </th>
                    <th>Staff_type </th>
                    <th>Emp_DOB </th>
                    <th>Emp_NIC </th>
                    <th>Emp_Name </th>
                    <th>Emp_Gender </th>
                    <th>Emp_contact_no </th>
                    <th>Emp_salary </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>
                </thead>
                            <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $Emp_ID  = $row['Emp_ID'];
                            $Supervisor_ID = $row['Supervisor_ID'];
                            $Appoint_date  = $row['Appoint_date'];
                            $Emp_start_date = $row['Emp_start_date'];
                            $Staff_type = $row['Staff_type'];
                            $Emp_DOB = $row['Emp_DOB'];
                            $Emp_NIC = $row['Emp_NIC'];
                            $Emp_Name = $row['Emp_Name'];
                            $Emp_contact_no = $row['Emp_contact_no'];
                            $Emp_Gender = $row['Emp_Gender'];
                            $Emp_salary = $row['Emp_salary'];
                    ?>
                    <tbody>
                    <tr>
                                <td ><?php echo $Emp_ID ?></td>
                                <td ><?php echo $supervisor_no ?></td>
                                <td ><?php echo $Appoint_date ?></td>
                                <td ><?php echo $Emp_start_date ?></td>
                                <td ><?php echo $Staff_type ?></td>
                                <td ><?php echo $Emp_DOB ?></td>
                                <td ><?php echo $Emp_NIC ?></td>
                                <td ><?php echo $Emp_Name ?></td>
                                <td ><?php echo $Emp_Gender ?></td>
                                <td ><?php echo $Emp_contact_no ?></td>
                                <td ><?php echo $Emp_salary ?></td>
                                <td><a href="editassistantinfo.php?GetID=<?php echo $Emp_ID ?>">Edit</a></td>
                                <td><a href="deleteassistantinfo.php?Del=<?php echo $Emp_ID ?>">Delete</a></td>
                    </tr>
                    </tbody>
                    <?php
                        }
                    ?>
            </table>
        <br>

            <?php
            $query = "select * from manager;" ;
            $result = mysqli_query($con,$query); 
            ?>
            <h5 align="center">Manager table</h5>
            <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th>Emp_ID </th>
                        <th>Manager_no </th>
                        <th>Appoint_date</th>
                        <th>Emp_start_date </th>
                        <th>Staff_type </th>
                        <th>Emp_DOB </th>
                        <th>Emp_NIC </th>
                        <th>Emp_Name </th>
                        <th>Emp_Gender </th>
                        <th>Emp_contact_no </th>
                        <th>Emp_salary </th>
                        <th>Edit </th>
                        <th>Delete </th>
                    </tr>
                    </thead>
                                <?php
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $Emp_ID  = $row['Emp_ID'];
                                $Manager_no = $row['Manager_no'];
                                $Appoint_date  = $row['Appoint_date'];
                                $Emp_start_date = $row['Emp_start_date'];
                                $Staff_type = $row['Staff_type'];
                                $Emp_DOB = $row['Emp_DOB'];
                                $Emp_NIC = $row['Emp_NIC'];
                                $Emp_Name = $row['Emp_Name'];
                                $Emp_contact_no = $row['Emp_contact_no'];
                                $Emp_Gender = $row['Emp_Gender'];
                                $Emp_salary = $row['Emp_salary'];
                        ?>
                        <tbody>
                        <tr>
                                    <td ><?php echo $Emp_ID ?></td>
                                    <td ><?php echo $Manager_no ?></td>
                                    <td ><?php echo $Appoint_date ?></td>
                                    <td ><?php echo $Emp_start_date ?></td>
                                    <td ><?php echo $Staff_type ?></td>
                                    <td ><?php echo $Emp_DOB ?></td>
                                    <td ><?php echo $Emp_NIC ?></td>
                                    <td ><?php echo $Emp_Name ?></td>
                                    <td ><?php echo $Emp_Gender ?></td>
                                    <td ><?php echo $Emp_contact_no ?></td>
                                    <td ><?php echo $Emp_salary ?></td>
                                    <td><a href="editmanagerinfo.php?GetID=<?php echo $Emp_ID ?>">Edit</a></td>
                                    <td><a href="deletemanagerinfo.php?Del=<?php echo $Emp_ID ?>">Delete</a></td>
                        </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                </table>
            <br>

                <?php
                $query = "select * from staff;" ;
                $result = mysqli_query($con,$query); 
                ?>
                <h5 align="center">Staff table</h5>
                <table class="table">
                        <thead class="table-dark">
                        <tr>
                            <th>Emp_ID </th>
                            <th>Emp_start_date </th>
                            <th>Staff_type </th>
                            <th>Emp_DOB </th>
                            <th>Emp_NIC </th>
                            <th>Emp_Name </th>
                            <th>Emp_Gender </th>
                            <th>Emp_contact_no </th>
                            <th>Job_type </th>
                            <th>Emp_salary </th>
                            <th>Branch_no </th>
                            <th>Edit </th>
                            <th>Delete </th>
                        </tr>
                        </thead>
                                    <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $Emp_ID  = $row['Emp_ID'];
                                    $Emp_start_date = $row['Emp_start_date'];
                                    $Staff_type = $row['Staff_type'];
                                    $Emp_DOB = $row['Emp_DOB'];
                                    $Emp_NIC = $row['Emp_NIC'];
                                    $Emp_Name = $row['Emp_Name'];
                                    $Emp_contact_no = $row['Emp_contact_no'];
                                    $Emp_Gender = $row['Emp_Gender'];
                                    $Emp_salary = $row['Emp_salary'];
                                    $Job_type = $row['Job_type'];
                                    $Branch_no = $row['Branch_no'];
                            ?>
                            <tbody>
                            <tr>
                                <td ><?php echo $Emp_ID ?></td>
                                <td ><?php echo $Emp_start_date ?></td>
                                <td ><?php echo $Staff_type ?></td>
                                <td ><?php echo $Emp_DOB ?></td>
                                <td ><?php echo $Emp_NIC ?></td>
                                <td ><?php echo $Emp_Name ?></td>
                                <td ><?php echo $Emp_Gender ?></td>
                                <td ><?php echo $Emp_contact_no ?></td>
                                <td ><?php echo $Job_type ?></td>
                                <td ><?php echo $Emp_salary ?></td>
                                <td ><?php echo $Branch_no ?></td>
                                <td><a href="editstaffinfo.php?GetID=<?php echo $Emp_ID ?>">Edit</a></td>
                                <td><a href="deletestaffinfo.php?Del=<?php echo $Emp_ID ?>">Delete</a></td>
                            </tr>
                            </tbody>
                            <?php
                                }
                            ?>
                    </table>
                <br>
        </div>
           
</body>
</html>