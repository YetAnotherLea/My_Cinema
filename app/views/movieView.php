<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>My Cinema - Movies</title>
      <link rel="stylesheet" href="../../public/css/movieStyle.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary" aria-label="Website Nav">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="../../index.php">My Cinema</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../controllers/movieController.php">Movies</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../controllers/userController.php">Users</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../controllers/subController.php">Subscriptions</a>
              </li>
          </ul>
        </div>
    </div>
    </nav>

    <div class="container col-md-8">
      <div class="row">
        <div class="col-md-12">
          <div class="card-header">
            <h2>Movies</h2>
          </div>
          <div class="card-body">
            <!--PAGINATION-->
            <nav aria-label="Pagination nav">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>

            <!--SEARCH BAR-->
            <div class="row">
              <div class="col-md-7">
                <div class="input-group mb-3">
                  <form method="GET" action="">
                    <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}; ?>" class="form-control" placeholder="Search your movie name">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        
            <!--TABLE MOVIES-->
            <div class="container d-flex justify-content-center">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Distributor</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if(isset($_GET['search'])) {
                    $filterMovieName = $_GET['search'];
                    $query = "SELECT * FROM `movie_genre_distributor` WHERE `movie_title` LIKE '$filterMovieName%'";
                    foreach ($getMovie as $movie) {
                      echo '<tr>';
                        echo '<td>' . $movie['movie_id'] . '</td>';
                        echo '<td>' . $movie['movie_title'] . '</td>';
                        echo '<td>' . $movie['genre_name'] . '</td>';
                        echo '<td>' . $movie['distributor_name'] . '</td>';
                      echo '</tr>';
                    }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>