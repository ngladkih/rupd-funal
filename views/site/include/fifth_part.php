<?php //if(!empty($sources)): ?>
<p style="font-weight: bold; text-align: center; margin-top: 50px; ">5. ПЕРЕЧЕНЬ ОСНОВНОЙ И ДОПОЛНИТЕЛЬНОЙ УЧЕБНОЙ ЛИТЕРАТУРЫ, НЕОБХОДИМОЙ ДЛЯ ОСВОЕНИЯ ДИСЦИПЛИНЫ</p>
<p style="text-align: center"><i>Основная учебная литература</i></p>
<?php $i=1 ?>
<?php foreach ($sources as $source): ?>
    <?php if ($source->basic): ?>
    <p style="text-indent: 50px; ">
        <?= $i ?>. <?= $source->authors ?>
        <?= $source->title ?>.
        <?= $source->town ?>.
        <?= $source->publisher ?>.
        <?= $source->year ?>.
        <?= $source->pages ?>с.
        <?= $source->link ?>
    </p>
    <?php $i++ ?>
        <?php endif; ?>
<?php endforeach; ?>
<p style="text-align: center"><i>Дополнительная учебная литература</i></p>
<?php $i=1 ?>
<?php foreach ($sources as $source): ?>
    <?php if (!$source->basic): ?>
        <p style="text-indent: 50px; ">
            <?= $i ?>. <?= $source->authors ?>
            <?= $source->title ?>.
            <?= $source->town ?>.
            <?= $source->publisher ?>.
            <?= $source->year ?>.
            <?= $source->pages ?>с.
            <?= $source->link ?>
        </p>
        <?php $i++ ?>
    <?php endif; ?>
<?php endforeach; ?>
<?php //endif; ?>