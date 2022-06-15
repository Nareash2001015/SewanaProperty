<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $lease = $_POST['lease'] ; 

        #echo $userlevel;
        if($lease == "fillform")
        {
            header("location:leaseform.php");
        }
        elseif($lease == "leaseinfo")
        {
            header("location:allleaseinfo.php");
        }
    }

?>