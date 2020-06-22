<?php
include_once("commons/head.php");
include_once("commons/header.php");
?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Temp</h1>
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
              Gagal Menyimpan Data <br>
              <?php 
              if($_SESSION['msg'] !=""){
                echo $_SESSION['msg'];
                $_SESSION['msg'] ="";

              }
              ?>
            </div>
            <?php
          }else if(isset($_GET['msg']) && $_GET['msg']==1){
            ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Berhasi Menyimpan Data
            </div>
            <?php
          }
          ?>

          <!-- general form elements -->

          <!-- Service 1 -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form temp 1</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <?php 
            $sql = "SELECT * FROM temp where id=1";
            $result = mysqli_query($con,$sql);
            $row=null;
            if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
            }

            ?>

            <form role="form" action="submit_add_temp.php" method="POST" >
              <input type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">

              <div class="card-body">
                <div class="form-group">
                  <label for="labelforLabel">Label</label>
                  <input type="text" class="form-control" id="label" placeholder="Masukkan label" name="label" value="<?php echo($row!=null)?$row['label']:""; ?>">
                </div>

                <div class="form-group">
                 <label for="labelforTotal">Total</label>
                 <input type="text" class="form-control" id="total" placeholder="Masukkan total" name="total" value="<?php echo($row!=null)?$row['total']:""; ?>">
               </div>
                </div>  
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
            </form>
      </div>

          <!-- Service 2 -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form temp 2</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <?php 
            $sql = "SELECT * FROM temp where id=2";
            $result = mysqli_query($con,$sql);
            $row=null;
            if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
            }

            ?>

            <form role="form" action="submit_add_temp.php" method="POST" >
              <input type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">

              <div class="card-body">
                <div class="form-group">
                  <label for="labelforLabel">Label</label>
                  <input type="text" class="form-control" id="label" placeholder="Masukkan label" name="label" value="<?php echo($row!=null)?$row['label']:""; ?>">
                </div>

                <div class="form-group">
                 <label for="labelforTotal">Total</label>
                 <input type="text" class="form-control" id="total" placeholder="Masukkan total" name="total" value="<?php echo($row!=null)?$row['total']:""; ?>">
               </div>
                </div>  
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
            </form>
      </div> 

  <!-- Service 3 -->
  <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form temp 3</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <?php 
            $sql = "SELECT * FROM temp where id=3";
            $result = mysqli_query($con,$sql);
            $row=null;
            if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
            }

            ?>

            <form role="form" action="submit_add_temp.php" method="POST" >
              <input type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">

              <div class="card-body">
                <div class="form-group">
                  <label for="labelforLabel">Label</label>
                  <input type="text" class="form-control" id="label" placeholder="Masukkan label" name="label" value="<?php echo($row!=null)?$row['label']:""; ?>">
                </div>

                <div class="form-group">
                 <label for="labelforTotal">Total</label>
                 <input type="text" class="form-control" id="total" placeholder="Masukkan total" name="total" value="<?php echo($row!=null)?$row['total']:""; ?>">
               </div>
                </div>  
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
            </form>
      </div>

<!-- Service 4 -->
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form temp 4</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <?php 
            $sql = "SELECT * FROM temp where id=4";
            $result = mysqli_query($con,$sql);
            $row=null;
            if(mysqli_num_rows($result)){
              $row = mysqli_fetch_assoc($result);
            }

            ?>

            <form role="form" action="submit_add_temp.php" method="POST" >
              <input type="hidden" name="id" id="" value="<?php echo $row['id'] ?>">

              <div class="card-body">
                <div class="form-group">
                  <label for="labelforLabel">Label</label>
                  <input type="text" class="form-control" id="label" placeholder="Masukkan label" name="label" value="<?php echo($row!=null)?$row['label']:""; ?>">
                </div>

                <div class="form-group">
                 <label for="labelforTotal">Total</label>
                 <input type="text" class="form-control" id="total" placeholder="Masukkan total" name="total" value="<?php echo($row!=null)?$row['total']:""; ?>">
               </div>
                </div>  
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
            </form>
      </div>

 <!-- /.card-body -->

</div>


</div>

</div>
</section>
</div>


<?php
include_once("commons/footer.php");
include_once("commons/foot.php");
?>