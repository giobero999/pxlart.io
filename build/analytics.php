<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ?>
<body>
  <?php include("common/nav.php") ?>
    <div class="content" id="analitycs">
      <section class="slider">
        <div class="header-text">
          <h1>analytics</h1>
        </div>
        <div class="slider-img">
          <div class="mask"></div>
        </div>
      </section>
      <section class="section-one">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 centered">
              <div class="heading-dark">
                <h2>Bar chart</h2>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
              <p class="red-line"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <canvas id="bar-chart"></canvas>
            </div>
            <div class="col-md-4">
              <h2>Measure Impressions To Calculate Media Exposure & Reach</h2>
              <p>
                Simply plug & play the LINKETT sensor to start passively recognizing smartphones and accurately measure your audience exposure.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-two">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="heading-dark">
                <h2>bar chart 2</h2>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
              <p class="red-line"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h2>Measure Impressions To Calculate Media Exposure & Reach</h2>
              <p>
                Simply plug & play the LINKETT sensor to start passively recognizing smartphones and accurately measure your audience exposure.
              </p>
            </div>
            <div class="col-md-8">
              <canvas id="bar-chart2"></canvas>
            </div>
          </div>
        </div>
      </section>
      <section class="section-three">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="heading-dark">
                <h2>pie charts</h2>
              </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
              <p class="red-line"></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <canvas id="pie-chart"></canvas>
            </div>
            <div class="col-md-4">
              <canvas id="pie-chart2"></canvas>
            </div>
            <div class="col-md-4">
              <canvas id="pie-chart3"></canvas>
            </div>
          </div>
        </div>
      </section>

    </div>
    <?php include("common/footer.php") ?>

  </body>
</html>
