<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>

<body>
<h2>Tinh chiet khau ban hang</h2>
<form method="post">
    <input type="text" name="ProductDescription" placeholder="mo ta san pham"><br>
    <input type="text" name="ListPrice" placeholder="Nhap gia niem yet"/><br>
    <input type="number" name="DiscountPercent" placeholder="Nhap ti le chiet khau"/>
    <input type="submit" value="Tinh">
</form>
</body>
</html>

<?php
$product=$_POST["ProductDescription"];
$price=$_POST["ListPrice"];
$discount=$_POST["DiscountPercent"];
$discountAmount=$price*$discount*0.01;
$discountPrice=$price-$discountAmount;
echo "<br>";
echo "Product Description: ".$product."<br>";
echo "List Price: ".$price."<br>";
echo "Discount Percent: ".$discount."%"."<br>";
echo "discount Amount: ".$discountAmount."<br>";
echo "discount Price: ".$discountPrice;
?>
