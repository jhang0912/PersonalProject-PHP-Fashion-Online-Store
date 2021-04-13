<?php include_once "toolKit.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- icon -->
  <link rel="shortcut icon" href="icon/favicon.png" type="image/x-icon">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/css/uikit.min.css" />
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit:wght@500&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/518f89d214.js" crossorigin="anonymous"></script>
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <!-- animation.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- wow.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous"></script>
  <!-- css -->
  <link rel="stylesheet" href="css/home_navbar.css">
  <link rel="stylesheet" href="css/home_slick.css">
  <link rel="stylesheet" href="css/home_newInShow.css">
  <link rel="stylesheet" href="css/home_forInspirationCon.css">
  <link rel="stylesheet" href="css/home_collection.css">
  <!-- title -->
  <title>Fashion Online Store</title>
</head>

<body>
  <section id="Navbar">
    <div class="navbar container-fluid d-flex justify-content-between align-items-center ps-4 pe-4">
      <div class="home d-flex align-items-center col-12 col-md-2">
        <a href="?page=home">
          <img src="icon/Massimo-Dutti-Logo.png" title="首頁">
        </a>
      </div>

      <div class="gender d-none d-md-flex justify-content-center align-items-center col-2">
        <div class="men m-3">
          <a href="?page=men" title="男士">
            MEN

            <div id="menLine"></div>
          </a>
        </div>

        <div class="women m-3">
          <div class="womenCon">
            <a href="?page=women" title="女士">
              WOMEN

              <div id="womenLine"></div>
            </a>
          </div>
        </div>
      </div>

      <div class="control d-flex align-items-center col-12 col-md-2">
        <div class="bars d-block d-md-none ms-3 me-3">
          <a href="" title="主選單"><i class="fas fa-bars m-0 h3"></i></a>
        </div>

        <div class="favorites d-none d-md-block ms-3 me-3">
          <a href="?page=shoppingCart" title="收藏清單"><i class="fas fa-heart m-0 h4"></i></a>
        </div>

        <div class="shoppingCart ms-3 me-3">
          <a href="?page=shoppingCart" title="購物清單"><i class="fas fa-shopping-cart m-0 h4"></i></a>
        </div>

        <div class="user ms-3 me-3"><a href="?page=userLogin">
            <i class="fas fa-sign-in-alt m-0 h4" title="登入"></i></a>
        </div>
      </div>
    </div>

    <div class="sort container-fluid d-none d-md-flex justify-content-center align-items-center ps-4 pe-4">
      <div class="newIn m-2 ms-3 me-3">
        <a href="<?= $NewIn->getMainUrl() ?>" class="text-dark">NEW IN</a>
        <div id="newIn" class="sortLine"></div>
      </div>

      <div class="collection m-2 ms-3 me-3">
        <a href="<?= $Collection->getMainUrl() ?>" class="text-dark">COLLECTION</a>
        <div id="collection" class="sortLine"></div>
      </div>

      <div class="shoes m-2 ms-3 me-3">
        <a href="<?= $Shoes->getMainUrl() ?>" class="text-dark">SHOES</a>
        <div id="shoes" class="sortLine"></div>
      </div>

      <div class="specialPrices m-2 ms-3 me-3">
        <a href="<?= $SpecialPrices->getMainUrl() ?>" class="text-danger">SPECIAL PRICES</a>
        <div id="specialPrices" class="sortLine"></div>
      </div>

      <div class="joinLife m-2 ms-3 me-3">
        <a href="<?= $JoinLife->getMainUrl() ?>" class="text-dark">JOIN LIFE</a>
        <div id="joinLife" class="sortLine"></div>
      </div>
    </div>

    <div class="ndSort">
      <div class="ndSortCon flex-wrap justify-content-center align-items-center col-12 ps-5 pe-5"></div>
    </div>

  </section>

  <section id="Content">
    <?php include $Front->getLoad() ?>
  </section>

  <section id="javaScript">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.19/dist/js/uikit-icons.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/newInShow.js"></script>
    <script src="js/forInspiration.js"></script>
  </section>
</body>

</html>