<?php
session_start();

if (isset($_SESSION['ProductID'])) {
    $ProductID = $_SESSION['ProductID'];
    $ProductName = $_SESSION['ProductName'];
    $UnitPrice = $_SESSION['UnitPrice'];
    $Jumlah = $_SESSION['Jumlah']; 

} else {
    $ProductID = [];
    $ProductName = [];
    $UnitPrice = [];
    $Jumlah = [];
}

if (isset($_POST['ProductID'])) {
    $ProductID[] = $_POST['ProductID'];
    $ProductName[] = $_POST['ProductName'];
    $UnitPrice[] = $_POST['UnitPrice'];
    $Jumlah[] = $_POST['Jumlah'];
}

$_SESSION['ProductID'] = $ProductID;
$_SESSION['ProductName'] = $ProductName;
$_SESSION['UnitPrice'] = $UnitPrice;
$_SESSION['Jumlah'] = $Jumlah; 

?>

<html>

<body>
    <table border="1px">
        <thead>
            <th>No Pesan</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Jumlah</th>
            <th>SubTotal</th>
        </thead>
        <?php
        $i = 0;
        $total = 0;
        foreach ($ProductID as $key => $value) {
            $i++; 
            ?>
            
            <tbody>
                <tr>
                    <td style="text-align: center;"> <?php echo $i ?></td>
                    <td style="text-align: center;"><?php echo $ProductID[$key] ?></td>
                    <td><?php echo $ProductName[$key] ?></td>
                    <td style="text-align: center;"><?php echo $UnitPrice[$key] ?></td>
                    <td style="text-align: center;"><?php echo $Jumlah[$key] ?></td>
                    <td style="text-align: center;"><?php echo $UnitPrice[$key] * $Jumlah[$key] ?></td>
                </tr>
                <?php
            $total += $UnitPrice[$key] * $Jumlah[$key];
            } ?>
                
                <tr style="text-align: center;">
                    <td colspan="4">Total Harga</td>
                    <td colspan="2"><?php echo $total ?></td>
                </tr>
            </tbody>
    </table>
    <a href="index.php">Kembali</a>
    <a href="clear.php"> clear</a>
</body>

</html>