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
        <li class="breadcrumb-item active">อู่ซ่อมรถ</li>
      </ol>
      <p><a href="add_company"><button type="submit" class="btn btn-success">เพิ่มข้อมูล</button></a></p>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> อู่ซ่อมรถ</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th>รหัส</th>
                  <th>ประเภทบริษัท</th>
                  <th>ชื่อ</th>
                  <th>โทรศัพท์</th>
                  <th>ที่อยู่</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
              </thead>
              <tfoot>
                <tr align="center">
                  <th>รหัส</th>
                  <th>ประเภทบริษัท</th>
                  <th>ชื่อ</th>
                  <th>โทรศัพท์</th>
                  <th>ที่อยู่</th>
                  <th>แก้ไข</th>
                  <th>ลบ</th>
                </tr>
              </tfoot>
              <tbody>
              <?php
                  foreach ($rs as $r) {
              ?>
                <tr align="center">
                  <td><?php echo $r['company_id']; ?></td>
                  <td><?php echo $r['type_company']; ?></td>
                  <td><?php echo $r['name']; ?></td>
                  <td><?php echo $r['tel']; ?></td>
                  <td><?php echo $r['address']; ?></td>
                  <td align="center"><a href="edit_company/<?php echo $r['company_id']; ?>"><button type="submit" class="btn btn-danger">แก้ไข</button></a></td>
                  <td align="center"><?=anchor("member/del_company/".$r['company_id'],"ลบ",array("class"=>"btn btn-primary", "onclick"=>"return confirm('Are you sure ?');"))?></td>
                </tr>
                <?php }; ?>
              </tbody>
            </table>
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













