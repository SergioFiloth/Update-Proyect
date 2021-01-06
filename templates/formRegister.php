<form method="POST" autocomplete="off">
    <?php echo isset($logalert) ? $logalert : ""; ?>
    <div class="names">
        <div class="cFName">
            <label for="fName" class="label">First Name</label>
            <input type="text" name="fname" id="fName" placeholder="First Name" class="input">
        </div>
        <div class="lFName">
            <label for="lName" class="label">Last Name</label>
            <input type="text" name="lname" id="lName" placeholder="Last Name" class="input">
        </div>
    </div>
    <label for="email" class="label">Email</label>
    <input type="email" name="email" id="email" placeholder="Example: info@yourcompany.com" class="input">
    <label for="password" class="label">Password</label>
    <input type="password" name="pass" id="password" placeholder="Password" class="input">
    <span>
        By Registering, You Agree To <a href="/privacy.php" class="formLinks">The Privacy Policy</a>, <a
            href="/refunds.php" class="formLinks">Refund Policy</a> & <a href="/term.php"
            class="formLinks">Terms Of
            Services.</a>
    </span>
    <div class="submit">
        <input type="submit" value="Register Now" class="btn" name="register">
    </div>
</form>