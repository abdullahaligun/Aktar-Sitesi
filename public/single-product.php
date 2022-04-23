<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
<?php include 'Model/Head.php'; ?>
<body>
<?php include 'Model/Navbar.php';
echo getNavbar("single-product.php")?>




    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Ürün</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php include 'Model/LeftProduct.php';
                echo LeftProduct();?>

                <div class="col-md-8">
                    <?php include 'Model/Product.php';
                    echo GetProduct($_GET['id']);?>

                    <?php echo "TEST1";?>
                        <div class="related-products-wrapper">
                            <?php echo "TEST2";?>
                            <h2 class="related-products-title">Yeni Ürünler</h2>
                            <?php echo "TEST3";?>
                            <div class="related-products-carousel">
                                <?php echo "TEST4";?>
                                <?php include($_SERVER['DOCUMENT_ROOT'].'/POST/API.php');
                                echo "TEST"; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'Model/Footer.php';
    include 'Model/Scripts.php'
    ?>
  </body>
</html>
