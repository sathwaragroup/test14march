<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['image'])) {
        echo json_encode(['error' => 'No image data provided']);
        exit;
    }

    $imageData = $_POST['image'];

    // Validate the data URL format
    if (strpos($imageData, 'data:image/png;base64,') !== 0) {
        echo json_encode(['error' => 'Invalid image format']);
        exit;
    }

    // Decode the Base64 string
    $imageData = str_replace('data:image/png;base64,', '', $imageData);
    $imageData = base64_decode($imageData);

    // Define the file path to save the image
    $filePath = 'uploads/image_' . time() . '.png';

    // Create the uploads directory if it doesn't exist
    if (!is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }

    // Save the image to the server
    if (file_put_contents($filePath, $imageData)) {
        echo json_encode(['success' => true, 'filePath' => $filePath]);
    } else {
        echo json_encode(['error' => 'Failed to save image']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}
?>
