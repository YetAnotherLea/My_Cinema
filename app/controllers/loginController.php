<?php

require '../models/loginModel.php';

$checkAccountLogin = $checkAccount->getAccountRights();

require '../views/loginView.php';