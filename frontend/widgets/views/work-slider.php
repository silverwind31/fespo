<section class="work">
    <div class='center-wrapper'>
        <h2 class="work__title">Как мы работаем</h2>
        <div class="work-slider">
            <?php if(!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php $image = \common\components\StaticFunctions::getImage($model->image, 'work-slider', $model->id) ?>
                    <div class="work-slider__slide">
                <div class="work-section">
                    <a href="<?=$model->url?>" class="work-section__video fancybox"><img src='<?=$image?>' alt='img'></a>
                    <div class="work-section__desc">
                        <?=$model->description?>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div><!-- end center-wrapper -->
</section><!-- end work -->
