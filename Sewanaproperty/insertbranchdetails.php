<?php
    require_once ("propertyconnect.php");  



    if(isset($_POST['submit']))
    {        
        $Branch_no = $_POST['Branch_no'];
        $Manager_ID = $_POST['Manager_ID'];
        $query = "insert into branch(Branch_no,Manager_ID)values('$Branch_no','$Manager_ID');";
        $result = mysqli_query($con, $query);

        header("location:viewbranchinfo.php");
    }
?>
    

    















