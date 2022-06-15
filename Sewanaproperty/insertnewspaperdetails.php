<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['submit']))
    {        
        $Newspaper_ID = $_POST['Newspaper_ID'];
        $Newspaper_email = $_POST['Newspaper_email'];
        $Newspaper_contact_no = $_POST['Newspaper_contact_no'];
        $Newspaper_address = $_POST['Newspaper_address'];
        $query = "insert into newspaper(Newspaper_ID,Newspaper_contact_no,Newspaper_email,Newspaper_address)values('$Newspaper_ID','$Newspaper_contact_no', '$Newspaper_email', '$Newspaper_address');";
        $result = mysqli_query($con, $query);

        header("location:viewnewsinfo.php");
    }
?>
    

    















