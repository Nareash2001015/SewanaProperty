<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $advertisement = $_POST['advertisement'] ; 

        #echo $userlevel;
        if($advertisement == "fillform")
        {
            header("location:advertisementform.php");
        }
        elseif($advertisement == "advertisementinfo")
        {
            header("location:alladvertisementinfo.php");
        }
    }

?>