<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <div class="title">ABOUT US</div>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">
        <div class="breadcrumbBox">
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
                    <span itemprop="name">About Us</span>
                    <meta itemprop="position" content="2">
                  </li>
                  <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                    <span itemprop="name">Quality & Strength</span>
                    <meta itemprop="position" content="3">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <section>
          <div class="blockList">
            <div class="block block1">

              <div class="outerBox">
                <div class="container">
                  <div class="contentBox">
                    <h1 class="blockTitle wow fadeInUp" data-wow-delay="0s">Quality & Strength</h1>
                    <div class="content">
                      <div class="editor">
                        <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                          <div class="subTitle">QUALITY</div>
                          <div class="description">High quality is made rather than spoken. We inculcate the importance of quality in our workers, which leads to the insistence on product precision.<br /><br />
                            TAIKI has been certified by the ISO 9001 QMS standard since 2007. We have excelled in quality control, administrative and production management, and customer service.<br /><br />
                            Our products are recognized and preferred by both domestic and international corporates.<br /><br />
                            Our aims are to develop top-notch products and understand customers’ needs to create a win-win situation in business.</div>
                        </div>

                        <div class="infoBox wow fadeInUp" data-wow-delay="0.4s">
                          <div class="subTitle">STRENGTH</div>
                          <div class="description">Innovation and improvement in manufacturing provide our customers with optimal machine tool parts and productive efficiency.<br />
                            On-time delivery and short lead time are what we are superior to our competitors.<br /><br />
                            As the motto goes, technology creates profits, quality builds trust, and service ensures satisfaction.</div>
                        </div>
                      </div>
                      <div class="pic wow fadeInRight" data-wow-delay="0.6s"><img src="../images/in/a12.jpg" alt=""></div>
                    </div>

                  </div>

                </div>
              </div>
            </div>
            <div class="pic wow fadeInUp" data-wow-delay="0.2s"><img src="../images/in/a13.jpg" alt=""></div>
        </section>

      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript">
    const block1Swiper = new Swiper('.aboutPage .block1 .swiper', {
      loop: true,
      navigation: {
        nextEl: '.aboutPage .block1 .swiper-button-next',
        prevEl: '.aboutPage .block1 .swiper-button-prev',
      },
      autoplay: {
        delay: 4000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
    });
  </script>
</body>

</html>