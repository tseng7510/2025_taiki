<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages technologyList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <h1 class="title">TECHNOLOGY</h1>
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
                  <span itemprop="name">Technology</span>
                  <meta itemprop="position" content="2">
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
                <div class="topInfo wow fadeInUp" data-wow-delay="0.2s">For over 40 years we have been committed to providing customers with the highest level of customer service and technical support. Providing the best quality, varied specifications and reasonable price is TAIKI’s goal in business.</div>

                <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                  <? for ($i = 0; $i < 12; $i++) { ?>
                    <div class="item">
                      <a href="technology_detail.php">
                        <div class="pic"><img src="../images/in/t.jpg" alt=""></div>
                        <div class="info"><i></i>
                          <h2 class="title">IMTS 2024 / SEP. 9-14</h2>
                          <div class="description">Booth No. : 431987, West Building<br />
                            Venues : McCormick Place</div>
                        </div>
                      </a>
                    </div>
                  <? } ?>
                </div>

              </div>

              <div class="pageBox wow fadeInUp" data-wow-delay="0.2s">
                <ul class="pagination">
                  <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="controls"><a class="next" href="#" title="Next"></a></li>
                </ul>
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