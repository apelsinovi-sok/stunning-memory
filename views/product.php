
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Товары</title>
</head>
<?php
 require_once (ROOT.'/views/header.php');
 ?>
<body>
<link rel="stylesheet" type="text/css" href="/css/product.css">

<section>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container py-3" style="margin-top: 140px;">
  <div class="title h1 text-center"></div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7  px-3">
        <div class="card-block px-6">
          <h4 class="card-title"><?=$product['name'] ?></h4>
          <p class="card-text">
            The Carousel code can be replaced with an img src, no problem. The added CSS brings shadow to the card and some adjustments to the prev/next buttons and the indicators is rounded now. As in Bootstrap 3
          </p>
          <p class="card-text">Made for usage, commonly searched for. Fork, like and use it. Just move the carousel div above the col containing the text for left alignment of images</p>
          <br>

          <?= (isset($_SESSION['user'])) ? '<div class="btn btn-warning basket" id="'.$product['id'].'">
            В корзину
          </div>' : '' ?>


        </div>
      </div>
      <!-- Carousel start -->
      <div class="col-md-5">
        <div id="CarouselTest" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
            <li data-target="#CarouselTest" data-slide-to="1"></li>
            <li data-target="#CarouselTest" data-slide-to="2"></li>

          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <?='<img class="d-block" src="/img/'.$product->picture.'" alt="">'?>

            </div>
            <div class="carousel-item">
              <?='<img class="d-block" src="/img/'.$product->picture.'" alt="">'?>
            </div>
            <div class="carousel-item">
              <?='<img class="d-block" src="/img/'.$product->picture.'" alt="">'?>
            </div>
            <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
            <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
 <br>
<br>
<br>
</section>
