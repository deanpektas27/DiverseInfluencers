<?php


$firstname = ($_POST["firstname"]);
$lastname = ($_POST["lastname"]);
$email = ($_POST["email"]);
$phone = ($_POST["phone"]);


$hostname="Localhost";
$username="divepsyi_duser";
$password="dpassword";
$dbname="divepsyi_potentialstudents";
$usertable="students";

$response_array['status'] = "";

$link= mysqli_connect($hostname,$username,$password,$dbname);

//check connection
if($link === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}

//Attempt insert query execution
$sql = "INSERT INTO $usertable(firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')";

if(mysqli_query($link, $sql)) {
    header('Location:index.html');
    //$response_array['status'] = "success";
    //echo $response_array['status'];
    $subject = "New DI Sponsor Request!";
    
    
    $mail .="deanpektas12345@gmail.com";
    $mail .="dean@diverseinfluencers.org";
    
    $headers .= "Reply-To: The Sender <sender@domain.com>\r\n"; 
    $headers .= "Return-Path: The Sender <sender@domain.com>\r\n"; 
    $headers .= "From: The Sender <sender@domain.com>\r\n";  
    $headers .= "Organization: Sender Organization\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

    $msg = $firstname . " " . $lastname . " has requested to receive program updates!\n\nTheir info is below.\nEmail: " . $email . "\nPhone: " . $phone;
    $msg = wordwrap($msg,150);
    mail($mail , $subject, $msg, $headers);
    
} else {
    echo "ERROR: Unable to execute :( ." . mysqli_error($link);
    $response_array['status'] = "error";
}

//Close connection
mysqli_close($link);

?>