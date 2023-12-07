<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}

include 'components/wishlist_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Все товары</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="category">
   <h1 class="heading">категории</h1>
   <div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <a href="category.php?category=Крем для лица" class="swiper-slide slide">
            <img src="images/icon-1.png" alt="">
            <h3>Крем для лица</h3>
         </a>

         <a href="category.php?category=Тонер" class="swiper-slide slide">
            <img src="images/icon-2.png" alt="">
            <h3>Тонер</h3>
         </a>

         <a href="category.php?category=Мицеллярная вода" class="swiper-slide slide">
            <img src="images/icon-3.png" alt="">
            <h3>Мицеллярная вода</h3>
         </a>

         <a href="category.php?category=Гидрофильное масло" class="swiper-slide slide">
            <img src="images/icon-4.png" alt="">
            <h3>Гидрофильное масло</h3>
         </a>

         <a href="category.php?category=Маска для лица" class="swiper-slide slide">
            <img src="images/icon-5.png" alt="">
            <h3>Маска для лица</h3>
         </a>

         <a href="category.php?category=Сыворотка" class="swiper-slide slide">
            <img src="images/icon-6.png" alt="">
            <h3>Сыворотка</h3>
         </a>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>
</div>
</section>

<section class="products">
   <h1 class="heading">Все товары</h1>
   <div class="box-container">
      <?php
      $select_products = $conn->prepare("SELECT * FROM `products`"); 
      $select_products->execute();
      if($select_products->rowCount() > 0){
         while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
      ?>
      <form action="" method="post" class="box">
         <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
         <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
         <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
         <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
         <div class="name"><?= $fetch_product['name']; ?></div>
         <div class="flex">
            <div class="price"><?= $fetch_product['price']; ?><span> ₽</span></div>
            <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
         </div>
         <input type="submit" value="Добавить в корзину" class="btn" name="add_to_cart">
      </form>
      <?php
         }
      } else {
         echo '<p class="empty">товары отсутствуют</p>';
      }
      ?>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
   const swiper = new Swiper(".swiper", {
      loop:true,
      spaceBetween: 20,
      pagination: {
         el: ".swiper-pagination",
         clickable:true,
      },
      breakpoints: {
         550: {
         slidesPerView: 2,
         },
         768: {
         slidesPerView: 2,
         },
         1024: {
         slidesPerView: 3,
         },
      },
   });
});
</script>
</body>
</html>
