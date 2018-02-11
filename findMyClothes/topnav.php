<?php
$navitems = array(
  (object) array("name"=>"Home","page"=>"index.php","icon"=> "home","text"=>"Home"),
  (object) array("name"=>"Search","page"=>"search.php","icon"=> "search","text"=>"Search"),
  (object) array("name"=>"History","page"=>"myHistory.php","icon"=> "list-ol","text"=>"Clothes"),
  (object) array("name"=>"Settings","page"=>"settings.php","icon"=> "cog","text"=>"Settings"),
  (object) array("name"=>"Watchlist","page"=>"#","icon"=> "bookmark","text"=>"Watchlist"),
  (object) array("name"=>"Famous","page"=>"famous.php","icon"=> "clock-o","text"=>"Be Famous")
);
?>
<nav class="navbar top fixed navbar-lightBlue">
  <div class="wrapper">
    <?php if (isset($titlestack)) include "topstack.php";
          else include "mobilenav.php";
      ?>

    <div class="d-none d-md-block text-center">
      <a class="logo float-left" href=".">Logo</a>
      <form class="d-inline" action="searchAdv.php" method="post">
        <input type="text" class="search" name="search" placeholder=" Search for keyword or color" value=""></form>
      <div class="drop-user float-right">
				<img src="img/profile.jpg" class="img-fluid rounded-circle" alt="profile img">
			  <span class="userdropname"><?php echo $user->name;?></span>
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
            <li class="pl-2 pr-2 mr-3 list-inline-item<?php if (isset($active) && $active === $ni->name) echo " active";?>"> <a href ="<?php echo $ni->page;?>"><i class="pr-2 fa fa-<?php echo $ni->icon;?>"></i><?php echo $ni->text;?></a></li>
        <?php } ?>
      </ul>
    </li>
  </ul>

    </div>
  </nav>
  <div class="wrapper">
