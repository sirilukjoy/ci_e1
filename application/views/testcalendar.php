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
      <!-- fullcalendar -->
      <link rel="stylesheet" href="http://localhost/ci2.2.6/fullcalendar-3.9.0/fullcalendar.css" />
  <script type="text/javascript" src="http://localhost/ci2.2.6/fullcalendar-3.9.0/lib/jquery.min.js"></script>
  <script type="text/javascript" src="http://localhost/ci2.2.6/fullcalendar-3.9.0/lib/moment.min.js"></script>
  <script type="text/javascript" src="http://localhost/ci2.2.6/fullcalendar-3.9.0/fullcalendar.js"></script>
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
        <li class="breadcrumb-item active">ปฏิทินการใช้รถ</li>
      </ol>


<div id="calendar"></div>
</div>

<script>
    $(function() {
$('#calendar').fullCalendar({
})

});
    </script>
    </div>
</body>
</html>