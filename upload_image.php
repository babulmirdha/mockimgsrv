<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // Check if a file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Specify the target directory to save the uploaded image
        $targetDirectory = 'images/';

        // Create the target directory if it doesn't exist
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0755, true);
        }

        // Generate a unique name for the uploaded file
        $targetFile = $targetDirectory . uniqid('image_') . '_' . basename($_FILES['image']['name']);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            echo 'Image uploaded successfully.';

            header("Location: ./index.php");
            exit();

        } else {
            echo 'Error uploading image.';
        }
    } else {
        echo 'No file uploaded or an error occurred.';
    }
}
?>