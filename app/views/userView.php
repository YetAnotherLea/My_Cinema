<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cinema - Users</title>
    <link rel="icon" href="./assets/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/userStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">My Cinema</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link" href="../controllers/movieController.php">Movies</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../controllers/userController.php">Users</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../controllers/subController.php">Subscriptions</a>
              </li>
          </ul>
        </div>
    </div>
    </nav>

    <!--TABLE MOVIES-->
    <div id="container_tab-bar" class="container d-flex justify-content-center">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <div class="container d-flex justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($checkUserData as $user) {
              echo "<tr>";
                echo "<td>" . $user['id'] . "</td>";
                echo "<td>" . $user['firstname'] . "</td>";
                echo "<td>" . $user['lastname'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
