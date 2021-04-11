<?php 
	session_start();
	include('includes/header.php');
?>
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<div class="card my-3">
					<div class="card-body">
						<h5>
							Total Records:
							<?php 
							include('dbcon.php');
							$ref_table = "contacts";
							$totalnum = $database->getReference($ref_table)->getSnapshot()->numChildren();
							echo $totalnum;
							?>
						</h5>
					</div>
				</div>
			</div>


			<div class="col-md-12">
				<?php 
				if(isset($_SESSION['status'])){
					echo "<h4>".$_SESSION['status']."</h4>";
					unset($_SESSION['status']);
				}
				?>
				<div class="card mt-4">
					<div class="card-header">
						<h4>Firebase and PHP CRUD - Fetch
							<a href="add-contacts.php" class="btn btn-primary float-end">ADD</a>
						</h4>
					</div>
					<div class="card-body">

						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Sl.No</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Edit</th>
									<th>Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include('dbcon.php');

									$ref_table = "contacts";
									$fetchdata = $database->getReference($ref_table)->getValue();
									$i = 1;
									if($fetchdata > 0){
										foreach ($fetchdata as $key => $row) {
											?>
											<tr>
												<td><?php echo $i++;?></td>
												<td><?php echo $row['firstname'];?></td>
												<td><?php echo $row['lastname'];?></td>
												<td><?php echo $row['email'];?></td>
												<td><?php echo $row['phone'];?></td>
												<td>
													<a href="edit.php?id=<?php echo $key;?>" class="btn btn-success">Edit</a>
												</td>
												<td>
													<form action="code.php" method="POST">
														<input type="hidden" name="id_key" value="<?php echo $key;?>">
														<button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
													</form>
												</td>
											</tr>
											<?php
										}

									}else{
										?>
										<tr>
											<td colspan="6">No Record Found</td>
										</tr>
										<?php
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	include('includes/footer.php');
?>

