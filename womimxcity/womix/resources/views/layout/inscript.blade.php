<!DOCTYPE html>
<html lang="fr">
  @include('layout.head')
  <body class="">

    <div class="container">

         @yield('content')


    </div>
    </body>
    <footer class="footer">
          <div class="container">
            <div class="text-center">
              <small>Bluewash</small>
            </div>
          </div>
        </footer>

        <!-- Scroll to Top Button -->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>

        <!-- Logout Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="../jquery/jquery.min.js"></script>
        <script src="../popper/popper.min.js"></script>
        <script src="../js/sbjs/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../jquery-easing/jquery.easing.min.js"></script>
        <script src="../chart.js/Chart.min.js"></script>
        <script src="../css/bootstrap/datatables/jquery.dataTables.js"></script>
        <script src="../css/bootstrap/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/sb-admin.min.js"></script>
  </html>
