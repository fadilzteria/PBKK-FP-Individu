<?php

$router = $di->getRouter();

// user
$router->add('/user/login', ['controller' => 'user', 'action' => 'login']);
$router->add('/user/login/submit', ['controller' => 'user', 'action' => 'loginSubmit']);
$router->add('/user/register', ['controller' => 'user', 'action' => 'register']);
$router->add('/user/register/submit', ['controller' => 'user', 'action' => 'registerSubmit']);
$router->add('/user/profile', ['controller' => 'user', 'action' => 'profile']);
$router->add('/user/logout', ['controller' => 'user', 'action' => 'logout']);
$router->add('/user/edit', ['controller' => 'user', 'action' => 'edit']);
$router->add('/user/edit/submit', ['controller' => 'user', 'action' => 'editSubmit']);

// kamar
$router->add('/kamar', ['controller' => 'kamar', 'action' => 'index']);

// reservasi
$router->add('/reservation/checkin', ['controller' => 'reservation', 'action' => 'checkin']);
$router->add('/reservation/checkin/submit', ['controller' => 'reservation', 'action' => 'checkinSubmit']);
$router->add('/reservation/bayar', ['controller' => 'reservation', 'action' => 'bayar']);
$router->add('/reservation/bayar/submit', ['controller' => 'reservation', 'action' => 'bayarSubmit']);
$router->add('/reservation/komentar', ['controller' => 'reservation', 'action' => 'komentar']);
$router->add('/reservation/komentar/submit', ['controller' => 'reservation', 'action' => 'komentarSubmit']);
$router->add('/reservation/checkout', ['controller' => 'reservation', 'action' => 'checkout']);
$router->add('/reservation/checkout/submit', ['controller' => 'reservation', 'action' => 'checkoutSubmit']);
$router->add('/reservation/tamu', ['controller' => 'reservation', 'action' => 'tamu']);

$router->handle($_SERVER['REQUEST_URI']);
