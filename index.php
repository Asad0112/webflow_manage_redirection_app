<?php

header('ngrok-skip-browser-warning', 1233);
error_reporting(1);
ini_set('display_errors', true);

require_once('config/app.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title><?= APP_NAME; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <a href="<?= AUTHORIZATION_URL; ?>?response_type=<?= RESPONSE_TYPE; ?>&client_id=<?= CLIENT_ID; ?>&scope=<?= SCOPES ?>" class="btn btn-primary mt-2">Authorize Webflow</a>
    </div>
</body>

</html>