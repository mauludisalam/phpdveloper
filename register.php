<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<script language="javascript">
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
    if(document.frmregister.name_u.value==""){
        alert('Product must be filled');
        document.frmregister.name_u.focus();
        return false;
    } else if(document.frmregister.email.value==""){
        alert('Shipping address must be filled');
        document.frmregister.email.focus();
        return false;
    } else if(document.frmregister.pw.value==""){
        alert('Price must be filled');
        document.frmregister.pw.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>
<h3>Register</h3>
<form action="" method="post" name="frmregister" onsubmit="return cekform()">
        <div>
            <input name="name_u" type="textarea" placeholder="Name"></br></br>
        </div>
        <div>
            <input name="email" type="textarea" placeholder="Email"></br></br>
        </div>
        <div>
            <input name="pw" type="text" placeholder="Password"></br></br></br></br>
        </div>
        <div>
        <td>&nbsp;</td>
    <td><input name="tblRegist" type="submit" id="tblRegist" value="Submit" /></td>
        </div><br>
        <div>
        <td>&nbsp;</td>
    <td><a href="login.php"><Button type="Login">Login</Buttoninput name="login" type="" id="login" value="Login" /></a></td>>
        </div>
    </form>
    </body>
    </html>

<?php
include "koneksi.php";
if(isset($_POST['tblRegist'])){
    $name_u = $_POST['name_u'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $sql = "INSERT INTO register VALUES('$name_u','$email','$pw')";
    $kueri = mysqli_query($koneksi, $sql);
    if($kueri){
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
       echo mysqli_error();
    }
}
?>





