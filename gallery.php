<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php foreach ($arrImg[0] as $index => $href): ?>
            <a rel="gallery" class="photo" href="<?= $href ?>">
                <img src="<?= $arrImg[1][$index] ?>" width="150" height="100" alt="img" />
            </a>
        <?php endforeach; ?>
    </div>
</div>