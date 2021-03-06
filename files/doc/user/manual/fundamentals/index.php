<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/fundamentals/index.php', luwrain_current_lang() == 'ru'?'Основные принципы навигации':'Fundamentals');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian language only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Основные принципы управления</h1>

<p>Все элементы управления LUWRAIN построены таким образом, чтобы
предложить пользователю единое привычное поведение. Это значительно
упрощает восприятие пользователем рабочих объектов в системе. Тем не
менее, в своей специфике и деталях, реакция объектов на команды
пользователя отличается, поскольку она определяется природой элемента
управления. Некоторые операции могут быть недоступны, а некоторые,
напротив, требуют дополнительных действий. Ниже описаны некоторые
базовые принципы, соблюдение которых всегда более предпочтительно, чем
реализация нового поведения.</p>

<ol>
<li><p>Нажатия стрелок влево и вправо позволяют исследовать некоторый текст по буквам.
Заглавные буквы произносятся более высоким голосом.
При достижении начала или конца исследуемого пространства (например, строки) произносится
соответствующее уведомление более низким голосом.</p></li>
<li><p>Удержание клавиши <em>Ctrl</em> при нажатии стрелок меняет их поведение таким образом,
что исследование производится не по буквам, а по словам. </p></li>
<li><p>Также одинарное нажатие клавиши <em>Ctrl</em> прерывает работу речевого
синтезатора, то есть включает функцию «mute». Нажатие клавиш-стрелок
вверх и вниз возобновляет его работу.</p></li>
<li><p>Нажатия клавиш вверх и вниз
позволяют исследовать множество объектов (элементов списка, строк
текста). При нажатии произносится текст нового элемента.  Перемещение
с удержанием клавиши <em>Ctrl</em> меняет режим представления нового
объекта. Например, в файловом менеджере отключает произношение типа
объекта для ускорения работы, а при чтении твитов в приложении Twitter
отключается воспроизведение имени пользователя и характеристик твита.</p></li>
<li><p>При вводе текста произносится каждая введённая буква. После нажатия
пробела произносится всё слово. </p></li>
<li><p>Клавиши <em>Home</em> и <em>End</em> перемещают
положение отметки в начало и конец, но их поведение различно в
объектах разного типа. В перечислении объектов (меню, списки, панели
файлового менеджера) началом считается первая строка, а концом —
последняя. Для текста их поведение иное — началом и концом считаются
начало и конец строки. Удержание клавиши <em>Ctrl</em> переключает режимы на
противоположные (то есть, в списке <em>Ctrl</em>+<em>End</em> должен перемещать
отметку в конец строки).  </p></li>
<li><p>Перечисления содержат обязательную пустую
строку для возможности пользователя всегда иметь пространство для
перемещения вверх и вниз при наличии только одного объекта. Если
элементы отсутствуют вовсе, то произносится специальное уведомление
при любом нажатии клавиш навигации.  7. Если пользователь затрудняется
определить своё текущее местоположение, он может нажать <em>F1</em>, и в этом
случае система должна произнести название текущей рабочей
области. Также можно всегда вернуться в Главное меню клавишей
<em>Windows</em> и начать заново.  </p></li>
<li><p>В большинстве рабочих областей доступна
операция копирования в буфер обмена. Нажатие <em>Ctrl</em>+<em>Пробел</em>
устанавливает отметку начала фрагмента для копирования; <em>Ctrl</em>+<em>C</em> —
производит копирование от установленной отметки до текущего
положения. Скопированный фрагмент можно вставить, например, в
текстовый редактор или ссылкой на <em>«Рабочий стол»</em>. Более подробно о
работе с буфером обмена рассказано в соответствующем разделе.  </p></li>
<li><p>Система поддерживает возможность параллельной работы нескольких
приложений. Для переключения между приложениями используйте комбинацию
клавиш <em>Alt</em>+<em>Tab</em>.  10. Для навигации между областями внутри
приложения используйте комбинацию клавиш <em>Ctrl</em>+<em>Tab</em>. Например, для
навигации между тремя областям внутри приложения «Новости»: Группы
новостей, Список статей и Текст статьи.</p></li>
</ol>

<h2>Навигация по списку файлов и каталогов</h2>

<p>При стандартном запуске приложения <em>«Обзор файлов и папок»</em> отображается содержимое домашнего каталога пользователя. В случае с linux системой это /home/user/. Используя комбинации клавиш <em>Alt</em>+<em>F1</em> и <em>Alt</em>+<em>F2</em>, можно вызвать всплывающие списки основных местоположений в системе для быстрого перехода. Перемещения внутри этих списков с удержанной клавишей <em>Ctrl</em> приводит к тому, что словесные комментарии пропускаются, и произносится только формальные пути.
При открытой файловой панели стрелки вверх и вниз позволяют перемещаться по списку. Клавиша <em>Ctrl</em>, удержанная во время перемещения, пропускает произношение типа элемента (каталог, выделенный файл, выделенный каталог и т. д.). Стрелки вправо и влево произносят имена файлов по буквам. Перемещения вправо и влево с удержанной клавишей <em>Ctrl</em> позволяют исследовать имя файла или каталога по словам.
Клавиши <em>Home</em> и <em>End</em> без модификаторов перемещают курсор в начало или в конец списка; с удержанной клавишей <em>Ctrl</em> их поведение меняется таким образом, чтобы перемещаться в начало или конец текущего имени файла. Клавиши <em>PageDown</em> и <em>PageUp</em> ведут себя привычным образом — перемещают курсор вниз и вверх на высоту экрана; клавиша <em>Ctrl</em> в сочетании с ними ведёт себя также, как и в случае стрелок вверх и вниз.
Для ускорения работы пользователь может набирать на клавиатуре первые буквы нужного ему имени файла, и курсор будет производить поиск подходящего элемента. Клавиша <em>Backspace</em> перемещает пользователя на уровень вверх в дереве каталогов. Она работает даже в том случае, если пользователь произвёл попытку зайти в каталог, вход в который запрещён (файловый менеджер в этой ситуации выдаёт соответствующее сообщение в ответ на любое нажатие клавиш навигации). Клавиша <em>F3</em> имеет несколько модифицированное поведение по сравнению с её общесистемным назначением. После её нажатия, открывается всплывающая область ввода имени файла, в которой каталог по умолчанию заменён на текущий путь в панели файлового менеджера. Помимо этого, если пользователь введёт имя каталога, он будет открыт в существующей копии файлового менеджера (общесистемный вариант области открытия всегда запускает новое приложение).</p>

<h2>Копирование элементов списков и меню</h2>

<p>Списки, меню и панели файлового менеджера тоже поддерживают операции копирования. Они осуществляются теми же комбинациями клавиш, но по несколько иным правилам:</p>

<pre><code>1. Если отметка начала копирования не установлена, то производится копирование всех элементов списка в виде текста.

2. Если отметки начала и конца совпадают, то производится копирование всех элементов.

3. Если отметки начала и конца находятся на одной строке, то копируется фрагмент текста строки между ними.

4. Если отметки находятся на разных элементах, то копируются элементы между ними целиком, игнорируя положения отметок внутри строк.
         В некоторых ситуациях могут быть предусмотрены особые механизмы копирования текста в буфер обмена. На текущий момент к ним относится всплывающее окно типа "Да/Нет", в котором комбинация клавиш _Ctrl_+_С_ всегда выполняет полное копирование текста вопроса целиком, а команда установки начальной отметки не обрабатывается.
</code></pre>

<h2>Поиск</h2>

<p>LUWRAIN предусматривает функцию поиска сквозь весь доступный текст в
открытой в настоящий момент среде. Пользователь может найти любое
слово в тексте по комбинации клавиш <em>Ctrl</em>+<em>S</em>. После нажатия этой
комбинации система произнесет фразу <em>«Режим поиска»</em>, что означает,
что пользователю доступен ввод искомого слова и фразы. Ввод
осуществляется побуквенно и система ищет вхождение букв/слова в
доступном тексте. Если искомых слов несколько, то перемещение по ним
осуществляется кнопкой <em>Tab</em>.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/fundamentals/index.php');?>
