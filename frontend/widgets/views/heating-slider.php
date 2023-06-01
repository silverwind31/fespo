<?php

use common\components\StaticFunctions;

?>
<section class="promo">
    <div class="promoslider">
        <?php if(!empty($heatingSlides)): ?>
            <?php foreach ($heatingSlides as $slide): ?>
                <?php $image = StaticFunctions::getImage($slide->image, 'heating-slider', $slide->id) ?>
                <div class="promoslider__slide">
                    <div class="promoslider__image"><img src='<?=$image?>' alt='img'></div>
                    <div class="promoslider__content">
                        <div class="center-wrapper">
                            <h1 class="promoslider__title"><?=$slide->title?></h1>
                            <div class="promoslider__desc"><?=$slide->description?></div>
                            <a href="#" class="promoslider__btn btn js-btn-callback">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section><!-- end promo -->