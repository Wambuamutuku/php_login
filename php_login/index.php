<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php trial</title>
</head>
<body>
    <a href="logout.php ">logout</a>
    <h2>This is the index page</h2>
    Hello,<?php echo $user_data['username']; ?>
     
</body>
</html>/