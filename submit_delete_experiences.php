<?php
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $id= $_POST['id'];
    $con = createConnection();
    $sql = "DELETE FROM experiences WHERE id = '".$id."'";
    
    if(mysqli_query($con, $sql)){
        header("location:list_experiences.php?msg=1");
    }
    else{
        header("location:list_experiences.php?msg=0");
    }
}

?>