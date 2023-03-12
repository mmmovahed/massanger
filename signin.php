<?php
$title="Sign in";
require_once 'init.php';
?>
    <div class="signin-box col-11 col-lg-4">

        <?php
        if (isset($_POST["btn"]))
        {
            if (!empty($_POST["phone"]) && !empty($_POST["name"]) && !empty($_POST["password"])) {
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $sql = "SELECT * FROM users WHERE phone=:phone";
                $state = $conn->prepare($sql);
                $state->execute(['phone' => $phone]);
                $result = $state->fetch();
                if (empty($result)) {
                    $password = $_POST["password"];
                    $date = date("Y-m-d--h:i:s");
                    $sql = "SELECT FROM users WHERE phone=$phone";

                    if (!empty($_POST["img"])) {
                        $img = $_POST["img"];
                        $sql = "INSERT INTO `users`(`name`, `password`, `phone`, `img`, `last_login`, `reg_date`, `status`)
 VALUES ('$name','$password','$phone','$img','$date','$date',1)";
                    } else {
                        $sql = "INSERT INTO `users`(`name`, `password`, `phone`, `last_login`, `reg_date`, `status`)
 VALUES ('$name','$password','$phone','$date','$date',1)";
                    }


                    $conn->exec($sql);
                    echo "<div class='alert alert-light'>Successfully<hr/>Login with info just entered</div>";
                }
                else
                {
                    print "<div class='alert alert-danger'>This phone number has already existed!</div>";
                }
            }
            else
            {
                print "<div class='alert alert-info'>Fill the empty filed</div>";
            }
        }
        ?>
        <form action="" method="post">
            <div style="margin: 0 auto">
                <img src="assets/img/logo.png" style="background: rgba(0,0,0,0);border: none;width: 30%" class="img-thumbnail">
            </div>
            <hr width="50"/>
            <input  name="phone" placeholder="PhoneNumber" class="input-form">
            <br>
            <input required name="name" placeholder="Name" class="input-form">
            <br>
            <input required name="password" placeholder="Password" type="password" class="input-form">
            <br>
            <script src="assets/js/icon.js"></script>
            <div class="upload-box">
                <label class="upload-label" for="inputTag">
                    Select Image <br/>
                    <i class="fa fa-2x fa-camera"></i>
                    <input name="img" class="inputTag" id="inputTag" type="file"/>
                    <br/>
                    <span id="imageName"></span>
                </label>
            </div>

            <script>
                let input = document.getElementById("inputTag");
                let imageName = document.getElementById("imageName")

                input.addEventListener("change", ()=>{
                    let inputImage = document.querySelector("input[type=file]").files[0];

                    imageName.innerText = inputImage.name;
                })
            </script>
            <br>
            <button name="btn" type="submit" class="btn btn-outline-primary col-6">Signin</button>
            <br>
            <br>
            <a href="login.php">Have you signin?</a>
        </form>
    </div>
<?php
require_once 'footer.php';
?>