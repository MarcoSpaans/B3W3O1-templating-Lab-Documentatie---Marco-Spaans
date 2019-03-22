<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <?php
      include 'navbar.php';
    ?>

    <div class="container">
      <?php include 'carousel.php'; ?>
    </div>

    <div class="container mt-5 pb-5 rounded bg-primary">
      <h1><i class="fas fa-grip-horizontal"></i> Gallery</h1>
      <div class="container">
        <div class="row">
          <div class="col-md">
            <img src="img/gallery1.png" alt="" width="400" height="250" class="rounded mx-auto d-block">
          </div>
          <div class="col-md">
            <img src="img/gallery2.png" alt="" width="400" height="250" class="rounded mx-auto d-block">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md">
            <img src="img/gallery3.png" alt="" width="400" height="250" class="rounded mx-auto d-block">
          </div>
          <div class="col-md">
            <img src="img/gallery4.png" alt="" width="400" height="250" class="rounded mx-auto d-block">
          </div>
        </div>
      </div>
    </div>

    <?php
      include 'footer.php';
     ?>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>