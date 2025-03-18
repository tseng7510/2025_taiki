<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <img src="../images/index/banner2.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <img src="../images/index/banner1.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <img src="../images/index/banner3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>


        <section class="productBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">PRODUCTS CATEGORY</h2>
                <div class="slogan wow fadeInUp" data-wow-delay="0.2s">TAIKI is your reliable manufacturer of Soft Jaws and Accessories of Chuck</div>
                <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                  <div class="swiperArrow swiper-button-prev"></div>
                  <div class="swiperArrow swiper-button-next"></div>
                  <div class="swiper">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide">
                        <div class="item">
                          <a href="products_2.php">
                            <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                            <div class="info">
                              <h2 class="title">Standards Soft Jaws 1.5mmx60°</h2>
                              <div class="more">Learn more</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item">
                          <a href="products_2.php">
                            <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                            <div class="info">
                              <h2 class="title">Standards Soft Jaws 1.5mmx60°</h2>
                              <div class="more">Learn more</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item">
                          <a href="products_2.php">
                            <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                            <div class="info">
                              <h2 class="title">Standards Soft Jaws 1.5mmx60°</h2>
                              <div class="more">Learn more</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item">
                          <a href="products_2.php">
                            <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                            <div class="info">
                              <h2 class="title">Standards Soft Jaws 1.5mmx60°</h2>
                              <div class="more">Learn more</div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="item">
                          <a href="products_2.php">
                            <div class="pic"><img src="../images/index/p.jpg" alt=""></div>
                            <div class="info">
                              <h2 class="title">Standards Soft Jaws 1.5mmx60°</h2>
                              <div class="more">Learn more</div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="exhibitionBox">
          <div class="outerBox">
            <div class="container">
              <div class="contentBox">
                <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">EXHIBITION</h2>
                <a href="exhibition.php" class="more wow fadeInUp" data-wow-delay="0.2s">SHOW ALL</a>
                <div class="box">
                  <div class="pic wow fadeInLeft" data-wow-delay="0.4s"><img src="../images/index/e.jpg" alt=""></div>
                  <div class="listBox wow fadeInRight" data-wow-delay="0.4s">
                    <? for ($i = 0; $i < 4; $i++) { ?>
                      <div class="item">
                        <a href="exhibition_detail.php" data-src="../images/index/e.jpg">
                          <h3 class="title">A More Compact Collet Chuck (Workholding) to Reduce Tool Interference</h3>
                          <div class="description">The collet chuck CL52-A6D is a new product designed for industry 4.0 which is a ...</div>
                        </a>
                      </div>
                    <? } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <section class="aboutBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="contentBox">
                <div class="info">
                  <div class="logo"><img src="../images/logo.svg" alt="Taiki Industrial Co., Ltd." /></div>
                  <div class="topInfo">is the epitome of excellence in Taiwanese<br />
                    <span>Soft Jaws and Accessories of Power Chuck</span> manufacturing.
                  </div>
                  <div class="description">
                    It has set up a Broaching Machine and CNC Machine Center which can broach and drill the best quality castings and get perfect shapes.
                  </div>
                </div>

                <div class="listBox">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="pic">
                          <img src="../images/index/a.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="pic">
                          <img src="../images/index/a.jpg" alt="">
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="pic">
                          <img src="../images/index/a.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="bottomPicBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="contentBox">
                <div class="pic">
                  <img src="../images/index/b1.jpg" alt="">
                </div>
                <div class="pic">
                  <img src="../images/index/b2.jpg" alt="">
                </div>
                <div class="pic">
                  <img src="../images/index/b3.jpg" alt="">
                </div>
                <div class="pic">
                  <img src="../images/index/b4.jpg" alt="">
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

  <script type="text/javascript">
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      pagination: {
        el: '.banner .swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
    });

    const productSwiper = new Swiper('.productBox .swiper', {
      // loop: true,
      slidesPerView: 1,
      navigation: {
        nextEl: '.productBox .swiper-button-next',
        prevEl: '.productBox .swiper-button-prev',
      },
      breakpoints: {
        700: {
          slidesPerView: 2,
        },
        1025: {
          slidesPerView: 3,
        },
        1300: {
          slidesPerView: 4,
        }
      }
    });

    const exhibitionBtn = document.querySelectorAll('.exhibitionBox .listBox a');
    const exhibitionPic = document.querySelector('.exhibitionBox .pic img');
    exhibitionBtn.forEach((value, index) => {
      value.addEventListener('mouseover', () => {
        const src = value.getAttribute('data-src');
        exhibitionPic.src = src;
      })
    })

    const aboutBoxSwiper = new Swiper('.aboutBox .swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
        disableOnInteraction: true,
      },
      pagination: {
        el: '.aboutBox .swiper-pagination',
        clickable: true,
      },
    });
  </script>
</body>

</html>