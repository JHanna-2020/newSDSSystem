<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sermon</title>
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="sermon.css">
    <script src="universal.js"></script>

</head>
<body>
<div class="container">
  <h1 id="header">Sermon</h1>
  <button id="backBtn" onclick="back()">Back</button>
  <div class="video-container">
  <iframe id="sermon" width="560" height="315" frameborder="0" allowfullscreen
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" title="YouTube video player"></iframe>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const iframe = document.getElementById('sermon');
    const savedUrl = localStorage.getItem('sermonVideoUrl') || "https://www.youtube.com/embed/NT2_ZeUcRW8?si=akgKQ1MqYqgLjVOl";
    iframe.src = savedUrl || "https://www.youtube.com/embed/NT2_ZeUcRW8?si=akgKQ1MqYqgLjVOl";
  });
</script>

</body>
</html>
