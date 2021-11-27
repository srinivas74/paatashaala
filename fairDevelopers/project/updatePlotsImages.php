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
					aria-hidden="true"></span> Update Images</li>
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
						<h2 class="mb-4">Update Plot Images</h2>
						<form method="post" action="updatePlotImageProcess.php" class="appointment" enctype="multipart/form-data">
							<div class="row">
							<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="plotNameI" name="plotNameI"
											placeholder="Plot Name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="areaI" name="areaI"
											placeholder="Build Up Area" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="priceI"
											name="priceI" placeholder="Average Price For Square Feet" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="statusI"
											name="statusI" placeholder="Possession Status" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="localityI"
											name="localityI" placeholder="Locality" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="mapI" name="mapI"
											placeholder="Map" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="cofigurationI"
											name="configurationI" placeholder="Configuration" required>
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="facingI"
											name="facingI" placeholder="Facing" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="transactionI"
											name="transactionI" placeholder="Transaction" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">

										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="imageI"
												name="imageI" required>
												 <label class="custom-file-label" for="imageI">Choose file</label>
										</div>
									</div>
									<div class="col-md-6 " >
										<div class="form-group">
											<input type="submit" value="Update" id="submit_plot_images"
												name="submit_plot_images" class="btn btn-primary py-2 px-8">
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


<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

