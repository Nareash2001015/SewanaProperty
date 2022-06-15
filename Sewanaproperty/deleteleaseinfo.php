<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $connectID = $_GET['Del'];
        $query = " delete from lease  where concat(property_no,Client_no) ='".$connectID."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:allleaseinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:allleaseinfo.php");
    }

?>