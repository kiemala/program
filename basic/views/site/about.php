<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Программа, моделирующая бросание двух костей. Кости - шестигранные кубики, каждая грань которых имеет значение очков от 1 до 6 включительно. По теории вероятности, количество очков равное 7 должно выпадать чаще других. Примерно в 1/6 всех случаев. Программа бросает две кости ровно 36000 раз.
    </p>

  
</div>
