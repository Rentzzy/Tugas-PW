<?php

include('koneksi.php');

$ProductID = $_GET['ProductID'];

$sql_produk = mysqli_query($connect, "SELECT * FROM products WHERE ProductID='$ProductID' ");

$produk = mysqli_fetch_array($sql_produk)
?>

<html>

<body>
    <form action="cart.php" method="POST">

        <table border="1px">
            <tr>
                <td>Product ID</td>
                <td><input type="text" name="ProductID" value="<?php echo $produk['ProductID'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="ProductName" value="<?php echo $produk['ProductName'] ?>" readonly> </td>
            </tr>

            <tr>
                <td>Supplier ID</td>
                <td><input type="text" name="SupplierID" value="<?php echo $produk['SupplierID'] ?>" readonly> </td>
            </tr>

            <tr>
                <td>Category ID</td>
                <td><input type="text" name="CategoryID" value="<?php echo $produk['CategoryID'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Quantity/Unit</td>
                <td><input type="text" name="QuantityPerUnit" value="<?php echo $produk['QuantityPerUnit'] ?>" readonly> </td>
            </tr>
            <tr>    
                <td>Unit Price</td>
                <td><input type="text" name="UnitPrice" value="<?php echo $produk['UnitPrice'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Units In Stock</td>
                <td><input type="text" name="UnitsInStock" value="<?php echo $produk['UnitsInStock'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Units On Order</td>
                <td><input type="text" name="UnitsOnOrder" value="<?php echo $produk['UnitsOnOrder'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Reorder Level</td>
                <td><input type="text" name="ReorderLevel" value="<?php echo $produk['ReorderLevel'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Discontinued</td>
                <td><input type="text" name="Discontinued" value="<?php echo $produk['Discontinued'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Jumlah </td>
                <td> <input type="number" name="Jumlah"> </td>
            </tr>

        </table>
        <button type="submit">Beli</button>
    </form>
</body>

</html>