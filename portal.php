<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Portal - My LMS</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html" class="logo">MyLMS</a>
            <ul>
                <li><a href="portal.php">My Courses</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="portal">
            <h2>Welcome to Your Learning Portal, <?= htmlspecialchars($_SESSION['email']); ?></h2>
            <p>Here are your enrolled courses:</p>
            <div class="course-list">
                <div class="course-card">
                    <h3>Web Development</h3>
                    <a href="course-content/web-development.html" class="btn">Go to Course</a>
                </div>
                <!-- Add more courses here -->
            </div>
        </section>
    </main>
</body>
</html>
