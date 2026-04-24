<h3>Search Results for: <?= $search ?></h3>

<?php if (!empty($result)) { ?>
    <?php foreach ($result as $pro) { ?>
        <div class="product-box">
            <h4><?= $pro['product_name'] ?></h4>
            <p>Slug: <?= $pro['product_slug'] ?></p>
        </div>
    <?php } ?>
<?php } else { ?>
    <p>No products found.</p>
<?php } ?>
