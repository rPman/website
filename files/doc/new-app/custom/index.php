<?php include "../../../functions.php"; luwrain_begin_page('/doc/new-app/custom/index.php', luwrain_current_lang() == 'ru'?'Создание собственных элементов управления':'Custom controls');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Custom controls</h1>
                <p>This page is available in Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Создание собственных элементов управления</h1>
                <p>
                  LUWRAIN предлагает все&#160;необходимые возможности для&#160;создания ваших собственных
                  элементов управления, которые будут отвечать всем требованиям к&#160;вашему приложению.
                  Существует два&#160;способа сделать это:
                </p>
                <ul>
                  <li>Создать полностью новую реализацию интерфейса <a href="/api/org/luwrain/core/Area.html"><i>org.luwrain.core.Area</i></a>;</li>
                  <li>использовать в&#160;качестве основы некоторый готовый класс из&#160;пакета <i>org.luwrain.controls</i>.</li>
                </ul>
                <h2>Создание нового элемента управления с&#160;нуля</h2>
                <p>
                  При&#160;создании новой реализации интерфейса <i>org.luwrain.core.Area</i> необходимо помнить
                  про:
                </p>
                <ol>
                  <li>
                    Метод <i>getLineCount()</i> не&#160;может возвращать число, меньшее единицы; пустая область
                    &#x2014; это одна пустая строка.
                  </li>
                  <li>
                    При&#160;любом обновлении текстового представления, имени или положения &#x22;горячей точки&#x22;
                    необходимо сразу вызывать соответствующие уведомления в&#160;классе <a href="<?php echo luwrain_link('/doc/new-app/luwrain/');?>"><i>org.luwrain.core.LUWRAIN</i></a>;
                    в&#160;противном случае информация на&#160;экране может не&#160;соответствовать реальному
                    содержанию элемента управления.
                  </li>
                  <li>
                    Вызов уведомлений никогда не&#160;приводит к&#160;автоматической генерации речевого вывода;
                    необходимо всегда заботиться самостоятельно, чтобы в&#160;виде речи пользователь получал&#160;бы
                    все необходимые оповещения своевременно.
                  </li>
                  <li>
                    Область никогда не&#160;получает информацию, видима&#160;ли она на&#160;экране или нет;
                    необходимо считать, что она видима постоянно, хотя, конечно, на&#160;практике это будет
                    не&#160;так.
                  </li>
                </ol>
                <p>
                  Во&#160;всём остальном у&#160;разработчика приложения есть полная свобода действий для&#160;подготовки
                  желаемого поведения!
                </p>
                <h2>Использование готовых элементов управления</h2>
                <p>
                  Использовать готовые элементы управления, конечно, намного проще. Существует три&#160;основных
                  пути модифицировать поведение созданных классов:
                </p>
                <ol>
                  <li>Модифицировать методы класса <a href="/api/org/luwrain/controls/DefaultControlEnvironment.html"><i>org.luwrain.controls.DefaultControlEnvironment</i></a>.</li>
                  <li>
                    Переопределить методы самого класса (особенно <i>onKeyboardEvent()</i> и <i>onEnvironmentEvent()</i>),
                    чтобы изменить реакцию объекта на&#160;команды среды.
                  </li>
                  <li>
                    Использовать специальные заготовленные классы для модификации поведения (например, <a href="/api/org/luwrain/controls/ListItemAppearance.html"><i>org.luwrain.controls.ListItemAppearance</i></a>),
                    если они существуют.
                  </li>
                </ol>
                <h2>Читать далее</h2>
                <ul>
                  <li><a href="<?php echo luwrain_link('/doc/new-app/popups/');?>">Библиотека стандартных всплывающих областей</a></li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/new-app/custom/index.php');?>
