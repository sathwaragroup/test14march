<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle audio data submission
    if (isset($_POST['audio_blob'])) {
        $audioData = $_POST['audio_blob'];
        $audioData = str_replace('data:audio/mp3;base64,', '', $audioData);
        $audioData = str_replace(' ', '+', $audioData);
        $decodedAudio = base64_decode($audioData);

        $fileName = 'recorded_audio_' . time() . '.mp3';
        $filePath = 'uploads/' . $fileName;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true); // Create the uploads directory if it doesn't exist
        }

        if (file_put_contents($filePath, $decodedAudio)) {
            echo "Audio file saved successfully: <a href='$filePath'>$fileName</a>";
        } else {
            echo "Failed to save the audio file.";
        }
        exit;
    } else {
        echo "No audio data received.";
        exit;
    }
}
?>