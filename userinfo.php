<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successfully";
} else{
    echo "No connection";
}

mysqli_select_db($con,'youtubeuserdata');

$user  = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
// $comments = $_POST['comments'];

$query = "insert into userinfodata (user, email, mobile)
values ('$user','$email','$mobile')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');
?>