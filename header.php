<html>
<?php include 'session.php';
      include 'connection/function.php';
 ?>

<body>
<!-- First level of navigation bar -->
<!-- --------------------------------------------------------------------------------------------------------------------- -->
  <nav class="navbar navbar-inverse" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      <img class="logoimage" src="img/toplogo.jpg" />
      <img class="logoimage" src="img/topslogan.png" />
      <!-- ADD FURTHER DESIRED ELEMENTS HERE -->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <?php if(loggedin()){?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php }else{?>
        <li><a href="register.php"><span class="glyphicon glyphicon-sunglasses"></span> Register</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php } ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
    <!-- ------------------------------------------------------------------------------------ -->
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Traders <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="butcher.php">Butcher</a></li>
              <li class="divider"></li>
              <li><a href="greengrocer.php">Greengrocer</a></li>
              <li class="divider"></li>
              <li><a href="fishmonger.php">Fishmonger</a></li>
              <li class="divider"></li>
              <li><a href="bakery.php">Bakery</a></li>
              <li class="divider"></li>
              <li><a href="deli.php">Delicatessen</a></li>
            </ul>
          </li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About Us</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Follow Us On <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Facebook</a></li>
              <li class="divider"></li>
              <li><a href="#">Instagram</a></li>
              <li class="divider"></li>
              <li><a href="#">YouTube</a></li>
              <li class="divider"></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </li>
          <li><a href="#">Gallery</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
         <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart  <span class="badge">2</span></a></li> 
          <?php include 'setvar.php'; ?>
         <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION['first_name'])){ echo $firstname; }else{echo 'My Account';} ?></a></li>
        
        </ul>
    
            <div class="col-xs-12">
          <?php
          include'searchbar.php';

          ?>
          </div>
      </div>
    </div>
  </nav>
</body>
</html>