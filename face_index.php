<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Verification</title>
   <style>
    body {
    font-family: Arial, sans-serif;
    background-image: url("img1.jpg");
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.container {
   
    background-color: rgb(6, 224, 240);
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {

    color: #333;
    text-align:center;
}

video {
    border: 1px solid red;
    margin-top: 20px;
    border-radius: 5px;
}

img {
    
    
    margin-top:25px;
    border: 1px solid red;
    border-radius: 5px;
}

input, button {
    padding: 10px;
    margin-top: 10px;
    text-align:center;
}

button {
    cursor: pointer;
    background-color:rgba(0,255,0);
    color:black;
    border: 2px solid;
    border-radius: 5px;
}

button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

#verificationResult {
    margin-top: 10px;
    color: #333;
    font-weight: bold;
}
#verificationForm{
    text-align:center;
    color:black;
    background-color: rgb(6, 224, 240);
    
}
   </style>
</head>
<body>
    <div class="container">
        <h1>Face Verification</h1>
        <video id="video" width="640" height="480" autoplay></video>
        <canvas id="canvas" style="display:none;" width="640" height="480"></canvas>
        <img id="capturedImage" alt="Captured Image">
<center> 
    
<button id="captureBtn">Capture Image</button></center>
       
        <form id="verificationForm" action="verify.php" method="post">
            <input type="text" name="voterId" placeholder="Enter Voter ID" required>
            <input type="hidden" name="imageData" id="imageData">
            <button type="button" id="verifyBtn" disabled>Verify</button>
        </form>
        <p id="verificationResult"></p>
    </div>
    <script src="face_script.js"></script>
</body>
</html>
