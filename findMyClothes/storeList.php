<?php
include "helper.php";
  $sql = "select s.id,p.price,s.title,pd.title as product,s.address from 214_productsStores p INNER JOIN 214_stores s on p.storeId = s.id INNER JOIN 214_products pd on p.productsId = pd.id WHERE p.productsId = :id";
  $id = isset($_GET["id"]) && is_numeric($_GET["id"])?$_GET["id"]:0;
  $stores = execSQL($sql,array(":id"=>$id));
  $title = "Find My Clothes - Store List";

  $titlestack = $stores?count($stores)>1?$stores[0]->product:$stores->product:"";
  include "header.php";
  include "topnav.php";

  ?>

    <div class="container">
  <?php
  if (!$stores){
    $errmsg = "There are no stores with that product";
    include "error.php";
  }
  else foreach ($stores as $store) { ?>
  <div class="generic-cell store mt-3">
    <a href="store.php?id=<?php echo $store->id;?>&pid=<?php echo $id;?>"><div class="row">
      <div class="col-12"><span class="d-block w-100 text-right p-2"><i class="fa fa-map-marker" aria-hidden="true"></i>  <small class="text-muted"> <?php echo $store->address;?> <b>0.3km</b> from you</small></span></div>

      <div class="col"> <img src="img/stores/<?php echo sanitizeName($store->title);?>.png" class="p-2 img-fluid" alt=""> </div>
      <div class="col-7">
      <span class="d-block w-100 text-right pr-2"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span>
        <span class="d-block w-100 text-right mt-4 pb-2 pr-2 priceList"> ₪ <?php echo $store->price;?></span>
      </div>
    </div></a>

  </div>
<?php } ?>

</div>


<?php
include "footer.php";
?>
