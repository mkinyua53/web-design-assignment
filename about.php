<!DOCTYPE html>
  <html lang="en" data-bs-theme="dark">
    <head>
      <?php
        session_start();
        include './partials/header.php';
      ?>
      <title> About us </title>
    </head>
    <body>
      <?php
        include './partials/nav.php';
      ?>
      <section>
        <div class="text-center">
          <img src="images/about.jpg" class="img-fluid">
          <div class="about-text">
            <h1> About Us</h1>
            <h5> Gender based violence </h5>
            <p> We promote gender equality and empower women,girls and young people to take control of their life and
              their futures, our goal is ending unmet need for family planning, preventable maternal death and harmful
              practices including child marriage and female genital mutilation
              <p />
            <h6> Ensuring rights and choices for all </h6>
          </div>
      </section>
    </body>
    <?php
      include './partials/footer.php';
    ?>
  </html>
