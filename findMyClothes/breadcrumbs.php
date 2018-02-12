<nav aria-label="breadcrumb" class="d-none d-md-block">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Find My Clothes</a></li>
    <?php if (isset($active) && $active!="Home"){ ?>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $name;?></li>
    <?php } else if (isset($titlestack)){ ?>
    <li class="breadcrumb-item" aria-current="page"><?php echo generateBreadcrumb(); ?></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $titlestack;?></li>
  <?php } ?>
  </ol>
</nav>
