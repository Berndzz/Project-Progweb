<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
  }

if($_POST){
    //Isian
    $title= trim($_POST['title']);
    $sub_title = trim($_POST['sub_title']);

    //Upload Gambar
    $nama_file = $_FILES['image']['name'];
    $image = $_FILES['image']['type'];
    $tmp_file = $_FILES['image']['tmp_name'];
    $path = "images/".$nama_file;

    $validate = true;

    $msg = "";

    //Pengecekan From Kosong
    if($title == ""){
        $msg .="Title tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }

    if($sub_title == ""){
        $msg .="Sub-title tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }

    //Pengecekan Upload Image
    if($image != "jpeg" || $image != "png"){
        $msg .="Format Image harus PNG/JPEG/JPG. <br \>";
        $validate = false;
    }

    if($validate){
        $sql = "INSERT INTO gallery_project (title,sub_title) VALUES ('".$title."', '".$sub_title."')";
        if(mysqli_query($con, $sql)){
            if(move_uploaded_file($tmp_file, $path)){
                $sql = "INSERT INTO gallery_project(image) VALUES('".$image."')";
                mysqli_query($con, $sql);
                header("location:form_project.php?msg=1");
            }else{
                $msg .= "Maaf, Image gagal untuk diupload. <br \>";
                header("location:form_project.php?msg=0");
            }
            
        }else{
            header("location:form_project.php?msg=0");
        }
    }else{
        $_SESSION['msg'] = $msg;
        header("location:form_project.php?msg=0");
    }
}
?>