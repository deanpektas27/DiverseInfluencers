<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$role = $_POST['role'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$org = $_POST['org'];

if (!empty($firstname) || !empty($lastname) || !empty($role) || !empty($email) || !empty($phone) || !empty($org)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "divepsyi_DI Sponsors";

    //create connection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errorno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (firstname, lastname, role, email, phone, org) values(?,?,?,?,?,?)";

        //Prepare Statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssis", $firstname, $lastname, $role, $email, $phone, $org);
            $stmt->execute();
            echo "Successfully signed up! Thank you!";
        } else {
            echo "Email already in use";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "Please fill in all fields";
    die();
}

?>