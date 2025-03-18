<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages videoList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <div class="title">MEDIA</div>
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
                  <span itemprop="name">Media</span>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">Video</span>
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
                <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">Video</h1>
                <div class="topInfo wow fadeInUp" data-wow-delay="0.2s">For over 40 years we have been committed to providing customers with the highest level of customer service and technical support. Providing the best quality, varied specifications and reasonable price is TAIKI’s goal in business.</div>
              </div>
            </div>
          </div>

          <div class="listBox">
            <div class="contentBox">
              <div class="swiperArrow swiper-button-prev"></div>
              <div class="swiperArrow swiper-button-next"></div>

              <div class="swiper">
                <div class="swiper-wrapper">
                  <? for ($i = 0; $i < 4; $i++) { ?>
                    <div class="swiper-slide">
                      <div class="item">
                        <h2 class="title">Soft Jaws For Hydraulic Chucks</h2>
                        <div class="videoContainer">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/dRMm9P9XdbY?si=xa4m2cTKt0v_YsSN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                  <? } ?>
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

  <script>
    const videoSwiper = new Swiper('.videoList .swiper', {
      loop: true,
      spaceBetween: 240,
      loopPreventsSlide: true,
      navigation: {
        nextEl: '.videoList .swiper-button-next',
        prevEl: '.videoList .swiper-button-prev',
      },
    });
  </script>
</body>

</html>