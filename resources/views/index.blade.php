<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - PLN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href={{Asset("assets/img/pln.jpg")}} rel="pln">
  <link href={{Asset("assets/img/pln.jpg")}} rel="pln">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href={{Asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/quill/quill.snow.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/quill/quill.bubble.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{Asset("assets/vendor/simple-datatables/style.css")}} rel="stylesheet">

  <link href={{Asset("assets/css/style.css")}} rel="stylesheet">

</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src={{Asset("assets/img/pln.jpg")}} alt="">
        <span class="d-none d-lg-block">PLN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">2</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 2 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Penginstalan Baru</h4>
                <p>Penginstalan CCTV baru di lokasi Anda telah berhasil dilakukan.</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Pemeliharaan Sistem</h4>
                <p>Pemeliharaan Sistem CCTV Demi meningkatkan kualitas layanan, kami akan melakukan pemeliharaan sistem pada tanggal 20 Oktober 2024. Selama waktu ini, akses ke fitur monitoring mungkin akan terganggu.</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src={{Asset("assets/img/person.jpg")}} alt="" class="rounded-circle">
                <div>
                  <h4>Bellingham</h4>
                  <p>...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src={{Asset("assets/img/person.jpg")}} alt="" class="rounded-circle">
                <div>
                  <h4>Eva</h4>
                  <p>...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src={{Asset("assets/img/person.jpg")}} alt="" class="rounded-circle">
                <div>
                  <h4>Melly</h4>
                  <p>...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul>

        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src={{Asset("assets/img/person.jpg")}} alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Administration</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin/login">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

  </header>

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="masterdata_datauser.html">
              <i class="bi bi-circle"></i><span>Data User</span>
            </a>
          </li>
          <li>
            <a href="masterdata_datainspeki.html">
              <i class="bi bi-circle"></i><span>Data Inspeksi</span>
            </a>
          </li>
          <li>
            <a href="masterdata_datadevice.html">
              <i class="bi bi-circle"></i><span>Data Device</span>
            </a>
          </li>
          <li>
            <a href="masterdata_datakategori.html">
              <i class="bi bi-circle"></i><span>Data Kategori</span>
            </a>
          </li>
          <li>
            <a href="masterdata_datalokasi.html">
              <i class="bi bi-circle"></i><span>Data Lokasi</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporan_hasilpm.html">
              <i class="bi bi-circle"></i><span>Hasil PM CCTV</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Sign Out</span>
        </a>
      </li>

    </ul>

  </aside>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
  </main>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #343a40;
        }
        .camera-feed {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .camera-title {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .camera-frame {
            width: 100%;
            height: 250px;
            background-color: #000;
            border-radius: 5px;
        }
        .stat-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
    </style>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="camera-feed">
                        <h5 class="camera-title">Camera 1</h5>
                        <div class="camera-frame">
                        </div>
                    </div>
                    <div class="camera-feed">
                        <h5 class="camera-title">Camera 2</h5>
                        <div class="camera-frame">
                        </div>
                    </div>
                    <div class="camera-feed">
                        <h5 class="camera-title">Camera 3</h5>
                        <div class="camera-frame">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="stat-box">
                        <h5>System Statistics</h5>
                        <p>Total Cameras: 10</p>
                        <p>Active Cameras: 8</p>
                        <p>Last Updated: 10 mins ago</p>
                    </div>
                    <div class="stat-box">
                        <h5>Security Alerts</h5>
                        <ul>
                            <li>Camera 3 - Low Signal</li>
                            <li>Camera 7 - Motion Detected</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PLN</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">Me</a>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src={{Asset("assets/vendor/apexcharts/apexcharts.min.js")}}></script>
  <script src={{Asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{Asset("assets/vendor/chart.js/chart.umd.js")}}></script>
  <script src={{Asset("assets/vendor/echarts/echarts.min.js")}}></script>
  <script src={{Asset("assets/vendor/quill/quill.js")}}></script>
  <script src={{Asset("assets/vendor/simple-datatables/simple-datatables.js")}}></script>
  <script src={{Asset("assets/vendor/tinymce/tinymce.min.js")}}></script>
  <script src={{Asset("assets/vendor/php-email-form/validate.js")}}></script>

  <script src={{Asset("assets/js/main.js")}}></script>

</body>

</html>
