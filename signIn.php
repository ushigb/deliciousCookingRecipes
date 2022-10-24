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
                <h1 class="regTitle">РЕГИСТРАЦИЯ</h1>
                <form method="post" action="signIn.php" class="row  g-3 needs-validation" novalidate>
                    <div class="col-md-12 position-relative">
                        <?php echo display_error(); ?>
                        <label class="form-label">Име*</label>
                        <input type="text" class="form-control" name="firstName" id="validationTooltip01" value="<?php echo $firstName; ?>">
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Фамилия</label>
                        <input type="text" class="form-control" name="lastName" id="validationTooltip02" value="<?php echo $lastName; ?>" >
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Град</label>
                        <input type="text" class="form-control" name="city" id="validationTooltip03" value="<?php echo $city; ?>" >
                    </div>  
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Пощенски код</label>
                        <input type="text" class="form-control" name="postCode" id="validationTooltip05" value="<?php echo $postCode; ?>" >
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Email*</label>
                        <div class="input-group has-validation" value="<?php echo $email; ?>" >     
                            <input type="text" class="form-control" name="email" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend">
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Потребителско име*</label>
                        <div class="input-group has-validation">     
                            <input type="text" class="form-control" name="username" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Парола*</label>
                        <div class="input-group has-validation">     
                            <input type="text" class="form-control" name="password" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        </div>
                    </div>
                    <div class="col-md-12 position-relative">
                        <label class="form-label">Повтори Парола*</label>
                        <div class="input-group has-validation">     
                            <input type="text" class="form-control" name="repeatPassword" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="register_btn">Запази</button>
                    </div>
            </div>
            <div class="col-md-3"></div>
            </form>
        </div>
    </div>
</div>
