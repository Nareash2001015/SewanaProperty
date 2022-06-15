<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    
    {
        $connectID  = $_GET['ID'];
        $Advertise_date = $_POST['Advertise_date'];

        $query = " update advertise set  Advertise_date='".$Advertise_date."' where concat(Newspaper_ID,Property_no) ='".$connectID."';";
        $result = mysqli_query($con,$query);
        

        if($result)
        {
            header("location:alladvertisementinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:alladvertisementinfo.php");
    }
?>