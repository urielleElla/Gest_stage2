<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon.png"
    />
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <link href="dist/css/transition-style.css" rel="stylesheet" />
    <!-- This Page CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/extra-libs/prism/prism.css"
    />
  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-theme="light"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed"
      data-boxed-layout="full"
    >
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
          <div class="navbar-header" data-logobg="skin6">
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ti-menu ti-close"></i
            ></a>
            <div class="navbar-brand">
              <!-- Logo icon -->
              <a href="index.html">
                <b class="logo-icon">
                  <!-- Dark Logo icon -->
                  <img
                    src="assets/images/logo-icon.png"
                    alt="homepage"
                    class="dark-logo"
                  />
                  <!-- Light Logo icon -->
                  <img
                    src="assets/images/logo-icon.png"
                    alt="homepage"
                    class="light-logo"
                  />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                  <!-- dark Logo text -->
                  <img
                    src="assets/images/logo-text.png"
                    alt="homepage"
                    class="dark-logo"
                  />
                  <!-- Light Logo text -->
                  <img
                    src="assets/images/logo-light-text.png"
                    class="light-logo"
                    alt="homepage"
                  />
                </span>
              </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
              <!-- Notification -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle pl-md-3 position-relative"
                  href="javascript:void(0)"
                  id="bell"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span><i data-feather="bell" class="svg-icon"></i></span>
                  <span class="badge badge-primary notify-no rounded-circle"
                    >5</span
                  >
                </a>
                <div
                  class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown"
                >
                  <ul class="list-style-none">
                    <li>
                      <div
                        class="message-center notifications position-relative"
                      >
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <div class="btn btn-danger rounded-circle btn-circle">
                            <i data-feather="airplay" class="text-white"></i>
                          </div>
                          <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">
                              Luanch Admin
                            </h6>
                            <span class="font-12 text-nowrap d-block text-muted"
                              >Just see the my new admin!</span
                            >
                            <span class="font-12 text-nowrap d-block text-muted"
                              >9:30 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="btn btn-success text-white rounded-circle btn-circle"
                            ><i data-feather="calendar" class="text-white"></i
                          ></span>
                          <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Event today</h6>
                            <span
                              class="font-12 text-nowrap d-block text-muted text-truncate"
                              >Just a reminder that you have event</span
                            >
                            <span class="font-12 text-nowrap d-block text-muted"
                              >9:10 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span class="btn btn-info rounded-circle btn-circle"
                            ><i data-feather="settings" class="text-white"></i
                          ></span>
                          <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Settings</h6>
                            <span
                              class="font-12 text-nowrap d-block text-muted text-truncate"
                              >You can customize this template as you want</span
                            >
                            <span class="font-12 text-nowrap d-block text-muted"
                              >9:08 AM</span
                            >
                          </div>
                        </a>
                        <!-- Message -->
                        <a
                          href="javascript:void(0)"
                          class="message-item d-flex align-items-center border-bottom px-3 py-2"
                        >
                          <span
                            class="btn btn-primary rounded-circle btn-circle"
                            ><i data-feather="box" class="text-white"></i
                          ></span>
                          <div class="w-75 d-inline-block v-middle pl-2">
                            <h6 class="message-title mb-0 mt-1">Pavan kumar</h6>
                            <span class="font-12 text-nowrap d-block text-muted"
                              >Just see the my admin!</span
                            >
                            <span class="font-12 text-nowrap d-block text-muted"
                              >9:02 AM</span
                            >
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a
                        class="nav-link pt-3 text-center text-dark"
                        href="javascript:void(0);"
                      >
                        <strong>Check all notifications</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- End Notification -->
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i data-feather="settings" class="svg-icon"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="javascript:void(0)">
                  <div class="customize-input">
                    <select
                      class="custom-select form-control bg-white custom-radius custom-shadow border-0"
                    >
                      <option selected>FR</option>
                      <option value="1">EN</option>
                    </select>
                  </div>
                </a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="javascript:void(0)">
                  <form>
                    <div class="customize-input">
                      <input
                        class="form-control custom-shadow custom-radius border-0 bg-white"
                        type="search"
                        placeholder="Rechercher"
                        aria-label="Search"
                      />
                      <i class="form-control-icon" data-feather="search"></i>
                    </div>
                  </form>
                </a>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="javascript:void(0)"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="assets/images/users/profile-pic.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="40"
                  />
                  <span class="ml-2 d-none d-lg-inline-block"
                    ><span>Hello,</span>
                    <span class="text-dark">Rose Ornella</span>
                    <i data-feather="chevron-down" class="svg-icon"></i
                  ></span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right user-dd animated flipInY"
                >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="user" class="svg-icon mr-2 ml-1"></i> Mon
                    Profil</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                    Modifier mes informations</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i data-feather="power" class="svg-icon mr-2 ml-1"></i> Me
                    deconnecter</a
                  >
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="sidebar-item">
                <a
                  class="sidebar-link sidebar-link"
                  href="index.html"
                  aria-expanded="false"
                  ><i data-feather="home" class="feather-icon"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link sidebar-link"
                  href="time-table.html"
                  aria-expanded="false"
                  ><i data-feather="calendar" class="feather-icon"></i
                  ><span class="hide-menu">Mon emploi du temps</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link active"
                  href="schooling.html"
                  aria-expanded="false"
                  ><i class="fas fa-id-card"></i
                  ><span class="hide-menu">Ma Scolarité</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="draft_memoire.html"
                  aria-expanded="false"
                  ><i class="fas fa-book"></i
                  ><span class="hide-menu">Draft et mémoire</span></a
                >
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="notes.html" aria-expanded="false"
                  ><i data-feather="box" class="feather-icon"></i
                  ><span class="hide-menu">Mes notes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="stages-ac.html"
                  aria-expanded="false"
                  ><i data-feather="feather" class="feather-icon"></i
                  ><span class="hide-menu">Stage académique </span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i data-feather="crosshair" class="feather-icon"></i
                  ><span class="hide-menu">Discipline</span></a
                >
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-7 align-self-center">
              <h3
                class="page-title text-truncate text-dark font-weight-medium mb-1"
              >
                État de ma scolarité
              </h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Scolarité</li>
                  </ol>
                </nav>
              </div>
            </div>
            <div class="col-5 align-self-center">
              <div class="customize-input float-right"></div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- *************************************************************** -->
          <!-- *************************************************************** -->
          <!-- Start Services -->
          <!-- *************************************************************** -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4">
                    <h4 class="card-title">Scolarité</h4>
                    <div class="ml-auto">
                      <div class="dropdown sub-dropdown">
                        <button
                          class="btn btn-link text-muted dropdown-toggle"
                          type="button"
                          id="dd1"
                          data-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        ></button>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="grid">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="imprim_quitus.html" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="fas fa-print fa-4x text-success mt-4"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Imprimer mon quitus
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="cms.html" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="fas fa-file-alt fa-4x text-primary mt-4"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Imprimer ma fiche du CMS
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="grid-container">
                            <a href="statut.html" class="zoom">
                              <div class="card text-center">
                                <i
                                  class="icon-check fa-4x mt-4 text-warning"
                                ></i>
                                <div class="card-body">
                                  <h5 class="card-title text-uppercase">
                                    Statut de ma scolarité
                                  </h5>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- end row -->
                    </div>
                    <!-- grid-structure -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *************************************************************** -->
          <!-- End Services -->
          <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
          All Rights Reserved by Adminmart. Designed and Developed by
          <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/extra-libs/prism/prism.js"></script>
  </body>
</html>
