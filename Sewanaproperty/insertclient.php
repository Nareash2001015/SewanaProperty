<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        
        
        $Client_no = $_POST['Client_no'];
        $Client_email = $_POST['Client_email'];
        $Client_NIC = $_POST['Client_NIC'];
        $Client_full_name = $_POST['Client_full_name'];
        $Emp_ID = $_POST['Emp_ID'];
        $Branch_no = $_POST['Branch_no'];
        $Registered_date = $_POST['Registered_date'];
        $query = "insert into client(Client_no,Client_email,Client_NIC,Client_full_name,Emp_ID,Branch_no,Registered_date)values('$Client_no', '$Client_email', '$Client_NIC', '$Client_full_name', '$Emp_ID', '$Branch_no', '$Registered_date');";
        $result = mysqli_query($con, $query);

    }
?>
    

    















