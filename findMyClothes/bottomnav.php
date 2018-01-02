<?php
$navitems = array(
  (object) array("name"=>"Home","page"=>"index.php","icon"=> "home"),
  (object) array("name"=>"Search","page"=>"search.php","icon"=> "search"),
  (object) array("name"=>"History","page"=>"myHistory.php","icon"=> "list-ol"),
  (object) array("name"=>"Settings","page"=>"index.php","icon"=> "cog")
);
?>
<nav class="navbar fixed-bottom navbar-lightBlue">
  <?php foreach ($navitems as $ni){ ?>
    <a class="navbar-icon text-center<?php if ($active === $ni->name) echo " active";?>" href="<?php echo $ni->page;?>">
      <i class="fa fa-<?php echo $ni->icon;?>"></i>
    </a>
  <?php } ?>
</nav>
