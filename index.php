<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abs_door</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="gym boys">
    <div class="container">
    <h1>welcome to Abs_door</h1>
    <b><p>Fill all your details if you are interested in gym membership</p></b>
    <b><p>your all information are only share with the admin AKSHAY CHAUHAN</p></b>
    <form action="index.php" method="post">
    <input name="name" id="name" placeholder="Enter your name">
    <input name="gender" id="gender" placeholder="Enter your sex">
    <input name="address" id="address" placeholder="Enter your address">
    <input name="Phone_number" id="Phone_number" placeholder="Enter your phone number">
    <input name="Packages" id="Packages" placeholder="Enter your choice package">
    <textarea name="Description" id="Description" cols="30" rows="10" placeholder="Enter any other information for us"></textarea>
    <button class="btn">Submit</button> 
    </form>
    </div>
    <script src="index.js"></script>

</body>
</html>


<?php
$server ="localhost";
$username = "root";
$password="";
$dbname = "hell";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

error_reporting(0);
$name=$gender=$address=$Phone_number=$Packages=$Description=[];

$name= $_POST['name'];
$gender= $_POST['gender'];
$address= $_POST['address'];
$Phone_number= $_POST['Phone_number'];
$Packages= $_POST['Packages'];
$Description= $_POST['Description'];

$sql = "INSERT INTO b (`name`, `gender`, `address`, `Phone_number`, `Packages`, `Description`)
VALUES ('$name', '$gender', '$address', '$Phone_number', '$Packages', '$Description')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
