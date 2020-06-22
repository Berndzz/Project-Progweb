<?php 
session_start();
include_once('connection/connection.php');

if(!isset($_SESSION['user']) || $_SESSION['user']==null){
    header("location:login.php");
  }

if($_POST){
    $about_me = trim($_POST['about_me']);
    $name_info = trim($_POST['name_info']);
    $date_of_birth = trim($_POST['date_of_birth']);
    $address_info = trim($_POST['address_info']);
    $zip_code = trim($_POST['zip_code']);
    $email_info = trim($_POST['email_info']);
    $phone = trim($_POST['phone']);
    $project_complete = trim($_POST['project_complete']);

    $validate = true;

    $msg = "";
    //Pengecekan From Kosong
    if($about_me == ""){
        $msg .="About me tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }

    if($name_info == ""){
        $msg .="Nama tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }

    if($address_info == ""){
        $msg .="Address tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }
    
    if (!ctype_alnum($name_info)) {
        $msg .="Nama hanya boleh alphanumeric. <br \>";
        $validate = false;
    }  

    if($zip_code == ""){
        $msg .="Zip code tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }
    
    if (!is_numeric($zip_code)) {
        $msg .="Format zip code hanya bisa angka. <br \>";
        $validate = false;
    }

    if($email_info == ""){
        $msg .="E-mail tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }
    
    if (!filter_var($email_info, FILTER_VALIDATE_EMAIL)) {
        $msg .="Format e-mail harus sesuai. <br \>";
        $validate = false;
    }

    if($phone == ""){
        $msg .="Nomor telepon tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }
    
    if (!is_numeric($phone)) {
        $msg .="Format nomor telepon hanya bisa angka. <br \>";
        $validate = false;
    }  

    if($project_complete == ""){
        $msg .="Project Complete tidak boleh tidak boleh kosong. <br \>";
        $validate = false;
    }

    //Pengecekan CV
    if(strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION)) != "pdf"){
        $msg .="Format file CV harus PDF. <br \>";
        $validate = false;
    }

    if($validate){
        $com = $_SESSION['user']['id'];
        $sql = "UPDATE biodata SET 
        about_me='".$about_me."',
        name_info='".$name_info."',
        date_of_birth='".$date_of_birth."',
        address_info='".$address_info."',
        zip_code='".$zip_code."',
        email_info='".$email_info."',
        phone='".$phone."',
        project_complete='".$project_complete."'
        WHERE name_info ='".$com."'";
        if(mysqli_query($con, $sql)){
            if(move_uploaded_file($_FILES['cv']['tmp_name'], "uploads/".$_FILES['cv']['name'])){
                $sql = "UPDATE biodata SET cv_file='uploads/".$_FILES['cv']['name']."' WHERE name_info ='".$com."'";
                mysqli_query($con, $sql);
                header("location:form_biodata.php?msg=1");
            }else{
                $msg .="Gagal mengupload file CV. <br \>";
                header("location:form_biodata.php?msg=0");
            }
            
        }else{
            header("location:form_biodata.php?msg=0");
        }
    }else{
        $_SESSION['msg'] = $msg;
        header("location:form_biodata.php?msg=0");
    }
}
?>
