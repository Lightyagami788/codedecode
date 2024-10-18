<?php
// upload.php
if (isset($_FILES['uploaded_file'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);

    // Create directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Check if the file was uploaded without errors
    if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["uploaded_file"]["name"])) . " has been uploaded.";
    } else {
        echo "There was an error uploading your file.";
    }
}
?>
