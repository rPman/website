<?php include "../../../../functions.php"; luwrain_begin_page('/doc/user/manual/clipboard/index.php', luwrain_current_lang() == 'ru'?'Буфер обмена':'Clipboard');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <p>Sorry, this page is available in Russian language only.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Работа с&#160;буфером обмена</h1>
                <p>
                  Интерфейс LUWRAIN сконструирован таким образом, чтобы максимально не&#160;допускать появления
                  недоступных фрагментов информации. Практически в&#160;любом положении информация может
                  быть скопирована в&#160;буфер обмена, а&#160;затем вставлена в&#160;объект, который разрешает
                  редактирование текста.
                </p>
                <h2>Копирование простого текста</h2>
                <p>
                  Копирование или вырезание текста состоит из&#160;двух действий: установки отметки начала
                  операции и выполнения самой операции. Отметка устанавливается комбинацией клавиш <i>Ctrl+Пробел</i>
                  и обозначает ту&#160;точку, с&#160;которой начинается фрагмент текста, подлежащий копированию
                  или вырезанию. Далее пользователь должен выбрать другое положение в&#160;тексте и нажать
                  либо <i>Ctrl+Insert</i>, либо <i>Shift+Delete</i>, чтобы выполнить, соответственно, либо
                  копирование, либо вырезание. Отметки начала и конца должны быть различными но не&#160;требуется,
                  чтобы отметка начала находилась в&#160;тексте раньше, чем отметка конца.
                </p>
                <p>Вставка текста выполняется комбинацией клавиш <i>Shift+insert</i>.</p>
                <p>
                  Если отметки начала и конца находятся в&#160;одной и той&#160;же точке или пользователь
                  не&#160;установил отметку начала вовсе, то производится копирование текста целиком.
                </p>
                <h2>Копирование элементов списков и меню</h2>
                <p>
                  Списки, меню и панели файлового менеджера тоже поддерживают операции копирования. Они осуществляются
                  теми&#160;же комбинациями клавиш, но по&#160;несколько иным правилам:
                </p>
                <ol>
                  <li>
                    Если отметка начала копирования не&#160;установлена, то производится копирование всех&#160;элементов
                    списка в&#160;виде текста.
                  </li>
                  <li>Если отметки начала и конца совпадают, то производится копирование всех элементов.</li>
                  <li>
                    Если отметки начала и конца находятся на&#160;одной строке, то копируется фрагмент текста
                    строки между ними.
                  </li>
                  <li>
                    Если отметки находятся на разных элементах, то копируются элементы между ними целиком,
                    игнорируя положения отметок внутри строк.
                  </li>
                </ol>
                <h2>Дополнительные возможности</h2>
                <p>
                  В&#160;некоторых ситуациях могут быть предусмотрены особые механизмы копирования текста
                  в&#160;буфер обмена. На&#160;текущий момент к&#160;ним относится всплывающее окно типа
                  &#x22;Да/Нет&#x22;, в&#160;котором комбинация клавиш <i>Ctrl+Insert</i> всегда выполняет
                  полное копирование текста вопроса целиком, а команда установки начальной отметки не&#160;обрабатывается.
                </p>

<?php }?>
<?php luwrain_end_page('/doc/user/manual/clipboard/index.php');?>
