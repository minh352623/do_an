<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/base.css' ?>">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/register.css' ?>">

    <title>Document</title>
</head>


<body>
    <video loop autoplay muted id="bg-video">
        <source src="../../live/public/image/video.mp4" type="video/mp4" />

    </video>
    <?php
    require_once "./mvc/views/pages/" . $data['page'] . ".php";
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="<?php echo  _WEB_HOST_TEMPLATE . '/js/register.js' ?>" type="text/javascript"></script>
    <script src="<?php echo  _WEB_HOST_TEMPLATE . '/js/login.js' ?>" type="text/javascript"></script>

</body>

</html>