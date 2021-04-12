<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="style.css">

    <section class="sign-form, box">
        <h1>Sign Up</h1>
		<?php
			if(isset($_GET["usernametaken"])){
			echo "Username taken";
			}
			if(isset($_GET["emptyinput"])){
			echo "You must fill in all fields";
			}
		?>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">    
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <input type="submit" name="submit" value="Signup">
            <button class="buttonregistert"> <a href="login.php">Registerd?</a></button>
            <button> <a href="index.php">Home</a></button>
        </form>
        <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if($_GET["error"] == "invaliduid") { 
            echo "<p>Choose a proper username!</p>";
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