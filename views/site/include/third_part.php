<p style="font-weight: bold; text-align: center; margin-top: 50px; ">3. СОДЕРЖАНИЕ ДИЦИПЛИНЫ</p>
<p style="text-align: center"><b>Общее содержание дисциплины</b></p>
<?php
$i = 1;
$inds = false;
$labs = false;
$lects = false;
$practs = false;
?>
<?php foreach ($themes as $theme): ?>
    <?php if (!empty($theme->independent)): ?>
        <?php $inds = true ?>
    <?php endif; ?>
    <?php if (!empty($theme->laboratory)): ?>
        <?php $labs = true ?>
    <?php endif; ?>
    <?php if (!empty($theme->lectures)): ?>
        <?php $lects = true ?>
    <?php endif; ?>
    <?php if (!empty($theme->practical)): ?>
        <?php $practs = true ?>
    <?php endif; ?>
    <p style="text-indent: 50px"><b><?= $i ?>. <?= $theme->title ?></b></p>
    <p style="text-indent: 50px"><?= $theme->description ?></p>

    <?php $i++ ?>
<?php endforeach; ?>
<?php if ($lects): ?>
    <p style="text-align: center; margin-top: 50px; "><i>Перечень тем лекционных занятий</i></p>
    <div class="panel-body table-responsive">
        <table class="table my-table table-striped" style="font-size: 14px">
            <thead>
            <tr>
                <th><p>№п\п</p></th>
                <th><p>Наименование темы</p></th>
                <th><p>Содержание раздела</p></th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($themes as $theme): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $theme->title ?></td>
                    <td>
                        <?php if (!empty($theme->lectures)): ?>
                            <?php foreach ($theme->lectures as $lecture): ?>
                                <p>
                                    <?= $lecture->desctiption ?>
                                </p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?php if ($labs): ?>
    <p style="text-align: center; margin-top: 50px; "><i>Перечень тем лабораторных работ</i></p>
    <div class="panel-body table-responsive">
        <table class="table my-table table-striped" style="font-size: 14px">
            <thead>
            <tr>
                <th><p>№п\п</p></th>
                <th><p>Наименование темы</p></th>
                <th><p>Содержание раздела</p></th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($themes as $theme): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $theme->title ?></td>
                        <td><?php if (!empty($theme->laboratory)): ?>
                                <?php foreach ($theme->laboratory as $laboratory): ?>
                                    <p>
                                        <?= $laboratory->desctiption ?>
                                    </p>
                                <?php endforeach; ?>
                            <?php endif; ?></td>
                    </tr>
                    <?php $i++ ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?php if ($practs): ?>
    <p style="text-align: center; margin-top: 50px; "><i>Перечень тем практических работ</i></p>
    <div class="panel-body table-responsive">
        <table class="table my-table table-striped" style="font-size: 14px">
            <thead>
            <tr>
                <th><p>№п\п</p></th>
                <th><p>Наименование темы</p></th>
                <th><p>Содержание раздела</p></th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($themes as $theme): ?>
                <?php if (isset($theme->practical)): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $theme->title ?></td>
                        <td><?php if (!empty($theme->practical)): ?>
                                <?php foreach ($theme->practical as $practical): ?>
                                    <p>
                                        <?= $practical->desctiption ?>
                                    </p>
                                <?php endforeach; ?>
                            <?php endif; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>
<?php if ($inds): ?>
    <p style="text-align: center; margin-top: 50px; "><i>Перечень тем самостоятельных работ</i></p>
    <div class="panel-body table-responsive">
        <table class="table my-table table-striped" style="font-size: 14px">
            <thead>
            <tr>
                <th><p>№п\п</p></th>
                <th><p>Наименование темы</p></th>
                <th><p>Содержание раздела</p></th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($themes as $theme): ?>
                <?php if (isset($theme->independent)): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $theme->title ?></td>
                        <td><?php if (!empty($theme->independent)): ?>
                                <?php foreach ($theme->independent as $independent): ?>
                                    <p>
                                        <?= $independent->desctiption ?>
                                    </p>
                                <?php endforeach; ?>
                            <?php endif; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>