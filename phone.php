<!-- controller -->
<?php
include_once "model/functionJSON.php";
$filename = 'model/Mobile.json';
$obj_name = new mobile();
$result = $obj_name->GETFN($filename);
// print_r ($result);
?>
<?php
foreach ($result as $val) {
  ?>
  <!-- view -->
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    </style>
  </head>

  <body>

    


      <div class="grid">
        <div class="card-group">
          <div class="card m-5  ">
            <img src="<?= $val->imgMobile; ?>" class="card-img">
            <div class="card-body">
              <h4 class="card-title">
                <?= $val->name; ?>
              </h4>
              <p class="card-text">
              <h5>
                <?= $val->SaleMobile; ?>
                <br></br>
                <a href="detailPhone.php?id=<?= $val->ID; ?>" class="btn ">รายละเอียดเพิ่มเติม</a>
              </h5>
              </p>

            </div>
          </div>
        </div>















  </body>

  </html>
  <?php
}
?>