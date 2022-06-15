<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $branch = $_POST['branch'] ; 

        #echo $userlevel;
        if($branch == "fillform")
        {
            header("location:branchform.php");
        }
        elseif($branch == "branchinfo")
        {
            header("location:viewbranchinfo.php");
        }
    }

?>