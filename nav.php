<?php
$nav_classes[$page] = "active";
?>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="index.php">Nucleus Compass</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?=$nav_classes['about'] ?>"><a href="about.php">About<span class="sr-only">(current)</span></a></li>
        <li class="<?=$nav_classes['contact'] ?>"><a href="contact.php">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="<?=$nav_classes['alternatetherapy'] ?>"><a href="alternatetherapy.php">Alternate Forms of Therapy</a></li>
            <li class="<?=$nav_classes['thebrain'] ?>"><a href="thebrain.php">The Brain</a></li>
            <li class="<?=$nav_classes['life'] ?>"><a href="life.php">Life</a></li>
            <li class="divider"></li>
            <li class="<?=$nav_classes['freud'] ?>"><a href="freud.php">Freud, the Cat</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>