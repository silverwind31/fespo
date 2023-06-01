<div class="articles__row">
    <?php if(!empty($models)): ?>
        <?php foreach ($models as $model): ?>
            <?php $image = \common\components\StaticFunctions::getImage($model->image, 'articles', $model->id) ?>
            <div class="articles__col">
                <div class="articles-item">
                    <div class="articles-item__image"><a href="<?=\yii\helpers\Url::to(['/articles/view', 'id' => $model -> id])?>"><img src='<?=$image?>' alt='img'></a></div>
                    <div class="articles-item__title"><a href="<?=\yii\helpers\Url::to(['/articles/view', 'id' => $model -> id])?>"><?= $model->title ?></a></div>
                    <div class="articles-item__date"><?= $model->published_date ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php  endif;?>
</div>
<?= \yii\widgets\LinkPager::widget([
    'pagination' => $pagination,
    'prevPageLabel' => '<img src="/img/icon-arrow-prev.svg" alt="img">',
    'nextPageLabel' => '<img src="/img/icon-arrow-next.svg" alt="img">',
    'maxButtonCount' => 5,
    'options' => ['class' => 'paginator'],
    'activePageCssClass' => 'active',
]) ?>