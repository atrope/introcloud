    <?php
      $title = "Find My Clothes - Product";
      $titlestack = "Suit 100% Cotton";
      include "header.php";
      include "topnavstack.php";
      $specs = array(
        (object) array("alt"=>"Tuxedo with Men","src"=>"img/tux.jpg"),
        (object) array("alt"=>"Tuxedo no Men","src"=>"img/tuxnomen.jpg"),
        (object) array("alt"=>"Tuxedo with butterfly","src"=>"img/tuxbutter.jpg"),
      );
      ?>
    <div id="productCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators round">
    <?php for ($i=0; $i < count($specs); $i++) { ?>
      <li data-target="#productCarousel" data-slide-to="<?php echo $i;?>"<?php if ($i==0){ ?> class="active"<?php } ?>></li>
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
<div class="container">
  <div class="row mt-3">
  <div class="col">
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
  <div class="col-6 text-right">
    <form class="" action="#" method="post">

    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
    </form>
  </div>
  <div class="col-1 text-right">
    <a href="#" class="bookmark">
      <i class="fa fa-bookmark-o" aria-hidden="true"></i>
    </a>
  </div>
  </div>
  <div class="row mt-3">
    <div class="col">

  <button type="button" class="btn btn-block btn-info bg-lightBlue btn-find-store"><i class="fa fa-building px-3" aria-hidden="true"></i>Find the Clothe</button>
</div>
</div>
<div class="row mt-3">
  <div class="col">
    <span>
      <b>Best in town</b> <br>
      <b>Color:</b> Black<br>
      <b>Fabric:</b> 100% Cotton Lining: 100% Viscose<br>
      <b>Features:</b> Custom Fit, Hand Tailored, 1 Button, Interior Pockets<br>
      <b>Care:</b> Dry Clean Only<br>
      <b>Made in Italy
    </span>
  </div>
</div>

</div>
<?php
  include "footer.php";
?>
