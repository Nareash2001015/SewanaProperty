<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $NIC = $_GET['ID'];
        $Per_contact_no = $_POST['Per_contact_no'];
        $Per_address = $_POST['Per_address'];
        $Per_email = $_POST['Per_email'];
        $Per_name = $_POST['Per_name'];
        $Owner_ID = $_POST['Owner_ID'];

        $query = " update person set  Per_contact_no='".$Per_contact_no."',Per_address='".$Per_address."',Per_email='".$Per_email."', Per_name='".$Per_name."', Owner_ID='".$Owner_ID."' where NIC='".$NIC."';";
        $result = mysqli_query($con, $query);

        if($result)
        {
            ?>
            The records are updated successfully.
            <?php
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
?>