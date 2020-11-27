<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070086_superoof', 'Pin187932', 'it63070086_datatest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM test');
?>
<table width="600" border="1" class="table table-striped table-dark">
  <tr class="bg-info">
    <th width="100"> <div align="center">ชื่อสินค้า</div></th>
    <th width="350"> <div align="center">ราคาต่อหน่วย </div></th>
    <th width="350"> <div align="center">ส่วนลด(%) </div></th>
    <th width="350"> <div align="center">ราคาหลังลด </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result['Discount'];?></td>
    <td><?php echo $Result['Total'];?></td>
    <td>
      <a href="edit.php?Id=<?php echo $Result['Id']?>" class="btn btn-outline-success" >EDIT</a>
    </td>
  </tr>
<?php
}
?>
</table>
<button type="button" class="btn btn-outline-warning" onclick ="window.location.href='form.html'">ADD</button>
<?php
mysqli_close($conn);
?>
</body>
</html>
