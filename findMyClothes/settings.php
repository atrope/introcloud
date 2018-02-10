<?php
include "helper.php";
  $title = "Find My Clothes - Settings";
  $active = "Settings";
  include "header.php";
  include "topnav.php";
  $cities = array("Ashdod","Ashkelon","Beer Sheva","Guivataym","Haifa","Ramat Gan","Tel Aviv");
  ?>
  <div class="container">
    <div class="row settings text-center mt-3">
      <div class="col-10 offset-1">
        <img src="img/profile.jpg" alt="" class="img-fluid rounded-circle">
        <span class="ml-2 userdropname"><?php echo $user->name; ?></span>
      </div>

      <div class="col-10 offset-1 mt-4">
        <form action="updateSettings.php" method="GET">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="user-addon1"><i class="fa fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="user-addon1"  pattern=".{3,}" name="username" value="<?php echo $user->name;?>" >
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="mail-addon1"><i class="fa fa-envelope-o"></i></span>
            </div>
            <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $user->email;?>" aria-label="Email" aria-describedby="mail-addon1">
          </div>
          <div class="pl-0 col-6 mb-3">
            <select class="form-control" name="city">
              <optgroup label="Cities">
                <?php foreach ($cities as $c){ ?>
                  <option<?php if ($c == $user->city) echo " selected";?> value="<?php echo $c;?>"><?php echo $c;?></option>
                <?php } ?>
              </optgroup>
            </select>
          </div>
          <div class="form-check col text-left mb-5">
            <label class="form-check-label small">
              <input type="checkbox" name="push" class="form-check-input">
              I dont want be informed of news
            </label>
          </div>

          <input type="submit" class="btn btn-lg btn-success float-left" value="Save Changes">
          <button type="button" class="btn btn-sm btn-danger">Logout</button>
        </form>
      </div>

    </div>
  </div>

  <?php
  include "bottomnav.php";
  include "footer.php";
?>
