<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $title = trim($_POST['title']);
    $start = trim($_POST['start']);
    $end = trim($_POST['end']);
    $school = trim($_POST['school']);
    $edu = trim($_POST['edu']);
    $owner = trim($_POST['owner']);


    $validate = true;
    $msg="";

    if($title== ""){
        $msg .= "Title tidak boleh kosong.<br />";
        $validate = false;
    }

    if($start== ""){
        $msg .= "Tahun tidak boleh kosong.<br />";
        $validate = false;
    }

    if($end== ""){
        $msg .= "Tahun tidak boleh kosong.<br />";
        $validate = false;
    }

    if($school== ""){
        $msg .= "School tidak boleh kosong.<br />";
        $validate = false;
    }

    if($edu== ""){
        $msg .= "Education tidak boleh kosong.<br />";
        $validate = false;
    }

    if($owner== ""){
        $msg .= "Owner tidak boleh kosong.<br />";
        $validate = false;
    }

    if($validate){
        $con = createConnection();
        $sql = "INSERT INTO education (title,start,end,school,edu,owner) VALUES ('".$title."', '".$start."', '".$end."', '".$school."', '".$edu."', '".$owner."')";

        if(mysqli_query($con, $sql)){
            header("location:form_education.php?msg=1");
        }
        else{
            header("location:form_education.php?msg=0");
        }
    }
    else{
        $_SESSION['msg']= $msg;
        header("location:form_education.php?msg=0");
    }
}