<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['submit']))
    {        
        $property_no = $_POST['property_no'];
        $Client_no = $_POST['Client_no'];
        $Payment_method = $_POST['Payment_method'];
        $Rent_start_date = $_POST['Rent_start_date'];
        $Rent_finish_date = $_POST['Rent_finish_date'];
        $Monthly_rent = $_POST['Monthly_rent'];
        $Duration = $_POST['Duration'];
        
        $query = "insert into lease(property_no,Client_no,Payment_method,Rent_start_date,Rent_finish_date,Monthly_rent,Duration)values('$property_no','$Client_no','$Payment_method','$Rent_start_date','$Rent_finish_date','$Monthly_rent','$Duration');";
        $result = mysqli_query($con, $query);

        header("location:allleaseinfo.php");
    }
?>
    

    















