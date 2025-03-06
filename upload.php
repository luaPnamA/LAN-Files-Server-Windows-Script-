<?php
// Ensure the uploads folder exists
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['fileToUpload'])) {
        $file = $_FILES['fileToUpload'];
        $targetFile = $uploadDir . basename($file['name']);

        // Move the uploaded file
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
            echo "<script>alert('File uploaded successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error uploading file.'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('No file uploaded.'); window.location.href='index.php';</script>";
    }
}
?>
