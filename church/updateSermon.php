<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Update Sermon</title>
  <link rel="stylesheet" href="universal.css" />
    <script src="universal.js"></script>
  <style>
    body {
      max-width: 600px;
      margin: 2rem auto;
      font-family: sans-serif;
      background-color: #f0f0f0;
      padding: 1rem;
    }
    label {
      display: block;
      margin-top: 1rem;
      font-weight: bold;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-top: 0.25rem;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      margin-top: 1.5rem;
      padding: 10px 20px;
      background-color: #007BFF;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
            <button id="backBtn" onclick="back();">Back</button>

  <h1>Update Sermon Video</h1>

  <label for="videoUrl">YouTube Embed URL:</label>
  <input type="text" id="videoUrl" placeholder="https://www.youtube.com/embed/..." />

  <button onclick="saveVideoUrl()">Save</button>

  <script>
    // Load saved URL on page load
    document.addEventListener('DOMContentLoaded', () => {
      const savedUrl = localStorage.getItem('sermonVideoUrl');
      if (savedUrl) {
        document.getElementById('videoUrl').value = savedUrl;
      }
    });

    function saveVideoUrl() {
      const url = document.getElementById('videoUrl').value.trim();
      if (!url) {
        alert('Please enter a valid YouTube embed URL.');
        return;
      }
      localStorage.setItem('sermonVideoUrl', url);
      alert('Sermon video updated!');
    }
  </script>
</body>
</html>
