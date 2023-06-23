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
    <link rel="stylesheet" href="css/style.css" />
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
                  <li class="nav__item"><a href="aboutUs.php">О НАС</a></li>
                  <li class="nav__item"><a href="models.php">МОДЕЛИ</a></li>
                  <li class="nav__item"><a href="questions.php">ВОПРОСЫ</a></li>
                  <li class="nav__item"><a href="service.php">УСЛУГИ</a></li>
                  <li class="nav__item"><a href="contacts.php">КОНТАКТЫ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="banner">
          <div class="container">
            <div class="banner__content">
              <div class="banner__text">
                <div class="banner__title">
                  Доставим цветочек<br />
                  в каждый дом
                </div>
                <div class="banner__subtitle">
                  Сервис по подбору и доставке комнатных растений
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="effectivity">
          <div class="container">
            <div class="effectivity__content">
              <div class="effectivity__title">
                Зачем растение в квартире, если красота интерьера меня не интересует?
              </div>
              <div class="effectivity__subtitle">
                Немного поговорим о пользе зеленых товарищей в наших домах 
              </div>
              <div class="effectivity__grid">
                <div class="effectivity__item">
                  <div class="eff__content">
                    <div class="eff__title">
                      Активно выделяют кислород
                    </div>
                    <div class="eff__text">
                    Это делает воздух в комнатах более свежим и полезным, 
                    способствует улучшению памяти, обеспечивает бодрость и 
                    избавляет от чувства усталости
                    </div>
                  </div>
                </div>
                <div class="effectivity__item effectivity__img1">
                  <img src="images/1.jpg" alt="" />
                </div>
                <div class="effectivity__item">
                  <div class="eff__content">
                    <div class="eff__title">
                      Отлично очищают воздух
                    </div>
                    <div class="eff__text">
                      Комнатные растения снижают количество пыли, углекислого газа, 
                      формальдегидов и других вредных примесей в помещении, а еще 
                      способствуют увлаженнию воздуха
                    </div>
                  </div>
                </div>
                <div class="effectivity__item effectivity__img1">
                  <img src="images/33.jpg" alt="" />
                </div>
                <div class="effectivity__item effectivity__img2">
                  <img src="images/22.jpg" alt="" />
                </div>
                <div class="effectivity__item">
                  <div class="eff__content">
                    <div class="eff__title">
                      Оказывают успокаивающее воздействие
                    </div>
                    <div class="eff__text">
                      Научно доказано, что зеленый цвет благотворно влияет 
                      на умственные и креативные способности человека, а так же 
                      значительно успокаивает нервную систему. Растения помогают замедлить темп повседневной жизни 
                      и снизить уровень стресса
                    </div>
                  </div>
                </div>
                <div class="effectivity__item effectivity__img2">
                  <img src="images/44.jpg" alt="" />
                </div>
                <div class="effectivity__item">
                  <div class="eff__content">
                    <div class="eff__title">
                      Создают комфортный психологический климат
                    </div>
                    <div class="eff__text">
                      Забота о цветах имеет медитативный, расслабляющий эффект. 
                      Многие люди ощущают с растениями эмоциональную связь. Если 
                      нет возможности завести дома питомца - комнатное растение может стать отличным компаньоном
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="pluses">
          <div class="container">
            <div class="pluses__content">
              <div class="pluses__title">Почему стоит выбрать нас?</div>
              <div class="pluses__row">
                <div class="pluses__element">
                  <div class="element__img">
                    <img src="images/acc1.png" alt="" />
                  </div>
                  <div class="element__text">
                    <div class="element__title">Цены на любой бюджет</div>
                    <div class="element__subtitle">
                    Широкий ассортимент позволяет удовлетворить ваш запрос при любом бюджете
                    </div>
                  </div>
                </div>
                <div class="pluses__element">
                  <div class="element__img">
                    <img src="images/acc2.png" alt="" />
                  </div>
                  <div class="element__text">
                    <div class="element__title">Квалификация</div>
                    <div class="element__subtitle">
                    Мы продаём цветы более 800 лет
                    </div>
                  </div>
                </div>
                <div class="pluses__element">
                  <div class="element__img">
                    <img src="images/acc3.png" alt="" />
                  </div>
                  <div class="element__text">
                    <div class="element__title">Озеленение под ключ</div>
                    <div class="element__subtitle">
                    Фитодизайн, озеленение помещений, договора на обслуживание и уход за растениями
                    </div>
                  </div>
                </div>
                <div class="pluses__element">
                  <div class="element__img">
                    <img src="images/acc4.png" alt="" />
                  </div>
                  <div class="element__text">
                    <div class="element__title">Мы на связи</div>
                    <div class="element__subtitle">
                    Всегда рады вам и готовы помочь в выборе товаров в нашем каталоге
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="models">
          <div class="container">
            <div class="models__content">
              <div class="models__title">Наши новинки</div>
              <div class="models__subtitle">
                Поприветствуем новичков нашего магазина
              </div>
              <div class="models__slider">
                <div class="slider__line">
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/new1.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Орхидея фаленопсис Блэк Перпл</div>
                      <div class="obj__info">
                      Орхидея фаленопсис Блэк Перпл - жемчужина - относится к семейству черных орхидей. Сортовая, небольшая, ароматная орхидея. Цветок латексный, не большой. Очень эффектная и редкая орхидея, с запахом парфюма. Из большого семейства фаленопсисов, подвид ароматная мультифлора.                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/new2.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Спатифиллум Верди</div>
                      <div class="obj__info">
                      Данный сорт является из серии люксовых сортов данного комнатного растения. С большими цветами и их много. Листья, плотной формы зеленого цвета. Пышный большой спатифиллум. Цветок неприхотлив в уходе, но имеет некоторые особенности. 
Во-первых, ему необходима постоянная влага (обильный полив и достаточная влажность в помещении). 
Во-вторых, растение не переносит прямого солнца, резких перепадов температуры и перегрева.  Это растение подойдет как для дома, так и для офиса.  
                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/new3.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Эхмея</div>
                      <div class="obj__info">
                      Относится к семейству бромелиевых растений.
Данный цветок эпифит, который имеет плотную розетку из листьев заостренной линейной формы. По краям листочки зубчатые. Внутри расположен цветонос с колючими краями.
Период цветения приходится на конец зимы либо на середину лета. Цветок необыкновенно красивый, розового цвета с переливами.
                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                </div>
                <div class="slider__button-left slider__block">
                  <button class="slider__button-left"></button>
                </div>
                <div class="slider__button-right slider__block">
                  <button class="slider__button-right"></button>
                </div>
              </div>
            </div>
          </div>
        
        <br/><br/><br/><br/><br/>
        
          <div class="container">
            <div class="models__content">
              <div class="models__title">Наши любимчики</div>
              <div class="models__subtitle">
                Растения, покорившие сотни сердец
              </div>
              <div class="models__slider">
                <div class="slider__line">
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/love1.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Монстера Делициоза</div>
                      <div class="obj__info">
                      Одно из самых любимых растений у цветоводов, так как неприхотливо в уходе. Оно относится к семейству Ароидных. Отличается от многих других комнатных растений своими большими листьями необычной формы. Оно может вырастать до 2 м в высоту. 
                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/love2.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Пальма Финик Канарский</div>
                      <div class="obj__info">
                      Растение в горшке может дорасти до 2 метров в высоту. Имеет декоративный вид в домашних услових, который можно поддерживать с помощью обрезки растения.
Ствол прямой и отличается повышенной прочностью.
Листья короткочерешковые, могут достигать шестиметровой длины и сохраняются они лишь на самом верху пальмы. На листовой сложноперистой пластине растет множество узких листочков (очень жесткие).
В природе произрастает на каменистых местностях.
                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                  <div class="slider__obj">
                    <div class="obj__img">
                      <img src="./images/love3.jpg" alt="" />
                    </div>
                    <div class="obj__text">
                      <div class="obj__title">Ананас комнатный Кандидо</div>
                      <div class="obj__info">
                      Это экзотическое плодовое растение относится к семейству бромелиевых. У этого растения линейные листочки, с зубчиками по краям. Листочки собираются в розетку, из которой и вырастает плод. Ананас в квартире  можетвырасти до 70 см в высоту. Во время цветения на нем образуются мелкие цветочки с большими прицветниками. Растение вечнозеленое, поэтому всегда будет украшать помещение своей экзотичностью.
                      </div>
                      <a href="models.php" class="obj__button">Узнать подробнее</a>
                    </div>
                  </div>
                </div>
                <div class="slider__button-left slider__block">
                  <button class="slider__button-left"></button>
                </div>
                <div class="slider__button-right slider__block">
                  <button class="slider__button-right"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="order">
          <div class="container">
            <div class="order__title">Оформите заказ прямо сейчас</div>
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
                  <label for="comment" class="name-label">Комментарии к заказу</label>
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
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
