
let currentBlock = 0; // Индекс текущего блока
const questionBlocks = document.querySelectorAll('.question-block');

document.getElementById('nextQuestionBtn').addEventListener('click', function() {
    questionBlocks[currentBlock].classList.remove('active'); // Скрыть текущий блок
    currentBlock++; // Перейти к следующему блоку
    if (currentBlock < questionBlocks.length) {
        questionBlocks[currentBlock].classList.add('active'); // Показать следующий блок
    }
});

document.getElementById('nextQuestionBtn2').addEventListener('click', function() {
    questionBlocks[currentBlock].classList.remove('active'); // Скрыть текущий блок
    currentBlock++; // Перейти к следующему блоку
    if (currentBlock < questionBlocks.length) {
        questionBlocks[currentBlock].classList.add('active'); // Показать следующий блок
    }
});
document.getElementById('nextQuestionBtn3').addEventListener('click', function() {
    questionBlocks[currentBlock].classList.remove('active'); // Скрыть текущий блок
    currentBlock++; // Перейти к следующему блоку
    if (currentBlock < questionBlocks.length) {
        questionBlocks[currentBlock].classList.add('active'); // Показать следующий блок
    }
});
document.getElementById('nextQuestionBtn4').addEventListener('click', function() {
    questionBlocks[currentBlock].classList.remove('active');
    currentBlock++;
    if (currentBlock < questionBlocks.length) {
        questionBlocks[currentBlock].classList.add('active');
    }

    // Собираем ответы
    let results = [];
    const totalQuestions = 12;

    for (let i = 1; i <= totalQuestions; i++) {
        const selected = document.querySelector('input[name="question' + i + '"]:checked');
        if (selected) {
            const label = selected.parentNode.textContent.trim();
            results.push(`Вопрос ${i}: ${label}`);
        } else {
            results.push(`Вопрос ${i}: не выбран ответ`);
        }
    }

    // Вставляем мои ответы в соответствующие <span>
    results.forEach((text, index) => {
        const span = document.querySelector(`.user-answer[data-question="${index + 1}"]`);
        if (span) {
            const answerText = text.split(': ')[1];
            span.textContent = answerText;
        }
    });
});

document.getElementById('nextQuestionBtn5').addEventListener('click', function() {
    questionBlocks[currentBlock].classList.remove('active');
    currentBlock++;
    if (currentBlock < questionBlocks.length) {
        questionBlocks[currentBlock].classList.add('active');
    }

    // Собираем ответы с 7 по 12 вопросы
    let results = [];
    const totalQuestions = 12; // всего 12 вопросов
    const startQuestion = 7;

    for (let i = startQuestion; i <= totalQuestions; i++) {
        const selected = document.querySelector('input[name="question' + i + '"]:checked');
        if (selected) {
            const label = selected.parentNode.textContent.trim();
            results.push(`Вопрос ${i}: ${label}`);
        } else {
            results.push(`Вопрос ${i}: не выбран ответ`);
        }
    }

    // Вставляем ответы в соответствующие <span>
    results.forEach((text, index) => {
        const questionNumber = startQuestion + index;
        const span = document.querySelector(`.user-answer[data-question="${questionNumber}"]`);
        if (span) {
            const answerText = text.split(': ')[1];
            span.textContent = answerText;
        }
    });
});


document.getElementById('nextQuestionBtn6').addEventListener('click', function() {
    // Замените 'feedback.html' на URL страницы, на которую хотите перенаправить
    window.location.href = 'otzivi.html';
});

