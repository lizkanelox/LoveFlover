<?php
require_once __DIR__.'/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoveFlovers</title>
    <link rel="stylesheet" href="css/questions.css" />
    <link rel="shortcut icon" href="/images/logo2.jpg" type="image/png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <button id="toTop" class="">
        <img src="images/up.svg" alt="Навверх" />
      </button>
      <div class="header">
        <div class="container">
          <div class="header__content">
            <div class="header__logo">
              <a href="index.php" class="header__logo">
                <div class="logo__img">
                  <img src="images/logo2.jpg" alt="Logo" />
                </div>
                <div class="logo__text">
                  <div class="logo__name">LoveFlovers</div>
                  <div class="logo__slogan">
                    Подберем цветочек в каждый дом. <br /> С любовью
                  </div>
                </div>
              </a>
            </div>
            <div class="header__nav">
              <div class="nav__info">
                <div class="nav__number">+7 (000) 555-35-35</div>
                <div class="nav__mail">loveflovers@gmail.com</div>
              </div>
              <div class="nav__menu">
                <ul class="nav__list">
                  <li class="nav__item"><a href="aboutUs.php">О нас</a></li>
                  <li class="nav__item"><a href="models.php">Модели</a></li>
                  <li class="nav__item">
                    <a href="questions.php">Вопросы</a>
                  </li>
                  <li class="nav__item"><a href="service.php">Услуги</a></li>
                  <li class="nav__item">
                    <a href="contacts.php">Контакты</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="quetsions">
          <div class="container">
            <div class="questions__content">
              <div class="quetsions__accordion">
                <div class="questions__title">Часто задаваемые вопросы</div>
                <div class="accordion__item">
                  <div class="item__button">
                    Как мне оплатить заказ?
                    <div class="button__img">
                      <img src="./images/plus.svg" alt="" />
                    </div>
                  </div>
                  <div class="item__content">
                  Оплата заказов производится любым удобным для вас способом:<br /><br />
- Банковской картой онлайн (Visa/Masterсard/Мир);<br />
- Наличными при получении;<br />
- Банковской картой при самовывозе (Visa/Masterсard/Мир);<br />
- Счет для юридических лиц.
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="item__button">
                    Как осуществляется доставка товаров?
                    <div class="button__img">
                      <img class="img" src="./images/plus.svg" alt="" />
                    </div>
                  </div>
                  <div class="item__content">
                  Доставка осуществляется по г. Москва и Московской области <br /><br />
- Доставка производится ТОЛЬКО курьерами (не отправляем почтой и другими службами) <br />
- Все заказы доставляются в течение 1-3 дней с момента оформления заказа. Уточнить сроки доставки конкретного растения Вы сможете у нашего сотрудника.<br />
- Доставка осуществляется c 9.00 до 20.00.<br /><br />
- Сумма заказа весом до 5 кг по Москве в пределах МКАД составляет 450 рублей <br />
- Время доставки можно согласовать с оператором.<br />
- Заказ весом более 5кг по Москве от 500 рублей.<br />
- Крупногабаритных растений от 5кг.-10кг или высотой более 100 см. стоимость доставки от 750 рублей
                  
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="item__button">
                    Как мне узнать размер растения?
                    <div class="button__img">
                      <img src="./images/plus.svg" alt="" />
                    </div>
                  </div>
                  <div class="item__content">
Приблизительная высота растений указана в карточке товара. Все измерения производятся вместе с горшком.<br /><br />
В процессе оформления заказа Вы получите реальное фото растения, для того, чтобы убедиться в его сохранности и габаритах.
                </div>
                </div>
                <div class="accordion__item">
                  <div class="item__button">
                  Как я могу вернуть товар?
                    <div class="button__img">
                      <img src="./images/plus.svg" alt="" />
                    </div>
                  </div>
                  <div class="item__content">
                  Согласно Постановлению Правительства №55 от 19.01.98 "Растения и агрохимикаты" не подлежат обмену и возврату.<br />
Также не подлежат обмену и возврату кашпо и горшки, в которые высажены растения, так как они относятся к товару бывшему в употреблении.<br />
Претензии к внешнему виду, доставленного вам товара в соответствии со ст.458 и 459 ГК РФ, вы можете предъявить только при передачи вам товара продавцом.
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="order">
          <div class="container">
            <div class="order__title">Задайте свой влпрос прямо сейчас</div>
            <div class="order__content">
              <div class="order__info">
                <div class="order__info-phone">+7 (000) 555-35-35</div>
                <div class="order__info-mail">loveflovers@gmail.com</div>
                <div class="order__info-adress">
                  Москва, Лиственничная аллея, 2А
                </div>
                <div class="order__info-links">
                  <a href="#"><img src="./images/telegram.svg" alt="" /></a>
                  <a href="#"><img src="./images/vk.svg" alt="" /></a>
                  <a href="#"><img src="./images/mail.svg" alt="" /></a>
                </div>
              </div>



        <?php ?>
        <?php flash(); ?>

              <div class="order__input">
              <form method="post" action="do_register.php"> 
                <div class="order__input-name">
                  <input type="text" class="name-input" placeholder=" " />
                  <label for="username" class="name-label">Ваше имя</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="order__input-mail">
                  <input type="text" class="mail-input" placeholder=" " />
                  <label for="email" class="mail-label">Ваш Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="order__input-comment">
                  <input type="text" class="name-input" placeholder=" " />  
                  <label for="comment" class="name-label">Ваш вопрос</label>
                  <input type="text" class="form-control" id="comment" name="comment" required>
                </div>
                <div class="d-flex justify-content-between">
                <button type="submit" class="order__button">Отправить</button>
              </div>
            <?php ?>

            </div>
          </div>
        </div>
      </div>

        
      <div class="footer">
        <div class="container">
          <div class="footer__content">
            <div class="footer__nav">
              <ul class="nav__list">
                <li class="nav__item"><a href="aboutUs.php">О нас</a></li>
                <li class="nav__item"><a href="models.php">Модели</a></li>
                <li class="nav__item"><a href="questions.php">Вопросы</a></li>
                <li class="nav__item"><a href="service.php">Услуги</a></li>
                <li class="nav__item"><a href="contacts.php">Контакты</a></li>
              </ul>
            </div>
            <div class="footer__text">
              (almost) lizkanelox's work 2023/06
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="questions.js"></script>
  </body>
</html>
