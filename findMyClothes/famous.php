<?php
include "helper.php";
$title = "Find My Clothes - Be Famous";
$active = "Be famous";
include "header.php";
include "topnav.php";
$dates = array(
  (object) array("date"=>"2018-02-20","src"=>"img/stores/zara.png","name"=>"zara"),
  (object) array("date"=>"2018-02-28","src"=>"img/stores/mango.png","name"=>"mango"),
  (object) array("date"=>"2018-03-01","src"=>"img/stores/mango.png","name"=>"mango"),
  (object) array("date"=>"2018-04-05","src"=>"img/stores/nike.png","name"=>"nike"),
);
$a = "222";
?>
  <div class="container famous">
    <div class="row mt-3">
      <div class="col">
        <p><strong>Make your Clothe Famous!</strong></p>
        <p><strong>Choose from these stores and attend</strong></p>
        <p> <strong>the joint meeting we've set up</strong></p>
      </div>
    </div>
    <?php foreach ($dates as $store) { ?>
    <div class="item d-inline-block border-0 mr-2 mt-2">
        <div class="col-12 imgcontainer">
          <img class="img-fluid" src="<?php echo $store->src;?>" alt ="<?php echo $store->name;?>">
        </div>
        <div class="col pt-3 pb-3 pl-0 pr-0 text-left">
          <small class="w-100 d-block pl-2"><?php echo date("F jS",strtotime($store->date));?><a href="#" class="bookmark pull-right pr-2"><i class="fa fa-calendar fa-lg "></i></a></small></div>
    </div>
  <?php } ?>
<script>
  $("header").prepend(
          '<h6> <?php echo $_SESSION["user_name"];?>, גן תפרחת </h6>' +
          '<span id="triggerOpen">&#9776;</span>' +
          '<a href="index.html"></a>'
      );
  </script>
  </div>

  <?php
  include "bottomnav.php";
  include "footer.php";
?>
