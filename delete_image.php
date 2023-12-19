<?php
// Check if an image parameter is provided
if (isset($_GET['image'])) {
    // Get the image file name or path
    $imageToDelete = $_GET['image'];

    // Specify the path to the uploads directory
    $uploadsDirectory = 'images/';

    // Construct the full path to the image
    $imagePath = $uploadsDirectory . $imageToDelete;

    // Check if the file exists
    if (file_exists($imagePath)) {
        // Attempt to delete the image file
        if (unlink($imagePath)) {
            echo "Image '$imageToDelete' has been deleted successfully.";

            header("Location: ./index.php");
            exit();

        } else {
            echo "Error deleting image.";
        }
    } else {
        echo "Image not found.";
    }
} else {
    echo "Image parameter not provided.";
}
?>
