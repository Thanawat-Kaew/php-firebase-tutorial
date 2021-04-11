<?php 
	session_start();
	include('includes/header.php');
?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						<h4>Firebase and PHP CRUD - Add or Insert Data in Firebase Database
							<a href="index.php" class="btn btn-danger float-end">BACK</a>
						</h4>
					</div>
					<div class="card-body">
						<div class="row justify-content-center">
							<div class="col-md-6">
								<?php 
								if(isset($_SESSION['status'])){
									echo "<h4>".$_SESSION['status']."</h4>";
									unset($_SESSION['status']);
								}
								?>

								<form action="code.php" method="POST">
									<div class="form-group mt-3">
										<label for="">First Name</label>
										<input type="text" name="firstname" class="form-control">
									</div>

									<div class="form-group mt-3">
										<label for="">Last Name</label>
										<input type="text" name="lastname" class="form-control">
									</div>

									<div class="form-group mt-3">
										<label for="">Email ID</label>
										<input type="text" name="email" class="form-control">
									</div>

									<div class="form-group mt-3">
										<label for="">Phone No.</label>
										<input type="text" name="phone" class="form-control">
									</div>

									<div class="form-group mt-3">
										<button type="submit" name="save_data" class="btn btn-primary">Save</button>
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

