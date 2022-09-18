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

  <title>Manufacturer Entry</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
            <h1 class="m-0 text-dark">Manufacturer Edit</h1>
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Edit</li> -->

              <li class="text-right"> <a href="manufacturer.php" class="btn btn-primary">View edited Manufacturer</a> </li>
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
          <div class="col-md-6">

              <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Manufacturer Details</h3>
              </div>
              <!-- /.card-header -->


<!-- Update Query -->
              <?php 
              if(isset($_POST['update'])){
                include_once("includes/db_config.php"); 
                 $id1 =  $_GET['id'];

              extract($_POST);
                $sql = "UPDATE manufacturer SET  m_id = '$id1',m_name='$name',m_address='$address',m_contact='$contact' WHERE m_id = '$id1'";

                 
                $db->query($sql);
                if($db->affected_rows>0){
                  echo "<div class = 'alert alert-success'>Manufacturer Update Successfully</div>";
                }

              }
      
              ?>

<!-- Select query -->
            <?php 
                    $id1 = $_GET['id'];
                    include_once("includes/db_config.php");
                    $sql = "SELECT * FROM manufacturer WHERE m_id = '$id1'";  
                    //  where ar porer id ta table ar
                    $result = $db->query($sql);
                    $row = $result->fetch_assoc();
                    //  $mid =  $row['manu_id'];  //bujhi nai

                    

                ?>



    <!-- form start to view the data what we want to edit  -->

              <form role="form" action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Manufacturer">Manufacturer Name</label>
                    <input type="text" name ="name" value="<?php echo $row['m_name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Manufacturer Name">
                  </div>

                  <div class="form-group">
                    <label for="Address">Manufacturer Address</label>
                    <input type="text" name ="address" value="<?php echo $row['m_address']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Manufacturer Address">
                  </div>

                  <div class="form-group">
                    <label for="Contact">Manufacturer Contact</label>
                    <input type="text" name ="contact" value="<?php echo $row['m_contact']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Manufacturer Contact">
                  </div>

                  

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                <!-- name ar id ta url ar ta. -->
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
</body>
</html>
