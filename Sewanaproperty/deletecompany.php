<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $Company_ID = $_GET['Del'];
        $query = " delete from company where Company_ID = '".$Company_ID."';";
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