<?php 
session_start();
	include 'koneksi.php';

	if(isset($_POST['login'])){

	//cek akun ada atau tidak
		$cek = mysqli_query($conn, "SELECT * FROM tb_admin 
		WHERE username ='".$_POST['user']."' AND password ='".MD5($_POST['pass']).
			"' ");

		if(mysqli_num_rows($cek) > 0){
			$a=mysqli_fetch_object($cek);

			$_SESSION['stat_login']=true;
			$_SESSION['id']=$a->id_admin;
			$_SESSION['nama']=$a->nm_admin;
		echo '<script>window.location="beranda.php"</script>';
		}else{
		echo '<script>alert("Gagal, username atau password salah")</script>';
		} 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<title>PSb Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<!--bagian main login-->
<section  class="main-login">
	<div class="box-login">
		<h2>Login Admin</h2>
		
		<!--Bagian form login-->
		<form action="" method="post">
			<div class="box">
				<table>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td>
							<input type="text" name="user" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td>
							<input type="password" name="pass" class="input-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="login" value="Login" class="btn-login">
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>
</section>

</body>
</html>