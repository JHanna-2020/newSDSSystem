<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["role"] !== "teacher") {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servant Dashboard - AAR Sunday School</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="universal.css"> -->
    <link rel="stylesheet" href="servant.css">
    <script src="servant.js"></script>

   
</head>
<body>
     
   <div class="user-info">
    <?php if (isset($_SESSION["username"])): ?>
        <h1 class="username" id="header">Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    <?php endif; ?>
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-btn" id="logout">Logout</button>
    </form>
</div>



    <div class="group">
        <div class="section top" onclick="saintStory();">Update Saint Story</div>
        <div class="section left" onclick="updateLesson();">Update Lesson</div>
        <div class="section ql" onclick="qa();">Answer Questions</div>
        <div class="section center" onclick="updateTrivia();">Update Bible Trivia</div>
        <div class="section right" onclick="updateHymn();">Update Hymn</div>
        <div class="section qr" onclick="updateSermon();">Update Sermon</div>
        <div class="section bottom" onclick="updateConfession();">Update Confession</div>
        <div class="section bottom2" onclick="studentView();">Student View</div>
    </div>
</body>
</html>
