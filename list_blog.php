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
            <h1>List Of Blog</h1>
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
          <div class="col-md-12">

            <?php
                if(isset($_GET['msg']) && $_GET['msg'] == 0){
            ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    Gagal menghapus data! <br />
                </div>
            <?php
                }
                else if(isset($_GET['msg']) && $_GET['msg'] == 1){
                    ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    Sukses menghapus data! <br />
                </div>
                    <?php
                }
            ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php
                    $con = createConnection();
                    $sql = "SELECT * FROM blog";
                    $result = mysqli_query($con, $sql);
                  ?>

                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                    <th style="width: 10px">Id</th>
                    <th>Label</th>
                    <th>Month</th>
                    <th>Date</th>
                    <th>Year</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                      <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['label'];?></td>
                      <td><?php echo $row['month'];?></td>
                      <td><?php echo $row['date'];?></td>
                      <td><?php echo $row['year'];?></td>
                      <td><?php echo $row['name'];?></td>
                      
                      <?php
                      echo "<td><img src='images/blog/".$row['image']."'style='width:200px; height:200px;'></td>";
                      ?>
                        
                      <td><?php echo $row['content'];?></td>
                      <td>
                      <form action="submit_delete_blog.php" method="POST">
                        <input name="id" type="hidden" value="<?php echo $row['id']; ?>">  
                      <button type="btn btn-block bg-gradient-danger" class="btn btn-block bg-gradient-danger">Hapus</button>
                      </form>
                      </td>  
                    </tr>
                    <?php
                            }

                        }
                    ?>
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php
include_once("commons/footer.php");
include_once("commons/foot.php");
?>