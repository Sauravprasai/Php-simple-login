<?php include "connection.php"?>

<?php
function registration(){
    global $connection;

    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username && $password && $firstname && $lastname && $email){
            $querytocheck = "SELECT * FROM users WHERE username='$username'";

            $result = mysqli_query($connection,$querytocheck);

            if(mysqli_num_rows($result) > 0){
                echo "Username has already been used";
            } else {
                $querytoinsert = "INSERT INTO users(firstname,lastname,email,username,password) ";
                $querytoinsert .= "VALUES ('$firstname','$lastname','$email','$username', '$password')";

                $result = mysqli_query($connection, $querytoinsert);

                if(!$result) {
                    die('Query FAILED' . mysqli_error());
                }
                else{
                    echo("Successfully Created a user !!!");
                }
            }
        }
        else{
            echo "Please Fill all the information!!!";
        }
    }
    
}

function loggingIn(){
    global $connection;
    if(isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];  
        
        $query = "SELECT * FROM users WHERE username = '$username'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            if($user['password'] == $password){
                echo "You have logged in.";
            }
            else{
                echo "Password didn't match";
            }
        }
        else{
            echo "ID and password didn't match";
        }
    }
    else{
        echo "Please enter ID and Password !!!";
    }   
}


function changingpassword(){
    global $connection;

    if(isset($_POST['change'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];


        if(empty($username) || empty($password) || empty($newpassword)){
            echo "Please fill in all fields";
            return;
        }

        $query = "SELECT * FROM users WHERE username='$username'";

        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['password'] == $password){
                $query1 = "UPDATE users SET password='$newpassword' WHERE username='$username'"; 
                $querypasser = mysqli_query($connection, $query1);
                if($querypasser){
                    echo "Password has been updated successfully !!!";
                }
                else{
                    echo "Error updating password";
                }
            }
            else{
                echo "Incorrect password";
            }
        }
        else{
            echo "User not found";
        }
    }
}


?>