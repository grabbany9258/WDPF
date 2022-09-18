<?php include('db_connect.php');?>

<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Member List</b>
						<span class="">

							<button class="btn btn-primary btn-block btn-sm col-sm-2 float-right" type="button" id="new_member">
					<i class="fa fa-plus"></i> New</button>
				</span>
					</div>
					<div class="card-body">
						
						<table class="table table-bordered table-condensed table-hover">
							<colgroup>
								<col width="5%">
								<col width="15%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
								<col width="20%">
							</colgroup>
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Member ID</th>
									<th class="">Name</th>
									<th class="">Email</th>
									<th class="">Contact</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php 
                                if(isset($_POST['save'])){
                                    include_once("includes/db_config.php");
                                    extract($_POST);
                                    $sql = "INSERT INTO products VALUES(NULL, '$product', '$details', '$price', '$thumb', '$manufacturer')";
                                    $db->query($sql);
                                    if($db->affected_rows>0){
                                    echo "<div class='alert alert-success'>Product Added successfully</div>";
                                    }
                                }
                                ?>




                    <div class="container-fluid">
                        <form action="" id="">
                            
                            <div class="row form-group">
                                <div class="col-md-4">
                                            <label class="control-label">ID No.</label>
                                            <input type="text" name="member_id" class="form-control" >
                                            <small><i>Leave this blank if you want to a auto generate ID no.</i></small>
                                        </div>
                            </div>
                            <div class="row form-group">

                                <div class="col-md-4">
                                    <label class="control-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control" value="<?php echo isset($firstname) ? $firstname:'' ?>" required>
                                </div>

                                <div class="col-md-4">
                                    <label class="control-label">Middle Name</label>
                                    <input type="text" name="middlename" class="form-control" value="<?php echo isset($middlename) ? $middlename:'' ?>">
                                </div>

                                <div class="col-md-4">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="<?php echo isset($lastname) ? $lastname:'' ?>" required>
                                </div>
                                
                                
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="control-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo isset($email) ? $email:'' ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Contact #</label>
                                    <input type="text" name="contact" class="form-control" value="<?php echo isset($contact) ? $contact:'' ?>" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Gender</label>
                                    <select name="gender" required="" class="custom-select" id="">
                                        <option <?php echo isset($gender) && $gender == 'Male' ? 'selected' : '' ?>>Male</option>
                                        <option <?php echo isset($gender) && $gender == 'Female' ? 'selected' : '' ?>>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Address</label>
                                    <textarea name="address" class="form-control"><?php echo isset($address) ? $address : '' ?></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="control-label">Plan</label>
                                    <select name="plan_id" required="required" class="custom-select select2" id="">
                                        <option value="" disabled selected>Select plan</option>
                                        <?php
                                            $qry = $conn->query("SELECT * FROM plans order by plan asc");
                                            while($row= $qry->fetch_assoc()):
                                        ?>
                                        <option value="<?php echo $row['id'] ?>" <?php echo isset($plan_id) && $plan_id == $row['id'] ? 'selected' : '' ?>><?php echo ucwords($row['plan']) ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Package</label>
                                    <select name="package_id" required="required" class="custom-select select2" id="">
                                        <option value="" disabled selected>Select package</option>
                                        <?php
                                            $qry = $conn->query("SELECT * FROM packages order by package asc");
                                            while($row= $qry->fetch_assoc()):
                                        ?>
                                        <option value="<?php echo $row['id'] ?>" <?php echo isset($package_id) && $package_id == $row['id'] ? 'selected' : '' ?>><?php echo ucwords($row['package']) ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Trainer</label>
                                    <select name="trainer_id" class="custom-select select2" id="">
                                        <option value="" disabled selected>Select Trainer</option>
                                        <?php
                                            $qry = $conn->query("SELECT * FROM trainers order by name asc");
                                            while($row= $qry->fetch_assoc()):
                                        ?>
                                        <option value="<?php echo $row['id'] ?>" <?php echo isset($trainer_id) && $trainer_id == $row['id'] ? 'selected' : '' ?>><?php echo ucwords($row['name']) ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>





								<!-- <tr>
									
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <p><b><?php echo $row['member_id'] ?></b></p>
										 
									</td>
									<td class="">
										 <p><b><?php echo ucwords($row['name']) ?></b></p>
										 
									</td>
									<td class="">
										 <p><b><?php echo $row['email'] ?></b></p>
									</td>
									<td class="">
										 <p><b><?php echo $row['contact'] ?></b></p>
										 
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary view_member" type="button" data-id="<?php echo $row['id'] ?>" >View</button>
										<button class="btn btn-sm btn-outline-primary edit_member" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_member" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr> -->
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#new_member').click(function(){
		uni_modal("<i class='fa fa-plus'></i> New Member","manage_member.php",'mid-large')
	})
	$('.view_member').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Member Details","view_member.php?id="+$(this).attr('data-id'),'large')
		
	})
	$('.edit_member').click(function(){
		uni_modal("<i class='fa fa-edit'></i> Manage Member Details","manage_member.php?id="+$(this).attr('data-id'),'mid-large')
		
	})
	$('.delete_member').click(function(){
		_conf("Are you sure to delete this topic?","delete_member",[$(this).attr('data-id')],'mid-large')
	})

	function delete_member($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_member',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>