<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['insert']))
    {        
        $Newspaper_ID = $_POST['Newspaper_ID'];
        $Property_no = $_POST['Property_no'];
        $Advertise_date = $_POST['Advertise_date'];

        $query = "insert into advertise(Newspaper_ID,Property_no,Advertise_date)values('$Newspaper_ID','$Property_no','$Advertise_date');";
        $result = mysqli_query($con, $query);

        header("location:alladvertisementinfo.php");
    }
?>
    

    















