<?php
include 'connect.php';

$sql = "SELECT * FROM Creatures";             
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yokai Bestiary</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="bestiary.css">
    <link rel="stylesheet" href="footer.css">
    <script src="bestiary.js" defer></script>
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

<?php if (mysqli_num_rows($result) > 0) { ?>
    <div class="grid-container">
        <?php while($row = mysqli_fetch_array($result)) {
            $creature_id = (int)$row['creature_ID'];
            $img_sql = "SELECT way_img FROM img_modal WHERE creature_ID = $creature_id LIMIT 3";
            $img_result = mysqli_query($conn, $img_sql);

            $imgs = ["", "", ""];
            $i = 0;
            while($img_row = mysqli_fetch_assoc($img_result)) {
                $imgs[$i++] = htmlspecialchars($img_row['way_img']);
            }
        ?>
            <div class="image-container" style="display:flex, flex-direction: row;" onmouseover="showText(this)" onmouseout="hideText(this)" onclick="showModal(this)"> 
                <img 
                    src="<?php echo htmlspecialchars($row['img_grid_conteiner']); ?>" 
                    data-modal-img1="<?php echo $imgs[0]; ?>" 
                    data-modal-img2="<?php echo $imgs[1]; ?>" 
                    data-modal-img3="<?php echo $imgs[2]; ?>" 
                    data-text="<?php echo htmlspecialchars($row['description']); ?>"
                    data-name="<?php echo htmlspecialchars($row['name']); ?>">
                <div class="image-text" style="display: none;"><?php echo htmlspecialchars($row['name']); ?></div>
            </div>
        <?php } ?> 
    </div>
<?php } ?>

<!-- МОДАЛЬНОЕ ОКНО -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="hideModal()">×</span>
        <div class="modal-name" id="modalName"></div>
        <div class="modal-images">
            <img class="modal-img" id="modalImage1">
            <img class="modal-img" id="modalImage2">
            <img class="modal-img" id="modalImage3">
        </div>
        <div class="modal-text" id="modalDescription"></div>
    </div>
</div>

<footer>
    <div class="footer-content">
        <p>&copy; 2025 Mifik</p>
        <ul class="social-links">
            <li><a href="https://t.me/as_usualeverything_is_strawberry" class="cnopki1">Telegram</a></li>
            <li><a href="https://vk.com/solkaso_o" class="cnopki1">VKontakte</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
