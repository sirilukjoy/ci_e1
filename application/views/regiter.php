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
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> เพิ่มรายชื่อผู้ใช้</div>
        <div class="card-body">

        <form action ="add_regiter_add" class="table">
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
        <td><button type="submit" class="btn btn-success">บันทึก</button></td>
      </tr> 
      </table>
</form>
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













