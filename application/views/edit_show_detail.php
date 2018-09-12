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
        <li class="breadcrumb-item active">รายการรถ</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-edit"></i> แก้ไขรายละเอียดรถ</div>
        <div class="card-body">

    <?php echo form_open('member/update/'.$rs['car_id']); 
         // echo anchor('member/update');
  ?>
  <table class="table">
  <tr>
  <td><label for="image">image :</label></td>        
      <td><input type="text" class="form-control" id="image" name="image" value = "<?php echo $rs['image'] ?>"></td>
  </tr>
  <tr>
      <td><label for="license_plate">license_plate :</label></td>        
      <td><input type="text" class="form-control" id="license_plate" name="license_plate" value = "<?php echo $rs['license_plate'] ?>"></td>
      <td><label for="province">province :</label></td>
      <td><input type="text" class="form-control" id="province" name="province" value = "<?php echo $rs['province'] ?>"></td>
  </tr>
  <tr>
      <td><label for="type_car">type_car :</label></td>         
      <td><input type="text" class="form-control" id="type_car" name="type_car" value = "<?php echo $rs['type_car'] ?>"></td>
      <td><label for="status">Status :</label></td>    
      <td><input type="text" class="form-control" id="status" name="status" value = "<?php echo $rs['status'] ?>"></td>
  </tr>
  <tr>
      <td><label for="fuel">fuel :</label></td>       
      <td><input type="text" class="form-control" id="fuel" name="fuel" value = "<?php echo $rs['fuel'] ?>"></td>
      <td><label for="generation">Generation :</label></td>     
      <td><input type="text" class="form-control" id="generation" name="generation" value = "<?php echo $rs['generation'] ?>"></td>
  </tr>
  <tr>
      <td><label for="brand">brand :</label></td>         
      <td><input type="text" class="form-control" id="brand" name="brand" value = "<?php echo $rs['brand'] ?>"></td>
      <td><label for="price">price :</label></td>       
      <td><input type="text" class="form-control" id="price" name="price" value = "<?php echo $rs['price'] ?>"></td>
  </tr>
  <tr>
      <td><label for="color">color :</label></td>        
      <td><input type="text" class="form-control" id="color" name="color" value = "<?php echo $rs['color'] ?>"></td>
      <td><label for="date_buy">date_buy :</label></td>     
      <td><input type="text" class="form-control" id="date_buy" name="date_buy" value = "<?php echo $rs['date_buy'] ?>"></td>
  </tr>
  <tr>
  <td><button type="submit" class="btn btn-default">Submit</button></td>
  </tr>
  </table>     
      <?php
echo form_close();
?>
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













