<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $NIC = $_GET['Del'];
        $query = " delete from person where NIC = '".$NIC."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:viewowner.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewowner.php");
    }

?>