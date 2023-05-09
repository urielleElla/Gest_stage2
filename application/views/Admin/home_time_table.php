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
    <title>Mon emploi du temps | Programmation de la semaine</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet" />
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link
      href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <link href="dist/css/transition-style.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
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
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link active" href="home-time-table.html"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Emploies du temps</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link " href="draft_memoire.html"
                                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 20px; height:20px; margin-right:12px;"><path d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z"/></svg></i></i><span
                                    class="hide-menu">Graff et memoire </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="notes.html"
                                aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                    class="hide-menu">Mes notes </span></a>
                            </li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="scolarite.html"
                                aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                                    class="hide-menu">Scolarite
                                </span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="stage.html"
                                aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                                    class="hide-menu">Stage academique
                                </span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                                    class="hide-menu">Discipline</span></a></li>
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
        <div class="page-wrapper" style="overflow-x: scroll; background-color: #fff;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- <div class="container-fluid"> -->
                        <!-- <div class="card"> -->
                            <div class="">                                        
                                <!-- <div class="card-body"> -->
                                    <div class="row">
                                        <div class="col-md-4">
    
                                        </div>
                                        <div class="col-md-4" style="margin-top: 25px;">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 style="text-align: center; font-weight: bold;">EMPLOI DU TEMPS </h3>
                                                    <h4 style="text-align: center; font-weight: bold;">Semaine N* 13</h4>
                                                    <span style="margin-left: 75px;">Du 17 au 22 avril</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                           
                                            <table id="zero_config" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr style="text-align: center; font-weight: bold;">
                                                        <th>JOURS</th>
                                                        <th>07H30 / 09H30</th>
                                                        <th>09H30 / 11H30</th>
                                                        <th>12H30 / 14H30</th>
                                                        <th>15H00 / 17H00</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Lundi</td>
                                                        <td class="text-success mr-2">GLO0642(Application avancee des bases de donnees) <br> <span>Dr Dangbe / Dr BATOURE</span></td>
                                                        <td>GLO0641(Genie logiciel oriente objet) <br> <span>Dr BATOURE</span></td>
                                                        <td>INF621(Specification et verification des exigences) <br> <span>Dr NDAM</span></td>
                                                        <td>GLO0622(Controle qualite et metrique du logiciel) <br> <span>Dr FENDI</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Mardi</td>
                                                        <td class="text-warning mr-2">GLO0642(Application avancee des bases de donnees) <br> <span>Dr Dangbe / Dr BATOURE</span></td>
                                                        <td class="text-warning mr-2">GLO0642(Application avancee des bases de donnees) <br> <span>Dr Dangbe / Dr BATOURE</span></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Mercredi</td>
                                                        <td class="text-info mr-2">INF621(Specification et verification des exigences) <br> <span>Dr NDAM</span></td>
                                                        <td class="text-info mr-2">GLO0622(Controle qualite et metrique du logiciel) <br> <span>Dr FENDI</span></td>
                                                        <td class="text-info mr-2">GLO0642(Application avancee des bases de donnees) <br> <span>Dr Dangbe / Dr BATOURE</span></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Jeudi</td>
                                                        <td class="text-info mr-2">IFT631(Cloud Computing et Web services) <br> <span>Dr Zongo</span></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Vendredi</td>
                                                        <td class="text-danger mr-2">INF621(Specification et verification des exigences) <br> <span>Dr NDAM</span></td>
                                                        <td class="text-danger mr-2">GLO0622(Controle qualite et metrique du logiciel) <br> <span>Dr FENDI</span></td>
                                                        <td class="text-info mr-2">IFT541(Programmation embarquee) <br> <span>Dr FENDI</span></td>
                                                        <td class="text-info mr-2">IFT541(Programmation embarquee) <br> <span>Dr FENDI</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-size: 24; font-weight: bold;">Samedi</td>
                                                        <td class="text-danger mr-2">IFT631(Cloud Computing et Web services) <br> <span>Dr Zongo</span></td>
                                                        <td class="text-danger mr-2">GLO0642(Application avancee des bases de donnees) <br> <span>Dr Dangbe / Dr BATOURE</span></td>
                                                        <td class="text-info mr-2">IFT632(Developpement d'applications Mobiles) <br> <span>Mr YANNICK</span></td>
                                                        <td class="text-info mr-2">IFT632(Developpement d'applications Mobiles) <br> <span>Mr YANNICK</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                                
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-3">
                                        <div class="calendar-events mb-3" data-class="bg-warning"><i
                                            class="fa fa-circle text-warning mr-2"></i>Controle continu
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="calendar-events mb-3" data-class="bg-info"><i
                                            class="fa fa-circle text-info mr-2"></i>Synthese</div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="calendar-events mb-3" data-class="bg-success"><i
                                            class="fa fa-circle text-success mr-2"></i>Travaux pratiques
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="calendar-events mb-3" data-class="bg-danger"><i
                                            class="fa fa-circle text-danger mr-2"></i>ratrappage
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="semaines.html" style="margin-left: 25px; font-weight: bold; font-size: 24;">Voir les semaines precedentes</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="evenements.html" style="margin-left: 25px; font-weight: bold; font-size: 24;">Evenements</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        <!-- </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <span style="text-align: center;">Projet d'integration GIN</span> <a
                    href="https://wrappixel.com">2023</a>.
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>