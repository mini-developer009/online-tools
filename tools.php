<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Developer Tools</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="assets/img/1000002112-Picsart-BackgroundRemover.jpg" rel="icon">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: linear-gradient(135deg, #1d2b64, #f8cdda);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }
    .container {
      max-width: 1200px;
      width: 100%;
    }
    h1 {
      text-align: center;
      color: #fff;
      margin-bottom: 30px;
      font-size: 36px;
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 30px;
      text-align: center;
      color: #fff;
      box-shadow: 0 8px 32px rgba(0,0,0,0.2);
      transition: transform 0.3s, background 0.3s;
    }
    .card:hover {
      transform: translateY(-8px);
      background: rgba(255, 255, 255, 0.25);
    }
    .card i {
      font-size: 40px;
      margin-bottom: 15px;
      color: #00c6ff;
    }
    .card h3 {
      margin-bottom: 10px;
    }
    .card a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      border-radius: 8px;
      background: linear-gradient(45deg, #007bff, #00c6ff);
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
    }
    .card a:hover {
      background: linear-gradient(45deg, #0056b3, #0096c7);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Mini Developer Tools</h1>
    <div class="grid">

      <div class="card">
        <i class="fa-solid fa-calculator"></i>
        <h3>Calculator</h3>
        <a href="calculator.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-arrows-rotate"></i>
        <h3>Unit Converter</h3>
        <a href="unitconverter.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-stopwatch"></i>
        <h3>Stopwatch</h3>
        <a href="stopwatch.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-clock"></i>
        <h3>Countdown Timer</h3>
        <a href="countdowntimer.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-palette"></i>
        <h3>Color Picker</h3>
        <a href="colorpicker.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-qrcode"></i>
        <h3>QR Code Generator</h3>
        <a href="qrcodegenerator.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-language"></i>
        <h3>Text Case Converter</h3>
        <a href="textcase.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-ruler-combined"></i>
        <h3>BMI Calculator</h3>
        <a href="bmi.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-hashtag"></i>
        <h3>Password Generator</h3>
        <a href="passwordgenerator.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-file-code"></i>
        <h3>JSON Formatter</h3>
        <a href="jsonformatter.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-solid fa-lock"></i>
        <h3>Base64 Encoder/Decoder</h3>
        <a href="base64-tool.html">Open</a>
      </div>
      <div class="card">
        <i class="fa-brands fa-markdown"></i>
        <h3>Markdown to HTML</h3>
        <a href="markdown-to-html.html">Open</a>
      </div>

    </div>
  </div>
</body>
</html>
