<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login-page.php");//redirect to the login page to secure the welcome page without login access.  
}  
?>  
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bank Mitra</title>
  <link
      rel="stylesheet"
      href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css"
    /><link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<main class="main">
  <!-- Header -->
  <header class="header">
    <div class="container flex-between">
      <div class="logo">
        <a href="#">
        </a>
      </div>
      <nav class="main-navgation flex-between flex-ver-top">
        <div class="nav-links">
          <a href="#Home">Home</a>
          <a href="#Department">Departments</a>
          <a href="#HelpDesk">Help Desk</a>
        </div>
        <div class="nav-buttons">
          <a href="#" class="log-in"></a>
          <a href="../php/logout.php" class="sign-up btn btn-sm">Logout</a>
        </div>
      </nav>
      <div class="burger-menu">
        <i class="fa-regular fa-bars icon"></i>
      </div>
    </div>
  </header>
  <!-- Landing -->
  <section class="landing">
    <div class="landing-text">
      <script type="text/javascript">toastr.success('Have Fun')</script>
      <h1>Bank Mitra</h1>
      <p>
        Your Desired Destination is Just a Click Away
      </p>
      <a href="#url-shorten-form" class="btn btn-lg">Admin Panel</a>
    </div>
    <div class="landing-image">
      <img src="../img/illustration-working.svg" alt="Working Illustration" draggable="false"/>
    </div>
  </section>
  <!-- Features -->
  <section class="features" id="features">
    <div class="container">
      <!-- Short URL Feature -->
      <div class="url-shorten-feature">
        <form class="url-shorten-form" id="url-shorten-form">
          <div>
            <input type="text" class="url-input" placeholder="Search a desk name..." autocomplete="off" />
            <span class="alert"></span>
          </div>
          <button type="submit" class="btn btn-lg btn-plus-icon">Search It!</button>
        </form>
        <div class="url-shorten-results"></div>
      </div>
      <!-- Advanced Features -->
      <div class="more-features">
        <div class="section-header">
          <h2>Desk Details(Admin)</h2>
          <p>
            Track your desk with one click.
          </p>
        </div>

        <br>
        <!-- partial:index.partial.html -->
        <div class="container2">
          <!--Cash Deposit-->
          
          <div class="card-container" id="card1">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Cash Deposit</h1>
                </div>
                <p class="front-text">Desk 1</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Cash Deposit">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Cash Deposit">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->        
        
          
          <!--Cash Withdrawal-->
        
          <div class="card-container" id="card2">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Cash Withdrawal</h1>
                </div>
                <p class="front-text">Desk 2</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Cash Withdrawal">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Cash Withdrawal">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->   
          
          <!--Investment-->
          <div class="card-container" id="card3">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Investment</h1>
                </div>
                <p class="front-text">Desk 3</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Investment">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Investment">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->   
        

          <!--Green Channel-->
          <div class="card-container" id="card1">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Green Channel</h1>
                </div>
                <p class="front-text">Desk 4</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Green Channel">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Green Channel">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->   
        
      
          <!--Credit Card-->
          <div class="card-container" id="card2">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Credit Card</h1>
                </div>
                <p class="front-text">Desk 5</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Credit Card">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Credit Card">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->   
        
        
          <!--Loans-->
          <div class="card-container" id="card3">
            <div class="card">
              <figure class="front">
                <div class="front-skew">
                  <h1>Loans</h1>
                </div>
                <p class="front-text">Desk 6</p>
              </figure>

              <figure class="back">
                <form action="../php/Edit.php" method="post">
                  <h1>Details</h1>
                  <br>
                  <input type="hidden" name="MY_CONSTANT" value="Loans">
                  <input type="submit" class="btn" value="Edit">
                </form>
                <form action="../php/view.php" method="post">
                  <input type="hidden" name="MY_CONSTANT" value="Loans">
                  <input type="submit" class="btn" value="View">
                </form>
              </figure>
            </div><!--END OF CARD-->
          </div><!--END OF CARD-CONTAINER 1-->   
              </div>
            </div>
          </section>
          <!-- Pricing -->
          <section class="pricing" id="pricing">
            <div class="container">
              <div class="section-header">
                <h2>Search For The Desk</h2>
                <a href="#" class="btn btn-lg">Get Started</a>
              </div>
            </div>
          </section>
          <!-- Footer -->
          <footer class="footer" id="resources">
            <div class="container">
              <!-- Website Logo -->
              <div class="logo">
                <a href="#">
                </a>
              </div>
              <!-- Quick Links -->
              <div class="quick-links">
                <div class="links-group">
                  <span>Features</span>
                  <div>
                    <a href="#">Help Desk</a>
                    <a href="#">Department Name</a>
                    <a href="#">Analytics</a>
                  </div>
                </div>
                <div class="links-group">
                  <span>Resources</span>
                  <div>
                    <a href="#">Blog</a>
                    <a href="#">Developers</a>
                    <a href="#">Support</a>
                  </div>
                </div>
                <div class="links-group">
                  <span>Company</span>
                  <div>
                    <a href="#">About</a>
                    <a href="#">Our Team</a>
                    <a href="#">Careers</a>
                    <a href="#">Contact</a>
                  </div>
                </div>
              </div>
              <!-- Social Media -->
              <div class="social-media">
                <a href="#">
                  <img src="../img/icon-facebook.svg" alt="Facebook Logo">
                </a>
                <a href="#">
                  <img src="../img/icon-twitter.svg" alt="Twitter Logo">
                </a>
                <a href="#">
                  <img src="../img/icon-pinterest.svg" alt="Pinterest Logo">
                </a>
                <a href="#">
                  <img src="../img/icon-instagram.svg" alt="Instagram Logo">
                </a>
              </div>
            </div>
            <!-- Made By -->
            <div class="attribution">
              <ul class="social-media">
                <li>
                    <i class="fa-brands fa-codepen icon"></i>
                  </a>
                </li>
              </ul>
            </div>
          </footer>
        </main>
        <!-- partial -->
          <script  src="../script/script.js"></script>
        
        </body>
        </html>
        