<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $makanan = $_POST['makanan'];
    $inputMakanan = $_POST['input_makanan'];
    $minuman = $_POST['minuman'];
    $inputMinuman = $_POST['input_minuman'];

    $order = "Nama: " . $nama . "\nMakanan: " . $makanan . $inputMakanan . "\nMinuman: " . $minuman . $inputMinuman . "\n\n";

    $file = fopen("orders.txt", "a");
    fwrite($file, $order);
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Warung Makan Toni - Pesanan Terkirim</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="title">
    <h1>Pesanan Anda Telah Terkirim!</h1>
    </div>
    <div class="order-summary">
        <div class="title1">
            <h2>Ringkasan Pesanan:</h2>
        </div>
        <p>1. Nama: <?php echo $nama; ?></p>
        <p>2. Makanan: <?php echo $makanan;?></p>
        <p>3. Minuman: <?php echo $minuman; ?></p>
        <p>4. Makanan lain : <?php echo $inputMakanan; ?></p>
        <p>5. Makanan lain : <?php echo $inputMinuman; ?></p>

        <div class="kembali">
            <button onclick="goBack()">Kembali ke Halaman Utama</button>
        </div>
    </div>
    <script>
         showOrderSummary('<?php echo $nama; ?>', '<?php echo $makanan; ?>', '<?php echo $inputMakanan; ?>', '<?php echo $minuman; ?>', '<?php echo $inputMinuman; ?>');
    </script>
   
</body>
</html>
