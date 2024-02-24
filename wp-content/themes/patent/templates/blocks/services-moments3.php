<?php
$important_moments3 = get_field('important_moments3');
?>


<?php if (!empty($important_moments3)): ?>
    <h2 class="titles">Важные моменты</h2>
    <div class="points__wrapper">
        <ul class="points__list">
            <?php foreach ($important_moments3 as $moment): ?>
                <li class="points__item">
                    <p class="points__inner">
                        <span class="points__item--500"><?php echo $moment['question']; ?></span>
                        <span class="points__item--svg">
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1.28418L6 6.28418L11 1.28418" stroke="white" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                    </p>
                    <?php if ($moment['answer']['block_type'] === 'list'): ?>
                        <div class="points__hidden">
                            <ul>
                                <?php foreach ($moment['answer']['type_list'] as $item): ?>
                                    <li><?php echo $item['list_txt']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php elseif ($moment['answer']['block_type'] === 'text'): ?>
                        <div class="points__hidden"><?php echo $moment['answer']['type_text']; ?></div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
