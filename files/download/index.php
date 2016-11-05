<?php include "../functions.php"; luwrain_begin_page('/download/index.php', luwrain_current_lang() == 'ru'?'Загрузка':'downloads');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Our downloads</h1>

<p>These options are for&#160;people who needs LUWRAIN for&#160;work. 
With&#160;the&#160;list below, you can find a&#160;binary distribution prepared for&#160;OS you have already installed or 
a&#160;ISO&#160;image suitable for running LUWRAIN as&#160;a&#160;stand-alone OS (in&#160;this&#160;case any&#160;previously installed OS is unnecessary).</p>

<p>Choose the&#160;most suitable form you need:</p>

<ul>
<li><a href="<?php echo luwrain_link('iso/');?>">As a&#160;bootable ISO image</a> (installed OS isn't required)</li>
<li>As&#160;an&#160;application:
<ul>
<li><a href="<?php echo luwrain_link('windows/');?>">For&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('linux/');?>">For&#160;GNU/Linux</a></li>
</ul></li>
</ul>

<h2>For&#160;developers and testers</h2>

<p>The&#160;first option of&#160;this list is purposed for&#160;the&#160;developers
of&#160;applications for&#160;LUWRAIN.
Others can be&#160;useful only for&#160;developers who would like to&#160;improve LUWRAIN itself.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (needed for&#160;building your own application for&#160;LUWRAIN)</li>
<li><a href="<?php echo luwrain_link('git/');?>">Git&#160;repositories</a> (the&#160;entire set of&#160;repositories for&#160;tracking of&#160;changes in&#160;our&#160;project)</li>
<li><a href="<?php echo luwrain_link('tarball/');?>">Tarballs with source materials</a> (published basically to&#160;make LUWRAIN sources downloadable in&#160;single click, but there is a&#160;tarball with&#160;media files which we don't put&#160;in&#160;Git repositories)</li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly builds</a> (regular binary builds for&#160;testers)</li>
</ul>

<p><strong>NOTE!</strong> You may visit the&#160;host <a href="http://download.luwrain.org">download.luwrain.org</a> directly 
as&#160;a&#160;single and easily observable place gathering all of&#160;our&#160;materials for&#160;download.
Besides all, you can find there:</p>

<ul>
<li><a href="http://download.luwrain.org/pdf/">Our pdf materials</a> (publications and presentations)</li>
<li><a href="http://download.luwrain.org/chats/">Talks on&#160;radio and podcasts</a> (mostly in&#160;Russian)</li>
<li><a href="http://download.luwrain.org/video/">Video recordings</a> (mostly in&#160;Russian)</li>
</ul>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Загрузка наших дистрибутивов</h1>

<p>Ссылки в&#160;списке ниже позволяют загрузить дистрибутивы для&#160;работы 
и предназначены для&#160;пользователей,
желающих установить LUWRAIN или запустить его&#160;для&#160;ознакомления.
LUWRAIN в&#160;виде ISO-образа не&#160;требует какой-либо установленной ОС на&#160;вашем компьютере.
В&#160;остальных случаях LUWRAIN подготовлен как&#160;приложение для запуска в&#160;Microsoft Windows или в&#160;GNU/Linux.</p>

<p>Выберите наиболее подходящий для&#160;вас вариант:</p>

<ul>
<li><a href="<?php echo luwrain_link('iso/');?>">Как загрузочный ISO-образ</a> (установленная ОС не&#160;требуется)</li>
<li>Как&#160;приложение:
<ul>
<li><a href="<?php echo luwrain_link('windows/');?>">Для&#160;Microsoft Windows</a></li>
<li><a href="<?php echo luwrain_link('linux/');?>">Для&#160;GNU/Linux</a></li>
</ul></li>
</ul>

<h2>Для&#160;разработчиков   и тестеров</h2>

<p>Первый вариант в&#160;списке ниже предназначен для&#160;разработчиков собственных приложений,
дополняющих функциональность LUWRAIN.
Остальные элементы требуются людям, желающим принять участие в&#160;работе над&#160;нашей средой непосредственно.</p>

<ul>
<li><a href="<?php echo luwrain_link('sdk/');?>">LUWRAIN&#160;SDK</a> (требуется для&#160;разработки ваших собственных приложений)</li>
<li><a href="<?php echo luwrain_link('git/');?>">Репозитории Git</a> (полный перечень репозиториев для&#160;отслеживания изменений в&#160;наших исходных текстах)</li>
<li><a href="<?php echo luwrain_link('tarball/');?>">Архивы с&#160;материалами проекта</a> (в&#160;основном предоставляются для&#160;упрощения загрузки LUWRAIN, но помимо исходных текстов содержат также  звуковые файлы, отсутствующие в&#160;репозиториях Git)</li>
<li><a href="<?php echo luwrain_link('nightly/');?>">Nightly-сборки</a> (регулярные сборки для&#160;тестирования изменений)</li>
</ul>

<p><strong>ВНИМАНИЕ!</strong> 
Вы можете работать напрямую с&#160;нашим ресурсом <a href="http://download.luwrain.org">download.luwrain.org</a>,
просматривая доступные файлы и каталоге при&#160;помощи автоматически сгенерированного индекса.
Помимо прочего, на&#160;нём можно найти:</p>

<ul>
<li><a href="http://download.luwrain.org/pdf/">Материалы в&#160;pdf-формате</a> (публикации и презентации)</li>
<li><a href="http://download.luwrain.org/chats/">Беседы для&#160;радио и подкастов</a></li>
<li><a href="http://download.luwrain.org/video/">Видеозаписи выступлений и демонстраций</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/download/index.php');?>
