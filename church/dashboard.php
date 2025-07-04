<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
    <ul>
        <li><a href="updateLesson.html">Update Lesson</a></li>
        <li><a href="updateSermon.html">Update Sermon</a></li>
        <li><a href="updateTrivia.html">Update Trivia</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
