<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepaid Balance</title>
    <?php
include "header.php";
?>
<script language="javascript">
function cekform(){
    
    if(document.frmtopupbalance.mobilenumber.value==""){
        alert('Mobile number must be filled');
        document.frmtopupbalance.mobilenumber.focus();
        return false;
    } else if(document.frmtopupbalance.value.value==""){
        alert('Value must be filled');
        document.frmtopupbalance.value.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>

    <h3>Prepaid Balance</h3>
    <form action="" method="post" name="frmtopupbalance" onsubmit="return cekform()">
        <div>
            <input name="mnumber" type="text" placeholder="Mobile Number"></br></br>
        </div>
        <div>
            <input name="value" type="text" placeholder="Value"></br></br></br></br>
        </div>
        <div>
        <td>&nbsp;</td>
    <td><input name="tblIsi" type="submit" id="tblIsi" value="Submit" /></td>
        </div>
    </form>
</body>
</html>

<?php
include "koneksi.php";
if(isset($_POST['tblIsi'])){
    $mnumber = $_POST['mnumber'];
    $value = $_POST['value'];
    $sql = "INSERT INTO topupbalancepage VALUES('$mnumber','$value')";

    $kueri = mysqli_query($koneksi, $sql);
    if($kueri){
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
    
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
    }
}
?>