<p style="font-weight: bold; text-align: center; margin-top: 50px; ">4. ФОНД ОЦЕНОЧНЫХ СРЕДСТВ ДЛЯ ПРОВЕДЕНИЯ
    ПРОМЕЖУТОЧНОЙ АТТЕСТАЦИИ ПО ДИСЦИПЛИНЕ
</p>
<p style="text-indent: 50px;">
    Изучение дисциплины согласно ФГОС ВО должно обеспечивать формирование
    компетенций:
<?php if (isset($subject->first_c)): ?>
    <?= $subject->first_c->code ?>– <?= $subject->first_c->name ?>
<?php endif; ?>
<?php if (isset($subject->second_c)): ?>
    <?= $subject->second_c->code ?>– <?= $subject->second_c->name ?>
<?php endif; ?>
<?php if (isset($subject->third_c)): ?>
    <?= $subject->third_c->code ?>– <?= $subject->third_c->name ?>
<?php endif; ?>
</p>
<?php if (!empty($themes)): ?>
    <div class="panel-body table-responsive">
        <table class="table" style="font-size: 14px; width: 100%; ">
            <thead>
            <tr>
                <th>#</th>
                <th>Раздел</th>
                <th>Компоненты компетенции</th>
                <th>Оценочное средство</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            <?php foreach ($themes as $theme): ?>
                <?php
                if (
                    (isset($theme->found->know) && isset($theme->found->first_mark))
                    || (isset($theme->found->can) && isset($theme->found->second_mark))
                    || (isset($theme->found->own) && isset($theme->found->third_mark))
                ): ?>
                    <tr style="background-color: #F9F9F9">
                        <td><p><?= $i ?></p></td>
                        <td colspan="3"><p><?= $theme->title ?></p></td>
                    </tr>
                    <?php if (isset($theme->found->know) && isset($theme->found->first_mark)): ?>
                        <tr>
                            <td></td>
                            <td><p><i>знает:</i></p>
                            </td>
                            <td><p><?= $theme->found->know ?></p>
                            </td>
                            <td><p><?= $theme->found->first_m->name ?></p>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if (isset($theme->found->can) && isset($theme->found->second_mark)): ?>
                        <tr>
                            <td></td>
                            <td><p><i>умеет:</i></p>
                            </td>
                            <td><p><?= $theme->found->can ?></p>
                            </td>
                            <td><p><?= $theme->found->second_m->name ?></p>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php if (isset($theme->found->own) && isset($theme->found->third_mark)): ?>
                        <tr>
                            <td></td>
                            <td><p><i>владеет</i></p>
                            </td>
                            <td><p><?= $theme->found->own ?></p>
                            </td>
                            <td><p><?= $theme->found->third_m->name ?></p>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php $i++ ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>