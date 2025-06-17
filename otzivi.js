document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращает отправку формы

    // Получаем значения из полей ввода
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Формируем ответ
    const responseMessage = 
        <h3>Ваше сообщение:</h3>;
        <p><strong>Имя:</strong> ${name}</p>;
        <p><strong>Сообщение:</strong> ${message}</p>;

    // Отображаем ответ на странице
    document.getElementById('response').innerHTML = responseMessage;

    // Очищаем форму
    document.getElementById('form').reset();
});
