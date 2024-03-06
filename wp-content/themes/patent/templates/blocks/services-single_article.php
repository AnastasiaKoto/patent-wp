<?php
$custom_article_title = get_field('custom_article_title');
$custom_article_desc = get_field('custom_article_desc');
?>




<?php if (!empty($custom_article_title)): ?>
    <section class="article-box <?=is_page_template("services/single-service.php")?'article-box_single':'article-box_single-two' ?>"  >
        <div class="container">
            <div class="article-box__wrapper">
                <h2 class="article-box__title"><?php echo $custom_article_title ?> </h2>
                <div class="article-box__text">
                    <?php echo $custom_article_desc ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
