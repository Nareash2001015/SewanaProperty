<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['submit']))
    {        
        $property_no = $_POST['property_no'];
        $Proposed_rental = $_POST['Proposed_rental'];
        $Property_address = $_POST['Property_address'];
        $No_of_rooms = $_POST['No_of_rooms'];
        $Property_type = $_POST['Property_type'];
        $Owner_ID = $_POST['Owner_ID'];
        $query = "insert into property(property_no,Proposed_rental,Property_address,No_of_rooms,Property_type,Owner_ID)values('$property_no','$Proposed_rental', '$Property_address', '$No_of_rooms', '$Property_type', '$Owner_ID');";
        $result = mysqli_query($con, $query);

        header("location:viewpropertyinfo.php");
    }
?>
    

    















