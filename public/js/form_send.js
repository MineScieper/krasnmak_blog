// -----------------------------------------------------------------------
// Форма должна иметь:
// 1) Селектор .user_send_form
// 2) Дата-атрибут data-controller-method со значением в виде исполняемого метода контроллера-обработчика запроса
// -----------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {

    const forms = document.querySelectorAll('.user_send_form');

    for (let form of forms) {

        let formControllerMethod = form.dataset.controllerMethod;
        const errors_container = form.querySelector('.errors_container');
        const submit_button = form.querySelector('.submit_button');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();

            let formData = new FormData(form);

            let response = await fetch('/user_request/' + formControllerMethod, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: formData,
            });

            let result = await response.json();
            while (errors_container.firstChild) {                           // Удаляем прошлые сообщения об ошибках, если они есть
                errors_container.removeChild(errors_container.firstChild);
            }

            if (response.ok) {
                submit_button.classList.add('submitted');
                submit_button.innerHTML = 'Отправлено!';
                for (let i = 0, formLen = form.length; i < formLen; i++) {        // Блокировка формы от изменений
                    form.elements[i].readOnly = true;
                }

            } else if (response.status === 422) {
                for (let error in result.errors) {
                    let err = result.errors[error];
                    let error_span = document.createElement('p');
                    error_span.classList.add('error_red');
                    error_span.innerHTML = `${err[0]}`;                                // создаём <span> с текстом ошибки
                    errors_container.append(error_span);

                    setTimeout(() => error_span.classList.add('error_black'), 500);      // анимация текста ошибки
                    submit_button.disabled = true;
                    setTimeout(() => submit_button.disabled = false, 1500);
                }

            } else {
                alert('Произошла ошибка. Повторите попытку');
            }
        });
    }
});
