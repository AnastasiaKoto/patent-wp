<?php
$custom_article_title2 = get_field('custom_article_title2');
$custom_article_desc2 = get_field('custom_article_desc2');
?>




<?php if (!empty($custom_article_title2)): ?>
    <section class="article-box">
        <div class="container">
            <div class="article-box__wrapper">
                <h2 class="article-box__title"><?php echo $custom_article_title2 ?> </h2>
                <div class="article-box__text">
                    <?php echo $custom_article_desc2 ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
