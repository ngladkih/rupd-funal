<p style="font-weight: bold; text-align: center; margin-top: 50px; ">1. ПОЯСНИТЕЛЬНАЯ ЗАПИСКА</p>
<p style="font-weight: bold; text-align: center;"><i>1.1 Наименование дисциплины:</i></p>
<p style="text-indent: 50px; "><?= $subject->name ?>.</p>
<p style="font-weight: bold; text-align: center;"><i>1.2 Область профессиональной деятельности</i></p>
<p style="text-indent: 50px; ">Область профессиональной деятельности выпускников, освоивших
    программу бакалавриата, включает исследование, разработку, внедрение и сопровождение информационных
    технологий и систем.</p>
<p style="font-weight: bold; text-align: center;"><i>1.3 Объекты профессиональной деятельности</i></p>
<p style="text-indent: 50px; ">Объекты профессиональной деятельности выпускников, освоивших
    программу бакалавриата, являются информационные процессы, технологии, системы и сети, их
    инструментальное
    (программное, техническое, организационное) обеспечение, способы и методы проектирования, отладки,
    производства и эксплуатации информационных технологий и систем в областях: наука, техника, образование,
    административное управление, безопасность информационных систем, системы массовой информации, дизайн,
    медиаиндустрия предприятия различного профиля и все виды деятельности в условиях экономики
    информационного
    общества.</p>
<p style="font-weight: bold; text-align: center;"><i>1.4 Вид профессиональной деятельности</i></p>
<p style="text-indent: 50px; ">Проектно-технологическая деятельность.</p>
<p style="font-weight: bold; text-align: center;"><i>1.5 Профессиональные задачи</i></p>
<p style="text-indent: 50px; ">Участие в работах по доводке и освоению технологических процессов
    на производственных участках;</p>
<p style="text-indent: 50px; ">Разработка и внедрение технологий разработки объектов
    профессиональной деятельности, в областях: машиностроение, приборостроение, наука, техника,
    образование,
    медицина, административное управление, юриспруденция, бизнес, предпринимательство, коммерция,
    менеджмент,
    банковские системы, безопасность информационных систем, управление технологическими процессами,
    механика,
    техническая физика, энергетика, ядерная энергетика, силовая электроника, металлургия, строительство,
    транспорт, железнодорожный транспорт, связь, телекоммуникации, управление инфокоммуникациями, почтовая
    связь, химическая промышленность, сельское хозяйство, тек-стильная и легкая промышленность, пищевая
    промышленность, медицинские и биотехнологии, горное дело, обеспечение безопасности подземных
    пред-приятий и
    производств, геология, нефтегазовая отрасль, геодезия и картография, геоинформационные системы, лесной
    комплекс, химико-лесной комплекс, экология, сфера сервиса, системы массовой информации, дизайн,
    медиаиндустрия, а также предприятия различного профиля и все виды деятельности в условиях экономики
    информационного общества.</p>
<p style="font-weight: bold; text-align: center;"><i>1.6 Цели и задачи дисциплины:</i></p>
<p style="text-indent: 50px; "><?= $subject->target ?></p>
<p style="text-indent: 50px; ">В процессе освоения дисциплины решаются задачи:</p>
<ul>
    <?php $i = 0; ?>
    <?php foreach ($tasks as $task): ?>
        <?php $i++ ?>
        <li><?= $task ?><?php if ($i < count($tasks)): ?>;<?php endif; ?></li>
    <?php endforeach; ?>

</ul>
<p style="text-indent: 50px; ">В соответствии с ФГОС ВО формируемые компетенции:
    <?php if (isset($subject->first_c)): ?>
        <?= $subject->first_c->code ?>– <?= $subject->first_c->name ?>
    <?php endif; ?>
    <?php if (isset($subject->second_c)): ?>
        <?= $subject->second_c->code ?>– <?= $subject->second_c->name ?>
    <?php endif; ?>
    <?php if (isset($subject->third_c)): ?>
        <?= $subject->third_c->code ?>– <?= $subject->third_c->name ?>
    <?php endif; ?>
<p style="font-weight: bold; text-align: center;"><i>1.7 Место дисциплины в структуре ОПОП ВО</i></p>
<p style="text-indent: 50px; ">Курс «<?= $subject->name ?>» (<?= $subject->semester ?> семестр)
    (код <?= $subject->code ?>)
    <?= $subject->discipline_place ?></p>
<p style="text-indent: 50px; ">Содержание дисциплины базируется знаниях, полученных при изучении дисциплины
    «Информационные технологии» (код
    Б1.Б.8). Компетенция, сформированная в процессе освоения дисциплины необходима при изучении дисциплин
    профильного цикла.</p>
<p style="text-indent: 50px; ">Дисциплина входит в <?= $subject->module->title ?>.</p>
<p style="font-weight: bold; text-align: center;"><i>1.8 Перечень планируемых результатов обучения,
        соотнесенных с планируемыми результатами освоениями ОП</i></p>
<p style="text-indent: 50px; ">Процесс изучения дисциплины направлен на формирование
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
<p style="text-indent: 50px; ">В результате изучения дисциплины студент должен:</p>
<ul>
    <i><b>знать:</b></i>
    <?php $i = 0; ?>
    <?php foreach ($know as $kn): ?>
        <?php $i++ ?>
        <li><?= $kn ?><?php if ($i < count($know)): ?>;<?php endif; ?></li>
    <?php endforeach; ?>

    <i><b>уметь:</b></i>
    <?php $i = 0; ?>
    <?php foreach ($can as $c): ?>
        <?php $i++ ?>
        <li><?= $c ?><?php if ($i < count($can)): ?>;<?php endif; ?></li>
    <?php endforeach; ?>
    <i><b>владеть:</b></i>
    <?php $i = 0; ?>
    <?php foreach ($own as $o): ?>
        <?php $i++ ?>
        <li><?= $o ?><?php if ($i < count($own)): ?>;<?php endif; ?></li>
    <?php endforeach; ?>
</ul>
<p style="font-weight: bold; text-align: center;"><i>1.9 Объем дисциплины и виды учебной работы</i></p>
<p style="text-indent: 50px; ">
    <?php $summ_hours = $subject->lect_hours + $subject->lab_hours + $subject->independent_work + $subject->control + $subject->pract_hours ?>
    Общая трудоемкость дисциплины составляет <?= $subject->credits ?> зачетных единиц (<?= $summ_hours ?> уч. ч.),
    контактной работы обучающихся с
    преподавателем: аудиторные – лекции (<?= $subject->lect_hours ?> уч. ч.), лабораторные занятия
    (<?= $subject->lab_hours ?> уч. ч.); самостоятельной работы
    обучающихся (<?= $subject->independent_work ?> уч. ч.); контроль (<?= $subject->control ?> уч. ч.), контрольное
    мероприятие – <?= $subject->control_form ?> (<?= $subject->semester ?> семестр).
</p>
<p style="font-weight: bold; text-align: center;"><i>1.10 Форма получения образования</i></p>
<p style="text-indent: 50px; ">Форма получения образования по
    дисциплине: <?= $subject->form_l->name ?> (<?= $subject->semester ?> семестр).</p>
<?php if ($subject->features): ?>
    <p style="font-weight: bold; text-align: center;"><i>1.11 Особенности реализации дисциплины</i></p>
    <p style="text-indent: 50px; "><?= $subject->features ?></p>
<?php endif; ?>