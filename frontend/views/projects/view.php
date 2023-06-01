<?php

use frontend\widgets\Callback;
use frontend\widgets\Letters;
use frontend\widgets\MainContacts;

$this->title = 'Проектирование - ' . $model->name;
?>
<div class="top_bg" style="background-image: url('/img/about-top-image.jpg');"></div>
<div class="main">
    <div class='center-wrapper'>
        <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
                <li><a href="<?=\yii\helpers\Url::home()?>">Главная</a></li>
                <li><a href="<?=\yii\helpers\Url::to(['/projects'])?>">Проектирование</a></li>
                <?= !empty($model->name) ? "<li>{$model->name}</li>" : "" ?>
            </ul>
        </div>
        <?php if(!empty($model)): ?>
            <?php $image = \common\components\StaticFunctions::getImage($model->image, 'projects', $model->id) ?>
            <div class="project">
            <div class="project__row">
                <div class="project__image"><img src='<?=$image?>' alt='img'></div>
                <div class="project__content">
                    <h2 class="project__title"><?=$model->name?></h2>
                    <div class="project__desc">
                        <?=$model->content?>
                    </div>
                    <div class="project__stats">
                        <?php if(!empty($projectStats)): ?>
                            <?php foreach ($projectStats as $stat): ?>
                                <div class="project__stats-item">
                                    <div class="project__stats-value"><?=$stat->name?></div>
                                    <div class="project__stats-caption"><?=$stat->value?></div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <a href="<?=\yii\helpers\Url::to(['/projects'])?>" class="project__other btn">Посмотреть другие проекты</a>
                </div>
            </div>
            <div class="project-garantees">
                <h2 class="project-garantees__title">Гарантия</h2>
                <div class="project-garantees__row">
                    <div class="project-garantees__col">
                        <p class="text-uppercase"><?=$model->project_garantees_title?></p>
                        <?=$model->project_garantees_description_1?>
                    </div>
                    <div class="project-garantees__col">
                        <?=$model->project_garantees_description_2?>
                    </div>
                </div>
            </div>
        </div><!-- end project -->
        <?php endif; ?>
    </div><!-- end center-wrapper -->
</div><!-- end main -->

<?= Callback::widget()?>

<?= Letters::widget()?>

<?= MainContacts::widget()?>
