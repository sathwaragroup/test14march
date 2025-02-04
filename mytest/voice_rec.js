  const startButton = document.getElementById('start-recording');
        const stopButton = document.getElementById('stop-recording');
        const resetButton = document.getElementById('reset-recording');
        const pushButton = document.getElementById('push-button');
        const timerDisplay = document.getElementById('timer');
        const audioPlayback = document.getElementById('audio-playback');
        const audioBlobInput = document.getElementById('audio-blob');

        let mediaRecorder;
        let audioChunks = [];
        let timerInterval;
        let secondsElapsed = 0;
        let isPaused = false;

        function updateTimer() {
            if (!isPaused) {
                secondsElapsed++;
                const minutes = Math.floor(secondsElapsed / 60).toString().padStart(2, '0');
                const seconds = (secondsElapsed % 60).toString().padStart(2, '0');
                timerDisplay.textContent = `${minutes}:${seconds}`;
            }
        }

        // Start recording
        startButton.addEventListener('click', async () => {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            mediaRecorder = new MediaRecorder(stream);

            mediaRecorder.start();
            audioChunks = [];
            secondsElapsed = 0;
            timerDisplay.textContent = "00:00";
            timerInterval = setInterval(updateTimer, 1000);
            isPaused = false;

            mediaRecorder.ondataavailable = (event) => {
                audioChunks.push(event.data);
            };

            mediaRecorder.onstop = () => {
                clearInterval(timerInterval);
                const audioBlob = new Blob(audioChunks, { type: 'audio/mp3' });
                const reader = new FileReader();
                reader.onload = () => {
                    audioBlobInput.value = reader.result; // Store Base64-encoded audio in the hidden input
                };
                reader.readAsDataURL(audioBlob);

                const audioURL = URL.createObjectURL(audioBlob);
                audioPlayback.src = audioURL;
                audioPlayback.style.display = 'block';
            };

            startButton.disabled = true;
            stopButton.disabled = false;
            resetButton.disabled = true;
            pushButton.style.display = 'inline-block';
            pushButton.textContent = 'Pause';
        });

        // Stop recording
        stopButton.addEventListener('click', () => {
            mediaRecorder.stop();
            startButton.disabled = false;
            stopButton.disabled = true;
            resetButton.disabled = false;
            pushButton.style.display = 'none';
            clearInterval(timerInterval);
        });

        // Reset recording
        resetButton.addEventListener('click', () => {
            audioChunks = [];
            audioPlayback.src = '';
            audioPlayback.style.display = 'none';
            audioBlobInput.value = '';
            timerDisplay.textContent = "00:00";
            resetButton.disabled = true;
            pushButton.style.display = 'none';
        });

        // Push button functionality (Pause/Resume)
        pushButton.addEventListener('click', () => {
            if (isPaused) {
                // Resume recording
                mediaRecorder.resume();
                isPaused = false;
                pushButton.textContent = 'Pause';
            } else {
                // Pause recording
                mediaRecorder.pause();
                isPaused = true;
                pushButton.textContent = 'Resume';
            }
        });