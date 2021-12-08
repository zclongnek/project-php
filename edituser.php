<?php

include("conuser.php");
$id3 = $_GET['id'];
$query = "SELECT *FROM user Where id=$id3";
$result = mysqli_query($con, $query);
while ($res = mysqli_fetch_array($result)) {
    $id = $res['id'];
    $username = $res['username'];
    $password = $res['passw'];
    $email = $res['email'];
    $SDT = $res['SDT'];
    
}
?>
<?php

require_once'conuser.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['passw'];
    $email = $_POST['email'];
    $SDT = $_POST['SDT'];
    
    

if ($con->query("UPDATE user SET username='$username',passw='$password',email='$email',SDT='$SDT' WHERE id=$id")) {
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
                <label for="username">username</label>
                <input name="username" class="form-control" value="<?php echo $username; ?>">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-2">
                <label for="passw">Password</label>
                <input name="passw" class="form-control" value="<?php echo $password; ?>">
            </div>
            <div class="form-group col-md-2">
                <label for="email">Email</label>
                <input name="email"  class="form-control" value="<?php echo $email; ?>">
            </div>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="SDT">SDT</label>
                <input name="SDT" class="form-control" value="<?php echo $SDT; ?>">
            </div>
            
        </div>
     
        <button type="submit" class="btn btn-primary" name="update">Lưu</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-success"><a href="qluser.php" style="color: white;">Quay Lại</a></button>
    </form>
</div>
</body>
