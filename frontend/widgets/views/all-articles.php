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
<ul class="paginator">
    <?php if ($pagination->getPageCount() > 1): ?>
        <?php if ($pagination->getPage() > 0): ?>
            <li><a href="<?= $pagination->createUrl($pagination->getPage() - 1) ?>"><img src='/img/icon-arrow-prev.svg' alt='img'></a></li>
        <?php else: ?>
            <li><img src='/img/icon-arrow-prev.svg' alt='img'></li>
        <?php endif; ?>
        <?php foreach (range(0, $pagination->getPageCount() - 1) as $page): ?>
            <?php if ($page === $pagination->getPage()): ?>
                <li class="current"><?= $page + 1 ?></li>
            <?php else: ?>
                <li><a href="<?= $pagination->createUrl($page) ?>"><?= $page + 1 ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if ($pagination->getPage() < $pagination->getPageCount() - 1): ?>
            <li><a href="<?= $pagination->createUrl($pagination->getPage() + 1) ?>"><img src='/img/icon-arrow-next.svg' alt='img'></a></li>
        <?php else: ?>
            <li><img src='/img/icon-arrow-next.svg' alt='img'></li>
        <?php endif; ?>
    <?php endif; ?>
</ul>