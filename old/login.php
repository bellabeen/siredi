<!DOCTYPE html>
<html>
    <head>
    <title>RekamMedis</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
        <link rel="shortcut icon" type="image/">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/fa/css/font-awesome.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    </head>
    <body>
    <div class="login-box">
		  <div class="login-logo">
		        <a href="login.php"><b>RekamMedis</b></a>
		</div>
		  <!-- /.login-logo -->
		  <div class="login-box-body">
        <b><p class="login-box-msg">Login</p></b>
			<form action="login.php" method="post">
			  <div class="form-group has-feedback">
				<input type="text" name="username" class="form-control" placeholder="username" />
					<span class="form-control-feedback"><i class="fa fa-user"></i></span>
			</div>
				  <div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="password" />
					<span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
			  </div>
			  <div class="row">
				<div class="col-xs-8">
				  <div class="checkbox icheck">
				  </div>
				</div>

				<div class="text-right col-xs-4 ">
        <input name="login" type="submit" value="login" class="btn btn-primary btn-block btn-flat"></input>
                  <div class="daftar">
                    <div class=""><a href="#">Join!</a></div>
                  </div>
				</div>
			  </div>
    </form>

    <?php
    include "include/connect.php";
			$username= @$_POST['username'];
			$password= @$_POST['password'];
      $login= @$_POST['login'];
      
      // ANTI SQL INJECTION
      $username = stripslashes("$username");
      $password = stripslashes("$password");
      $username = mysqli_real_escape_string($connect, $username);
      $password = mysqli_real_escape_string($connect, $password);
      // $password = md5($password);

				if($login){
					if($username == "" || $password == ""){
            ?> <script type="text/javascript">alert("Username / password tidak boleh kosong");</script> 
            
            <?php
					} else {
						$sql= mysqli_query($connect, "select * from user where username = '$username' and password = '$password'");
						$data = mysqli_fetch_array($sql);
						$cek = mysqli_num_rows($sql);
							if($cek >= 1){
								session_start();
	 
								$_SESSION['username'] 	= $data['username'];
								$_SESSION['password'] 	= $data['password'];
								$_SESSION['level']    	= $data['level'];

								 if ($data['level'] == "admin")
                                {  echo'<script type="text/javascript">
                                window.location.href="admin/home.php";
                                </script>';
                                }
                                else if ($data['level'] == "dokter")
                                { echo'<script type="text/javascript">
                                window.location.href="dokter/home.php";
                                </script>';
                                }
                                elseif ($data['level'] == "operator") {
                                  echo'<script type="text/javascript">
                                  window.location.href="operator/home.php";
                                  </script>';
                                }
								

							}else {
								?>
									<script type="text/javascript">
									alert("Maaf login gagal");
									</script>
									<?php
								}
							}
						}
						?>



<?php
include "include/connect.php";
session_start();
$username = @$_POST["username"];
$password = @$_POST["password"];
$level    = $_POST["level"];

$username = stripslashes("$username");
$password = stripslashes("$password");
$level    = stripslashes("$level");
$username = mysqli_real_escape_string($connect, $username);
$password = mysqli_real_escape_string($connect, $password);
$query = mysqli_query($connect,"SELECT * FROM user WHERE
password='$password' AND username='$username'");

$row = mysqli_num_rows($query);
if ($row == 1) {
    $_SESSION['login_user'] = $username;
    echo "<script>alert('Anda berhasil login');
    window.location = 'admin/home.php';</script>";
}
else {
    echo "<script>alert('Username dan Password salah');
    // window.location = './login.php';</script>";
}
 ?>

<?php
include "include/footer.php"
?>
                </div>
    </body>
</html>