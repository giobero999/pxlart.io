<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ?>
<body>
  <?php include("common/nav.php") ?>
    <div class="content" id="contact">
      <section class="slider">
        <div class="" id="map"></div>
        <div class="mask"></div>
      </section>
      <section class="section-one">
        <div class="container">
          <div class="information">
            <div class="contact-with-us phone">
              <h4 class="text-center">
                <span class="fa fa-phone"></span>
              </h4>
              <p>+44 20 8144 3258</p>
            </div>
            <div class="contact-with-us address">
              <h4 class="text-center">
                <span class="fa fa-map-marker"></span>
              </h4>
              <p>Regents Park Road, NW1 8XL</p>
              <p>London, UK</p>
            </div>
            <div class="contact-with-us email">
              <h4 class="text-center">
                <span class="fa fa-envelope-o"></span>
              </h4>
              <p>pxlart@gmail.com</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <form class="" action="contact.php" method="post">
                <div class="contact-form">
                  <div>
                    <h4 class="text-center">Any Questions?</h4>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="John Do" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="Email" class="form-control" id="name" placeholder="example@mail.com" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="textarea">Question</label>
                        <textarea class="form-control" id="textarea"  rows="6" placeholder="Your Question" required></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pull-right">
                        <button type="submit" name="send" class="btn btn-success">Send It</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    </div>
    <?php include("common/footer.php") ?>

  </body>
</html>
