<?php
include 'functions.php';
include 'header.php';
include 'head.php';
?>

<div class="container-fluid bodyContent">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row reg">
                <h1 class="regTitle">ВЛЕЗ В ПРОФИЛА</h1>
                <form method="post" action="logIn.php" class="row g-3 needs-validation" novalidate>
                    <?php echo display_error(); ?>
                    <div class="input-group-access">
                        <input type="hidden" name="user_id" >
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Потребителско име</label>
                        <div class="input-group ">     
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Парола</label>
                        <div class="input-group ">     
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-primary" type="submit" name="login_btn">Влез</button>
                    </div>
                    <div class="col-6">
                        <a class="newUser" href="signIn.php" name="register" >Нов Потребител</a>
                        <a class="backBtn" href="index.php" name="back">Назад</a>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

