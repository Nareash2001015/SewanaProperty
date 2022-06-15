<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $userlevel = $_POST['userlevel'] ; 

        #echo $userlevel;
        if($userlevel == "client")
        {
            header("location:clientpermissions.php");
        }
        elseif($userlevel == "privateowner")
        {
            header("location:ownerpermissions.php");
        }
        elseif($userlevel == "staff")
        {
            header("location:staffpermissions.php");
        }
    }
    elseif(isset($_POST['logadmin']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        if($username == "admin"  && $password == "admin123")
        {
            header("location:adminpermissions.php");
        }
        else
        {
            ?>
            You have entered wrong password or username
            <?php
        }
    }

?>