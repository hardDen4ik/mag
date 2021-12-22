<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserMy */

$this->title = 'Create User My';
$this->params['breadcrumbs'][] = ['label' => 'User Mies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-my-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
