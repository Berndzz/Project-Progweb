<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $label = trim($_POST['label']);
    $month = trim($_POST['month']);
    $date = trim($_POST['date']);
    $year = trim($_POST['year']);
    $name = trim($_POST['name']);
  //  $picture = trim($_POST['picture']);
    $content = trim($_POST['content']);


    $validate = true;
    $msg="";

    if($label== ""){
        $msg .= "Label tidak boleh kosong.<br />";
        $validate = false;
    }

    if($month== ""){
        $msg .= "Month tidak boleh kosong.<br />";
        $validate = false;
    }

    if($date== ""){
        $msg .= "Date tidak boleh kosong.<br />";
        $validate = false;
    }

    if($year== ""){
        $msg .= "Year tidak boleh kosong.<br />";
        $validate = false;
    }

    if($name== ""){
        $msg .= "Name tidak boleh kosong.<br />";
        $validate = false;
    }

//if($picture== ""){
 //       $msg .= "Picture tidak boleh kosong.<br />";
 //       $validate = false;
 //   }

    if($content== ""){
        $msg .= "Content tidak boleh kosong.<br />";
        $validate = false;
    }

    if($validate){
        $con = createConnection();
        $sql = "INSERT INTO blog (label,month,date,year,name,content) VALUES ('".$label."', '".$month."', '".$date."', '".$year."', '".$name."', '".$content."')";

        if(mysqli_query($con, $sql)){
            header("location:form_blog.php?msg=1");
        }
        else{
            header("location:form_blog.php?msg=0");
        }
    }
    else{
        $_SESSION['msg']= $msg;
        header("location:form_blog.php?msg=0");
    }
}