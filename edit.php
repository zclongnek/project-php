<?php

include("conn.php");
$id = $_GET['id'];
$query = "SELECT *FROM nhansu Where id=$id";
$result = mysqli_query($con, $query);
while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $hoten = $res['hoten'];
    $ngaysinh = $res['ngaysinh'];
    $gtinh = $res['gtinh'];
    $SDT = $res['SDT'];
    $quequan = $res['quequan'];
    $chucvu = $res['chucvu'];
    $luong = $res['luong'];
    $cd = $res['cccd'];
}
?>
<?php

require_once'conn.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gtinh = $_POST['gtinh'];
    $SDT = $_POST['SDT'];
    $quequan = $_POST['quequan'];
    $chucvu = $_POST['chucvu'];
    $luong = $_POST['luong'];
    $cd = $_POST['cccd'];
if ($con->query("UPDATE nhansu SET hoten='$hoten',ngaysinh='$ngaysinh',gtinh='$gtinh',SDT='$SDT',quequan='$quequan',chucvu='$chucvu',luong='$luong' ,cccd = '$cd' WHERE id=$id")) {
    echo "<script>alert('update  thành công!');</script>";
} else {
    echo   "<script>alert('update thất bại');</script>";
}
$con->close();
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style_inset.css">
<body > 
<div class="container" >
    <form method="POST" action="" >
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="id">ID</label>
                <input name="id" class="form-control" value="<?php echo $id; ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="hoten">Họ Tên</label>
                <input name="hoten" class="form-control" value="<?php echo $hoten; ?>">
            </div>
        </div>
      
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="ngaysinh">Ngày sinh</label>
                <input name="ngaysinh" type="date" class="form-control" value="<?php echo $ngaysinh; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="gtinh">Giới Tính</label>
                <input name="gtinh" class="form-control" value="<?php echo $gtinh; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="SDT">SDT</label>
                <input name="SDT" class="form-control" value="<?php echo $SDT; ?>">
            </div>
            <div class="form-group col-md-3">
                <label for="quequan">Quê Quán </label>
                <input name="quequan" class="form-control" value="<?php echo $quequan; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="chucvu">Chức vụ</label>
                <input name="chucvu" class="form-control" value="<?php echo $chucvu; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="luong">Tiền Lương</label>
                <input name="luong" class="form-control" value="<?php echo $luong; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cccd">CCCD</label>
                <input name="cccd"  class="form-control" value="<?php echo $cd; ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="update">Lưu</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-success"><a href="xuly.php" style="color: white;">Quay Lại</a></button>
    </form>
</div>
</body>
