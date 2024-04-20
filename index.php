
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
    <h2>Login Form</h2>
    <!-- <button onclick="showEmail()">Email</button> -->
   
    <form action="index.php" method="post">
            <div id="emailDiv" >
                <label for="email">Email</label>
                <input type="email" name="emailinput" placeholder="Enter Valid Email Adress" id="email">
               
                <label for="contact">Contact</label>
                <input type ="text" id="Contact" name="Contact" placeholder="Enter Valid Contact Number">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Valid Password" id="password">
            </div>
            <input type="submit" value="Submit" name="btnsubmit">
            
            <a href="signin.php">Sign In</a> <!-- Redirects to the sign-in page -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="forgotpassword.php">Forgot Password?</a> <!-- Redirects to the forgot password page -->
          
    </form>
    </div>
    
    <!-- <script>
        function showEmail()
        {
            document.getElementById("emailDiv").style.display="block";
            document.getElementById("contactDiv").style.display="none";
        }
        function showContact(){
            document.getElementById("emailDiv").style.display="none";
            document.getElementById("contactDiv").style.display="block";
        }

        showEmail();
    </script> -->
    
</body>
</html>

<?php
session_start();
$servername="localhost";
$username = "root";
$password = "";
$dbname = "music_app_db";

// Create connection
$conn= new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["btnsubmit"])){
    error_reporting(E_ALL); ini_set('display_errors', 1);
    
    $email = $_POST["emailinput"];
    $contact = $_POST["Contact"];
    $passwords= $_POST["password"];
    //$haspasswords = password_hash($passwords,PASSWORD_DEFAULT);
    //echo $haspasswords;

    $stmt = $conn->prepare("SELECT * FROM logintbl WHERE EMAIL=?  AND PASSWORD=?");
    $stmt->bind_param("ss", $email, $passwords);

    $stmt->execute();

    $result = $stmt->get_result();

    // if ($result->num_rows > 0) {
    //     $user = $result->fetch_assoc();

    //     // $isPasswordCorrect = password_verify($passwords, $user['PASSWORD']);
    //     // print_r($isPasswordCorrect);

    //     if ($isPasswordCorrect) {
    //         $_SESSION['loggedin'] = true;
    //         header("Location: music.php");
    //         exit;
    //     } else {
    //         echo "Wrong password. Please try again.";
    //         if (!isset($_SESSION['attempt'])) {
    //             $_SESSION['attempt'] = 0;
    //         }
    //         $_SESSION['attempt'] += 1;
    //         if ($_SESSION['attempt'] >= 3) {
    //             echo "Too many wrong password attempts. Please try again after 5 minutes.";
    //             header('Refresh: 300; url=login.php');
    //             exit;
    //         }
    //     }
    // }
    // else {
       // echo "No account found. Please sign up.";
    //}
    if(mysqli_num_rows($result)>=1){
        $_SESSION['loggedin'] = true;
             header("Location: music.php");
            exit;
        } 
    else {
           echo "Wrong password. Please try again.";
        }
    

    $stmt->close();
}


?>
