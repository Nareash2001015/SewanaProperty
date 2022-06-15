<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $Client_no  = $_GET['ID'];
        $Client_email = $_POST['Client_email'];
        $Client_NIC = $_POST['Client_NIC'];
        $Client_full_name = $_POST['Client_full_name'];
        $Emp_ID = $_POST['Emp_ID'];
        $Branch_no = $_POST['Branch_no'];
        $Registered_date = $_POST['Registered_date'];

        $query = " update client set  Registered_date='".$Registered_date."', Branch_no='".$Branch_no."',Client_email='".$Client_email."',Client_NIC='".$Client_NIC."', Client_full_name='".$Client_full_name."', Emp_ID='".$Emp_ID."' where Client_no='".$Client_no."';";
        $result = mysqli_query($con, $query);

        if($result)
        {
            header("location:allclientinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:allclientinfo.php");
    }
?>