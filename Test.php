<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Викторина</title>
    <link rel="stylesheet" href="header.css">
    
    <link rel="stylesheet" href="footer.css">
    <script src="Test.js" defer></script>
</head>

<body>
    <header>
        <a href="index.html"><img src="img/ЛОГО.svg" alt="Лого" class="logo"></a> 
        <nav>
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="bestiary.php">Бестиарий</a></li>
                <li><a href="Test.php">Викторина</a></li>
                <li><a href="otzivi.html">Отзывы</a></li>
            </ul>
        </nav>
    </header>
 
<h2>Контрольные вопросы</h2>


<body>
    <?php
    include 'connect.php';
    
    ?>
        <main>
            <div class="test-container" style="margin-bottom: 30px;">
               

               
        
                <div class="question-block active" >
                    <div class="question" style="margin-bottom: 30px;">
                        <div id="blockCounter" style="position: absolute; top: 145px; right: 560px; font-weight: bold; font-size: 30px;"></div>

                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 1"; //выводим на сайт из бд данные столбца question_id
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 1: <?php echo $user['question'];?></p> <!-- выводим данные на сайт из бд (столбец question)-->
                        <div class="options">
                            <label><input type="radio" name="question1" value="1"><?php echo $user['answer_1'];?></label> <!-- выводим данные из бд (столбец answer_1)-->
                            <label><input type="radio" name="question1" value="2"><?php echo $user['answer_2'];?></label> <!-- выводим данные из бд (столбец answer_2)-->
                            <label><input type="radio" name="question1" value="3"><?php echo $user['answer_3'];?></label> <!-- выводим данные из бд (столбец answer_3)-->
                            <label><input type="radio" name="question1" value="4"><?php echo $user['answer_4'];?></label> <!-- выводим данные из бд (столбец answer_4)-->
                        </div>
                        <!-- и в каждом последующем блоке делаем аналогичные действия, только с другими строками столбцов-->
                    </div>
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 2";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                    <div class="question" style="margin-bottom: 30px;">
                        <p>Вопрос 2: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question2" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question2" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question2" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question2" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 3";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                    <div class="question" style="margin-bottom: 30px;">
                        <p>Вопрос 3: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question3" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question3" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question3" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question3" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <button id="nextQuestionBtn">Следующий блок</button>
                </div>
        
                <!-- Второй блок вопросов -->
                <div class="question-block">
                    <div class="question" style="margin-bottom: 30px;">
                        <div id="blockCounter" style="position: absolute; top: 145px; right: 560px; font-weight: bold; font-size: 30px;"></div>
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 4";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 4: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question4" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question4" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question4" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question4" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 5";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 5: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question5" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question5" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question5" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question5" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 6";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 6: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question6" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question6" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question6" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question6" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <button id="nextQuestionBtn2">Следующий блок</button>
                </div>
        
                <!-- Третий блок вопросов -->
                <div class="question-block">
                    <div class="question" style="margin-bottom: 30px;">
                        <div id="blockCounter" style="position: absolute; top: 145px; right: 560px; font-weight: bold; font-size: 30px;"></div>
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 7";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 7: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question7" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question7" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question7" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question7" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 8";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 8: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question8" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question8" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question8" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question8" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 9";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 9: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question9" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question9" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question9" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question9" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <button id="nextQuestionBtn3">Следующий блок</button>
                </div>
                          <!-- Четвертый блок вопросов -->
                <div class="question-block">
                    <div class="question" style="margin-bottom: 30px;">
                        <div id="blockCounter" style="position: absolute; top: 145px; right: 560px; font-weight: bold; font-size: 30px;"></div>
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 10";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 10: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question10" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question10" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question10" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question10" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 11";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 11: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="questio11" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="questio11" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="questio11" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="questio11" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
        
                    <div class="question" style="margin-bottom: 30px;">
                    <?php
                        $sql = "SELECT * FROM Quiz WHERE question_id = 12";
                        $result = mysqli_query($conn, $sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <p>Вопрос 12: <?php echo $user['question'];?></p>
                        <div class="options">
                            <label><input type="radio" name="question12" value="1"><?php echo $user['answer_1'];?></label>
                            <label><input type="radio" name="question12" value="2"><?php echo $user['answer_2'];?></label>
                            <label><input type="radio" name="question12" value="3"><?php echo $user['answer_3'];?></label>
                            <label><input type="radio" name="question12" value="4"><?php echo $user['answer_4'];?></label>
                        </div>
                    </div>
                    <button id="nextQuestionBtn4">Завершить тест</button>
                </div>

                   
                <div class="question-block">
    <h1>Правильные ответы</h1>

    <?php
    // Запрос вопросов 1-6
    $sql = "SELECT * FROM Quiz WHERE question_id BETWEEN 1 AND 6 ORDER BY question_id ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<p>Ошибка загрузки вопросов: " . mysqli_error($conn) . "</p>";
    } else {
        $questions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Индексируем массив по question_id для удобства
        $questionsIndexed = [];
        foreach ($questions as $q) {
            $questionsIndexed[$q['question_id']] = $q;
        }

        // Выводим вопросы с 1 по 6
        for ($i = 1; $i <= 6; $i++) {
            if (isset($questionsIndexed[$i])) {
                $q = $questionsIndexed[$i];
                ?>
                <div class="question" style="margin-bottom: 30px;">
                    <p>Вопрос <?php echo $i . '. ' . htmlspecialchars($q['question'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <li>Правильный ответ: <?php echo htmlspecialchars($q['correct_answer'], ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Мой ответ: <span class="user-answer" data-question="<?php echo $i; ?>">-</span></li>
                </div>
                <?php
            } else {
                echo "<p>Вопрос $i не найден в базе.</p>";
            }
        }
    }
    ?>
    <button id="nextQuestionBtn5">Далее</button>
</div>

<div class="question-block">
    <h1>Правильные ответы</h1>

    <?php
    // Запрос вопросов 7-12
    $sql = "SELECT * FROM Quiz WHERE question_id BETWEEN 7 AND 12 ORDER BY question_id ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<p>Ошибка загрузки вопросов: " . mysqli_error($conn) . "</p>";
    } else {
        $questions = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $questionsIndexed = [];
        foreach ($questions as $q) {
            $questionsIndexed[$q['question_id']] = $q;
        }

        for ($i = 7; $i <= 12; $i++) {
            if (isset($questionsIndexed[$i])) {
                $q = $questionsIndexed[$i];
                ?>
                <div class="question" style="margin-bottom: 30px;">
                    <p>Вопрос <?php echo $i . '. ' . htmlspecialchars($q['question'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <li>Правильный ответ: <?php echo htmlspecialchars($q['correct_answer'], ENT_QUOTES, 'UTF-8'); ?></li>
                    <li>Мой ответ: <span class="user-answer" data-question="<?php echo $i; ?>">-</span></li>
                </div>
                <?php
            } else {
                echo "<p>Вопрос $i не найден в базе.</p>";
            }
        }
    }
    ?>
    <button id="nextQuestionBtn6">Оставить отзыв</button>
</div>


             
        </main>
        
       <footer>
    <div class="footer-content">
        <h3>© 2025 Mifik</h3>
        <ul class="social-links">
            <li><a href="https://t.me/as_usualeverything_is_strawberry">Telegram</a></li>
            <li><a href="https://vk.com/solkaso_o">VKontakte</a></li>
        </ul>
    </div>
</footer>
</body>
</html>  
    
    

                                              
