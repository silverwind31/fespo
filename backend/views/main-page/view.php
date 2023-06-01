<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\MainPage $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Main Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="card">
    <div class="card-header">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="d-flex align-items-center gap-2">
            <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
            'method' => 'post',
            ],
            ]) ?>
        </div>
    </div>
    <div class="card-body">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
                    'id',
            'main_top_text:ntext',
            'main_top_description:ntext',
            'main_block_title',
            'main_block_subtitle:ntext',
            'main_block_image',
            'main_block_feature_1_title',
            'main_block_feature_1_subtitle',
            'main_block_feature_2_title',
            'main_block_feature_2_subtitle',
            'main_block_feature_3_title',
            'main_block_feature_3_subtitle',
            'second_block_content:ntext',
            'second_block_image',
            'about_company_title',
            'about_company_content:ntext',
            'about_company_image',
        ],
        ]) ?>
    </div>
</div>
