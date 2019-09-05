<?php
session_start();

$acc = mysqli_connect('73.130.243.207:3306/phpmyadmin','root','Brady1110', 'chat');
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["user"];
    $pass = $_POST["password"];
    
    $u = "SELECT * FROM users WHERE name = '$user'";
    $result = $acc->query($u);
    while($row = $result->fetch_assoc()) {
        $passCheck = $row["pass"];
    } 
    
    if($result->num_rows > 0) {
        
        $passN = md5($pass);
        if($passCheck == $passN) {
            $_SESSION["name"] = $name;
            header("location: chat.php");
        } else {
            $message = "Incorrect Password";
        }
        
    } else {
        $message = "Not Registered";
    }
}
?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center>
            <form method="post">
                <p><?php echo $message; ?></p>
                <input type="text" name="user" placeholder="Name"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login">
            </form>
        </center>
    </body>
</html>