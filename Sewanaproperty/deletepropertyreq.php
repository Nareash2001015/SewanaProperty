<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $property_no = $_GET['Del'];
        $query = " delete from client_property_req where Client_no = '".$Client_no."';";
        $result = mysqli_query($con,$query);
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