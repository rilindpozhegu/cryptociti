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


<div class="wallet_cover_main cover_text_edition clear-filter" data-parallax="true" >
    <div class="container">
        <div class="row">
            <div class="col-md-4 desktop-d-n wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                <img src="img/usb1.png" class="img-fluid">
            </div>
            <div class="col-md-7">
                <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Be Your Own Bank <br> With A Hardware Wallet</h2>
                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Cryptocurrency must be stored as securely as money in a bank. With hardware wallets, you have a direct and safe access to your funds using the highest encryption security level.</p>
                <a href="about.php"><button class="default_button wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">About Us</button></a>
            </div>
            <div class="col-md-4 offset-md-1 mobile-d-n">
                <img src="img/usb1.png" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
            </div>
        </div>
    </div>
</div>

<section class="section_one_wallet">
    <div class="container">

        <div class="row">
            <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">The Wallet</h1>
            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2>Cryptociti</h2>
                <p>CRYPTOCITI offers you safe and familiar products from the best known brand. With the hardware wallet, your currencies are always decentralised, you are your own secure bank. These wallets will never expose your private keys and passwords to the Internet.</p>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <h2>Ledger Nano S</h2>
                <p>Ledger Nano S is a Bitcoin, Ethereum and altcoins hardware wallet, based on robust safety features for storing cryptographic assets and securing digital payments. It connects to any computer (USB) and embeds a secure OLED display to double-check and confirm each transaction with a single tap on its side buttons.</p>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <h2>Latest Gen</h2>
                <p>When you own cryptocurrencies, you need to protect your confidential data and access to your funds. With Ledger Nano S, secrets like private keys are never exposed: sensitive operations are isolated inside your hardware wallet within a state-of-the-art Secure Element, locked by a PIN code. Transactions can’t get tampered with, they are physically verified on the embedded screen with a simple press of a button.</p>
            </div>
            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <h2>Pay & Authenticate</h2>
                <p>Ledger Nano S includes Bitcoin, Litecoin, Ethereum and Ethereum Classic companion apps, and other blockchain-based cryptocurrencies. You can send and receive payments, check your accounts and manage multiple addresses for each currency from the same device. It also supports the FIDO® Universal Second Factor standard that simplifies the authentication process on compatible online services such as GMail, Dashlane, Dropbox or GitHub.</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="wallet_third_section">
    <div class="container">
            <h1 class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Features</h1>

        <div class="row">
            <div class="col-md-6 box1_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">
                <h2>Multi-currency</h2>
                <p>Ledger Nano S supports Bitcoin, Litecoin, Ethereum and altcoins: hold different assets in the same hardware wallet.</p>
            </div>
            <div class="col-md-6 box2_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">
                <h2>Security</h2>
                <p>Your confidential data is never exposed: it is secured inside a strongly isolated environment locked by a PIN code.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 box3_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <h2>Built-in Display</h2>
                <p>Check and confirm transactions on the display and confirm with using the physical buttons (anti-malware second factor).</p>
            </div>
            <div class="col-md-6 box4_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                <h2>Multi-apps</h2>
                <p>Use companion apps such as cryptocurrencies wallets, and also FIDO® U2F, GPG, SSH or build your own applications.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 box5_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                <h2>Fido® Certified U2F</h2>
                <p>Ledger Nano S supports the FIDO® Universal Second Factor authentication standard on Google, Dropbox, GitHub or Dashlane.</p>
            </div>
            <div class="col-md-6 box6_w wow fadeInRight" data-wow-duration="1s" data-wow-delay=".55s">
                <h2>BACKUP & RESTORATION</h2>
                <p>Your accounts are backed up on a recovery sheet. Easy restoration on any Ledger device or compatible wallets (BIP39/BIP44).</p>
            </div>
        </div>

    </div>
</section> -->

<!-- Second Section Homepage -->
    <div class="wallet_ledger_bg">
        <?php include 'ledger_section.php';?>
    </div>


<!-- Features Section Homepage -->
    <?php include 'features_section.php';?>

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
                    <div class="col-md-4 owl-carousel_edit">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/owl/1.png" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="img/owl/2.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 main_text_ledger_h">
                        <h1>Ledger Nano S</h1>
                        <h5>4.9 (100 votes)</h5>
                        <p>Ledger Nano S is a Bitcoin, Ethereum and Altcoins hardware wallet, based on robust safety features for storing cryptographic assets and securing digital payments. It connects to any computer (USB) and embeds a secure OLED display to double-check and confirm each transaction with a single tap on its side buttons.</p>
                        <h5>Price</h5>
                        <h3>AVAILABLE SOON</h3>
                        <a href="#"><button class="default_button">Pre-Order Now</button></a>
                        <a href="#"><button class="default_button">Save to list</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Last Section on Wallet -->

<!-- <section class="pricing_wallet">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="img/owl/1.png" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
            </div>
            <div class="col-md-6 pricing_text_all">
                <h2 class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Pricing</h2>
                <p class=" wow fadeInRight" data-wow-duration="1s" data-wow-delay=".2s">If you order directly from us: instead of paying 58 Euro + delivery to UAE (around 450 AED), you will only pay 390 AED including delivery. In addition, there are no other customs fees.</p>
                <button class="default_button wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Buy Now</button>
            </div>
        </div>
    </div>
</section>
 -->
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
        autoplayTimeout:6000,
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