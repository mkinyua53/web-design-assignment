<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <?php
    session_start();
    include './partials/header.php';
  ?>
  <title>Contact Us</title>
</head>
<body>
  <?php
    include './partials/nav.php';
  ?>
  <div class="container">
    <h1 class="text-center">Contact Us</h1>
    <!-- two columns in sm and up -->
    <div class="row align-items-center">
      <div class="col-sm-12 col-md-6 col-xl-6">
        <div class="card">
          <div class="card-header">Map</div>
          <div class="card-body">
            <div style="overflow:hidden;max-width:100%;width:500px;height:500px;">
              <div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Mount+Kenya+University-Mombasa+Campus,+Nkurumah+Road,+Mombasa,+Kenya&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
              </div>
              <a class="from-embedmap-code" href="https://www.bootstrapskins.com/themes" id="grab-map-data">premium bootstrap themes</a>
              <style>
                #my-map-canvas .text-marker{
                  clear: both;
                }
                .map-generator {
                  max-width: 100%;
                  max-height: 100%;
                  background: none;
                }
              </style>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-xl-6">
        <div class="card">
          <div class="card-body">
            <p>
              <!-- icon -->
              <i class="fa fa-envelope"></i>
              info@group.com
            </p>
            <p>
              <!-- icon -->
              <i class="fa fa-phone"></i>
              +254 712 345 678
            </p>
            <p>
              <!-- icon -->
              <i class="fa fa-map-marker"></i>
              Mount Kenya University-Mombasa Campus, Nkurumah Road, Mombasa, Kenya
            </p>
            <p>
              <!-- icon -->
              <i class="fa fa-globe"></i>
              www.group.com
            </p>
          </div>
        </div>
      </div>
  </div>

  <?php
    include './partials/footer.php';
  ?>
</body>
</html>
