<?php
$nav_classes[$page] = "newpost";
?>
<!DOCTYPE html>
<html>
<head>
<title>Submit a Post</title>
</head>
<body>
<form action="newpostsubmit.php" method="POST">
Title:<br>
<input type="text" name="title">
<br>
Date:<br>
<input type="date" name="date">
<br>Category:<br>
<input type="text" name="category">
<br>Content:<br>
<input type="text" name="post">
<input type="submit" value="Submit">
</form>
</body>
</html>
