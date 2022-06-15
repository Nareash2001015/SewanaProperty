<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $Company_ID = $_GET['ID'];
        $Owner_ID  = $_POST['Owner_ID'];
        $Company_address = $_POST['Company_address'];
        $Company_name = $_POST['Company_name'];
        $Company_email = $_POST['Company_email'];
        $Company_contact_no = $_POST['Company_contact_no'];

        $query = " update company set  Owner_ID='".$Owner_ID."',Company_address='".$Company_address."',Company_name='".$Company_name."', Company_email='".$Company_email."', Company_contact_no='".$Company_contact_no."' where Company_ID='".$Company_ID."';";
        $result = mysqli_query($con, $query);

        if($result)
        {
            echo ' Records are added successfully ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    
?>