<?php include "../../functions.php"; luwrain_begin_page('/doc/user/index.php', luwrain_current_lang() == 'ru'?'Документация для пользователей':'User documentation');?>
<?php if (luwrain_current_lang() == 'en') {?>
                <h1>User documentation</h1>

<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
                <h1>Документация для пользователей</h1>
                <p>
                  Документация для&#160;пользователей состоит из&#160;двух основных разделов: инструкция
                  по&#160;установке системы на&#160;жёсткий диск для&#160;начала работы и руководства по&#160;использованию,
                  необходимое, если система уже готова к&#160;работе. Здесь вы сможете найти разделы справочной
                  информации и другие дополнительные материалы.
                </p>
                <p>Выберите интересующий вас раздел:</p>
                <ul>
                  <li>
                    <a href="<?echo luwrain_link('installation/');?>">Инструкция по&#160;установке и настройке системы для&#160;начала
                    работы</a>
                  </li>
                  <li><a href="<?echo luwrain_link('manual/');?>">Руководство пользователя системы, если она установлена и настроена</a></li>
                </ul>
                <h2>Справочная информация</h2>
                <ul>
                  <li><a href="<?echo luwrain_link('hotkeys/');?>">Список комбинаций горячих клавиш</a></li>
                </ul>
                <h2>Дополнительные материалы</h2>
                <ul>
                  <li>
                    <a href="<?echo luwrain_link('try/');?>">Как познакомиться с&#160;системой без&#160;установки на&#160;жёсткий
                    диск?</a>
                  </li>
                  <li>
                    <a href="<?echo luwrain_link('start/');?>">Минимальная инструкция по&#160;установке системы для&#160;быстрого
                    начала работы</a>
                  </li>
                </ul>

<?php }?>
<?php luwrain_end_page('/doc/user/index.php');?>
