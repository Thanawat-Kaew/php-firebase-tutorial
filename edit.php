<?php 
	session_start();
	include('includes/header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						<h4>Firebase and PHP CRUD - Edit and Update Data in Firebase Database
							<a href="index.php" class="btn btn-danger float-end">BACK</a>
						</h4>
					</div>
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-md-6">
								<?php 
								include('dbcon.php');
								$ref_table = "contacts";
								$id = $_GET['id'];

								$editdata = $database->getReference($ref_table)->getChild($id)->getValue();
								?>
								<form action="code.php" method="POST">
									<input type="hidden" name="id" value="<?php echo $id;?>">
									<div class="form-group mt-3">
										<label for="">First Name</label>
										<input type="text" name="firstname" class="form-control" value="<?php echo $editdata['firstname'];?>">
									</div>

									<div class="form-group mt-3">
										<label for="">Last Name</label>
										<input type="text" name="lastname" class="form-control" value="<?php echo $editdata['lastname'];?>"> 
									</div>

									<div class="form-group mt-3">
										<label for="">Email ID</label>
										<input type="text" name="email" class="form-control" value="<?php echo $editdata['email'];?>">
									</div>

									<div class="form-group mt-3">
										<label for="">Phone No.</label>
										<input type="text" name="phone" class="form-control" value="<?php echo $editdata['phone'];?>">
									</div>

									<div class="form-group mt-3">
										<button type="submit" name="update_data" class="btn btn-primary">Update</button>
									</div>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include('includes/footer.php');
?>

