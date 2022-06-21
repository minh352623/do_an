<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Theme style -->
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/adminlte.min.css' ?>">
    <!-- overlayScrollbars -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css//OverlayScrollbars.min.css' ?>">

    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE . '/css/admin_main.css' ?>">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">




                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block" style="font-size:20px;">Admin</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class=" form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo _WEB_HOST_ROOT . '/Admin' ?>" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Trang chủ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo _WEB_HOST_ROOT . '/Admin/danhmuc' ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh mục sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo _WEB_HOST_ROOT . '/Admin/sanpham' ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sản Phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo _WEB_HOST_ROOT . '/Admin/user' ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách tài khoản</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php require_once './mvc/views/admin/' . $data['page'] . '.php' ?>

        </div>



    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo _WEB_HOST_TEMPLATE . '/js/jquery.min.js' ?>"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo _WEB_HOST_TEMPLATE . '/js//adminlte.js' ?>"></script>



</body>

</html>