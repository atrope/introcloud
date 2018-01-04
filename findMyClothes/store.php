<?php
  $title = "Find My Clothes - Store";
  $titlestack = "Hugo Boss - Rotschild Blvd";
  include "header.php";
  include "topnavstack.php";
  ?>
  <div class="container-fluid p-0">
    <img src="img/hugoboss.jpg" class="img-fluid" alt="Hugo Boss Logo">
  </div>
<div class="container">
<div class="row mt-3">
<div class="col text-left">
<form class="rating" action="#" method="post">

  <i class="fa fa-star" aria-hidden="true" data-rate="1"></i>
  <i class="fa fa-star" aria-hidden="true" data-rate="2"></i>
  <i class="fa fa-star" aria-hidden="true" data-rate="3"></i>
  <i class="fa fa-star-o" aria-hidden="true" data-rate="4"></i>
  <i class="fa fa-star-o" aria-hidden="true" data-rate="5"></i>
</form>
</div>
<div class="col text-right">
<a href="#" class="map">
  <i class="fa fa-map-o" aria-hidden="true"></i>
</a>
</div>
</div>
<div class="generic-cell mt-3">
  <a href="product.php"><div class="row">
    <div class="col-5 col-md-3"> <img src="img/tux.jpg" class="p-3 img-fluid" alt=""> </div>
    <div class="col-7 col-md-9 pl-0">

    <div class="col-12 p-0"><span class="d-block w-100 pl-0 pt-2 pr-1"><i class="fa fa-map-marker" aria-hidden="true"></i>  <small class="text-muted"> Rotschild Blvd.</small></span></div>

    <div class="col-12 p-0">
      <span class="d-block w-100 pl-0 pt-2 pr-1 hProductTitle">Suit 100% Cotton</span>
    </div>
    <span class="d-block w-100 text-right mt-4 pb-2 pr-2 priceList"> ₪ 1430.00</span>

  </div>
</div></a>
</div>

<div class="row mt-3">
<div class="col">
<button type="button" class="btn btn-block btn-info bg-lightBlue btn-buy"><i class="fa fa-shopping-cart px-3" aria-hidden="true"></i>Buy it</button>
</div>
</div>


</div>
<?php
include "footer.php";
?>
