<?php
    include_once("commons/head.php");
    include_once("commons/header.php");
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Of Blog</h1>
          </div>
          <div class="col-sm-6">
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
          
              <form role="form" action="submit_add_blog.php" method="POST">
                <div class="card-body"> 

                <div class="form-group">
                    <label for="labelLabel">Label</label>
                    <input type="text" class="form-control" id="label" placeholder="Enter label blog" name="label" 
                    value = "" >
                  </div>

                  <div class="form-group">
                  <label for="labelMonth">Month</label>
                    <input type="text" class="form-control" id="month" placeholder="Enter month " name="month" 
                    value = "">    
                  </div>
                  
                  <div class="form-group">
                  <label for="labelDate">Date</label>
                    <input type="number" class="form-control" id="date" placeholder="Enter date " name="date" 
                    value = "" min = "1" max="31">    
                  </div>

                  <div class="form-group">
                  <label for="labelYear">Year</label>
                  <input type="number" class="form-control" id="year" placeholder="Enter year" name="year" 
                    value = ""> 
                  </div>

                  <div class="form-group">
                  <label for="labelName">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" 
                    value = "">    
                  </div>
<!-- /.card 
                  <div class="form-group">
                  <label for="labelPicture">Picture</label>
                  <input type="text" class="form-control" id="picture" placeholder="Enter picture" name="picture" 
                    value = ""> 
                  </div>
-->
                  <div class="form-group">
                  <label for="labelContent">Content</label>
                  <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" 
                    value = ""> 
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
<?php
    include_once("commons/footer.php");
    include_once("commons/foot.php");
?>