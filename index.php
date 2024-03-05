<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <?php
    session_start();
    include './partials/header.php';
  ?>
  <title>Blog Homepage</title>
</head>
<body>
  <?php
    include './partials/nav.php';
  ?>
  <div class="container-fluid banner d-flex">
    <div class="d-flex flex-column align-items-center justify-content-center">
      <h1 class="text-center rubik">Stop Femicide</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate quos similique illum ipsam? Debitis reiciendis magni recusandae praesentium repellendus alias, eum distinctio fugit? Ad dolore dignissimos itaque deserunt, cumque perferendis.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col align-self-center">
        <h2 class="text-center">Our Motivation</h2>
      </div>
    </div>
    <div class="row">
      <div class="col align-self-start">
        <img src="images/391753.png" alt="Stop Gender-based violence" class="img-fluid">
      </div>
      <div class="col align-self-center">
        <!--  -->
      </div>
      <div class="col align-self-end">
       <img src="images/sgbv-1024x683-1.png" alt="Stop violence" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- <div class="container"> -->
    <?php
      include './partials/footer.php';
    ?>
  <!-- </div> -->

</body>
</html>
