<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $Owner_ID = $_GET['Del'];
        $query = " delete from owner where Owner_ID = '".$Owner_ID."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:viewownerinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewownerinfo.php");
    }

?>