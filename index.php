<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/elektron/init.php';
  include 'includes/head.php';

  $nav = "SELECT * FROM navigation";
  $navquery = $db->query($nav);
?>

<div class="page-wrapper">

  <div class="fixed-nav">
    <a class="logo" href="index.php"><img src="images/elektron-logo.png" alt="" /></a>
    <nav>
      <ul>
        <?php while($navigation = mysqli_fetch_assoc($navquery)) : ?>
          <li><a href="<?php echo $navigation['link'];?>" title="<?php echo $navigation['titel'];?>"><?php echo $navigation['kategori']; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </nav>
  </div>

  <div class="page-content">

  </div>

</div>

<?php include 'includes/footer.php'; ?>
