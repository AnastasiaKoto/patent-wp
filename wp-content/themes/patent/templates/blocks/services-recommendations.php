<?php
$recommendations_wrapper = get_field('recommendations_wrapper');
?>



<?php if (!empty($recommendations_wrapper)): ?>

    <section class="targets <?=is_page_template("services/single-service.php")?'target_single':'target_single-two' ?>" >
        <div class="container">
            <h2 class="titles">рекомендации</h2>
            <div class="targets__wrapper">
              
                <ul class="targets__list">

                    <?php foreach ($recommendations_wrapper as $item): ?>
                        <li class="targets__item">
                            <div class="targets__inner">
                                <div class="targets__img">
                                    <div class="targets__logo">
                                        <span>
                                            <?php echo $item['title']; ?>
                                        </span>
                                    </div>
                                    <img width="119" src="<?php echo $item['img']['url']; ?>"
                                        alt="<?php echo $item['img']['title']; ?>">


                                    <div class="targets__after">
                                        <span>
                                            <?php echo $item['name']; ?>
                                        </span>
                                        <span>
                                            <?php echo $item['job']; ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="targets__content">
                                    <span>
                                        <?php echo $item['desc']; ?>
                                    </span>
                                    <?php echo $item['href']; ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>




                </ul>
                <div class="slide_count slide_count-new">
                    <span class="slick-prev-new-2 keyses__slick">
                        &lt;
                    </span>
                    <span class="currentCoach">1</span><span class="slesh">/</span><span class="allCoach">2</span>
                    <span class="slick-next-new-2 keyses__slick">
                        &gt;
                    </span>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>