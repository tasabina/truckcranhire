<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul id="nav">
        <li><a href="index.php" <?php if ($currentPage == 'index.php'){echo 'id="here"';} ?>>Home</a></li>
        <li><a href="about.php" <?php if ($currentPage == 'about.php'){echo 'id="here"';} ?>>About</a></li>
        <li><a href="gallery.php" <?php if ($currentPage == 'gallery.php'){echo 'id="here"';} ?>>Gallery</a></li>
        <li><a href="contact.php" <?php if ($currentPage == 'contact.php'){echo 'id="here"';} ?>>Contact</a></li>
</ul>