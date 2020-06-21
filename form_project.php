<?php
    include_once("commons/head.php");
    include_once("commons/header.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Project Form</h1>
          </div>
          <div class="col-sm-12">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
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
                    Gagal menyimpan data! <br />
                    <?php
                        if($_SESSION['msg'] != ""){
                            echo $_SESSION['msg'];
                            $_SESSION['msg'] ="";
                        }
                    ?>
                </div>
                <?php
                }
                else if(isset($_GET['msg']) && $_GET['msg'] == 1){
                    ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    Sukses menyimpan data! <br />
                </div>
                    <?php
                }
              ?>
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
          
              <form role="form" action="submit_add_project.php" method="POST" enctype="multipart/form-data">
                <div class="card-body"> 

                <div class="form-group">
                    <label for="labelTitle">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title of your project" name="title" 
                    value = "" >
                  </div>

                  <div class="form-group">
                  <label for="labelSubTitle">Sub-Title</label>
                    <input type="text" class="form-control" id="sub_title" placeholder="Sub-title of your project" name="sub_title" 
                    value = "">    
                  </div>
                  
                  <div class="form-group">
                    <label for="image">Project Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">SAVE</button>
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
    include_once("commons/foot.php");
?>
