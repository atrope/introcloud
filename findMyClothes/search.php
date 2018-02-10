<?php
include "helper.php";
      $title = "Find My Clothes - Search";
      $active = "Search";
      include "header.php";
      include "topnav.php";
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
            <h5 class="mb-3">Search by name, tag or store</h5>
            <form action="searchAdv.php" method="post">
            <input type="text" class="search" name="search" placeholder="&#xf002; Search.." value="">
            </form>

          </div>

        </div>
      </div>

      <?php
      include "bottomnav.php";
      include "footer.php";
    ?>
