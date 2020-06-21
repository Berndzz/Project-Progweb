<?php
    include_once("commons/head.php");
?>

<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

<?php
    include_once("commons/header.php");

?>

<div class="content-wrapper">    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          <?php
                if(isset($_GET['msg']) && $_GET['msg'] == 0){
                    ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                            Data gagal disimpan.<br \>
                            <?php
                                if($_SESSION['msg'] != ""){
                                    echo $_SESSION['msg'];
                                    $_SESSION['msg'] = "";
                                }
                            ?>
                        </div>
                    <?php
                }else if(isset($_GET['msg']) && $_GET['msg'] == 1){
                    ?>
                        <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        Data berhasil disimpan.
                        </div>
                    <?php
                }
          ?>

          <br \>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile (About Me)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php
                $com = $_SESSION['user']['id'];
                $sql = "SELECT * FROM biodata WHERE name_info LIKE '".$com."'";
                $result = mysqli_query($con, $sql);
                $row = null;
                if(mysqli_num_rows($result)){
                  $row = mysqli_fetch_assoc($result);
                }
              ?>

              <form role="form" action="submit_biodata.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="AboutMe">About Me</label>
                    <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="about_me">
                          <?php echo ($row!=null)?$row['about_me']:""; ?>
                        </textarea>
                  </div>

                  <div class="form-group">
                    <label for="NameInfo">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name_info"
                    value="<?php echo ($row!=null)?$row['name_info']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="DateOfBirth">Date of Birth</label>
                    <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy" name="date_of_birth"
                    value="<?php echo ($row!=null)?$row['date_of_birth']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="address_info">
                          <?php echo ($row!=null)?$row['address_info']:""; ?>
                        </textarea>
                  </div>

                  <div class="form-group">
                    <label for="ZipCode">Zip Code</label>
                    <input type="number" class="form-control" id="zip" placeholder="ex. 58271" name="zip_code"
                    value="<?php echo ($row!=null)?$row['zip_code']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="Email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="ex. mail@mail.com" name="email_info"
                    value="<?php echo ($row!=null)?$row['email_info']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" id="phone" placeholder="ex. 08123456789" name="phone"
                    value="<?php echo ($row!=null)?$row['phone']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="ProjectComplete">Project Complete</label>
                    <input type="number" class="form-control" id="project" placeholder="ex. 130" name="project_complete"
                    value="<?php echo ($row!=null)?$row['project_complete']:""; ?>">
                  </div>

                  <div class="form-group">
                    <label for="cv">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="cv" name="cv">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
    include_once("commons/footer.php");
?>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<?php
    include_once("commons/foot.php");
?>