<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/iso/index.php', luwrain_current_lang() == 'ru'?'Сборка  ISO-образа':'Compilation of ISO-image');?>
<?php if (luwrain_current_lang() == 'en') {?>
<h1>Compilation of&#160;ISO-image</h1>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Сборка ISO-образа</h1>

<p>Технология LUWRAIN позволяет вам получить свой собственный ISO-образ для&#160;работы,
в&#160;который вы можете внести любые необходимые вам изменения.
Мы постарались сделать этот процесс как можно проще и
не&#160;накладываем никаких ограничений на&#160;возможные варианты модификации.
Тем&#160;не&#160;менее, ознакомьтесь, пожалуйста, с&#160;нашим <a href="<?php echo luwrain_link('/doc/legal/');?>">правовым статусом</a>,
согласно которому мы просим не&#160;публиковать изменённые образы без&#160;отражения факта модификации в&#160;названии вашего продукта,
поскольку это может ввести в&#160;заблуждение других пользователей.
Название "LUWRAIN" без&#160;дополнительных обозначений могут носить только образы,
выпущенные нашей командой.</p>

<h2>Требования</h2>

<p>Сборку наших ISO-образов можно выполнить практически на&#160;любой системе GNU/Linux. 
Вы должны иметь:</p>

<ol>
<li>Систему GNU/Linux соответствующей разрядности
(сборку 64-битной версии можно выполнить только на&#160;64-битной  системе),
в&#160;которой у&#160;вас есть полномочия суперпользователя <em>root</em>.</li>
<li>Утилиту <em>unsquashfs</em> для&#160;распаковки сжатого архива с&#160;файлами корневой файловой системы.</li>
<li>Утилиту <em>git</em> для&#160;получения наших скриптов (необязательно).</li>
</ol>

<h2>Подготовка</h2>

<p>Для&#160;того, чтобы создать свой собственный загрузочный образ LUWRAIN, вам необходимо иметь
ISO-образ соответствующей версии Ubuntu,
сборку LUWRAIN для&#160;включения в&#160;образ
и набор сборочных скриптов.
Актуальные образы LUWRAIN основаны на&#160;Ubuntu 15.10
(<a href="http://releases.ubuntu.com/wily/ubuntu-15.10-desktop-i386.iso">прямая ссылка на&#160;дистрибутив</a>).
После того, как образ загружен, его необходимо примонтировать к&#160;системе,
чтобы иметь доступ к&#160;его файлам:</p>

<p><code>
sudo mkdir -p /mnt/disk
sudo mount -o loop ubuntu-15.10-desktop-i386.iso /mnt/disk
</code></p>

<p>В&#160;команде, приведённой выше, необходимо указать полный путь к&#160;дистрибутиву Ubuntu,
куда он был загружен с&#160;сайта.
Дистрибутивы LUWRAIN для&#160;включения в&#160;ISO-образы обычно помещаются
либо в&#160;<a href="http://download.luwrain.org/iso/">каталог с&#160;ISO-образами</a>,
либо в&#160;каталог с&#160;<a href="http://download.luwrain.org/nightly/">nightly-сборками</a>.
Они имеют пометку <em>"iso"</em> в&#160;своём имени и содержат подкаталоги для&#160;одной или нескольких архитектур.
Сборочные скрипты находятся в&#160;репозитории Git с&#160;материалами для&#160;Linux.
Их можно получить, выполнив команду:</p>

<p><code>
git clone https://github.com/luwrain/linux.git
</code></p>

<p>Если у&#160;вас нет утилиты <em>git</em>,
то содержимое репозитория можно получить в&#160;виде <a href="https://github.com/luwrain/linux/archive/master.zip">zip-архива, доступного по&#160;прямой ссылке</a>.
Полный комплект скриптов находится в&#160;подкаталоге ubuntu/&lt;версия>/iso.</p>

<h2>Выполнение сборки</h2>

<p>В&#160;каталоге скриптов, полученном из&#160;нашего <em>linux.git</em>, должен находиться  скрипт <em>lwr-iso</em>.
Это основной скрипт для&#160;получения ISO-образа.
Содержимое сборки LUWRAIN для&#160;включения  в&#160;ISO-образ  должно быть помещено в&#160;каталог <em>dist</em>
на&#160;том&#160;же уровне, что и файл <em>lwr-iso</em>.
В&#160;каталог <em>dist</em> должны быть напрямую помещены файлы только для&#160;одной выбранной вами архитектуры
(куда, разумеется, вы можете внести любые нужные вам изменения).
После этого, необходимо запустить скрипт <em>lwr-iso</em> с&#160;правами суперпользователя <em>root</em>,
указав ему в&#160;качестве первого аргумента путь к&#160;каталогу, куда был примонтирован образ Ubuntu.
Поскольку в&#160;примере выше использовался каталог <em>/mnt/disk</em>,
эта команда может иметь вид:</p>

<p><code>
sudo ./lwr-iso /mnt/disk
</code></p>

<p>Работа этой команды может занимать несколько минут,
и для&#160;успешного выполнения требуется около 10ГБ свободного дискового пространства.
В&#160;ходе работы будет задан вопрос о&#160;раскладки клавиатуры в&#160;терминале
(не&#160;внутри самого LUWRAIN).
После завершения работы должен появиться файл <em>luwrain.iso</em>,
который может быть записан на&#160;компакт-диск или флэшку, как это описано <a href="<?php echo luwrain_link('/download/iso/writing/');?>">здесь</a>.</p>

<h2>Завершение работы</h2>

<p>Команда <em>lwr-iso</em> оставляет после работы каталог <em>lwrtmp-env</em>,
который необходимо удалить вручную.
Повторный запуск этой команды без&#160;удаления каталога приведёт к&#160;некорректному поведению.
В&#160;случае аварийного завершения может остаться примонтированным каталог <em>/proc</em> к&#160;одному из&#160;подкаталогов внутри <em>lwrtmp-env</em>,
который также необходимо отмонтировать вручную.</p>

<p>Если у&#160;вас есть вопросы по&#160;процессу сборки нашего образа,
не&#160;стесняйтесь  задавать их&#160;<a href="<?php echo luwrain_link('/community/mailing-lists/');?>">наших рассылках</a>.</p>
<?php }?>
<?php luwrain_end_page('/doc/devel/iso/index.php');?>
