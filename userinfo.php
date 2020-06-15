<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}
else{
    echo"No connection";
}
mysqli_select_db($con, 'youtubedatabase');

$User = $_POST['user'];
$Email= $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comments = $_POST['Comments'];

$query = "insert into userinfodata (user,Email,Mobile,Comments)
values('$user','$Email','$Mobile','$Comments')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>