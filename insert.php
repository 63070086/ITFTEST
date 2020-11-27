<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070086_superoof', 'Pin187932', 'it63070086_datatest', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$discount = $_POST['Discount'];
$total = $_POST['Price']-($_POST['Price']*$_POST['Discount']/100);

$sql = "INSERT INTO test (Product , Price , Discount, Total) VALUES ('$product', '$price', '$discount', '$total')";


if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
