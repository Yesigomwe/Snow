<?php
include 'db_connection.php';

$conn = openCon();

echo "Connected successfully"; 

$userName = $_POST['userName'];
$email = $_POST['email'];
$PhoneNumber = $_POST['contact'];
$Address = $_POST['address'];
$sql = "INSERT INTO biodata (userName, email, PhoneNumber, Address) VALUES ('$userName','$email',$PhoneNumber,'$Address')";
if(!mysqli_query($conn,$sql)){
    echo 'Not inserted';
}else{
    echo 'Inserted';
}
//closeCon($conn);
header("refresh:2; url = biodata.php");
?>

