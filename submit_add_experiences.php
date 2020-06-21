<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $label = trim($_POST['label']);
    $start = trim($_POST['start']);
    $end = trim($_POST['end']);
    $content = trim($_POST['content']);
    $school = trim($_POST['school']);
    $owner = trim($_POST['owner']);


    $validate = true;
    $msg="";

    if($label== ""){
        $msg .= "Label tidak boleh kosong.<br />";
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

    if($content== ""){
        $msg .= "Content tidak boleh kosong.<br />";
        $validate = false;
    }

    if($school== ""){
        $msg .= "School tidak boleh kosong.<br />";
        $validate = false;
    }

    if($owner== ""){
        $msg .= "Owner tidak boleh kosong.<br />";
        $validate = false;
    }

    if($validate){
        $con = createConnection();
        $sql = "INSERT INTO experiences (label,start,end,content,school,owner) VALUES ('".$label."', '".$start."', '".$end."', '".$content."', '".$school."', '".$owner."')";

        if(mysqli_query($con, $sql)){
            header("location:form_experiences.php?msg=1");
        }
        else{
            header("location:form_experiences.php?msg=0");
        }
    }
    else{
        $_SESSION['msg']= $msg;
        header("location:form_experiences.php?msg=0");
    }
}