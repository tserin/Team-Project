<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
@import url(http://fonts.googleapis.com/css?family=Exo+2:300);
@import url(http://fonts.googleapis.com/css?family=Zeyada);


.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12{position:relative;padding: 0 !important;} 

html, body {
  height: 100% !important;
}

#accueil {
  background: url(img/greengrocer.jpg) no-repeat center !important;
  background-size: cover !important;
  margin-top: 0px !important;
  height: 500px !important;
  /*height: 100% !important;*/
}

#accueil h1 {
  position: relative !important;
  top: 120px !important;
  font-size: 10em !important;
  font-family: "Zeyada" !important;
  text-align: center !important;
  color: #fff;
  text-transform: uppercase !important;
}

#accueil h2 {
  position: relative !important;
  top: 150px !important;
  text-align: center !important;
  font-size: 3em;
  font-family: "Zeyada";
  text-transform: uppercase;
  color: #fff;
}

#gallery {
  height: 100%;
}

figure {
    height: 250px;
    width: 250px;
    display: block;
    overflow: hidden;
    z-index: 100;
}

figcaption {
    height: 250px;
    width: 100%;
    /**/
    text-align: center;
    position: absolute;
    bottom: 0;
    left: -500px;
    opacity: 0; 
    padding: 5px;
}
#pagination{
text-align: : center;
}
a {
    color: #fff;
}

a:hover figcaption {
    opacity: 0.8;
    left: 0;
    color: #fff;
    transition: all 0.7s;
}





@media (max-width: 768px) { 
  #accueil h1, #contact h1 {
    font-size: 4.6em;
  }
}
  </style>

  <script type="text/javascript">
$(document).ready(function() {
      
      $('ul a').click(function() {
      var $anchor = $(this);
      
      $('html, body').animate({
      scrollTop: $($anchor.attr('href')).offset().top
      }, 2000);
      return false;
      helpers : {
      }
      });
      });
  </script>
</head>
<body class="removemargin">
<div class="container-fluid">
  <?php include 'header.php' ;

  ?>

<div id="accueil">
  <h1>Welcome,</h1>
  <h2>We are Bronte Online </h2>
</div>
<div id="gallery">
    <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img-responsive" src="img/fish.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Fish</p>
        </figcaption>
        </a>
    </figure>
    <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog2">
<img class="img-responsive" src="img/cake1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Cake</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog3">
      <img class="img-responsive" src="img/tomato1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Tomato</p>
        </figcaption>
        </a>
    </figure>
  <!-- <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img" src="http://lorempixel.com/800/400/nature/1/" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure> -->
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog4">
      <img class="img-responsive" src="img/pea1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Pea</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog5">
     <img class="img-responsive" src="img/cake2.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Cake</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog6">
      <img class="img-responsive" src="img/fruit1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Fruits</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog7">
      <img class="img-responsive" src="img/grapes1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Grapes</p>
        </figcaption>
        </a>
    </figure>
  <!-- <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog7">
      <img class="img-responsive" src="img/111.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure> -->
     <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog8">
      <img class="img-responsive" src="img/meat3.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Meat</p>
        </figcaption>
        </a>
    </figure>
   <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog9">
      <img class="img-responsive" src="img/veg.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Vegetable</p>
        </figcaption>
        </a>
    </figure>
   <figure class="col-md-4 col-sm-4 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog10">
     <img class="img-responsive" src="img/mango1.jpg" alt="" />
        <figcaption>
            <h2></h2>
            <p>Mango</p>
        </figcaption>
        </a>
    </figure>
  <!-- <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img" src="http://lorempixel.com/800/400/nature/1/" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img" src="http://lorempixel.com/800/400/nature/1/" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img" src="http://lorempixel.com/800/400/nature/1/" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure>
  <figure class="col-md-3 col-sm-3 col-xs-12 ">
      <a href="#" data-toggle="modal" data-target=".dialog1">
      <img class="img" src="http://lorempixel.com/800/400/nature/1/" alt="" />
        <figcaption>
            <h2></h2>
            <p>Great Product</p>
        </figcaption>
        </a>
    </figure> -->
</div>
<ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
<!--  Modal content for City Image -->
        <div class="modal fade dialog1" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Fish</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/fish.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!--  Modal content for City Image -->
        <div class="modal fade dialog2" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Cake</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/cake1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <!--  Modal content for City Image -->
        <div class="modal fade dialog3" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Tomato</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/tomato1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>


        <!--  Modal content for City Image -->
        <div class="modal fade dialog4" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Pea</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/pea1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>

          <!--  Modal content for City Image -->
        <div class="modal fade dialog6" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Fruit</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/fruit1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>


        <!--  Modal content for City Image -->
        <div class="modal fade dialog5" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Cake</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/cake2.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>



        <!--  Modal content for City Image -->
        <div class="modal fade dialog7" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Grapes</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/grapes1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <!--  Modal content for City Image -->
        <div class="modal fade dialog8" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Meat</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/meat3.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>


        <!--  Modal content for City Image -->
        <div class="modal fade dialog9" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Vegetable</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/veg.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>


           <!--  Modal content for City Image -->
        <div class="modal fade dialog10" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h4 class="modal-title" id="myLargeModalLabel-1">Mango</h4>
                    </div>
                    <div class="modal-body active">
                        <img src="img/mango1.jpg" class="img-responsive img-rounded center-block" alt="" />
                    </div>
                </div>
            </div>
        </div>





        </div>
        </div>
  
  <?php  
        include 'footer.php';
  ?>
  </div>
</body>
</html>