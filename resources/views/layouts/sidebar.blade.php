<div class="sidebar_title">
    Свяжитесь с нами
</div>
<div class="sidebar_content">
    <span data-hystmodal="#callRequestWindow" class="sidebar_content_item">
        Заказать звонок
    </span>
    <div class="hystmodal" id="callRequestWindow" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close">Закрыть</button>
                <!-- Ваш HTML код модального окна -->
                <div id="callRequestWindow">
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
    </div>

    <span data-hystmodal="#questionRequestWindow" class="sidebar_content_item">
        Задать вопрос
    </span>
    <div class="hystmodal" id="questionRequestWindow" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close">Закрыть</button>
                <!-- Ваш HTML код модального окна -->
                <div id="questionRequestWindow">
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
    </div>
</div>
