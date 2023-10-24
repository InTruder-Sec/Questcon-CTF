<!DOCTYPE html>
<html>
<head>
    <title>Report Markdown Trouble</title>
</head>
<body>
    <h1>Report Markdown Trouble</h1>

    <?php
    // Check if the user submitted a report
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['report'])) {
        $report = $_POST['report'];
        // Output the user's report (unsafe in a real environment)
        echo "<p>Report: $report</p>";
    }
    ?>
</body>
</html>
