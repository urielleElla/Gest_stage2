 <?php require_once("header/header5.php") ?>
    <?php require_once("include/side_bar3.php") ?>
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
                Draft & Mémoire
              </h3>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">Draft & Mémoire</li>
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
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <!-- .row -->
                  <!-- start of the registration form -->
                  <!-- <div class="card">
                                <div class="card-header"> -->
                  <h2 class="card-title">Déposer mon draft</h2>
                  <!-- </div> -->
                  <!-- <div class="card-body"> -->
                  <form action="" method="post">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label
                              for="nom_entreprise"
                              style="margin-bottom: 10px"
                              >Nom de l'entreprise</label
                            >
                            <input
                              type="text"
                              name="nom_entreprise"
                              id="nom_entreprise"
                              class="form-control"
                              placeholder="Nom de l'entreprise"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label for="ville" style="margin-bottom: 10px"
                              >Ville</label
                            >
                            <input
                              type="text"
                              name="ville"
                              id="ville"
                              class="form-control"
                              placeholder="Ville"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label for="theme" style="margin-bottom: 10px"
                              >Thème de travail</label
                            >
                            <input
                              type="text"
                              name="theme"
                              id="theme"
                              class="form-control"
                              placeholder="Thene de travail"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label
                              for="encadreurPro"
                              style="margin-bottom: 10px"
                              >Encadreur professionnel</label
                            >
                            <input
                              type="text"
                              name="encadreurPro"
                              id="encadreurPro"
                              class="form-control"
                              placeholder="Encadreur professionnel"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label for="date" style="margin-bottom: 10px"
                              >Fin de stage</label
                            >
                            <input
                              type="date"
                              name="date"
                              id="date"
                              class="form-control"
                              placeholder="Fin de stage"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-label-group">
                            <label for="draft" style="margin-bottom: 10px"
                              >Enregistrer le draft</label
                            >
                            <input
                              type="file"
                              name="draft"
                              id="draft"
                              class="form-control"
                              placeholder="Enregistrer le draft"
                              required="required"
                              autofocus="autofocus"
                              style="margin-bottom: 15px"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <button
                      class="btn btn-success"
                      style="display: block; border-radius: 10px"
                      type="submit"
                    >
                      Enregistrer
                    </button>
                  </form>
                </div>
              </div>
              <!-- End of the registration form -->
              <!-- / .row -->
              <!-- </div>
                        </div> -->
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End Page Content -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
          Projet d'integration GIN <a href="https://wrappixel.com">2023</a>.
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
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="<?php echo base_url(); ?>assets/extra-libs/prism/prism.js"></script>
  </body>
</html>
