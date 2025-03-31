<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Cinema - Identification</title>
        <link rel="icon" href="./assets/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="../../public/css/loginStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="d-flex align-items-center justify-content-center vh-100">
        <form class="border" action="./connected.php" method="POST" value="form">
            <h3 class="text-center mb-4">My Cinema - Authentification Service</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">@ Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">* Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Enter password">
            </div>
            <div class="d-grid">
                <button id="button" type="submit" class="btn btn-primary">LOG IN</button>
            </div>
        </form>
        <script src="./script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
