<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in Music App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="signin.css">
</head>
<body>

    <div class="container">
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <h2>Sign-in Music App</h2>
    <form action="signin.php" method="post">
            <div id="signinDiv" >
                <label for="email">Email</label>
                <input type="email" name="emailinput" placeholder="Enter Valid Email Adress" id="email">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" name="contact" placeholder="Enter Contact Number">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Valid Password" id="password">
                <label for="repassword">Re-enter Password</label>
                <input type="password" id="repassword" name="repassword" placeholder="Re-enter Password">
            </div>

            <input type="submit" value="Sign In" name="btnsubmit">
    </form>
    </div>
</body>
</html>

<?php

$servername="localhost";
$username = "root";
$password = "";
$dbname = "music_app_db";

//create connectin 

$conn= new mysqli($servername,$username,$password,$dbname);

//check connection

if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["btnsubmit"])){
    $email = $_POST["emailinput"];
    $contact = $_POST["contact"];
    $passwords= $_POST["password"];
    $repasswords= $_POST["repassword"];

    //Check if passwords match
    if($passwords !== $repasswords){
        echo "Passwords do not match. Please try again.";
        exit;
    }

    //Encrypt the password 
    
    //$hashed_password = password_hash($passwords,PASSWORD_DEFAULT);

    //prepare and bind

    $stmt = $conn->prepare("INSERT INTO logintbl (EMAIL, CONTACTNO, PASSWORD) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt -> bind_param("sss",$email,$contact,$passwords);

    //Execute the statement
    $stmt->execute();

    // echo "New record created successfully";

    //Close the statment

    $stmt->close();

    header("Location: music.php");
    exit;
}
?>
