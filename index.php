
<a href="./create_image.php">Create</a>

<?php

$imageFolder = './images'; // Replace with the actual folder name

// Get the list of files in the folder
$files = scandir($imageFolder);

// Loop through the files
foreach ($files as $file) {
    // Skip "." and ".." (current directory and parent directory)
    if ($file === '.' || $file === '..') {
        continue;
    }

    // Get the full path to the image
    $imagePath = $imageFolder . '/' . $file;


    // Check if the file is an image (you may want to add more sophisticated checks)
    if (is_file($imagePath) && in_array(pathinfo($imagePath, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
        // Display the image
        echo '<img src="' . $imagePath . '" alt="' . $file . '" style="max-width: 300px; max-height: 300px; margin: 10px;">';
        echo "<a href='delete_image.php?image=$file'>Delete</a>";
    }
}

?>
