<?php
$title="Chat...";
require_once "init.php";
?>
<div class="col-11 col-lg-4 users-box row">
        <a href="#" class="badge badge-secondary col-2 col-lg-1" style="height: 25px"><svg width="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></a>
    <div class="user-box col-10 col-lg-11">
        <img src="assets/img/user-00.jpg">
        <div>
            <p>Mohammad mahdi
                <br>
                <span class="badge badge-pill badge-success"> </span>
            </p>
        </div>
    </div>

    <hr width="85%"/>
    <div class="col-12">
        <div class="chat outgoing">
            <div>
                <p>Hi buddy, How are you?</p>
            </div>
        </div>
        <div class="chat incoming">
            <div>
                <p>Hi buddy, How are you too?</p>
            </div>
        </div>


</div>
<?php
require_once "footer.php";
?>