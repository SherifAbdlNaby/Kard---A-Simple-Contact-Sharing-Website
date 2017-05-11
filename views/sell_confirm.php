

<?php
$stock = lookup($sell);
?>

<h3>SOLD!</h3>
<p>Sold <b><?= $amount ?></b> share of <b><?= $stock["name"] ?></b> (<?= $sell?>) at the price of <b>$<?= $stock["price"]?></b> for each share</p>
<p>at total of <b>$<?= number_format($stock["price"]*$amount, 2, '.', '') ?></b> </p>

