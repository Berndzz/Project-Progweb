<?php
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $id= $_POST['id'];
    $con = createConnection();
    $sql = "DELETE FROM skills WHERE id = '".$id."'";
    
    if(mysqli_query($con, $sql)){
        header("location:list_other_skills.php?msg=1");
    }
    else{
        header("location:list_other_skills.php?msg=0");
    }
}

?>