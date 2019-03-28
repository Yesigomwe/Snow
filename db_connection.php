<?php
function openCon()
{
    $dbhost = "localhost";
    $dbUser = "root";
    $dbPassword = "Arsenal2015";
    $db = "Snow";


    $conn = new mysqli($dbhost,$dbUser,$dbPassword,$db,) or die ("Connect failed: %s/n". $conn -> error);

    return $conn;
}
function closeCon($conn){
    $conn -> close();
}

?>