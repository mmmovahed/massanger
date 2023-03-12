<?php
require_once 'init.php';
?>

<div class="login-box col-11 col-sm-11 col-md-6 col-lg-4">
    <?php
    if(isset($_POST["btn"])) {
        if (!empty($_POST["phone"]) && !empty($_POST["pass"])) {
            $phone=$_POST["phone"];
            $password=$_POST["pass"];
            $sql="SELECT * FROM users WHERE phone=:phone && password = :password";
            $state=$conn->prepare($sql);
            $state->execute([':phone'=>$phone,':password'=>$password]);
            $result=$state->fetch();
            if (!empty($result))
            {
                echo "<div class='alert alert-success'>Welcome</div>";
                setcookie("Himsg",$phone,time()+31104000,'/');
                header("Location:index.php");
            }
            else{
                echo "<div class='alert alert-warning'>There is no user with this information</div>";
            }

        } else {
            echo "<div class='alert alert-warning'>Fill the empty filled</div>";
        }
    }
    ?>
    <form action="" method="post">
        <div style="margin: 0 auto">
            <img src="assets/img/logo.png" style="background: rgba(0,0,0,0);border: none;width: 30%" class="img-thumbnail">
        </div>
        <hr width="50"/>
        <input name="phone" placeholder="PhoneNumber" class="input-form">
        <br>
        <input name="pass" placeholder="Password" type="password" class="input-form">
        <br>
        <br>
        <button name="btn" type="submit" class="btn btn-outline-primary col-6">Login</button>
        <br>
        <br>
        <a href="signin.php">Not signin yet?</a>
    </form>

</div>
<?php
require_once 'footer.php';
?>