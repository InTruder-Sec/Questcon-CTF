<!DOCTYPE html>
<html>
<head>
    <title>Pirate Markdown Editor</title>
</head>
<body>
    <h1>Welcome to the Pirate Markdown Editor</h1>
    
    <?php
    // Check if the user submitted some markdown text
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['markdown'])) {
        $markdown = $_POST['markdown'];
        // Sanitize the markdown (use a better sanitization method in a real environment)
        $markdown = htmlspecialchars($markdown);
        echo "<div class='markdown-output'>$markdown</div>";

        // Intentionally vulnerable code: Do not use this in production!
        echo "<p>Report Markdown Trouble:</p>";
        echo "<form method='post' action='report.php'>";
        echo "<textarea name='report'></textarea>";
        echo "<input type='submit' value='Submit Report'>";
        echo "</form>";
    }
    ?>
    
    <form method="POST" action="index.php">
        <textarea name="markdown"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
