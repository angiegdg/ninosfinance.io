<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->
       
        <!-- Webpage Title -->
        <title>New Password - Ninos.Finance</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../css/swiper.css" rel="stylesheet">
        <link href="../css/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="../images/favicon.png">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navbar Section -->
    <nav class="navbar2">
      <div class="navbar2-container">
        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
        <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,solana,binancecoin,dogecoin,cardano" currency="cad" background-color="#ffffff" locale="en" style="width:100%" font-color="#000000"></coingecko-coin-price-marquee-widget>
    </nav>
        
        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo 
                <a class="navbar-brand logo-image" href="index.html"><img src="images/logo_sin_fondo.png" alt="alternative"></a> -->

                <!-- Text Logo - Use this if you don't have a graphic logo 
                <a class="navbar-brand logo-text" href="index.html">Ninos.Finance</a>-->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">

                    <!-- the logo can be commented here and added above -->
                <a class="navbar-brand logo-image" href="../index.html"><img src="../images/logo_sin_fondo.png" alt="alternative"></a> 
                    
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#details">Details</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Drop</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="article.html">Terms & Conditions</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="terms.html">Privacy Policy</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="privacy.html">AML Policy</a></li>
                            </ul>
                        </li>
                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="login-user.php">Log in</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

                <!-- Header -->
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">New Password</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->

    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
              <div class="col-xl-6 offset-xl-3">
                <div class="text-box mt-5 mb-5">
                 <!--<p class="mb-4">Enter your new password</p>-->
                <form action="new-password.php" method="POST" autocomplete="off">
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="mb-4 form-floating">
                        <input class="form-control" type="password" name="password" id="floatingInputNewpassword" placeholder="Create new password" required>
                        <label for="floatingInputNewpassword">Create New Password</label>
                    </div>
                    <div class="mb-4 form-floating">
                        <input class="form-control" type="password" name="cpassword" id="floatingInputConfirpassword" placeholder="Confirm your password" required>
                        <label for="floatingInputConfirpassword">Confirm your password</label>
                    </div>
                        
            <button class="form-control-submit-button" type="submit" name="change-password" value="Change">Change Password</button>
                    
                </form>
            </div>
         </div>
        </div>
      </div>
    </div>

            <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Us</h6>
                            <p class="p-small">ninos.finance is a decentralized Web3.0 application that provides users the easiest and safest way to connect to multiple blockchain networks. No Assets are held by ninos.finance, we do not offer financial advice and we promote independence. Funds in any connected wallets are not eligible for Canadian Investor Protection Fund coverage. <br> 
                            
                            <a href="https://www10.fintrac-canafe.gc.ca/msb-esm/public/detailed-information/msb-details/7b226d73624f72674e756d626572223a3136343934332c227072696d617279536561726368223a7b226f72674e616d65223a226e696e6f73222c2273656172636854797065223a317d7d/"><p>FINTRAC: <u>#M21844944</u></p>
                            </a>
                            </p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">
                            <h6>Company</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Business Contact</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">AML Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        
                        <div class="footer-col second">
                            <h6>Networks</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li><a href="#">Bitcoin</a></li>
                                <li><a href="#">Ethereum</a></li>
                                <li><a href="#">Solana</a></li>
                                <li><a href="#">Terra</a></li>
                                <li><a href="#">Avalanche</a></li>
                                <li><a href="#">Fantom</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        
                        <div class="footer-col second">
                            <h6>Language</h6>
                            <ul class="list-unstyled li-space-lg p-small">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div> <!-- end of footer-col -->
                        
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-discord fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-telegram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin fa-stack-1x"></i>
                                </a>
                            </span>

                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->  
        <!-- end of footer -->

   
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><br>
                        <p class="p-small">Copyright © <a href="#your-link">Ninos.Finance</a></p>
                    </div> <!-- end of col -->

                    <div class="col-lg-6"><br>
                        <p class="p-small">2022 - <a href="#">All rights reserved</a></p>    
                    </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
        

        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="../images/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->
            
        <!-- Scripts -->
        <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="../js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="../js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>