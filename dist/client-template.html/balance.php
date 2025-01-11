<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Starter Page - iPortfolio Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>
<body class="starter-page-page">

    <header id="header" class="header dark-background d-flex flex-column">
      <i class="header-toggle bi bi-list"></i>
  
      <div class="profile-img">
        <img src="assets/img/profile_pic.png" alt="" class="img-fluid rounded-circle">
      </div>
  
      <a href="index.html" class="logo d-flex align-items-center justify-content-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Pandagla, Sodais E.</h1>
      </a>
  
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="starter-page.html"><i class="bi bi-person navicon"></i> Home</a></li>
          <li><a href="deposit.html" ><i class="bi bi-bank navicon"></i>Deposit</a></li>
          <li><a href="withdraw.html"class="active"><i class="bi bi-box-arrow-down navicon"></i>Withdraw</a></li>
          <li><a href="balance.html"><i class="bi bi-person navicon"></i>Balance Tracking</a></li>
          <li><a href="trans.html"><i class="bi bi-person navicon"></i>Transaction History </a></li>
          <li><a href="#overview"><i class="bi bi-person navicon"></i> Overview</a></li>
        </ul>
      </nav>
  
    </header>
  
    <main class="main">

  
      <!-- Page Title -->
      <div class="page-title dark-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-10 mb-lg-0">Balance Tracking</h1>
          <nav class="breadcrumbs">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li><a href="login.html">logout</a></li>
            </ol>
          </nav>
        </div>
      </div><!-- End Page Title -->
  
      <!-- Starter Section Section -->
      <section id="starter-section" class="starter-section section dark-background">

        <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header text-center">
                    <h3>Balance Tracker</h3>
                  </div>
                  <div class="card-body">
                    <!-- Form to add new transaction -->
                    <form id="transactionForm">
                      <div class="mb-3">
                        <label for="transactionDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="transactionDescription" required>
                      </div>
                      <div class="mb-3">
                        <label for="transactionAmount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="transactionAmount" required>
                      </div>
                      <div class="mb-3">
                        <label for="transactionType" class="form-label">Type</label>
                        <select class="form-select" id="transactionType">
                          <option value="income">Income</option>
                          <option value="expense">Expense</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary w-100">Add Transaction</button>
                    </form>
        
                    <!-- Balance Display -->
                    <div class="mt-4">
                      <h4>Current Balance: <span id="currentBalance">$0.00</span></h4>
                    </div>
        
                    <!-- Transactions List -->
                    <ul id="transactionList" class="list-group mt-3"></ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        
             
            <script src="tracker.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
       
      </section><!-- /Starter Section Section -->
  
    </main>
  
    <footer id="footer" class="footer position-relative dark-background">
  
      <div class="container">
      </div>
  
    </footer>
  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
  
  </html>
