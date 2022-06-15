<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    
    {
        $connectID  = $_GET['ID'];
        $Payment_method = $_POST['Payment_method'];
        $Rent_start_date = $_POST['Rent_start_date'];
        $Rent_finish_date = $_POST['Rent_finish_date'];
        $Monthly_rent = $_POST['Monthly_rent'];
        $Duration = $_POST['Duration'];

        $query = " update lease set  Payment_method='".$Payment_method."',Rent_start_date='".$Rent_start_date."',Rent_finish_date='".$Rent_finish_date."',Monthly_rent='".$Monthly_rent."',Duration='".$Duration."' where concat(property_no,Client_no) ='".$connectID."';";
        $result = mysqli_query($con,$query);
        

        if($result)
        {
            header("location:allleaseinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:allleaseinfo.php");
    }
?>