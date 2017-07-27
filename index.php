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
            <div class="col-md-4 desktop-d-n wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                <img src="img/usb1.png" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Get a hardware wallet today
                    and manage your assets at the
                    highest security level
                </h2>
                <a href="about.php"><button class="default_button btn-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">About Us</button></a>
            </div>
            <div class="col-md-4 offset-md-1 mobile-d-n">
                <img src="img/usb1.png" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
            </div>
        </div>
    </div>
</div>

<!-- Firs Section Homepage -->

<section class="home_section_1">
    <div class="container">
        <div class="box_home row">
            <div class="col-md-6">
                <img src="img/home1.png" class="img-fluid wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">
            </div>
            <div class="col-md-6 home_text wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".2s">
                <h2>Be Your Own Bank <br> With A Hardware Wallet</h2>
                <p>Cryptocurrency must be stored as securely as money in a bank. With hardware wallets, you have a direct and safe access to your funds using the highest encryption security level.</p>
            </div>
        </div>
        <div class="box_home row">
            <div class="col-md-6 desktop-d-n">
                <img src="img/home2.png" class="img-fluid wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">
            </div>
            <div class="col-md-6 home_text wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".3s">
                <h2>CRYPTOCITI</h2>
                <p>CRYPTOCITI offers you safe and familiar products from the best known brand. With the hardware wallet, your currencies are always decentralised, you are your own secure bank. These wallets will never expose your private keys and passwords to the Internet.</p>
            </div>
            <div class="col-md-6 mobile-d-n">
                <img src="img/home2.png" class="img-fluid wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">
            </div>
        </div>
    </div>    
</section>

<!-- Second Section Homepage -->
    <?php include 'ledger_section.php';?>


<!-- Features Section Homepage -->
    <?php include 'features_section.php';?>


<!-- Ripple Section homepage -->
<!-- <section class="ripple_section_homepage">
    <div class="container">
        <div class="col-md-7">
            <h2 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".1s">Ripple</h2>
            <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".2s">Ledger Nano S operates with its own cryptocurrencies wallet interfaces:  Ledger Apps (free Google Chrome applications). You can also use other compatible software wallets from the following list.</p>
            <div class="col-md-12 no_padding">
                <img src="img/ripple1.png" class="wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".3s">
                <img src="img/ripple2.png" class="wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".33s">
                <img src="img/ripple3.png" class="wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".34s">
            </div>
        </div>    
    </div>
</section>
 -->

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
