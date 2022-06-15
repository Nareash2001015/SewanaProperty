<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['submit']))
    {        
        $Client_no = $_POST['Client_no'];
        $Requirement_no = $_POST['Requirement_no'];
        $Requirement_type = $_POST['Requirement_type'];
        $Area_willing_to_rent = $_POST['Area_willing_to_rent'];
        $Max_rent = $_POST['Max_rent'];
        $Property_type = $_POST['Property_type'];
        $query = "insert into client_property_req(Client_no,Requirement_no,Requirement_type,Area_willing_to_rent,Max_rent,Property_type)values('$Client_no','$Requirement_no', '$Requirement_type', '$Area_willing_to_rent', '$Max_rent', '$Property_type');";
        $result = mysqli_query($con, $query);
    }
?>
    

    















