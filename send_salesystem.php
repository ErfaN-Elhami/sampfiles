<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="icon">Icon:</label>
        <input type="text" id="icon" name="icon" required><br><br>
        
        <label for="downlink">Download Link:</label>
        <input type="text" id="downlink" name="downlink" required><br><br>
        
        <label for="topic">Topic:</label>
        <input type="text" id="topic" name="topic" required><br><br>
        
        <label for="des">Description:</label>
        <textarea id="des" name="des" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
