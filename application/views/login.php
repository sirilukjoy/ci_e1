<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ระบบบันทึกขอใช้รถยนต์ส่วนกลาง</title>
  <link href="http://localhost/ci2.2.6/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/ci2.2.6/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://localhost/ci2.2.6/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<form method="post" action="<?php echo base_url(); ?>member/login_2">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><i class="fa fa-fw fa-car"></i>  ระบบบันทึกขอใช้รถยนต์ส่วนกลาง</div>
      <div class="card-body">

          <div class="form-group">
          <i class="fa fa-fw fa-user"></i>
            <label for="exampleInputEmail1">ชื่อผู้ใช้</label>
            <input class="form-control" id="username" type="text" name="username" placeholder="ชื่อผู้ใช้">
          </div>
          <div class="form-group">
          <i class="fa fa-fw fa-lock"></i>
            <label for="exampleInputPassword1">รหัสผ่าน</label>
            <input class="form-control" id="username" type="Password" name="password" placeholder="รหัสผ่าน">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> จำรหัสผ่าน</label>
            </div>
          </div>
          <button type="submit" class="btn btn-info btn-block">เข้าสู่ระบบ</button>
          <center><label>หรือ</label></center>
          <a href="login_regiter"><button type="button" class="btn btn-primary btn-block" name="btnsign">สำหรับสมาชิก</button></a>
      </div>
    </div>
  </div>
  </form>
  <script src="http://localhost/ci2.2.6/vendor/jquery/jquery.min.js"></script>
  <script src="http://localhost/ci2.2.6/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/ci2.2.6/vendor/jquery-easing/jquery.easing.min.js"></script>
 </body>
</html>
