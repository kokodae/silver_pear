<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О нас</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Почему мы?</h3>
         <p>Мы - онлайн магазин уходовой косметики.Этот ресурс создан чтобы помочь нашим клиентам чувствовать себя красивыми и уверенными в себе. Мы верим, что красота и здоровье должны быть доступны каждому, поэтому мы предлагаем широкий ассортимент качественной косметики по доступным ценам.</p>
         <p>Наш магазин отличается от других тем, что мы заботимся о каждом клиенте и стараемся предоставить наилучший сервис. Мы всегда готовы ответить на все ваши вопросы, помочь выбрать подходящий продукт. Для этого вы можете воспользоваться формой в разделе "Связаться с нами". Мы работаем только с проверенными поставщиками, чтобы гарантировать высокое качество продукции.</p>
         <p>Мы ценим каждого нашего клиента и стараемся сделать покупки в нашем магазине максимально комфортными и приятными. Мы готовы предложить только лучшее для вас и вашей красоты. Выбирайте нас - и вы не пожалеете!</p>
         <a href="contact.php" class="btn">Связаться с нами</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Отзывы клиентов</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Я люблю этот магазин за то, что они помогают мне чувствовать себя красивой и уверенной в себе. Благодаря широкому ассортименту косметики я всегда могу подобрать продукты, которые подходят именно моей коже.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fa-regular fa-star"></i>
         </div>
         <h3>Лана</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>Я очень довольна своим опытом покупок в этом магазине косметики. Здесь я всегда нахожу только лучшую продукцию от известных брендов, а также получаю отличный сервис и быструю доставку. Спасибо за ваше внимание к деталям!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Кристина</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Рад, что наконец-то нашел надежный магазин косметики, где можно купить только проверенную продукцию. Здесь я всегда чувствую себя уверенно в том, что покупаю качественный товар, который не навредит моей коже.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Райан</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p> Я уже несколько раз заказывала косметику в этом магазине. Ребята всегда готовы помочь с выбором продукта и дать полезные советы по уходу за кожей. Быстрый процесс заказа и доставки - это еще один плюс в копилку этого магазина.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Кошка</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Я просто обожаю этот магазин! 10/10!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Ксения</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>Я давно являюсь постоянным клиентом этого магазина косметики и никогда не была разочарована. Здесь я всегда нахожу лучшие продукты для ухода за кожей. Спасибо, что вы такие профессионалы!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="fa-regular fa-star"></i>
         </div>
         <h3>Диана</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>


<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>