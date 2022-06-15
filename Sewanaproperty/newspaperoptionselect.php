<?php
    require_once ("propertyconnect.php");    
    
    if(isset($_POST['login']))
    {
        $newspaper = $_POST['newspaper'] ; 

        #echo $userlevel;
        if($newspaper == "fillform")
        {
            header("location:newspaperform.php");
        }
        elseif($newspaper == "newsinfo")
        {
            header("location:viewnewsinfo.php");
        }
    }

?>