<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <a href="index.php"><i class="fas fa-home"></i> Home</a>
    <h2>Reset Password</h2>
    <!-- <button onclick="showEmail()">Email</button> -->
    
    <form action="forgotpassword.php" method="post">
            <div id="emailDiv" >
                <label for="email">Email</label>
                <input type="email" name="emailinput" placeholder="Enter Valid Email Adress" id="email">
                <label for="contact">Contact</label>
                <input type ="text" id="Contact" name="Contact" placeholder="Enter Valid Contact Number">
                <label for="password">New Password</label>
                <input type="password" name="password" placeholder="Enter Valid Password" id="password">
                <label for="newpassword">Re-Enter Password</label>
                <input type="password" id="newpassword" name="newpassword" placeholder="Enter New Password">
            </div>
            <input type="submit" value="Reset Password" name="btnreset">
    </form>
    </div>
    
    <script>
        function showEmail() {
            document.getElementById("emailDiv").style.display="block";
        }
        showEmail();
    </script>
    
</body>
</html>

<?php
$servername="localhost";
$username = "root";
$password = "";
$dbname = "music_app_db";

// Create connection
$conn= new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnreset'])) {
    $email = $_POST['emailinput'];
    $contact = $_POST['Contact']; // Changed 'contact' to 'Contact'
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];

    // Check if passwords match 
    if($password !== $newpassword){
        echo "Passwords do not match. Please try again.";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE logintbl SET PASSWORD = ? WHERE EMAIL = ? AND CONTACTNO = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("sss", $newpassword, $email, $contact);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Password Updated Successfully";
    } else {
        echo "Error updating password: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit;
}
?>

