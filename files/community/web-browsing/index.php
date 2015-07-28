<?php include "../../functions.php"; luwrain_begin_page('/community/web-browsing/index.php', luwrain_current_lang() == 'ru'?'Концепция веб-навигации':'Conception of web-navigation');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Conception of&#160;web-browsing</h1>
                <p>Sorry, this page is available in&#160;Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Концепция веб-навигации</h1>
                <p>
                  Текст ниже предложил 18&#160;июля 2015&#160;г. Никита Цейковец в&#160;рамках обсуждения
                  ожидаемого поведения средств невизуального доступа при&#160;навигации внутри веб-страницы.
                </p>
                <h2>Представление данных</h2>
                <p>
                  Фактически web-страница наиболее близка концепции текстового документа, поэтому экранные
                  чтецы и занимаются её представлением в форме некого виртуального документа. Из DOM извлекается
                  весь текстовый контент, мета информация о нём (типа этот текст является заголовком, а этот
                  ячейкой таблицы), а также данные о внедрённых объектах (картинки, flash-элементы и пр.).
                  Причём разбирается именно DOM, а не напрямую HTML, потому что в HTML тот же JavaScript
                  мы не отловим, если скрипт, например, выводит кусок интерфейса. Дальше на основе этого
                  собирается виртуальный документ. Он имеет некие условные размеры, например, 25 строк на
                  страницу по 150 знакомест в каждой. Это просто условные размеры виртуального листа документа.
                  При этом, длина строки имеет вполне понятный смысл и влияет на размеры зачитываемой информации
                  при движении по строкам, а вот число строк на условном листе всего лишь влияет на то, на
                  сколько строк пользователь будет переходить по PageUp/PageDown, так что это достаточно
                  второстепенный параметр. Чтецы позволяют настраивать формат виртуального листа, но я сомневаюсь,
                  что много кто с этими настройками заморачивается. В итоге, пользователю сайт показывается
                  в виде некого виртуального документа, в котором он может перемещаться как в обычном текстовом
                  документе: переходы по символам, строкам, абзацам, в конец и в начала всего текста или
                  строки и пр. Можно вызвать диалог поиска и найти вхождение заданного набора символов по
                  всей странице. Однако весь этот получившийся документ и называется виртуальным, потому
                  что в действительности на экране его нет. Это лишь некая абстракция, с которой взаимодействует
                  пользователь, нажимая на кнопки. Визуально на экране в этот момент показывается обычное
                  окно браузера. Максимум, экранный чтец пытается прокручивать визуальное окно следом за
                  перемещениями пользователя по виртуальному документу. То есть если мы перешли вниз виртуального
                  документа, то и визуальное окно сместят к низу. Короче, глазами видно всё как обычно, а
                  вот нажимая на кнопки мы получаем взаимодействие и зачитывание этого самого виртуального
                  документа.
                </p>
                <h2>Нюансы невизуального отображения</h2>
                <p>
                  Разумеется, воспринимается контент в этом виртуальном документе не совсем так, как глазами.
                  Есть два основных нюанса:
                </p>
                <ol>
                  <li>
                    Экранный чтец зачитывает информацию линейно, тогда как в визуальном первоисточнике она
                    может иметь более сложную конфигурацию, например, несколько колонок текста.
                  </li>
                  <li>
                    В виртуальном документе надо отобразить некоторую специальную информацию, которой в визуальном
                    первоисточнике нет, например, назвать заголовок заголовком или таблицу таблицей, то есть
                    донести до пользователя мета данные об элементах документа. Первый нюанс разрешается тем,
                    что экранный чтец нелинейную структуру визуального документа превращает в линейную структуру
                    виртуального, используя линейный первоисточник в виде HTML-кода. О как завернул, даже сам
                    чуть понял. :-) Проще говоря, если на сайте две колонки текста, например, слева менюшка,
                    а справа основной контент, то в виртуальный документ они записываются в том порядке, в
                    котором идут в HTML-коде, тогда как их визуальное позиционирование управляется CSS и может
                    быть любым. Чуть подробнее с примерами об этом можно прочитать вот здесь: <a href="http://habrahabr.ru/post/191256/">http://habrahabr.ru/post/191256/</a>.
                  </li>
                </ol>
                <p>
                  Второй нюанс для разрешения предполагает пару дополнительных сущностей. Напомню, что: Во-первых,
                  у нас есть непосредственно текстовый контент исходной страницы. Он вписывается в наш виртуальный
                  документ в соответствии с его параметрами, главным образом, длиной строки. Разумеется,
                  на абзацах мы делаем абзац, заголовки выводим на отдельной строке, блочные штуки, типа
                  таблиц также представляем как бы отдельным абзацем и пр. По этому тексту можно осуществлять
                  обычную навигацию, выделять и копировать, осуществлять по нему поиск. Короче, всё как в
                  полноценном текстовом документе. Во-вторых, у нас есть элементы страницы, которые в принципе
                  не имеют текстового представления, поэтому нам надо его создать искусственно. Например,
                  это поля редактирования или внедрённые картинки. В-третьих, у нас есть мета данные об отдельных
                  участках текста. Например, какое-то слово является ссылкой, поэтому пользователю при чтении
                  виртуального документа надо об этом сообщить. Вот как раз второй и третий типы контента
                  порождают дополнительные сущности. Экранный чтец, при взаимодействии с текстом, имеющим
                  дополнительные мета данные, говорит &#x22;Заголовок уровня 3&#x22; или &#x22;Ссылка&#x22;,
                  но эта информация не является частью текстового контента страницы. То есть она как бы просто
                  произносится при фокусировании этого текста, но как-то сфокусироваться на ней самой или
                  прочитать её по символам нельзя. Соответственно если и в поиск по странице вбить &#x22;ссылка&#x22;,
                  то это будет искать слово &#x22;ссылка&#x22; только в текстовом контенте, но не в мета
                  данных. Разумеется, можно ссылки обозначать не словом, а, например, звуком или изменением
                  параметров голоса. То есть форма представления мета данных о куске текстового контента
                  может быть разной, но общая суть одна. Очевидно, что вариантов мета данных очень много,
                  поэтому большинство придётся всё же подсвечивать текстом, так как столько звуков запомнить
                  будет сложно. Это могут быть ссылки, заголовки, списки, таблицы с зачитыванием позиции
                  ячеек, поля редактирования, флажки, кнопки, семантические зоны страницы и пр. Это всё конкретные
                  HTML-объекты, так что все их надо поддерживать.
                </p>
                <h2>Взаимодействие со страницей</h2>
                <p>
                  К сожалению, это ещё не всё, так как специфика реализации накладывает необходимость нескольких
                  режимов взаимодействия со страницей:
                </p>
                <ol>
                  <li>
                    Виртуальный документ
                  <ol>
                    <li>Просмотр</li>
                    <li>Работа с формами</li>
                  </ol>
                  </li>
                  <li>
                    Прямое взаимодействие То есть два основных режима, один из которых имеет два подрежима.
                    Когда мы находимся в режиме виртуального документа, то у нас есть две основные задачи,
                    которые мы решаем: с одной стороны просмотр страницы и навигация по её содержимому, с другой
                    - взаимодействие с ней путём ввода данных в формы. Разделять приходится для того, чтобы
                    не подраться из-за клавиатуры, так как в обоих подрежимах нужны кнопки. Когда мы только
                    зашли на страницу, мы находимся в режиме просмотра. То есть можем ходить по документу и
                    читать всё его содержимое. Но с одними командами навигации по тексту очень не удобно, поэтому
                    у нас есть ряд дополнительных возможностей быстрой навигации, которые подвешены на буквенно-цифровой
                    блок клавиатуры.
                  </li>
                </ol>
                <p>Например:</p>
                <ul>
                  <li>H и Shift+H перемещает по всем заголовкам страницы сверху вниз и снизу вверх.</li>
                  <li>T и Shift+T перемещает по всем таблицам страницы сверху вниз и снизу вверх.</li>
                  <li>1-6 и Shift+1-6 перемещает по всем заголовкам конкретного уровня сверху вниз и снизу вверх.</li>
                  <li>E и Shift+E перемещает по всем полям редактирования сверху вниз и снизу вверх.</li>
                </ul>
                <p>
                  Ну и так далее. Забивается вся клавиатура. В итоге, можно не просто елозить стрелками по
                  тексту и искать конкретные фразы поиском, но и быстро скакать по заголовкам, переходить
                  к полю ввода данных, сразу перескакивать на кнопки и пр. Однако когда возникает необходимость
                  ввода данных, то нужно перейти из подрежима просмотра в подрежим работы с формами. Самый
                  простой вариант - это мы наводимся на поле редактирования и нажимаем Enter или Пробел,
                  которые у нас активируют элементы. При активации поля редактирования мы переходим в режим
                  работы с формами. Здесь буквенно-цифровой блок сразу начинает вести себя нормальным образом
                  и вводить данные, а стрелки также приходят в чувства и начинают перемещать курсор внутри
                  этого поля редактирования. За пределы поля мы не вываливаемся. Когда же мы закончили вводить
                  данные, то, например, по Escape просто выходим из подрежима работы с формами и возвращаемся
                  в подрежим просмотра. Здесь снова ходим по виртуальному документу, а когда в нём подходим
                  к полю редактирования, то нам прочитывается и ранее введённое содержимое. Тем не менее,
                  эта история с виртуальным документом фактически перехватывает всё клавиатурное управление.
                  В подавляющем большинстве случаев нам об этом жалеть не приходится, но бывают ситуации,
                  когда желательно прямое взаимодействие со страницей, минуя виртуальный документ, поэтому
                  такой режим также полезно иметь. Это актуально тогда, когда конкретная страница поддерживает
                  собственные горячие клавиши, например, в YouTube на странице воспроизведения ролика есть
                  горячие клавиши Alt+J/K/L для перемотки назад, паузы и перемотки вперёд. По этой причине
                  должна быть возможность передавать клавиатурные нажатия напрямую странице. То есть фактически
                  мы должны иметь возможность отключить режим виртуального документа и как бы перейти к нативному
                  взаимодействию с браузером. Правда какое из взаимодействий будет нативным для Luwrain -
                  это большой вопрос. :-)
                </p>
                <h2>Подводные камни</h2>
                <p>
                  Однако нет в мире совершенства, поэтому и у концепции виртуального документа есть свои
                  подводные камни: Во-первых, понятно, что при не достаточно хорошо разработанном интерфейсе
                  мы не сможем отрендерить многие конструкции в виртуальный документ. То есть косяки web
                  accessibility никуда не деваются. Однако здесь важно, чтобы браузер поддерживал специальные
                  технологии, типа WAI-ARIA, которые позволяют разработчику доступность чинить. Это отдельный
                  разговор и там есть специальная документация для разработчиков браузеров по имплементированию
                  поддержки WAI-ARIA. Чёрт его знает, входит ли это изначально в Java-реализацию WebKit,
                  которую ты используешь, или надо будет поднимать это самому. В общем этот вопрос надо прокачивать.
                  Во-вторых, есть проблема с тем, что визуально страница уже обновилась, а вот в виртуальном
                  документе у нас устаревшее состояние. С распространением технологий типа Ajax, которые
                  динамически изменяют содержимое страницы без её перезагрузки, эта проблема получает всё
                  большее распространение. Делают специальные команды в чтецах, типа обновить содержимое
                  виртуального документа, если ты подозреваешь, что у тебя устаревшее состояние, а чтец сам
                  об этом не догадался. Здесь надо смотреть, насколько успешно ты сможешь отслеживать изменение
                  DOM. Подозреваю, что поскольку у тебя существенно больший контроль над самим браузерным
                  движком, чем у сторонних экранных чтецов, то с этой проблемой ты сможешь бороться более
                  успешно. В-третьих, всякий хлам типа анимаций зачастую может приводить к истерики экранного
                  чтеца, который воспринимает это как обновление содержимого страницы и начинает её заново
                  рендерить. Здесь чтецы могут предлагать настройки, типа обновлять страницу только по требованию,
                  а не автоматически, плюс можно прибивать воспроизведение анимаций на уровне настроек браузера.
                </p>
                <h2>Неочевидные вещи</h2>
                <p>
                  Сразу хочу предупредить, что искушение полностью игнорировать CSS исходит от лукавого.
                  Да, CSS - это про визуальные стили, но там для нас может быть полезная информация. В частности,
                  желательно иметь команду, которая будет сообщать параметры текста: шрифт, начертание, цвет.
                  К сожалению, часто, например, в формах для подсветки ошибок используют цвет, типа окрашивают
                  названия поля красным. Ну и внизу пишут, что типа исправьте все красные поля. Мы должны
                  иметь возможность как-то справляться в таких ситуациях.
                </p>
                <p>
                  В разных экранных чтецах вся эта общая функциональность может дополняться более мелкими
                  бантиками, но это уже второстепенно.
                </p>
                <p>
                  Тем не менее, существует альтернативный подход, который, в своё время, пропихнул в Orca
                  один странный чувак, а потом перешёл на работу в Apple и сделал это уже в VoiceOver. В
                  Orca это уже после него починили, а VoiceOver расхлёбывать это начал только год назад и
                  пока только в начале пути. Речь о представлении контента не в виде виртуального документа,
                  являющегося подобием обычного текстового, а в виде объектов. Отличие в том, что мы просто
                  последовательно перемещаемся по цепочки объектов, в качестве которых выступают заголовки,
                  кнопки, ссылки, куски текста и пр. Это достаточно убого, потому что по строкам или словам
                  нормально текст уже не почитать, таблица выглядит отдельным контейнерным объектом, который
                  надо разворачивать и сворачивать, выделять текст, охватывающий несколько объектов, например,
                  два абзаца, - это большой геморрой и пр. В общем это ересь, которая ещё неплохо смотрится
                  на мобильных устройствах, где всё примитивнее и нет клавиатуры, но на компьютере абсолютно
                  убога. Даже VoiceOver, как ярчайший представитель объектной навигации, от этого сейчас
                  отходит, потому что этим недовольны даже пользователи Apple, которые вообще славятся склонностью
                  к Стокгольмскому синдрому, но тут минусы уж слишком сильны.
                </p>

<?php }?>
<?php luwrain_end_page('/community/web-browsing/index.php');?>
