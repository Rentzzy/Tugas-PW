<?php

include('koneksi.php');

$CategoryID = $_GET['CategoryID'];

$sql_produk = mysqli_query($connect, "SELECT * FROM products WHERE CategoryID='$CategoryID'");

?>

<html>

<body>
    <table border="1px">
        <thead>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($sql_produk)) { ?>
                <tr>

                    <td><?php echo $data['ProductID'] ?></td>
                    <td><a href="detail_produk.php?ProductID=<?php echo $data['ProductID'] ?>"><?php echo $data['ProductName'] ?></a> </td>
                    <td><?php echo $data['UnitPrice'] ?></td>

                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>