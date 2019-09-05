<html>
<meta http-equiv="refresh" content="2">
<title>ChatRoom</title>

<body>

<?php

//read file
$readin = file("messages.txt");//read file

$newarray = file("messages.txt",FILE_IGNORE_NEW_LINES);//converts file into an array
$linecount = count($newarray);//counts the lines

if($linecount >15) {//if the line count exceeds 15
array_splice($newarray, 0, 1);//remove 1 line
//fclose($readin);//close the file

$handle = fopen("messages.txt",'w');//reopen in write only to erase the file
//fclose($handle);//close the file

$handle = fopen("messages.txt",'a');//reopen in append mode

foreach($newarray as $addthis){//each element of the array will be called addthis
fwrite($handle, $addthis."\n");//write each element of the array to the file

}

$readin = file("messages.txt");//
}
foreach($readin as $thenames){

echo $thenames.'<br>';

}
?>

</body>
</html>