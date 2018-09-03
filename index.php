<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <title>Exercice 4</title>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center bg-dark text-white">
              <div class="col-md-12">
                  <p>
                      <?php
                      setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                      echo strftime('%A %d %B %Y', mktime(15, 0, 0, '7', '27', '18'));
                      ?>
                      <br />
                      <?php
                      echo strftime('%A %d %B %Y %T', mktime(15, 0, 0, '8', '2', '16'));
                      //echo datetime('2018-07-28');
                      ?>
                  </p>
              </div>
          </div>
      </div>
  </body>
</html>
