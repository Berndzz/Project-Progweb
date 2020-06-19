<?php 
session_start();
include ('connection/connection.php');


if(isset($_SESSION['user']) && $_SESSION){

}

if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username = '".$username."' AND password= SHA1('".$password."')" ;
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);

    $_SESSION['user']['id'] = $row['id'];
    $_SESSION['user']['username'] = $row['username'];
    $_SESSION['user']['access_group']=$row['access_group'];

    header("location:index.html");
  }else{
    header("location:login.php?err=0");
  }
}
?>