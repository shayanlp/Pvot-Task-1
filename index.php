<?php
if (isset($_POST['sname'])){

    $server = "localhost";

    $username = "root";

    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die ("connection to this database failed due to" .mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $sname = $_POST['sname'];
    $pprice = $_POST['pprice'];

    $sql = "INSERT INTO `pvotdb`.`indstocks` (`sname`, `pprice`) VALUES ('$sname', '$pprice');";
    //echo $sql
    if($con->query($sql) == true){
        echo "Successfully inserted";}

    
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pvot Home Page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Pvot!</h3>
        <p>Enter the stock details and submit this form</p>
        
        <form action="index.php" method="post">
            <input type="text" name="sname" id="sname" placeholder="Enter stock name">
            <input type="float" name="pprice" id="pprice" placeholder="Enter purchase price">
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>