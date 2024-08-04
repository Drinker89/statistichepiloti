<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php
        require("functions.php");
        ?>
  </head>
  <body>
    <div class="container mt-5 mb-5 bg-dark align-middle">
        <div class="row no-gutters">
            <div class="col-md-4"><img src="https://i.ibb.co/D8M6FDb/973-Mark-Snipers.png"></div>
            <div class="col-lg-6 d-flex flex-row justify-content-between align-items-center p-5 bg-dark text-white">
                <h3 class="display-3">Marco Cecchini "Snipers"</h3></div>
            <div class="col-md-12 col-lg-12">
                <div class="d-flex flex-column"> 
                    <div class="d-flex flex-row text-white">
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Gare Disputate</h4>
                            <h4><?php echo "$valuegare" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Giri Completati</h4>
                            <h4><?php echo "$valuelaps" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>KM percorsi</h4>
                            <h4><?php echo "$valuekm" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Ritiri</h4>
                            <h4><?php echo "$valuednf" ?></h4>
                        </div>
                    </div>
                    <div class="d-flex flex-row text-white">
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Vittorie</h4>
                            <h4><?php echo "$valuewin" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Podi</h4>
                            <h4><?php echo "$valuepodium" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Top 5</h4>
                            <h4><?php echo "$valuefive" ?></h4>
                        </div>
                        <div class="p-3 text-center skill-block align-bottom justify-content-between align-items-bottom">
                            <h4>Giro Veloce</h4>
                            <h4><?php echo "$valuefl" ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



   
</body>
</html>