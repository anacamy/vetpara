<?php

use App\Session\User;

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/User.php';

include __DIR__.'/includes/hedder.php';
include User::isLogged() ? __DIR__.'/includes/admin.php':__DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';