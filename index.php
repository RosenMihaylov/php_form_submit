<?php

?>

<!doctype html>
<html lang="en">
<head>
    <title>Php form handling</title>
</head>
<body>
    <?php require_once 'process.php'?>
<form action="register.php" method="POST">
    <p>User name: <input type="text" name="userName" value="" placeholder="User Name"></p>
    <p>Password: <input type="password" name="password" value="" placeholder="Password"></p>
    <button type="submit" name="submit" value="Submit">Submit</button>
</form>
<div>
    <?php require_once "printUsers.php" ?>
</div>
</body>
</html>

<?php

?>