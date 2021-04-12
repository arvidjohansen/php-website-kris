<?php
    include_once 'header.php';
?>

<section class="box">
<?php
  if (isset($_SESSION["useruid"])) {
    echo "<h1><a href='signup.php'>Profile page</a></h1>";
    echo "<h1><a href='login.php'>Logout</a></h1>";
  }
  else {
    echo "<h1><a href='signup.php'>signup</a></h1>";
    echo "<h1><a href='login.php'>login</a></h1>";
  }
?>
</section>


<?php
    include_once 'footer.php';
?>