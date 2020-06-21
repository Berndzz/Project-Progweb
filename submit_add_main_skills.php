<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $label = trim($_POST['label']);
    $percentage = trim($_POST['percentage']);
    $owner = trim($_POST['owner']);


    $validate = true;
    $msg="";

    if($label== ""){
        $msg .= "Label tidak boleh kosong.<br />";
        $validate = false;
    }

    if($percentage== ""){
        $msg .= "percentage tidak boleh kosong.<br />";
        $validate = false;
    }

    if($owner== ""){
        $msg .= "owner tidak boleh kosong.<br />";
        $validate = false;
    }

    if($validate){
        $con = createConnection();
        $sql = "INSERT INTO main_skills (label,percentage,owner) VALUES ('".$label."', '".$percentage."' , '".$owner."')";
        if(mysqli_query($con, $sql)){

            header("location:form_main_skills.php?msg=1");
        }
        else{
            header("location:form_main_skills.php?msg=0");
        }
    }
    else{
        $_SESSION['msg']= $msg;
        header("location:form_main_skills.php?msg=0");
    }
}