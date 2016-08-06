<?php include "../../../functions.php"; luwrain_begin_page('/doc/ext/intro/index.php', luwrain_current_lang() == 'ru'?'Введение в создание расширений':'Introduction to creating new extensions');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Introduction to&#160;creating new extensions</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Введение в&#160;создание расширений</h1>

<p>Создание новых расширений &#x2014; крайне важная возможность LUWRAIN.
Наша среда позволяет это делать при&#160;помощи простых инструментов, используя возможности языка Java,
который является основным языком как для&#160;разработки самого LUWRAIN,
так и для&#160;разработки новых сторонних расширений для&#160;него. 
Прежде всего необходимо обратить внимание, что несмотря на&#160;использование ниже термина "приложение",
обозначаемые им объекты не&#160;являются полноценными приложениями в&#160;полном смысле этого слова,
поскольку они не&#160;запускаются в&#160;отдельном процессе и разделяют своё адресное пространство с&#160;адресным пространством самой среды.
Это позволяет значительно повысить производительность системы,
хотя мы также ведём исследование путей запуска приложений в&#160;сторонних виртуальных машинах Java для&#160;обеспечения достаточного уровня безопасности.</p>

<p>Документация этого раздела не&#160;охватывает основы программирования на&#160;языке Java,
мы полагаем, что у&#160;вас уже есть опыт разработки на&#160;нём.
Тем не&#160;менее, наш инструментарий подготовлен таким образом,
чтобы им могли пользоваться люди <strong>без&#160;опыта в&#160;сфере   вспомогательных технологий</strong>.
Это крайне важно, поскольку сфера вспомогательных технологий довольно сложна,
и большинство разработчиков обычно не&#160;имеют достаточного опыта и знаний в&#160;ней.</p>

<p>Для&#160;разработки расширения LUWRAIN вам потребуется:</p>

<ol>
<li>Иметь установленную JDK не&#160;ниже версии 1.8.</li>
<li>Загрузить и установить <a href="<?php echo luwrain_link('/download/sdk');?>">LUWRAIN&#160;SDK</a>.</li>
<li>Иметь установленный LUWRAIN в&#160;любом виде для&#160;запуска результатов вашей работы.</li>
</ol>

<p>Расширения LUWRAIN оформляются в&#160;виде jar-файлов,
которые помещаются в&#160;список <em>classpath</em>.
Основной класс расширения должен удовлетворять интерфейсу  <a href="http://luwrain.org/api/org/luwrain/core/extensions/Extension.html">org.luwrain.core.extensions.Extension</a>.
Если имя этого класса будет записано в&#160;параметр <em>Extensions</em> секции <em>org/luwrain</em> в&#160;манифесте вашего jar-файла,
ядро LUWRAIN загрузит этот класс и всё&#160;расширение автоматически при&#160;своём запуске.</p>

<h2>Читать далее</h2>

<ul>
<li><a href="<?php echo luwrain_link('/doc/new-app/essentials/');?>">Основные понятия расширений</a></li>
</ul>
<?php }?>
<?php luwrain_end_page('/doc/ext/intro/index.php');?>
