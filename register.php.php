<?php

$Uname1 = $_POST['Uname1'];
$email  = $_POST['email'];
$Upswd1 = $_POST['Upswd1'];
$Upswd2 = $_POST['Upswd2'];

if (!empty($Username) || !empty($Email) || !empty($Userpass1) || !empty($Userpass2)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "project";

    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
    } else {
        $SELECT = "SELECT email FROM register WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO register (uname1, email, upswd1, upswd2) VALUES (?, ?, ?, ?)";

        // Check if Userpass1 matches Userpass2
        if ($upswd1 !== $upswd2) {
            echo '<script>alert("Passwords do not match. Please re-enter."); window.location.href = "registration.html";</script>';
            exit();
        }

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email); // Use a different variable for binding result
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        // Checking email
        if ($rnum == 0) {
            $stmt->close();
            
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssss", $uname1, $email, $upswd1, $upswd2);
            $stmt->execute();
            echo '<script>alert("Registration successful! Please login to submit feedback. :)"); window.location.href = "index.html";</script>';
            exit();
        } else {
            echo '<script>alert("Email already exists. Please try with a different email."); window.location.href = "registration.html";</script>';
            exit();
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
    die();
}
?>
