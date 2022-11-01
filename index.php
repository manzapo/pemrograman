<?php
$title = 'Homepage';

include 'header.php';
?>

<div class="container">
  <h1 class="border-bottom">
    <?php
     echo $title;
    ?>
  </h1>

  <p>
    Hello
    <?php
    if ( isset( $_GET['nama'] ) )
    {
      echo $_GET['nama'];
    } else {
      echo 'nama tidak dikenal';
    }
    
    ?>
  </p>
  <!-- contoh : index.php?nama=NAMA KAMU SENDIRI -->

  <!-- buat link untuk menuju halaman login disini -->
  <a href="login.php" class="btn btn-success">
    Ke Halaman Login
  </a>
</div>

<?php
include 'footer.php';