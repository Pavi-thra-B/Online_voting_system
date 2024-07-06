document.addEventListener('DOMContentLoaded', function () {
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const capturedImage = document.getElementById('capturedImage');
    const captureBtn = document.getElementById('captureBtn');
    const verifyBtn = document.getElementById('verifyBtn');
    const imageDataInput = document.getElementById('imageData');
    const voterIdInput = document.querySelector('input[name="voterId"]');
    const verificationResult = document.getElementById('verificationResult');

    let stream;

    navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
            video.srcObject = stream;
            video.play();
        })
        .catch((error) => console.error('Error accessing webcam:', error));

    captureBtn.addEventListener('click', captureImage);

    function captureImage() {
        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        const imageData = canvas.toDataURL('image/png');
        imageDataInput.value = imageData;
        capturedImage.src = imageData; // Display the captured image
        verifyBtn.disabled = false;
    }

    verifyBtn.addEventListener('click', function (event) {
        event.preventDefault();

        if (voterIdInput.value.trim() === '') {
            alert('Please enter Voter ID.');
            return;
        }

        const formData = new FormData(document.getElementById('verificationForm'));
          alert("Going to fetch");
        fetch('verify_face.php', {
            method: 'POST',
            body: formData
        })
        
        .then(response => response.json())
        .then(data => {
            console.log('Response:', data);
            alert("Going to fetch");

            if (data.status === 'success') {
                verificationResult.textContent = 'Verification Successful!';
                verificationResult.style.color = 'green';
            } else {
                verificationResult.textContent = 'Verification Failed!';
                verificationResult.style.color = 'red';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
