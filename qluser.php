<?php 

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style_create.css">
    <title>Quản Lý</title>

</head>
<body >
<?php
    include 'conuser.php';
    $result = mysqli_query($con, "select *from user");
    mysqli_close($con);
    ?>
  
<table class="table">
  <thead class="thead-dark">
  <div id="user_infor">
    <h1>Quản Lý Account</h1> 
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">SDT</th>
      <th scope="col">Chức Năng</th>
      <th> <button type="button" class="btn btn-success"><a href="xuly.php" style="color: white;">Quay Lại</a></button>  </th>
    </th>
    </tr>
    
    <?php 
        while ($row = mysqli_fetch_assoc($result)): 
    ?>   
            <tr>

                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['passw'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['SDT'] ?></td>
              
               <td><button type="button" class="btn btn-primary"><a href="insert.php" style="color: white;" > Thêm</a></button>
               <button type="button" class="btn btn-danger"><a href="edituser.php?id=<?php echo $row['id']  ?> "  style="color: white;">Sửa</a></button>
               <button type="button" class="btn btn-warning"><a href="conuser.php?delete=<?php echo $row['id']; ?>"  style="color: white;">Xóa</a></button>
            
              </tr>

            
<?php  endwhile; ?>

</table>

 
  
</table>
</body>
</html>