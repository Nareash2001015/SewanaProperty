<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        

        $Emp_ID  = $_POST['Emp_ID'];
        $supervisor_no = $_POST['supervisor_no'];
        $Emp_start_date = $_POST['Emp_start_date'];
        $Staff_type = $_POST['Staff_type'];
        $Emp_DOB = $_POST['Emp_DOB'];
        $Emp_NIC = $_POST['Emp_NIC'];
        $Emp_Name = $_POST['Emp_Name'];
        $Emp_contact_no = $_POST['Emp_contact_no'];
        $Emp_Gender = $_POST['Emp_Gender'];
        $Emp_salary = $_POST['Emp_salary'];

        $query = "insert into supervisor(Emp_ID,supervisor_no,Emp_start_date,Staff_type,Emp_DOB,Emp_NIC,Emp_Name,Emp_salary,Emp_Gender,Emp_contact_no)values('$Emp_ID','$supervisor_no','$Emp_start_date','$Staff_type','$Emp_DOB','$Emp_NIC','$Emp_Name','$Emp_salary','$Emp_Gender','$Emp_contact_no');";
        $result = mysqli_query($con, $query);
        $querynew = "insert into staff(Emp_ID,Emp_start_date,Staff_type,Emp_DOB,Emp_NIC,Emp_Name,Emp_salary,Emp_Gender,Emp_contact_no,Job_type)values('$Emp_ID','$Emp_start_date','$Staff_type','$Emp_DOB','$Emp_NIC','$Emp_Name','$Emp_salary','$Emp_Gender','$Emp_contact_no','Supervisor');";
        $resultnew = mysqli_query($con, $querynew);

        ?>
        The record is inserted successfully
        <?php    
        }
?>
    

    