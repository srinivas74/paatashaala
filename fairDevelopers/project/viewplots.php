<?php
include("connection.php");
include("session.php");
include('pagination.php');
include ('admin_header.php');
?>

<section class="w3l-breadcrumb">
		<div class="container">
			<ul class="breadcrumbs-custom-path">
				<li><a href="admin.php">Home</a></li>
				<li class="active"><span class="fa fa-angle-right mx-2"
					aria-hidden="true"></span> View Plots</li>
			</ul>
		</div>
	</section>
	<section class="locations-1" id="locations">
		<div class="container py-lg-5 py-md-4 py-2">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Build up area</th>
							<th scope="col">Average price for square feet</th>
							<th scope="col">Possession Status</th>
							<th scope="col">Locality</th>
							<th scope="col">Configuration</th>
							<th scope="col">Facing</th>
							<th scope="col">Transaction</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
    <?php
    $count = 1;
    while ($row = mysqli_fetch_array($nquery)) {

        echo '<tr>
        <th scope="row">' . $count . '</th>
        <td>' . $row["plot_name"] . '</td>
        <td>' . $row["area"] . '</td>
      <td>' . $row["price"] . '</td>
        <td>' . $row["status"] . '</td>
	<td>' . $row["locality"] . '</td>
        <td>' . $row["configuration"] . '</td>
<td>' . $row["facing"] . '</td>
        <td>' . $row["transaction"] . '</td>





<td>
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
  Delete
</button>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure want to delete ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-success"><a style="color:white" href="deleteplot.php?checkid='.$row["id"].'">Yes</a></button>
      </div>
    </div>
  </div>
</div>
</td>








        </tr>
        <tr>';
        $count ++;
    }
    ?> 
    </tbody>
				</table>
			</div>
		</div>





		<!-- pagination -->
		<div class="pagination-wrapper mb-3 pt-lg-3 text-center">
			<ul class="page-pagination">
                   <?php echo $paginationCtrls; ?>
                </ul>
		</div>
		<!-- //pagination -->

	</section>
	<?php
include ("footer.php");
?>


<?php
include ("javascriptScripts.php");

?>
