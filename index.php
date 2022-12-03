<?php

if (!empty($_GET['add_to_cart'])) {
    switch ($_GET["add_to_cart"]) {
        case "46":
            if (empty($_COOKIE['panier']['pecanNuts'])) {
                setCookie("panier[pecanNuts]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["pecanNuts"]++;
            setCookie("panier[pecanNuts]",$_COOKIE["panier"]["pecanNuts"]);
            break;
        case "36":
            if (empty($_COOKIE['panier']['chocolateChips'])) {
                setCookie("panier[chocolateChips]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["chocolateChips"]++;
            setCookie("panier[chocolateChips]",$_COOKIE["panier"]["chocolateChips"]);
            break;
        case "58":
            if (empty($_COOKIE['panier']['chocolateCookie'])) {
                setCookie("panier[chocolateCookie]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["chocolateCookie"]++;
            setCookie("panier[chocolateCookie]",$_COOKIE["panier"]["chocolateCookie"]);
            break;
        case "32":
            if (empty($_COOKIE['panier']['mmsCookies'])) {
                setCookie("panier[mmsCookies]", 1);
                header ("location: index.php");
                break;
            }
            $_COOKIE['panier']["mmsCookies"]++;
            setCookie("panier[mmsCookies]",$_COOKIE["panier"]["mmsCookies"]);
            break;
    }
}
require "include/head.php";
require "connected.php";
require "include/data/products.php";
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php     
            $i = 0;
            foreach ($catalog as $id => $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <h4>
                                <?php if (isset($_COOKIE['panier'][$number[$i]])) {
                                    echo $_COOKIE['panier'][$number[$i]];
                                } 
                                $i++;?>
                            </h4>
                            <p><?= $cookie['description']; ?></p>
                            <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                            </a>
                        </figcaption>
                    </figure>
                </div>
        <?php } ?>
    </div>
</section>
<?php require 'include/foot.html'; ?>
