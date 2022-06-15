<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    
    {
        $Emp_ID  = $_GET['ID'];
        $Emp_start_date = $_POST['Emp_start_date'];
        $Staff_type = $_POST['Staff_type'];
        $Emp_DOB = $_POST['Emp_DOB'];
        $Emp_NIC = $_POST['Emp_NIC'];
        $Emp_Name = $_POST['Emp_Name'];
        $Emp_contact_no = $_POST['Emp_contact_no'];
        $Job_type = $_POST['Job_type'];
        $Emp_Gender = $_POST['Emp_Gender'];
        $Emp_salary = $_POST['Emp_salary'];
        $Branch_no = $_POST['Branch_no'];

        $query = " update staff set  Emp_start_date='".$Emp_start_date."',Staff_type='".$Staff_type."',Emp_DOB='".$Emp_DOB."',Emp_NIC='".$Emp_NIC."',Emp_Name='".$Emp_Name."',Emp_contact_no='".$Emp_contact_no."',Emp_Gender='".$Emp_Gender."',Job_type='".$Job_type."',Emp_salary='".$Emp_salary."',Branch_no='".$Branch_no."' where Emp_ID='".$Emp_ID."';";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:allstaffinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:allstaffinfo.php");
    }
?>