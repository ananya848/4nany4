<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อนัญญา ผลจันทร์ (ตาล)<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อนัญญา ผลจันทร์ (ตาล)</title>
</head>

<body>
<h1>หน้าเข้าสู่ระบบ - อนัญญา</h1>

<form method="post" action="">
Username <input type="text" name="auser" autofocus required> <br>
Password <input type="password" name="apwd" required> <br>
<button type="submit" name="Submit">LOGIN</button></form>
<?php
if(isset($_POST['Submit'])){
    include_once("connectdb.php");
    $sql = "SELECT * FROM admin WHERE a_username='{$_POST['auser']}'AND a_password='{$_POST['apwd']}'LIMIT 1";
    $rs = mysqli.query($conn,$sql);
    $num = mysqli_num_rows($rs);

    echo $num;
}
?>
</body>
</html>
</title>
</head>

<body>
</body>
</html>