<?php 

    require_once("propertyconnect.php");

    $connectID = $_GET['GetID'];
    $query = "select * from advertise where concat(Newspaper_ID,Property_no)='".$connectID."';" ;  
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Newspaper_ID  = $row['Newspaper_ID'];
        $Property_no = $row['Property_no'];
        $Advertise_date = $row['Advertise_date'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <form action="updateadvertisementinfo.php?ID=<?php echo $Newspaper_ID.$Property_no ?>" method="post">
        Enter the Newspaper ID:
        <input class="form-control" type="text" name="Newspaper_ID" placeholder="Newspaper ID" value="<?php echo $Newspaper_ID?>"><br>
        Enter the Property number:
        <input class="form-control" type="text" name="Property_no" placeholder="Property number" value="<?php echo $Property_no?>"><br>
        Enter the advertised date:
        <input class="form-control" type="date" name="Advertise_date" placeholder="advertised date" value="<?php echo $Advertise_date?>"><br>
            <button class="btn btn-primary" name="update">Update</button>
        </form>
</body>
</html>