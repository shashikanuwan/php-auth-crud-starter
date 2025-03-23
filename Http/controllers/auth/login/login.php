<?php

use Core\Session;

require view('auth/login.view.php', [
    'errors' => Session::get('errors')
]);