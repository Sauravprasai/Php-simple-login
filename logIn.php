<?php include "connection.php"?>
<?php include "function.php"?>
<?php loggingIn();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login Form</title>
    
</head>
<body>
    <form action="logIn.php" method="post">
        <h3>Log In</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">
        <br><br>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <br><br>

        <button name="logIn.php">Log In</button>
    </form>

    <a href="registration.php"><button>Registration</button></a>
    <br>
    <a href="pass_change.php"><button>Change Password?</button></a>
</body>
</html>
