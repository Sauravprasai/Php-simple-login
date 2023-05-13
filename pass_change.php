<?php include "connection.php"?>
<?php include "function.php"?>
<?php changingpassword();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change password</title>    
</head>
<body>
    <form action="pass_change.php" method="post">
        <h3>Change password</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Enter your username" id="username" name="username">
        <br><br>

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your old password" id="password" name="password">
        <br><br>

        <label for="newpassword">New password</label>
        <input type="text" placeholder="Enter your new password" id="newpassword" name="newpassword">
        <br><br>

        <button name="change">Change Password</button>
        <br><br>
    </form>

    <a href="logIn.php"><button>Log In</button></a>
</body>
</html>
