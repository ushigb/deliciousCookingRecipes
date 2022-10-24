<?php

session_start();

$db = mysqli_connect('localhost', 'root', '', 'deliciousCookingRecipes');

$firstName = "";
$lastName = "";
$city = "";
$postCode = "";
$username = "";
$email = "";
$errors = array();





if (isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register() {

    global $db, $errors, $firstName, $lastName, $city, $postCode, $username, $email;

    $firstName = e($_POST['firstName']);
    $lastName = e($_POST['lastName']);
    $city = e($_POST['city']);
    $postCode = e($_POST['postCode']);
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password']);
    $repeatPassword = e($_POST['repeatPassword']);
    $firstName_escape = mysqli_real_escape_string($db, $firstName);
    $lastName_escape = mysqli_real_escape_string($db, $lastName);
    $city_escape = mysqli_real_escape_string($db, $city);
    $username_escape = mysqli_real_escape_string($db, $username);
    $q = mysqli_query($db, 'SELECT * FROM users WHERE 
          username="' . $username_escape . '"');

    if (empty($firstName)) {
        array_push($errors, "Изисква се Име");
    }
    if (empty($username)) {
        array_push($errors, "Изисква се потребителско име");
    }
    if (empty($email)) {
        array_push($errors, "Изисква се имейл");
    }
    if (empty($password_1)) {
        array_push($errors, "Изисква се парола");
    }
    if (mb_strlen($username) < 3) {
        array_push($errors, "Потребителското име е прекалено късо");
    }
    if (mysqli_num_rows($q) > 0) {
        array_push($errors, "Има такъв потребител");
    }
    if ($password_1 != $repeatPassword) {
        array_push($errors, "Паролата не съвпада");
    }
    if (mb_strlen($password_1) <= 8) {
        array_push($errors, "Паролата трябва да е минимум 8 символа!");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (firstName, lastName, city, postCode, email, userName, password, userType ) 
					  VALUES('$firstName', '$lastName', '$city',"
                . " '$postCode', '$email', '$username', '$password', 'user')";
        mysqli_query($db, $query);

        $logged_in_user_id = mysqli_insert_id($db);

        $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
if (isset($_POST['login_btn'])) {
    login();
}
// LOGIN USER
function login() {
    global $db, $username, $errors;

    
    $id = e($_POST['user_id']);
    $username = e($_POST['username']);
    $password = e($_POST['password']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE userName='$username' AND password='$password'  ";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {

            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['userType'] == 'Admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";
                header('location:index.php');
            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";

                header('location: index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

function isAdmin() {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function getUserById($id) {
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

function e($val) {
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: logIn.php");
}