<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="header">

   <section class="flex">

      <a href="../admin/dashboard.php" class="logo_full">
         <img src="images/logo.png" width="45" height="45" alt="">
         <div class="logo">SilverPear<span>Admin</span></div>
      </a>

      <nav class="navbar">
         <a href="../admin/dashboard.php">Инструменты</a>
         <a href="../admin/products.php">Товары</a>
         <a href="../admin/placed_orders.php">Заказы</a>
         <a href="../admin/admin_accounts.php">Администраторы</a>
         <a href="../admin/users_accounts.php">Пользователи</a>
         <a href="../admin/messages.php">Сообщения</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">Обновить информацию</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">Регистрация</a>
            <a href="../admin/admin_login.php" class="option-btn">Вход</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('Вы действительно хотите выйти?');">Выйти из аккаунта</a> 
      </div>

   </section>

</header>