<?php
    $title="Hi Messenger";
    require_once 'init.php';
?>
<?php
if (!isset($_COOKIE["Himsg"]) || empty($_COOKIE["Himsg"]))
    header("Location:login.php");
?>
<div class="col-11 col-lg-4 users-box row">
    <div class="user-box col-9 col-lg-9">
        <img src="assets/img/user-00.jpg">
        <div>
            <p>Mohammad mahdi
                <br>
                <span class="badge badge-pill badge-success"> </span>
            </p>
        </div>
    </div>
    <div class="col-3 col-lg-3" style="padding-right: 5px">
        <button class="col-10 btn btn-sm btn-secondary">Logout</button>
    </div>
    <hr width="85%"/>
    <div class="col-12" style="margin: 0 auto">
        <input type="text" class="search-input col-10" placeholder="Looking for ...">
        <button class="btn btn-secondary col-2 search-box"><i class="fa fa-search"></i></button>
    </div>
    <br>
    <br>
    <div class="col-12 chats">
        <hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-02.jpg">
                <div>
                    <p>zahra
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div>
        <hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-img.PNG">
                <div>
                    <p>alireza
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div><hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-img.PNG">
                <div>
                    <p>alireza
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div>
        <hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-img.PNG">
                <div>
                    <p>alireza
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div>
        <hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-01.jpg">
                <div>
                    <p>alireza
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div>
        <hr width="80%"/>
        <div class="contact-box col-12">
            <div class="contact-box col-9 col-lg-9">
                <img src="assets/img/user-img.PNG">
                <div>
                    <p>alireza
                        <br>
                        <span>a line of text...</span>
                    </p>

                </div>
            </div>
            <div class="col-3 col-lg-3" style="padding-right: 5px">
                <span class="badge badge-pill badge-info num-text">5</span>
            </div>
        </div>
    </div>
</div>

</div>
<?php
require_once 'footer.php';
?>
