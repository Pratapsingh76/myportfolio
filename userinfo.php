<?php 
$con =mysqli_connect('localhost','root');

if($con){
    echo "Connection successfuly";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'if0_35748672_user_data');

$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$emailsub =$_POST['emailsub'];
$message =$_POST['message'];

$query = " insert into userinfodata (user, email, mobile, emailsub, message)
values ('$user', '$email', '$mobile', '$emailsub', '$message')";

mysqli_query($con, $query);

header('location:index.html');

?>

