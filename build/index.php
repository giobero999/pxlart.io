<!DOCTYPE html>
<html lang="en">
  <?php include("common/head.php") ?>
  <body>
    <div id="preloader">
      <div id="status">
        &nbsp;
      </div>
    </div>
    <?php include("common/nav.php") ?>
    <div class="parallax parascroll">
      <div class="mobile visible-xs">
        <div class="row">
          <div class="col-md-12 bg-img">
            <img src="img/mobile.svg" alt="" class="img-responsive"/>
          </div>
        </div>
      </div>
      <div class="parallax-not-mobile hidden-xs">
        <div class="parallax-bg parallax-bg-1" id="para-bg"></div>
        <div class="parallax-bg parallax-bg-2"></div>
        <div class="parallax-bg parallax-bg-0">
          <div class="main-text">
            <h3 id="slogan">A medium defines the form and scale of a message and shapes its very meaning.<br>Truly, the Medium is the Message</h3>
          </div>
        </div>
        <div class="parallax-bg parallax-bg-3"></div>
        <div class="parallax-bg parallax-bg-4"></div>
        <div class="parallax-bg parallax-bg-4-1"></div>
        <div class="parallax-bg parallax-bg-4-2"></div>
        <div class="parallax-bg parallax-bg-5"></div>
        <div class="parallax-bg parallax-bg-8"></div>
        <div class="parallax-bg parallax-bg-6"></div>
        <div class="parallax-bg parallax-bg-7"></div>
      </div>

      <div class="parallax-cover">
        <section class="main-content">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="heading-light">
                  <h2>PixelArt – Medium is the message</h2>
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <p class="red-line"></p>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="description centered">
                  <p>
                  Whether you are a large corporation or coffee house on the corner, PixelArt puts a simple, yet powerful, Digital Signage (DS) Content Management System (CMS) at your disposal. With our CMS you can control and manage your DS from any device.
                  <br>
                  Unlike other CMS, Pixelart allows you to rent out your screens and earn additional revenue
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-one home-features">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 centered">
                <div class="heading-dark">
                  <h2>Main info</h2>
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <p class="red-line"></p>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <div class="description centered">
                  <p>
                    Unlike other CMS, Pixelart allows you to rent out your screens and earn additional revenue
                  </p>
                  <a href="./store.php">
                    <button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
                      More Apps
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <ul class="tablist main-tabs">
                  <li id="widget-nav">
                    <a href="#spliter" role="tab" data-toggle="tab" class="spliter active" ></a>
                  </li>
                  <li id="widget-nav">
                    <a href="#weather" role="tab" data-toggle="tab" class="weather" ></a>
                  </li>
                  <li id="widget-nav">
                    <a href="#kibana" role="tab" data-toggle="tab" class="kibana" ></a>
                  </li>
                  <li id="widget-nav">
                    <a href="#menu" role="tab" data-toggle="tab" class="menu" ></a>
                  </li>
                  <li id="widget-nav">
                    <a href="#bloomberg" role="tab" data-toggle="tab" class="video" ></a>
                  </li>
                </ul>
              </div>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="spliter">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="tv">
                        <div class="tv-info">
                          <video class="wgt-youtube" id="" class="embed-responsive embed-responsive-16by9 wgt-spliter" autoplay loop>
                            <source src="img/home-page/youtube.mp4" type="video/mp4" >
                          </video>
                          <img src="img/home-page/weather2.png" alt="" class="img-responsive vert-weather" />
                          <div class="currency">
                            <div class="exchange">
                              <img src="img/home-page/dollar.png" alt="" class="img-responsive" />
                            </div>
                            <div class="scrolling-text">
                              <h3 class="marquee">
                                <img src="./img/home-page/currency.png" alt="">
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="weather">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="tv">
                        <div class="tv-info">
                          <img src="img/home-page/weather-video.gif" alt="" class="img-responsive wgt-weather" width="100%"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="kibana">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="tv">
                        <div class="tv-info">
                          <img src="img/home-page/kibana_dashboard.png" alt="" class="img-responsive wgt-kibana" width="100%"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="menu">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="tv">
                        <div class="tv-info">
                          <img src="./img/home-page/menu2.svg" alt="" class="hidden-sm hidden-md hidden-lg">
                          <div class="wgt-menu hidden-xs">
                            <img src="img/home-page/menu/salads.png" alt="" class="salads"/>
                            <img src="img/home-page/menu/fishes.png" alt="" class="fishes"/>
                            <img src="img/home-page/menu/deserts.png" alt="" class="deserts"/>
                            <img src="img/home-page/menu/soups.png" alt="" class="soups"/>
                            <img src="img/home-page/menu/pizza.png" alt="" class="pizza"/>
                            <img src="img/home-page/menu/burgers.png" alt="" class="burgers"/>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="bloomberg">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      <div class="tv">
                        <div class="tv-info">
                          <video class="wgt-bloomberg" id="video">
                            <source src="img/home-page/bloomberg.mp4" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-two">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 centered">
                <div class="heading-dark">
                  <h2>Software features</h2>
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <p class="red-line"></p>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <div class="description centered">
                  <p>
                    Unlike other CMS, Pixelart allows you to rent out your screens and earn additional revenue
                  </p>
                  <a href="./software.php#software">
                    <button type="button" class="btn btn-danger" data-toggle="button" aria-pressed="false" autocomplete="off">
                      about software
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="container software-els">
            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <div class="single-feature">
                  <div class="centered">
                    <img src="./img/icons/layout.svg" class="icon-split">
                    <h3 class="feature-title centered">spliting</h3>
                  </div>
                  <p class="feature-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit irure dolor in irure dolor in irure dolor in irure dolor in
                  </p>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="single-feature">
                  <div class="centered">
                    <img src="./img/icons/timing.svg" class="icon-timing">
                    <h3 class="feature-title centered">timing</h3>
                  </div>
                  <p class="feature-desc">
                  ed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in
                  </p>
                </div>
              </div>
            </div>
            <div class="clearfix padding20"></div>
            <div class="row">
              <div class="col-md-4 col-md-offset-2">
                <div class="single-feature">
                  <div class="centered">
                    <img src="./img/icons/collaboration.svg" class="icon-assets" >
                    <h3 class="feature-title centered">Grouping</h3>
                  </div>
                  <p class="feature-desc">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="single-feature">
                  <div class="centered">
                    <img src="./img/icons/monitoring.svg" class="icon-monitoring">
                    <h3 class="feature-title centered">monitoring</h3>
                  </div>
                  <p class="feature-desc">
                    sunt in culpa qui officia deserunt mollit anim id est laborum. labore et dolore magna aliqua. Duis aute irure dolor in
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section-three">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 centered">
                <div class="heading-dark">
                  <h2>Connect your screen</h2>
                </div>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <p class="red-line"></p>
              </div>
              <div class="col-md-6 col-md-offset-3">
                <div class="description centered">
                  <p>
                     You can connect various players to PixelArt CMS, both professional media players and consumer devices like Google Chromecast, Amazon Fire TV stick and Intel stick
                  </p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 heading centered half-colomn">
                <div class="owl-carousel owl-theme feature-slider">
                  <div class="row slide-el">
                    <div class="col-md-3 col-md-offset-1">
                       <div class="slide-el-text">
                         <h3>
                           Molestiae, sequi. Voluptates magnam mollitia alias libero aliquam
                         </h3>
                       </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slide-el-img">
                        <img src="img/home-page/heatmap-2.png" class="img-responsive"/>
                      </div>
                    </div>
                  </div>
                  <div class="row slide-el">
                    <div class="col-md-3 col-md-offset-1">
                      <div class="slide-el-text">
                        <h3>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  laborum.
                        </h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slide-el-img">
                        <img src="img/home-page/heatmap.png" class="img-responsive"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include("common/footer.php") ?>
      </div>
    </div>
  </body>
</html>
