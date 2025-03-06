<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Files - LAN Server</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>📂 Uploaded Files</h1>
    <p>Click on a file to download it.</p>

    <div class="files-grid">
        <?php
        $uploadDir = 'uploads/';
        if (is_dir($uploadDir)) {
            $files = scandir($uploadDir);
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    // Get file extension
                    $fileExt = pathinfo($file, PATHINFO_EXTENSION);
                    
                    // Define file type icons (You can expand this list)
                    $fileIcons = [
                        "jpg" => "🖼️",
                        "png" => "🖼️",
                        "gif" => "🖼️",
                        "pdf" => "📜",
                        "docx" => "📜",
                        "txt" => "📜",
                        "mp4" => "🎥",
                        "mp3" => "🎵",
                        "zip" => "📦",
                        "default" => "📁"
                    ];

                    // Use matching icon or default
                    $icon = isset($fileIcons[$fileExt]) ? $fileIcons[$fileExt] : $fileIcons["default"];

                    echo "<div class='file-card'>";
                    echo "<div class='file-icon'>$icon</div>";
                    echo "<a href='$uploadDir$file' download>$file</a>";
                    echo "</div>";
                }
            }
        } else {
            echo "<p>No files available.</p>";
        }
        ?>
    </div>

    <!-- Button to go back to the upload page -->
    <a href="index.php" class="nav-button">⬅️ Go Back</a>
</div>
</body>
</html>
