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

    if($validate){
        $sql = "INSERT INTO gallery_project (title,sub_title) VALUES ('".$title."', '".$sub_title."')";
        if(mysqli_query($con, $sql)){  
        //Pengecekan Upload Image
        if(strtolower(pathinfo($image, PATHINFO_EXTENSION)) == "image/jpeg" || strtolower(pathinfo($image, PATHINFO_EXTENSION)) == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
            // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
              // Proses upload
              if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
                // Jika gambar berhasil diupload, Lakukan :  
                // Proses simpan ke Database
                $sql = "INSERT INTO gallery_project(image) VALUES('".$image."')";
                if(mysqli_query($con, $sql)){ // Cek jika proses simpan ke database sukses atau tidak
                  // Jika Sukses, Lakukan :
                  header("location:form_project.php?msg=1"); // Redirectke halaman index.php
                }else{
                  // Jika Gagal, Lakukan :
                  header("location:form_project.php?msg=0");
                  $msg .="Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. <br \>";
                  $validate = false;
                }
              }else{
                // Jika gambar gagal diupload, Lakukan :
                header("location:form_project.php?msg=0");
                $msg .="Image gagal untuk diupload. <br \>";
                $validate = false;
              }
        }else{
            // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
            header("location:form_project.php?msg=0");
            $msg .="Tipe image yang diupload harus berformat JPG / JPEG / PNG. <br \>";
            $validate = false;
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
