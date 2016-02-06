<?php include "../../../../../functions.php"; luwrain_begin_page('/doc/user/manual/app/contacts/index.php', luwrain_current_lang() == 'ru'?'Адресная книга':'personal contacts');?>
<?php if (luwrain_current_lang() == 'en') {?>
<p>Sorry, this page is available in Russian only.</p>
<?php }?>
<?php if (luwrain_current_lang() == 'ru') {?>
<h1>Адресная книга</h1>

<p>Адресная книга позволяет создавать контакты и группы контактов для их
дальнейшей удобной подстановки в поля "Кому" и "Копия" при создании
писем.
Для открытия Адресной книги выберите соответствующее приложение
в Главном меню или наберите команду <em>contacts</em> в командной строке.
Адресная книга представлена в виде дерева, где уже присутствуют четыре группы: 
"Работа",
"Личные контакты",
"Организации",
"Списки рассылок".
Каждую группу можно пополнять на любую глубину как новыми группами, так и конечными контактами.</p>

<p>Добавление нового объекта производится нажатием клавиши <em>Insert</em>.
При нажатии клавиши <em>Insert</em> система предложит добавить новый объект.
Выберите клавишами вверх/вниз тип добавляемого объекта&#160;&#x2014;
<em>"Новая группа контактов"</em> или
<em>"Новый контакт"</em>.
При&#160;выборе <em>"Новый контакт"</em> ему необходимо присвоить имя. 
Далее выберите новообразованный контакт в группе, к&#160;которой он прикреплен,
и добавьте ему необходимые записи,
такие как:</p>

<ul>
<li>электронная почта;</li>
<li>мобильный телефон;</li>
<li>адрес;</li>
<li>дата рождения. </li>
</ul>

<p>После выбора необходимого варианта соответствующее значение добавляется в блок <em>"Адреса и телефоны"</em> данного контакта,
который вы можете редактировать, переключаясь стрелками вверх и вниз.</p>

<p>Клавиша <em>F4</em> закрывает это приложение и сохраняет изменения. 
После создания все новые контакты и группы будут доступны при&#160;нажатии клавише <em>Insert</em>
в&#160;полях "Кому" и "Копия" в&#160;<a href="<?php echo luwrain_link('/doc/user/manual/app/message/');?>">приложении редактирования нового сообщения</a>.</p>
<?php }?>
<?php luwrain_end_page('/doc/user/manual/app/contacts/index.php');?>