<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/downloadGameButton.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/phpHeader.css">
    <link rel="stylesheet" href="../css/style.css"> <!-- основные стили страницы -->
    <link rel="stylesheet" href="../css/animations.css"> <!-- анимации блоков(keyframes и анимации через js) -->
    <link rel="stylesheet" href="../css/cards.css"> <!-- стили блока карты и блоков внутри него -->
    <link rel="stylesheet" href="../css/zoom.css"> <!-- изменение размера текста при приближении внутри блока карты -->
    <link rel="icon" type="image/png" href="../img/Logo.png"> <!-- логотип -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="'Машина времени' - карточная игра про вторую мировую войну"> <!-- Описание страницы -->
    <meta name="author" content="Кузнецов Семён"> <!-- указывает автора страницы -->
    <meta name="keywords" content="игры, настольная игра, карточная игра, вторая мировая война, скачать машина времени"> <!-- подсказки для посковой системы -->
    <title>Машина времени</title>
    <!-- скрипт для скачивания файла из проекта -->
    <script src="../js/downloadGame.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <?
    session_start();
    if (!isset($_SESSION['login'])) {
        $login = "Вход";
        $openFile = file_get_contents('../js/openFile.js');
        echo $openFile;
        echo "<style>#login:hover {background: #737373; border: 1px solid #999999}</style>";
    } else {
        $login = $_SESSION['login'];
        $logout = "Выйти";
        $modalWindow = file_get_contents('../js/modalWindow.js');
        echo $modalWindow;
    }
    ?>
</head>
<body>
    <!-- картинка на заднем фоне сайта -->
    <div id="BackI"></div>
    
    <div class="wrapper">
        <header>
            <div class="svg-pos">
                <svg width="86" height="90" viewBox="0 0 86 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 90V7.5C6 6.94772 6.44772 6.5 7 6.5H14.7778C15.2089 6.5 15.5915 6.77628 15.7271 7.18552L42.5 88" stroke="#94B5CD" stroke-width="12"/>
                    <path d="M79.5 90V7C79.5 6.44772 79.0523 6 78.5 6H70.9852C70.5545 6 70.1722 6.27578 70.0363 6.6845L43 88" stroke="#8ABB99" stroke-width="12"/>
                    <rect x="37" y="69" width="5.8" height="19" fill="#94B5CD"/>
                    <path d="M42.8425 87.8859V89.8859H36.7734L42.8425 87.8859Z" fill="#94B5CD"/>
                    <path d="M42.6956 87.8986V89.8986H48.6956L42.6956 87.8986Z" fill="#94B5CD"/>
                </svg>
            </div>
            
            <div class="log-btn-pos">
                <div id="login">
                    <p>
                        <? echo "$login" ?>
                    </p><br>
                    <a id="logout" href="#" style="pointer-events: none;"><?if (isset($logout)) echo $logout;?></a>
                </div>
            </div>
        </header>
                
        <main>
            <h1>Машина времени</h1>
            
            <!-- объявление блока с описанием игры -->
            <div class="description_of_the_game">
                <!-- объявление блока текста, для определения его позиции, чтобы анимации работали корректно  -->
                <div class="paragraph">
                    <p>
                        «Машина времени» - В этом приключении игроков закинули в 1936 - 1945 год, и чтобы выбраться нужно сложить исторические события в хронологический порядок, чтобы самый умный игрок вернулся домой.
                    </p>
                </div>
            </div>
            <!-- конец блока с описанием игры -->
            
            <!-- объявление блока карты, для размещения двух блоков внутри на одной линии -->
            <div class="cards">
                <!-- объявление блока микросхемы -->
                <div class="microchips _anim-items _anim-no-hide">
                    <!-- объявление блока для размещения картинок внутри -->
                    <div class="imgs">
                        <!-- объявление блока для центрирования картинок -->
                        <div class="img_to_center">
                            <!-- объявление блока для размещения картинки внутри -->
                            <div class="img_content">
                                <!-- добавление картинки -->
                                <img class="img_in_cards1 _anim-items _anim-no-hide" src="../img/1-1.png" alt="Вторжение Германии в Польшу">
                            </div>
                        </div>
                        
                        <div class="img_to_center">
                            <div class="img_content">
                                <img class="img_in_cards2 _anim-items _anim-no-hide" src="../img/2-1.png" alt="Пакт Молотова-Риббентропа">
                            </div>
                        </div>
                        
                    </div>
                    <!-- заголовок блока микросхемы -->
                    <h2 class="heading_2 _anim-items _anim-no-hide">Микросхемы</h2>
                    <div class="paragraph_1 _anim-items _anim-no-hide">
                        <p>
                            Представляют собой события произошедшие во времена 2 - ой мировой войны, и события незадолго до неё. На обратной стороне этих карт есть информация по поводу этого события и дата, когда оно произошло.
                        </p>
                    </div>
                </div>
                <!-- конец блока микросхемы -->
                
                <!-- объявление блока штуковины -->
                <div class="shtukovins _anim-items _anim-no-hide">
                    <div class="imgs">
                        <div class="img_to_center">
                            <div class="img_content">
                                <img class="img_in_cards3 _anim-items _anim-no-hide" src="../img/паяльник.png" alt="Паяльник">
                            </div>
                        </div>
                        
                        <div class="img_to_center">
                            <div class="img_content">
                                <img class="img_in_cards4 _anim-items _anim-no-hide" src="../img/процессор.png" alt="Процессор">
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="heading_3 _anim-items _anim-no-hide">Штуковины</h2>
                    <div class="paragraph_2 _anim-items _anim-no-hide">
                        <p>
                            Позволяют взаимодействовать между игроками. Они помогают вам в сборе своей машины времени, или испортить машины других игроков.
                        </p>
                    </div>
                </div>
                <!-- конец блока штуковины -->
            </div>
            <!-- конец блока карты -->

            <!-- блок с правилами игры -->
            <div class="rules_of_the_game _anim-items _anim-no-hide">
                <h2 class="heading_4 _anim-items _anim-no-hide">Краткие правила игры</h2>
                <div class="paragraph_3 _anim-items _anim-no-hide">
                    <p>
                        В свой ход игрок берёт на выбор микросхему или штуковину. Может проверить работоспособность своей машины времени, если у игрока 3 или более карт, если хронологический порядок не правильный, то игрок сбрасывает карты микросхемы и использованные штуковины, также берёт 1 карту. Также штуковины можно использовать только в свой ход. Если игрок взял любую карту, ход заканчивается; проверить машину времени и использовать штуковину нельзя; если в штуковине прописано «играйте сразу», то нужно использовать её сразу, не обращая внимания на запрет.
                    </p>
                </div>
            </div>
            <!-- конец блока с правилами -->
            
            <!-- кнопка для скачивая файла -->
            <div class="download-btn-position">
                <button type="button" onclick="downloadFile('../Game/тут должна быть игра.txt')" class="download-game">Скачать игру</button>
            </div>
            
            <footer>
                <nav>
                    <ul>
                        <span>Связь с разработчиком: </span>
                        
                        <li>
                            <a href="https://vk.com/marhonde" title="VKontakte">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                    <path d="M31.5 63.5C0 95 0 145.7 0 247V265C0 366.3 0 417 31.5 448.5C63 480 113.7 480 215 480H233C334.3 480 385 480 416.5 448.5C448 417 448 366.3 448 265V247C448 145.7 448 95 416.5 63.5C385 32 334.3 32 233 32H215C113.7 32 63 32 31.5 63.5zM75.6 168.3H126.7C128.4 253.8 166.1 290 196 297.4V168.3H244.2V242C273.7 238.8 304.6 205.2 315.1 168.3H363.3C359.3 187.4 351.5 205.6 340.2 221.6C328.9 237.6 314.5 251.1 297.7 261.2C316.4 270.5 332.9 283.6 346.1 299.8C359.4 315.9 369 334.6 374.5 354.7H321.4C316.6 337.3 306.6 321.6 292.9 309.8C279.1 297.9 262.2 290.4 244.2 288.1V354.7H238.4C136.3 354.7 78 284.7 75.6 168.3z"/>
                                </svg>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://telegram.me/Marh0nde" title="Telegram">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="15.5" viewBox="0 0 496 512" >
                                    <path d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </footer>
        </main>
    </div>

    <div class="container" id="container" style="pointer-events: none; opacity: 0;">
        <div class="dark">
            <div class="accept">
                <div id="cross">&#10006;</div>
                <p>Вы действительно хотите<a href="logout.php"> выйти</a>?</p>
            </div>
        </div>
    </div>
</body>
<!-- подключение скрипта анимаций -->
<script src="../js/animScroll.js"></script>
<!-- подключение скрипта чинящий текст в блоке карты при приближении -->
<script src="../js/zoom.js"></script>
</html>