<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $property = $_POST['propertyoption'] ; 

        #echo $userlevel;
        if($property == "fillform")
        {
            header("location:propertyform.php");
        }
        elseif($property == "propertyinfo")
        {
            header("location:viewpropertyinfo.php");
        }
    }

?>

