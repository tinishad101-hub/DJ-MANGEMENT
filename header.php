<div class="header">
     <div class="container">
         <div class="logo">
             <a href="index.php"><h1>ODJMS</h1></a>
         </div>
         <div class="top-menu">
            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<ul>
  <li class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">
    <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
  </li>
  <li class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">
    <a href="about.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>About</a>
  </li>
  <li class="<?= ($current_page == 'services.php') ? 'active' : '' ?>">
    <a href="services.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Services</a>
  </li>
  <li class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">
    <a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact</a>
  </li>
  <li class="<?= ($current_page == 'login.php' || $current_page == 'admin/login.php') ? 'active' : '' ?>">
    <a href="admin/login.php"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>Admin</a>
  </li>
</ul>
         </div>
         <div class="clearfix"></div>
     </div>
</div>