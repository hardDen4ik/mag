<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserMy */

$this->title = 'Обновить' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Mies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-my-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
