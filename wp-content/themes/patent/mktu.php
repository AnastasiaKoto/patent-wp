<?php
/* Template Name: МКТУ
 */
get_header();
$class_sections = get_field('class_sections');

?>



<main class="main">
    <?php get_template_part('templates/blocks/titles', 'wrapper'); ?>

    <section class="section-mkty">
        <div class="container">
            <!-- Loop through class sections -->
            <?php foreach ($class_sections as $class_section) : ?>
                <div class="section-mkty__area sectiom-mkty-area">
                    <div class="sectiom-mkty__title">
                        <?php echo $class_section['class_section_title']; ?>
                    </div>

                    <!-- Loop through class subsections -->
                    <?php foreach ($class_section['class_subsections'] as $subsection) : ?>
                        <div class="sectiom-mkty-area__row">
                            <div class="section-mkty-area__items">
                                <!-- Loop through subsection items -->
                                <?php foreach ($subsection['class_subsections_item'] as $item) : ?>
                                    <a href="javascript:void(0)" data-target="mkty-tabs-item_<?php echo $item['class_subsections_num']; ?>"
                                       data-number="<?php echo $item['class_subsections_num']; ?>"
                                       class="section-mkty-area__item section-mkty-area-item <?php echo ($item['class_subsections_num'] == 1) ? 'section-mkty-area-item_active' : ''; ?>">
                                        <?php echo $item['class_subsections_num']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="section-mkty-area__name">
                                <?php echo $subsection['class_subsections_title']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

            <!-- Tabs and Tab Content -->
            <div class="section-mkty__tabs section-mkty-tabs">
                <!-- Loop through class sections for tabs -->
                <?php foreach ($class_sections as $class_section) : ?>
                    <!-- Loop through class subsections for tab content -->
                    <?php foreach ($class_section['class_subsections'] as $subsection) : ?>
                        <?php foreach ($subsection['class_subsections_item'] as $item) : ?>
                            <div class="section-mkty-tabs__item section-mkty-tabs-item" id="mkty-tabs-item_<?php echo $item['class_subsections_num']; ?>">
                                <!-- Tab Content Here -->

                                    <!-- Content -->
                                <!--    <h3  class="section-mkty-tabs-item__title"><?php /*echo $class_section['class_section_title']; */?> <?php /*echo $item['class_subsections_num']; */?> МКТУ </h3>-->
                                    <?php foreach ($item['class_subsections_description'] as $description) : ?>
                                        <div class="section-mkty-tabs-item__part">
                                        <?php if (isset($description['title'])) : ?>
                                            <h3 class="section-mkty-tabs-item__title"><?php echo $description['title']; ?></h3>
                                        <?php endif; ?>

                                        <?php if (isset($description['text'])) : ?>
                                            <p><?php echo $description['text']; ?></p>
                                        <?php endif; ?>

                                </div>
                                    <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <!--end tabs -->

        </div>
    </section>
</main>
<?php get_footer(); ?>
