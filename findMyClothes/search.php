<?php
include "helper.php";
      $title = "Find My Clothes - Search";
      $active = "Search";
      include "header.php";
      include "topnav.php";
      $category = array(
        (object) array("value"=>"" , "name"=>"Select Category"),
        (object) array("value"=>"0" , "name"=>"Women"),
        (object) array("value"=>"1" , "name"=>"Men"),
        (object) array("value"=>"2" , "name"=>"Kids"));
      $cities = array("Select City","Ashdod","Ashkelon","Beer Sheva","Guivataym","Haifa","Ramat Gan","Tel Aviv");
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 offset-sm-2 offset-md-0 col-md-3 mt-5 text-center h1">
<h2 class="d-none d-md-block">Scan It!</h2>
            <img src="img/qrcode.png" class="img-fluid mb-5 qrcode" alt="qr code">
            <a href="#" class="qrcode mt-2">
            <i class="fa fa-camera border border-dark p-3 rounded-circle" aria-hidden="true"></i>
            </a>
          </div>
          <div class="col-md-5 offset-4 mt-5 d-none d-md-block">
            <h5 class="mb-3">Search by name, color, tag or store</h5>
            <form action="searchAdv.php" method="post">
              <div class="row">

            <input type="text" class="search" name="search" placeholder="&#xf002; Search.." value="">
            <div class="pl-0 col-6 mt-3">
              <select class="form-control" name="category">
                  <?php foreach ($category as $c){ ?>
                    <option value="<?php echo $c->value;?>"><?php echo $c->name;?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="pl-0 col-6 mt-3">
              <select class="form-control" name="city">
                  <?php foreach ($cities as $c){ ?>
                    <option value="<?php echo $c;?>"><?php echo $c;?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="form-check col-12 text-left mt-3">
              <label class="form-check-label small">
                <input type="checkbox" name="push" class="form-check-input" checked>
                Show only recommended results
              </label>
            </div>
            <div class="col text-center mt-5">
              <input type="submit" class="btn btn-lg btn-success" value="Search">
            </div>
          </div>

            </form>

          </div>

        </div>
      </div>

      <?php
      include "bottomnav.php";
      include "footer.php";
    ?>
