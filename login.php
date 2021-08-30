<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>	

	<?php 
include 'koneksi.php';
?>


<script language="javascript">
function cekform(){
    if(document.frmregist.email.value==""){
        alert('Email must be correct');
        document.frmregist.email.focus();
        return false;
    } else if(document.frmregist.pw.value==""){
        alert('password must be correct');
        document.frmregist.pw.focus();
        return false;
    } else {
        return true;
    }
}
</script>

</head>
<body>
	<h3>Login</h3>
	<form action="" method="post" name="frmregist" onsubmit="return cekform()">	
		<table>
			<tr>
				<td><input type="text" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td><input type="password" name="pw" placeholder="Password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tblRegist" id="tblRegist" value="Login"></td>
                        <td>&nbsp;</td>

			</tr>
		</table>
	</form>
</body>
</html>

<?php
include "koneksi.php";
if(isset($_POST['tblRegist'])){
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $sql = "SELECT * FROM register";
    $kueri = mysqli_query($koneksi, $sql);
    if($kueri){
        echo "<script>alert('Login berhasil!')</script>";
    } else {
        echo "<script>alert('Login gagal!')</script>";
       echo mysqli_error();
	   
    }
}
?>
