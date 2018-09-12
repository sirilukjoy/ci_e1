<!DOCTYPE html>
<html lang="en" ng-app="mwl.calendar.docs">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Car Booking</title>
  <!-- Bootstrap core CSS-->
  <link href="http://localhost/ci2.2.6/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="http://localhost/ci2.2.6/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="http://localhost/ci2.2.6/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="http://localhost/ci2.2.6/css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <?php
    $this->load->view('home_view');
    ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">หน้าหลัก</a>
        </li>
        <li class="breadcrumb-item active">รายชื่อผู้ใช้</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> เพิ่มรายชื่อผู้ใช้</div>
        <div class="card-body">

        <form action ="add_user_add" class="table">
     <table>
      <tr>
        <td><label for="name">ชื่อ :</label></td>
        <td><input class="form-control" id="name" name="name" type="text" placeholder="name" data-validation-required-message="Please enter your name."></td>
        <td><label for="lastname">นามสกุล :</label></td>
        <td><input class="form-control" id="lastname" name="lastname" type="text" placeholder="lastname" data-validation-required-message="Please enter your lastname."></td>
      </tr>
      <tr>
        <td><label for="email">อีเมล์ :</label></td>
        <td><input class="form-control" id="email" name="email" type="text" placeholder="email" data-validation-required-message="Please enter your email."></td>
        <td><label for="tel">เบอร์โทรศัพท์ :</label></td>
        <td><input class="form-control" id="tel" name="tel" type="text" placeholder="tel" data-validation-required-message="Please enter your tel."></td>
      </tr>                  
      <tr>
        <td><label for="address">ที่อยู่ :</label></td>
        <td><input class="form-control" id="address" name="address" type="text" placeholder="address" data-validation-required-message="Please enter your address."></td>
        <td><label for="username">ชื่อผู้ใช้ :</label></td>
        <td><input class="form-control" id="username" name="username" type="text" placeholder="username" data-validation-required-message="Please enter your username."></td>
      </tr>                 
      <tr>
        <td><label for="password">รหัสผ่าน :</label></td>
        <td><input class="form-control" id="password" name="password" type="text" placeholder="password" data-validation-required-message="Please enter your password."></td>
        <td><label for="status">สถานะ :</label></td>
        <td><input class="form-control" id="status" name="status" type="text" placeholder="status" data-validation-required-message="Please enter your status."></td>
      </tr>                                 
      <tr>       
        <td><button type="submit" class="btn btn-default">Submit</button></td>
      </tr> 
      </table>
</form>
    </div>
  


        </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/ci2.2.6/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/ci2.2.6/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="http://localhost/ci2.2.6/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="http://localhost/ci2.2.6/vendor/chart.js/Chart.min.js"></script>
    <script src="http://localhost/ci2.2.6/vendor/datatables/jquery.dataTables.js"></script>
    <script src="http://localhost/ci2.2.6/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="http://localhost/ci2.2.6/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="http://localhost/ci2.2.6/js/sb-admin-datatables.min.js"></script>
    <script src="http://localhost/ci2.2.6/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>













