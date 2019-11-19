<?php

$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$role = ($_POST["role"]);
$email = ($_POST["email"]);
$phone = ($_POST["phone"]);
$org = ($_POST["org"]);

$hostname="Localhost";
$username="divepsyi_duser";
$password="dpassword";
$dbname="divepsyi_disponsors";
$usertable="sponsorform";

$response_array['status'] = "";

$link= mysqli_connect($hostname,$username,$password,$dbname);

//check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

//Attempt insert query execution
$sql = "INSERT INTO $usertable(firstname,lastname,role,email,phone,org) VALUES ('$firstname','$lastname','$role','$email','$phone','$org')";

if(mysqli_query($link, $sql)) {
    header('Location:index.html');
    //$response_array['status'] = "success";
    //echo $response_array['status'];
    
} else {
    echo "ERROR: Unable to execute :( ." . mysqli_error($link);
    $response_array['status'] = "error";
}

//Close connection
mysqli_close($link);

?>