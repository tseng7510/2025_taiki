<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="outerBox">
          <div class="container">
            <div class="contentBox">
              <div class="title">CONTACT</div>
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
                    <span itemprop="name">Contact</span>
                    <meta itemprop="position" content="2">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <section>

          <div class="outerBox">
            <div class="container">
              <div class="contentBox">


                <div class="inquiry">
                  <div class="inquiryList">
                    <table>
                      <thead>
                        <tr>
                          <th>Product name</th>
                          <th>CATEGORY</th>
                          <th>Quantity</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img src="../images/index/p.jpg" alt=""></td>
                          <td><span>Soft Jaws For Hydraulic Chucks</span>
                            Soft Jaws - Extra Width Type</td>
                          <td>
                            <div class="qtyBox">
                              <button class="btn less"></button>
                              <input type="text" class="qty form-control" value="1">
                              <button class="btn add"></button>
                            </div>
                          </td>
                          <td>
                            <button class="del">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="bottomBox">

                  <div class="description wow fadeInUp" data-wow-delay="0.2s">In order to improve the service quality, please fill in the fields below to send an inquiry message.<span>(※ is a required field)</span></div>
                  <form class="formBox wow fadeInUp" data-wow-delay="0.4s">
                    <ul>
                      <li class="inputItem wow fadeInUp required">
                        <label for="type">Company Name</label>
                        <input type="text" class="inputControl" id="company">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="company">Contact Person</label>
                        <input type="text" class="inputControl" id="name">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="email">E-Mail</label>
                        <input type="text" class="inputControl" id="email">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="tel">Tel</label>
                        <input type="text" class="inputControl" id="tel">
                      </li>
                      <li class="inputItem wow fadeInUp">
                        <label for="fax">Fax</label>
                        <input type="text" class="inputControl" id="fax">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="country">Country</label>
                        <input type="text" class="inputControl" id="country">
                      </li>
                      <li class="textareaItem full wow fadeInUp required">
                        <label for="message">Message</label>
                        <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                      </li>
                      <li class="inputItem wow fadeInUp verificationCode required">
                        <label for="verificationCode">Code</label>
                        <div class="box">
                          <input class="inputControl" id="verificationCode" maxlength="4">
                          <span class="checkImg"><img src="../images/check_img.jpg"></span>
                          <button class="reBtn"></button>
                        </div>
                      </li>
                      <div class="pageBtnBox wow fadeInUp">
                        <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">SUBMIT</button>
                      </div>
                    </ul>
                  </form>
                </div>

                <div class="infoBox">
                  <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">Sales Network</h1>
                  <div class="topInfo wow fadeInUp" data-wow-delay="0.2s">Over the past 40 years, TAIKI has built a worldwide network in America, Europe, Oceania, and Asia.<br />
                    Our products are recognized and preferred by both domestic and international corporations.
                    We aim to develop top-notch products and understand customers’ needs to create a win-win situation in business.
                    TAIKI will continue to strengthen its global support for diversifying demands across the world.
                  </div>
                </div>

                <div class="pic">
                  <picture>
                    <source srcset="../images/in/map.gif" media="(min-width: 768px)">
                    <img src="../images/in/map.gif" alt="">
                  </picture>
                </div>

                <div class="infoBox">
                  <h1 class="pageTitle wow fadeInUp" data-wow-delay="0s">Taiki Industrial Co., Ltd.</h1>
                  <div class="info wow fadeInUp" data-wow-delay="0.2s"><i></i>
                    <div class="address">No.11, Lane 468, Wufu Rd, Wufeng Dist., Taichung City, 413011, Taiwan.</div>
                    <ul>
                      <li class="tel"><span>TEL：</span><a href="tel:+8864423333088">+886-4-2333-3088</a></li>
                      <li class="fax"><span>FAX：</span>+886-4-2333-3087</li>
                      <li class="mail"><span>E-mail：</span><a href="mailto:taiki-jaws@umail.hinet.net">taiki-jaws@umail.hinet.net</a></li>
                    </ul>
                  </div>
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