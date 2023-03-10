<?php
require_once 'init.php';
?>
    <div class="signin-box col-11 col-lg-4">
        <div style="margin: 0 auto">
            <img src="assets/img/logo.png" style="background: rgba(0,0,0,0);border: none;width: 30%" class="img-thumbnail">
        </div>
        <hr width="50"/>
        <input placeholder="PhoneNumber" class="input-form">
        <br>
        <input placeholder="Name" class="input-form">
        <br>
        <input placeholder="Password" type="password" class="input-form">
        <br>
        <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
        <div class="upload-box">
            <label class="upload-label" for="inputTag">
                Select Image <br/>
                <i class="fa fa-2x fa-camera"></i>
                <input class="inputTag" id="inputTag" type="file"/>
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
        <button type="submit" class="btn btn-outline-primary col-6">Signin</button>
        <br>
        <br>
        <a href="login.php">Have you signin?</a>
    </div>
<?php
require_once 'footer.php';
?>