<?php

$acc = mysqli_connect('73.130.243.207:3306/phpmyadmin','root','Brady1110', 'chat');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["user"];
    $pass = md5($_POST["pass"]);
    
    $id = uniqid();
    
    // $insert = "INSERT INTO users (uuid, name, pass) VALUES ('$id', '$name', $pass')";
    // $acc->query($insert);
    echo $name;
    echo $pass;
    echo $id;
}
?>
<html>
    <head>
        <title>Add</title>
    </head>
    <body>
        <center>
            <h1>Add</h1>
            <form method="post">
                <input type="text" name="user" placeholder="Name"><br>
                <input type="password" name="pass" placeholder="Password"><br>
                <input type="submit" value="Add">
            </form>
        </center>
    </body>
</html>
