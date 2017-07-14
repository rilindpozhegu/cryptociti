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


<div class="home_cover_main cover_text_edition clear-filter" data-parallax="true" >
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Get a hardware wallet today <br>
                    and manage your assets at the <br>
                    highest security level
                </h2>
                <button class="default_button">About Us</button>
            </div>
        </div>
    </div>
</div>

<!-- Firs Section Homepage -->

<section class="home_section_1">
    <div class="container">
        <div class="box_home row">
            <div class="col-md-6">
                <img src="img/home1.png" class="img-fluid">
            </div>
            <div class="col-md-6 home_text">
                <h2>Be Your Own Bank <br> With A Hardware Wallet</h2>
                <p>Cryptocurrency must be stored as securely as money in a bank. With hardware wallets, you have a direct and safe access to your funds using the highest encryption security level.</p>
            </div>
        </div>
        <div class="box_home row">
            <div class="col-md-6 home_text">
                <h2>CRYPTOCITI</h2>
                <p>CRYPTOCITI offers you safe and familiar products from the best known brand. With the hardware wallet, your currencies are always decentralised, you are your own secure bank. These wallets will never expose your private keys and passwords to the Internet.</p>
            </div>
            <div class="col-md-6">
                <img src="img/home2.png" class="img-fluid">
            </div>
        </div>
    </div>    
</section>

<!-- Second Section Homepage -->
    <?php include 'ledger_section.php';?>


<!-- Features Section Homepage -->
    <?php include 'features_section.php';?>


<!-- Ripple Section homepage -->
<section class="ripple_section_homepage">
    <div class="container">
        <div class="col-md-7">
            <h2>Ripple</h2>
            <p>Ledger Nano S operates with its own cryptocurrencies wallet interfaces:  Ledger Apps (free Google Chrome applications). You can also use other compatible software wallets from the following list.</p>
            <div class="col-md-12 no_padding">
                <img src="img/ripple1.png">
                <img src="img/ripple2.png">
                <img src="img/ripple3.png">
            </div>
        </div>    
    </div>
</section>

<!-- Get your Ledger -->
<section class="get_ledger_home">
    <div class="container">
        <div class="row">
            <h2>Get Your Ledger Nano S Today</h2>
            <div class="ledger_panel_slide">
                <div class="row">
                    <div class="col-md-6 mobile-d-n">
                        <p>Ledger Nano S</p>
                    </div>
                    <div class="col-md-6 mobile-d-n" style="text-align: right;">
                        <p>Cryptocurrency hardware wallet</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/owl/1.png" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="img/owl/2.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-1">
                        <h1>Ledger Nano S</h1>
                        <h5>4.9 (100 votes)</h5>
                        <p>Ledger Nano S is a Bitcoin, Ethereum and Altcoins hardware wallet, based on robust safety features for storing cryptographic assets and securing digital payments. It connects to any computer (USB) and embeds a secure OLED display to double-check and confirm each transaction with a single tap on its side buttons.</p>
                        <h5>Price</h5>
                        <h3>AVAILABLE SOON</h3>
                        <button class="default_button">Pre-Order Now</button>
                        <button class="default_button">Save to list</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
    <script>
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });
    </script>
</body>

</html>
