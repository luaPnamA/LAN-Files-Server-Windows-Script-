<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Files - LAN Server</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>📤 Upload Files</h1>
    <p>Select a file to upload and share across your network.</p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Choose a file:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload">
    </form>

    <!-- Button to navigate to file list page -->
    <a href="files.php" class="nav-button">📂 View Uploaded Files</a>
</div>
</body>
</html>
