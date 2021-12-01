<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style_create.css">
    <title>Document</title>
</head>
<body>
<?php
    include './conn.php';
    $result = mysqli_query($con, "select *from nhansu");
    mysqli_close($con);
    ?>
<table class="table">
  <thead class="thead-dark">
  <div id="user_infor">
    <h1>Danh Sách Nhân Sự</h1>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Họ Tên</th>
      <th scope="col">Ngày Sinh</th>
      <th scope="col">Giới Tính</th>
      <th scope="col">SDT</th>
      <th scope="col">Quê Quán</th>
      <th scope="col">Chức Năng</th>

    </tr>
    
    <?php 
        while ($row = mysqli_fetch_array($result)) {
    ?>   
            <tr>

                <td><?= $row['id'] ?></td>
                <td><?= $row['hoten'] ?></td>
                <td><?= $row['ngaysinh'] ?></td>
                 <td><?= $row['gioitinh'] ?></td>
                <td><?= $row['sdt'] ?></td>
                <td><?= $row['quequan'] ?></td>
               <td><button type="button" class="btn btn-primary"><a href="insert.php" style="color: white;">Thêm</a></button>
               <button type="button" class="btn btn-danger"><a href="insert.php" style="color: white;">Sửa</a></button>
               <button type="button" class="btn btn-warning"><a href="insert.php" style="color: black;">Xóa</a></button>
              </td>
               <td></td>
               <td></td>
               
               
               

             
            </tr>
<?php } ?>
</table>


    </tr>
  </tbody>
</table>
</body>
</html>