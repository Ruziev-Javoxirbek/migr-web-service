<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOLINA PRO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <link rel="stylesheet" href="css-html/main.css">
</head>
<body>
    <header class="header">
        <div class="box">
            <div class="container">
                <div class="header-inner">
                    <div class="header-top">
                        <div class="header-logo"><a href="">DOLINA PRO</a></div>
                        <nav class="header-nav">
                            <ul class="header-nav__menu">
                                <li class="header-list">
                                    <a href="#about-us" class="header-top_link">О нас</a>   
                                </li>
                                <li class="header-list">
                                    <a href="#services" class="header-top_link">Виды услуг</a>   
                                </li>
                                <li class="header-list">
                                    <a href="" class="header-top_link">Оставьте заявку</a>   
                                </li>
                                <li class="header-list">
                                    <a href="" class="header-top_link">Контакты</a>   
                                </li>
                                <li class="header-list">
                                    <a href="?p=login" class="header-top_link">Личный кабинет</a>   
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-center">
                        <div class="header-center__left">
                            <div class="center__left-title">
                                Бюро переводов Dolina-pro
                            </div> 
                        </div>
                        <div class="header-center__right">
                            <img src="images/рука.avif" alt="">
                        </div>
                    </div>
                    <div class="header-button">
                        <a class="btn-head" href="#forma">Получить консультацию</a>
                    </div>
                </div>
            </div>    
        </div>    
    </header>
    <section class="personal_kab">
        <?php
        if ($_GET['p']=='login'){
            require('login.php');
        }
        ?>
    </section>
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="about-us__title">О нас "dolina pro"</div>
            <div class="about-us__inner">
                <div class="about-us__text">
                   «Dolina pro Бюро переводов» — безусловно, лидер сургутского рынка, компания уже более 8 лет предоставляет услуги перевода широкому кругу клиентов - от крупных предприятий до частных лиц. Мы оказываем услуги оперативного письменного перевода и редактирования перевода носителем языка или специалистом отрасли. Мы также выполняем синхронный и последовательный перевод, лингвистическое сопровождение внешнеэкономической деятельности (в том числе виртуальный офис), перевод телефонных переговоров. Миссия компании: предоставление высококачественных переводческих услуг и постоянное повышение качества обслуживания.
                </div>    
            </div>  
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="services-inner">
                <div class="services-inner__title">Виды услуг</div>
                <div class="services-inner__subtitle">
                    Перевод личных документов с нотариальным заверением
                </div>
                <div class="slideshow">
                    <img src="images/photo1.jpg" alt="Photo 1" class="slide">
                    <img src="images/photo2.jpg" alt="Photo 2" class="slide">
                    <img src="images/photo3.jpg" alt="Photo 3" class="slide">
                    <button id="prevButton" class="btn-slide">Назад</button>
                    <button id="nextButton" class="btn-slide">Далее</button>
                  </div>
            </div>
        </div>
    </section>    
    <form class="form" method="post" action="send.php" id="forma">
        <label class="texr_form" for="name">Имя:</label>
        <input type="text" name="name" id="name" required>

        <label class="texr_form" for="email">Email:</label>
        <input type="text" name="email" id="email" required>

        <label class="texr_form" for="message">Сообщение:</label>
        <textarea name="message" id="message" rows="5" required></textarea>

        <input type="submit" value="Отправить">
    </form>
    <div class="phpmessage">
        <?php
        echo ($_SESSION['message']);
        $_SESSION['message'] = null;
        ?>
    </div>
</body>
</html>