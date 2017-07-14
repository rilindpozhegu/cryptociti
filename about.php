<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cryptociti</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="build/styles.css?<?= filemtime('build/styles.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>
<!-- Include -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators mobile-d-n">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner carousel_edit" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/cover/about_cover.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/cover/about_cover.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/cover/about_cover.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/cover/about_cover.png" alt="Third slide">
    </div>
  </div>
<!--   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

<!-- Content Under About Cover  -->

<section class="content_about_cover">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Let’s decentralise</h2>
                <p>Hello Dubai crypto lovers, long term and short term investors, traders, miners, developers and everyone else who is interested in the new Blockchain technology. As much as we love this ecosystem and more people finding out about what this technology can offer, there are also those who are quietly waiting in the dark and watching for a potential prey. </p>
            </div>
        </div>
    </div>
</section>


<!-- Second Section About us -->

<section class="section_two_about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/home2.png" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>Our mission is to bring you the best cryptocurrency hardware and make sure you don’t spend a fortune to own one. This is the best and the safest way to keep the inventory of all your coins away from a hacker’s praying eyes.</p>
                <p>We would love you to be part of this new technological revolution and at the same time not to be ever concerned about your assets being compromised.</p>
                <button class="default_button">Contact</button>
            </div>
        </div>
    </div>
</section>

<!-- Section three homepage -->

<section class="section_three_about">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>The Wallets</h2>
                <p>Yes, we are still using existing Internet technology that is prone to hacking and malicious attacks. As an official partner and importer of the well-known brand Ledger, we are your direct contact in the UAE.</p>
                <p>Ledger is one of the most advanced hardware (cold) wallets that will eliminate all your concerns about ever loosing your coins to a hacker. <br>
                All products are originally packed and shipped directly from the manufacturer and then locally distributed to your door.</p>
            </div>    
        </div>
    </div>
</section>


<!-- Second Section Homepage -->
    <?php include 'ledger_section.php';?>


<!-- Features Section Homepage -->
    <?php include 'features_section.php';?>


<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

</body>

</html>
