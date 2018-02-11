<?php
include "helper.php";
$sql = "select s.id,p.price,s.title,pd.title as product,s.address from 214_productsStores p INNER JOIN 214_stores s on p.storeId = s.id INNER JOIN 214_products pd on p.productsId = pd.id WHERE p.productsId = :pid and p.storeId=:id";
$id = isset($_GET["id"]) && is_numeric($_GET["id"])?$_GET["id"]:0;
$pid = isset($_GET["pid"]) && is_numeric($_GET["pid"])?$_GET["pid"]:0;
$stores = execSQL($sql,array(":id"=>$id,":pid"=>$pid));
$title = "Find My Clothes - Store List";
$titlestack = $stores?$stores->title:"";
$title = "Find My Clothes - Store";
  include "header.php";
  include "topnav.php";
  if($stores){
  ?>
  <div class="container-fluid p-0">
    <img src="img/stores/<?php echo sanitizeName($stores->title);?>.png" class="img-fluid" alt="<?php echo $stores->title;?> Logo">
  </div>
<div class="container">
<div class="row mt-3">
<div class="col text-left">
<form class="rating" action="#" method="post">
  <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="1"></i>
  <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="2"></i>
  <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="3"></i>
  <i class="fa fa-lg fa-star-o" aria-hidden="true" data-rate="4"></i>
  <i class="fa fa-lg fa-star-o" aria-hidden="true" data-rate="5"></i>
</form>
</div>
<div class="col text-right">
<a href="#" class="map">
  <i class="fa fa-lg fa-map-o" aria-hidden="true"></i>
</a>
</div>
</div>
<div class="generic-cell mt-3">
  <a href="product.php?id=<?php echo $pid;?>"><div class="row">
    <div class="col-5 col-md-3"> <img src="<?php echo "img/products/$pid/1.jpg"?>" class="p-3 img-fluid" alt="<?php echo $stores->product;?>"> </div>
    <div class="col-7 col-md-9 pl-0">

    <div class="col-12 p-0"><span class="d-block w-100 pl-0 pt-2 pr-1"><i class="fa fa-lg fa-map-marker" aria-hidden="true"></i>  <small class="text-muted"><?php echo $stores->address;?></small></span></div>

    <div class="col-12 p-0">
      <span class="d-block w-100 pl-0 pt-2 pr-1 hProductTitle"><?php echo $stores->product;?></span>
    </div>
    <span class="d-block w-100 text-right mt-4 pb-2 pr-2 priceList"> ₪ <?php echo $stores->price;?></span>

  </div>
</div></a>
</div>

<div class="row mt-3">
<div class="col">
<button type="button" class="btn btn-block btn-info bg-lightBlue btn-buy"><i class="fa fa-lg fa-shopping-cart px-3" aria-hidden="true"></i>Buy it</button>
</div>
</div>


</div>
<?php
}
else {
    $errmsg = "Not Found";
    include "error.php";
  }
include "footer.php";
?>
