<?php
include("connection.php");
include("session.php");
include ('admin_header.php');
?>

	<section class="w3l-breadcrumb">
		<div class="container">
			<ul class="breadcrumbs-custom-path">
				<li><a href="admin.php">Home</a></li>
				<li class="active"><span class="fa fa-angle-right mx-2"
					aria-hidden="true"></span> Update Plots</li>
			</ul>
		</div>
	</section>
	<section class="locations-1 mt-5" id="locations" >


		<div class="container">
			<div
				class="row no-gutters slider-text  align-items-center justify-content-center"
				data-scrollax-parent="true">
				<div class="row d-md-flex justify-content-center">
					<div class="col-md-12 col-lg-6 half   pl-lg-5 ftco-animate">
						<h2 class="mb-4">Update Plot Details</h2>
						<form method="post" action="updatePlotsProcess.php" class="appointment" enctype="multipart/form-data">
							<div class="row">
							<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="plotName" name="plotName"
											placeholder="Plot Name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="area" name="area"
											placeholder="Build Up Area" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="price"
											name="price" placeholder="Average Price For Square Feet" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="status"
											name="status" placeholder="Possession Status" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="locality"
											name="locality" placeholder="Locality" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="map" name="map"
											placeholder="Map" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="cofiguration"
											name="configuration" placeholder="Configuration" required>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="facing"
											name="facing" placeholder="Facing" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="transaction"
											name="transaction" placeholder="Transaction" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-6 " >
										<div class="form-group">
											<input type="submit" value="Update" id="submit_bookslot"
												name="submit_bookslot" class="btn btn-primary py-2 px-8">
										</div>
									</div>
								</div>
						
						</form>
					</div>
				</div>
			</div>
	
	</section>
<?php
include ("footer.php");

?>

	

<?php
include ("javascriptScripts.php");

?>
