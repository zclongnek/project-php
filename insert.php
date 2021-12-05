<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_inset.css">
    <title>Thêm nhân sự</title>
</head>

<body>
<?php require_once'conn.php'?>
    <?php
    if (isset($_POST['add'])) {
        $id = $_POST['id'];
        $hoten = $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $gtinh =$_POST['gtinh'];
      $SDT =$_POST['SDT'];
    $quequan =$_POST['quequan'];
       $chucvu =$_POST['chucvu'];
        if ($con->query("INSERT INTO nhansu (id,hoten,ngaysinh,gtinh,SDT,quequan,chucvu) VALUE (N'$id',N'$hoten',N'$ngaysinh',N'$gtinh',N'$SDT',N'$quequan',N'$chucvu')")) {
            echo "<script>alert('thêm thành công!');</script>";
        } else {
            echo   "<script>alert('thêm thât bại');</script>";
        }
        $con->close();
    }
    ?>
<div class="container">
<form method="POST" action="">
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="id">ID</label>
    <input name="id" class="form-control" >
  </div>
  <div class="form-group col-md-3">
    <label for="hoten">Họ Tên</label>
    <input name="hoten" class="form-control" >
  </div>
    </div>
    <div class="form-row">
<div class="form-group col-md-2">
    <label for="ngaysinh">Ngày sinh</label>
    <input name="ngaysinh" type="date" class="form-control">
  </div>
  <div class="form-group col-md-2">
    <label for="gtinh">Giới Tính</label>
    <input name="gtinh"  class="form-control" >
  </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="SDT">SDT</label>
    <input name="SDT" class="form-control" >
  </div>
  <div class="form-group col-md-3">
    <label for="quequan">Quê Quán </label>
    <input name="quequan" class="form-control" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-2">
    <label for="chucvu">Chức vụ</label>
    <input name="chucvu" class="form-control" >
  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="add">Lưu</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-success"><a href="index.php" style="color: white;">Quay Lại</a></button>
</form>
</div>
</body>

</html>