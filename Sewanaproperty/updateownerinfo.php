<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $Owner_ID = $_GET['ID'];

        $query = " update owner set  Owner_ID='".$Owner_ID."' where Owner_ID='".$Owner_ID."';";
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