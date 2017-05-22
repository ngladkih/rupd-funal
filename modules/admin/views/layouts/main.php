<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!--    --><?php
    /*    NavBar::begin([
            'brandLabel' => 'Приложение',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Сгенерировать', 'url' => ['/site/index']],
                ['label' => 'Создать дисциплину', 'url' => ['/site/create-discipline']],
                ['label' => 'Прикрепить темы', 'url' => ['/site/add-theme']],
                /*['label' => 'Лабы', 'url' => ['/site/add-list-lab']],
                ['label' => 'Практ', 'url' => ['/site/add-list-pract']],
                ['label' => 'Лекц', 'url' => ['/site/add-list-lect']],
                ['label' => 'Самост', 'url' => ['/site/add-list-indept']],
                ['label' => 'Лабы', 'url' => ['/site/add-list']],
                ['label' => 'Практ', 'url' => ['/site/add-list']],
                ['label' => 'Лекц', 'url' => ['/site/add-list']],
                ['label' => 'Самост', 'url' => ['/site/add-list']],
            ],
        ]);
        NavBar::end();
        */ ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a('Home', Yii::$app->homeUrl, ['class' => 'navbar-brand', 'title' => 'Страница генерации документов']) ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><?= Html::a('Создать дисциплину', ['/site/create-discipline']) ?></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Прикрепить к дисциплине<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= Html::a('Темы', ['/site/add-theme']) ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::a('Лекционные занятия', Url::to(['/site/add-list', 'type' => 'lect'])) ?></li>
                            <li><?= Html::a('Лабораторные работы', Url::to(['/site/add-list', 'type' => 'lab'])) ?></li>
                            <li><?= Html::a('Практические работы', Url::to(['/site/add-list', 'type' => 'pract'])) ?></li>
                            <li><?= Html::a('Самостоятельные работы', Url::to(['/site/add-list', 'type' => 'iw'])) ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::a('Фонд оценочных средств', ['/site/fund']) ?></li>
                            <li><?= Html::a('Список литературы', ['/site/source']) ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Добавить <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= Html::a('Преподователей', ['/admin/teacher']) ?></li>
                            <li><?= Html::a('Кафедру', ['/admin/department']) ?></li>
                            <li><?= Html::a('Институт', ['/admin/institute']) ?></li>
                            <li><?= Html::a('Компетенции', ['/admin/competence']) ?></li>
                            <li><?= Html::a('Протокол', ['/admin/protocol']) ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Админ <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= Html::a('Дисциплины', ['/admin/subject']) ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::a('Темы', ['/admin/theme']) ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::a('Лекционные занятия', Url::to(['/admin/lectures', 'type' => 'lect'])) ?></li>
                            <li><?= Html::a('Лабораторные работы', Url::to(['/admin/laboratory', 'type' => 'lab'])) ?></li>
                            <li><?= Html::a('Практические работы', Url::to(['/admin/practical', 'type' => 'pract'])) ?></li>
                            <li><?= Html::a('Самостоятельные работы', Url::to(['/admin/independent', 'type' => 'indept'])) ?></li>
                            <li role="separator" class="divider"></li>
                            <li><?= Html::a('Фонд оценочных средств', ['/admin/found']) ?></li>
                            <li><?= Html::a('Список литературы', ['/admin/source']) ?></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <? /*= date('Y') */ ?></p>

        <p class="pull-right"><? /*= Yii::powered() */ ?></p>
    </div>
</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
