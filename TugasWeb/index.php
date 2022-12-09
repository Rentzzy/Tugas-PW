<?php

include('koneksi.php');

$sql_category = mysqli_query($connect, 'SELECT * FROM categories');

?>

<html>

<body>
    <a href="cart.php">Shoping Cart</a>
    <table border="1px">
        <thead>
            <th>Category ID</th>
            <th>Category Name</th>
            <th>Description</th>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($sql_category)) { ?>
                <tr>

                    <td><?php echo $data['CategoryID'] ?></td>
                    <td><a href="produk.php?CategoryID=<?php echo $data['CategoryID'] ?>"><?php echo $data['CategoryName'] ?></a> </td>
                    <td><?php echo $data['Description'] ?></td>

                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</body>

</html>