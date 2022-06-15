<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    
    {
        $property_no = $_GET['ID'];
        $Proposed_rental = $_POST['Proposed_rental'];
        $Property_address = $_POST['Property_address'];
        $No_of_rooms = $_POST['No_of_rooms'];
        $Property_type = $_POST['Property_type'];
        $Owner_ID = $_POST['Owner_ID'];

        $query = " update property set  Proposed_rental='".$Proposed_rental."',Property_address='".$Property_address."',No_of_rooms='".$No_of_rooms."',Property_type='".$Property_type."',Owner_ID='".$Owner_ID."' where property_no='".$property_no."';";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:viewpropertyinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:viewpropertyinfo.php");
    }
?>