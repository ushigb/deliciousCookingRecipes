<?php

include 'header.php';
?>
<div class="container-fluid headStyle">
    <div class="container">
    <div class="row">
        <div class="col-md-2 logo ">
            <a href="index.php">
                <img class="navbar-brand" src="img/logo/DeliciousCookingRecipes-logo.png" alt=""></a>
        </div>
        <div class="col-md-4 btnMenu">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Закуска</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Бърза Закуска</a></li>
                    <li><a class="dropdown-item" href="#">Здравословна Закуска</a></li>
                    <li><a class="dropdown-item" href="#">Интересна Закуска</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Обяд</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Здравословен Обяд</a></li>
                    <li><a class="dropdown-item" href="#">Деликатесен Обяд</a></li>
                    <li><a class="dropdown-item" href="#">Лесни Рецепти за Обяд</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Вечеря</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Бърза Вечеря</a></li>
                    <li><a class="dropdown-item" href="#">Здравословна Вечеря</a></li>
                    <li><a class="dropdown-item" href="#">Интересна Вечеря</a></li>
                    <li><a class="dropdown-item" href="#">Аламинути</a></li>
                </ul>
            </div>    
        </div>
        <div class="col-md-4 search">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <?php
    if (!$_SESSION) {
        ?>
        <div class="col-md-2 logSignMenu">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary btnLogIn" href="logIn.php" role="button">Log In</a>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary aLogIn" href="signIn.php" role="button">Sign In</a>
                </div>
            </div>
        </div>
        <?php
} else {
    ?>
        <div class="col-md-2 logSignMenu">
      <div class="row">
        <div class="col-md-6 nav-link ">
            <h5><strong class="nav-link"><?php echo $_SESSION['user']['userName']; ?></strong></h5>
            <small>
                <h6><i class="nav-link"  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['userType']); ?>)</i></h6> 
                <br>
            </small>
            <h6><a class="logout" href="index.php?logout='1'" role="button">logout</a></h6>
        </div> 
        <div class="col-md-6 ">               
            <?php if (isset($_SESSION['user'])) : ?>
                <div >                
                    <img class="profile_img" src= <?php echo $_SESSION['user']['profilePic']; ?> >                
                </div> 
            </div>            
        <?php endif ?>        
    </div>  </div>
    </div>
<?php
}?>
        </div>
</div>

 

