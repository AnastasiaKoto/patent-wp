<?php
$approach_wrapper = get_field('approach_wrapper');
$approach_wrapper_field = get_field_object('approach_wrapper');
?>



<?php if (!empty($approach_wrapper)):?>
    <section class="approach">
        <div class="container">
            <h2 class="titles">  <?php echo $approach_wrapper_field['label'] ?></h2>
            <ul class="approach__list">

                <?php foreach ($approach_wrapper as $item) { ?>
                    <li class="approach__item">
                        <div class="approach__img">   <img src="<?php echo $item['img']['url']; ?>" alt="<?php echo $item['title']; ?>"></div>
                        <h3 class="approach__title"><?php echo $item['title']; ?></h3>
                        <div class="approach__text">
                            <?php echo $item['desc']; ?>
                            <?php if (!empty($item['href_box'])) { ?>
                                <div class="href-box">
                                    <?php foreach ($item['href_box'] as $href) { ?>
                                        <?php echo $href['href']; ?>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>

                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
