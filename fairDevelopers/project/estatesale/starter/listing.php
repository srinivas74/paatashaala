
<?php
include ("connection.php");
include ('admin_header.php');
include('paginationImages.php');
?>

  <!--/header-->
  <style type="text/css">
    .w3l-index3{
  padding-top:40px;
}

.listing-img{
  padding-top:20px;
  padding-bottom:20px;
}
  </style>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
 

<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span>Listing</li>
        </ul>
    </div>
</section>
<!--/header-->
<section class="locations-1" id="locations">
    <div class="locations">
        <div class="container">
            <div class="row pt-md-5 pt-4">






<?php
    if (function_exists('mysqli_fetch_array')) {
        while ($row = mysqli_fetch_array($nquery)) {
             $arr = array(
                "id" => $row["id"],
                "image" => '../../assets/plotimages/' . $row["image"],
                "facing" => str_replace(" ", "*#*", $row["facing"]),
                "map" => str_replace(" ", "*#*", $row["map"]),
                "configuration" => str_replace(" ", "**", $row["configuration"]),
                "locality" => str_replace(" ", "*#*", $row["locality"]),
                "area" => str_replace(" ", "*#*", $row["area"]),
                "transaction" => str_replace(" ", "*#*", $row["transaction"]),
                "status" => str_replace(" ", "*#*", $row["status"]),
                "plotname" => str_replace(" ", "*#*", $row["plot_name"]),
                "price" => str_replace(" ", "*#*", $row["price"])
            );

            $jsonRow = json_encode($arr);
            echo ' <div class="col-lg-4 col-md-6 listing-img">
<div data-toggle="modal" data-target="#basicExampleModal"  data-row=' . $jsonRow . '>
                        <div class="box16">' . ' <img src="../../assets/plotimages/' . $row["image"] . '" alt="" class="img-fluid">' . '
                            <div class="box-content">
                                <h3 class="title">RS.' . $row["price"] . '</h3>
                                 <span class="post">' . $row["plot_name"] .'
                            </div><!-- box-content  -->
                        </div><!-- box16 -->
                 
                </div><!-- modal  -->
                   

</div><!-- col-lg-4 col-md-6 listing-img  -->



 <div
      class="modal fade"
      id="basicExampleModal"
      tabindex="-1"
      aria-labelledby="exampleModal1Label"
      aria-hidden="true"
    >
     <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
<h4 class="plot-name">' . $row["plot_name"] . '</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div><!-- model header -->
<div class="modal-body">
<div class="row">


              <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12">







      <img class="plotimage d-block w-100" src="../../assets/plotimages/' . $row["image"] . '" >








              </div>

 <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 ">  

<div class="grey-bg container-fluid">
    <div class="row">


      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Build up area</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="area">' . $row["area"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Average price for square feet</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="price">' . $row["price"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Possession status</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="status">' . $row["status"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Locality</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="locality">' . $row["locality"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Map</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="map">' . $row["map"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Configuration</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="configuration">' . $row["configuration"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Facing</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="facing">' . $row["facing"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="col-xl-12 col-sm-12 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <span>Transaction</span>
                </div>
                <div class="media-body text-right">
                  <h6 class="transaction">' . $row["transaction"] . '</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


 




      </div>
  </div>




</div>
</div><!-- row-->

        </div><!-- model body -->
      </div><!-- model content -->
    </div><!-- model dialog -->

    </div><!-- model fade -->



';
        }
    } else {
        include ('mysqlversionlisting.php');
    }
    ?>
    





            </div>
        </div>
    </div>


  <!-- pagination -->
  <div class="pagination-wrapper pb-4 pt-lg-3 text-center">
    <ul class="page-pagination">
                   <?php echo $paginationCtrls; ?>
                </ul>
  </div>
</section>
<!-- /bottom-grids-->
<?php
include ("footer.php");

?>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>


<script>
$('#basicExampleModal').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget)
   var plot= button.data('row')
  var modal = $(this)
  modal.find('.plot-name').html((plot.plotname).replace("*#*", " "))
  modal.find('.area').html((plot.area).replace("*#*", " "))
  modal.find('.price').html((plot.price).replace("*#*", " "))
  modal.find('.status').html((plot.status).replace("*#*", " "))
  modal.find('.locality').html((plot.locality).replace("*#*", " "))
  modal.find('.map').html((plot.map).replace("*#*", " "))
  modal.find('.configuration').html((plot.configuration).replace("*#*", " "))
  modal.find('.facing').html((plot.facing).replace("*#*", " "))
  modal.find('.transaction').html((plot.transaction).replace("*#*", " "))
  modal.find('.plotimage').attr("src",plot.image)
  modal.find('.deleteImage').attr("href","deleteplotImages.php?checkid="+plot.id+"&filename="+plot.image)
})

</script>
