<section class="mainprojects">
    <div class="center-wrapper">
        <h2 class="mainprojects__title title_2">Проектирование</h2>
        <?php if(!empty($models)): ?>
            <div class="mainprojects-carousel">
                <?php foreach ($models as $model): ?>
                    <?php $image = \common\components\StaticFunctions::getImage($model->image, 'projects', $model->id) ?>
                    <div class="mainprojects-carousel__slide">
                    <a href="<?=\yii\helpers\Url::to(['/projects/view', 'id' => $model->id])?>" class="mainprojects-carousel__item">
                        <div class="project-item__image"><img src='<?=$image?>' alt='img'></div>
                        <div class="project-item__content">
                            <div class="project-item__title"><?=$model->name?></div>
                            <div class="project-item__desc"><?=$model->description?></div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <a href="<?=\yii\helpers\Url::to(['/projects'])?>" class="mainprojects__all btn">Посмотреть все проекты</a>
    </div><!-- end center-wrapper -->
</section><!-- end mainprojects -->