<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Обслуживание форума',
'Rebuild index subhead'			=>	'Перестройка поискового индекса',
'Rebuild index info'			=>	'Если вы добавляли, редактировали или удаляли сообщения в ручном режиме, напрямую через базу данных, или наблюдаются проблемы с поиском информации, то используйте механизм перестройки поискового индекса. Во время работы механизма восстановления, для улучшения производительности, активируйте %s. <strong>Перестройка поискового индекса может занять продолжительное время и увеличить нагрузку на сервер!</strong>',
'Posts per cycle label'			=>	'Сообщений за цикл',
'Posts per cycle help'			=>	'Количество сообщений выводимых на одной странице. Например, введя число 300, произойдет обработка указанного числа записей, а затем страница обновится. Это сделано для того, чтобы скрипт не создавал чрезмерную нагрузку и не превысил допустимое время на выполнение задачи.',
'Starting post label'			=>	'ID начального сообщения',
'Starting post help'			=>	'С указанного идентификатора сообщения начнется перестройка поискового индекса. Начальное значение по умолчанию равняется наименьшему ID из базы данных. Как правило, не нужно менять значение данного поля.',
'Empty index label'				=>	'Очищать индекс',
'Empty index help'				=>	'Активируйте опцию, если хотите, чтобы поисковый индекс очистился перед процессом перестройки (см. ниже).',
'Rebuild completed info'		=>	'Когда процесс завершится, произойдет обратное перенаправление на эту страницу. Рекомендуется не выключать поддержку JavaScript в браузере на время процесса индексации. Включенный JavaScript нужен для корректной обработки и автоматической переадресации после завершения очередного цикла. Если вдруг захотите прервать процесс, запишите/запомните значение ID, которое было последним, а когда захотите продолжить, то введите значение последнего ID+1 в поле «ID начального сообщения». Не забудьте перед началом также выключить опцию «Очищать индекс».',
'Rebuild index'					=>	'Перестроить индекс',
'Rebuilding search index'		=>	'Перестройка поискового индекса',
'Rebuilding index info'			=>	'Перестройка индекса. Это подходящий момент, чтобы сделать себе чашечку кофе :-)',
'Processing post'				=>	'Обработка сообщения <strong>%s</strong> …',
'Click here'					=>	'Кликни сюда',
'Javascript redirect failed'	=>	'JavaScript перенаправление не работает. %s, чтобы продолжить …',
'Posts must be integer message'	=>	'Значение обрабатываемых сообщений должно быть положительным целым числом.',
'Days must be integer message'	=>	'Значение дней для очистки должно быть положительным целым числом.',
'No old topics message'			=>	'Сообщений старше %s суток не обнаружено. Уменьшите значение "Старше" и повторите попытку.',
'Posts pruned redirect'			=>	'Сообщения очищены. Идет перенаправление …',
'Prune head'					=>	'Очистка',
'Prune subhead'					=>	'Очистка устаревшей информации',
'Days old label'				=>	'Кол-во дней',
'Days old help'					=>	'Число дней, после которых сообщения считаются старыми и будут очищены. Например, введя число 30, будут найдены все темы, в которых с момента публикации последнего сообщения прошло больше 30 дней, и затем &#8212; удалены.',
'Prune sticky label'			=>	'Очищать закрепленные темы',
'Prune sticky help'				=>	'В случае активации, закрепленные старые темы будут удаляться наравне с обычными.',
'Prune from label'				=>	'Очистить',
'All forums'					=>	'все форумы',
'Prune from help'				=>	'Форум, в котором будет происходить очистка от старых тем.',
'Prune info'					=>	'Используйте данный инструмент с осторожностью. <strong>Удаленные темы не подлежат автоматическому восстановлению.</strong> Во время работы механизма восстановления, для улучшения производительности, активируйте %s.',
'Confirm prune subhead'			=>	'Подтверждение очистки от старых сообщений',
'Confirm prune info'			=>	'Вы уверены, что желаете удалить все темы старше %s суток из %s (%s тем).',
'Confirm prune warn'			=>	'ВНИМАНИЕ! Старые сообщения удаляются навсегда.',

);
