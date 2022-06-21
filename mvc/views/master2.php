<?php
if (isset($_SESSION['user']) && $_SESSION['user']) {
} else {
    header('Location: ' . _WEB_HOST_ROOT . '/Login');
}
require_once 'block/header.php';
require_once 'pages/' . $data['page'] . '.php';
require_once 'block/footer.php';
