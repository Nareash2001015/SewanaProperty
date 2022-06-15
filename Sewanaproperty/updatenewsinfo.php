<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    {
        $Newspaper_ID = $_GET['ID'];
        $Newspaper_contact_no  = $_POST['Newspaper_contact_no'];
        $Newspaper_email  = $_POST['Newspaper_email'];
        $Newspaper_address   = $_POST['Newspaper_address'];

        $query = " update newspaper set  Newspaper_contact_no='".$Newspaper_contact_no."',Newspaper_email='".$Newspaper_email."',Newspaper_address='".$Newspaper_address."' where Newspaper_ID='".$Newspaper_ID."';";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:viewnewsinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewnewsinfo.php");
    }
?>