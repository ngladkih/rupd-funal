<?php
use yii\helpers\Html;

?>
<div class="base-text">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p style="text-align: center;">
                Министерство образования и науки Российской Федерации
                Федеральное государственное бюджетное образовательное
                учреждение высшего образования
                <br>«Уральский государственный педагогический университет»<br>
                Институт <?= $subject->institute->name ?><br>
                Кафедра <?= $subject->department->name ?>
            </p>
            <p style="font-weight: bold; font-size: 20px; margin-top: 100px; text-align: center;">
               РАБОЧАЯ ПРОГРАММА ДИСЦИПЛИНЫ
            </p>
            <p style="font-weight: bold; font-size: 20px; text-align: center; ">«<?= $subject->name ?>»</p>

            <p style="margin-top: 250px; text-align: center; "><?= $subject->town ?> <?= date('Y') ?> </p>
        </div>
    </div>
    <div class="row" style="margin-top: 150px; ">
        <div class="col-md-8 col-md-offset-2">
            <p style="text-indent: 50px; ">Рабочая программа дисциплины</p>
            <p style="text-indent: 50px; ">«<?= $subject->name ?>»
            </p>
            <p style="text-indent: 50px; ">
                Составитель: <?= $subject->teacher->fio ?>, <?= $subject->teacher->degree ?>
                , <?= $subject->teacher->title ?>, <?= $subject->teacher->post ?>
                <?= $subject->department->name ?>
                Уральского государственного педагогического университета.
            </p>
            <p style="text-indent: 50px; ">Рабочая программа обсуждена на заседании
                кафедры <?= $subject->department->name ?> Уральского государственного педагогического университета
            </p>
            <?php foreach ($subject->department->protocol as $protocol) {
            echo '<p style="text-indent: 50px; ">Протокол от '.$protocol->date.' № '.$protocol->number.'</p>';
            } ?>

            <p style="text-indent: 50px; ">Зав. кафедрой <?= $subject->department->head ?></p>
            <p style="text-indent: 50px; ">Директор института <?= $subject->institute->name.' '.$subject->institute->director ?>
            </p>
            <?php require __DIR__ . '/include/first_part.php' ?>
            <?php require __DIR__ . '/include/second_part.php' ?>
            <?php require __DIR__ . '/include/third_part.php' ?>
            <?php require __DIR__ . '/include/forth_part.php' ?>
            <?php require __DIR__ . '/include/fifth_part.php' ?>
        </div>
    </div>
</div>


