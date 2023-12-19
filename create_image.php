


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
</head>
<body>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <label for="image">Select Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <button type="submit">Upload Image</button>
    </form>
</body>
</html>
