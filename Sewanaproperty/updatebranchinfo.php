<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $Branch_no = $_GET['ID'];
        $Manager_ID = $_POST['Manager_ID'];

        $query = " update branch set  Manager_ID='".$Manager_ID."' where Branch_no='".$Branch_no."';";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:viewbranchinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewbranchinfo.php");
    }
?>