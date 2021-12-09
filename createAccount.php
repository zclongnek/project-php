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
    if (isset($_POST['add1'])) {
        $username = $_POST['username'];
        $password = $_POST['passw'];
        if ($con->query("INSERT INTO user (username,passw) VALUE (N'$username',N'$password')")) {
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
  <div class="form-group col-md-3">
    <label for="username">Username</label>
    <input name="username" class="form-control" >
  </div>
    </div>
    <div class="form-row">
<div class="form-group col-md-2">
    <label for="passw">Password</label>
    <input name="passw"  class="form-control">
  </div>
  <div class="form-group col-md-2">
    <label for="email">Email</label>
    <input name="email"  class="form-control" >
  </div>
 
    </div>
    <div class="form-row">
    <div class="form-group col-md-2">
    <label for="SDT">SDT</label>
    <input name="SDT"  class="form-control">
  </div>
    </div>
  <button type="submit" class="btn btn-primary" name="add1">Lưu</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="button" class="btn btn-success"><a href="qluser.php" style="color: white;">Quay Lại</a></button>
</form>
</div>
</body>

</html>