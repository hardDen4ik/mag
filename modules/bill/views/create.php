<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bill */

$this->title = 'Создать Ведомость';
$this->params['breadcrumbs'][] = ['label' => 'Ведомости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
