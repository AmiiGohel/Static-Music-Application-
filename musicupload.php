<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$target_dir = "musics/uplodedmusics/";
$error_message = '';
$success_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$audioFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
  $error_message = 'Sorry, file already exists.';
  $uploadOk = 0;
}

// Allow certain file formats
if($audioFileType != "mp3" && $audioFileType != "wav" && $audioFileType != "ogg") {
  $error_message ='Sorry, only MP3, WAV & OGG files are allowed.';
  $uploadOk = 0;
}

// Check if $uploadOk is set 
if ($uploadOk == 0) {
  $error_message = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $success_message= "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    $error_message = "Sorry, there was an error uploading your file.";
  }
}
}
$music_files = glob($target_dir."*.{mp3,wav,ogg}",GLOB_BRACE);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Uploads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="musicupload.css">

</head>
<body>
<!-- <div id="error-message"></div> -->
<div id="error-message"><?php echo $error_message; ?></div>
    <div id="success-message"><?php echo $success_message; ?></div>


    <div class="upload-container">
        <h2>Upload Your Music Here</h2>
        <form action="musicupload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload" class="custom-file-upload">
            <i class="fas fa-cloud-upload-alt"></i> Custom Music Upload 
        </label>
            <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;">
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>

    <div class="music-list">
        <?php foreach ($music_files as $file): ?>
            <div class="music-item">
                <audio controls>
                    <source src="<?php echo $file; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <p><?php echo basename($file); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
      document.getElementById('fileToUpload').onchange = function () {
    // You can add code here to handle the file input change event
};
var errorMessage = document.getElementById('error-message');

var successMessage = document.getElementById('success-message');
if (errorMessage.innerHTML.trim() !== '') {
    errorMessage.classList.add('show');
    setTimeout(function() {
        errorMessage.style.display = 'none';
        errorMessage.innerHTML = '';
    }, 5000); /* Adjust time as needed */
}
if (successMessage.innerHTML.trim() !== '') {
    successMessage.style.display = 'block';
}


    </script>
</body>
</html>



