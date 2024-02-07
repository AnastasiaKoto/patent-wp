<?php 
    $args = array(
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    if ($query ->have_posts()) {
?>
<div class="form-bottom">
    <div class="container">
        <h2 class="titles">Услуги</h2>
        <ul class="form-bottom__list">
            <?php 
            while ( $query->have_posts() ) {
                $query->the_post();
            ?>
            <li class="form-bottom__item">
                <a href="<?php the_permalink(); ?>"></a>
                <span><?php the_title(); ?></span>
                <svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.5303 6.53033C22.8232 6.23744 22.8232 5.76256 22.5303 5.46967L17.7574 0.696699C17.4645 0.403806 16.9896 0.403806 16.6967 0.696699C16.4038 0.989593 16.4038 1.46447 16.6967 1.75736L20.9393 6L16.6967 10.2426C16.4038 10.5355 16.4038 11.0104 16.6967 11.3033C16.9896 11.5962 17.4645 11.5962 17.7574 11.3033L22.5303 6.53033ZM0 6.75H22V5.25H0V6.75Z" fill="#4B555E" fill-opacity="0.5" />
                </svg>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php } ?>