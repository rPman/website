<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/controls/index.php', luwrain_current_lang() == 'ru'?'Библиотека стандартных элементов управления':'Standard controls library');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Standard controls library</h1>
                <p>Sorry, this page is still available in&#160;Russian language only. Please, try later.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Библиотека стандартных элементов управления</h1>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/ControlEnvironment.html">Страница <i>org.luwrain.controls.ControlEnvironment</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                  <li>
                    <a href="/api/org/luwrain/controls/DefaultControlEnvironment.html">Страница <i>org.luwrain.controls.DefaultControlEnvironment</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Классы, перечисленные ниже (кроме вспомогательных классов для редактирования текста), являются
                  реализациями интерфейса <a href="/api/org/luwrain/core/Area.html"><i>org.luwrain.core.Area</i></a>
                  и могут использоваться для&#160;конструирования интерфейса приложений. Большая их часть
                  готова к&#160;применению, но есть и исключения, как, например, класс <i>org.luwrain.controls.NavigateArea</i>,
                  который является абстрактным.
                </p>
                <p>
                  Согласно дизайну LUWRAIN, элементы управления не&#160;имеют прямого доступа к&#160;ядру
                  системы. Они могут выполнять взаимодействие с&#160;ним только через <a href="<?php echo luwrain_link('/doc/new-app/luwrain/');?>">класс
                  <i>org.luwrain.core.LUWRAIN</i></a>, который передаётся каждому приложению при&#160;запуске.
                  При&#160;этом даже доступ к&#160;классу <i>org.luwrain.core.LUWRAIN</i> выполняется не&#160;напрямую,
                  а опосредованно через интерфейс <a href="/api/org/luwrain/controls/ControlEnvironment.html"><i>org.luwrain.controls.ControlEnvironment</i></a>.
                  Этот интерфейс является главной точкой, через которую осуществляется взаимодействие элемента
                  управления с&#160;контекстом исполнения. Он введён для&#160;решения двух задач: для&#160;реализации
                  гибких возможностей кастомизации (переопределяя методы этого интерфейса можно гибко модифицировать
                  стандартное поведение элемента управления), а&#160;также для&#160;реализации удобного механизма,
                  позволяющего осуществлять автоматическое тестирование подготовленной библиотеки. Для&#160;простоты
                  предусмотрена стандартная реализация этого интерфейса <a href="/api/org/luwrain/controls/DefaultControlEnvironment.html"><i>org.luwrain.controls.DefaultControlEnvironment</i></a>,
                  перенаправляющая все&#160;вызовы в&#160;предоставленный объект класса <i>org.luwrain.core.LUWRAIN</i>.
                </p>
                <h2>Область обозрения (<i>NavigateArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/NavigateArea.html">Страница <i>org.luwrain.controls.NavigateArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Этот абстрактный класс реализует основные функции перемещения по&#160;текстовой области,
                  но не&#160;имеет никаких механизмов хранения контента. Доступ к&#160;данным, реализуемый
                  при&#160;помощи этого класса, предусматривает режим только для&#160;чтения. Если необходимо
                  использовать этот&#160;класс, необходимо реализовать три&#160;метода:
                </p>
                <ul>
                  <li><i>getLineCount()</i>;</li>
                  <li><i>getLine()</i>;</li>
                  <li><i>getName()</i>.</li>
                </ul>
                <p>
                  Поведение этого класса полностью соответствует стандартному поведению средств невизуального
                  доступа при&#160;навигации внутри текстового файла.
                </p>
                <h2>Простейшая область (<i>SimpleArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/SimpleArea.html">Страница <i>org.luwrain.controls.SimpleArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Этот класс является развитием <i>NavigateArea</i>, но имеет внутренний контейнер для&#160;хранения
                  текстового представления. Таким образом, он может рассматриваться как&#160;готовый элемент
                  управления для&#160;хранения и представления сравнительно небольших структур данных в&#160;текстовом
                  виде.
                </p>
                <h2>Область редактирования (<i>EditArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/EditArea.html">Страница <i>org.luwrain.controls.EditArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  область редактирования является дальнейшим развитием класса <i>simpleArea</i> и позволяет
                  осуществлять редактирование текста, хранимого во&#160;внутреннем контейнере. Возможностей
                  этого класса достаточно для создания простейшего невизуального текстового редактора, который
                  не&#160;имеет функций записи файла на&#160;диск и чтения с&#160;диска.
                </p>
                <h2>Список (<i>ListArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/ListArea.html">Страница <i>org.luwrain.controls.ListArea</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>
                  Этот класс предназначен для&#160;представления некоторого множества объектов в&#160;виде
                  одномерного списка. Данные хранятся во&#160;внешнем объекте, который должен удовлетворять
                  интерфейсу <a href="/api/org/luwrain/controls/ListModel.html"><i>org.luwrain.controls.ListModel</i></a>.
                  Предусмотрены дополнительные возможности по&#160;кастомизации отображения элементов списка
                  и их&#160;речевого описания для&#160;пользователя.
                </p>
                <h2>Таблица (<i>TableArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/TableArea.html">Страница <i>org.luwrain.controls.TableArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Класс <i>tableArea</i> реализует представление и отображение данных, организованных в&#160;виде
                  двумерной таблицы. Данные хранятся во&#160;внешнем объекте, который должен удовлетворять
                  интерфейсу <a href="/api/org/luwrain/controls/TableModel.html"><i>org.luwrain.controls.TableModel</i></a>.
                  Предусмотрены дополнительные возможности по&#160;кастомизации отображения ячеек таблицы.
                </p>
                <h2>Дерево (<i>TreeArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/TreeArea.html">Страница <i>org.luwrain.controls.TreeArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Объекты класса <i>TreeArea</i> предназначены для&#160;работы с&#160;множеством объектов,
                  организованных в&#160;виде иерархической структуры. Её&#160;хранение осуществляется при&#160;помощи
                  внешнего объекта, который должен удовлетворять интерфейсу <a href="/api/org/luwrain/controls/TreeModel.html"><i>org.luwrain.controls.TreeModel</i></a>.
                </p>
                <h2>Форма с&#160;элементами управления ( (<i>FormArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/FormArea.html">Страница <i>org.luwrain.controls.FormArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Форма является составной областью, которая предназначена для&#160;работы с&#160;множеством
                  элементов управления следующих типов:
                </p>
                <ul>
                  <li>однострочными полями для&#160;ввода текста;</li>
                  <li>
                    многострочным полем для&#160;ввода текста (может присутствовать только в&#160;единственном
                    виде);
                  </li>
                  <li>списками, предлагающими выбор из&#160;множества значений;</li>
                  <li>переключателями типа &#x22;да/нет&#x22;.</li>
                </ul>
                <p>
                  Каждый элемент снабжается именем, которое позволяет пользователю понять его&#160;назначение.
                  Многострочное поле для&#160;ввода текста отображается в&#160;нижней части области под&#160;всеми
                  прочими элементами, поэтому может присутствовать только в&#160;единственном виде.
                </p>
                <h2>Конструктор сообщений (<i>MessageArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/MessageArea.html">Страница <i>org.luwrain.controls.MessageArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Этот класс является развитием <i>FormArea</i> и предлагает готовый вариант области для&#160;составления
                  сообщений электронной почты. Поддерживается ввод адресата, темы сообщения, текста сообщения,
                  списка получателей копии и множество файлов для&#160;прикрепления к&#160;письму.
                </p>
                <h2>Обозреватель файлов и папок (<i>CommanderArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/CommanderArea.html">Страница <i>org.luwrain.controls.CommanderArea</i>
                    в&#160;LUWRAIN&#160;API</a>
                  </li>
                </ul>
                <p>
                  Этот класс реализует поведение панели файлового менеджера, которая позволяет просматривать
                  файлы на&#160;диске и перемещаться по&#160;структуре каталогов.
                </p>
                <h2>Календарь (<i>CalendarArea</i>)</h2>
                <p>См.&#160;также</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/CalendarArea.html">Страница <i>org.luwrain.controls.CalendarArea</i>
                    в&#160;LUWRAIN&#160;API</a>.
                  </li>
                </ul>
                <p>Этот класс позволяет внедрить в&#160;приложение элемент управления для&#160;выбора даты.</p>
                <h2>Дополнительные классы для&#160;редактирования текста</h2>
                <p>
                  Существуют четыре дополнительных класса, которые реализуют поведение редактирования текста.
                  Их принципиальное отличие от&#160;классов, описанных выше, в&#160;том, что они не&#160;реализуют
                  интерфейс <i>org.luwrain.core.Area</i>. Необходимость их&#160;создания объясняется тем,
                  что редакторы текста могут быть как&#160;заполняющие область целиком, так и занимающие
                  только её&#160;некоторую часть (например, в&#160;составе формы). Классы разделены на&#160;классы,
                  непосредственно реализующие поведение редактора текста, и на&#160;классы, обеспечивающие
                  внедрение редактора текста в&#160;указанную позицию некоторой области.
                </p>
                <p>Ниже приведён список этих классов:</p>
                <ul>
                  <li>
                    <a href="/api/org/luwrain/controls/SingleLineEdit.html"><i>org.luwrain.controls.SingleLineEdit</i></a>
                    &#x2014; однострочный редактор текста;
                  </li>
                  <li>
                    <a href="/api/org/luwrain/controls/MultilinedEdit.html"><i>org.luwrain.controls.MultilinedEdit</i></a>
                    &#x2014; многострочный редактор текста;
                  </li>
                  <li>
                    <a href="/api/org/luwrain/controls/EmbeddedSingleLineEdit.html"><i>org.luwrain.controls.EmbeddedSingleLineEdit</i></a>
                    &#x2014; класс для&#160;помещения однострочного редактора внутри области со&#160;смещением;
                  </li>
                  <li>
                    <a href="/api/org/luwrain/controls/EmbeddedMultilinedEdit.html"><i>org.luwrain.controls.EmbeddedMultilinedEdit</i></a>
                    &#x2014; класс для&#160;помещения многострочного редактора внутри области со&#160;смещением.
                  </li>
                </ul>
                <h2>Читать далее</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/new-app/custom/');?>">Создание собственных элементов управления</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/controls/index.php');?>
