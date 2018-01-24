<?php
$navitems = array(
  (object) array("name"=>"Home","page"=>"index.php","icon"=> "home","text"=>"Home"),
  (object) array("name"=>"Search","page"=>"search.php","icon"=> "search","text"=>"Search"),
  (object) array("name"=>"List","page"=>"myHistory.php","icon"=> "list-ol","text"=>"Clothes"),
  (object) array("name"=>"Settings","page"=>"index.php","icon"=> "cog","text"=>"Settings"),
  (object) array("name"=>"Watchlist","page"=>"index.php","icon"=> "bookmark","text"=>"Watchlist"),
  (object) array("name"=>"Photos","page"=>"index.php","icon"=> "camera","text"=>"Photos Taken")
);
?>
<nav class="navbar top fixed navbar-lightBlue">
  <div class="wrapper">
    <?php if (isset($titlestack)) include "topstack.php";
          else include "mobilenav.php";
      ?>

    <div class="d-none d-md-block">
      <a class="logo" href=".">Logo</a>
      <div class="drop-user float-right">
				<img src="img/profiledavid.jpg" class="img-fluid rounded-circle">
			  <span class="userdropname">David Beckham</span>
				</div>
      </div>
    </div>
	</nav>
  <nav class="navbar menu fixed navbar-lightBlue d-none d-md-flex">
    <div class="wrapper">
      <ul class="nav navbar-nav d-inline-flex w-100 text-center">
    <li class="nav-item">
      <ul class="list-inline-mb-0">
        <?php foreach ($navitems as $ni){ ?>
            <li class="pl-2 pr-2 list-inline-item<?php if (isset($active) && $active === $ni->name) echo " active";?>"> <a href ="<?php echo $ni->page;?>"><i class="pr-2 fa fa-<?php echo $ni->icon;?>"></i><?php echo $ni->text;?></a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>

    </div>
  </nav>
  <div class="wrapper">
