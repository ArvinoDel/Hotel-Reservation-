<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
<head>
<title>Faktur Pembayaran</title>
<style>
#tabel
{
font-size:15px;
border-collapse:collapse;
}
#tabel  td
{
padding-left:5px;
border: 1px solid black;
}
</style>
</head>
<body style='font-family:tahoma; font-size:8pt;' onload="javascript:window.print()">
<center>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
<span style='font-size:12pt'><b>Save Home Company</b></span></br>
Perjuangan's Street No.50</br>
Telp : 08122428299
</td>
<?php
include 'konek.php';
$query1 = "SELECT * FROM lastverif where id_last = '$_GET[id_last]'";
$data1=mysqli_query($info, $query1);  
$result1=mysqli_fetch_array($data1)
?>
<td style='vertical-align:top' width='30%' align='left'>
<b><span style='font-size:12pt'>Struk Pembelian</span></b></br>
Id Transaction : <?php echo $result1['id_last']?></br>
Date :<?php echo $result1['datebuy']?></br>
</td>
</table>
<table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border = '0'>
<td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
User Name : <?php echo $result1['full_name']?></br>
Gmail : <?php echo $result1['gmail']?>
</td>
<td style='vertical-align:top' width='30%' align='left'>
NIK : <?php echo $result1['nik']?>
</td>
</table>
<table cellspacing='0' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>
<?php
include 'konek.php';
$query2 = "SELECT * FROM property where id_property = '$result1[id_property]'";
$data2=mysqli_query($info, $query2);  
$result2=mysqli_fetch_array($data2);
$tax = 5000;
?>
  
<tr align='center'>
<td width='10%'>Floor</td>
<td width='20%'>Room Name</td>
<td width='13%'>Harga</td>
<td width='4%'>Qty</td>
<td width='7%'>Tax</td>
<td width='13%'>Total Harga</td>
<tr><td><?php echo $result2['floor_area']?></td>
<td><?php echo $result2['room']?></td>
<td>$<?php echo $result2['price']?></td>
<td>1</td>
<td>$<?php echo $tax?></td>
<td>$<?php $total = $tax + $result2['price'];
echo $total;
?></td>
  
<tr>
<td colspan = '5'><div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div></td>
<td style='text-align:right'><?php
echo "$".$total;
?>
</td>
</tr>
<tr>
<td colspan = '5'><div style='text-align:right'>Via : </div></td>
<td style='text-align:right'><?php echo $result1['via']?></td>
</tr>
</table>
  
<table style='width:650; font-size:7pt;' cellspacing='2'>
<tr>
<td align='center'>Diterima Oleh,</br></br><u>(<?php echo $result1['full_name']?>)</u></td>
<td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td>
<td align='center'>TTD,</br></br><u>(<?php echo $result1['nameoncard']?>)</u></td>
</tr>
</table>
</center>
</body>
</html>
</body>
</html>