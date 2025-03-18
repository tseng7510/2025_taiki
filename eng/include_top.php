<button type="button" class="mobileBtn"><span>MENU</span></button>
<div class="headerBox">
  <div class="outerBox">
    <div class="container">
      <div class="contentBox">
        <div class="logo" itemprop="headline"><a href="index.php" itemprop="url"><img src="../images/logo.svg" alt="Taiki Industrial Co., Ltd." /></a>
        </div>

        <div class="menuBox">
          <?php include('include_menu.php'); ?>
        </div>

        <div class="topNav">

          <div class="menuSearch">
            <button class="btn" type="button"></button>
            <div class="searchOuter">
              <div class="searchClose"></div>
              <div class="searchBox">
                <input type="text" class="form-control" name="search" placeholder="Search">
              </div>
              <button class="searchBtn" type="submit" onclick="javascript:location.href='products_search.php'"></button>
            </div>
          </div>

          <nav class="language">
            <button class="btn" type="button" title="Language"></button>
            <ul>
              <li><a href="#">繁中</a></li>
              <li><a href="#">EN</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>