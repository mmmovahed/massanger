<?php
require_once 'init.php';
?>
<div class="login-box col-11 col-sm-11 col-md-6 col-lg-4">
    <div style="margin: 0 auto">
        <img src="assets/img/logo.png" style="background: rgba(0,0,0,0);border: none;width: 30%" class="img-thumbnail">
    </div>
    <hr width="50"/>
    <input placeholder="PhoneNumber" class="input-form">
    <br>
    <input placeholder="Password" class="input-form">
    <br>
    <br>
    <button type="submit" class="btn btn-outline-primary col-6">Login</button>
    <br>
    <br>
    <a href="signin.php">Not signin yet?</a>
</div>
<?php
require_once 'footer.php';
?>