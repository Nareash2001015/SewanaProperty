<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $property_no = $_GET['Del'];
        $query = " delete from property where property_no = '".$property_no."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:viewpropertyinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewpropertyinfo.php");
    }

?>