<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Perbandingan</title>
    <link rel="stylesheet" href="main.css">
    <script src="jquery-3.5.1.js"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <!-- Custom logo image -->
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="store-name">
                <!-- Custom store name -->
                <h1>WebProg Jaya Phone</h1>
            </div>
        </div>
        <div class="main-content">
            <?php foreach ($arrHape as $produk) { ?>
                <?php if (isset($_POST['selected']) && in_array($produk['SKU'], $_POST['selected'])) { ?>
                    <div class="card">
                        <img src="<?php echo $produk['url_gambar']; ?>" alt="Phone">
                        <h2><?php echo $produk['Merk']; ?></h2>
                        <p><?php echo $produk['Model']; ?></p>
                        <p>Harga: <?php echo "Rp " . number_format($produk['Harga'], 0, ",", "."); ?></p>
                        <p>Spesifikasi: <?php echo implode(", ", $produk['spec']); ?></p>
                        <input type="checkbox" class="compare-checkbox" value="<?php echo $produk['SKU']; ?>" checked>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <a href="tes.php" class="back-btn">Kembali</a>
</body>
</html>
