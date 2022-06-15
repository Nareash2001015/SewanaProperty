<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        
        $Company_ID = $_POST['Company_ID'];
        $Company_contact_no = $_POST['Company_contact_no'];
        $Company_email = $_POST['Company_email'];
        $Company_name = $_POST['Company_name'];
        $Company_address = $_POST['Company_address'];
        $Owner_ID = $_POST['Owner_ID'];
        $query = "insert into company(Company_ID,Company_contact_no,Company_email,Company_name,Company_address,Owner_ID)values('$Company_ID','$Company_contact_no', '$Company_email', '$Company_name', '$Company_address', '$Owner_ID');";
        $result = mysqli_query($con, $query);

        $query = "insert into owner(Owner_ID)values('$Owner_ID');";
        $result = mysqli_query($con, $query);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
    

    















