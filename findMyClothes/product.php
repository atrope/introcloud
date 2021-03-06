<?php
include "helper.php";
      $title = "Find My Clothes - Product";
      include "header.php";
      $id = isset($_GET["id"]) && is_numeric($_GET["id"])?$_GET["id"]:0;
      $product = execSQL("SELECT p.id,p.title,p.color,p.description,p.features,p.care,c.name as country from 214_products p INNER JOIN 214_country c on p.country=c.id where p.id = :id", array(":id" => $id));
      $titlestack = $product?$product->title:"";
      include "topnav.php";
      if(!$product){
          $errmsg = "Invalid ID!";
          include "error.php";
        }
      else {
      viewProduct($uid,$id); //save to user History
      $specs = array(
        (object) array("alt"=>"$product->title #1","src"=>"img/products/$product->id/1.jpg"),
        (object) array("alt"=>"$product->title #2","src"=>"img/products/$product->id/2.jpg"),
        (object) array("alt"=>"$product->title #3","src"=>"img/products/$product->id/3.jpg")
      );
      ?>
  <div class="container product">
    <div class="row">
        <div id="productCarousel" class="carousel slide col-12 col-md-4" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators round">
  <?php foreach ($specs as $key => $element) { ?>
      <li data-target="#productCarousel" data-slide-to="<?php echo $key;?>"<?php if ($key==0){ ?> class="active"<?php } ?>>
        <img class="d-none d-md-block w-100 img-fluid" src="<?php echo $element->src; ?>" alt="<?php echo $element->alt; ?>">
      </li>
    <?php }  ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach ($specs as $key => $element) { ?>
      <div class="carousel-item<?php if ($key==0){ ?> active <?php } ?>">
        <img class="d-block w-100 img-fluid" src="<?php echo $element->src; ?>" alt="<?php echo $element->alt; ?>">
      </div>
    <?php } ?>
  </div>
</div>
<div class="col-12 col-md-8">
  <div class="row mt-3">
  <div class="col-5 col-md-4 mt-md-3">
    <div class="sizes d-inline">
      <input type="radio" id ="small-product" name="sizeradio" value="S" checked>
      <label for="small-product">
        <span>S</span>
      </label>
    </div>
    <div class="sizes d-inline">
      <input type="radio" id ="medium-product" name="sizeradio" value="M">
      <label for="medium-product">
        <span>M</span>
      </label>
    </div>
    <div class="sizes d-inline">
      <input type="radio" id ="large-product" name="sizeradio" value="L">
      <label for="large-product">
        <span>L</span>
      </label>
    </div>
  </div>
  <div class="col d-none d-md-block">
  <h2><?php echo $titlestack;?></h2>
</div>
  <div class="col-5 col-md-12 text-right text-md-left">
    <form class="rating" action="#" method="post">

    <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="1"></i>
    <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="2"></i>
    <i class="fa fa-lg fa-star" aria-hidden="true" data-rate="3"></i>
    <i class="fa fa-lg fa-star-o" aria-hidden="true" data-rate="4"></i>
    <i class="fa fa-lg fa-star-o" aria-hidden="true" data-rate="5"></i>
    </form>
  </div>
  <div class="col-2 col-md-12 text-right text-md-left mt-md-3">
    <a href="#" class="bookmark">
      <i class="fa fa-lg fa-bookmark-o" aria-hidden="true"></i>
    </a>
  </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 col-md-6 mx-auto mt-md-5 mb-md-3">

  <button type="button" class="btn btn-block btn-info bg-lightBlue btn-find-store"><i class="fa fa-building px-3" aria-hidden="true"></i>Find the Clothe</button>
</div>
</div>
<div class="row mt-3">
  <div class="col">
    <span>
      <b><?php echo $product->description;?></b> <br>
      <b>Color:</b> <?php echo $product->color;?><br>
      <b>Features:</b> <?php echo $product->features;?><br>
      <b>Care:</b> <?php echo $product->care;?><br>
      <b>Made in <?php echo $product->country;?></b>
    </span>
  </div>
</div>
</div>
</div>

</div>
<?php
}
  include "footer.php";
?>
