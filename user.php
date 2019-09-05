<html>
<title>Chat Room User Interface</title>

<body>

<iframe src="chatroom.php" height="400" width="500"></iframe>
<br>
</html>

<?php
session_start();
?>

<?php
//sets the page to return to when exiting


if (!empty($_POST['name'])){
 $name = $_POST['name'];
}
else {
$name = $_SESSION['name'];
}
$_SESSION["name"] = $name;

//check to see if a name is supplied, if not redirect back to login.

if(empty($name)) {//if a name wasn't supplied during login or if backdoor is used kick them out
	
	Header( "Location: login.php" );
	exit();
}

echo "--- Welcome to the chatroom : " . $name . " ---";

$message = $_POST['message'];
if(!empty($message)){
//open file
$handle = fopen("messages.txt","a");

//write to file
fwrite($handle, $name . ":" . $message . "\n");

//close file
fclose($handle);

}
?>

<form action="user.php" method="post">
< Enter Your Message >
<br>
<input name="message" type="text" autofocus required>
<br>
<input type="submit" value="Talk">
</form>

</body>
</html>