<?php
//Va chercher mes routes
if ($route == 'home') {
    require 'app/views/home.php';
} elseif($route == 'users') {
    require 'app/controllers/userController.php';
}