<div id="callRequestWindow" class="modal">
    <div class="modal_body">
        <div class="modal_content">
            <div class="modal_close"></div>
            <form action="##" method="post" class="sidebar_modal_form user_send_form" data-controller-method="callRequest">
                @csrf
                <div class="input_label" style="font-size: 28px;">
                    Заказать звонок
                </div>
                <div class="form_item">
                    <label class="input_label" for="phone_number">Номер телефона</label>
                    <input class="input" name="phone_number" id="phone_number" type="text" placeholder="Введите Ваш номер телефона" data-phone-pattern data-phone-clear = 'false'>
                </div>
                <div class="form_item">
                    <label class="input_label" for="call_time">Удобное время звонка</label>
                    <input class="input" maxlength="25" name="call_time" id="call_time" type="text" placeholder="Например, 12:00 - 16:00">
                </div>
                <div class="errors_container">

                </div>
                <button type="submit" class="submit_button auth_button">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</div>

<div id="questionRequestWindow" class="modal">
    <div class="modal_body">
        <div class="modal_content">
            <div class="modal_close"></div>
            <form action="##" method="post" class="sidebar_modal_form user_send_form" data-controller-method="questionRequest">
                @csrf
                <div class="input_label" style="font-size: 28px">
                    Задать вопрос
                </div>
                <div class="form_item">
                    <label class="input_label" for="email_for_question">E-mail</label>
                    <input class="input" name="email" id="email_for_question" type="text" placeholder="Введите Ваш адрес электронной почты">
                </div>
                <div class="form_item">
                    <label class="input_label" for="text_for_question">Текст</label>
                    <textarea class="input" name="text" id="text_for_question" maxlength="65534" rows="10" placeholder="Напишите свой вопрос"></textarea>
                </div>
                <div class="errors_container">

                </div>
                <button type="submit" class="submit_button auth_button">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</div>

<div id="textRequestWindow" class="modal">
    <div class="modal_body">
        <div class="modal_content">
            <div class="modal_close"></div>
            <form action="##" method="post" class="sidebar_modal_form user_send_form" data-controller-method="questionRequest">
                @csrf
                <div class="input_label" style="font-size: 28px">
                    Оставить сообщение
                </div>
                <div class="form_item">
                    <label class="input_label" for="email_for_message">E-mail</label>
                    <input class="input" name="email" id="email_for_message" type="text" placeholder="Введите Ваш адрес электронной почты">
                </div>
                <div class="form_item">
                    <label class="input_label" for="message_theme">Тема сообщения</label>
                    <select name="message_theme" id="message_theme" class="input">
                        <option value="Выращивание модульных композиций"> Выращивание модульных композиций </option>
                        <option value="Ландшафтное озеленение">Ландшафтное озеленение</option>
                        <option value="Стилизованные каркасные опоры">Стилизованные каркасные опоры</option>
                        <option value="Заборные панели">Заборные панели</option>
                        <option value="Фотобордюры">Фотобордюры</option>
                        <option value="Фотооткрытки">Фотооткрытки</option>
                    </select>
                </div>
                <div class="form_item">
                    <label class="input_label" for="message">Текст сообщения</label>
                    <textarea class="input" name="text" id="message" maxlength="65534" rows="10" placeholder="Напишите свой вопрос"></textarea>
                </div>

                <div class="errors_container">

                </div>
                <button type="submit" class="submit_button">
                    Отправить
                </button>
            </form>
        </div>
    </div>
</div>
