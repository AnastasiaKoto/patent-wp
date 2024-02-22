<?php
$article_reg_boxes = get_field('article_reg_box');
$article_reg_box_field = get_field_object('article_reg_box');

?>



<?php if ( !empty($article_reg_boxes)): ?>
    <section class="interesting">

        <div class="container">
            <h2 class="titles"><?php echo   $article_reg_box_field['label'] ?></h2>
            <ul class="interesting__list">

                <?php foreach ($article_reg_boxes as $article_reg_box): ?>
                    <?php
                    $linked_post = $article_reg_box['article_reg']; // Получаем связанную запись
                    if ($linked_post):
                        ?>
                        <li class="interesting__item">
                            <?php
                            $post_thumbnail_id = get_post_thumbnail_id($linked_post->ID); // Получаем ID изображения записи
                            if ($post_thumbnail_id) {
                                $post_thumbnail = wp_get_attachment_image_src($post_thumbnail_id, 'full'); // Получаем полное изображение записи
                                $post_thumbnail_url = $post_thumbnail[0]; // URL полного изображения
                                ?>
                                <div class="interesting__img">
                                    <img src="<?php echo $post_thumbnail_url; ?>" alt="">
                                </div>
                            <?php } ?>

                            <a href="<?php echo get_permalink($linked_post->ID); ?>">
                                <h3 class="interesting__title"><?php echo get_the_title($linked_post->ID); ?></h3>

                                <div class="interesting__text"><?php echo get_field('artic_short-descr', $linked_post->ID); ?></div>

                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </div>

    </section>
<?php endif; ?>
