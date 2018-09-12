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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- fullcalendar -->
  <link rel="stylesheet" href="fullcalendar-3.9.0/fullcalendar.css" />
  <script type="text/javascript" src="fullcalendar-3.9.0/lib/jquery.min.js"></script>
  <script type="text/javascript" src="fullcalendar-3.9.0/lib/moment.min.js"></script>
  <script type="text/javascript" src="fullcalendar-3.9.0/fullcalendar.js"></script>
</head>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"><i class="fa fa-fw fa-car"></i> ระบบขอใช้รถยนต์ส่วนกลาง</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHome" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">หน้าหลัก</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseHome">
            <li>
              <a href="sa">ปฏิทินการใช้รถ</a>
            </li>
            <li>
              <a href="question">สอบถามรายการจอง</a>
            </li>
            <li>
              <a href="show">รายละเอียดรถ</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Day">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDay" data-parent="#exampleAccordion">
            <i class="fa fa-star"></i>
            <span class="nav-link-text">ประจำวัน</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDay">
            <li>
              <a href="allow">งานอนุมัติ</a>
            </li>
            <li>
              <a href="return_car">รับคืนรถ</a>
            </li>
            <li>
              <a href="booking">จองใช้รถ</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAbout" data-parent="#exampleAccordion">
            <i class="fa fa-truck"></i>
            <span class="nav-link-text">เกี่ยวกับรถ</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseAbout">
            <li>
              <a href="data_car">ข้อมูลรถ</a>
            </li>
            <li>
              <a href="defective_car">การซ่อมบำรุง</a>
            </li>
          </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="personal">
        <a class="nav-link" href="user">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">ข้อมูลผู้ใช้</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Information">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInformation" data-parent="#exampleAccordion">
            <i class="fa fa-archive"></i>
            <span class="nav-link-text">ข้อมูลพื้นฐาน</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseInformation">
            <li>
              <a href="fuel_car">ประเภทน้ำมัน</a>
            </li>
            <li>
              <a href="company_repair">อู่ซ่อมรถ</a>
            </li>
          </ul>
      </li>
</ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
         
       <!-- <img class="img-avatar" alt="Avatar" src="img/f.jpg" height="38" width="45"> -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
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
            <a class="btn btn-primary" href="login">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <script>
    $(function() {

// page is now ready, initialize the calendar...

$('#calendar').fullCalendar({
  // put your options and callbacks here
})

});
    </script>
    <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>













