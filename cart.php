<?php
    require "include/head.php";
    require "include/data/products.php";
?>
<section class="cookies container-fluid">
    <div class="row">
        <h2>Your basket</h2>
        <p>Summary of your purchases</p>
        <table class="table">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (empty($_COOKIE["basket"])) : ?>
                <tr>
                    <td>You don't have any article in your basket!</td>
                </tr>
                <?php else : 
                    $i = 0;
                    foreach ($catalog as $id => $cookie) { ?>
                        <tr>
                            <?php if (!empty($_COOKIE['basket'][$number[$i]])) { ?>
                                <td><?= $cookie['name']; ?></td>
                                <td><?= $_COOKIE['basket'][$number[$i]]; ?></tr>
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
