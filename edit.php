<?php
$id=$_GET['Id'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070086_superoof', 'Pin187932', 'it63070086_datatest', 3306);
$res = mysqli_query($conn, "SELECT * FROM test WHERE Id='$id'");
$row = mysqli_fetch_array($res)
?>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 120px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 120px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<div>
<form action = "update.php?Id=<?php echo $row['Id']; ?>" method = "post" id="CommentForm">
    <label for="idName" style="margin: auto 120px">ชื่อสินค้า</label>
    <input type="text" name = "Product" id="idName" value="<?php echo "$row[Product]"; ?>"readonly <br>
    <label for="idComment" style="margin: auto 120px">ราคาต่อหน่วย</label>
    <input type="text" name = "Price" id="idComment" value="<?php echo "$row[Price]"; ?>" <br>
		<label for="idLink" style="margin: auto 120px">ส่วนลด(%)</label>
    <input type="text" name = "Discount" id="idLink" value="<?php echo "$row[Discount]"; ?>"> <br><br>
    <label for="idLink" style="margin: auto 120px" readonly>ราคาหลังลด</label>
    <input type="text" name = "Total" id="idLink" value="<?php echo "$row[Total]"; ?>"readonly> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
</div>
  </form>
