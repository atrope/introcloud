<div class="d-md-none d-xl-none d-lg-none">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
<h1 class="topTitle d-inline"><?php echo $active;?></h1>
</div>
<div class="collapse" id="navbarResponsive">
<header>
<button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">  <i class="fa fa-times" aria-hidden="true"></i>
</button>

<div class="container">
<div class="row">
<div class="col-5 profilepic">
  <img src="img/profile.jpg" alt="" class="img-fluid rounded-circle">
</div>
<div class="col-7 profileinfo">
  <span class="username d-block"><?php echo $user->name; ?></span>
  <span class="usermail d-block"><?php echo $user->email; ?></span>
</div>
</div>
</div>
</header>
<div>
<ul class="list-group">
<?php foreach ($navitems as $ni){ ?>
    <li class="list-group-item border-0<?php if ($active === $ni->name) echo " active";?>"> <a href ="<?php echo $ni->page;?>"><i class="fa fa-<?php echo $ni->icon;?>"></i><?php echo $ni->text;?></a></li>
<?php } ?>
</ul>
</div>
</div>
