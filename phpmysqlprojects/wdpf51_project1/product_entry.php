<?php
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location:index.php");
  }
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Product Entry</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include("includes/top_bar.php")?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("includes/left_sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Product Entry</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Entry</li> -->
              <li class="text-right"> <a href="products.php" class="btn btn-primary">View All Product</a> </li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       
        <!-- /.row -->

       
        <!-- /.row -->

        <!-- Main row -->
        <div class="row justify-content-center">
          <!-- Left col -->
          <div class="col-md-8">

              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Product Details</h3>
              </div>
              <!-- /.card-header -->

              <?php 
              if(isset($_POST['submit'])){
                include_once("includes/db_config.php"); 
              extract($_POST);
                $sql = "INSERT INTO products VALUES(NULL, '$name', '$details', '$price', '$thumbnail', '$manufacturer')";
                $db->query($sql);
                if($db->affected_rows>0){
                  echo "<div class = 'alert alert-success'>Product Added Successfully</div>";
                }

              }
      
              ?>
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Product">Product Name</label>
                    <input type="name" name ="name" class="form-control" id="exampleInputEmail1" placeholder="Enter product Name">
                  </div>
                  <div class="form-group">
                    <label for="Product details">Product Details</label>
                    <textarea name="details" class="form-control" id="" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                    <label for="Price">Product Price</label>
                    <input type="text" name ="price" class="form-control" id="exampleInputEmail1" placeholder="Enter product Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Product Thumnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputFile">Product Thumnail</label> -->
                    <div class="form-group">
                        <label>Manufacturer</label>
                        <?php 
                        include_once("includes/db_config.php");
                        $sql = "SELECT * FROM manufacturer";
                        $result = $db->query($sql);
                       
                        ?>
                        <select name="manufacturer" class="form-control">
                          <option  value=""disabled selected>Select One</option>
                        <?php
                        while($row = $result->fetch_assoc()){ ?>

                      
                        
                          <option value="<?php echo $row['m_id']; ?>"><?php echo $row['m_name']; ?></option>

                          <?php  } ?>
                          
                        </select>
                      </div>

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
          </div>
          <!-- /.col -->

          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php include("includes/footer.php") ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
              
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('textarea').summernote()
  })
</script>

</body>
</html>
