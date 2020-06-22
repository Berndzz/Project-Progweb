<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
}

if($_POST){
    $label = trim($_POST['label']);
    $total = trim($_POST['total']);

    $validate = true;
    $msg="";

    if($label== ""){
        $msg .= "Label tidak boleh kosong.<br />";
        $validate = false;
    }

    if($total== ""){
        $msg .= "Total tidak boleh kosong.<br />";
        $validate = false;
    }

    if($validate){
        $id= $_POST['id'];
        $sql = "UPDATE temp SET 
        label='".$label."',
        total='".$total."' WHERE id = '".$id."'";

        if(mysqli_query($con, $sql)){
            header("location:form_temp.php?msg=1");
        }
        else{
            header("location:form_temp.php?msg=0");
        }
    }
    else{
        $_SESSION['msg']= $msg;
        header("location:form_temp.php?msg=0");
    }
}