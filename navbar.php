<nav class="nav nav-pills nav-justified bg-primary">
  <a class="nav-item nav-link text-light" href="home.php"><i class="fas fa-home"></i> Home</a>
  <a class="nav-item nav-link text-light" href="werk.php"><i class="fas fa-briefcase"></i> Mijn werk</a>
  <a class="nav-item nav-link text-light" href="skill.php"><i class="fas fa-user-graduate"></i> Mijn skill</a>
  <a class="nav-item nav-link text-light" href="overmij.php"><i class="fas fa-user-tag"></i> Over mij</a>
  <a class="nav-item nav-link text-light" href="gallery.php"><i class="fas fa-grip-horizontal"></i> gallery</a>
  <a class="nav-item nav-link text-light" href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
  <a class="nav-item nav-link text-light disabled" href="contact.php"><i class="fas fa-clock"></i>
  <?php
  date_default_timezone_set("Europe/Amsterdam");
  echo date('G:i');
  ?></a>
</nav>
