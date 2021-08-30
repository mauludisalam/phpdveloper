<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procuct Page</title>
    <?php
include "header.php";
?>
<script language="javascript">
function cekform(){
    if(document.frmshipping.nproduct.value==""){
        alert('Product must be filled');
        document.frmshipping.nproduct.focus();
        return false;
    } else if(document.frmshipping.saddress.value==""){
        alert('Shipping address must be filled');
        document.frmshipping.saddress.focus();
        return false;
    } else if(document.frmshipping.price.value==""){
        alert('Price must be filled');
        document.frmshipping.price.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>
<body>
<h3>Product Page</h3>
<form action="" method="post" name="frmshipping" onsubmit="return cekform()">
        <div>
            <input name="nproduct" type="textarea" placeholder="Product"></br></br>
        </div>
        <div>
            <input name="saddress" type="textarea" placeholder="Shipping Address"></br></br>
        </div>
        <div>
            <input name="price" type="text" placeholder="Price"></br></br></br></br>
        </div>
        <div>
        <td>&nbsp;</td>
    <td><input name="tblProduct" type="submit" id="tblProduct" value="Submit" /></td>
        </div>
    </form>
    </body>
    </html>

<?php
include "koneksi.php";
if(isset($_POST['tblProduct'])){
    $nproduct = $_POST['nproduct'];
    $saddress = $_POST['saddress'];
    $price = $_POST['price'];
    $sql = "INSERT INTO productpage VALUES('$nproduct','$saddress','$price')";
    $kueri = mysqli_query($koneksi, $sql);
    if($kueri){
        echo "<script>alert('Data phptest berhasil dimasukkan ke database')</script>";
    } else {
        echo "<script>alert('Data phptest gagal dimasukkan ke database')</script>";
       echo mysqli_error();
    }
}
?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>