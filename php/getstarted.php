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
        </ul>
      </div>
    </nav>

   <!-- Welcome Section -->
    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h2>Welcome to Crypto</h2>
          <p>We're on a mission to educate and reach out to as many people as possible on the transformative potential of cryptocurrency and blockchain technology. On this page, you'll find plenty of resources to get yourself started on your journey into the world of Crypto</p>
        </div>
        <div class="main__img--container">
          <div class="main__img--card" id="card-2">
            <img src="testimage.jpg">
          </div>
        </div>
      </div>
    </div>

   <!-- Quick Section -->
    
   <div class="getstarted__container">
       <h2 class="quickaccess__content">Quick access</h2>
       <button class="getstarted__btn"><a href="#">Crypto</a></button>
       <button class="getstarted__btn"><a href="#">Blockchain</a></button>
       <button class="getstarted__btn"><a href="#">Trading</a></button>
       <button class="getstarted__btn"><a href="#">Investing</a></button>
       <button class="getstarted__btn"><a href="#">NFTs</a></button>
       <button class="getstarted__btn"><a href="#">Privacy</a></button>
   </div>
   

   <!-- Crypto Section -->

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>What's a cryptocurrency?</h2>
          <h1>A cryptocurrency is essentially just a digital form of cash. You can use it to pay for your share of the bar tab, shop for products, or book flights and hotels for your next holiday. Because cryptocurrency is digital, it can also be sent to friends and family anywhere in the world.</h1>
          <h1>Seems no different to PayPal or using bank transfers, right? Well, not really. It's way more interesting!</h1>
          <h1>You see, traditional online payment gateways are owned by corporate organizations who hold your money for you. Whenever you want to access your funds, you need to ask them to transfer it to the receiving party on your behalf.</h1>
          <h1>In cryptocurrencies, there isn't an organization. You, your friends, and thousands of others can act as your own banks by running free software. Your computer connects with other people's computers, meaning you communicate directly – no middlemen required!</h1>
          <h1>To use cryptocurrency, you don't need to sign up for a website with an email address and password. You can download a wide variety of apps onto your smartphone to begin sending and receiving within minutes.</h1>
        </div>
      </div>
    </div>

    <div class="services2" id="services2">
        <div class="services2__wrapper">
        <div class="services2__card">
          <h2>Why do they call it cryptocurrency?</h2>
          <p>The name cryptocurrency comes from combining the concept of cryptography and currency. With cryptography, we use advanced math to secure our funds, making sure that nobody else can spend them.</p>
          <p>Most crypto applications will handle this part for you, but the best part is that the technology to manage your crypto is "Open source" meaning that it is a very public and transparent way to keep records.</p>
          <p>If you're interested to learn more about how and why cryptography is so effective at securing funds – we've got a few articles for you:</p>
          <a href="signup-user.php">
            <h3>What is Public-Key Cryptography?</h3>
          </a>
          <a href="signup-user.php">
          <h3>History of Cryptography</h3>
        </a>
        <a href="signup-user.php">
          <h3>Symmetric vs. Asymmetric Encryption</h3>
        </a>
        <a href="signup-user.php">
          <h3>What is a Digital Signature?</h3>
        </a>
        </div>
      </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h1>So, this magical internet money isn't owned by anyone and uses cryptography to secure the system. But you've already got apps for paying people – why should you care?</h1>
        </div>
      </div>
    </div>

    <div class="services3" id="services3">
        <div class="services3__wrapper">
        <div class="services3__card">
          <h2>Permissionless</h2>
          <p>No one can stop you from using cryptocurrency. Centralized payment services, on the other hand, can freeze accounts or prevent transactions from being made.</p>
        </div>
        <div class="services3__card">
          <h2>Censorship-resistant</h2>
          <p>Because of the way the network is designed, it's virtually impossible for hackers or other attackers to shut it down.</p>
        </div>
        <div class="services3__card">
          <h2>A cheap and fast payment method</h2>
          <p>When you make a transaction to someone at the other side of the world, your money can be with them within seconds – at a fraction of the cost of an international wire transfer.</p>
        </div>
      </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h1>What about that ₿ Bitcoin thing your friend or family member keeps talking about? That's the original cryptocurrency, and, to date, the most popular.</h1>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>Who invented Bitcoin?</h2>
          <p>Amazingly, nobody knows who invented Bitcoin. We only know them by their screen name - Satoshi Nakamoto. Satoshi could be a single person, a group of programmers, or if you believe some of the weirder theories, a time-traveling alien or secret government team.</p>
          <p>Satoshi published a 9-page document in 2008, detailing how the Bitcoin system worked. Months later, in 2009, the software itself was released.</p>
        </div>
      </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h1>Bitcoin provided the foundation for many other cryptocurrencies. Some were based on the same software, while others took a very different approach. Ok, but what's the difference between all the cryptocurrencies?</h1>
          <h1>To even make a list of all the different cryptocurrencies would take us weeks. Some are faster than others, some are more private, some are more secure, and some are more programmable.</h1>
          <h1>There's a common saying in the cryptocurrency space: Do Your Own Research (or DYOR). We're not saying that to be rude, we promise. It just means that you shouldn't take information from a single source as the truth.</h1>
          <h1>Before investing your money into a particular project, make sure you do your due diligence.</h1>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>Cryptocurrencies aren't all the same!</h2>
          <p>If you're interested in learning about some of the different coins and tokens, we've compiled a list of guides on Binance Academy:</p>
          <a href="signup-user.php">
            <h3>What Is Bitcoin? (the king of cryptocurrencies)</h3>
          </a>
          <a href="signup-user.php">
          <h3>What Is Ethereum? (the distributed computer)</h3>
        </a>
        <a href="signup-user.php">
          <h3>A Beginner's Guide to Monero (for the privacy aficionados)</h3>
        </a>
        </div>
      </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h1>In the next section, we're going to talk about the technology that the vast majority of digital currencies are based on, known as blockchain.</h1>
        </div>
      </div>
    </div>

   <!-- Blockchain Section -->
    <div class="main3">
      <div class="main3__container">
        <div class="main3__content">
          <h2>What is blockchain?</h2>
          <h1>Don't be spooked by the technobabble that people use to describe "blockchain." A blockchain is just a database. It isn't a particularly sophisticated one, either - you could create it in a spreadsheet with minimal effort.</h1>
          <h1>There are some peculiarities with these databases. The first is that blockchains are append-only. That means that you can only add information - you can't just click on a cell and delete stuff that you've already added, or change it in any way.</h1>
          <h1>The second is that each entry (called a block) in the database is cryptographically linked to the last entry. In plain English, each new entry must contain a sort of digital fingerprint (hash) of the last one.</h1>
          <h1>And that's it! Since each fingerprint points back to the last one, you end up with a chain of blocks. Or - as the cool kids like to call it - a blockchain.</h1>
          <h1>A blockchain is immutable: if you change a block, it changes the fingerprint. And since that fingerprint is included in the next block, the next block is changed too. And since that block's fingerprint... well, you get the idea. You end up with a domino effect where any change becomes evident. You can't alter any information without everyone noticing.</h1>
          <h2>Is that it?</h2>
          <h1>Underwhelmed? That's fair. The innovation here isn't some cumbersome alternative to Google Sheets. It's that everyone can download blocks from other people on the network to build identical copies of the blockchain on their computers. That's what the software we mentioned earlier does.</h1>
          <h1>Suppose that you and your friends Alice, Bob, Carol, and Dan are running the software. You might say "I want to send five coins to Bob." So you send that instruction to everyone else, but the coins aren't sent to Bob immediately.</h1>
          <h1>Carol might decide at the same time to send Alice five coins. She also sends her instruction out to the network. At any time, a participant can gather up the pending instructions to create a block.</h1>
          <h1>If anyone can make a block, what stops them from cheating?</h1>
          <h1>It probably seems very attractive to you to create a block that says "Bob pays me a million coins." Or to start buying Lamborghinis and fur coats from Carol by making transactions with funds you don't own.</h1>
          <h1>Well, that's not how it works. Because of some cryptography, game theory, and something called a consensus algorithm, the system prevents you from spending funds you shouldn't be able to spend.</h1>
        </div>
        <div class="main3__img--container">
          <div class="main3__img--card" id="card-2">
            <img src="testimage.jpg">
          </div>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>More blockchain knowledge!</h2>
          <a href="signup-user.php">
            <h3>What Is a Blockchain Consensus Algorithm</h3>
          </a>
          <a href="signup-user.php">
          <h3>What Is Proof of Work (PoW)?</h3>
        </a>
        <a href="signup-user.php">
          <h3>Double Spending Explained</h3>
        </a>
        <a href="signup-user.php">
          <h3>Game Theory and Cryptocurrencies</h3>
        </a>
        <a href="signup-user.php">
          <h3>Byzantine Fault Tolerance Explained</h3>
        </a>

        </div>
      </div>
    </div>


    <div class="main">
     <div class="main__container">
        <div class="main__img--container">
           <div class="main__img--card" id="card-2">
              <img src="testimage2.jpg">
           </div>
        </div>
     </div>
    </div>


    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>Trading</h2>
          <h1>As you might have heard, blockchain and cryptocurrencies are already used in a lot of different areas. Undoubtedly, one of the biggest current use cases is speculation.</h1>
          <h1>Trading generally implies a shorter-term approach to generating profit. Traders may jump in and out of positions all the time. But how do they know when to get in and out?</h1>
          <h1>One of the most common ways to make sense of the cryptocurrency market is through an approach called technical analysis (TA). Technical analysts look at price history, charts, and other types of market data to find bets that have a good chance of returning a profit.</h1>
          <h1>You must be dying to get started right away. And technically, you could. It's that easy! But, like most things worth pursuing, trading is hard! It would take us a long time to talk about all that you need to keep in mind.</h1>
        </div>
      </div>
    </div>

    <div class="services2" id="services2">
        <div class="services2__wrapper">
        <div class="services2__card">
          <h2>Learn the special craft of chart mastery!</h2>
          <p>We have some articles to get you started:</p>
          <a href="signup-user.php">
            <h3>What Is Technical Analysis (TA)?</h3>
          </a>
          <a href="signup-user.php">
            <h3>A Beginner's Guide to Candlestick Charts</h3>
          </a>
          <p>Luckily, we've also created an extensive guide for new crypto traders! It contains pretty much everything (and probably more) that you need to know about trading crypto:</p>
          <a href="signup-user.php">
            <h3>A Complete Guide to Cryptocurrency Trading for Beginners</h3>
          <p>Once you can quote that article after being woken up at five in the morning, you could move on to other related topics:</p>
          </a>
          <a href="signup-user.php">
          <h3>A Beginners Guide to Understanding Risk Management</h3>
        </a>
        <a href="signup-user.php">
          <h3>A Beginner's Guide to Cryptocurrency Trading Strategies</h3>
        </a>
        <a href="signup-user.php">
          <h3>5 Essential Indicators Used in Technical Analysis</h3>
        </a>
        <a href="signup-user.php">
          <h3>12 Popular Candlestick Patterns Used in Technical Analysis</h3>
        </a>
        <a href="signup-user.php">
          <h3>7 Common Mistakes in Technical Analysis (TA)</h3>
        </a>
        </div>
      </div>
    </div>

    <div class="main">
     <div class="main__container">
        <div class="main__img--container">
           <div class="main__img--card" id="card-2">
              <img src="testimage2.jpg">
           </div>
        </div>
     </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>Investing</h2>
          <h1>Investors look for long-term bets based on the fundamentals of an investment. For example, how much profit a company is making. While cryptocurrencies are a new and unique type of assets, they can also be viewed through a similar lens.</h1>
          <h1>Many Bitcoin investors follow the "HODL" philosophy. This means that they believe so deeply in the success of Bitcoin that they don't intend to sell for a long time. But don't take their word for it! Read our extensive Bitcoin guide and decide for yourself.</h1>
          <h1>After going through that, you may decide that you want to become a Bitcoin HODLer. Well, you could become one in a matter of minutes. Just go to the Buy Crypto page and follow the instructions.</h1>
          <h1>The onboarding process is smooth and quick. You don't have to jump in with large amounts, either. You could start with as little as 15 dollars! So, what is some mind candy that you should be looking into related to crypto investing?</h1>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>Crypto Investing 101</h2>
          <p>If you want to invest in cryptocurrencies, these articles will help you get started:</p>
          <a href="signup-user.php">
            <h3>What is Fundamental Analysis (FA)?</h3>
          </a>
          <a href="signup-user.php">
          <h3>Asset Allocation and Diversification Explained</h3>
        </a>
        <a href="signup-user.php">
          <h3>Dollar-Cost Averaging (DCA) Explained</h3>
        </a>
        </div>
      </div>
    </div>


    <div class="main">
     <div class="main__container">
        <div class="main__img--container">
           <div class="main__img--card" id="card-2">
              <img src="testimage3.jpg">
           </div>
        </div>
     </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>Passive income</h2>
          <h1>So far, we've talked about trading and investing. These methods generally require a lot of time, which not everyone has. If you're one of those busy but efficient people, we have some other options for you.</h1>
          <h1>As Warren Buffett, one of the most successful investors of all time, said: "If you don't find a way to make money while you sleep, you will work until you die."</h1>
          <h1>Good news, the world of cryptocurrency offers many opportunities to earn passive income. You can basically use your crypto holdings to make more crypto!</h1>
          <h1>Why isn't everyone doing this? Well, they probably don't know. But now you do!</h1>
          <h1>One of the ways to earn passive income is by securely lending your holdings to other people. In exchange for the opportunity to borrow your funds, they'll pay interest to you.</h1>
          <h1>Besides, you may have heard about Bitcoin mining. It generally involves a lot of loud and expensive machines churning away for Bitcoin rewards. However, there are other ways to secure a cryptocurrency network. One of these is through a process called staking. And spoiler alert, it doesn't involve meat.</h1>

        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>What is staking?</h2>
          <p>In simple terms, staking means getting rewards for locking up coins. So, if you invest in a coin that supports staking, you could build up a larger holding over time. Read more about in these articles:</p>
          <a href="signup-user.php">
            <h3>What Is Staking?</h3>
          </a>
          <a href="signup-user.php">
          <h3>Proof of Stake Explained</h3>
        </a>
        </div>
      </div>
    </div>

    <div class="main">
     <div class="main__container">
        <div class="main__img--container">
           <div class="main__img--card" id="card-2">
              <img src="testimage4.jpg">
           </div>
        </div>
     </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>Non-fungible Tokens (NFTs)</h2>
          <h1>With the advent of blockchain technology, programmable digital scarcity has become possible letting us map the digital world to the real world and Non-fungible tokens (NFTs) essentially expand this idea. Unlike cryptocurrencies, where each token is equal, non-fungible tokens are unique and limited in quantity.</h1>
          <h1>NFTs are a key building block in a new, blockchain-powered digital economy. Numerous projects have experimented with NFTs in a variety of use cases, including gaming, digital identity, licensing, certificates, and fine art. What’s more, NFTs even allow for fractional ownership of high-value items.</h1>
          <h1>Unfortunately, there's also been innovation in ways to steal your sensitive data – something we unknowingly produce A LOT of. Do you know the best way to deal with ransomware? Or the steps you can take to stop websites from finding out where you're browsing from?</h1>
          <h1>A non-fungible token (NFT) is a type of cryptographic token on a blockchain that represents a unique asset. These can either be entirely digital assets or tokenized versions of real-world assets. As NFTs aren’t interchangeable with each other, they may function as proof of authenticity and ownership within the digital realm.</h1>
          <h1>There are various frameworks for the creation and issuance of NFTs. The most prominent of these is ERC-721, a standard for the issuance and trading of non-fungible assets on the Ethereum blockchain.</h1>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>Learn the in's and outs of NFTs</h2>
          <p>Here are some more articles that dive deeper!:</p>
          <a href="signup-user.php">
            <h3>How do NFTs work?</h3>
          </a>
          <a href="signup-user.php">
          <h3>How do I buy NFTs?</h3>
        </a>
        <a href="signup-user.php">
          <h3>How do I make NFTs?</h3>
        </a>
        </div>
      </div>
    </div>


    <div class="main">
     <div class="main__container">
        <div class="main__img--container">
           <div class="main__img--card" id="card-2">
              <img src="testimage5.jpg">
           </div>
        </div>
     </div>
    </div>

    <div class="getstarted">
      <div class="getstarted__container">
        <div class="getstarted__content">
          <h2>Privacy and Security</h2>
          <h1>We're a cryptocurrency website, but we also ❤️ privacy and security topics – and you should, too!</h1>
          <h1>The digital age brought with it some serious innovation. Your fridge can text you when you forget to close the door, you can summon your car from a smartphone app, and it looks like you'll soon be receiving mail by drone.</h1>
          <h1>Unfortunately, there's also been innovation in ways to steal your sensitive data – something we unknowingly produce A LOT of. Do you know the best way to deal with ransomware? Or the steps you can take to stop websites from finding out where you're browsing from?</h1>
        </div>
      </div>
    </div>

    <div class="services4" id="services4">
        <div class="services4__wrapper">
        <div class="services4__card">
          <h2>Protect yourself with knowledge</h2>
          <p>Here are some articles that make good starting points:</p>
          <a href="signup-user.php">
            <h3>What Is the TOR Network?</h3>
          </a>
          <a href="signup-user.php">
          <h3>Device Fingerprinting: How Exposed Are You?</h3>
        </a>
          <h3>What Is Phishing?</h3>
        </a>
          <h3>What Is End-to-End Encryption (E2EE)?</h3>
        </a>
        </div>
      </div>
    </div>

</html>
    <script src="app.js"></script>
  </body>
</html>
