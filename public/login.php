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
echo getNavbar("index.php")?>

<div class="container">
    <div class="row">
        <?php include 'Model/LeftProduct.php';
        echo LeftProduct();?>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6">
    <form action="login.php" method="post">
        <h2 class="text-center">GİRİŞ</h2>
        <div class="form-group">
            <input type="text" name="login" class="form-control" placeholder="Mail" required="required">
        </div>
        <div class="form-group">
            <input type="password"  name = "password" class="form-control" placeholder="Şifre" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Giriş Yap"></input>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Beni Hatırla</label>
            <a href="#" class="float-right">Şifremi Unuttum</a>
        </div>
    </form>
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
