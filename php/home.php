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
    <script src="https://global.transak.com/sdk/v1.1/widget.js" async></script>
    <title>ninos.finance</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
    <script>
    function launchTransak() {
      let transak = new TransakSDK.default({
        apiKey: '5126d521-2bc2-4e7f-85bf-5d808fd42fc0', // Your API Key
        environment: 'STAGING', // STAGING/PRODUCTION
        defaultCryptoCurrency: 'ETH',
        walletAddress: '', // Your customer wallet address
        themeColor: '262525', // App theme color in hex
        fiatCurrency: 'CAD', // INR/GBP
        email: '', // Your customer email address
        redirectURL: 'ninos.finance/dashboard.html',
        hostURL: window.location.origin,
        widgetHeight: '550px',
  networks: 'ethereum,polygon,terra,mainnet,bsc,solana,celo,zil,moonriver,fantom,ronin,avaxcchain,ada',
        widgetWidth: '100%'
      });
      transak.init();
      // To get all the events
      transak
        .on(transak.ALL_EVENTS, (data) => {
          console.log(data)
        });
      // This will trigger when the user marks payment is made.
      transak.on(transak.EVENTS.TRANSAK_ORDER_SUCCESSFUL, (orderData) => {
        console.log(orderData);
        //transak.close();
      });
    }
  </script>
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
             <li class="navbar__btn">
               <a href="index.html" class="button" id="logout">Log Out</a>
             </li>
        </ul>
      </div>
    </nav>

        <!-- Reports Section -->
    <div class="reports" id="reports">
      <h1>Latest Reports</h1>
        <div class="reports__wrapper">
        <div class="reports__card">
          <h2>Anchor Protocol (ANC)</h2>
          <p>A Lending and Borrowing Protocol on the Terra Blockchain.</p>
        </div>
        <div class="reports__card">
          <h2>Acala (ACA)</h2>
          <p>An EVM-Compatible DeFi Platform on Polkadot</p>
        </div>
        <div class="reports__card">
          <h2>API3 (API3)</h2>
          <p>A Data Oracle that Enables APIs to Feed Data to Blockchain Applications Directly.</p>
        </div>
        <div class="reports__card">
          <h2>Glimmer (GLMR)</h2>
          <p>An EVM-Compatible Blockchain on Polkadot.</p>
        </div>
      </div>
    </div>


        <!-- Homepage Section -->
    <div class="homepage" id="homepage">
      <div class="homepage__container">
        <div class="main__content">
          <h2>NFT Spotlight</h2>
        <div class="main__img--container">
          <div class="main__img--card" id="card-2">
            <i class="fas fa-users"></i>
          </div>
        </div>
        </div>
        <rssapp-wall id="txFcj52xBt25eMfm"></rssapp-wall>
    </div>

</html>
    <script src="app.js"></script>
  </body>
</html>