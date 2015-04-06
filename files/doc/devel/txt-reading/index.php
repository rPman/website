<?php include "../../../functions.php"; luwrain_begin_page('/doc/devel/txt-reading/index.php', luwrain_current_lang() == 'ru'?'Требования к приложению для чтения больших текстов':'Requirements for texts reading application');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>Requirements for texts reading application</h1>
                <p>This page is currently available only in&#160;Russian language.</p>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Требования к&#160;приложению для&#160;чтения больших текстов</h1>
                <p>
                  На&#160;этой странице приведены требования к&#160;приложению, позволяющему чтение больших
                  текстов (книг, статей и&#160;пр.). Рассматривается только задача чтения книг, в&#160;которых
                  присутствует текстовая информация (чтение &#x22;говорящих книг&#x22; из&#160;mp3-файлов
                  не&#160;рассматривается).
                </p>
                <p>Приложение должно поддерживать следующие форматы входных текстов:</p>
                <ul>
                  <li>chm;</li>
                  <li>daisy;</li>
                  <li>djvu;</li>
                  <li>doc;</li>
                  <li>docx;</li>
                  <li>epub;</li>
                  <li>fb2;</li>
                  <li>html;</li>
                  <li>m4b;</li>
                  <li>odt;</li>
                  <li>pdf;</li>
                  <li>rtf;</li>
                  <li>txt.</li>
                </ul>
                <p>Требуется наличие следующих базовыхъ функций:</p>
                <ul>
                  <li>
                    создание закладок, с&#160;каждой из&#160;которых ассоциирован комментарий и некоторое множество
                    тэгов;
                  </li>
                  <li>автоматическое запоминание отметки последнего чтения в&#160;каждом файле;</li>
                  <li>создание и поддержка заметок, ассоциированных с&#160;некоторым положением в&#160;тексте;</li>
                  <li>поддержка стандарта <a target="_blank" href="https://ru.wikipedia.org/wiki/OPDS">OPDS</a>;</li>
                  <li>возможность трансляции текста в&#160;множество аудио-файлов с&#160;указанием их&#160;длины;</li>
                  <li>навигация по&#160;элементам текста: заголовкам, абзацам, предложениям, словам и&#160;т.&#160;д.;</li>
                  <li>Регулировка скорости и громкости чтения.</li>
                </ul>
                <p>
                  В&#160;будущем должна быть проверена возможность реализации таких дополнительных возможностей,
                  как:
                </p>
                <ul>
                  <li>вывод произносимого текста на&#160;брайлевский дисплей;</li>
                  <li>
                    автоматическое формирование библиографической ссылки на&#160;текущую книгу при&#160;копировании
                    текста в&#160;буфер обмена;
                  </li>
                  <li>синхронизация данных между разными машинами и с&#160;другими приложениями (например, fbreader).</li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/devel/txt-reading/index.php');?>
