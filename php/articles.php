<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <asdscript src="https://global.transak.com/sdk/v1.1/widget.js" async></script>
    <title>ninos.finance</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar Section -->


    <nav class="navbar2">
      <div class="navbar2__container">

        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,solana,binancecoin,dogecoin,cardano" currency="cad" background-color="#262525" locale="en" style="width:100%" font-color="#ffffff"></coingecko-coin-price-marquee-widget>

    </nav>


    <nav class="navbar">
      <div class="navbar__container">
        <a href="home.php" id="navbar__logo">ninos.finance</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
             <li class="navbar__item">
               <a href="getstarted.php" class="navbar__links" id="getstarted-page">Get Started</a>
             </li>
             <li class="navbar__item">
               <a href="articles.php" class="navbar__links" id="articles-page">Articles</a>
             </li>
             <li class="navbar__item">
               <a href="marketplace.php" class="navbar__links" id="marketplace-page">Marketplace</a>
             </li>
             <li class="navbar__item">
               <a href="support.php" class="navbar__links" id="support-page">Support</a>
             </li>
            <li class="navbar__btn">
               <a onclick="launchTransak()" class="button" id="buycrypto">Buy Crypto</a>
             </li>
        </ul>
      </div>
    </nav>

    <!-- LEARN TOP Section -->
    <div class="learntop" id="home">
      <div class="learntop__container">
        <h1 class="learntop__heading">Coming <span>SOON</span></h1>
        <p class="learntop__description">For indepth details about popular Cryptos and Safety</p>
      </div>
    </div>


</html>
    <script src="app.js"></script>
  </body>
</html>