<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <link rel="shortcut icon" href="./img/icons/favicon.ico" type="image/x-icon">

    <title>Hokage 2.0</title>
  </head>
  <body>
    <main>
      <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./banner.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./navbar.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
          <?php 
            if (isset($_GET["content"])) {
              include("./" . $_GET["content"] . ".php");
            } else {
              include("./home.php");
            }
          ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0 fixed-bottom">
        <div class="row">
          <div class="col-12">
            <?php include("./footer.php"); ?>
          </div>
        </div>
      </section>


    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./js/app.js">
  </body>
</html>