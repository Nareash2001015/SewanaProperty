<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $Newspaper_ID = $_GET['Del'];
        $query = " delete from newspaper where Newspaper_ID = '".$Newspaper_ID."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:viewnewsinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewnewsinfo.php");
    }

?>