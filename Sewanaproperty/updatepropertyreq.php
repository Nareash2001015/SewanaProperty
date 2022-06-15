<?php 

    require_once("propertyconnect.php");

    if(isset($_POST['update']))
    
    {
        $Client_no  = $_GET['ID'];
        $Requirement_no = $_POST['Requirement_no'];
        $Requirement_type = $_POST['Requirement_type'];
        $Area_willing_to_rent = $_POST['Area_willing_to_rent'];
        $Max_rent = $_POST['Max_rent'];
        $Property_type = $_POST['Property_type'];

        $query = " update client_property_req set  Requirement_no='".$Requirement_no."',Requirement_type='".$Requirement_type."',Area_willing_to_rent='".$Area_willing_to_rent."',Max_rent='".$Max_rent."',Owner_ID='".$Owner_ID."',Property_type='".$Property_type."' where Client_no='".$Client_no."';";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:allclientinfo.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:allclientinfo.php");
    }
?>