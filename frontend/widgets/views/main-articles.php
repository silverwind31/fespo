<section class="mainarticles">
    <div class="center-wrapper">
        <h2 class="mainarticles__title title_2">Статьи</h2>
        <div class="mainarticles__list">
            <?php if(!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                    <?php $image = \common\components\StaticFunctions::getImage($model->image, 'articles', $model->id) ?>
                    <div class="mainarticles-item">
                        <a href="<?=\yii\helpers\Url::to(['/articles/view', 'id' => $model->id])?>" class="mainarticles-item__image"><img src="<?=$image?>" alt="img"></a>
                        <div class="mainarticles-item__content">
                            <div class="mainarticles-item__title"><a href="<?=\yii\helpers\Url::to(['/articles/view', 'id' => $model->id])?>"><?=$model->title?></a></div>
                            <div class="mainarticles-item__date"><?=$model->published_date?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a href="#" class="mainarticles__all btn">Все статьи</a>
    </div><!-- end center-wrapper -->
</section><!-- end mainarticles -->
