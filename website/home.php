<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM books ORDER BY id DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('home')?>

<div class="featured">
    <h2>Foundation Books</h2>
    <p>Tools that lay the foundation of your future</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Recent Books</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="<?=$product['image']?>" width="200" height="300" alt="<?=$product['Name']?>">
            <span class="name"><?=$product['Name']?></span>
            <span class="price">
                &#82;<?=$product['Price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&#82;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>