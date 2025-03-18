<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <h1 class="title">PRODUCTS</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="index.php" itemprop="item">
                    <span itemprop="name">Home</span>
                  </a>
                  <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="products.php" itemprop="item">
                    <span itemprop="name">Products</span>
                  </a>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">Search Results</span>
                  <meta itemprop="position" content="3">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <h2 class="pageTitle wow fadeInUp" data-wow-delay="0s">Search Results</h2>
                <div class="results wow fadeInUp" data-wow-delay="0.2s">TAIKI raises</div>

                <div class="products wow fadeInUp" data-wow-delay="0.4s">
                  <div class="listBox">
                    <? for ($i = 0; $i < 12; $i++) { ?>
                      <div class="item">
                        <a href="products_detail.php">
                          <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                          <div class="info">
                            <div class="size">5 inch</div>
                            <h2 class="title">Soft Jaws -Extra Height Type</h2>
                          </div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>