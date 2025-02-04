<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voice Recording Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Voice Recording Form</h1>
        <form id="voice-form" action="save.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <button type="button" id="start-recording" class="btn btn-primary">Start</button>
                <button type="button" id="reset-recording" class="btn btn-secondary">Reset</button>
                <button type="button" id="push-button" class="btn btn-warning" style="display: none;">Push</button>
                <button type="button" id="stop-recording" class="btn btn-danger" disabled>Stop</button>
            </div>
            <div class="mb-3">
                <span id="timer" class="text-muted">00:00</span>
            </div>
            <audio id="audio-playback" controls style="display: none;"></audio>
            <input type="hidden" id="audio-blob" name="audio_blob">
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

<script type="text/javascript" src="voice_rec.js"></script>
</body>
</html>
