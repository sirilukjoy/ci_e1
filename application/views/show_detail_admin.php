<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li class="breadcrumb-item">
          <a href="member/card">รายการรถ</a>
        </li>
        <li class="breadcrumb-item active">รายละเอียด</li>
      </ol>

       <!-- Example DataTables Card-->
       <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> รายละเอียด</div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td><?php echo $rs['image']; ?></td>
                </tr>
                <tr>
                  <td><b>ทะเบียนรถ</b></td>
                  <td><?php echo $rs['license_plate']; ?></td>
                  <td><b>จังหวัด</b></td>
                  <td><?php echo $rs['province']; ?></td>
                </tr>
                <tr>
                  <td><b>ประเภทรถ</b></td>
                  <td><?php echo $rs['type_car']; ?></td>
                  <td><b>สถานะ</b></td>
                  <td><?php echo $rs['status']; ?></td>
                </tr>
                <tr>
                  <td><b>เชื้อเพลิง</b></td>
                  <td><?php echo $rs['fuel']; ?></td>
                  <td><b>รุ่น</b></td>
                  <td><?php echo $rs['generation']; ?></td>
                </tr>
                <tr>
                  <td><b>ยี่ห้อ</b></td>
                  <td><?php echo $rs['brand']; ?></td>
                  <td><b>ราคา</b></td>
                  <td><?php echo $rs['price']; ?></td>
                </tr>
                <tr>
                  <td><b>สี</b></td>
                  <td><?php echo $rs['color']; ?></td>
                  <td><b>วันที่ซื้อ</b></td>
                  <td><?php echo $rs['date_buy']; ?></td>
                </tr>
              </tbody>
            </table>

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