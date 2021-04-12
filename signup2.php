<?php
    include_once 'header.php';
?>


    <section class="sign-form">
        <h1>Sign Up</h1>
        <form action="http://vg.no" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">    
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <input type="submit" name="submit" value="Signup">
            <input type="submit" name="" value="Registered">
        </form>
    </section>

<?php
    include_once 'footer.php';
?>