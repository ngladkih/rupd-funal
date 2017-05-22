<p style="font-weight: bold; text-align: center; margin-top: 50px; ">2. УЧЕБНО-ТЕМАТИЧЕСКОЕ ПЛАНИРОВАНИЕ</p>
<div class="panel panel-default">
    <div class="panel-heading"><p style="text-align: center">Учебно-тематический план очной формы обучения</p>
    </div>
    <div class="panel-body table-responsive">
        <table class="table my-table table-striped" style="font-size: 12px">
            <thead>
            <tr>
                <th colspan="3"></th>
                <th colspan="4" style="text-align: center">Аудиторные занятия</th>
                <th></th>
            </tr>
            <tr>
                <th><p>№п\п</p></th>
                <th><p>Наименование темы</p></th>
                <th><p>Всего трудоемкость</p></th>
                <th><p>Всего</p></th>
                <th><p>Лекции</p></th>
                <th><p>Практические</p></th>
                <th><p>Лабораторные</p></th>
                <th><p>Самостоятельная работа</p></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            $sum1 = $sum2 = $sum3 = $sum4 = $sum5 = $sum6 = 0;
            ?>
            <?php foreach ($themes as $theme): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $theme->title ?></td>
                    <td><?= $theme->lect + $theme->pract + $theme->lab + $theme->iw ?></td>
                    <td><?= $theme->lect + $theme->pract + $theme->lab ?></td>
                    <td><?= $theme->lect ?></td>
                    <td><?= $theme->pract ?></td>
                    <td><?= $theme->lab ?></td>
                    <td><?= $theme->iw ?></td>
                </tr>
                <?php
                $i++;
                $sum1 += $theme->lect + $theme->pract + $theme->lab + $theme->iw;
                $sum2 += $theme->lect + $theme->pract + $theme->lab;
                $sum3 += $theme->lect;
                $sum4 += $theme->pract;
                $sum5 += $theme->lab;
                $sum6 += $theme->iw;
                ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="2" style="text-align: right">Контроль:</td>
                <td><?= $subject->control?></td>
                <td colspan="5"></td>
            </tr>
            <tr>
            <td colspan="2" style="text-align: right">Итого:</td>
            <td><?= $sum1+$subject->control ?></td>
            <td><?= $sum2 ?></td>
            <td><?= $sum3 ?></td>
            <td><?= $sum4 ?></td>
            <td><?= $sum5 ?></td>
            <td><?= $sum6 ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>