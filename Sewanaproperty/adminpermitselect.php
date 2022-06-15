<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $adminpermit = $_POST['adminpermit'] ; 

        #echo $userlevel;
        if($adminpermit == "newspaper")
        {
            header("location:newspaper.php");
        }
        elseif($adminpermit == "property")
        {
            header("location:property.php");
        }
        elseif($adminpermit == "branch")
        {
            header("location:branch.php");
        }
        elseif($adminpermit == "owner")
        {
            header("location:owner.php");
        }
        elseif($adminpermit == "client")
        {
            header("location:allclientinfo.php");
        }
        elseif($adminpermit == "staff")
        {
            header("location:allstaffinfo.php");
        }
        elseif($adminpermit == "advertise")
        {
            header("location:advertisement.php");
        }
        elseif($adminpermit == "lease")
        {
            header("location:lease.php");
        }
        
    }

?>