<?php
    include_once 'header.php';
?>

<section class="box">
<form action="includes/login.inc.php" method="post">
  <h1>Login</h1>
  <input type="text" name="uid" placeholder="Username">
  <input type="password" name="pwd" placeholder="Password">
  <input type="submit" name="submit" value="Login">
  <button> <a href="signup.php">Not registerd?</a></button>
  <button> <a href="index.php">Home</a></button>
  </form>
  <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "wronglogin") { 
            echo "<p>Not good login boia.</p>";
        }
        else if($_GET["error"] == "invalidemail") { 
            echo "<p>Choose a proper email!</p>";
        }
        else if($_GET["error"] == "passworddontmatch") { 
            echo "<p>Passwords do not no good.</p>";
        }
        else if($_GET["error"] == "stmtfailed") { 
            echo "<p>Something is wrong boi.</p>";
        }
        else if($_GET["error"] == "usernametaken") { 
            echo "<p>Name is no, choose another</p>";
        }
        else if($_GET["error"] == "none") { 
            echo "<p>Good boy.</p>";
        }
    }
    ?>
</section>

<?php
    include_once 'footer.php';
?>