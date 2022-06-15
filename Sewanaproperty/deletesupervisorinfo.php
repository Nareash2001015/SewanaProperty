<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $Emp_ID = $_GET['Del'];
        $query = " delete from supervisor where Emp_ID = '".$Emp_ID."';";
        $result = mysqli_query($con,$query);
        $query = " delete from staff where Emp_ID = '".$Emp_ID."';";
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