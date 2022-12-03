<?php
    require "include/head.php";
    require "include/data/products.php";
?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Votre Panier</h2>
        <p>Résumé de vos achats</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (empty($_COOKIE["panier"])) : ?>
                <tr>
                    <td>Vous n'avez pas d'article!</td>
                </tr>
                <?php else : 
                    $i = 0;
                    foreach ($catalog as $id => $cookie) { ?>
                        <tr>
                            <?php if (!empty($_COOKIE['panier'][$number[$i]])) { ?>
                                <td><?= $cookie['name']; ?></td>
                                <td><?= $_COOKIE['panier'][$number[$i]]; ?></tr>
                            <?php } ?>
                        </tr>
                    <?php $i++; ?>
                    <?php } ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'include/foot.html'; ?>
