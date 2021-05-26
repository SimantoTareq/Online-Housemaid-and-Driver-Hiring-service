<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workerreview";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['submit'])){
    $toperson = $_POST['toperson'];
   $fromperson= 1234;
    $massage = $_POST['massage'];




    $sql ="INSERT INTO `massage` ( `fromperson`, `toperson`, `massage`) VALUES ('$fromperson', '$toperson', '$massage ')"; 
    if ($conn->query($sql) === TRUE) {
        header("location:usermessage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>