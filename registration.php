<?php include "connection.php"?>
<?php include "function.php"?>
<?php registration();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="registration.php" method="post">
        <h3>Registration for new user</h3>

        <label for="firstname">Firstname</label>
        <input type="text" placeholder="Enter your first name" id="firstname" name="firstname">
        <br><br>

        <label for="lastname">Lastname</label>
        <input type="text" placeholder="Enter your last name" id="lastname" name="lastname">
        <br><br>

        <label for="email">Email</label>
        <input type="email" placeholder="Enter your email address" id="email" name="email">
        <br><br>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">
        <br><br>
        
        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">
        <br><br>

        <button name="register">Register</button>
        <br><br>
 
        </div>
    </form>
    <a href="logIn.php"><button>Login</button></a>

</body>
</html>
