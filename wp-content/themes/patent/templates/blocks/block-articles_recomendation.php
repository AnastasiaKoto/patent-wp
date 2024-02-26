<?php
$recomendations = get_field('recomend');

$recomendations_field = get_field_object('recomend');


if ($recomendations) {
    ?>
    <section class="articles">
        <div class="container">
            <div class="articles__block">
                <h2 class="titles">
                    <?php echo $recomendations_field['label']; ?>
                </h2>
                <div class="tabs articles__tabs flex">
                    <ul class="tabs__caption">
                        <?php
                        foreach ($recomendations as $index => $recomendation) {
                            ?>
                            <li class="<?php if ($index === 0) echo 'active'; ?>"><?php echo $recomendation['title_section']; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                    foreach ($recomendations as $index => $recomendation) {
                        ?>
                        <div class="tabs__content article__content <?php if ($index === 0) echo 'active'; ?>">
                            <div class="article__subtitle">
                                <?php echo $recomendation['title_section']; ?>
                            </div>
                            <div class="title">
                                <?php echo $recomendation['title_block']; ?>
                            </div>
                            <div class="article__txt">
                                <?php echo $recomendation['content_block']; ?>
                            </div>
                            <div class="article__content-list flex">
                            <?php
                            foreach ($recomendation['stages']  as $stage_index => $stage) {
                                ?>
                                    <div class="article__content-list_point">
                                        <div class="art__count"><div><?php echo $stage_index + 1; ?></div></div>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($stage['img']['url']); ?>" alt="">
                                        </div>
                                        <div class="sm__title"><?php echo $stage['title']; ?></div>
                                    </div>

                                <?php
                            }
                            ?>
                                </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>
