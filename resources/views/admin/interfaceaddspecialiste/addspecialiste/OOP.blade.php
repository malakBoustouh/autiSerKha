<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>تسجيل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="dist/css/custom-style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand  navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>

        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Messages Dropdown Menu -->
            <img src="dist/img/logoautisme.png" >

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/admin.png">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">عصام الدين شايب</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>
                                    التسجيلات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./addspec.html" class="nav-link ">
                                        <i class="fa fa-user-md nav-icon"></i>
                                        <p>المشخصين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./addtraitant.html" class="nav-link active">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>المعالجين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./addchild.html" class="nav-link">
                                        <i class="fa fa-child nav-icon"></i>
                                        <p>الأطفال</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    قائمة المسجلين
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="fa fa-user-md nav-icon"></i>
                                        <p>المشخصين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        <p>المعالجين</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/data.html" class="nav-link">
                                        <i class="fa fa-child nav-icon"></i>
                                        <p>الأطفال</p>
                                    </a>
                                </li>
                            </ul>

                        <li class="nav-item has-treeview">
                            <a href="statistics.html" class="nav-link">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    احصائيات
                                    <i class="right"></i>
                                </p>
                            </a>
                        <li class="nav-item">
                            <a href="calendar.html" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    المواعيد
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="lien" class="nav-link"  data-toggle="modal" data-target="#myModal1">
                                <i class="nav-icon fa fa-sign-out"></i>
                                <p>
                                    تسجيل الخروج
                                </p>
                            </a>
                        </li>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">اضافة معالج</h1>
                    </div><!-- /.col -->

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card card-default">
                        <form role="form">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <img id="traitant" src="dist/img/teacher.png" height=100 width=100><br>
                                <input id="traitantpic" type="button" value=  " صورة المعالج" onclick="document.getElementById('t').click();" />
                                <input type="file" style="display:none;" id="t" name="file"/>
                                <div class="row">
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>اللقب :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>الإسم :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>  تاریخ الميلاد :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                                <input type="email" class="form-control ltr" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <div class="form-group">
                                            <label>العنوان  :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>التخصص :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>

                                        </div>
                                        <div class="form-group">

                                            <label>رقم الهاتف :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>البريد الإلكتروني :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label> كلمة المرور :</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                                    </span>

                                                </div>
                                                <input type="text" class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button type="submit" class="btn btn-primary" >تسجيل</button>
            </section>
        </div>
        <div class="modal fade" id="myModal1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">تسجيل الخروج</h4>
                        <button type="button" class="exit" data-dismiss="modal">×</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        هل أنت متأكد؟
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="/logout" class="btn btn-primary">خروج</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./wrapper -->
        <script>
            window.addEventListener('load', function() {
                document.querySelector('#t').addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        var img = document.querySelector('#traitant');
                        img.src = URL.createObjectURL(this.files[0]);
                        img.onload = imageIsLoaded;
                    }
                });
            });
        </script>
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
</body>
</html>
