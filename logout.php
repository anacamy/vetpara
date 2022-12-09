<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/User.php';

use \App\Session\User as SessionUser;

SessionUser::logout();
session_destroy();

header('location: index.php');
exit;