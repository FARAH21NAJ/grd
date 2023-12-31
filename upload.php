<?php
$targetDirectory = "uploads/"; // Directory where you want to save the uploaded files

// Check if the file was uploaded without errors
if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
    $fileTmpName = $_FILES["fileToUpload"]["tmp_name"]; // Temporary file name
    $fileName = basename($_FILES["fileToUpload"]["name"]); // Original file name

    // Check if the file already exists in the target directory
    if (file_exists($targetDirectory . $fileName)) {
        echo "Sorry, file already exists.";
    } else {
        // Move the file to the desired location
        if (move_uploaded_file($fileTmpName, $targetDirectory . $fileName)) {
            echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
            // Perform additional operations here if needed, such as database insertion
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Error: " . $_FILES["fileToUpload"]["error"];
}
?>
