// -----------------------------------------------------------------------
// работает, но только на одну форму
// -----------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function () {
    // const form = document.getElementById('form');
    const form = document.querySelector('.user_send_form');
    form.addEventListener('submit', formSend);

    async function formSend(e) {
       e.preventDefault();

       let formData = new FormData(form);

       let response = await fetch('/user_request/callRequest', {
           method: 'POST',
           headers: {
               'Accept': 'application/json'
           },
           body: formData,
       });

       if (response.ok) {
           let result = await response.json();

           console.log(result);

       } else if (response.status === 422) {
           let result = await response.json();
           for (let error in result.errors) {
               let err = result.errors[error];
               alert(err[0]);
           }

       } else {
           alert('Произошла ошибка. Перезагрузите страницу и повторите попытку');
       }


    }
});
