<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        

        $Emp_ID  = $_POST['Emp_ID'];
        $Emp_start_date = $_POST['Emp_start_date'];
        $Staff_type = $_POST['Staff_type'];
        $Emp_DOB = $_POST['Emp_DOB'];
        $Emp_NIC = $_POST['Emp_NIC'];
        $Emp_Name = $_POST['Emp_Name'];
        $Emp_Gender = $_POST['Emp_Gender'];
        $Emp_contact_no = $_POST['Emp_contact_no'];
        $Job_type = $_POST['Job_type'];
        $Emp_salary = $_POST['Emp_salary'];
        $Branch_no = $_POST['Branch_no'];

        
        $query = "insert into staff(Emp_ID,Emp_start_date,Staff_type,Emp_DOB,Emp_NIC,Emp_Name,Emp_Gender,Emp_contact_no,Job_type,Emp_salary,Branch_no)values('$Emp_ID','$Emp_start_date','$Staff_type','$Emp_DOB','$Emp_NIC','$Emp_Name','$Emp_Gender','$Emp_contact_no','$Job_type','$Emp_salary','$Branch_no');";
        $result = mysqli_query($con, $query);

        if($result)
        {
            ?>
            The record is inserted successfully
            <?php 
        }
        else
        {
            ?>
            Check the query
            <?php 
        }

    }
?>
    

    