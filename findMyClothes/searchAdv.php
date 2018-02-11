<?php
include "helper.php";
$search = isset($_POST["search"])?$_POST["search"]:"";
$title = "Find My Clothes - Search";
if($search) $products = execSQL("SELECT * from 214_products p where title LIKE :search or color = :color", array(":search" => "%$search%",":color"=>$search));
$active = "Search";
include "header.php";
include "topnav.php";
?>
<div class="container">

<?php
  if (!isset($products) || !$products){
    $errmsg = "Nothing found for ";
    $errmsg.=$search?$search:"your query";
    include "error.php";
  }
  else{
    $products = !is_array($products)? array($products):$products;
    foreach ($products as $product) { ?>
  <div class="generic-cell mt-3">
    <a href="product.php?id=<?php echo $product->id?>"><div class="row">
      <div class="col-5 col-md-3">
        <img src="<?php echo "img/products/$product->id/1.jpg"?>" class="p-3 img-fluid" alt="<?php echo $product->title;?>">
      </div>
      <div class="col-7 col-md-9 pl-0">

      <div class="col-12 p-0"><span class="d-block w-100 pl-0 pt-2 pr-1"><i class="fa fa-map-marker" aria-hidden="true"></i>  <small class="text-muted"> Rotschild Blvd.</small></span></div>

      <div class="col-12 p-0">
        <span class="d-block w-100 pl-0 pt-2 pr-1 hProductTitle"><?php echo $product->title;?></span>
      </div>

    </div>
  </div></a>
  </div>
<?php }} ?>
</div>


      <?php
      include "bottomnav.php";
      include "footer.php";
    ?>
