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
                            <li data-target="<?= $index ?>" class="<?php if ($index === 0)
                                  echo 'active'; ?>">
                                <?php echo $recomendation['title_section']; ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                    foreach ($recomendations as $index2 => $recomendation) {
                        ?>
                        <div id="tab__content_<?=$index2 ?>" class="tabs__content article__content <?php if ($index === 0)
                              echo 'active'; ?>">
                            <div class="article__subtitle">
                                <?php echo $recomendation['title_section']; ?>
                            </div>
                            <div class="title">
                                <?php echo $recomendation['title_block']; ?>
                            </div>
                            <div class="article__txt">
                                <?php echo $recomendation['content_block']; ?>
                              
                        
                                <!-- end contunie -->

                                

                            </div>
                            <? if(!empty($recomendation['stages'])){?>
                            <div class="article__content-list flex article__content-list_text">
                                <?php
                                foreach ($recomendation['stages'] as $stage_index => $stage) {
                                    ?>
                                    <div
                                        class="article__content-list_point <? if ($stage_index == 4) { ?>article__content-list_point_active <? } ?>">
                                        <div class="art__count">
                                            <div>
                                                <?php echo $stage_index + 1; ?>
                                            </div>
                                        </div>
                                        <div class="icon">
                                            <img src="<?php echo esc_url($stage['img']['url']); ?>" alt="">
                                        </div>
                                        <div class="sm__title">
                                            <?php echo $stage['title']; ?>
                                        </div>
                                    </div>

                                    <?php
                                }
                                ?>
                            </div>
                            <? }?>

                            <div class="article-advice">
                                    <div class="article-advice__image">
                                        <img src="/wp-content/themes/patent/images/rupor.png">
                                    </div>
                                    <div class="article-advice__desc">
                                        <div class="article-advice__name">Совет </div>
                                        <div class="article-advice__text">ЗДЕСЬ ВЫ МОЖЕТЕ ПРИГЛАСИТЬ МЕНЯ В КАЧЕСТВЕ ЭКСПЕРТА,
                                            ПОДТВЕРЖДАЮЩЕГО ВОЗМОЖНОСТЬ ПОЛУЧЕНИЯ ПАТЕНТА, ЗАЩИЩАЮЩЕГО ПРОДУКТ </div>
                                        <div class="article-advice__subtext">Если вы оказались на этом этапе без предыдущего
                                            моего участия, то рекомедуется проработать ситуацию с самого начала и проверить все
                                            данные в отношении существенных приззнаков и формулы патента в целом. </div>
                                    </div>
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