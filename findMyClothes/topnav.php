<?php
$navitems = array(
  (object) array("name"=>"Home","page"=>"index.php","icon"=> "home","text"=>"Home"),
  (object) array("name"=>"Search","page"=>"search.php","icon"=> "search","text"=>"Search"),
  (object) array("name"=>"List","page"=>"index.php","icon"=> "list-ol","text"=>"My Scanned Clothes"),
  (object) array("name"=>"Settings","page"=>"index.php","icon"=> "cog","text"=>"Settings"),
  (object) array("name"=>"Settings","page"=>"index.php","icon"=> "bookmark","text"=>"Watchlist"),
  (object) array("name"=>"Photos","page"=>"index.php","icon"=> "camera","text"=>"Photos Taken")
);
?>
<nav class="navbar fixed navbar-lightBlue">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
		<div class="collapse" id="navbarResponsive">
<header>
  <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">  <i class="fa fa-times" aria-hidden="true"></i>
</button>

<div class="container">
  <div class="row">
    <div class="col-5 profilepic">
      <img src="img/profiledavid.jpg" alt="" class="img-fluid rounded-circle">
    </div>
    <div class="col-7 profileinfo">
      <span class="username d-block">David Beckham</span>
      <span class="usermail d-block">david@beckham.com</span>
    </div>
  </div>
</div>
</header>
<main>
  <ul class="list-group">
    <?php foreach ($navitems as $ni){ ?>
        <li class="list-group-item border-0<?php if ($active === $ni->name) echo " active";?>"> <a href ="<?php echo $ni->page;?>"><i class="fa fa-<?php echo $ni->icon;?>"></i><?php echo $ni->text;?></a></li>
    <?php } ?>
</ul>
</main>
		</div>
	</nav>
