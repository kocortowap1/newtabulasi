<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TABULASI DATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>resources/images/logo.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/dist/css/skins/_all-skins.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/iCheck/flat/blue.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/morris/morris.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/jvectormap/jquery-jvectormap-1.2.2.css"> -->

    <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/datepicker/datepicker3.css">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>resources/cssku.css">
    <script src="<?php echo base_url();?>resources/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/plugins/datepicker/bootstrap-datepicker.js"></script>


    <script src="<?php echo base_url();?>resources/dist/js/app.min.js"></script>

    <script src="<?php echo base_url();?>resources/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>resources/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resources/plugins/select2/select2.full.min.js"></script>


</head>
<?php
    $nama_user = isset($master_data['nama']) ? $master_data['nama'] : 'Moh. Hyang Hidayat';
?>

    <body class="hold-transition skin-green-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="<?=site_url();?>" class="logo">
                    <span class="logo-mini">
                        <b>UNJ</b>
                    </span>
                    <span class="logo-lg">
                        <b>FORLAP - </b>UNUJA
                    </span>
                </a>
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?=base_url();?>/resources/images/noavatar.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">
                                        <?=$nama_user;?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?=base_url();?>/resources/images/noavatar.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            <?=$nama_user;?>
                                                <small>Web Master</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?=base_url();?>resources/images/noavatar.jpg" class="img-circle" />
                            <!--<img src="component/dist/img/user2-160x160.png " class="img-circle" alt="User Image" />-->
                        </div>
                        <div class="pull-left info">
                            <p style="font-size: 11pt;">Selamat Datang </p>
                            <a>
                                <i class="fa fa-circle text-success"></i>
                                <?=$nama_user;?>
                            </a>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="header">NAVIGASI UTAMA</li>
                        <li class="treeview">
                            <a href="#" id="dashboard" onclick="myMenu(this.id)">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Master</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="#" id="m_mahasiswa">
                                        <i class="fa fa-user"></i>
                                        <span>Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_mata_kuliah">
                                        <i class="fa fa-book"></i>
                                        <span>Mata Kuliah</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_dosen">
                                        <i class="fa fa-user"></i>
                                        <span>Dosen</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_lulusan">
                                        <i class="fa fa-user"></i>
                                        <span>Lulusan</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_tahun_ajaran">
                                        <i class="fa fa-user"></i>
                                        <span>Tahun Ajaran</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list"></i>
                                <span>Transaksi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#" id="m_kelas">
                                        <i class="fa fa-list"></i>
                                        <span>Kelas</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_krs">
                                        <i class="fa fa-list"></i>
                                        <span>KRS</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_nilai">
                                        <i class="fa fa-user"></i>
                                        <span>Nilai</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i>
                                <span>Import Data</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#" id="m_mahasiswa_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_mata_kuliah_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import Mata Kuliah</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_dosen_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import Dosen</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_kelas_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import Kelas</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_krs_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import KRS</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#" id="m_nilai_import">
                                        <i class="fa fa-user"></i>
                                        <span>Import Nilai</span>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" id="m_keluar">
                                <i class="fa fa-sign-out"></i>
                                <span>Keluar</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1 class="">Halaman
                        <small>
                            <i class="fa fa-arrow-right"></i>
                        </small>
                        <small id="nama_header"></small>
                    </h1>
                </section>
                <section class="content" id="isi_konten"></section>
            </div>
            <?=$body;?>
        </div>
    </body>

</html>