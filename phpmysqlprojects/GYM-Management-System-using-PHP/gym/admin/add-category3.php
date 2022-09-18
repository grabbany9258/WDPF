<?php 
  session_start();
  if(!isset($_SESSION['email'])){
    header("Location:logout.php");
  }
?>

<?php 
  if(isset($_POST['save'])){
      include_once("include/config.php");
    extract($_POST);
    $sql = "INSERT INTO tblcategory VALUES('$category')";
    $db->query($sql);
    if($db->affected_rows>0){
      echo "<div class='alert alert-success'>category Added successfully</div>";
    }
  }
?>






//Delete Record Data

<!-- if(isset($_REQUEST['del']))
{
$uid=intval($_GET['del']);
$sql = "delete from tblcategory WHERE  id=:id";
$query = $dbh->prepare($sql);
$query-> bindParam(':id',$uid, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Record Delete successfully');</script>";
echo "<script>window.location.href='add-category.php'</script>";
} -->
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a">
   <title>Admin | Categories</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
   <?php include 'include/header.php'; ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include 'include/sidebar.php'; ?>
    <main class="app-content">
     <h3>Categories</h3>
     <hr />
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
          

         

           
            <div class="tile-body">
              <form  method="post">
                <div class="form-group col-md-12">
                  <label class="control-label">Add Category</label>
                  <input class="form-control" name="category" id="category" type="text" placeholder="Enter Add Category">
                </div>
                <div class="form-group col-md-4 align-self-end">
                
                  <input type="submit" name="submit" id="submit" class="btn btn-primary" value=" Submit">
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>

                <?php
                  include_once("include/config.php");
                  $sql = "SELECT * FROM  tblcategory";
                  $result = $db->query($sql);
                  ?>

<<<<<<< HEAD
                  <?php while($row = $result->fetch_assoc()){ ?>

              <tbody>    
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['category_name'] ?></td>
                  <td><?php echo $row['status'] ?></td>

                  
                  <td>
                    <a href="category_edit.php?id=<?php echo $row['id'] ?>"><i class ="fa fa-edit"></i></a>|

                    <a onclick="return confirm('Are you sure want to delete?')" href="category_delete.php?id=<?php echo $row['id'] ?>"><i class ="fa fa-trash"></i></a> 
                  </td>
                  
                </tr>

             <?php } ?>
                
          
=======
                <tbody>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->category_name);?></td>
                    <td>
                      <!-- <a href="add-category.php?cid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary" type="button">Edit</button></a>  -->
                      <!-- <a href="add-category.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger" type="button">Delete</button></a></td> -->
                  </tr>
                    <?php  $cnt=$cnt+1; } } ?>
>>>>>>> 58945a629c6b0e7170b24b6f9a17da9a484ab7ea
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
     <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  
  </body>
</html>
<?php //} ?>