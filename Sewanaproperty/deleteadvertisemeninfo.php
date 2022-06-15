<?php

    require_once("propertyconnect.php");

    if(isset($_GET['Del']))
    {
        $connectID = $_GET['Del'];
        $query = " delete from advertise  where concat(Newspaper_ID,Property_no) ='".$connectID."';";
        $result = mysqli_query($con,$query);
        if($result)
        {
            header("location:alladvertisementinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:alladvertisementinfo.php");
    }

?>