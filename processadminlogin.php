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


if(isset($_POST['adminid'])){
    
    $uname=$_POST['adminid'];
    $password=$_POST['adminPassword'];
	
  $sql="SELECT * FROM `admin` WHERE adminid = '$uname' AND adminPassword = '$password' limit 1";
    
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        $_SESSION['adminid']=$_POST['adminid'];
        header("location:admin.php");
        exit();
    }
    else{
        header("location:adminsignin.php?Incorrect= You entered wrong credentials, Try again");
        exit();
    }
        
}
