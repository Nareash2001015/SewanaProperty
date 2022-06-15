<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        
        $NIC = $_POST['NIC'];
        $Per_name = $_POST['Per_name'];
        $Per_email = $_POST['Per_email'];
        $Per_address = $_POST['Per_address'];
        $Per_contact_no = $_POST['Per_contact_no'];
        $Owner_ID = $_POST['Owner_ID'];
        $query = "insert into person(NIC,Per_name,Per_email,Per_address,Per_contact_no,Owner_ID)values('$NIC','$Per_name', '$Per_email', '$Per_address', '$Per_contact_no', '$Owner_ID');";
        $result = mysqli_query($con, $query);
        $query = "insert into owner(Owner_ID)values('$Owner_ID');";
        $result = mysqli_query($con, $query);
    }
?>
    

    















