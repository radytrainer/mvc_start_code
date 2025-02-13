<div class="container">
    <h1>Categories List</h1>
    <hr>
    <ul class="list-group">
        <?php foreach ($categories as $category): ?>
            <li class="list-group-item"><?= $category['cat_name'] ?></li>
        <?php endforeach; ?>
    </ul>
</div>