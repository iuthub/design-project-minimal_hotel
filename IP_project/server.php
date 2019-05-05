<?php
session_start();

$username = "";
$email ="";
$errors=array();


$db = mysqli_connect('localhost', 'root','', 'project' ) or die("could nor connect to database");
$username = mysqli_real_escape_string($db, $_POST['username']);
$email =  mysqli_real_escape_string($db, $_POST['email']);
$password=  mysqli_real_escape_string($db, $_POST['password']);
$password_2=  mysqli_real_escape_string($db, $_POST['password_2']);
$name=mysqli_real_escape_string($db, $_POST['name']);
$phonenumber=mysqli_real_escape_string($db, $_POST['phonenumber']);
$country=mysqli_real_escape_string($db, $_POST['country']);

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if($password != $password_2) {array_push($errors, "Password do not match");}
if(empty($name)) {array_push($errors, "Name is required");}
if(empty($phonenumber)) {array_push($errors, "Phonenumber is required");}
if(empty($country)) {array_push($errors, "Country is required");}


$user_check_query= "SELECT * FROM user WHERE username= 'username' OR email = '$email' LIMIT 1 ";
 $results = mysqli_query($db, $user_check_query);
 $user = mysqli_fetch_assoc($results);
 if($user){

     if($user['username'] === $username ){array_push($errors, "Username already exist");}
     if($user['email'] === $email ){array_push($errors, "This email id  already has a registered usename");}
 }

 if (count($errors)==0){
     $password=md5($password);
     $query ="INSERT INTO user (username, email, password, name, phonenumber, country ) VALUES ('$username', '$email', '$password', '$name', '$phonenumber','$country')";

     mysqli_query($db,$query);
     $_SESSION['username'] =$username;
     $_SESSION['success']="You r now logged in ";

     header('location: index2.php');

 }

 if(isset($_POST['login_user']))
 {
     $username =mysqli_real_escape_string($db, $_POST['username']);
     $password =mysqli_real_escape_string($db, $_POST['password']);
 if(empty($username)){
     array_push($errors,"Username is require");
 }
if(empty($password)){
     array_push($errors, "Password is required");

}

if(count($errors)==0){
    $password=md5($password);
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results= mysqli_query($db,$query);


if(mysqli_num_results($results)){
    $_SESSION['username']=$username;
    $_SESSION['success']="Logged in successfully";
    header('location:index.php');
}
else{
    array_push($errors,"Wrong username/password combination. Please try again!");
}


}




 }









































?>
