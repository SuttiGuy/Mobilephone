<!-- controller -->
<?php
include_once("model/functionJSON.php");

$id = isset($_GET["id"]) ? htmlspecialchars($_GET["id"]) : NULL;
$filename = 'model/Mobile.json';
$obj_name = new mobile();
$rs2 = $obj_name->GETFN($filename);
$BCode = $id - 1;
?>
<!-- view -->
<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="css/style.css">
  <title>Mobile</title>
</head>

<body>


  <div class="container">
    <div class="content2 ">
      <div calss="class=" d-flex justify-content-around"">
        <h3>รายละเอียดเพิ่มเติม
          </h3>
          
        </div>
      
      <div class="detail">
        <div class="d-flex justify-content-end">
          <div class=" col-lg d-none d-lg-block">
            <h3>
              <h1>
                <?= $rs2[$BCode]->name ?>
              </h1>
              <img src="<?= $rs2[$BCode]->imgMobile ?>" alt="Avatar" style width="277.6" height="277.6">
              <p>OSMobile:
                <?= $rs2[$BCode]->OSMobile ?>
              </p>
              <p>Ram:
                <?= $rs2[$BCode]->ramMobile ?>
              </p>
              <p>Rom:
                <?= $rs2[$BCode]->romMobile ?>
              </p>
              <p>BatteryMobile:
                <?= $rs2[$BCode]->BatteryMobile ?>
              </p>
              <p>Price:
                <?= $rs2[$BCode]->SaleMobile ?>
              </p>
            </h3>
          </div>
        </div>
        <a href="phone.php" class="btn ">Back</a>
      </div>
    </div>
</body>

</html>