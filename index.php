<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="main.css">
	<script type="text/javascript" src="jquery-3.5.1.js"></script>
</head>
<body>
	<?php 
		$arrHape = array (
		    array("SKU"=>"12345", "Merk"=>"Samsung", "Model"=>"Galaxy S22", "Harga" => 18000000, "url_gambar"=>"img/Samsung S22.jpg", 
		    	"spec"=>array("4GB", "5G", "5150mAH", "256GB")), 
		    array("SKU"=>"54321", "Merk"=>"Xiaomi", "Model"=>"Mi 11 Pro", "Harga" => 9500000, "url_gambar"=>"img/Mi 11 Pro.jpeg", 
		    	"spec"=>array("8GB", "5G", "5050mAH", "256GB")), 
		    array("SKU"=>"AB012", "Merk"=>"Redmi", "Model"=>"Redmi Note 12", "Harga" => 6500000, "url_gambar"=>"img/Redmi Note 12.png", 
		    	"spec"=>array("6GB", "5G", "5350mAH", "256GB")), 
		    array("SKU"=>"RT2FG", "Merk"=>"Samsung", "Model"=>"Galaxy S20", "Harga" => 11000000, "url_gambar"=>"img/Galaxy S20.jpeg", 
		    	"spec"=>array("8GB", "5G", "5050mAH", "256GB")), 
		    array("SKU"=>"W3S5T", "Merk"=>"Xiaomi", "Model"=>"Mi 13", "Harga" => 9500000, "url_gambar"=>"img/Mi 13.jpg", 
		    	"spec"=>array("8GB", "5G", "5050mAH", "256GB")), 
		    array("SKU"=>"G8HJN", "Merk"=>"Apple", "Model"=>"iPhone 13", "Harga" => 13000000, "url_gambar"=>"img/iPhone 13.jpg", 
		    	"spec"=>array("6GB", "5G", "4350mAH", "256GB")), 
		    array("SKU"=>"Y6K4L", "Merk"=>"OnePlus", "Model"=>"9 Pro", "Harga" => 12000000, "url_gambar"=>"img/One Plus 9 Pro.jpeg", 
		    	"spec"=>array("12GB", "5G", "4500mAH", "256GB")), 
		    array("SKU"=>"A1S8D", "Merk"=>"Google", "Model"=>"Pixel 6", "Harga" => 9000000, "url_gambar"=>"img/Pixel 6.jpg", 
		    	"spec"=>array("8GB", "5G", "4080mAH", "128GB")), 
		    array("SKU"=>"Q9Z0X", "Merk"=>"Huawei", "Model"=>"P50 Pro", "Harga" => 15000000, "url_gambar"=>"img/P50 Pro.png", 
		    	"spec"=>array("8GB", "5G", "4360mAH", "256GB")),
		    array("SKU"=>"P5F3G", "Merk"=>"Sony", "Model"=>"Xperia 1 III", "Harga" => 14000000, "url_gambar"=>"img/Sony Xperia 1 III.jpg", 
		    	"spec"=>array("12GB", "5G", "4500mAH", "512GB")),
		    array("SKU"=>"E2R6T", "Merk"=>"Asus", "Model"=>"ROG Phone 5", "Harga" => 16000000, "url_gambar"=>"img/ROG Phone 5.png", 
		    	"spec"=>array("16GB", "5G", "6000mAH", "512GB")),
		    array("SKU"=>"M7N8B", "Merk"=>"Nokia", "Model"=>"X20", "Harga" => 7000000, "url_gambar"=>"img/Nokia X20.jpg", 
		    	"spec"=>array("6GB", "5G", "4470mAH", "128GB")),
		    array("SKU"=>"V4C2X", "Merk"=>"Motorola", "Model"=>"Edge+", "Harga" => 13500000, "url_gambar"=>"img/Motorola Edge.jpeg", 
		    	"spec"=>array("12GB", "5G", "4500mAH", "256GB")),
		    array("SKU"=>"H1J9K", "Merk"=>"Lenovo", "Model"=>"Legion Phone Duel 2", "Harga" => 15500000, "url_gambar"=>"img/Legion Phone Duel 2.jpeg", 
		    	"spec"=>array("16GB", "5G", "5500mAH", "512GB")),
		    array("SKU"=>"B5V7N", "Merk"=>"Oppo", "Model"=>"Find X3 Pro", "Harga" => 12500000, "url_gambar"=>"img/Oppo Find X3 Pro.jpeg", 
		    	"spec"=>array("12GB", "5G", "4500mAH", "256GB")),
		    array("SKU"=>"T8L3K", "Merk"=>"Realme", "Model"=>"GT 5G", "Harga" => 9000000, "url_gambar"=>"img/Realme GT 5G.jpg", 
		    	"spec"=>array("8GB", "5G", "4500mAH", "256GB")),
		    array("SKU"=>"Z6D1F", "Merk"=>"Vivo", "Model"=>"iQOO 7", "Harga" => 11000000, "url_gambar"=>"img/Vivo iQoo 7.jpeg", 
		    	"spec"=>array("8GB", "5G", "4400mAH", "256GB")),
		    array("SKU"=>"R2G9H", "Merk"=>"BlackBerry", "Model"=>"KEY3", "Harga" => 10000000, "url_gambar"=>"img/BlackBerry Key 3.jpeg", 
		    	"spec"=>array("8GB", "5G", "4200mAH", "256GB")),
		    array("SKU"=>"U7Y4N", "Merk"=>"LG", "Model"=>"Wing", "Harga" => 8500000, "url_gambar"=>"img/LG Wing.jpeg", 
		    	"spec"=>array("8GB", "5G", "4000mAH", "256GB")),
		    array("SKU"=>"I5O3K", "Merk"=>"Honor", "Model"=>"Magic 4", "Harga" => 11000000, "url_gambar"=>"img/Honor Magic 4.jpeg", 
		    	"spec"=>array("8GB", "5G", "4500mAH", "256GB")),
		    array("SKU"=>"N2B8R", "Merk"=>"ZTE", "Model"=>"Axon 30 Ultra", "Harga" => 13000000, "url_gambar"=>"img/ZTE Axon 30 Ultra.jpg", 
		    	"spec"=>array("12GB", "5G", "4600mAH", "256GB"))
		);
	 ?>

	<div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
            </div>
            <div class="store-name">
                <h1>WebProg Jaya Phone</h1>
            </div>
        </div>
        <div class="main-content">
            <?php foreach ($arrHape as $produk) { ?>
                <div class="card">
                    <img src="<?php echo $produk['url_gambar']; ?>" alt="Phone">
                    <h2><?php echo $produk['Merk']; ?></h2>
                    <p><?php echo $produk['Model']; ?></p>
                    <p>Harga: Rp.<?php echo $produk['Harga']; ?></p>
                    <input type="checkbox" class="compare-checkbox">
                </div>
            <?php } ?>
        </div>
    </div>
    <form action="bandingkan.php" method="GET">
    	<button class="compare-btn" disabled>Perbandingkan</button>
    </form>

	<script type="text/javascript">
	    $('.compare-checkbox').change(function(){
	        var checked = $('.compare-checkbox:checked').length;
	        if (checked == 3) {
	            $('.compare-checkbox:not(:checked)').attr('disabled', true);
	            $('.compare-btn').removeAttr('disabled');
	        } else {
	            $('.compare-checkbox:not(:checked)').removeAttr('disabled');
	            $('.compare-btn').attr('disabled', true);
	        }
	    });
	</script>
</body>
</html>
